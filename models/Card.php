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
            "type" : "weapon", // weapon, minion, magic
            "mana" : "", // 法力消耗
            "damage" : "3", // 如果是随从牌的攻击力
            "hp" : "1", // 随从牌的血量
            "skill_desc" : "xxx", // 技能描述
            "skill_id" : "585a47bc7f8b9a43058b4567", // 技能ID
            "career" : "neutral", // 卡牌所属英雄职业
            "level" : "0", // 0基本，1白色，2蓝色，3紫色, 4橙色
            "image" : "xxxx",  // 卡牌图片
            "updated_time" : NumberLong(1482311612),
    }

*/
class Card extends MongoModel
{
    public $tableName = 'card';

    const TYPE_WEAPON       = 'weapon';
    const TYPE_MINION       = 'minion';
    const TYPE_MAGIC        = 'magic';

    public function getTypeList()
    {
        return [
            self::TYPE_WEAPON   => '武器',
            self::TYPE_MINION   => '随从',
            self::TYPE_MAGIC    => '法术',
        ];
    }

    public function getLevelList()
    {
        return ['基本', '白色', '蓝色', '紫色', '橙色'];
    }

    /*
        删除卡牌
    */
    public function remove($id)
    {
        $deck_model = new Deck();
        $deck_using = $deck_model->findByAttributes(['cards' => ['$all' => [$id]]]);

        if ($deck_using) {
            $ret_msg = ['ok' => false, 'msg' => '有牌库正在使用该卡牌，请先删除牌库', 'data' => $deck_using['_id']->__toString()];
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
