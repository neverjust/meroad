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
        $data = getParms();
        $args = ['uuid'];
        if(judgeEmpty($data,$args)){
            return msg($data,101,'参数不完全');
        }
        $toilet = $this->ToiletModel->where('uuid',$data['uuid'])->find();
        if (!$toilet)
            return msg($data['uuid'],1,'该厕所不存在');
        if(!empty($data['longitude'])) $toilet['Lng']=$data['longitude'];
        if(!empty($data['latitude'])) $toilet['Lat']=$data['latitude'];
        if(!empty($data['spareHolesNumber'])) $toilet['spareHoles']=$data['spareHolesNumber'];
        if(!empty($data['allHolesNumber"'])) $toilet['allHoles']=$data['allHolesNumber'];
        if(!empty($data['hygieneLevel'])) $toilet['clean']=$data['hygieneLevel'];
        if(!empty($data['userEvaluation'])) $toilet['evaluation']=$data['userEvaluation'];
        $toilet->save();
        return msg($data,0,'请求成功');
    }

}