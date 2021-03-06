<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 14:20
 */

namespace app\api\controller\v1;

use app\api\model\OrderComments as OrderCommentsModel;
use app\api\service\UserInfo;
use app\api\validate\IDMustBePositiveInt;
use app\api\validate\CurrentCity;
use app\api\validate\TokenGet;

class User
{
    /*   首页方法
     * 根据参数选择用户
     * @1.按用户角色获取用户列表
     * @2.根据地域分类
     * @3.根据会员vip等级,消费等级,服务评价等信息进行推广
     * @sincerity,good_opinion,transaction,fans_num,quality,speed,service
     *
     * */
    public function  getUsersByLevel($id,$currentcity)
    {
        (new IDMustBePositiveInt())->goCheck();
        (new CurrentCity())->goCheck();
        $userInfo = new UserInfo();
        //按用户角色进行分列用户信息
        $users = $userInfo->getUsersByLevel($id,$currentcity);
        return $users;
    }
    /* 根据参数选择用户
        * @1.按用户角色获取用户列表
        * @2.根据地域分类
        * @3.根据会员vip等级,消费等级,服务评价等信息进行推广显示参数
        * @sincerity,good_opinion,transaction,fans_num,quality,speed,service
        * */
//    根据综合评分score排名
    public function  getUsersByScore($id,$currentcity)
    {
        (new IDMustBePositiveInt())->goCheck();
        (new CurrentCity())->goCheck();
        $users = UserInfo::getUsersByScore($id,$currentcity);
        return $users;
    }

//    根据用户id获取对应的关注信息:关注的设计师,服务商信息
 public function getMyFollows($id)
 {
     (new IDMustBePositiveInt())->goCheck();
     $myFollows = UserInfo::getMyFollows($id);
     return $myFollows;
 }

    //    根据用户id获取对应的关注信息:关注的设计师,服务商信息
    public function getMyFans($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $myFollows = UserInfo::getMyFans($id);
        return $myFollows;
    }

    //根据用户id获取对订单的评论列表
    public function myCommentCount($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $myFollows = OrderCommentsModel::orderCommentCount($id);
        return $myFollows;
    }

//根据用户id获取对订单的评论列表
    public function myComments($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $myFollows = OrderCommentsModel::getOrderComments($id);
        return $myFollows;
    }
}
