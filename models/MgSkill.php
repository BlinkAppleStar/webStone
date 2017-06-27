<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * MongoDb 技能特效类
 *
 *
 */

/*
    {
            "_id" : ObjectId("585a47bc7f8b9a43058b4567"),
            "trigger" : "xxx", // 技能触发时刻 - drawing:当抽到该牌时, using:当使用该牌时, persistent:持续效果, end_turn: 结束回合时, start_turn:回合开始时, hero_attack: 英雄攻击时, minion_take_damage: 随从受到伤害时, hero_take_damage: 英雄受到伤害时
            "desc" : "xxx", // 技能描述文字
            "function" : "", // 技能实现方法封装
    }

*/
class MgSkill extends MongoModel
{
    public $tableName = 'skill';


    /*
        搜索
    */
    public function search($params, $skip = 0, $limit = 10, $sort = [])
    {
        $query = [];

        if ($params['_id']) {
            $query['_id'] = new \MongoId($params['_id']);
        }
        if ($params['name_like']) {
            $query['name'] = new \MongoRegex('/'.$params['name_like'].'/');
        }
        if ($params['name']) {
            $query['name'] = $params['name'];
        }
        if ($params['type']) {
            $query['type'] = $params['type'];
        }
        if (strval($params['mana']) != '') {
            $query['mana'] = $params['mana'];
        }
        if (strval($params['mana_min']) != '') {
            $query['mana'] = ['$gte' => $params['mana_min']];
        }
        if (strval($params['mana_max']) != '') {
            $query['mana'] = ['$lte' => $params['mana_max']];
        }
        if (strval($params['damage']) != '') {
            $query['damage'] = $params['damage'];
        }
        if (strval($params['hp']) != '') {
            $query['hp'] = $params['hp'];
        }
        if (strval($params['level']) != '') {
            $query['level'] = $params['level'];
        }
        if ($params['career']) {
            $query['career'] = $params['career'];
        }

        return $this->findListByAttributes($query, $skip, $limit, $sort);
    }

}
