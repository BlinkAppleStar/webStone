<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Redis 战场玩家正在使用套牌类
 *
 *
 */

/*
    h_user_battle_field_deck => [
        'manager_id' => { // 玩家正在使用的牌库
            "_id" : {
                "$_id" : "591a7c217f8b9a3c058b4567"
            },
            "name": "套牌名",
            "cards" : {
                "5919652c7f8b9afc118b4573" : {
                    "_id": "5919652c7f8b9afc118b4573",
                    "name" : "卡名",
                    "type" : "minion",
                    "mana" : "1",
                    "damage" : "1",
                    "hp" : "1",
                    "skill_desc" : "",
                    "skill_id" : "",
                    "career" : "neutral",
                    "level" : "0",
                    "image" : "xxx.png",
                    "updated_time" : 1494836524,
                    "cnt" : 2,
                },
                ...
            },
            "hero_id" : "5910659f7f8b9a3c058b4568",
            "career" : "warrior",
            "manager_id" : "591053107f8b9a3e058b4567",
            "created_time" : created_time
        }
        ...
    ]

*/
class ReBattleFieldDeck extends Model
{
    public $tableName = 'h_user_battle_field_deck';

    /*
        获取指定玩家正在使用的套牌
    */
    public function getDeckByUid($uid)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $deck_json = $redis->conn->Hget($this->tableName, $uid);
            $deck = Json::decode($deck_json);
            if ($deck['_id']) {
                $deck['_id'] = $deck['_id']['$id'];
                $ret_msg = ['ok' => true, 'msg' => '获取成功', 'data' => $deck];
            } else {
                $ret_msg = ['ok' => false, 'msg' => '无效的数据'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败', 'data' => ''];
        }

        return $ret_msg;
    }

    /*
        检查指定玩家是否可进入战场
    */
    public function allowJoinUid($uid)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $deck_id = $redis->conn->Hget($this->tableName, $uid);
            if ($deck_id) {
                $ret_msg = ['ok' => false, 'msg' => '已在战场中，不可加入'];
            } else {
                $ret_msg = ['ok' => true, 'msg' => '可以加入'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        插入玩家正在使用的套牌
    */
    public function insertDeck($deck, $uid)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hset($this->tableName, $uid, Json::encode($deck));
        } else {
            $res = false;
        }

        return $res;
    }

    /*
        战斗结束删除玩家正在使用的套牌
    */
    public function removeDeck($uid)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hdel($this->tableName, $uid);
        } else {
            $res = false;
        }

        return $res;
    }
}
