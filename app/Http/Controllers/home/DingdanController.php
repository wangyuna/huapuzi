<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CateController;
use DB;

class DingdanController extends Controller
{

    public function dingdan() 
    {
        $res2=DB::table("order")
            -> join("address","address.id","=","order.aid")
            -> whereIn("order.status",[1,2])
            -> where("order.uid",session('uid'))
            -> orderBy("order.time","desc")
            -> select("order.id","order.totalMoney","order.status","order.time","order.order_num","address.to_name")
            -> get();
        
        return view('home.dingdan.dingdan',[
                'res'=>CateController::getCatePid(0),
                'res2'=>$res2
            ]);
    }

    public static function getOrderxq($id)
    {
        $res3=DB::table("order_goods")
            -> where("order_goods.oid",$id)
            -> join("order","order.id","=","order_goods.oid")            
            -> join("goods","goods.id","=","order_goods.gid")  
            -> join("images","images.cid","=","order_goods.gid")
            -> select("order_goods.price2","order_goods.num","order_goods.oid","order_goods.gid","order_goods.sus","order.totalMoney","goods.title","order_goods.id","images.pic1")          
            -> get();
            
        return $res3;
    }    

    public function getQr($id="") 
    {

        DB::table('order') -> where('id',$id) -> update(['status'=>3]);

        $res2=DB::table("order")
            -> join("address","address.id","=","order.aid")
            -> where("order.status",3)
            -> where("order.uid",session('uid'))
            -> orderBy("order.time","desc")
            -> select("order.id","order.totalMoney","order.status","order.time","order.order_num","address.to_name")
            -> get();
            
        return view('home.dingdan.qrdingdan',[
            'res'=>CateController::getCatePid(0),
            'res2'=>$res2
            ]);
    }

}
