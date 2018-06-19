<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 17:45
 */

namespace app\api\validate;


class CurrentCity extends BaseValidate
{
    protected $rule = [
      'currentCity'=>'require|isNotEmpty'
    ];

    protected $message =[
        'currentCity'=>'No currentCity exsit,please check it out and try again.'
    ];
}