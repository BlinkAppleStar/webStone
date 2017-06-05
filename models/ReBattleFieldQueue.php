<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Redis 战场队列类
 *
 *
 */

/*
    z_battle_field_queue => [{
            "zscore" : MMR, // 队列玩家MMR值作为分数权重
            "manager_id" : "585a47bc7f8b9a43058b4567", // 玩家ID
        }
        ...
    ]

*/
class ReBattleFieldQueue extends Model
{
    public $tableName = 'z_battle_field_queue';

    /*
        将指定玩家及选择的套牌加入队列
    */
    public function input($deck_id)
    {
        $deck_model = new MgDeck();
        $res = $deck_model->findByPk($deck_id);
        if (!$res) {
            $ret_msg = ['ok' => false, 'msg' => '无效的套牌'];
        } else {
            $manager_model = new MgManager();

            $redis_user_deck = new ReBattleFieldDeck();
            $allow_join = $redis_user_deck->allowJoinUid($deck_model->attributes['manager_id']);
            if (!$allow_join['ok']) {
                $ret_msg = $allow_join;
            } else {
                $redis = Yii::$app->Rdb;
                if ($redis->isConnected() || $redis->connect()) {
                    $redis->conn->Zadd($this->tableName, $manager_model->getMMR($deck_model->attributes['manager_id']), $deck_model->attributes['manager_id']);
                    $redis_user_deck->insertDeck($deck_model->attributes, $deck_model->attributes['manager_id']);
                } else {
                    $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败', 'data' => ''];
                }
                


                // 通知事件有玩家加入队列


                $ret_msg = ['ok' => true, 'msg' => '已进入队列'];
            }
        }

        return $ret_msg;
    }

    /*
        匹配玩家出队列
    */
    public function match()
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $matched_uids = $redis->conn->Zrange($this->tableName, 0, 1);
            if (count($matched_uids) != 2) {
                $ret_msg = ['ok' => false, 'msg' => '玩家不足'];
            } else {
                $deck_model = new ReBattleFieldDeck();
                $deck_1 = $deck_model->getDeckByUid($matched_uids[0]);
                $deck_2 = $deck_model->getDeckByUid($matched_uids[1]);

                if (!$deck_1['ok']) {
                    $ret_msg = $deck_1;
                } elseif (!$deck_2['ok']) {
                    $ret_msg = $deck_2;
                } else {
                    $battle_model = new MgBattle();
                    $battle_model->attributes = [
                        'player_1'      => $matched_uids[0],
                        'player_2'      => $matched_uids[1],
                        'start_time'    => time(),
                        'end_time'      => 0,
                        'deck_1'        => $deck_1['data'],
                        'deck_2'        => $deck_2['data'],
                        'state'         => MgBattle::STATE_READY,
                        'winner'        => '',
                    ];

                    $res = $battle_model->save();
                    if (!$res) {
                        $ret_msg = ['ok' => false, 'msg' => '战场创建失败'];
                    } else {
                        $battle_id = $battle_model->mongo_id->__toString();
                        $battle_field_model = new ReBattleField();
                        $ret_msg = $battle_field_model->create($battle_id, ['player_1' => $matched_uids[0], 'player_2' => $matched_uids[1]]);

                        if ($ret_msg['ok']) {
                            $redis->conn->Zrem($this->tableName, $matched_uids[0]);
                            $redis->conn->Zrem($this->tableName, $matched_uids[1]);
                            $ret_msg = ['ok' => true, 'msg' => '战场配对完成', 'data' => [
                                'player_1'  => $matched_uids[0],
                                'player_2'  => $matched_uids[1],
                            ]];
                        }
                    }
                }
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }
}
