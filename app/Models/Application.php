<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LabHome\AdminController;
use http\Message;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserInformation;

class Application extends Model
{
    protected $table = "application";
    public $timestamps = true;
    protected $primaryKey = 'application_id';

    /**
     * 报名信息添加
     * @author ZhangJinJIn <github.com/YetiSui>
     * @param $application_id,$name,$sex,$email,$class,$self_intrduce
     * @return |null
     */
    Public static function addUser($application_id,$name,$sex,$email,$class,$self_introduce,$batch_num)
    {
        try {
            $res=self::insert([
                'application_id'=>$application_id,
                'sex'=>$sex,
                'name'=>$name,
                'email'=>$email,
                'class'=>$class,
                'self_introduce'=>$self_introduce,
                'batch_num'=>$batch_num,
            ]);
            //dd($res);
            return $res;
        } catch (\Exception $e) {
            logError('获取失败', [$e->getMessage()]);
        }
    }


}