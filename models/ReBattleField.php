<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Redis 战场基本信息类
 *
 *
 */

/*
    h_battle_field => [
        '585a47bc7f8b9a43058b4567' => { // battle_id为键
            "player_1" : "585a47bc7f8b9a43058b4567", // 玩家1 先手
            "player_2" : "585a47bc7f8b9a43058b4567", // 玩家2
            "player_1_hp" : 30, // 当前玩家1血量
            "player_2_hp" : 28, // 当前玩家2血量
            "round_player" : 1, // 当前谁的回合
            "round_cnt" : 1, // 当前第几回合
            "hero_1_skill_on" : 1, // 玩家1 英雄技能未用
            "hero_2_skill_on" : 0, // 玩家2 英雄技能已用
            "hero_1_skill" : "xxxxx", // 玩家1 英雄技能
            "hero_2_skill" : "xxxx", // 玩家2 英雄技能
            "hero_1_avatar" : "xxxx", // 玩家1英雄头像路径
            "hero_2_avatar" : "xxx", // 玩家2英雄头像路径
            "mana_1_max" : 3, // 玩家1法力值上限
            "mana_2_max" : 4, // 玩家2法力值上限
            "mana_1" : 2, // 玩家1剩余法力值
            "mana_2" : 1, // 玩家2剩余法力值
            "state" : 0, // 0:准备阶段，1：进行中，2：结束

            //"player_1_round_rest_time"
        }
        ...
    ]

*/
class ReBattleField extends Model
{
    public $tableName = 'h_battle_field';

    /*
        创建战场
    */
    public function create($battle_id, $params)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hget($this->tableName, $battle_id);
            if ($res) {
                $ret_msg = ['ok' => false, 'msg' => '创建失败, 重复战场ID'];
            } else {
                $redis_deck = new ReBattleFieldDeck();
                $deck_1 = $redis_deck->getDeckByUid($params['player_1']);
                if (!$deck_1['ok']) {
                
                }
                $deck_2 = $redis_deck->getDeckByUid($params['player_2']);
                if (!$deck_2['ok']) {
                
                }
                $redis_hero = new ReHero();
                $res = $redis_hero->getListByKey([$deck_1['data']['hero_id'], $deck_2['data']['hero_id']]);
                if (!$res['ok']) {
                
                }

                $attributes = [
                    'player_1'              => $params['player_1'],
                    'player_2'              => $params['player_2'],
                    'player_1_hp'           => 30,
                    'player_2_hp'           => 30,
                    'hero_1_skill_on'       => 1,
                    'hero_2_skill_on'       => 1,
                    'hero_1_id'             => $deck_1['data']['hero_id'],
                    'hero_2_id'             => $deck_2['data']['hero_id'],
                    'hero_1_avatar'         => $redis_hero->getAvatarByHeroId($deck_1['data']['hero_id']),
                    'hero_2_avatar'         => $redis_hero->getAvatarByHeroId($deck_2['data']['hero_id']),
                    'hero_1_skill'          => $redis_hero->getSkillByHeroId($deck_1['data']['hero_id']),
                    'hero_2_skill'          => $redis_hero->getSkillByHeroId($deck_2['data']['hero_id']),
                    'round_player'          => 0,
                    'round_cnt'             => 0,
                    'mana_1_max'            => 0,
                    'mana_2_max'            => 0,
                    'mana_1'                => 0,
                    'mana_2'                => 0,
                    'player_1_tired'        => 1,
                    'plyaer_2_tired'        => 1,
                    'state'                 => 0,
                ];

                $res = $redis->conn->Hset($this->tableName, $battle_id, Json::encode($attributes));
                if ($res) {
                    $ret_msg = ['ok' => true, 'msg' => '创建成功'];
                } else {
                    $ret_msg = ['ok' => false, 'msg' => '创建失败'];
                }
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        关闭战场
    */
    public function close($battle_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hdel($this->tableName, $battle_id);
        } else {
            $res = false;
        }

        return $res;
    }

    /*
        获取指定战场数据
    */
    public function getById($battle_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hget($this->tableName, $battle_id);
            if ($res) {
                $res = Json::decode($res);
            }
        } else {
            $res = false;
        }

        return $res;
    }

    /*
        回合开始
        @params $battle_id 指定战场开始新回合
        回合数+1，重置当前回合英雄技能，魔法
    */
    public function startRound($battle_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $json = $redis->conn->Hget($this->tableName, $battle_id);
            if ($json) {
                $battle = Json::decode($json);

                $battle['round_cnt']++;
                $side = $battle['round_cnt'] % 2;
                if ($side == 1) {
                    $side_no = 1;
                    $waiting_no = 2;
                } else {
                    $side_no = 2;
                    $waiting_no = 1;
                }
                
                $battle["hero_{$side_no}_skill_on"] = 1;
                $battle['round_player'] = $side_no;
                if ($battle["mana_{$side_no}_max"] < 10) {
                    $battle["mana_{$side_no}_max"]++;
                }
                $battle["mana_{$side_no}"] = $battle["mana_{$side_no}_max"] - $overload_mana;
                $side_player = $battle['player_{$side_no}'];

                $redis->conn->Hset($this->tableName, $battle_id, Json::encode($battle));

                $ret_msg = ['ok' => true, 'msg' => '操作成功'];
            } else {
                $ret_msg = ['ok' => false, 'msg' => '无战场数据，错误'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        回合结束
    */
    public function endRound($battle_id, $my_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $json = $redis->conn->Hget($this->tableName, $battle_id);
            if ($json) {
                $battle = Json::decode($json);

                if ($battle['player_1'] == $my_id) {
                    $opponent_no = 2;
                    $my_no = 1;
                } else {
                    $opponent_no = 1;
                    $my_no = 2;
                }

                // todo触发结束回合方亡语效果

                if ($battle['round_player'] == $my_no) {
                    $ret_msg = $this->startRound($battle_id);
                    if ($ret_msg['ok']) {
                        $ret_msg['data']['opponent_id'] = $battle["player_{$opponent_no}"];
                    }
                } else {
                    $ret_msg = ['ok' => false, 'msg' => '不是你的回合'];
                }
            } else {
                $ret_msg = ['ok' => false, 'msg' => '无战场数据，错误'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    
    }
    
    /*
        给战场指定玩家抽一张牌
    */
    public function drawCardFor($battle_id, $player_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $json = $redis->conn->Hget($this->tableName, $battle_id);
            if ($json) {
                $battle = Json::decode($json);
                if ($battle['player_1'] == $player_id) {
                    $opponent_id = $battle['player_2'];
                } else {
                    $opponent_id = $battle['player_1'];
                }

                $redis_deck_pool = new ReBattleFieldDeckPool($battle_id, $player_id);
                $pop_r_card_id = $redis_deck_pool->pop();

                $redis_card = new ReCard();
                if ($pop_r_card_id) {
                    $pop_card = $redis_card->get($pop_r_card_id);

                } else { // 无卡可抽
                    $pop_card = ''; // 根据battle创建疲劳卡
                }
                // 触发卡牌抽到效果


                // 将卡牌放入手牌
                $redis_handing_pool = new ReBattleFieldHandingPool($battle_id, $player_id);
                if ($redis_handing_pool->getLength() < 10 && $pop_r_card_id) {
                    $redis_handing_pool->rPush($pop_r_card_id);
                }

                $ret_msg = ['ok' => true, 'msg' => '抽牌完成', 'data' => ['opponent_id' => $opponent_id]];
            } else {
                $ret_msg = ['ok' => false, 'msg' => '无战场数据，错误'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        英雄受到伤害
    */
    public function hitHero($player_id, $damage)
    {
        
    }
}
