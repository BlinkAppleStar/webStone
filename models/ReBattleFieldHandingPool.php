<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Redis 战场玩家手牌池类
 *
 *
 */

/*
    l_handing_pool_x{battle_id}_x{uid} => [
        '585a47bc7f8b9a43058b4567',// card_id
        '585a47bc7f8b9a43058b4567'
        ...
    ]

*/
class ReBattleFieldHandingPool extends Model
{
    public $tableName = 'l_handing_pool_';

    public function __construct($battle_id, $player_id)
    {
        $this->tableName = $this->tableName . $battle_id . '_' . $player_id;
    }

    /*
        开局初始化手牌
    */
    public function init($card_list)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $duplicate = $redis->conn->Llen($this->tableName);
            if ($duplicate) {
                $ret_msg = ['ok' => false, 'msg' => '手牌非空，不能重新初始化'];
            } else {
                foreach ($card_list as $card_id) {
                    $length = $redis->conn->Lpush($this->tableName, $card_id);
                }
                $ret_msg = ['ok' => true, 'msg' => '手牌初始化完成'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }
}
