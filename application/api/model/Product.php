<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/25
 * Time: 16:29
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = ['user_id', 'is_sale', 'update_time', 'delete_time', 'status', 'range_type', 'type'];

    public static function getProducts($id)
    {
        return self::with('tag')->where('user_id', $id)->where('is_sale', 0)->select();
    }

    public function tag()
    {
        return $this->hasOne('ProductTag', 'product_id', 'id');
    }

    public static function addProductTag($data)
    {
        $product = new Product();
        $product->data([
            'name' => $data['name'],
            'desc' => $data['desc'],
            'user_id' => $data['uid'],
            'url' => $data['imgurl'],
            'thums' => $data['thums'],
            'price' => $data['price'],
            'unit' => $data['unit'], //            'is_sale' =>  $data['is_sale'],设默认值:0-在售
            'stock' => $data['stock'],
//            'tag_id' => $data['tag_id'],
            'status'=>$data['status'],
            'range_type'=>$data['rangtype'],
            'type'=>$data['type']
            ]);
        $product->save();
        $productID = $product->id;

        $product = Product::get($productID);

        $result = $product->tag()->save([
            'is_best' =>  $data['isbest'],
            'is_hot'  =>  $data['ishot'],
//            'is_sale' =>  $data['issale'],
        ]);
        return $result;
//        return $product->tag()->id;
    }
}