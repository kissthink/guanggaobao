<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 9:15
 */

namespace app\lib\exception;


class UserInvalidException   extends BaseException
{
    public $code = 403;
    public $msg = 'Invalid username or password,please check out and try again.';
    public $errorCode = 10002;
}