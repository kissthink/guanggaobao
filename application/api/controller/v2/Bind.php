<?php
///**
// * Created by "李云龙".
// * User: Administrator
// * Date: 2018/6/25
// * Time: 13:24
// */
//
//namespace app\api\controller\v2;
//require_once './vendor/workerman/gateway-worker-for-win/src/Gateway.php';
//use GatewayClient\GateWay;
//class Bind
//{
////加载GatewayClient。关于GatewayClient参见本页面底部介绍
//
//// GatewayClient 3.0.0版本开始要使用命名空间
//public function bind(){
//    // 设置GatewayWorker服务的Register服务ip和端口，请根据实际情况改成实际值(ip不能是0.0.0.0)
//    Gateway::$registerAddress = '127.0.0.1:1236';
//
//// 假设用户已经登录，用户uid和群组id在session中
//    $uid      = $_SESSION['uid'];
//    $group_id = $_SESSION['group'];
//// client_id与uid绑定
//    Gateway::bindUid($client_id, $uid);
//// 加入某个群组（可调用多次加入多个群组）
//    Gateway::joinGroup($client_id, $group_id);
//}
//
//public function sendMessage()
//{
//
//}
//}