<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 9:44
 */

namespace app\api\service;

use app\api\model\MyFollows;
use app\api\model\User as UserModel;
use app\api\model\User;
use app\lib\exception\CharacterIDException;
use app\lib\exception\UserInfoException;
use app\lib\exception\UserInvalidException;
use app\lib\exception\LoginInvaildException;
class UserInfo
{
    public function getUserinfo($data)
    {
        $checkID =null;
        if($data['loginWayID']==0)
        {
            $checkID = 'phone_number';
        }else
        {
            throw new LoginInvaildException();
        }
        $user = UserModel::getUser($data,$checkID);
        if ($user['password']==$data['password'])
        {
            return $user;
        }
        else
        {
            throw new UserInvalidException();
        }
    }
//    根据得分选择用户
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
//        $userlist = User::all(['character_id' => $id]);
        $user = new User();
// 查询数据集
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
//        $userlist = User::all(['character_id' => $id]);
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
}