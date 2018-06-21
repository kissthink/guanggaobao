<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/21
 * Time: 13:42
 */

namespace app\lib\exception;


class UserInfoException extends BaseException
{
    public $code = 404;
    public $msg = 'Users do not exsit,please check it out and try again';
    public $errorCode = 50001;
}