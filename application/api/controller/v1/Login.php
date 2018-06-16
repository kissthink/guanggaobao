<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/16
 * Time: 14:51
 */

namespace app\api\controller\v1;


use app\api\validate\MobilePhoneNumber;
use app\api\model\User as UserModel;
use think\Controller;
use think\Db;

class Login
{
    public function  login()
    {
        $params = (new MobilePhoneNumber())->goCheck();
//        $user = UserModel::Where('phone_number','=',$params['phone_number'])->find();
        $user = UserModel::getUserInfo($params);
        if (!$user){
            return json(['该用户不存在','code'=>500]);;
    }else{
            return json(['userinfo:'=>$user,'code'=>200]);
        }

    }
}