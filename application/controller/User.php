<?php

/**
* 用户模块 controller
*
* @author      星辰后端 17级 卞光贤
* @version     1.0
*/

namespace app\controller;

use app\model\User as UserModel;
use app\model\Toilet as ToiletModel;
use think\Controller;       


class User extends Controller
{
    function initialize()
    {
        session_start();
        $this->UserModel = new UserModel();
        $this->ToiletModel = new ToiletModel();
    }

    public function login()
    {
        $args = ['userid','password'];
        if(judgeEmpty($_POST,$args)){
            return msg('',101,'参数不完全');
        }
        else{
            $result = $this->UserModel->where('userId',$_POST['userid'])->find();
            if (!$result)
                return msg('',1,'查无此用户');
            else if ($result['password']!=$_POST['password'])
                return msg('',1,'账号密码错误');
            else{
                $_SESSION['userid'] = $_POST['userid'];
                return msg('',0,'');
            }
        }
    }
    public function check()
    {
        if(isset($_SESSION['name']))
            return msg('',1,'该用户已经登录');
        elseif(isset($_SESSION['admin']))
            return msg('',7,'该管理员已登录');
        else
            return msg('',0,'未登录');
    }

    public function logout()
    {
        session_destroy();
    }

    public function getUserDetail()
    {
        if(!isset($_SESSION['userid'])) {
            return msg('',2,'该用户未登录');
        }
        $user = $this->UserModel->where('userId',$_SESSION['userid'])->find();
        return msg($user,0,'');
    }

    public function updateAvatar()
    {
    }
    public function getAvatar()
    {
    }
}