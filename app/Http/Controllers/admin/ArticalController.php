<?php

namespace App\Http\Controllers\admin;
use Config;
use Illuminate\Http\Request;
use App\Http\Requests\InsertRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ArticalController extends Controller
{
  //加载文章添加页面
    public function getAdd()
    {
       return view("artical.add",[
            "list"=>CateController::getcate()
        ]);
    }

    //执行添加的操作
    public function postInsert(InsertRequest $request)
    {
        $data = $this->deal($request);
        
        //如果没有上传图片不允许添加
        if(empty($data))
        {
            return back()->with("error","照片为上传");
        }

        $res =DB::table("artical")->insert($data);

        if($res)
        {
            return redirect("/admin/artical/index")->with("success","添加文章成功");
        }else{
            return back()->with("error","添加文章失败");
        }
    }

    //图片上传方法
    public function deal($request)
    {
        
        $data = $request->except("_token");
        if($request->hasFile("pic"))
        {
            //当图片名字存在的时候循环一下从新赋名字
            do{
                //获取图片名字
                $picname = $request->file('pic')->getClientOriginalName();
                //获取文件路径要格式部分
                $picname = pathinfo($picname);

                //如果不满足一下格式 不允许上传
                if($picname['extension'] !="jpg" && $picname['extension'] !="jpeg" && $picname['extension'] !="png")
                {
                    return back()->with("error","上传logo格式不对");
                }

                //给图片加密
                $newpic = md5(time().rand(0,999)).".".$picname['extension'];

            }while(file_exists(Config::get("app.load_path").$newpic));

                $request->file('pic')->move(Config::get("app.load_path"),$newpic);
                
                //去掉前面点
                $data['pic'] = trim(Config::get("app.load_path").$newpic,".");
                $data['con'] = $data['editorValue'];
                unset($data['editorValue']);
                $data['create_t']=time();
                $data['uid'] = 8;
                return $data;  
            }

        }

    /**
    *   浏览页面
    *   /admin/artical/index
    *   
    */
    public function getIndex(Request $request)
    {

        $res = DB::table("artical")->where(function($query)use($request)
        {
            $res1=DB::table("type")->where("name",$request->input("keywords"))->first();

            if($request->input("keywords"))
            {
                $query->where("title","like","%".$request->input("keywords")."%")->orWhere("type_id",$res1['id']);
            }
        })->orderBy("id","desc")->paginate($request->input("num",5));
        
        return view("artical.index",[
                "list"=>$res,
                "request"=>$request->all()
            ]);
    }
    /**
    *   静态方法
    *   获取名字
    *   
    */
    public static function dealArt($id,$table)
    {
        if($table=="user")
        {
            $res = DB::table("user")->where("id",$id)->first();
            return $res['username'];
        }elseif($table=="type"){

            $res = $res = DB::table("type")->where("id",$id)->first();

            return $res['name'];
        }
    }

     /**
    *   加载修改方法
    *   /admin/artical/edit
    *   
    */
    public function getEdit($id)
    {
        $res = DB::table("artical")->where("id",$id)->first();
        return view("artical.edit",[
                "list"=>CateController::getCate(),
                "vo" => $res
            ]);
    }

     /**
    *   执行修改方法
    *   /admin/artical/update
    *   
    */
    public function postUpdate(InsertRequest $request)
    {
        
        $data = $this -> deal($request);

        if(empty($data))
        {
            $data = $request -> except(["_token"]);
            $data['con']=$data['editorValue'];
            unset($data['editorValue']);
        }

        unset($data['id']);
        if($request->hasFile('pic'))
        {
            $this -> dealztpic($request->input("id"));
        }

        //查询文章表的编辑器数据
        $con = DB::table("artical")->where("id",$request->input("id"))->first()['con'];

        //判断编辑器的数据是否与提交数据相等
        if($con != $data['con'])
        {
            //调用删除图片方法
            $this -> dealxqpic($request->input("id"));
        }

        $res = DB::table("artical")->where("id",$request->input('id'))->update($data);

        if($res>0)
        {
            return redirect("/admin/artical/index")->with("success","修改成功");
        }else{
            return back()->with("error","修改失败");
        }
        
    }

     /**
    *   执行删除方法
    *   /admin/artical/update
    *   
    */
    public function getDel($id)
    {
     
        $this -> dealztpic($id);
        $this -> dealxqpic($id);

        $res = DB::table("artical")->where("id",$id)->delete();

        if($res>0)
        {
            return redirect("/admin/artical/index")->with("success","删除成功");
        }else{
            return back()->with('error','删除失败');
        }
    }

    public function dealztpic($id)
    {

        $data = DB::table("artical")->where("id",$id)->first();
         
        if(file_exists(".".$data['pic']))
        {
            unlink(".".$data['pic']);
        }
    }

    public function dealxqpic($id)
    {

        $data = DB::table("artical")->where("id",$id)->first();
        preg_match_all("/src=[\'\"]?([^\'\"]*)[\'\"]?/",$data['con'],$temp);

        foreach($temp[1] as $v)
        {
            if(file_exists(".".$v)){
                unlink(".".$v);
            }
        }
    }


}
