<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function getAdd()
    {
        return view("information.add");
    }
    public function postInsert(Request $request)
    {
        $this->validate($request, [
                'title' => 'required',
                'from' => 'required',
                'content' => 'required',
                
            ],[
                'title.required' => '主题不能为空',
                'from.required' => '来自哪不能为空',
                'content.required' => '通知内容不能为空'
            ]);

        $res = DB::table("user")->get();
        $data = $request->except("_token");
        $arr = [];

        foreach($res as $v)
        {
            $temp['title']=$data['title'];
            $temp['uid']=$v['id'];
            $temp['time']=time();
            $temp['from']=$data['from'];
            $temp['content']=$data['content'];
            $arr[]=$temp;
        }
        
        $res1 = DB::table("information")->insert($arr);

        if($res1)
        {
            return redirect("admin/information/add")->with("success","发送信息成功");
        }else{

            return back()->with("error","发送信息失败,请从新发送");
        }
    }
}
