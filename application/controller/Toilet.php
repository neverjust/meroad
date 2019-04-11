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



class Toilet extends Controller
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
        $toilet = $this->ToiletModel->where('id',$_POST['uuid'])->find();
        if (!$toilet) {
            return msg('',2,'查无此厕所');
        }
        return msg($toilet,0,'');
    }
    public function getAllUuid(){
        $data =  $this->ToiletModel->column('uuid');
        return msg($data,0,'');
    }

    public function test()
    {
        $data = getParms();
        $args = ['uuid'];
        if(judgeEmpty($data,$args)){
            $list = [
                ['uuid'=>111],
            ];
            $toilet = $this->ToiletModel->saveAll($list);
            return msg($data,101,'参数不完全');
        }
        $list = [
            ['uuid'=>$data['uuid']],
        ];
        $toilet = $this->ToiletModel->saveAll($list);
        return msg($data,0,'参数完全');
    }

    public function update()
    {
        // $args = ['uuid'];
        // if(judgeEmpty($_SERVER,$args)){
        //     $list = [
        //         ['uuid'=>$_SERVER['uuid']],
        //     ];
        //     $toilet = $this->ToiletModel->saveAll($list);
        //     return msg($_SERVER,101,'参数不完全');
        // }
        // $list = [
        //     ['uuid'=>'11'],
        // ];
        // $toilet = $this->ToiletModel->saveAll($list);
        return msg($_SERVER,0,'参数完全');
    }

}