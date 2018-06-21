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
    protected $hidden = ['create_time', 'update_time', 'delete_time', 'password', 'login_way_id', 'character_id', 'range_id'];

//获取登陆用户的基本信息并回显
    public static function getUser($data, $checkID)
    {

        $user = self::with('fans,follows,serviceEvaluation')->withCount('fans,follows')->where($checkID, '=', $data[$checkID])->find();
        return $user;
    }

    public function fans()
    {
        return $this->hasMany('MyFans', 'user_id', 'id');
    }

    public function follows()
    {
        return $this->hasMany('MyFollows', 'user_id', 'id');
    }

    public function serviceEvaluation()
    {
        return $this->hasOne('ServiceEvaluation', 'user_id', 'id');
    }

//根据用户id获取用户参与竞价的订单列表
    public static function getBidOrders($id)
    {
        $bidOrders = self::with('bidOrders')->with('bidPrice')
            ->where('id', $id)
            ->select();
        $bidOrders->hidden(['bid_orders.pivot', 'avatar', 'phone_number', 'email', 'brief_introduction', 'level', 'vip', 'city',
            'bid_price.id','bid_price.update_time','bid_price.delete_time']);
        return $bidOrders;
    }

    public function bidOrders()
    {
        return $bidOrders = $this->belongsToMany('Order', 'order_bider', 'order_id', 'bider_id')->where('status', 0);
    }

    public function bidPrice()
    {
        $bidPrice = $this->hasMany('BidDetail', 'bider_id', 'id');
        return $bidPrice;
    }

}