<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/25
 * Time: 16:26
 */

namespace app\api\service;


use app\api\model\Product;
use app\lib\exception\ProductException;

/**
 * Class ProductInfo
 * @package app\api\service
 */
class ProductInfo
{
    /**
     * @param $id
     * @return false|\PDOStatement|string|\think\Collection
     * @throws ProductException
     */
    public static function showProductsByID($id)
    {
        $products = Product::getProducts($id);
        if ($products->isEmpty())
        {
            throw new ProductException('请求的商品列表不存在');
        }
        return $products;
    }

    /**
     * @param $data
     * @return false|\PDOStatement|string|\think\Collection
     * @throws ProductException
     */
    public static function addProductsByID($data)
    {
        $product = Product::addProductTag($data);
        if (!$product)
        {
            throw new ProductException('商品添加失败');
        }
        return $product->product_id;
    }
}