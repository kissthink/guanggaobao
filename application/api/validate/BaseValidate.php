<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/16
 * Time: 16:17
 */

namespace app\api\validate;


use app\lib\exception\PhoneNumberException;
use think\Validate;
use  think\Request;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        //必须设置contetn-type:application/json
        $request = Request::instance();
        $params = $request->param();
        $result = $this->check($params);
//        $params['token'] = $request->header('token');

        if(!$result)
        {
                $e = new PhoneNumberException();
                $e->msg = $this->error;//当类被实力化时就对成员变量进行初始化
            throw $e;
        }
        else {
            return $params;
        }
    }
}