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
use app\lib\exception\ParameterException;
class BaseValidate extends Validate
{
    public function goCheck()
    {
        //必须设置contetn-type:application/json
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
//        $params['token'] = $request->header('token');
        if(!$result)
        {
                $e = new ParameterException();
                $e->msg = $this->error;//当类被实力化时就对成员变量进行初始化
            throw $e;
        }
        else {
            return true;
        }
    }

    protected function isPositiveInteger($value, $rule='',$data='',$field='')
    {
        if(is_numeric($value)&&is_int($value+0)&&($value+0)>0)
        {
            return true;
        }else{
            return false;
        }
    }
    public function  isNotEmpty($value, $rule='',$data='',$field='')
    {
        if(empty($value))
        {
            return false;
        }
        else{
            return true;
        }
    }
}