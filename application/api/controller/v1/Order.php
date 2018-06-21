<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 9:06
 */

namespace app\api\controller\v1;


use app\api\service\OrderInfo;
use app\api\service\SystemMessage;
use app\api\validate\IDMustBePositiveInt;
use app\api\validate\OrderAllCheck;
use app\api\validate\OrderRangeTypeCheck;
class Order
{
// 根据当前城市获取订单信息
    public function getByCurrentCity($currentcity)
    {
        (new OrderAllCheck())->goCheck();
        $allOrders = OrderInfo::getByCurrentCity($currentcity);
        return $allOrders;
    }
//    根据当前城市和服务范围获取订单信息
    public function getByRange($rangetype,$currentcity)
    {
        (new OrderRangeTypeCheck())->goCheck();
        $Orders = OrderInfo::getByRangeType($rangetype,$currentcity);
        return $Orders;
    }
//    根据当前城市、服务范围、服务类别获取订单信息
    public function getByCategory($rangetype,$categorytype,$currentcity)
    {
        (new OrderRangeTypeCheck())->goCheck();
        $Orders = OrderInfo::getByCategory($rangetype,$categorytype,$currentcity);
        return $Orders;
    }
//    根据用户id获取对应的收藏的正在竞价的订单信息
    public function getOrderCollection($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $orderCollection = OrderInfo::getCollection($id);
        return $orderCollection;
    }

    public function getMyBidOrders($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $bidOrders = OrderInfo::getBidOrders($id);
        return $bidOrders;
    }
}