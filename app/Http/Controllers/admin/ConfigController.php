<?php

namespace App\Http\Controllers\admin;
use File;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
   
    /*
    *   添加配置方法
    *   /admin/config/add
    */
    public function getAdd()
    {
        $res = DB::table("config")->first();
        

        return view("config.add",[
                "vo"=>$res
            ]);
    }
     /*
    *   执行添加方法
    *   /admin/config/insert
    */
    public function postInsert(Request $request)
    {
        
        $this->validate($request, [
                'webname' => 'required',
                'copy' => 'required',
                'keywords' => 'required'
            ],[
                'webname.required' => '标题不能为空',
                'copy.required' => '版权不能为空',
                'keywords.required' => '关键字不能为空'
            ]);

        $cou = DB::table("config")->count();

        //判断config表是否为空 如果为空进行添加 否则进行修改
        if($cou==0)
        {
            if($request -> hasFile('pic'))
            {

                $picname = $request->file('pic')->getClientOriginalName(); 
                $picname = pathinfo($picname);

                if($picname['extension'] !="jpg" && $picname['extension'] !="jpeg" && $picname['extension'] !="png" && $picname['extension'] !="gif" )
                {
                    return back()->with("error","上传logo格式不对");
                }

                $newpic = time().rand(0,10000).".".$picname['extension'];
                $request->file('pic')->move('./uploads/',$newpic);
                $data = $request->except(["_token","pic"]);
                $data['logo']=$newpic; 
                $res = DB::table("config")->insert($data);

                if($res)
                {
                
                echo "<script>alert('添加成功');
                                window.location.href='/admin/config/add';
                        </script>";
                }else{
                return back()->with("添加链接失败");
                }

            }else{
                return back()->with("error","logo未上传");
            }

       }else{

            if($request -> hasFile('pic'))
            {
                $picname = $request->file('pic')->getClientOriginalName(); 
                $picname = pathinfo($picname);

                if($picname['extension'] !="jpg" && $picname['extension'] !="jpeg" && $picname['extension'] !="png"  && $picname['extension'] !="gif" )
                {
                    return back()->with("error","上传logo格式不对");
                }

                $res = DB::table("config")->first();
            
                File::delete("uploads/".$res['logo']);
                $newpic = time().rand(0,10000).".".$picname['extension'];
                $request->file('pic')->move('./uploads/',$newpic);
                $data = $request->except(["_token","pic"]);
                $data['logo']=$newpic;
                $res = DB::table("config")->update($data);

                if($res)
                {
                    echo "<script>alert('添加成功');
                            window.location.href='/admin/config/add';
                    </script>";
                }else{
                    return back()->with("error","修改失败");
                }
             
            }else{
                $data = $request -> only('webname','keywords','copy','status');
                $res = DB::table("config")->update($data);
                if($res>0){
                    
                    echo "<script>alert('修改成功');
                            window.location.href='/admin/config/add';
                    </script>";
                }else{
                    return back()->with("error","修改失败");
                }
            }
        }

    }
}
