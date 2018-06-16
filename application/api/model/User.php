<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/16
 * Time: 17:40
 */

namespace app\api\model;


class User extends BaseModel
{
    public static function getUserinfo($data)
    {
        $user = self::where('phone_number','=',$data['phone_number'])->find();
        if ($user['password']==$data['password'])
        {
            return $user;
        }
    }
}