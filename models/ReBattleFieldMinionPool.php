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
class ReBattleFieldMinionPool extends Model
{
    public $tableName = 'l_minion_pool';

    public function __construct($battle_id, $player_id)
    {
        $this->tableName = $this->tableName . $battle_id . '_' . $player_id;
    }

    /*
        
    */
}
