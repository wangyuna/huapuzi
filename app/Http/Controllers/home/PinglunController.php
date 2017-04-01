<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CateController;
use DB;

class PinglunController extends Controller
{
    public function postAdd(Request $request){
        
        $data = $request -> all();
        
        return view('home.pinglun.add',[
                'res'=>CateController::getCatePid(0),
                'data'=>$data
            ]);
    }

    public function postInsert(Request $request)
    {
        $arr = $request -> except('_token','id');
        $id = $request -> only('id');
        $arr['time'] = time();
        $arr['uid'] = session('uid');
        
        $res1 = DB::table('order_goods') -> where('id',$id) -> update(['sus'=>1]);
        $res = DB::table('estimate') -> insert($arr);

        if($res || $res1)
        {
            return redirect('/home/shop/'.$arr['gid']);
        }else{
            return back();
        }
    }
}
