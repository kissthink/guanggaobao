<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 9:06
 */

namespace app\api\controller\v1;


use app\api\service\OrderInfo;
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
//    获取用户参与竞价的订单数量
    public function getMyBidOrders($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $bidOrders = OrderInfo::getBidOrders($id);
        return $bidOrders;
    }
//    获取用户参与竞价的订单列表
    public function getBidOrderCount($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $bidOrderCount= OrderInfo::getBidOrderCount($id);
        return $bidOrderCount;
    }

    //    根据订单状态获取相应订单数量
//1.待发货订单：status 1
    public function getOrderByStatus($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $counts = OrderInfo::getOrderCountByStatus($id);
        return $counts;
}
//2.待收货订单：status 2
//3.待评价订单：status 3
//4.已完成订单：status 4

//    根据订单状态分类显示订单
//1.待发货订单：status 1
//public function getOrderBys1($id,$status)
//{
//    (new IDMustBePositiveInt())->goCheck();
//    $orders
//}
//2.待收货订单：status 2
//3.待评价订单：status 3
//4.已完成订单：status 4


}