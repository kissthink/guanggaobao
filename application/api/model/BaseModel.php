<?php

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{
//    获取Url字段数据，该方法getUrlAttr($value,$data)会在进行数据库查询操作并遇到url字段时自动执行：用于拼接url地址
    protected function prefixImgUrl($value,$data)
        {
            $finalUrl = $value;
            if ($data['from'] == 1) {
                $finalUrl = config('setting.img_prefix') . $value;
            }
            return $finalUrl;
        }
}
