<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 10:32
 */

namespace app\api\model;


class MyFans extends BaseModel
{
    protected $hidden =['create_time','update_time','delete_time','user_id'];
}