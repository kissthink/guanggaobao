<?php

namespace app\api\model;

use think\Model;

class BannerItem extends Model
{
    //获取轮播图内容项目的模型类
    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }

}
