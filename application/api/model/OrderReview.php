<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/22
 * Time: 14:43
 */
//订单追评表模型

namespace app\api\model;


class OrderReview extends BaseModel
{
    protected $hidden = [
        'comment_id','commenter_id','update_time','delete_time','commenter.id','commenter.phone_number','commenter.email',
        'commenter.email','commenter.brief_introduction','commenter.level','commenter.vip','commenter.score','commenter.city'
    ];
//    订单追评表关联用户表
    public function commenter()
    {
        return $this->belongsTo('User','commenter_id','id');
    }
}