<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/9
 * Time: 10:21
 */

namespace app\sample\controller;


use think\Request;

class Test
{
    public function hello (Request $res)
    {
//        获取参数的3个方法:
//        1.通过在hello()函数参数里定义变量;
//        2.通过Request类实例化;
//        3.通过Request助手函数input();
//        4.通过在hello()函数括号内实例化Request类
//        $all = input('param.');
//        var_dump($all);
        $all = $res->param();
        var_dump($all);
//        echo $id;
//        echo "|";
//        echo $name;
//        echo "|";
//        echo $age;
//        return "hello world!";
    }
}