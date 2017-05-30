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
        获取玩家当前战场数据
    */
    public function actionData()
    {
        $battle = new MgBattle();
        $ret_msg = $battle->getCurrentByUid(Yii::$app->user->id);
        return Json::encode($ret_msg);
    }
}
