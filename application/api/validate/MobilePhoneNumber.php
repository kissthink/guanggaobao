<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/16
 * Time: 15:44
 */

namespace app\api\validate;

//验证手机号格式
class MobilePhoneNumber extends BaseValidate
{
    protected $rule = [
      'username' =>['/^1[34578]\d{9}$/'],
    ];

    protected $message = [
        'username' =>'手机号码格式不正确'
    ];
}