<?php

/**
* 管理员模块 controller
*
* @author      星辰后端 17级 卞光贤
* @version     1.0
*/

namespace app\controller;

use app\model\User as UserModel;
use app\model\Toilet as ToiletModel;
use think\Controller;
use think\Loader;



class Admin extends Controller
{
    function initialize()
    {
        session_start();
        $this->UserModel = new UserModel();
        $this->ToiletModel = new ToiletModel();
    }
    public function getDetail()
    {
        $args = ['uuid'];
        if(judgeEmpty($_POST,$args)){
            return msg('',101,'参数不完全');
        }
        $toilet = $this->UserModel->where('id',$_POST['uuid'])->find();
        if (!$toilet) {
            return msg('',2,'查无此厕所');
        }
        return msg($toilet,0,'');
    }
    public function test()
    {
       $args = ['uuid'];
        if(judgeEmpty($_POST,$args)){
            return msg('',101,'参数不完全');
        }
        return msg('',0,'参数完全');
    }

}