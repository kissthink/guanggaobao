<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 16:29
 */

namespace app\lib\exception;


class SystemMessageException extends BaseException
{
    public $code = 404;
    public $msg = 'SystemMessage do not exit, please check and try agagin.';
    public $errorCode = 40001;
}