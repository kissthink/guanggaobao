<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/20
 * Time: 11:03
 */

namespace app\api\controller\v1;


use app\api\model\BidDetail;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\OrderGetException;

class OrderBidDetail
{
//    根据订单号id获取竞价详情
    public function bidDetail($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $bidDetail = BidDetail::with('user')->where('order_id',$id)->order('bid_price desc')->select();
        $bidDetail->hidden(['user.phone_number','user.email','brief_introduction','user.level','user.vip','user.score','user.city']);
        if (!$bidDetail)
        {
            throw new OrderGetException();
        }
        return $bidDetail;
    }
}