<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 13:49
 */

namespace app\api\model;


class SystemMessage extends BaseModel
{
    protected $hidden = [
        'update_time','delete_time','level'
    ];

}