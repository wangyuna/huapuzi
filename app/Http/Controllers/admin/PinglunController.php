<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PinglunController extends Controller
{
    public function getIndex($id)
    {
        
        return view('admin.pinglun.index',['arr'=>self::pinglun($id)]);
    }

    public static function pinglun($id)
    {
        $arr = DB::table('estimate')
            -> join('user','user.id','=','estimate.uid') 
            -> join('goods','goods.id','=','estimate.gid') 
            -> where('estimate.huishou',$id)
            -> select('user.username','goods.title','estimate.con','estimate.status','estimate.time','estimate.grade','estimate.id','estimate.huishou')
            -> get();

        return $arr;    
    }

    public function getUpdate($id)
    {
        
        $res = DB::table('estimate') -> where('id',$id) -> update(['huishou'=>2]);
        
        if($res)
        {
            return redirect('/admin/pinglun/index/2') -> with('success','添加成功');
        }else{
            return back() -> with('error','添加失败');
        }
    }

    public function getHupdate($id)
    {
        $res = DB::table('estimate') -> where('id',$id) -> update(['huishou'=>1]);
        
        if($res)
        {
            return redirect('/admin/pinglun/index/1') -> with('success','添加成功');
        }else{
            return back() -> with('error','添加失败');
        }
    }
}
