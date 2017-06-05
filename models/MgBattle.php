<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * MongoDb 战场类
 *
 *
 */

/*
    {
            "_id" : ObjectId("585a47bc7f8b9a43058b4567"),
            "player_1" : "585a47bc7f8b9a43058b4567",
            "player_2" : "585a47bc7f8dddd3058b4567",
            "start_time" : NumberLong(1482311612),
            "end_time" : NumberLong(1482311612),
            "deck_1" : [],
            "deck_2" : [],
            "state" : 0, 0：准备阶段，1：进行中，2：已结束
            "winner" : "585a47bc7f8b9a43058b4567",
    }

*/
class MgBattle extends MongoModel
{
    public $tableName = 'battle';

    const STATE_READY       = 0;
    const STATE_FIGHTING    = 1;
    const STATE_END         = 2;



    /*
        结束战斗
    */
    public function finish($battle_id, $winner_id)
    {
        $res = $this->findByPk($battle_id);
        if (!$res) {
            $ret_msg = ['ok' => false, 'msg' => '无效的战斗ID'];
        } else {
            $this->attributes['end_time'] = time();
            $this->attributes['state']  = self::STATE_END;
            $this->attributes['winner'] = $winner_id;

            $res = $this->save();
            if ($res) {
                $redis_deck = new ReBattleFieldDeck();
                $redis_deck->removeDeck($this->attributes['player_1']);
                $redis_deck->removeDeck($this->attributes['player_2']);

                $redis_battle= new ReBattleField();
                $redis_battle->close($this->mongo_id->__toString());

                $ret_msg = ['ok' => true, 'msg' => '已结束'];
            } else {
                $ret_msg = ['ok' => false, 'msg' => '保存失败'];
            }
        }

        return $ret_msg;
    }

    /*
        玩家投降
    */
    public function SurrenderByUid($uid)
    {
        $battle_list = $this->search(['player' => $uid, 'end_time' => 0]);
        if ($battle_list['total']) {
            foreach ($battle_list['list'] as $battile_id => $battle) {
                if ($battle['player_1'] == $uid) {
                    $winner_id = $battle['player_2'];
                } else {
                    $winner_id = $battle['player_1'];
                }
                $ret_msg = $this->finish($battile_id, $winner_id);
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => '内部数据错误'];
        }
        return $ret_msg;
    }

    /*
        获取玩家当前战斗数据(只能看自己的牌库)
    */
    public function getCurrentByUid($uid)
    {
        $battle_list = $this->search(['player' => $uid, 'end_time' => 0]);
        if ($battle_list['total'] == 1) {
            $data = array_pop($battle_list['list']);
            if ($data['player_1'] == $uid) {
                $data['deck'] = $data['deck_1'];
            } else {
                $data['deck'] = $data['deck_2'];
            }
            unset($data['deck_1']);
            unset($data['deck_2']);
            $data['my_id'] = $uid;
            $data['_id'] = $data['_id']->__toString();


            $ret_msg = ['ok' => true, 'msg' => '获取成功', 'data' => $data];
        } else {
            $ret_msg = ['ok' => false, 'msg' => '无战场数据'];
        }

        return $ret_msg;
    }

    /*
        单个玩家手牌初始化
    */
    public function initHanding($uid)
    {
        $battle_list = $this->search(['player' => $uid, 'end_time' => 0]);
        if ($battle_list['total'] == 1) {
            $data = array_pop($battle_list['list']);
            if ($data['player_1'] == $uid) {
                $data['deck'] = $data['deck_1'];
            } else {
                $data['deck'] = $data['deck_2'];
            }

            $deck_card_list = [];
            foreach ($data['deck']['cards'] as $card_id => $card_info) {
                $deck_card_list[] = $card_id;
                if ($card_info['cnt'] == 2) {
                    $deck_card_list[] = $card_id;
                }
            }

            shuffle($deck_card_list);

            if ($data['player_1'] == $uid) {
                $handing_card_ids = array_slice($deck_card_list, 0, 3);
            } else {
                $handing_card_ids = array_slice($deck_card_list, 0, 4);
            }
            
            $handing_cards = [];
            foreach ($handing_card_ids as $card_id) {
                $handing_cards[] = $data['deck']['cards'][$card_id];
            }

            $ret_msg = ['ok' => true, 'msg' => '获取成功', 'data' => $handing_cards];
        } else {
            $ret_msg = ['ok' => false, 'msg' => '无战场数据'];
        }

        return $ret_msg;
    }

    /*
        单个玩家手牌调整后初始化牌库
    */
    public function initDeck($uid, $remaining_cards)
    {
        $battle_list = $this->search(['player' => $uid, 'end_time' => 0]);
        if ($battle_list['total'] == 1) {
            $remaining_cards_cnt = count($remaining_cards);
            $redraw_cards_cnt = 0;
            $battle = array_pop($battle_list['list']);
            $coin_cards = [];
            if ($battle['player_1'] == $uid) {
                $battle['deck'] = $battle['deck_1'];
                $redraw_cards_cnt = 3 - $remaining_cards_cnt;
            } else {
                $battle['deck'] = $battle['deck_2'];
                $redraw_cards_cnt = 4 - $remaining_cards_cnt;
                $card_model = new MgCard();
                $coin_card = $card_model->findByAttributes(['name' => '幸运币']);
                $coin_cards[] = $coin_card['_id']->__toString();
            }

            $count_values = array_count_values($remaining_cards);
            $deck_card_list = [];
            foreach ($battle['deck']['cards'] as $card_id => $card_info) {
                if ($count_values[$card_id] >= 2) {
                    continue;
                } elseif ($count_values[$card_id] == 1) {
                    if ($card_info['cnt'] == 2) {
                        $deck_card_list[] = $card_id;
                    } else {
                        continue;
                    }
                } else {
                    $deck_card_list[] = $card_id;
                    if ($card_info['cnt'] == 2) {
                        $deck_card_list[] = $card_id;
                    }
                }
                
            }

            shuffle($deck_card_list);

            $redraw_card_ids = array_slice($deck_card_list, 0, $redraw_cards_cnt);
            $redraw_cards = [];
            foreach ($redraw_card_ids as $card_id) {
                $redraw_cards[] = $battle['deck']['cards'][$card_id];
            }

            $rest_card_ids = array_slice($deck_card_list, $redraw_cards_cnt);
            $redis_deck_pool = new ReBattleFieldDeckPool($battle['_id']->__toString(), $uid);
            $ret_msg = $redis_deck_pool->init($rest_card_ids);

            if ($ret_msg['ok']) {
                $handing_card_ids = array_merge($remaining_cards, $redraw_cards, $coin_cards);
                $redis_handing_pool = new ReBattleFieldHandingPool($battle['_id']->__toString(), $uid);
                $ret_msg = $redis_handing_pool->init($handing_card_ids);
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => '无战场数据'];
        }

        return $ret_msg;
    }

    /*
        检查指定玩家的战场对手是否已经准备就绪（可以开始战斗）
    */
    public function checkOpponentReadyByUid($uid)
    {
        $battle_list = $this->search(['player' => $uid, 'end_time' => 0]);
        if ($battle_list['total'] == 1) {
            $battle = array_pop($battle_list['list']);
            if ($battle['player_1'] == $uid) {
                $redis_deck_pool = new ReBattleFieldDeckPool($battle['_id']->__toString(), $battle['player_2']);
            } else {
                $redis_deck_pool = new ReBattleFieldDeckPool($battle['_id']->__toString(), $battle['player_1']);
            }

            $pool_len = $redis_deck_pool->getLength();
            if ($pool_len > 0) {
                $ret_msg = ['ok' => true, 'msg' => '准备就绪', 'data' => [
                    $battle['player_1'],
                    $battle['player_2']
                ]];
            } else {
                $ret_msg = ['ok' => false, 'msg' => '对手未就绪'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => '无战场数据'];
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

        if ($params['player']) {
            $query['$or'] = [
                [
                    'player_1' => $params['player']
                ],
                [
                    'player_2' => $params['player']
                ]
            ];
        }

        if ($params['winner']) {
            $query['winner'] = $params['winner'];
        }
        if (strval($params['end_time']) != '') {
            $query['end_time'] = $params['end_time'];
        }

        return $this->findListByAttributes($query, $skip, $limit, $sort);
    }

}
