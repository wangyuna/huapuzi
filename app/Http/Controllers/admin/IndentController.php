<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class IndentController extends Controller
{
    public function getIndex($id)
    {
        $res = DB::table('order')
            -> where('order.status',$id)
            -> join('address','address.id','=','order.aid')
            -> select('address.to_name','address.to_state','address.to_city','address.to_address','address.to_mobile','order.uid','order.order_num','order.totalMoney','order.time','order.status','order.id')
            -> get();

        return view("admin.indent.index",['res'=>$res]);
    }

    public function getDetails(Request $request)
    {
        
        $arr = $request -> all();
        
        $res = DB::table('order') -> where('id',$arr['id']) -> get();
        
        return view("admin.indent.details",[
                'res'=>$res,
                'arr'=>$arr
            ]);
    }

    public function getOrdergoods(Request $request) 
    {
        
        $arr = $request -> all();
        $res = DB::table('order_goods')
            -> where('order_goods.oid',$arr['id'])        
            -> join('goods','goods.id','=','order_goods.gid')
            -> select('goods.title','order_goods.id','order_goods.num','order_goods.price2')
            -> get();
        
        return view("admin.indent.ordergoods",[
                'res'=>$res,
                'arr'=>$arr
            ]);
    }

    public function getStatus(Request $request) 
    {
        $arr = $request -> all();
        $res = DB::table('order') -> where('id',$arr['id']) -> update(['status'=>$arr['status']]);
        
        if($res) 
        {
            return redirect('/admin/indent/index/'.$arr['status']) -> with('success','操作成功');
        }else{
            
            return back() -> with('error','操作失败');
        }
    }
}
