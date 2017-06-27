<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Json;
use app\models\ReBattleFieldQueue;
use app\models\ReBattleField;
use app\models\ReBattleFieldDeckPool;
use app\models\ReBattleFieldHandingPool;
use app\models\ReCard;
use app\models\MgBattle;


class BattleFieldController extends BaseController
{
    /*
        加入队列
    */
    public function actionJoin()
    {
        $queue = new ReBattleFieldQueue();
        return Json::encode($queue->input(Yii::$app->request->get('deck_id')));
    }

    /*
        手动匹配队列玩家
    */
    public function actionMatch()
    {
        $queue = new ReBattleFieldQueue();
        return Json::encode($queue->match());
    }

    /*
        测试结束战场
    */
    public function actionSurrender()
    {
        $battle = new MgBattle();

        $res = $battle->SurrenderByUid(Yii::$app->user->id);
        xmp($res);
    }

    /*
        战场展示页
    */
    public function actionIndex()
    {
        $battle_model = new MgBattle();
        $battle = $battle_model->findByAttributes(
            [
                '$or' => [
                            ['player_1' => Yii::$app->user->id],
                            ['player_2' => Yii::$app->user->id]
                        ],
                'end_time' => 0,
            ],
            [
                '_id' => 1,
            ]
        );

        if ($battle) {
            return $this->render('index', [
                'battle_id' => $battle['_id']->__toString()
            ]);
        } else {
            return $this->redirect('/deck/list');
        }

    }

    /*
        战斗开始选牌重抽页
    */
    public function actionPrepare()
    {
        $battle = new MgBattle();
        $valid = $battle->search(['player' => Yii::$app->user->id, 'end_time' => 0, 'state' => 0]);
        if ($valid['total'] == 1) {
            return $this->render('prepare', [
                
            ]);
        } else {
            return $this->redirect('/deck/list');
        }
        
    }

    /*
        初始化手牌
    */
    public function actionInitHandingCards()
    {
        $battle = new MgBattle();
        $ret_msg = $battle->initHanding(Yii::$app->user->id);
        return Json::encode($ret_msg);
    }

    /*
        调整手牌初始化牌库（测试）
    */
    public function actionInitDeck()
    {
        $remaining_cards = Json::decode(Yii::$app->request->get('remaining_cards'));

        $battle = new MgBattle();
        $ret_msg = $battle->initDeck(Yii::$app->user->id, $remaining_cards);
        return Json::encode($ret_msg);
    }

    /*
        获取玩家当前战场数据
    */
    public function actionMongoData()
    {
        $battle = new MgBattle();
        $ret_msg = $battle->getCurrentByUid(Yii::$app->user->id);
        return Json::encode($ret_msg);
    }

    /*
        获取玩家当前战场实时数据
    */
    public function actionData()
    {
        $battle_id = Yii::$app->request->get('battle_id');

        $redis_battle = new ReBattleField();
        $battle = $redis_battle->getById($battle_id);

        if ($battle) {
            if ($battle['player_1'] == Yii::$app->user->id) {
                $opponent_no = 2;
                $my_no = 1;
                $opponent_id = $battle['player_2'];
            } else {
                $opponent_no = 1;
                $my_no = 2;
                $opponent_id = $battle['player_1'];
            }
            $my_redis_deck_pool = new ReBattleFieldDeckPool($battle_id, Yii::$app->user->id);
            $opponent_redis_deck_pool = new ReBattleFieldDeckPool($battle_id, $opponent_id);
            $my_redis_handing_pool = new ReBattleFieldHandingPool($battle_id, Yii::$app->user->id);
            $opponent_redis_handing_pool = new ReBattleFieldHandingPool($battle_id, $opponent_id);
            $redis_cards = new ReCard();

            $data = [
                'opponent_hp'           => $battle["player_{$opponent_no}_hp"],
                'my_hp'                 => $battle["player_{$my_no}_hp"],
                'opponent_skill_on'     => $battle["hero_{$opponent_no}_skill_on"],
                'my_skill_on'           => $battle["hero_{$my_no}_skill_on"],
                'opponent_avatar'       => $battle["hero_{$opponent_no}_avatar"],
                'my_avatar'             => $battle["hero_{$my_no}_avatar"],
                'round_player'          => $battle["round_player"] == $opponent_no ? 'opponent' : 'me',
                'round_cnt'             => $battle['round_cnt'],
                'opponent_mana_max'     => $battle["mana_{$opponent_no}_max"],
                'my_mana_max'           => $battle["mana_{$my_no}_max"],
                'opponent_mana'         => $battle["mana_{$opponent_no}"],
                'my_mana'               => $battle["mana_{$my_no}"],
                'opponent_skill'        => $battle["hero_{$opponent_no}_skill"],
                'my_skill'              => $battle["hero_{$my_no}_skill"],
            ];

            $data['my_deck_pool_len'] = $my_redis_deck_pool->getLength();
            $data['opponent_deck_pool_len'] = $opponent_redis_deck_pool->getLength();
            $data['opponent_handing_pool_len'] = $opponent_redis_handing_pool->getLength();
            $my_handing_card_ids = $my_redis_handing_pool->getList();
            $res = $redis_cards->getListByKey($my_handing_card_ids['data']);
            $data['my_handing_cards'] = $res['data'];
            $data['my_handing_cards_len'] = count($res['data']);

            $ret_msg = ['ok' => true, 'msg' => '获取成功', 'data' => $data];
        } else {
            $ret_msg = ['ok' => false, 'msg' => '无效的战场ID'];
        }

        return Json::encode($ret_msg);
    }

    /*
        玩家结束回合(测试)
    */
    public function actionEndRound()
    {
        $battle_id = Yii::$app->request->get('battle_id');

        $redis_battle = new ReBattleField();
        $ret_msg = $redis_battle->endRound($battle_id, Yii::$app->user->id);

        return Json::encode($ret_msg);
    }

    /*
        玩家抽一张牌（测试）
    */
    public function actionDrawCard()
    {
        $battle_id = Yii::$app->request->get('battle_id');
        $player_id = Yii::$app->request->get('player_id');

        $redis_battle = new ReBattleField();

        $ret_msg = $redis_battle->drawCardFor($battle_id, $player_id);

        return Json::encode($ret_msg);
    }

    /*
        调试测试
    */
    public function actionTest()
    {
        
    }

}
