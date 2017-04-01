<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\admin\CateController;

class ShopController extends Controller
{
    public function index($id){
      
        $data = DB::table('goods')      
            -> join('images','images.cid','=','goods.id')
            -> join('type','type.id','=','goods.pid')
            -> where("goods.id",$id)
            -> select('goods.id','goods.title','goods.price1','goods.price2','goods.content','images.pic1','images.pic2','images.pic3','goods.pid','goods.material')
            -> get();
        
        $type = DB::table('type') -> where('id',$data[0]['pid']) -> get();
        $type1 = DB::table('type') -> where('id',$type[0]['pid']) -> get();
        $type2 = DB::table('type') -> where('id',$type1[0]['pid']) -> get();

        $data1 = DB::table('goods') 
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> get();

        $pinglun = DB::table('estimate') 
            -> where('estimate.gid',$id) 
            -> where('estimate.huishou',1)
            -> join('user','user.id','=','estimate.uid') 
            -> select('estimate.con','estimate.status','estimate.time','estimate.grade','user.username')
            -> get();

        $res = CateController::getCatePid(0);
        
        return view('home.goods.index',[
                'data'=>$data,
                'data1'=>$data1,
                'res'=>$res,
                'type'=>$type,
                'type1'=>$type1,
                'type2'=>$type2,
                'pinglun'=>$pinglun
            ]);
    }

    static public function cart()
    {
        $cart = session("cart");
      
        foreach($cart as $k => &$v)
        {
              
            if(empty($v['gid']))
            {
                unset($cart[$k]);
            }

            $res = DB::table("goods")
                ->join("images","images.cid","=","goods.id")
                ->where("goods.id",$v['gid'])
                ->first();

            $v['title']=$res['title'];
            
            $v['pic1']=$res['pic1'];
            
            $v['price1']=$res['price1'];
            $v['price2']=$res['price2'];
            $v['num']=$res['num'];
            
        }
         
        return $cart;
    }

    public function doshop(Request $request)
    {
        
        if(!$this->checkCart($request))
        {
            
            $request->session()->push("cart",$request->only(['gid']));
        }
        
        return view("home.goods.shopping",[
                "cart"=>self::cart()
            ]);
    }

    public function checkCart($request)
    {
        $cart = session("cart");
        
        $id = $request->input("gid");
        
        if(empty($cart)) return false;

        foreach($cart as &$v)
        {
            
            if($v['gid']==$id)
            {
                session()->forget("cart");
                session(['cart'=>$cart]);
              
                return true;
            }
        }
        return false;
    }

    public function getDelete(Request $request)
    {
      
        $cart = session("cart");
       
        foreach($cart as $k=>$v)
        {
            if($v['gid']==$request->input("id"))
            {
                unset($cart[$k]);
            }
        }
       
        session(["cart"=>$cart]);
    }
}
