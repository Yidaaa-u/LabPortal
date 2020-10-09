<?php

namespace App\Models;
use http\Env\Request;
use Illuminate\Database\Eloquent\Model;


class Content extends Model
{
    protected $table = "content";
    public $timestamps = true;
    protected $primaryKey = 'nb_id';

    //获取轮播图
    Public static function uploadPic($nb_id)
    {
        try {
            $data = self::where('nb_id','=',$nb_id)
                ->pluck('p_url')
                ->first();

            return $data;

        } catch (\Exception $e) {
            logError('获取失败', [$e->getMessage()]);
        }
    }

    //获取新闻标题
    Public static function getTitle($nb_id)
    {
        try {
            $data = self::where('nb_id','=',$nb_id)
                ->pluck('title', 'created_at', 'nb_id')
                ->first();
            return $data;
        } catch (\Exception $e) {
            logError('获取失败', [$e->getMessage()]);
        }
    }


}

