<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/16
 * Time: 14:51
 */

namespace app\api\controller\v1;


use alisms\SendSms;
use app\api\service\UserInfo;
use app\api\validate\Email;
use app\api\validate\MobilePhoneNumber;
use think\Request;

/**
 * Class Login 用户登录类
 * @package app\api\controller\v1
 */
class Login
{
    /*
     * 用户手机验证码注册
     */
    public function register($username,$code)
    {
        (new MobilePhoneNumber())->goCheck();
        //获取对象，如果上面没有引入命名空间，可以这样实例化：$sms = new \alisms\SendSms()
        $sms = new SendSms();

        //$mobile为手机号
        $mobile = $username;
        //模板参数，自定义了随机数，你可以在这里保存在缓存或者cookie等设置有效期以便逻辑发送后用户使用后的逻辑处理
        $code = mt_rand(100000,999999);
        echo $code;
        $templateParam = array("code" => $code);
        $m = $sms->send($mobile, $templateParam);
        //类中有说明，默认返回的数组格式，如果需要json，在自行修改类，或者在这里将$m转换后在输出
        return $m['Code'];
    }

    /**用户手机登陆验证
     * @param Request $res
     * @return array|false|\PDOStatement|string|\think\Model
     * @throws \app\lib\exception\LoginInvaildException
     * @throws \app\lib\exception\ParameterException
     * @throws \app\lib\exception\UserInvalidException
     */
    public function loginIn(Request $res)
    {
        //使用正则表达式来验证用户输入的是电话号码还是邮箱
        if (strstr($res->param('username'), '@')) {
            (new Email())->goCheck();
            return 'eamil login';
        } else {
            (new MobilePhoneNumber())->goCheck();
            $params = $res->param();
//            $userInfo = new UserInfo();
            $user = UserInfo::getUserinfoByM($params);
            return $user;
        }
//        $user = UserModel::Where('phone_number','=',$params['phone_number'])->find();

    }
}