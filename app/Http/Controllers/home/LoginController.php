<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class LoginController extends Controller
{
    public function getIndex()
    {
        return view('home.home.index_Login');
    }

    public function postDologin(Request $request)
    {

     	$s = $request -> only(['username','password','token','Validate_Code']);

        if($s['Validate_Code'] != session('code'))
        {
            return back() -> withInput() -> with('error','验证码不正确');
        }

     	$res = DB::table('user') -> where('username',$s['username']) -> get();

     	if(!empty($res) && Hash::check($s['password'], $res[0]['password']))
        {
            
            session(['username' => $res[0]['username'], 'uid' => $res[0]['id']]);
            
            $cart = DB::table('cart') 
                -> where('uid',session('uid')) 
                -> select('gid') 
                -> get();
            
            session(['cart'=>$cart]);
            
            DB::table('cart') -> where('uid',session('uid')) ->delete();

     		return redirect('/home');
     	}else{
            
     		return back() -> with('error','用户名密码不正确');
     	}
    }    
}
