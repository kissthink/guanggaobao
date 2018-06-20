<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 9:18
 */

namespace app\api\validate;


class OrderAllCheck extends BaseValidate
{
    protected $rule = [
        'currentcity'=>'require'
    ];

    protected $message = [
        'currentcity'=>'CurrentCity is required.'
    ];
}