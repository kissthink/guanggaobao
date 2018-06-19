<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 13:37
 */

namespace app\api\model;


class Banner extends BaseModel
{
    protected $hidden = [
        'create_time','update_time'
    ];
    public static function getBannersAll()
    {
        return self::order('id desc')->select();
    }
}