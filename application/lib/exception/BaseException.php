<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/12
 * Time: 9:53
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
//    HTTP 状态码 404,200
    public $code =400;
//    错误具体信息(实际应用时最好写成英文的错误信息）
    public $msg = "参数错误";
//    自定义的错误码
    public $errorCode = 10000;

//    public function  __construct($params = [])
//    {
//        if (!is_array($params))
//        {
////            return;不认为调用者想改写构造函数原参数内容,所以只原路返回
////          throw new Exception('参数必须是数组!');
//        }
//        if(array_key_exists('code',$params))
//        {
//            $this->code = $params['code'];
//        }
//        if(array_key_exists('msg',$params))
//        {
//            $this->msg = $params['msg'];
//        }
//        if(array_key_exists('errorCode',$params))
//        {
//            $this->errorCode = $params['errorCode'];
//        }
//    }
}