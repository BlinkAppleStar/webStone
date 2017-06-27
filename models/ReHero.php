<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Redis 英雄类
 *
 *
 */

/*
    585a47bc7f8b9a43058b4567 => json{
        "name" : "安度因", 
        "career" :"priest", // 牧师 priest, 法师 mage, 术士 warlock, 德鲁伊 druid, 猎人 hunter, 圣骑士 paladin, 盗贼 rogue, 萨满 shaman, 战士 warrior, 中立 Neutral, 特殊 system
        "avatar" : "xxxxx", // 头像地址
        "skill_image" : "xxxxxx", // 英雄技能图标
        "logo" : "xxxx",
    }

*/
class ReHero extends Model
{
    public $tableName = 'h_hero';

    /*
        初始化
    */
    public function initiate()
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $exist = $redis->conn->Exists($this->tableName);
            if ($exist) {
                $ret_msg = ['ok' => false, 'msg' => '已初始化'];
            } else {
                $hero_model = new MgHero();
                $hero_list = $hero_model->findAllByAttributes();
                foreach ($hero_list as $hero_id => $hero) {
                    unset($hero['_id']);
                    $redis->conn->Hset($this->tableName, $hero_id, Json::encode($hero));
                }
                $ret_msg = ['ok' => true, 'msg' => '英雄列表缓冲完成'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        检查是否已初始化
    */
    public function isInitiated()
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $exist = $redis->conn->Exists($this->tableName);
            if ($exist) {
                $ret = true;
            } else {
                $ret = false;
            }
        } else {
            $ret = false;
        }

        return $ret;
    }

    /*
        获取指定英雄详情列表
    */
    public function getListByKey($hero_ids=[])
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $list = $redis->conn->Hmget($this->tableName, $hero_ids);
            $ret_msg = ['ok' => true, 'msg' => '获取成功', 'data' => $list];
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        获取指定英雄头像地址
    */
    public function getAvatarByHeroId($hero_id)
    {
        $ret = '';
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $string = $redis->conn->Hget($this->tableName, $hero_id);
            if ($string) {
                $data = Json::decode($string);
                $ret = $data['avatar'];
            }
        }

        return $ret;
    }

    /*
        获取指定英雄技能图片地址
    */
    public function getSkillByHeroId($hero_id)
    {
        $ret = '';
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $string = $redis->conn->Hget($this->tableName, $hero_id);
            if ($string) {
                $data = Json::decode($string);
                $ret = $data['skill_image'];
            }
        }

        return $ret;
    }
}
