<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/21
 * Time: 10:28
 */

namespace app\api\model;


class SystemUser extends BaseModel
{
    protected $hidden = [
       'user_id','create_time','update_time','delete_time'
    ];
//    根据用户id选择对应的未被阅读信息数
    public static function getNewMsgCount($id)
    {
        return self::with('msgDetail')
            ->where('user_id',$id)
            ->where('status',0)
            ->count();
    }

    //    根据用户id选择对应的未被阅读信息,按时间降序排列
    public static function getSysMsg($id)
    {
        return self::with('msgDetail')
            ->where('user_id',$id)
            ->order('create_time','desc')
            ->select();
    }
    public function msgDetail()
    {
        return $this->belongsTo('SystemMessage','sysmsg_id','id');
    }
}