<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 9:53
 */

namespace app\api\model;


class Order extends BaseModel
{
    protected $hidden =[
        'update_time','delete_time','order_img_id','category_type','current_city','range_type','publish_type'
    ];

    public static function getByCurrentCity($currentcity)
    {
        $orders = self::with('user,imgs')->withCount('bidders')
            ->where('current_city','=',$currentcity)
            ->where('status','=',0)
            ->order('create_time','desc')
            ->select();
        $orders->hidden(['user.phone_number','user.email','brief_introduction','user.level','user.vip','user.score','user.city']);
        return $orders;
    }

    public function user()
    {
        return $this->belongsTo('User','user_id','id');
    }

    public  function imgs()
    {
        return $this->hasOne('Order_Image','order_id','id');
    }
    public function bidders()
    {
        return $this->hasMany('BidDetail','order_id','id');
    }

    public static function getByRangeType($rangetype, $currentcity)
    {
        $orders = self::with('user')->withCount('bidders')
            ->where('range_type','=',$rangetype)
            ->where('current_city','=',$currentcity)
            ->where('status','=',0)
            ->order('create_time','desc')
            ->select();
        $orders->hidden(['user.phone_number','user.email','brief_introduction','user.level','user.vip','user.score','user.city']);
        return $orders;
    }

    public static function getByCategoryType($rangetype, $categorytype, $currentcity)
    {
        $orders = self::with('user')->withCount('bidders')
            ->where('range_type','=',$rangetype)
            ->where('category_type','=',$categorytype)
            ->where('current_city','=',$currentcity)
            ->where('status','=',0)
            ->order('create_time','desc')
            ->select();
        $orders->hidden(['user.phone_number','user.email','brief_introduction','user.level','user.vip','user.score','user.city']);
        return $orders;
    }

    public static function getCollection($id)
    {
        $orderCollection =  self::with('orderUsers')->where('user_id',$id)->select();
        $orderCollection->hidden(['order_users.pivot','order_users.phone_number','order_users.email','brief_introduction',
            'order_users.level','order_users.vip','order_users.score','order_users.city','order_users.position']);
        return $orderCollection;
    }

    public function orderUsers()
    {
        return $this->belongsToMany('Order','order_collection','user_id','order_id');
    }
}