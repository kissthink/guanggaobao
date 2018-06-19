<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/16
 * Time: 14:51
 */

namespace app\api\controller\v1;


use app\api\service\UserInfo;
use app\api\validate\MobilePhoneNumber;
use think\Request;

class Login
{
//    用户登陆验证
    public function  loginIn(Request $res)
    {
        (new MobilePhoneNumber())->goCheck();
//        $user = UserModel::Where('phone_number','=',$params['phone_number'])->find();
        $params = $res->param();
        $userInfo = new UserInfo();
        $user = $userInfo->getUserInfo($params);
        return $user;
    }
}