<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CateController;

class HhelpController extends Controller
{
    public function index() 
    {
        $res1 = self::getConfig();
        $res = self::getMenu();
        
        $res2 = self::getMenu();
        return view("home.help.help",[
                "list"=>$res,
                "list1"=>$res2,
                "vo" => $res1,
                'res'=>CateController::getCatePid(0)
            ]);
    }

    public static function getConfig()
    {
        $res = DB::table("help")->first();
        return $res;
    }

    /*
    *分类之后得到结果
    */
    public static function getMenu()
    {
        $types = self::getAllTypes();
        $res = self::getTypesByPid($types,0);
        return $res;
    }
 
    /*
    *获取所有分类数据
    */
    public static function getAllTypes()
    {
        $res = DB::table("help")->get();
        return $res;
    }

    /*
    *将数据进行递归排序
    */
    public static function getTypesByPid($types,$pid)
    {
        $data = [];
        foreach($types as $k=>$v)
        {
            if($v['pid']==$pid)
            {
                $v['sub'] = self::getTypesByPid($types,$v['id']);
                $data[] = $v;
            }
        }
        return $data;
    }
}