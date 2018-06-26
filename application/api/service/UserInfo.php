<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 9:44
 */
//用户信息服务层

namespace app\api\service;

use app\api\model\MyFans as MyFansModel;
use app\api\model\MyFollows;
use app\api\model\User as UserModel;
use app\api\model\User;
use app\api\validate\MobilePhoneNumber;
use app\lib\exception\CharacterIDException;
use app\lib\exception\UserInfoException;
use app\lib\exception\UserInvalidException;
use app\lib\exception\LoginInvaildException;

/**
 * Class UserInfo
 * @package app\api\service
 */
class UserInfo
{
//    用户登陆获取基本信息
    /**
     * @param $data
     * @return array|false|\PDOStatement|string|\think\Model
     * @throws LoginInvaildException
     * @throws UserInvalidException
     */
    public static function getUserinfoByM($data)
    {
        (new MobilePhoneNumber())->goCheck();
        $user = UserModel::getUserM($data);
        if ($user['password']==$data['password'])
        {
            return $user;
        }
        else
        {
            throw new UserInvalidException();
        }
    }
//    根据得分选择推广用户
    public  static function getUsersByScore($id,$currentcity)
    {
        $character =null;
        switch ($id){
//           1： 服务商
            case '1':
                $character ='服务商';
                break;
            case '2':
                $character ='设计师';
                break;
            case '3':
                $character ='需求方';
                break;
            default:
                throw new CharacterIDException();
        }
        $user = new User();
        $userlist = $user
            ->where('character_id', $id)
            ->where('current_city', $currentcity)
            ->limit(10)
            ->order('score desc')
            ->select();
        if($userlist->isEmpty())
        {
            throw new CharacterIDException();
        }
        return json([$character=>$userlist],200);
    }
//根据购买服务等级选择推广用户
    public  static function getUsersByLevel($id,$currentcity)
    {
        $character =null;
        switch ($id){
//           1： 服务商
            case '1':
                $character ='服务商';
                break;
            case '2':
                $character ='设计师';
                break;
            case '3':
                $character ='需求方';
                break;
            default:
                throw new CharacterIDException();
        }
        $user = new User();
        $userlist = $user
            ->where('character_id', $id)
            ->where('current_city', $currentcity)
            ->limit(10)
            ->order('level', 'desc')
            ->select();
        if($userlist->isEmpty())
        {
            throw new CharacterIDException();
        }
        return json([$character=>$userlist],200);
    }
//根据用户id获取关注的服务商或设计师等
    public static function getMyFollows($id)
    {
        $myFollows = MyFollows::getFollows($id);
        if($myFollows->isEmpty())
        {
            throw new UserInfoException();
        }else{
            return $myFollows;
        }
    }

    //根据用户id获取关注的服务商或设计师等
    public static function getMyFans($id)
    {
        $myFollows = MyFansModel::getFans($id);
        if($myFollows->isEmpty())
        {
            throw new UserInfoException();
        }else{
            return $myFollows;
        }
    }
}