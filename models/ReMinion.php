<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Redis 战场玩家实时的随从
 *
 *
 */

/*
    585a47bc7f8b9a43058b4567.132323232 => json{
        "name" : "阿古斯之盾",
        "race" : "mach", //随从种族：murloc 
        "damage" : "2", // 随从攻击力
        "hp" : "3", // 随从血量
        "hp_max" : "", // 随从最大血量
        "skills" : [], // 技能列表
        "mana" : "4", // 显示的法力值
        "image" : "xxxx", // 图片地址
        "taunt" : 1, // 是否嘲讽
        "can_attack" : 1, // 是否可攻击
        "can_attack_hero" : 1, // 是否可攻击英雄
        "attack_cnt" : 2, // 剩余攻击次数，风怒效果
        "image" : "xxx", // 随从图片
    }

*/
class ReMinion extends Model
{
    public $tableName = 'h_minion';

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
        保存随从
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
        获取单个随从
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
