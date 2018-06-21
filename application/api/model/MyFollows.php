<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 11:00
 */

namespace app\api\model;


class MyFollows extends BaseModel
{
    protected $hidden =['create_time','update_time','delete_time','user_id','follow_id'];

    public static function getFollows($id)
    {
        return self::with('userdata')->where('user_id',$id)->select();
    }

    public function userdata()
    {
        return $this->belongsTo('User','follow_id','id');
    }
}