<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/23
 * Time: 9:47
 */

namespace app\api\controller\v1;


use think\Controller;

/**
 * Class Address 用户地址
 * @package app\api\controller\v1
 */
class Address extends Controller
{
    /**在执行用户地址接口方法前先执行前置方法
     * @var array
     */
   protected $beforeActionList =[
        'checkToken' =>['only'=>'createorupdateaddress']
    ];

    /**
     *
     */
    protected function checkToken()
    {
        checkToken();
    }

    /**
     *
     */
    public function CreateOrUpdateAddress()
    {
        echo 'Create or update address?';
    }
}