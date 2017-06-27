<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Redis 战场玩家卡牌池类
 *
 *
 */

/*
    l_deck_pool_x_x => [
        '585a47bc7f8b9a43058b4567' => { // battle_id为键
            "player_1" : "585a47bc7f8b9a43058b4567", // 玩家1
            "player_2" : "585a47bc7f8b9a43058b4567", // 玩家2
            "player_1_hp" : 30, // 当前玩家1血量
            "player_2_hp" : 28, // 当前玩家2血量
            "player_1_handing_cards_queue" : [],
            "player_2_handing_cards_queue" : [],
            "player_1_minion_list" : [],
            "player_2_minion_list" : [],
            "player_1_deck_cards_queue" : [],
            "player_2_deck_cards_queue" : [],
            "player_1_hero_skill_id" : "",
            "player_1_hero_skill_state" : 1,
            "player_2_hero_skill_id" : "",
            "player_2_hero_skill_state" : 1,
            "player_1_weapon" : [],
            "player_2_weapon" : [],

            //"player_1_round_rest_time"
        }
        ...
    ]

*/
class ReBattleFieldWeaponPool extends Model
{
    public $tableName = 'l_weapon_pool_';

    public function __construct($battle_id, $player_id)
    {
        $this->tableName = $this->tableName . $battle_id . '_' . $player_id;
    }

    /*
        开局初始化牌库
    */
    public function init()
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $duplicate = $redis->conn->Llen($this->tableName);
            if ($duplicate) {
                $ret_msg = ['ok' => false, 'msg' => '牌池非空，不能重新初始化'];
            } else {
                
                $ret_msg = ['ok' => true, 'msg' => '可以加入'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }
}
