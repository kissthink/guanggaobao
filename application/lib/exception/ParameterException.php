<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/12
 * Time: 14:32
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode ='10000';
}