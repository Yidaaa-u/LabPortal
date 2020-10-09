<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsBulletinManage extends Model
{
    protected $table = "news_bulletin_manage";
    public $timestamps = true;
    protected $primaryKey = 'nb_id';

    //返回实验新闻/实验室公告/聚焦实验室内容
    public static function getNew()
    {
        try {
            $result = self::select('nb_id', 'class_id','operate')->get();
            return $result;
        } catch (\Exception $e) {
            logError('获取失败', [$e->getMessage()]);
            return null;
        }
    }
}
