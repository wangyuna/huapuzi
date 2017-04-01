<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests\HrequestInsert;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class HelpController extends Controller
{
    public function getAdd()
    {
        return view("help.add");
    }

    public function postInsert(HrequestInsert $request)
    {
        if($request->input("pname"))
        {
            $data=$request -> except(["_token","pname","id"]);
            $data['pid']=$request->input("id");
            $data['path']="0-".$data['pid'];
            
        } else {
            $data=$request -> except(["_token"]);
            $data['pid']=0;
            $data['path']=0;    
        }

        $res = DB::table("help")->insert($data);

        if($res>0)
        {
            return redirect('/admin/help/index')->with("success","添加成功");
        }else{

            return back()->with('error','添加失败');
        }
    }

    public function getIndex()
    {
        
        $res = DB::table("help")->select(DB::raw("*,concat(path,'-',id) paths"))->orderBy("paths")->get();
        
        return view("help.index",[
                "list"=>$res
            ]);
    }

    public function getCadd($id)
    {
        $data = DB::table("help")->where("id",$id)->first();
        return view("help.cadd",[
                'vo'=>$data
            ]);
    }

    public static function dealCou($id,$table)
    {
        if($table=="help")
        {
           return DB::table($table)->where("pid",$id)->count();
        }

        if($table=="content"){
           return DB::table($table)->where("pid",$id)->count();
        }
        
    }

    public function getDel($id)
    { 
        $this -> dealxqpic($id);
        DB::table("content")->where("pid",$id)->delete();
        $res = DB::table('help')->where("id",$id)->delete();

        if($res)
        {
            return redirect("/admin/help/index")->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }

    public function getEdit($id)
    {
        $res = DB::table("help")->where("id",$id)->first();
        return view("help.edit",[
                "vo"=>$res
            ]);
    }

    public static function dealName($id)
    {
        return DB::table("help")->where("id",$id)->first()['name'];
    }

    public function postUpdate(HrequestInsert $request)
    {
        
        $data = $request -> only(["name"]);
        $res = DB::table("help")->where("id",$request->input("id"))->update($data);

        if($res>0)
        {
            return redirect("/admin/help/index")->with("sccuess","修改成功");
        } else {
            return back()->with("error","修改失败");
        }
    }

    public function getSadd($id)
    {
        $res = DB::table("help")->where("id",$id)->first();
        return view("help.sadd",[
                "vo"=>$res
        ]);
    }

    public function postSinsert(Request $request)
    {
        $this->validate($request, [
                'editorValue' => 'required',
            ],[
                'editorValue.required' => "内容不能为空"
            ]);

        $data = $request -> except(['_token']);
        $data['content']=$data['editorValue'];

        unset($data['editorValue']);

        $res = DB::table("content")->insert($data);

        if($res)
        {
            return redirect("/admin/help/index")->with("success","添加内容成功");
        }else{

            return back()->with('error','添加内容失败');
        }
    }

    public function getSedit($pid)
    {
        $data = DB::table("content")->where("pid",$pid)->first();
        $data1 = DB::table("help")->where("id",$pid)->first();
        return view("help.sedit",[
                "vo"=>$data,
                "vo1"=>$data1
            ]);
    }

    public function postSupdate(Request $request)
    {
        $this->validate($request, [
                'editorValue' => 'required',
               
            ],[
                'editorValue.required' => "内容不能为空"
            ]);

        $data = $request -> except(["_token"]);
        $data['content']=$data['editorValue'];

        unset($data['editorValue']);
        unset($data['id']);

        $con = DB::table("content")->where("id",$request->input("id"))->first()['content'];

        if($con != $data['content'])
        {
            //调用删除图片方法
            $this -> dealxqpic($request->input("pid"));
        }

        $res = DB::table("content")->where("id",$request->input('id'))->update($data);

        if($res>0)
        {
            return redirect("/admin/help/index")->with("success","修改成功");
        }else{
            return back()->with("error","修改失败");
        }
         
    }

    public function dealxqpic($id)
    {
        $data = DB::table("content")->where("pid",$id)->first();

        preg_match_all("/src=[\'\"]?([^\'\"]*)[\'\"]?/",$data['content'],$temp);

        foreach($temp[1] as $v)
        {
            if(file_exists(".".$v))
            {
                unlink(".".$v);
            }
        }
    }

}
