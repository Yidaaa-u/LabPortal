<?php

namespace App\Http\Controllers\LabHome;

use App\Http\Controllers\Controller;
use App\Http\Requests\LabHome\UploadPicRequest;
use App\Models\Content;
use App\Models\GoodMember;
use App\Models\Labor;
use App\Models\Link;
use App\Models\NewsBulletinManage;
use App\Models\Teacher;

class HomeController extends Controller
{
    //获取轮播图
    public function uploadPic(UploadPicRequest $request){
            $nb_id = $request->all();
            $nb_id=$nb_id['nb_id'];
            $data = Content::uploadPic($nb_id);

            return $data?
                json_success('成功',$data,200) :
                json_fail('失败',null,100);

       }


    //获取新闻标题
     public function getTitle(UploadPicRequest $request){
              $nb_id = $request->all();
              $nb_id=$nb_id['nb_id'];
              //dd( $nb_id );
              $data = Content::getTitle($nb_id);

              return $data?
                  json_success('成功',$data,200) :
                  json_fail('失败',null,100);
}
    //获取历届成员
     public function getMembers(){
               $data = GoodMember::getMembers();

               return $data?
                   json_success('成功',$data,200) :
                   json_fail('失败',null,100);
     }

     //友链展示
     public function getLink(){
             $data = Link::getLink();

              return $data ?
                  json_success('成功',$data,200) :
                  json_fail('失败',null,100);
     }


     //实验室新闻/实验室公告/聚焦实验室
    public function getNew(){
        $data = NewsBulletinManage::getNew();

        return $data?
            json_success('成功',$data,200):
            json_fail('失败',null,100);
    }

    //实验室介绍
    public function labIntroduce(){
        $data = Labor::labIntroduce();

        return $data?
            json_success('成功',$data,200):
            json_fail('失败',null,100);
    }

    //指导老师
    public function guidTeacher(){
        $data = Teacher::guidTeacher();
        return $data?
            json_success('成功',$data,200):
            json_fail('失败',null,100);
    }

    //实验室环境
    public function labEnvironment(){
        $data = Labor::labEnvironment();
        return $data?
            json_success('成功',$data,200):
            json_fail('失败',null,100);
    }

    //组织架构
    public function labArchited(){
        $data = Labor::labArchited();
        return $data?
            json_success('成功',$data,200):
            json_fail('失败',null,100);
    }

    //实验室方向
    public function labAspect(){
        $data = Labor::labAspect();
        return $data?
            json_success('成功',$data,200):
            json_fail('失败',null,100);
    }
}
