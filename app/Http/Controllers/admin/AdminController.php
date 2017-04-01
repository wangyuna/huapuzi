<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class AdminController extends Controller
{
    //后台主页面
    public  function index(){
        // 输出模板
        return view('admin.admin.index');
    }

    public function login(Request $request)
    {

    	return view('admin.admin.login');
    }

    public function postCheck(Request $request)
    {
        
        $res = DB::table('adminuser') -> where('username',$request['username']) -> get();
        
        if($res && Hash::check($request['password'], $res[0]['password']))
        {
            
            session($request['username'] == $res[0]['username']);
            session(['adminname'=>$request['username']]);
            
            return redirect('/admin');
        }else{
            
            return back() -> with('error','账号或密码不正确');
        }
    }
}
