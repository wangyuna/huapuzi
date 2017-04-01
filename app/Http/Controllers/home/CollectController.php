<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CollectController extends Controller
{
    public function getInsert(Request $request)
    {
        if(empty(session('uid')))
        {
            echo '当前用户没有登录';
            return ;
        }

        $data['uid']=session('uid');
        $data['pid']=$request->input('pid');
        $list = DB::table('collect')->where('uid',session('uid'))->get();
        $arr = [];

        foreach($list as $v)
        {
            $arr[]=$v['pid'];
        }
        
        if(in_array($request->input('pid'),$arr))
        {
            echo '您已收藏该商品，请不要重复收藏';
            return ;
        }else{
            if(DB::table('collect')->insert($data))
            {
                echo '收藏成功';
                return ;
            }else{
                echo '收藏失败';
                return ;
            }
        }
    }

    public static function select()
    {
        $data = DB::table('collect')
            ->join('goods','collect.pid','=','goods.id')
            ->join('images','images.cid','=','goods.id')
            ->where('uid',session('uid'))
            ->select('collect.id','goods.title','goods.price2','images.pic1','goods.sid')
            ->get();

        return $data;
    }

    public function getDelete(Request $request)
    {
        if(DB::table('collect')->where('id',$request->input('id'))->delete())
        {
            echo 'yes';
        }else{
            echo 'no';
        }
    }
}
