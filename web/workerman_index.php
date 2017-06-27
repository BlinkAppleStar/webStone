<?php 
use Workerman\Worker;
use app\models\ReBattleFieldQueue;
use app\models\ReBattleField;
use app\models\ReUserWSMap;
use app\models\ReWSUserMap;
use app\models\MgBattle;
use yii\helpers\Json;
//phpinfo();

require_once(__DIR__ . '/../config/function.php');
require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config_dev = __DIR__ . '/../config/dev.php';
$config_prod = __DIR__ . '/../config/prod.php';
error_reporting(E_ALL  ^  E_NOTICE);
if (file_exists($config_dev)) {
    //define('IS_DEV_SITE', true);
    //define('IS_PROD_SITE', false);
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
    //ini_set('display_errors','1');

    $config_file = $config_dev;
} else {
    //ini_set('display_errors','0');
    $config_file = $config_prod;
}

$config = require_once($config_file);

$class_map_arr = require_once(__DIR__ . '/../config/class_map.php');
Yii::$classMap = array_merge(Yii::$classMap, $class_map_arr);

(new yii\web\Application($config))->init();

////////////////////YII初始化结束//////////////////////////
require_once(__DIR__ . '/../vendor/Workerman/Autoloader.php');

// 创建一个Worker监听2346端口，使用websocket协议通讯
$ws_worker = new Worker("websocket://0.0.0.0:2346");

// 启动4个进程对外提供服务
$ws_worker->count = 4;
$global_id = 0;

// 当客户端连上来时分配connect_id，并保存连接，
function handle_connection($connection) {
    global $ws_worker, $global_id;
    $connection->connect_id = ++$global_id;
} 

$ws_worker->onConnect = 'handle_connection';

// 当收到客户端发来的数据后返回hello $data给客户端
$ws_worker->onMessage = function($connection, $incoming_string)
{
    global $ws_worker;
    error_reporting(0);
    $params = Json::decode($incoming_string);
    $ret_connections = [];

    switch ($params['action']) {
        case 'update_connection': // 更新链接

            $map = new ReUserWSMap();
            $ret_msg = $map->update($params['uid'], $connection->connect_id);
            break;

        case 'user_join_battle_queue': // 加入战场队列

            $queue = new ReBattleFieldQueue();
            $ret_msg = $queue->input($params['deck_id']);
            break;

        case 'user_match_battle_queue': // 战场队列匹配

            $queue = new ReBattleFieldQueue();
            $ret_msg = $queue->match();

            if ($ret_msg['ok']) {
                $map = new ReUserWSMap();
                $ret_connections = $map->getConnByUid(array_values($ret_msg['data']));
            }

            break;

        case 'user_init_deck': // 洗牌

            $battle = new MgBattle();
            $battle_info = $battle->getCurrentByUid($params['uid']);
            $ret_msg = $battle->initDeck($params['uid'], $params['remaining_cards']);
            if ($ret_msg['ok']) {
                $ret_msg = $battle->checkOpponentReadyByUid($params['uid']);
                if ($ret_msg['ok']) {
                    $redis_battle = new ReBattleField();
                    $start_res = $redis_battle->startRound($battle_info['data']['_id']);
                    if (!$start_res['ok']) {
                        $ret_msg = $start_res;
                    } else {
                        $opponent_uid = $ret_msg['data'];
                        $map = new ReUserWSMap();
                        $ret_connections = $map->getConnByUid($opponent_uid);
                        $ret_msg['data'] = 'jump_to_battle';
                    }
                } else {
                    $ret_msg = ['ok' => true, 'msg' => '已就绪，等待对手选牌', 'data' => 'waiting'];
                }
            }
            break;

        case 'end_round': //回合结束
            $redis_battle = new ReBattleField();
            $ret_msg = $redis_battle->endRound($params['battle_id'], $params['uid']);
            $map = new ReUserWSMap();
            $ret_connections = $map->getConnByUid($ret_msg['data']['opponent_id']);
            $ret_connections[] = $connection->connect_id;
            break;

        case 'draw_card': // 抽一张牌
            $redis_battle = new ReBattleField();
            $ret_msg = $redis_battle->drawCardFor($params['battle_id'], $params['uid']);
            $map = new ReUserWSMap();
            $ret_connections = $map->getConnByUid($ret_msg['data']['opponent_id']);
            $ret_connections[] = $connection->connect_id;

            break;

        default:
            break;
    }

    $ret_msg['request'] = $params;

    // 广播或单独回复
    if ($ret_connections) {
        foreach ((array) $ret_connections as $ret_connect_id) {
            foreach ($ws_worker->connections as $conn) {
                if ($conn->connect_id == $ret_connect_id) {
                    $conn->send(Json::encode($ret_msg));
                }
            }
        }
    } else {
        $connection->send(Json::encode($ret_msg));
    }
};

function handle_close($connection) {
    global $ws_worker;
    $map = new ReWSUserMap();
    $map->close($connection->connect_id);
}
$ws_worker->onClose = 'handle_close';

// 运行worker
Worker::runAll();