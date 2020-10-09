<?php

namespace App\Http\Controllers\LabHome;

use App\Http\Controllers\Controller;
use App\Http\Requests\LabHome\AddUserRequest;
use App\Models\Application;
use App\Models\UserInformation;


class AdminController extends Controller
{
    
     /**
      * 报名信息添加
      * @author ZhangJinJin <github.com/YetiSui>
      * @param [int]$application_id,[string]$name,$sex,$email,$class,$self_introduce,$batch_num
      * @return array
      */
    Public function addUser(AddUserRequest $request){
        $application_id = $request['application_id'];
        $name = $request['name'];
        $sex = $request['sex'];
        $email = $request['email'];
        $class = $request['class'];
        $self_introduce = $request['self_introduce'];
        $batch_num = $request['batch_num'];
        $data = Application::addUser($application_id,$name,$sex,$email,$class,$self_introduce,$batch_num);
         return $data?
            json_success('成功',null,200):
            json_fail('失败',null,100);
    }
}

