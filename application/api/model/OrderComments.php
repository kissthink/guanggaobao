<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/22
 * Time: 14:20
 */
//订单评论表模型

namespace app\api\model;

class OrderComments extends BaseModel
{
//    获取订单评论数量
    public static function orderCommentCount($id)
    {
        return self::where('customer_id',$id)
            ->count();
    }
//获取订单评论列表
    public static function getOrderComments($id)
    {
        $orderComments = self::with('review,review.commenter,order')->where('customer_id',$id)
                    ->order('create_time','desc')
                    ->select();
        $orderComments->hidden(['update_time','order_id','customer_id','delete_time',]);
        return $orderComments;
    }
//订单评论表关联追评表
    public function review()
    {
        return $this->hasMany('OrderReview','comment_id','id');
    }
//订单评论表关联订单表
    public function order()
    {
        return $this->belongsTo('Order','order_id','id');
    }
}