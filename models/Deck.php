<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * MongoDb 套牌类
 *
 *
 */

/*
    {
            "_id" : ObjectId("585a47bc7f8b9a43058b4567"),
            "name" : "自定义套牌名字",
            "cards" : [],//套牌中的牌
            "hero_id" : "xxx", // 套牌的英雄
            "manager_id" : "xxxx", // 套牌的玩家ID
            "created_time" : NumberLong(1482311612),
    }

*/
class Deck extends MongoModel
{
    public $tableName = 'card';

    const MAX_CAPACITY = 30; // 最大容量
}
