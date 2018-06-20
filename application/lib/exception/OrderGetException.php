<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 10:41
 */

namespace app\lib\exception;


class OrderGetException extends BaseException
{
    public $code = 404;
    public $msg = 'orders do not exsit,please check it out and try again.';
    public $errorCode = 40002;
}