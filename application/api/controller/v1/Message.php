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
    //获取平台最新系统公告数量
    public function getSysMsg($id)
    {
        $systemMsg = SystemMessage::getSysMsg($id);
        return $systemMsg;

    }
    //获取平台最新系统公告
    public function getNewMsgCount($id)
    {
        $systemMsg = SystemMessage::getNewMsgCount($id);
        return $systemMsg;

    }

    //    根据用户id获取对应的...未被阅读...的订单信息数量
    public function  getNewOrdersMessageCount($id)
    {
        $orderMsgCount = SystemMessage::getNewOrdersCount($id);
        return $orderMsgCount;
    }
    //    根据用户id获取对应的订单信息,按时间降序排列
    public function  getMyOrdersMessage($id)
    {
        $msg = SystemMessage::getMyOrders($id);
        return $msg;
    }
}