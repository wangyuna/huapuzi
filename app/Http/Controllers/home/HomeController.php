<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CateController;
use DB;
use Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $res = CateController::getCatePid(0);
        $arr = DB::table('config') -> get();
       
        $res3 = DB::table("lun")->orderBy("id","desc")->paginate(4);
        session(['config'=>$arr]);

        $friendlink = DB::table("friendlink")->orderBy("id","desc")->paginate(10);

        session(['friendlink'=>$friendlink]);

        $hua1 = DB::table('goods') 
            -> where('goods.pid',135) 
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> orderBy('id', 'desc')
            -> paginate(self::hcount());

        $hua2 = DB::table('goods') 
            -> where('goods.pid',139) 
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> orderBy('id', 'desc')
            -> paginate(self::hcount()); 

        $hua3 = DB::table('goods') 
            -> where('goods.pid',143) 
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> orderBy('id', 'desc')
            -> paginate(self::hcount()); 
        
        //显示模板
        return view('home.home.index',[
                'res'=> $res,
                'arr'=>$arr,
                'list3'=>$res3,
                'hua1'=>$hua1,
                'hua2'=>$hua2,
                'hua3'=>$hua3
            ]);
    }

    static public function hcount()
    {
        $count = 8;
        return $count;
    }

    static public function cate()
    {
        $sort = DB::table('sort') -> get();
        $pricerea = DB::table('pricerea') -> get();
        $num = DB::table('num') -> get();
        $res = CateController::getCatePid(0);
        //显示模板
        return [
            'sort'=>$sort,
            'pricerea'=>$pricerea,
            'num'=>$num,
            'res'=>$res
        ];
    }

    // 热销鲜花推荐
    static public function sid()
    {
        $sid = DB::table('goods')
            -> where('sid',2)
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','goods.sid','images.pic1')
            -> orderBy('id', 'desc')
            -> paginate(3);

        return $sid;    
    } 

    // 最新评论
    static public function estimate()
    {

        $estimate = DB::table('estimate')
            -> where('huishou',1)
            -> join('user','user.id','=','estimate.uid')
            -> select('estimate.gid','estimate.con','estimate.status','estimate.time','estimate.grade','user.username')
            -> orderBy('time', 'desc')
            -> paginate(3);

        return $estimate;    
    } 

    static public function count()
    {
        $count = 4;
        return $count;
    }

    public function flower(Request $request)
    {

        $search = $request -> input('search','');

        $data = DB::table('goods')
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','goods.sid','images.pic1')
            -> where('goods.title','like','%'.$search.'%')
            -> paginate(self::count());

        $sum = count(DB::table('goods') 
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','goods.sid','images.pic1')
            -> where('goods.title','like','%'.$search.'%')
            -> get()); 

        $max = ceil($sum / self::count());
        $page = $request -> input('page',1);

        //显示模板
        return view('home.home.flower',array_merge([
                'data'=>$data,
                'sum'=>$sum,
                'request'=>$request -> all(),
                'max'=>$max,
                'page'=>$page
            ],self::cate())
        );
    }

    public function type(Request $request)
    {
        
        $id = $request -> input('id');

        $data = DB::table('goods') 
            -> where('goods.pid',$id) 
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> paginate(self::count());
        
        $sum = count(DB::table('goods') 
            -> where('goods.pid',$id) 
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> get()); 

        $max = ceil($sum / self::count());
        $page = $request -> input('page',1);
        
        //显示模板
        return view('home.home.list',array_merge([
                'data'=>$data,
                'sum'=>$sum,
                'request'=>$request -> all(),
                'max'=>$max,
                'page'=>$page
            ],self::cate())
        );
    }

    public function color(Request $request)
    {
        $id = $request -> input('id');

        $data = DB::table('goods') 
            -> where('goods.color',$id)  
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> paginate(self::count());

        $sum = count(DB::table('goods') 
            -> where('goods.color',$id)  
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> get()); 

        $max = ceil($sum / self::count());
        $page = $request -> input('page',1);
        
        //显示模板
        return view('home.home.list',array_merge([
                'data'=>$data,
                'sum'=>$sum,
                'request'=>$request -> all(),
                'max'=>$max,
            'page'=>$page],self::cate())
        );
    }

    public function pricerea(Request $request)
    {
        $id = $request -> input('id');

        $data = DB::table('goods') 
            -> where('goods.prid',$id)  
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> paginate(self::count());

        $sum = count(DB::table('goods') 
            -> where('goods.prid',$id)  
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> get()); 

        $max = ceil($sum / self::count());
        $page = $request -> input('page',1);

        //显示模板
        return view('home.home.list',array_merge([
                'data'=>$data,
                'sum'=>$sum,
                'request'=>$request -> all(),
                'max'=>$max,
            'page'=>$page],self::cate())
        );
    }

    public function num(Request $request)
    {
        $id = $request -> input('id');

        $data = DB::table('goods') 
            -> where('goods.number',$id)  
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> paginate(self::count());

        $sum = count(DB::table('goods') 
            -> where('goods.prid',$id)  
            -> join('images','images.cid','=','goods.id')
            -> select('goods.id','goods.title','goods.price2','images.pic1','goods.sid')
            -> get()); 

        $max = ceil($sum / self::count());
        $page = $request -> input('page',1);

        //显示模板
        return view('home.home.list',array_merge([
                'data'=>$data,
                'sum'=>$sum,
                'request'=>$request -> all(),
                'max'=>$max,
            'page'=>$page],self::cate())
        );
    }

    public function session()
    {
        
        if(session("cart"))
        {
            foreach(session("cart") as $v)
            {
                $res['gid'] = $v['gid'];
                $res['uid'] = session("uid");
            
                DB::table('cart') -> insert($res);
            }
        }

        session() -> flush();

        //显示模板
        return redirect('/home');
    }

    
    public function update(Request $request)
    {
        return view('home.home.update');
    }
    
    public function change(Request $request)
    {
        
        $arr = $request -> except('_token','action');
        if($arr['Validate_Code'] != session('code'))
        {
            return back() -> withInput() -> with('error','验证码不正确');
        }

        $password = Hash::make($arr['password']);
        
        $res = DB::table('user') -> where('username',$arr['username']) -> update(['password' => $password]);
        
        if($res)
        {
            return redirect('/home/index_Login') -> with('error','密码已修改、请登录');
        }else{
            return back() -> with('error','邮箱不存在');
        }
    }

    public function getExchange()
    {
        return view('home.home.forgot');
    }
}
