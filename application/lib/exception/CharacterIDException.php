<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 15:25
 */

namespace app\lib\exception;


class CharacterIDException extends BaseException
{
    public $code = 404;
    public $msg = 'Invalid params or users do not exist,please check your params and try again';
    public $errorCode = 300002;
}