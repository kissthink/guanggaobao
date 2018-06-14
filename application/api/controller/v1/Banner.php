<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/10
 * Time: 10:50
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\BannerMissException;

class Banner
{
/* @url api/:version/banner/:id=id
 * @return一组Banner 模型
 * */
    public function  getBanner($id)
    {
        //AOP面向切面编程
        (new IDMustBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerByID($id);
//        $banner->hidden(['update_time']);
//        按需求显示对应字段
//        $banner->visible(['id']);

        if (!$banner)
        {
            throw new BannerMissException();
        }
        return $banner;
        }

}