<?php 
use Workerman\Worker;
use app\models\MgDeck;

require_once(__DIR__ . '/../config/function.php');
require_once(__DIR__ . '/../vendor/Workerman/Autoloader.php');
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
    //xmp('prod');
    $config_file = $config_prod;
}

$config = require_once($config_file);

$class_map_arr = require_once(__DIR__ . '/../config/class_map.php');
Yii::$classMap = array_merge(Yii::$classMap, $class_map_arr);

(new yii\web\Application($config))->init();


// 创建一个Worker监听2346端口，使用websocket协议通讯
$ws_worker = new Worker("websocket://0.0.0.0:2346");

// 启动4个进程对外提供服务
$ws_worker->count = 4;

// 当收到客户端发来的数据后返回hello $data给客户端
$ws_worker->onMessage = function($connection, $data)
{
    $model = new MgDeck();

    $res = $model->findByPk('591a7c217f8b9a3c058b4567');

    // 向客户端发送hello $data
    $connection->send('hello ' . $data);
};

// 运行worker
Worker::runAll();