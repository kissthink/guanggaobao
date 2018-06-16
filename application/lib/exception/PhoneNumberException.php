<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/16
 * Time: 16:45
 */

namespace app\lib\exception;


class PhoneNumberException extends BaseException
{
//    HTTP 状态码 404,200
    public $code =400;
//    错误具体信息(实际应用时最好写成英文的错误信息）
    public $msg = "手机号码格式错误";
//    自定义的错误码
    public $errorCode = 10001;
}