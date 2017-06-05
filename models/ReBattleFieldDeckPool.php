<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Redis 战场玩家卡牌池类
 *
 *
 */

/*
    l_deck_pool_x{battle_id}_x{uid} => [
        '585a47bc7f8b9a43058b4567', //顶部卡牌
        '585a47bc7f8b9a43058b4567'
        ...
    ]

*/
class ReBattleFieldDeckPool extends Model
{
    public $tableName = 'l_deck_pool_';

    public function __construct($battle_id, $player_id)
    {
        $this->tableName = $this->tableName . $battle_id . '_' . $player_id;
    }

    /*
        开局初始化牌库
    */
    public function init($card_list)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $duplicate = $redis->conn->Llen($this->tableName);
            if ($duplicate) {
                $ret_msg = ['ok' => false, 'msg' => '牌池非空，不能重新初始化'];
            } else {
                foreach ($card_list as $card_id) {
                    $length = $redis->conn->Lpush($this->tableName, $card_id);
                }
                $ret_msg = ['ok' => true, 'msg' => '牌池初始化完成'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        获取牌库长度
    */
    public function getLength()
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $length = $redis->conn->Llen($this->tableName);
            $ret_msg = ['ok' => true, 'msg' => '获取成功', 'data' => $length];
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }
}
