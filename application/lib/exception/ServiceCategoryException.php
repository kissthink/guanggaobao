<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 15:57
 */

namespace app\lib\exception;


class ServiceCategoryException extends BaseException
{
    public $code = 404;
    public $msg = 'ServiceCategory do not exsit,please check out and try again';
    public $errorCode = 300001;
}