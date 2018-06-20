<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 16:56
 */

namespace app\api\model;


class OrderMessage extends BaseModel
{
    public static function getMyOrdersCount($id)
    {
        return self::count('user_id', $id);
    }
}