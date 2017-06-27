<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Redis 战场玩家卡牌池类
 *
 *
 */

/*
    l_deck_pool_x{battle_id}_x{uid} => [
        '585a47bc7f8b9a43058b4567', //顶部卡牌
        '585a47bc7f8b9a43058b4567'
        ...
    ]

*/
class ReBattleFieldDeckPool extends Model
{
    public $tableName = 'l_deck_pool_';

    public function __construct($battle_id, $player_id)
    {
        $this->tableName = $this->tableName . $battle_id . '_' . $player_id;
    }

    /*
        开局初始化牌库
    */
    public function initiate($card_list)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $duplicate = $redis->conn->Llen($this->tableName);
            if ($duplicate) {
                $ret_msg = ['ok' => false, 'msg' => '牌池非空，不能重新初始化'];
            } else {
                $redis_card = new ReCard();
                $card_model = new MgCard();
                foreach ($card_list as $card_id) {
                    $r_card_id = uniqid('', true);
                    while ($redis_card->exsits($r_card_id)) {
                        $r_card_id = uniqid('', true);
                    }
                    $res = $card_model->findByPk($card_id);
                    if (!$res) {
                        $ret_msg = ['ok' => false, 'msg' => '无效的卡牌ID，不能初始化'];
                        break;
                    }

                    $card_model->attributes['_id'] = $card_model->mongo_id->__toString();
                    unset($card_model->attributes['updated_time']);

                    $res = $redis_card->set($r_card_id, $card_model->attributes);
                    if (!$res['ok']) {
                        $ret_msg = ['ok' => false, 'msg' => '卡牌缓冲失败，错误'];
                        break;
                    }

                    $length = $redis->conn->Lpush($this->tableName, $r_card_id);
                }
                $ret_msg = ['ok' => true, 'msg' => '牌池初始化完成'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        获取牌库长度
    */
    public function getLength()
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $length = $redis->conn->Llen($this->tableName);
        } else {
            $length = 0;
        }

        return $length;
    }

    /*
        抽一张牌
    */
    public function pop()
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $r_card_id = $redis->conn->Lpop($this->tableName);
        } else {
            $r_card_id = null;
        }

        return $r_card_id;
    }
}
