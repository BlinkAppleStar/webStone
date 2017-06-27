<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Redis 战场玩家实时使用的卡牌详情
 *
 *
 */

/*
    585a47bc7f8b9a43058b4567.132323232 => json{
        "name" : "鹰角弓",
        "type" : "weapon", // weapon, minion, magic
        "mana" : "", // 法力消耗
        "damage" : "3", // 如果是随从牌的攻击力
        "hp" : "1", // 随从牌的血量
        "skill_desc" : "xxx", // 技能描述
        "skill_id" : "585a47bc7f8b9a43058b4567", // 技能ID
        "career" : "neutral", // 卡牌所属英雄职业
        "level" : "0", // 0基本，1白色，2蓝色，3紫色, 4橙色
        "image" : "xxxx",  // 卡牌图片
    }

*/
class ReCard extends Model
{
    public $tableName = 'h_card';

    /*
        获取指定卡牌详情列表
    */
    public function getListByKey($r_card_ids=[])
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $list = $redis->conn->Hmget($this->tableName, (array)$r_card_ids);
            foreach ($list as &$val) {
                $val = Json::decode($val);
            }
            $ret_msg = ['ok' => true, 'msg' => '获取成功', 'data' => $list];
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        检查指定键是否被占用
    */
    public function exsits($key)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hexists($this->tableName, $key);
        } else {
            $res = false;
        }

        return $res;
    }

    /*
        保存卡牌
    */
    public function set($key, $val)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hset($this->tableName, $key, Json::encode($val));
            $ret_msg = ['ok' => true, 'msg' => '设置成功'];
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        获取单个卡牌
    */
    public function get($key)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $val = $redis->conn->Hget($this->tableName, $key);
            if ($val) {
                $val = Json::decode($val);
            }
        } else {
            $val = '';
        }

        return $val;
    }
}
