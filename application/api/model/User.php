<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/16
 * Time: 17:40
 */

namespace app\api\model;


class User extends BaseModel
{
    protected $hidden = ['create_time','update_time','delete_time'];
//获取登陆用户的基本信息并回显
    public static function getUser($data,$checkID)
    {

        $user = self::with('fans,follows,serviceEvaluation')->where($checkID,'=',$data[$checkID])->find();
        return $user;
    }

    public function fans()
    {
        return $this->hasMany('MyFans','user_id','id');
    }
    public function follows()
    {
        return $this->hasMany('MyFollows','user_id','id');
    }
    public function serviceEvaluation()
    {
        return $this->hasOne('ServiceEvaluation','user_id','id');
    }
}