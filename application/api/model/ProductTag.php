<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/25
 * Time: 17:07
 */

namespace app\api\model;


class ProductTag extends BaseModel
{

    public function addTags($productID,$data)
    {

        $tag = new ProductTag();
        $tag->data([
            'product_id' =>$productID,
            'desc'  =>  $data['desc'],
            'is_best' =>  $data['isBest'],
            'is_hot'  =>  $data['isHot'],
            'is_sale' =>  $data['isSale'],
        ]);
        $tag->save();
        return $tag->tag_id;
    }
}