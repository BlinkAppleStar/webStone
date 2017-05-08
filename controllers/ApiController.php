<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use app\models\MgManager;

class ApiController extends Controller
{
    public function actionInit()
    {
        $model = new MgManager();
        $admin = $model->findByAttributes(['name' => 'admin']);
        if (!$admin) {
            $model->attributes = [
                'name'          => 'admin',
                'nickname'      => '管理员',
                'password'      => md5('admin'),
                'email'         => '',
                'real_name'     => '',
                'status'        => '1',
                'created_time'  => time(),
                'last_login'    => 0,
            ];

            $model->save();
            $ret_msg = ['ok' => true, 'msg' => '已初始化'];
        } else {
            $ret_msg = ['ok' => false, 'msg' => '不需初始化'];
        }

        return Json::encode($ret_msg);
    }

}
