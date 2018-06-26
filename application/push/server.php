<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/25
 * Time: 11:19
 */
namespace think;

define('APP_PATH', __DIR__ . '/application/');

// 加载基础文件
require __DIR__ . '/thinkphp/base.php';

// 执行应用并响应
Container::get('app',[APP_PATH])->bind('push/Worker')->run()->send();