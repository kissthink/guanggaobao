<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 16:05
 */

namespace app\api\service;

use app\api\model\OrderMessage as OrderMessageModel;
use app\api\model\SystemMessage as SystemMessageModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\SystemMessageException;

class SystemMessage
{
    public static function getRecentMsg()
    {
        $systemMsg = SystemMessageModel::all();
        if($systemMsg->isEmpty())
        {
            throw new SystemMessageException();
        }else{
            return $systemMsg;
        }

    }

    public  static function getMyOrdersCount($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $orderMsgCount = OrderMessageModel::getMyOrdersCount($id);
        if(!$orderMsgCount)
        {
            throw new SystemMessageException();
        }
        else{
            return $orderMsgCount;
        }
    }

    public  static function getMyOrders($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $orderMsg = OrderMessageModel::all($id);
        if($orderMsg->isEmpty())
        {
            throw new SystemMessageException();
        }
        else{
            return $orderMsg;
        }
    }
}