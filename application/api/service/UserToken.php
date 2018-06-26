<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/22
 * Time: 9:27
 */

namespace app\api\service;

/**
 * Class UserToken 生成用户令牌
 * @package app\api\service
 */
class UserToken extends Token
{
    public function saveToCache()
    {
        $key = self::generateToken();
    }
}