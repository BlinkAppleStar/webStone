<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * MongoDb 随从原始类
 *
 *
 */

/*
    {
            "_id" : ObjectId("585a47bc7f8b9a43058b4567"),
            "name" : "阿古斯之盾",
            "race" : "mach", //随从种族：murloc 
            "damage" : "2", // 随从攻击力
            "hp" : "3", // 随从正常最大血量
            "skills" : [], // 技能列表
            "mana" : "4", // 显示的法力值
            "image" : "xxxx", // 图片地址
            "created_time" : NumberLong(1482311612),
    }

*/
class MgMinion extends MongoModel
{
    public $tableName = 'attendant';

    const RACE_MORLOC       = 'murloc';     // 鱼人
    const RACE_BEAST        = 'beast';      // 野兽
    const RACE_ELEMENTAL    = 'elemental';  // 元素
    const RACE_TOTEM        = 'totem';      // 图腾
    const RACE_DEMON        = 'demon';      // 恶魔


}
