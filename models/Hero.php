<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * MongoDb 英雄
 *
 *
 */

/*
    {
            "_id" : ObjectId("585a47bc7f8b9a43058b4567"),
            "name" : "安度因", 
            "career" :"priest", // 牧师 priest, 法师 mage, 术士 warlock, 德鲁伊 druid, 猎人 hunter, 圣骑士 paladin, 盗贼 rogue, 萨满 shaman, 战士 warrior
            "avatar" : "xxxxx", // 头像地址
            "logo" : "xxxx",
    }

*/
class Hero extends MongoModel
{
    public $tableName = 'hero';

    const CAREER_PRIEST     = 'priest';
    const CAREER_MAGE       = 'mage';
    const CAREER_WARLOCK    = 'warlock';
    const CAREER_DRUID      = 'druid';
    const CAREER_HUNTER     = 'hunter';
    const CAREER_PALADIN    = 'paladin';
    const CAREER_ROGUE      = 'rogue';
    const CAREER_SHAMAN     = 'shaman';
    const CAREER_WARRIOR    = 'warrior';

    public function getCareerList()
    {
        return [
            self::CAREER_PRIEST     => '牧师',
            self::CAREER_MAGE       => '法师',
            self::CAREER_WARLOCK    => '术士',
            self::CAREER_DRUID      => '德鲁伊',
            self::CAREER_HUNTER     => '猎人',
            self::CAREER_PALADIN    => '圣骑士',
            self::CAREER_ROGUE      => '盗贼',
            self::CAREER_SHAMAN     => '萨满',
            self::CAREER_WARRIOR    => '战士',
        ];
    }
}
