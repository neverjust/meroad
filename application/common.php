<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**  
* 前后端统一接口
*
* @access public 
* @param array  $data      传输的数据
* @param int    $errorCode 错误代码
* @param string $message   错误信息
* @return json
*/ 
function msg($data,$errorCode,$message)
{
    $info = ['data'=>$data,'errorCode'=>$errorCode,'errorMsg'=>$message];
    return json_encode($info,JSON_UNESCAPED_UNICODE);
}

/**
* @param $data 数据
* @param $args 必须的元素
* @return boolen 返回
*/
function judgeEmpty($data,$args)
{
	foreach ($args as $key) {
		if (!array_key_exists($key, $data)) {
			return true;
		}
	}
	return false;
}

