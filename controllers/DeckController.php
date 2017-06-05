<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Json;
use yii\helpers\Url;
use app\models\MgManager;
use app\models\MgCard;
use app\models\MgHero;
use app\models\MgDeck;

class DeckController extends BaseController
{
    /*
        牌库列表数据
    */
    public function actionList()
    {
        $page       = Yii::$app->request->get('page');
        $page_size  = Yii::$app->request->get('page_size');
        $page_size  = $page_size > 0 ? $page_size : 10;
        $skip       = $page > 0 ? ($page - 1) * $page_size : 0;

        $model = new MgDeck();

        if (Yii::$app->request->isAjax || Yii::$app->request->get('ajax')) {
            $data = $model->search([
                'manager_id'    => Yii::$app->user->id,
            ], $skip, $page_size);

            return Json::encode(['ok' => true, 'msg' => '获取成功', 'data' => $data]);
        } else {
            return $this->render('deck_list', [
                'type_list'     => $type_list,
                'career_list'   => $career_list,
            ]);
        }
    }

    /*
        牌库新增
    */
    public function actionCreate()
    {
        if (Yii::$app->request->isAjax || Yii::$app->request->get('ajax')) {
            $model = new MgDeck();
            $ret_msg = $model->create(Yii::$app->request->get('hero_id', ''));
            return Json::encode($ret_msg);
        } else {
            $hero_model = new MgHero();
            $hero_list = $hero_model->findAllByAttributes();
            $career_list = $hero_model->getCareerList();

            return $this->render('new_deck', [
                'hero_list'         => $hero_list,
                'career_list'       => $career_list,
            ]);
        }
    }

    /*
        牌库编辑静态页
    */
    public function actionEditIndex()
    {
        $id = Yii::$app->request->get('mongo_id', '');
        $model = new MgDeck();
        $res = $model->findByPk($id);
        if (!$res) {
            $this->redirect('/deck/list');
        }

        $card_model = new MgCard();
        $card_type_list = $card_model->getTypeList();
        $card_level_list = $card_model->getLevelList();

        return $this->render('edit', [
            'model'             => $model,
            'card_type_list'    => $card_type_list,
            'card_level_list'   => $card_level_list,
        ]);
    }

    /*
        向指定牌库添加卡牌
    */
    public function actionAddCard()
    {
        $model = new MgDeck();
        return Json::encode($model->addCard(Yii::$app->request->get('deck_id', ''), Yii::$app->request->get('card_id', '')));
    }

    /*
        从指定牌库移除指定卡牌
    */
    public function actionRemoveCard()
    {
        $model = new MgDeck();
        return Json::encode($model->removeCard(Yii::$app->request->get('deck_id', ''), Yii::$app->request->get('card_id', '')));
    }

    /*
        牌库删除
    */
    public function actionDelete()
    {
        $model = new MgDeck();
        $res = $model->deleteByPk(Yii::$app->request->get('id', ''));
        if ($res) {
            $ret_msg = ['ok' => true, 'msg' => '删除成功'];
        } else {
            $ret_msg = ['ok' => false, 'msg' => '删除失败'];
        }

        return Json::encode($ret_msg);
    }

    /*
        ajax获取指定牌库详情
    */
    public function actionDetail()
    {
        $id = Yii::$app->request->get('id', '');
        $model = new MgDeck();
        $res = $model->findByPk($id);
        if ($res) {
            if ($model->attributes['manager_id'] != Yii::$app->user->id) {
                $ret_msg = ['ok' => false, 'msg' => '不能查看别人的牌库'];
            } else {
                $ret_msg = ['ok' => true, 'msg' => '获取成功', 'data' => $model->attributes];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => '获取失败'];
        }

        return Json::encode($ret_msg);
    }

    /*
        ajax修改牌库名字
    */
    public function actionEditName()
    {
        $id = Yii::$app->request->get('deck_id', '');
        $model = new MgDeck();
        $res = $model->findByPk($id);
        if ($res) {
            $model->attributes['name'] = Yii::$app->request->get('name', '');
            $res = $model->save();
            if ($res) {
                $ret_msg = ['ok' => true, 'msg' => '修改成功'];
            } else {
                $ret_msg = ['ok' => false, 'msg' => '保存失败'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => '无效的牌库'];
        }

        return Json::encode($ret_msg);
    }

}
