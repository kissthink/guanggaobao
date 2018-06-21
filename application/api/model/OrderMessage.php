<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 16:56
 */

namespace app\api\model;


class OrderMessage extends BaseModel
{
//    获取对应id用户未被阅读的订单信息数
    public static function getNewOrdersCount($id)
    {
        return self::where(['user_id'=>$id,'status'=>0])->count();
    }

    public static function getMyOrders($id)
    {
        return self::where(['user_id'=>$id])->select();
    }
}