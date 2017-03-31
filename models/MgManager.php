<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * MongoDb 管理员类
 *
 *
 */

/*
    {
            "_id" : ObjectId("585a47bc7f8b9a43058b4567"),
            "name" : "admin",
            "nickname" : "昵称",
            "password" : "21232f297a57a5a743894a0e4a801fc3",
            "email" : "",
            "real_name" : "",
            "status" : "1",
            "created_time" : NumberLong(1482311612),
            "last_login" : NumberLong(1482397212)
    }

*/
class MgManager extends MongoModel
{
    public $tableName = 'manager';

    /*
        检查指定管理员是否为admin
    */
    public function isAdmin($manager_id)
    {
        $res = $this->findByAttributes([
            '_id'               => new \MongoId($manager_id),
            'name'              => 'admin',
        ]);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
