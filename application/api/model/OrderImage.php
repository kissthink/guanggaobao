<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 11:59
 */

namespace app\api\model;


class OrderImage extends BaseModel
{
    protected $hidden =[
        'create_time','update_time','delete_time','order_id','id'
    ];
}