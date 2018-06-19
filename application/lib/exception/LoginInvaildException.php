<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 9:37
 */

namespace app\lib\exception;


class LoginInvaildException extends BaseException
{
    public $code = 403;
    public $msg = 'Invalid login way';
    public $errorCode =10003;
}