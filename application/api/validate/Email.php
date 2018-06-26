<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/23
 * Time: 18:43
 */

namespace app\api\validate;


class Email extends BaseValidate
{
    protected $rule = [
        'username'=>'require|email'
    ];
    protected $message =['Invalid email,please your check it our and try again'];
}