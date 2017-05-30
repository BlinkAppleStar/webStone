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
    h_user_to_connect => [
        '585a47bc7f8b9a43058b4567' => connect_id
        ...
    ]

*/
class ReUserWSMap extends Model
{
    public $tableName = 'h_user_to_connect';

    /*
        映射更新
    */
    public function update($uid, $connect_id)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $redis->conn->Hset($this->tableName, $uid, $connect_id);
            $map = new ReWSUserMap();
            $redis->conn->Hset($map->tableName, $connect_id, $uid);

            $ret_msg = ['ok' => true, 'msg' => '映射用户连接成功'];
        } else {
            $ret_msg = ['ok' => false, 'msg' => 'Redis 链接失败'];
        }

        return $ret_msg;
    }

    /*
        关闭链接
    */
    public function close($uid)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            $connect_id = $redis->conn->Hget($this->tableName, $uid);
            $redis->conn->Hdel($this->tableName, $uid);
            $map = new ReWSUserMap();
            $redis->conn->Hdel($map->tableName, $connect_id);
        } else {
            $res = false;
        }

        return $res;
    }

    /*
        获取玩家链接ID
    */
    public function getConnByUid($uid)
    {
        $redis = Yii::$app->Rdb;
        if ($redis->isConnected() || $redis->connect()) {
            if (is_array($uid)) {
                $res = $redis->conn->Hmget($this->tableName, $uid);
            } else {
                $res = $redis->conn->Hget($this->tableName, $uid);
            }
            
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
