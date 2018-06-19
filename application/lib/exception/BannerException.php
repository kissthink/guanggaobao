<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 14:59
 */

namespace app\lib\exception;


class BannerException extends BaseException
{
    public $code = 404;
    public $msg = 'No banners has been found,please check your params!';
    public $errorCode = 20000;
}