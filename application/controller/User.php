<?php
/** 
* 用户模块 controller
*
* @author      星辰后端 17级 卞光贤
* @version     1.0
*/

namespace app\controller;

use app\model\User as UserModel;
use think\Controller;

class User extends Controller
{
	function initialize()
	{
		session_start();
		$this->Usermodel = new UserModel();
	}

    #用户登录
    public function login()
	{
		if(isset($_SESSION['name'])) {
			return msg('',0,'已经登录');
		}

		else
		{
			$request = request();
			$name = checkInput($request->post('name'));
			$passwd = md5(checkInput($request->post('passwd')));
	        $result =UserModel::where("name='$name' AND passwd='$passwd'")->find();
	        if(isset($result))
	        {
	            $_SESSION['id'] = $result['id'];
				$_SESSION['authority'] = $result['authority'];
				$_SESSION['true_name'] = $result['true_name'];
				$_SESSION['apart'] = $result['apart'];
				$_SESSION['name'] = $result['name'];
	            $_SESSION['passwd'] = $result['passwd'];

	            return msg($result,0,'');
	        }
	        else
	        {
	            return msg('',1,'账号密码错误');
	        }
		}

	}
}


