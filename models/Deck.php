<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * MongoDb 套牌类
 *
 *
 */

/*
    {
            "_id" : ObjectId("585a47bc7f8b9a43058b4567"),
            "name" : "自定义套牌名字",
            "cards" : [],//套牌中的牌
            "hero_id" : "xxx", // 套牌的英雄
            "career" : 'xxx', // 套牌的英雄职业
            "manager_id" : "xxxx", // 套牌的玩家ID
            "created_time" : NumberLong(1482311612),
    }

*/
class Deck extends MongoModel
{
    public $tableName = 'deck';

    const MAX_CAPACITY = 30; // 最大容量

    /*
        创建英雄牌库
    */
    public function create($hero_id)
    {
        $hero_model = new Hero();
        $hero = $hero_model->findByPk($hero_id);

        if (!$hero) {
            $ret_msg = ['ok' => false, 'msg' => '无效的英雄'];
        } else {
            $my_deck_cnt = $this->countByAttributes([
                'manager_id'    => Yii::$app->user->id,
            ]);

            if ($my_deck_cnt > 100) {
                $ret_msg = ['ok' => false, 'msg' => '太多牌库'];
            } else {
                $this->attributes = [
                    'name'          => '自定义套牌',
                    'cards'         => [],
                    'hero_id'       => $hero_id,
                    'career'        => $hero_model->attributes['career'],
                    'manager_id'    => Yii::$app->user->id,
                    'created_time'  => time(),
                ];

                $res = $this->save();
                if ($res) {
                    $ret_msg = ['ok' => true, 'msg' => '创建成功'];
                } else {
                    $ret_msg = ['ok' => false, 'msg' => '保存失败'];
                }
            }
        }

        return $ret_msg;
    }

    /*
        添加卡牌到牌库
    */
    public function addCard($deck_id, $card_id)
    {
        $card_model = new Card();
        $valid_card = $card_model->findByPk($card_id);

        $valid_deck = $this->findByPk($deck_id);
        if (!$valid_deck) {
            $ret_msg = ['ok' => false, 'msg' => '无效的牌库，请先创建'];
        } elseif (!$valid_card) {
            $ret_msg = ['ok' => false, 'msg' => '无效的卡牌'];
        } else {
            $old_card_list = $this->attributes['cards'];
            if (count($old_card_list) >= self::MAX_CAPACITY) {
                $ret_msg = ['ok' => false, 'msg' => '已达牌库上限，请先移除卡牌'];
            } else {
                $card_cnt_limited = false;
                $card_exist = false;
                $insert_position = 0;
                foreach ($old_card_list as $card) {
                    if ($card['_id'] == $card_id) {
                        if ($card['level'] == 4 || $card['cnt'] >= 2) {
                            $card_cnt_limited = true;
                            break;
                        } else {
                            $card_exist = true;
                            break;
                        }
                    } elseif ($card['mana'] <= $card_model->attributes['mana']) {
                        $insert_position++;
                    }
                }

                if ($card_cnt_limited) {
                    $ret_msg = ['ok' => false, 'msg' => '此套牌无法继续添加该卡牌'];
                } elseif ($card_model->attributes['career'] != Hero::CAREER_NEUTRAL && $card_model->attributes['career'] != $this->attributes['career']) {
                    $ret_msg = ['ok' => false, 'msg' => '不能添加其他职业的卡牌'];
                } else {
                    if ($card_exist) {
                        $new_card_list = $old_card_list;
                        $new_card_list[$card_id]['cnt'] = 2;
                    } else {
                        // 将新卡插入法力指定位置
                        $pre_card_list = array_slice($old_card_list, 0, $insert_position, true);
                        $suffix_card_list = array_slice($old_card_list, $insert_position, null, true);
                        $new_card[$card_id] = $card_model->attributes;
                        $new_card[$card_id]['_id'] = $card_id;
                        $new_card[$card_id]['cnt'] = 1;

                        $new_card_list = array_merge($pre_card_list, $new_card, $suffix_card_list);
                    }

                    $this->attributes['cards'] = $new_card_list;

                    $res = $this->save();

                    if ($res) {
                        $ret_msg = ['ok' => true, 'msg' => '添加成功'];
                    } else {
                        $ret_msg = ['ok' => false, 'msg' => '添加失败'];
                    }
                }
            }
        }

        return $ret_msg;
    }

    /*
        移除牌库指定卡牌
    */
    public function removeCard($deck_id, $card_id)
    {
        $valid_deck = $this->findByPk($deck_id);
        if (!$valid_deck) {
            $ret_msg = ['ok' => false, 'msg' => '无效的牌库，请先创建'];
        } else {
            $card_list = $this->attributes['cards'];
            if (!isset($card_list[$card_id])) {
                $ret_msg = ['ok' => false, 'msg' => '该牌库没有此卡'];
            } else {
                if ($card_list[$card_id]['cnt'] > 1) {
                    $card_list[$card_id]['cnt'] = 1;
                } else {
                    unset($card_list[$card_id]);
                }
                $this->attributes['cards'] = $card_list;

                $res = $this->save();

                if ($res) {
                    $ret_msg = ['ok' => true, 'msg' => '删除成功'];
                } else {
                    $ret_msg = ['ok' => false, 'msg' => '删除失败'];
                }
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
        if ($params['hero_id']) {
            $query['hero_id'] = $params['hero_id'];
        }
        if ($params['career']) {
            $query['career'] = $params['career'];
        }
        if ($params['manager_id']) {
            $query['manager_id'] = $params['manager_id'];
        }

        return $this->findListByAttributes($query, $skip, $limit, $sort);
    }
}
