<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/12
 * Time: 9:56
 */

namespace app\lib\exception;

class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode ='40000';
}