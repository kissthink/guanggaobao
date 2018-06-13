<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/10
 * Time: 11:44
 */

namespace app\api\validate;


class TestValidate extends BaseValidate
{
    protected  $rule = [
        'name'=>'require|max:10',
        'email'=>'email'
    ];
}