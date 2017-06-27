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
            "career" :"priest", // 牧师 priest, 法师 mage, 术士 warlock, 德鲁伊 druid, 猎人 hunter, 圣骑士 paladin, 盗贼 rogue, 萨满 shaman, 战士 warrior, 中立 Neutral, 特殊 system
            "avatar" : "xxxxx", // 头像地址
            "skill_image" : "xxxxxx", // 英雄技能图标
            "logo" : "xxxx",
    }

*/
class MgHero extends MongoModel
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
    const CAREER_NEUTRAL    = 'neutral';
    const CAREER_SYS        = 'system';

    /*
        获取职业列表
    */
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
            self::CAREER_NEUTRAL    => '中立',
            self::CAREER_SYS        => '隐藏',
        ];
    }

    /*
        删除英雄
    */
    public function remove($id)
    {
        $deck_model = new MgDeck();
        $deck_using = $deck_model->findByAttributes(['hero_id' => $id]);

        $card_model = new MgCard();
        $card_using = $card_model->findByAttributes(['hero_id' => $id]);

        if ($deck_using) {
            $ret_msg = ['ok' => false, 'msg' => '有牌库正在使用该英雄，请先删除牌库', 'data' => $deck_using['_id']->__toString()];
        } elseif ($card_using) {
            $ret_msg = ['ok' => false, 'msg' => '有卡牌属于该英雄，请先删除卡牌或重定向', 'data' => $card_using['_id']->__toString()];
        } else {
            $res = $this->deleteByPk($id);
            if ($res) {
                $ret_msg = ['ok' => true, 'msg' => '删除成功'];
            } else {
                $ret_msg = ['ok' => false, 'msg' => '删除失败'];
            }
        }

        return $ret_msg;
    }

}
