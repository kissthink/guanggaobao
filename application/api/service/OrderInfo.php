<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 9:09
 */

namespace app\api\service;


use app\api\model\Order as OrderModel;
use app\lib\exception\OrderGetException;
use app\api\model\OrderCollection as OrderCollection;
class OrderInfo
{
//    根据当前城市选择订单列表
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
}