<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 10:32
 */
//用户粉丝表模型

namespace app\api\model;


class MyFans extends BaseModel
{
    protected $hidden =['update_time','delete_time','user_id','fan_id',
        'fans.phone_number','fans.email','fans.brief_introduction','fans.score','fans.city'
    ];
//根据用户id获取粉丝信息
    public static function getFans($id)
    {
        return self::with('fans')->where('user_id',$id)->select();
    }
//关联粉丝表
    public function fans()
    {
        return $this->belongsTo('User','user_id','id');
    }
}