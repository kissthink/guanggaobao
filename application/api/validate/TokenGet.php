<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/22
 * Time: 9:37
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'token'=>'require|isNotEmpty'
    ];
    protected $message = [
        'token'=>'the string for token is required',
    ];
}