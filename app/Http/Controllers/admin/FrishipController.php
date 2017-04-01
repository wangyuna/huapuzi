<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class friShipController extends Controller
{
    public function getAdd()
    {

        return view('admin.friShip.add');
    }

    public function postInsert(Request $request)
    {
        
        // 自动表单验证
        $this->validate($request, [
        'linkname' => 'required',
        'url' => 'required',
        ],[
        'linkname.required' => '链接名不存在',
        'url.required' => '链接地址不存在',
        ]);
    

        // 数据组装
        $arr = $request -> only(['linkname','url','content']);
        $res = DB::table('friendlink') -> insert($arr);

        if($res)
        {
            return redirect('/admin/friShip/index') -> with('success','添加成功');
        }else{
            return back() -> with('error','添加失败');
        }
    }

    public function getIndex(Request $request)
    {
        $count = $request -> input('count',10);
        $search = $request -> input('search','');

        // 查询数据 并分页
        $data = DB::table('friendlink') ->where('linkname','like','%'.$search.'%')-> paginate($count);

        return view('admin.friShip.index',[
                'data'=>$data,
                'request' => $request -> all()
            ]);
        }
    public function getDelete($id)
    {
        $res = DB::table('friendlink') ->where('id',$id) -> delete();

        if($res)
        {
            return redirect('/admin/friShip/index') ->with('success','删除成功');
        }else{
            return back() ->with('error','删除失败');
        }
    }

    public function getEdit($id)
    {
        $data = DB::table('friendlink') ->where('id',$id) -> first();
        return view('/admin/friShip/edit',['data'=>$data]);
    }    

    public function postUpdate(Request $request)
    {
        // 获取数据
        $arr = $request ->except(['_token','id']);
        $res = DB::table('friendlink') -> where('id',$request -> input('id')) -> update($arr);

        if($res)
        {
            return redirect('/admin/friShip/index') ->with('success','修改成功');
        }else{
            return back() ->with('error','修改失败');
        }
    }       
}
