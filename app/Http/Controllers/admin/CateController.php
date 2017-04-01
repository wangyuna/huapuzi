<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CateController extends Controller
{ 

    static public function getCatePid($pid)
    {
        
        $data = DB::table('type') -> where('pid',$pid)-> get();
       
        $arr = array();

        foreach($data as $k=>$v)
        {
            $v['sub'] = self::getCatePid($v['id']);
            $arr[] = $v;
        }

        return $arr;
    }

    static public function getCate() 
    {
        $data = DB::table('type') -> select(DB::raw("*,concat(path,',',id) as paths")) -> orderBy('paths') -> get();
    
        foreach($data as $k=>$v)
        { 
            //逗号 出现的次数
            $l = substr_count($v['path'],',');
            $data[$k]['name'] = str_repeat('|----',$l).$v['name'];
        }

        return $data;
    }

    public function getAdd($id="") 
    {
        //加载模板
        return view('admin.cate.add',['data'=>self::getCate(),'id'=>$id]);
    }

    public function getIndex(){

        return view('admin.cate.index',['data'=>self::getCate()]);
    }

    public function postInsert(Request $request) 
    {
      
        $arr = $request -> only(['name','pid']);
        $pid = $request -> input('pid');

        if($pid == 0)
        {
            $arr['path'] = 0;
        }else{
            $res = DB::table('type') -> where('id',$pid) -> first();
            $arr['path'] = $res['path'].','.$res['id'];
        }

        //插入数据
        $s = DB::table('type') -> insert($arr); 

        if($s)
        {
            return redirect('/admin/cate/index') -> with('success','添加成功');
        } else {
            return back() -> with('error','添加失败');
        }
    }

    public function getDelete($id)
    {
        $data = DB::table('type') -> where('pid',$id) -> first();
        if($data){
          return back() -> with('error','当前类别有子类，不允许删除');
        }
        $res = DB::table('type') -> where('id',$id) -> delete();
        if($res) 
        {
          return redirect('/admin/cate/index') -> with('success','删除成功');
        } else {
          return back() -> with('error','删除失败');
        }
    }

    public function getEdit($id)
    {
        $res = DB::table('type') -> where('id',$id) -> first();
        return view('admin.cate.edit',[
                'data'=>self::getCate(),
                'res'=>$res
            ]);
    }

    public function postUpdate(Request $request)
    {
    
        $arr = $request -> only(['name','pid']);
        $pid = $request -> input('pid');
        $id = $request -> input('id');

        if($pid == 0)
        {
            $arr['path'] = 0;
        }else{

            $res = DB::table('type') -> where('id',$pid) -> first();
            $arr['path'] = $res['path'].','.$res['id'];
        }

        $data = DB::table('type') -> where('pid',$id) -> first();

        if($data)
        {
            return back() -> with('error','当前类别有子类，不允许修改');
        }

        //修改
        $s = DB::table('type') -> where('id',$id) -> update($arr);
        
        if($s) 
        {
          return redirect('/admin/cate/index') -> with('success','修改成功');
        } else {
          return back() -> with('error','修改失败');
        }
    }
}
