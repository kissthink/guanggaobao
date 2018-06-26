<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/22
 * Time: 9:27
 */

namespace app\api\service;


class Token
{
    public static function  generateToken()
    {
        /**
         * 生成32位字符组成的随机字符串
         */
        $randChars = getRandChar(32);
        /**
         * 用三组字符串.进行MD5加密
         */
        $timestamp = $_SERVER['REQUEST_TIME_FLOAT'];
        /*
         * salt 盐
         */
        $salt = config('secure.token_salt');
        return md5($randChars,$timestamp,$salt);
    }
}