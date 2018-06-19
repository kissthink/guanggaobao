<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 15:50
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}