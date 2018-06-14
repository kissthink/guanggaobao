<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/10
 * Time: 13:23
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected  $rule = [
        'id'=>'require|isPositiveInteger',
        'num'=>'in:1,2,3'
    ];
    protected  $message = [
        'id'=>'id必须是正整数',
        'num'=>'必须是1-3之间的正整数'
    ];
//    判断一个值是否为正整数
//    protected  function  isPositiveInteger($value,$rule = '',$data = '',$field = '')
//    {       #判断是否数字        判断是否整型               判断是否大于0
//        if (is_numeric($value)&&is_int($value + 0)&&($value + 0)>0){
//            return true;
//        }else{
//            return $field.'必须是正整数！';
//        }
//    }
}