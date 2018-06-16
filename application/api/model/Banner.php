<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/10
 * Time: 17:56
 */

namespace app\api\model;


class Banner extends BaseModel
{
//    隐藏数据的某个字段
    protected $hidden = ['id'];
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
    public static function  getBannerByID($id)
    {

        //TODO:根据Banner ID号 获取Banner信息
        $banner = self::with(['items','items.img'])->find($id);//get,find:返回单条数据;all,select:返回一组数据;使用db类是不能使用get和all方法的.
        return $banner;
    }
}