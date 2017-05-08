<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * MongoDb 卡牌类
 *
 *
 */

/*
    {
            "_id" : ObjectId("585a47bc7f8b9a43058b4567"),
            "name" : "鹰角弓",
            "type" : "weapon", // weapon, attendant, magic
            "mana" : "", // 法力消耗
            "damage" : "3", // 如果是随从牌的攻击力
            "hp" : "1", // 随从牌的血量
            "skill_desc" : "xxx", // 技能描述
            "skill_id" : "585a47bc7f8b9a43058b4567", // 技能ID
            "hero_id" : "585a47bc7f8b9a43058b4567", // 卡牌所属英雄，空为中立
            "level" : "0", // 0白色，1蓝色，2紫色，3橙色
            "created_time" : NumberLong(1482311612),
    }

*/
class Card extends MongoModel
{
    public $tableName = 'card';

}
