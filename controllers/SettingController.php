<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Json;
use yii\helpers\Url;
use app\models\MgManager;
use app\models\MgCard;
use app\models\MgHero;

class SettingController extends BaseController
{
    /*
        卡片列表数据
    */
    public function actionCardList()
    {
        $page       = Yii::$app->request->get('page');
        $page_size  = Yii::$app->request->get('page_size');
        $page_size  = $page_size > 0 ? $page_size : 10;
        $skip       = $page > 0 ? ($page - 1) * $page_size : 0;

        $model = new MgCard();

        if (Yii::$app->request->isAjax || Yii::$app->request->get('ajax')) {
            $data = $model->search([
                '_id'           => Yii::$app->request->get('mongo_id'),
                'type'          => Yii::$app->request->get('type'),
                'name_like'     => Yii::$app->request->get('name_like'),
                'mana'          => Yii::$app->request->get('mana'),
                'mana_min'      => Yii::$app->request->get('mana_min'),
                'career'        => Yii::$app->request->get('career'),
                'level'         => Yii::$app->request->get('level'),
            ], $skip, $page_size);

            return Json::encode(['ok' => true, 'msg' => '获取成功', 'data' => $data]);
        } else {
            $type_list = $model->getTypeList();

            $hero_model = new MgHero();
            $career_list = $hero_model->getCareerList();

            return $this->render('card_list', [
                'type_list'     => $type_list,
                'career_list'   => $career_list,
            ]);
        }
    }

    /*
        卡片编辑/新增
    */
    public function actionCardEdit()
    {
        $mongo_id = Yii::$app->request->post('mongo_id') ? Yii::$app->request->post('mongo_id') : Yii::$app->request->get('mongo_id');

        $model = new MgCard();
        $res = $model->findByPk($mongo_id);
        if ($res) {
            $action = 'Edit';
        } else {
            $action = 'Add';
        }

        if (Yii::$app->request->isPost) {

            $model->attributes = [
                'name'          => Yii::$app->request->post('name', ''),
                'type'          => Yii::$app->request->post('type', ''),
                'mana'          => Yii::$app->request->post('mana', ''),
                'damage'        => Yii::$app->request->post('damage', ''),
                'hp'            => Yii::$app->request->post('hp', ''),
                'skill_desc'    => Yii::$app->request->post('skill_desc', ''),
                'skill_id'      => Yii::$app->request->post('skill_id', ''),
                'career'        => Yii::$app->request->post('career', ''),
                'level'         => Yii::$app->request->post('level', ''),
                'image'         => Yii::$app->request->post('image', ''),
                'updated_time'  => time(),
            ];

            $res = $model->save();
            if (!$res) {
                $ret_msg = ['ok' => false, 'msg' => '保存失败'];
            } else {
                $ret_msg = ['ok' => true, 'msg' => '保存成功'];
            }
        }

        if (Yii::$app->request->isAjax || Yii::$app->request->post('ajax')) {
            return Json::encode($ret_msg);
        } else {
            $type_list = $model->getTypeList();

            $hero_model = new MgHero();
            $career_list = $hero_model->getCareerList();

            return $this->render('card_edit', [
                'model'             => $model,
                'type_list'         => $type_list,
                'career_list'       => $career_list,
                'action'            => $action,
                'msg'               => $ret_msg['msg'],
            ]);
        }
    }

    /*
        卡牌删除
    */
    public function actionCardDelete()
    {
        $model = new MgCard();
        return Json::encode($model->remove(Yii::$app->request->get('id', '')));
    }

    /*
        获取卡牌类型列表
    */
    public function actionCardTypeList()
    {
        $model = new MgCard();
        return Json::encode(['ok' => true, 'msg' => '获取成功', 'data' => $model->getTypeList()]);
    }

    /*
        获取卡牌级别列表
    */
    public function actionCardLevelList()
    {
        $model = new MgCard();
        return Json::encode(['ok' => true, 'msg' => '获取成功', 'data' => $model->getLevelList()]);
    }

    /*
        英雄列表
    */
    public function actionHeroList()
    {
        $model = new MgHero();
        $list = $model->findAllByAttributes();

        $career_list = $model->getCareerList();

        if (Yii::$app->request->isAjax || Yii::$app->request->get('ajax')) {
            return Json::encode(['ok' => true, 'msg' => '获取成功', 'data' => ['list' => $list, 'career_list' => $career_list]]);
        } else {
            return $this->render('hero_list', [
                'list'          => $list,
                'career_list'   => $career_list,
            ]);
        }
    }

    /*
        英雄新增编辑
    */
    public function actionHeroEdit()
    {
        $mongo_id = Yii::$app->request->post('mongo_id') ? Yii::$app->request->post('mongo_id') : Yii::$app->request->get('mongo_id');

        $model = new MgHero();
        $res = $model->findByPk($mongo_id);
        if ($res) {
            $action = 'Edit';
        } else {
            $action = 'Add';
        }

        if (Yii::$app->request->isPost) {

            $model->attributes = [
                'name'          => Yii::$app->request->post('name', ''),
                'career'        => Yii::$app->request->post('career', ''),
                'avatar'        => Yii::$app->request->post('avatar', ''),
                'skill_image'   => Yii::$app->request->post('skill_image', ''),
                'logo'          => Yii::$app->request->post('logo', ''),
            ];

            $res = $model->save();
            if (!$res) {
                $ret_msg = ['ok' => false, 'msg' => '保存失败'];
            } else {
                $ret_msg = ['ok' => true, 'msg' => '保存成功'];
            }
        }

        if (Yii::$app->request->isAjax || Yii::$app->request->post('ajax')) {
            return Json::encode($ret_msg);
        } else {
            $career_list = $model->getCareerList();

            return $this->render('hero_edit', [
                'model'             => $model,
                'career_list'       => $career_list,
                'action'            => $action,
                'msg'               => $ret_msg['msg'],
            ]);
        }
    }

    /*
        英雄删除
    */
    public function actionHeroDelete()
    {
        $model = new MgHero();
        return Json::encode($model->remove(Yii::$app->request->get('id', '')));
    }

    /*
        获取英雄职业列表
    */
    public function actionHeroCareerList()
    {
        $model = new MgHero();
        return Json::encode(['ok' => true, 'msg' => '获取成功', 'data' => $model->getCareerList()]);
    }

}
