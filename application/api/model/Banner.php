<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/10
 * Time: 17:56
 */

namespace app\api\model;


use app\lib\exception\BannerMissException;
use think\Db;
use think\Exception;

class Banner
{
    public static function  getBannerByID($id)
    {
        //TODO:根据Banner ID号 获取Banner信息
//        $result = Db::query(
//          'select * from banner_item where banner_id=?',[$id]
//        );
//        构造器实现方法：表达式法，闭包，数组法（不推荐）
//        1.表达式法：
//        $result = Db::table('banner_item')->where('banner_id','=',$id)->select();//不同的链式操作项其之间是没有先后顺序的
//        2.闭包法：
        $result = Db::table('banner_item')->where(function ($query) use($id){
            $query->where('banner_id','=',$id);
        })->select();
        if (!$result)
        {
            throw new BannerMissException();
        }
        else{
            return $result;
        }

    }
}