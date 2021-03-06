<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 9:09
 */

namespace app\api\service;


use app\api\model\Order as OrderModel;
use app\api\model\OrderBider;
use app\api\model\User as UserModel;
use app\lib\exception\OrderGetException;

class OrderInfo
{
//    根据当前城市选择订单列表
/*@param currentCity
 *
 *
 * */
    public static function getByCurrentCity($currentcity)
    {
        $order = OrderModel::getByCurrentCity($currentcity);
        if($order->isEmpty())
        {
            throw new OrderGetException();
        }
        return $order;
    }
    //根据当前城市和服务范围选择订单
    public static function getByRangeType($rangetype, $currentcity)
    {
        $order = OrderModel::getByRangeType($rangetype, $currentcity);
        if($order->isEmpty())
        {
            throw new OrderGetException();
        }
        return $order;
    }
//根据当前城市和服务范围,服务类目选择订单
    public static function getByCategoryType($rangetype, $categorytype, $currentcity)
    {
        $order = OrderModel::getByCategoryType($rangetype, $categorytype, $currentcity);
        if($order->isEmpty())
        {
            throw new OrderGetException();
        }
        return $order;
    }

    //根据用户id获取自己的支付的订单
    public static function getMyOrders($id)
    {
        $order = OrderModel::getByCategoryType($id);
        if($order->isEmpty())
        {
            throw new OrderGetException();
        }
        return $order;
    }

    //根据用户id获取自己收藏的订单
    public static function getCollection($id)
    {
        $order = OrderModel::getCollection($id);
        if($order->isEmpty())
        {
            throw new OrderGetException();
        }
        return $order;
    }
    //    获取用户参与竞价的订单数量
    public static function getBidOrderCount($id)
    {
        $bidOrderCount =OrderBider::getBiderCount($id);
        if(!$bidOrderCount)
        {
            throw new OrderGetException();
        }
        return $bidOrderCount;
    }
    //    获取用户参与竞价的订单
    public static function getBidOrders($id)
    {
        $bidOrders =UserModel::getBidOrders($id);
        if($bidOrders->isEmpty())
        {
            throw new OrderGetException();
        }
        return $bidOrders;
    }
    //根据用户id和订单状态获取订单数
    public static function getOrderCountByStatus($id)
    {
        $CountByStatus = [];
        for ($s =0;$s<=4;$s++)
        {
            $CountByStatus[$s] = OrderModel::countByStatus($id,$s);
        }
        return json(['orderCount'=>$CountByStatus,],200);
    }
}