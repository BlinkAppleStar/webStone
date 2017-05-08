<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Json;
use yii\helpers\Url;
use app\models\MgManager;
use app\models\Card;
use app\models\Hero;

class SettingController extends BaseController
{
    /*
        卡片列表数据
    */
    public function actionCardList()
    {
        $model = new Card();
        $list = $model->findAllByAttributes();
        
        foreach ($list as &$manager) {
            $manager['created_time'] = date('Y-m-d H:i:s', $manager['created_time']);
            $manager['last_login'] = date('Y-m-d H:i:s', $manager['last_login']);
        }

        if (Yii::$app->request->isAjax || Yii::$app->request->get('ajax')) {
            return Json::encode(['ok' => true, 'msg' => '获取成功', 'data' => $list]);
        } else {
            return $this->render('index', [
                'list'          => $list,
            ]);
        }
    }

    /*
        卡片编辑/新增
    */
    public function actionCardEdit()
    {
        $mongo_id = Yii::$app->request->post('mongo_id') ? Yii::$app->request->post('mongo_id') : Yii::$app->request->get('mongo_id');

        $model = new Card();
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
                'hero_id'       => Yii::$app->request->post('hero_id', ''),
                'level'         => Yii::$app->request->post('level', ''),
                'created_time'  => time(),
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
            return $this->render('edit', [
                'model'             => $model,
                'action'            => $action,
                'msg'               => $ret_msg['msg'],
            ]);
        }
    }

    /*
        英雄列表
    */
    public function actionHeroList()
    {
        $model = new Card();
        $list = $model->findAllByAttributes();
        
        foreach ($list as &$manager) {
            $manager['created_time'] = date('Y-m-d H:i:s', $manager['created_time']);
            $manager['last_login'] = date('Y-m-d H:i:s', $manager['last_login']);
        }

        if (Yii::$app->request->isAjax || Yii::$app->request->get('ajax')) {
            return Json::encode(['ok' => true, 'msg' => '获取成功', 'data' => $list]);
        } else {
            return $this->render('index', [
                'list'          => $list,
            ]);
        }
    }

    /*
        英雄新增编辑
    */
    public function actionHeroEdit()
    {
        $mongo_id = Yii::$app->request->post('mongo_id') ? Yii::$app->request->post('mongo_id') : Yii::$app->request->get('mongo_id');

        $model = new Hero();
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

}
