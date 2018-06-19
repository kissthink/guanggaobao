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
Route::get('api/:version/banners/all','api/:version.Banner/getBanners');
Route::post('api/:version/login/in','api/:version.Login/LoginIn');
Route::get('api/:version/category','api/:version.CategoryAndRange/getServiceCategory');
Route::get('api/:version/range','api/:version.CategoryAndRange/getServiceRange');
Route::get('api/:version/sysmsg','api/:version.SystemMessage/getRecentMsg');
Route::get('api/:version/getusers/s/:id','api/:version.User/getUsersByScore');
Route::get('api/:version/getusers/l/:id','api/:version.User/getUsersByLevel');