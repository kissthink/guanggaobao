<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 13:30
 */

namespace app\api\controller\v1;


use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerException;

class Banner
{
    //获取所有活动宣传页
    public function getBanners()
    {
        $banners = BannerModel::getBannersAll();
        if (!$banners) {
            throw new BannerException();
        } else {
            return $banners;
        }
    }
}