<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Json;
use app\models\ReBattleFieldQueue;
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
        return $this->render('index', [

        ]);
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
        $remaining_cards = Yii::$app->request->get('remaining_cards');

        $battle = new MgBattle();
        $ret_msg = $battle->initDeck(Yii::$app->user->id, $remaining_cards);
        return Json::encode($ret_msg);
    }

    /*
        获取玩家当前战场数据
    */
    public function actionData()
    {
        $battle = new MgBattle();
        $ret_msg = $battle->getCurrentByUid(Yii::$app->user->id);
        return Json::encode($ret_msg);
    }
}
