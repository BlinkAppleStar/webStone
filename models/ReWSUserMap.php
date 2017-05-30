<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * Redis 玩家ID与websocket链接ID映射关系类
 *
 *
 */

/*
    h_connect_to_user => [
        'connect_id' => manager_id
        ...
    ]

*/
class ReWSUserMap extends Model
{
    public $tableName = 'h_connect_to_user';

    /*
        映射更新
    */
    public function update($uid, $connect_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $redis->conn->Hset($this->tableName, $connect_id, $uid);
            $map = new ReUserWSMap();
            $redis->conn->Hset($map->tableName, $uid, $connect_id);

            $ret_msg = ['ok' => true, 'msg' => '映射用户连接成功'];
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        关闭链接
    */
    public function close($connect_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $uid = $redis->conn->Hget($this->tableName, $connect_id);
            $redis->conn->Hdel($this->tableName, $connect_id);
            $map = new ReUserWSMap();
            $redis->conn->Hdel($map->tableName, $uid);
        } else {
            $res = false;
        }

        return $res;
    }

    /*
        获取链接的玩家ID
    */
    public function getUidByConn($connect_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $res = $redis->conn->Hget($this->tableName, $connect_id);
            if ($res) {
                $ret_msg = ['ok' => true, 'msg' => '获取成功', 'data' => $res];
            } else {
                $ret_msg = ['ok' => false, 'msg' => '获取失败'];
            }
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

}
