<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 9:18
 */

namespace app\api\validate;


class OrderRangeTypeCheck extends BaseValidate
{
    protected $rule = [
        'rangetype'=>'require|isPositiveInteger|between:1,5',

        'currentcity'=>'require'
    ];

    protected $message = [
        'rangetype.require'=>'RangType is required.',
        'rangetype.isPositiveInteger'=>'RangeType must be a PositiveInteger.',
        'rangetype.between'=>'RangeType must be between 1 and 5.',

        'currentcity'=>'CurrentCity is required.'
    ];
}