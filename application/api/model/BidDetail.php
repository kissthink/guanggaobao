<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 11:06
 */

namespace app\api\model;


class BidDetail extends BaseModel
{
    public function user()
    {
        return $this->belongsTo('user','bider_id','id');

    }
}