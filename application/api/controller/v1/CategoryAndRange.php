<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 13:15
 */

namespace app\api\controller\v1;


use app\api\model\ServiceCategory;
use app\api\model\ServiceRange;
use app\lib\exception\ServiceCategoryException;
use app\lib\exception\ServiceRangeException;

class CategoryAndRange
{
    //获取服务类目列表
    public function getServiceCategory()
    {
        $category = ServiceCategory::all();
        if(!$category)
        {
            throw new ServiceCategoryException();
        }else{
            return $category;
        }

    }

    //获取服务范围
    public function getServiceRange()
    {
        $range = ServiceRange::all();
        if(!$range)
        {
            throw new ServiceRangeException();
        }else
            {
                return $range;
            }

    }
}