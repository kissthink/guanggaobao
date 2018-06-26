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
use app\api\model\SystemUser as SystemUserModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\SystemMessageException;

class SystemMessage
{
//    获取系统最新未被阅读的信息数量
    public static function getNewMsgCount($id)
    {
        $newMsgCount = SystemUserModel::getNewMsgCount($id);
        if(!$newMsgCount)
        {
            throw new SystemMessageException();
        }else{
            return $newMsgCount;
        }

    }
//    获取系统最新的信息
    public static function getSysMsg($id)
    {
        $newMsg = SystemUserModel::getSysMsg($id);
        if($newMsg->isEmpty())
        {
            throw new SystemMessageException();
        }else{
            return $newMsg;
        }

    }

    /**
     * @param $id
     * @return int|string
     * @throws SystemMessageException
     * @throws \app\lib\exception\ParameterException
     */
    public  static function getNewOrdersCount($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $orderMsgCount = OrderMessageModel::getNewOrdersCount($id);
        if(!$orderMsgCount)
        {
            throw new SystemMessageException('123'
            );
        }
        else{
            return $orderMsgCount;
        }
    }

    /**
     * @param $id
     * @return false|\PDOStatement|string|\think\Collection
     * @throws SystemMessageException
     * @throws \app\lib\exception\ParameterException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public  static function getMyOrders($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $orderMsg = OrderMessageModel::getMyOrders($id);
        if($orderMsg->isEmpty())
        {
            throw new SystemMessageException(
            );
        }
        else{
            return $orderMsg;
        }
    }
}