<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/10
 * Time: 14:48
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;
use app\lib\exception\ParameterException;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        //获取http传入的参数
        //对这些参数做校验
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if(!$result)
        {
            $e = new ParameterException([
                    'msg' =>$this->error,
                    ''
            ]);//当类被实力化是就对成员变量进行初始化
            throw $e;
//            $error = $this->error;
//            throw new ParameterException($error);
        }
        else {
            return true;
        }
    }
}