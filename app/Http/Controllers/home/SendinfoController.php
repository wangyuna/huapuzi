<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\home\ShopController;

class SendinfoController extends Controller
{
    public function getIndex(Request $request)
    {

        
        $data = $request -> all();
       
        if(!empty($data)) 
        {
            $cart = ShopController::cart();
            
            foreach($cart as &$v) 
            {
                $id = $v['gid']; 
                $num = $data[$id];

                $v['num'] = $num;            
            }
            
            session(['cart'=>$cart]);
        }
        
        $uid = session('uid');
        $email = DB::table('user') -> where('id',$uid) -> value('email');
        $res = DB::table('address') -> where('uid',$uid) -> get();
        
        return view('home.home.sendInfo',['res'=>$res,'email'=>$email]);
    }

    public function getDelete($id) 
    {

        $res = DB::table('address') -> where('id',$id) -> delete();
        if($res) 
        {
            return redirect('/sendinfo/index');
        }else{
            return back();
        }
    }

    public function postEdit(Request $request) 
    {
    
        $arr = $request -> only('to_name','to_mobile','to_state','to_city','to_address','peisongfei');
        $arr['uid'] = session('uid');
        $id = $request -> only('id');
        
        $res = DB::table('address') -> where('id',$id) -> update($arr);
        
        if($res) 
        {
            return redirect('/sendinfo/index');
        }else{
            return back();
        }
    }

    public function postAddress(Request $request) 
    {
        
        $arr = $request ->except(['_token']);
        $arr['uid'] = session('uid');
        
        $res = DB::table('address') -> insert($arr);
    }

    public function postDoshopping(Request $request) 
    {
        
        // dd($request -> all());
    }

    public function postOrdersave(Request $request) 
    {

        $arr = $request -> only('aid','realname','phone','Email','words','pays','pays','totalMoney','quest');
        $arr1 = $request -> only('send_riqi','select_hours','select_minutes','send_timezone');
        $arr2 = $request -> only('to_name','to_state','to_city','to_address','to_mobile');

        $arr['order_num'] = time();
        $arr['uid'] = session('uid');
        $arr['time'] = date('Y-m-d H:i:s',time());
        $arr['send_time'] = $arr1['send_riqi'].' '.$arr1['send_timezone'].' '.$arr1['select_hours'].' '.$arr1['select_minutes'];

        $res = DB::table('order') -> insertGetId($arr);

        foreach(session('cart') as $v) 
        {
            $res1['oid'] = $res;
            $res1['gid'] = $v['gid'];
            $res1['num'] = $v['num'];
            $res1['price2'] = $v['price2'];
            $res2 = DB::table('order_goods') -> insert($res1);
        }

        if($res || $res1) 
        {
            return view('home.home.ordersave',['arr'=>$arr,'arr1'=>$arr1,'arr2'=>$arr2]);
        }else{
            return back();
        }
    }
}
