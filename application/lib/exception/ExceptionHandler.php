<?php
/**
 * Created by "李云龙".
 * User: Administrator
 * Date: 2018/6/12
 * Time: 9:52
 */

namespace app\lib\exception;


use Exception;
use think\exception\Handle;
use think\Log;
use think\Request;  //引用全局异常类,而不是引用 think\Exceptionl 类

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
//    需要返回客户端当前请求的URL路径
    public function render(Exception $e)
    {
        if ($e instanceof  BaseException)
        {
            //如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else
        {
//        不要将与代码无关的系统变量写入到源代码中
            if (config('app_debug')){   //也可以使用类方法:Config::get('app_debug');
                //return default error page,将系统默认错误处理机制还原,通过调用父类的render()方法:
                return parent::render($e);

            }
            else {
                $this->code = 500;
                $this->msg = '服务器内部错误，已让小马宝丽去处理';
                $this->errorCode = 999;
                $this->recordErrorLog($e);
            }
        }
        $request = Request::instance();

        $result = [
            'msg'=>$this->msg,
            'error_code'=>$this->errorCode,
            'resquest_url'=>$request->url()
        ];
        return json($result,$this->code);
    }
    private  function recordErrorLog(Exception $e)
    {
        Log::init([
            'type'=>'File',
            'path' =>LOG_PATH,
            'level'=>['error']
        ]);
        Log::record($e->getMessage(),'error');
    }
}