<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/14
 * Time: 13:53
 */

namespace app\api\model;

use think\Model;

class Theme extends BaseModel
{
    protected $hidden =['delete_tiem','update_time','topic_img_id','head_img_id'];
    public function  topicImg()
    {
        return $this->belongsTo('Image','topic_img_id','id');
    }
    public function headImg()
    {
        return $this->belongsTo('Image','head_img_id','id');
    }
}