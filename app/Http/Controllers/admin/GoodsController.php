<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CateController;
use DB;
use Config;
class GoodsController extends Controller
{
    public function getIndex(Request $request)
    {
        $count = $request -> input('count',10);
        $search = $request -> input('search','');
      
        $data = DB::table('goods')      
            -> join('pricerea','pricerea.id','=','goods.prid')
            -> join('type','type.id','=','goods.pid')
            -> join('color','color.id','=','goods.color')
            -> select('goods.id','goods.title','goods.number','goods.price1','goods.price2','goods.num','goods.content','pricerea.ptitle','type.name','goods.sid','color.cr')
            -> where('goods.title','like','%'.$search.'%')
            -> paginate($count);

        $page = $request -> input('page',1);
        
        $sum = count(DB :: table('goods') 
            -> join('pricerea','pricerea.id','=','goods.prid')
            -> join('type','type.id','=','goods.pid')
            -> join('color','color.id','=','goods.color')
            -> where('goods.title','like','%'.$search.'%')
            -> get()); 

        $start = ($page - 1) * $count + 1;
        $end = min($page * $count,$sum);
        
        return view("admin.goods.index",[
                'data' => $data,
                'request'=>$request -> all(), 
                'start' => $start, 'end' => $end, 
                'page' => $page, 'sum' => $sum
            ]);
    }

    public function getAdd()
    {   
        return view('admin.goods.add',['data'=>CateController::getCate()]);
    }

    public function postInsert(Request $request)
    { 
        $this->validate($request, [
            'title' => 'required',
            'material' => 'required',
            'price1' => 'required',        
            'price2' => 'required',
            'num' => 'required',
            'color' => 'required',
            'pic1' => 'required',        
            'pic2' => 'required',        
            'pic3' => 'required',        
            'content' => 'required',        
        
        ],[
            'title.required' => '请添加商品名称',
            'title.required' => '请添加材料',
            'price1.required' => '请输入商品原价',
            'price2.required' => '请输入商品现价',        
            'num.required' => '请输入商品库存',
            'color.required' => '请输入商品颜色',
            'pic1.required' => '请上传图片一',
            'pic2.required' => '请上传图片二',
            'pic3.required' => '请上传图片三',
            'content.required' => '请上传商品详情',       
        ]);       
      
        $arr = $request -> except('_token','pic1','pic2','pic3');
        
        $res = DB::table('goods') -> insertGetId($arr);
        
        $data1 = $this->deal($request);
          
        if(empty($data1))
        {
            return back()->with("error","图片未上传完整");
        }

        $data1['cid']=$res;

        $res1 = DB::table("images")->insert($data1);


        if($res || $res1)
        {
            return redirect('/admin/goods/index') -> with('success','添加成功');
        } else {

            return back() -> with('error','添加失败');
        }
    }

    public function deal($request)
    {
        $data = $request->only("pic1","pic2","pic3");
      
        if($request -> hasFile("pic1") && $request -> hasFile("pic2") && $request -> hasFile("pic3"))
        {
            //当图片名字存在的时候循环一下从新赋名字
            do{

                //获取图片名字
                $picname1 = $request->file('pic1')->getClientOriginalName(); 
                $picname2 = $request->file('pic2')->getClientOriginalName(); 
                $picname3 = $request->file('pic3')->getClientOriginalName(); 
                
                //获取文件路径要格式部分
                $picname1 = pathinfo($picname1);
                $picname2 = pathinfo($picname2);
                $picname3 = pathinfo($picname3);

                //如果不满足一下格式 不允许上传
                if(($picname1['extension'] !="jpg" && $picname1['extension'] !="jpeg" && $picname1['extension'] !="png") || ($picname2['extension'] !="jpg" && $picname2['extension'] !="jpeg" && $picname2['extension'] !="png") || ($picname3['extension'] !="jpg" && $picname3['extension'] !="jpeg" && $picname3['extension'] !="png")){
                      return back()->with("error","上传图片格式不对");
                 }

                 //给图片加密
                 $newpic1 = md5(time().rand(0,999)).".".$picname1['extension'];
                 $newpic2 = md5(time().rand(0,999)).".".$picname2['extension'];
                 $newpic3 = md5(time().rand(0,999)).".".$picname3['extension'];
            }while(file_exists(Config::get("app.load_path").$newpic1));
                 $request->file('pic1')->move(Config::get("app.load_path"),$newpic1);
                 $request->file('pic2')->move(Config::get("app.load_path"),$newpic2);
                 $request->file('pic3')->move(Config::get("app.load_path"),$newpic3);
                
                 //去掉前面点
                 $data['pic1'] = Config::get("app.load_path").$newpic1;
                 $data['pic2'] = Config::get("app.load_path").$newpic2;
                 $data['pic3'] = Config::get("app.load_path").$newpic3;
                  // dd($data);
                 return $data;  

        }
    }

    public function getDelete($id)
    {

        $res = DB::table('goods') -> where('id',$id) -> delete();
       
        if($res) 
        {
            return redirect('/admin/goods/index') -> with('success','删除成功');
        } else {
            return back() -> with('error','删除失败');
        }
    }

    public function getEdit($id){

        $res = DB::table('goods') -> where('id',$id) -> first();

        $res1 = DB::table('goods') 
            -> join('images','images.cid','=','goods.id')
            -> where('images.cid',$id)
            -> select('images.id','images.pic1','images.pic2','images.pic3')
            -> get();
        
        return view('admin.goods.edit',[
                'data'=>CateController::getCate(),
                'id'=>$id,
                'res'=>$res,
                'res1'=>$res1
            ]);
    }

    public function postUpdate(Request $request){
      
        $arr = $request -> except('_token','pic1','pic2','pic3');
        $data = $this->deal($request);
        $id = $request -> only('id');
        
        $res = DB::table('goods') -> where('id',$id) -> update($arr);

        if(!empty($data))
        {
        $res1 = DB::table('images') -> where('cid',$id) -> update($data);
        }

        if($res) 
        {
          return redirect('/admin/goods/index') -> with('success','修改成功');
        } else {
          return back() -> with('error','修改失败');
        } 
    }

    public function getAjax(Request $request){
      
        $title = $_GET['title'];
        
        if(DB::table('goods')->where('title',$title)->first()){
            return 2;
        }else{
            return 1;
        }
    }

    public function getAjax1(Request $request){
      
        if(substr_count($_GET['pid'],'|----') == 2){
            return 2;
        }else{
            return 1;
        }
    }

}