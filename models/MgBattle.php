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
            "winner" : "585a47bc7f8b9a43058b4567",
    }

*/
class MgBattle extends MongoModel
{
    public $tableName = 'battle';

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
