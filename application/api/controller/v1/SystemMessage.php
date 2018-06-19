<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/19
 * Time: 13:47
 */

namespace app\api\controller\v1;

use app\api\model\SystemMessage as SystemMessgaeModel;
use app\lib\exception\SystemMessageException;

class SystemMessage
{
    //获取平台最新公告
    public function getRecentMsg()
    {
        $systemMsg = SystemMessgaeModel::all();
        if(!$systemMsg)
        {
            throw new SystemMessageException();
        }else{
            return $systemMsg;
        }

    }
}