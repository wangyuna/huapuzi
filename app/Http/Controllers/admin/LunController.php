<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\LunRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Config;
class LunController extends Controller
{
    //添加轮播页面
    public function getAdd()
    {
        
        return view('lun.add',[
                "list"=>CateController::getcate()

            ]);
    }

    //执行添加轮播页面
    public function postInsert(LunRequest $request)
    {
        $data = $request->except("_token");

        if($request->hasFile("pic"))
        {
            do{
                $picname = $request->file('pic')->getClientOriginalName(); 
                $picname = pathinfo($picname);
                if($picname['extension'] !="jpg" && $picname['extension'] !="jpeg" && $picname['extension'] !="png")
                {
                      return back()->with("error","上传logo格式不对");
                }

                $newpic = md5(time().rand(0,999)).".".$picname['extension'];

            }while(file_exists(Config::get("app.load_path").$newpic));

            $request->file('pic')->move(Config::get("app.load_path"),$newpic);
            $data['img'] = trim(Config::get("app.load_path").$newpic,".");
            unset($data['pic']);
            $res = DB::table("lun")->insert($data);

            if($res)
            {
                return redirect("/admin/lun/index")->with("success","添加成功");
            }else{
                return back()->with("error","添加失败");
            }

        }else{
            return back()->with("error","图片未上传");
        }
    }

    public function getIndex(Request $request)
    {
        
        $res = DB::table("lun")
            ->where(function($query)use($request){
                $tid=DB::table("brand")
            ->where("title",$request->input("keywords"))->first()['id'];

        if($request->input("keywords"))
        {
            $query->where("name","like","%".$request->input("keywords")."%")
                  ->orWhere("tid",$tid);
        }
            })->orderBy("id","desc")->paginate($request->input("num",5));
        return view("lun.index",[
                "list"=>$res,
                "request"=>$request->all()
            ]);
    }

    public static function brandName($id)
    {
        $res = DB::table("brand")->where("id",$id)->first();
        return $res['title'];
    }

    public function getDel($id)
    {
        $res = DB::table("lun")->where("id",$id)->first();
        
        $res = DB::table("lun")->where("id",$id)->delete();
        if($res>0)
        {
            return redirect("/admin/lun/index")->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }

    public function getEdit($id)
    {
        $res = DB::table("lun")->where("id",$id)->first();
        $res1 = DB::table("brand")->get();
        return view("lun.edit",[
                "vo" => $res,
                'list1'=> $res1
            ]);
    }

    public function postUpdate(LunRequest $request)
    {
        if($request -> hasFile('pic'))
        {
            do{
                $picname = $request->file('pic')->getClientOriginalName(); 
                $picname = pathinfo($picname);
                 if($picname['extension'] !="jpg" && $picname['extension'] !="jpeg" && $picname['extension'] !="png"){
                    return back()->with("error","上传logo格式不对");
                }

                $newpic = md5(time().rand(0,10000)).".".$picname['extension'];

            }while(file_exists(Config::get("app.load_path").$newpic));

            $request->file('pic')->move(Config::get("app.load_path"),$newpic);

            $data = $request->except(["_token","pic"]);
            $data['img']=trim(Config::get("app.load_path").$newpic,".");
            $res = DB::table("lun")->where("id",$request->input('id'))->first();
             
            $res = DB::table("lun")->where("id",$request->input('id'))->update($data);

        }else{
            $data = $request->except(["_token","pic","id"]);
            $res = DB::table("lun")->where("id",$request->input('id'))->update($data);
        }

        if($res>0)
        {
            return redirect("/admin/lun/index")->with("success","修改轮播成功");
        }else{
            return back()->with("error","修改轮播失败");
        }
    }
    
}
