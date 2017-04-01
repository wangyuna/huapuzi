<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActivateController extends Controller
{
    public function getIndex()
    {
        return view('home.home.home');
    }

    public function getActivate(Request $request)
    {
        $s = $request -> only(['id','token']);
        $s['status'] = 2;
        $res = DB::table('user') -> where('id',$s['id']) ->where('token',$s['token']) -> update($s);
        
        if($res)
        {
            echo '激活成功';
        }else{
            echo '激活失败';
        }
    }
}
