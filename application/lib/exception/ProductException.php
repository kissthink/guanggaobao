<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/25
 * Time: 16:49
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code = 404;
    public $msg = 'Products do not exist ,please check it out and try agagin.';
    public $errorCode = 300003;
}