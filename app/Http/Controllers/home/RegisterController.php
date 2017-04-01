<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use DB;
use Mail;
class RegisterController extends Controller
{
    public function getIndex()
    {
        return view('home.home.index_Register');
    }

    public function postInsert(Request $request)
    {
        $s = $request ->only(['email','password','repassword']);
        $code = $request ->only(['Validate_Code']);
        
        if($code['Validate_Code'] != session('code'))
        {
            return back() -> withInput() -> with('error','验证码不正确');
        }
        // 加密密码
        $arr['password'] = Hash::make($s['password']);
        $arr['email'] = $s['email'];
        $arr['username'] = $s['email'];
        $arr['status'] = 0;
        $arr['score'] = 0;
        $arr['token'] = str_random(50);
        $arr['quanx'] = 0;
        $id = DB::table('user') -> insertGetId($arr);
        
        if($id)
        {
            self::mailto($arr['email'],$id,$arr['token']);
            return redirect('/register') -> with('register',$arr['email']);
            ;
        }
    }
 
    static public function mailto($email,$id,$token)
    {
        // 发送注册邮件
        Mail::send('home.email.index', ['id' => $id,'token'=>$token], function ($m) use ($email) 
        {
                $m->to($email)->subject('注册邮件!!!');
        });
    }
    
    public function register()
    {
        
        return view('home.home.register');
    }

    public function getActivate(Request $request)
    {
        
        $s = $request -> only(['id','token']);
        $s['status'] =1;

        $res = DB::table('user') -> where('id',$s['id']) ->where('token',$s['token']) -> update($s);

        $arr = DB::table('user') -> where('id',$s['id']) ->where('token',$s['token']) -> get();
        
        session(['username' => $arr[0]['username'], 'uid' => $arr[0]['id']]);

        if($res)
        {
            return redirect('/home') -> with('status',1);
        }else{
            return redirect('/home') -> with('status',0);
        }
    }

    public function getAjax(Request $request)
    {

        $email = $_GET['email'];
        if(DB::table('user')->where('email',$email)->first())
        {
            return 2;
        }else{
            return 1;
        }
    }

    public function getAjax1(Request $request)
    {
    
        $username = $_GET['username'];
        
        if(DB::table('user')->where('username',$username)->first())
        {
            return 1;
        }else{
            return 2;
        }
    }

    public function getAjax2(Request $request)
    {
    
        $email = $_GET['username'];
        
        if(DB::table('user')->where('email',$email)->first()){
          return 1;
        }else{
          return 2;
        }
    }

}
