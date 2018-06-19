<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 15:34
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
      'id'=>'require|isPositiveInteger'
    ];

    protected $message = [
        'id'=>'id must be a PositiveInteger'
    ];
}