<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/14
 * Time: 13:53
 */

namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
class Theme
{
    /* @url api/:version/theme?ids = id1,id2,id3,...
     * @return 一组Theme 模型
     * */
    public function getSimpleList($ids='')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',',$ids);
        $result = ThemeModel::with('topicImg,headImg')->select();
        if(!$result)
        {
            throw new ThemeException();
        }
        return$result;
    }
}