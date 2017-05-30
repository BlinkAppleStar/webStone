<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Redis 战场基本信息类
 *
 *
 */

/*
    h_battle_field => [
        '585a47bc7f8b9a43058b4567' => { // battle_id为键
            "player_1" : "585a47bc7f8b9a43058b4567", // 玩家1 先手
            "player_2" : "585a47bc7f8b9a43058b4567", // 玩家2
            "player_1_hp" : 30, // 当前玩家1血量
            "player_2_hp" : 28, // 当前玩家2血量
            "round_player" : 1, // 当前谁的回合
            "round_cnt" : 1, // 当前第几回合
            "mana_1_max" : 3, // 玩家1法力值上限
            "mana_2_max" : 4, // 玩家2法力值上限
            "mana_1" : 2, // 玩家1剩余法力值
            "mana_2" : 1, // 玩家2剩余法力值
            "state" : 0, // 0:准备阶段，1：进行中，2：结束

            //"player_1_round_rest_time"
        }
        ...
    ]

*/
class ReBattleField extends Model
{
    public $tableName = 'h_battle_field';

    /*
        创建战场
    */
    public function create($battle_id, $params)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hget($this->tableName, $battle_id);
            if ($res) {
                $ret_msg = ['ok' => false, 'msg' => '创建失败, 重复战场ID'];
            } else {
                $attributes = [
                    'player_1'      => $params['player_1'],
                    'player_2'      => $params['player_2'],
                    'player_1_hp'   => 30,
                    'player_2_hp'   => 30,
                    'round_player'  => 0,
                    'round_cnt'     => 0,
                    'mana_1_max'    => 0,
                    'mana_2_max'    => 0,
                    'mana_1'        => 0,
                    'mana_2'        => 0,
                    'state'         => 0,
                ];


                $res = $redis->conn->Hset($this->tableName, $battle_id, Json::encode($attributes));
                if ($res) {
                    $ret_msg = ['ok' => true, 'msg' => '创建成功'];
                } else {
                    $ret_msg = ['ok' => false, 'msg' => '创建失败'];
                }
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        关闭战场
    */
    public function close($battle_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hdel($this->tableName, $battle_id);
        } else {
            $res = false;
        }

        return $res;
    }

}
