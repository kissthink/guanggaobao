<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 13:47
 */

namespace app\api\controller\v1;

use app\api\service\SystemMessage;
use app\lib\exception\SystemMessageException;

class Message
{
    //获取平台最新系统公告
    public function getRecentMsg()
    {
        $systemMsg = SystemMessage::getRecentMsg();
        return $systemMsg;

    }

    //    根据用户id获取对应的订单信息数量
    public function  getMyOrdersMessageCount($id)
    {
        $orderMsgCount = SystemMessage::getMyOrdersCount($id);
        return $orderMsgCount;
    }
    //    根据用户id获取对应的订单信息
    public function  getMyOrdersMessage($id)
    {
        $msg = SystemMessage::getMyOrders($id);
        return $msg;
    }
}