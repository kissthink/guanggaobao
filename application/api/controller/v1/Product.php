<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/25
 * Time: 16:24
 */

namespace app\api\controller\v1;

use app\api\service\ProductInfo;
use app\api\validate\IDMustBePositiveInt;
use think\Request;

/**商品类
 * Class Product
 * @package app\api\controller\v1
 */
class Product
{
    public function show($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $products = ProductInfo::showProductsByID($id);
        return $products;
    }

    public function add(Request $res)
    {
        $data = $res->param();
        $products = ProductInfo::addProductsByID($data);
        return $products;
    }
}