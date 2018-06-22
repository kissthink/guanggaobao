<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/22
 * Time: 13:38
 */

namespace app\api\model;


class OrderBider extends BaseModel
{
//    根据用户id获取用户参与的为结束的竞价订单数量
    public static function getBiderCount($id)
    {
        return self::where(['bider_id'=>$id,'order_status'=>'0'])->count();
    }
}