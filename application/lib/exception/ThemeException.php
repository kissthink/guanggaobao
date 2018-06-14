<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/14
 * Time: 16:30
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定主题不存在,请检查主题ID';
    public $errorCode = 30000;
}