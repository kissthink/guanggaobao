<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
//首页活动主题:---------------------------------------------------------------------------------------------
Route::get('api/:version/banners/all',   'api/:version.Banner/getBanners');

//用户登录:---------------------------------------------------------------------------------------------
Route::post('api/:version/login',     'api/:version.Login/LoginIn');

//服务类目:---------------------------------------------------------------------------------------------
Route::get('api/:version/category',      'api/:version.CategoryAndRange/getServiceCategory');

//服务范围:---------------------------------------------------------------------------------------------
Route::get('api/:version/range',         'api/:version.CategoryAndRange/getServiceRange');

//系统消息---------------------------------------------------------------------------------------------

//根据用户id获取系统消息,并按时间降序排列----------------------------------------------------------------
Route::get('api/:version/sysmsg',        'api/:version.Message/getSysMsg');
//未读系统消息数---------------------------------------------------------------------------------------
Route::get('api/:version/newsysmsgcount',        'api/:version.Message/getNewMsgCount');



//用户信息---------------------------------------------------------------------------------------------
//用户注册---------------------------------------------------------------------------------------------
Route::post('api/:version/register','api/:version.Login/register');
//用户地址信息
//定义用户收货地址------------------------------------------------------------------------------------
Route::get('api/:version/address','api/:version.Address/CreateOrUpdateAddress');
//根据用户的综合评分进行推广显示
Route::get('api/:version/getusers/s/:id','api/:version.User/getUsersByScore');
//根据用户购买的服务等级进行推广显示
Route::get('api/:version/getusers/l/:id','api/:version.User/getUsersByLevel');

//用户的关注其他用户信息------------------------------------------------------------------------------------
Route::get('api/:version/follows/:id','api/:version.User/getMyFollows');
//该用户的粉丝信息------------------------------------------------------------------------------------
Route::get('api/:version/fans/:id','api/:version.User/getMyFans');



//用户订单消息---------------------------------------------------------------------------------------------

//根据用户id获取订单信息,并按时间降序排列
Route::get('api/:version/ordermsg',        'api/:version.Message/getMyOrdersMessage');

//根据用户id,获取订单未读信息数
Route::get('api/:version/newordermsgcount',        'api/:version.Message/getNewOrdersMessageCount');

//根据订单状态获取订单信息数
Route::get('api/:version/ordercountbys',        'api/:version.Order/getOrderByStatus');

//需求信息---------------------------------------------------------------------------------------------
//根据用户当前...所在城市...获取需求/招标订单
Route::get('api/:version/order/city',  'api/:version.Order/getByCurrentCity');
//根据...服务范围...获取需求/招标订单
Route::get('api/:version/order/range',  'api/:version.Order/getByRange');
//根据...服务类目...获取需求/招标订单
Route::get('api/:version/order/category',     'api/:version.Order/getByCategory');
//根据用户id获取收藏的订单
Route::get('api/:version/order/ordercollection',     'api/:version.Order/getOrderCollection');

//订单竞价信息---------------------------------------------------------------------------------------------
//用户的参与的竞价订单数----------------------------------------------
Route::get('api/:version/bidordercount/:id','api/:version.Order/getBidOrderCount');
//用户的参与的竞价订单信息,并且该竞价正在进行,按参与时间降序排列----------------------------------------------
Route::get('api/:version/bidorders/:id','api/:version.Order/getMyBidOrders');
//用户参与的竞价订单详情----------------------------------------------------------------------------------
Route::get('api/:version/biddetail',     'api/:version.OrderBidDetail/bidDetail');


//用户对订单的评论----------------------------------------------------------------------------------
//评论数量
Route::get('api/:version/mycommentcount',     'api/:version.User/myCommentCount');
//评论列表----------------------------------------------------------------------------------
Route::get('api/:version/mycomments',     'api/:version.User/myComments');


//商品服务表----------------------------------------------------------------------------------
//根据用户id获取商品列表数量
Route::get('api/:version/product/show',     'api/:version.Product/show');
//根据用户id添加商品----------------------------------------------------------------------------------
Route::post('api/:version/product/add',     'api/:version.Product/add');
