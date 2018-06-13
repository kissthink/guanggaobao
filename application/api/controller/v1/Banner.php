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
    public function  getBanner($id)
    {
        //AOP面向切面编程
        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::with(['items','items.img'])->find($id);//get,find:返回单条数据;all,select:返回一组数据;使用db类是不能使用get和all方法的.
        if (!$banner)
        {
            throw new BannerMissException();
        }
        return $banner;
        }

}