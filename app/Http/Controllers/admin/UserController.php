<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class UserController extends Controller
{
    public function getAdd()
    {
        return view('admin.user.add');
    }


    public function postInsert(Request $request)
    {
        // 自动表单验证
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'repassword' => 'required|same:password',

        ],[
            'username.required' => '用户名不存在',
            'password.required' => '密码不存在',
            'repassword.required' => '确认密码不存在',
            'repassword.same' => '两次密码输入不一致',
        
        ]);

        // 数据组装
        $arr = $request -> only(['username','password','status']);
        $arr['password'] = Hash::make($request -> input('password'));

        // 插入数据库
        $res = DB::table('adminuser') -> insert($arr);
        
        if($res){
            return redirect('/admin/user/index') -> with('success','添加成功');
        }else{
            return back() -> with('error','添加失败');
        }
    }

   // 用户列表
    public function getIndex(Request $request)
    {
        $count = $request -> input('count',10);
        $search = $request -> input('search','');

        // 查询数据 并分页
        $data = DB::table('adminuser') ->where('username','like','%'.$search.'%')-> paginate($count);

        return view('admin.user.index',[
                'data'=>$data,
                'request' => $request -> all()
            ]);

    }

    public function getIndex1(Request $request)
    {
        $count = $request -> input('count',10);
        $search = $request -> input('search','');

        // 查询数据 并分页
        $data = DB::table('user') ->where('username','like','%'.$search.'%')-> paginate($count);
        
        return view('admin.user.hindex',[
                'data'=>$data,
                'request' => $request -> all()
            ]);
    }

    public function getHindex(Request $request)
    {
        $count = $request -> input('count',10);
        $search = $request -> input('search','');
        // 查询数据 并分页
        $data = DB::table('user') ->where('username','like','%'.$search.'%')-> paginate($count);
        
        return view('admin.user.hindex',[
                'data'=>$data,
                'request' => $request -> all()
            ]);
    }

    public function getHdelete($id)
    {
        $res = DB::table('user') ->where('id',$id) -> delete();
        if($res)
        {
            return redirect('/admin/user/hindex') ->with('success','删除成功');
        }else{
            return back() ->with('error','删除失败');
        }
    }

    public function getHedit($id)
    {
        $data = DB::table('user') ->where('id',$id) -> first();
        return view('/admin/user/hedit',['data'=>$data]);
    }

    public function postHupdate(Request $request)
    {
        // 获取数据
        $arr = $request ->only(['quanx','id']);
        
        $res = DB::table('user') -> where('id',$arr['id']) ->update(['quanx'=>$arr['quanx']]);

        if($res)
        {
            return redirect('/admin/user/hindex') ->with('success','修改成功');
        }else{
            return back() ->with('error','修改失败');
        }
    }   

    public function getDelete($id)
    {
        $res = DB::table('adminuser') ->where('id',$id) -> delete();

        if($res)
        {
            return redirect('/admin/user/index') ->with('success','删除成功');
        }else{
            return back() ->with('error','删除失败');
        }
    }

    public function getEdit($id)
    {
        $data = DB::table('adminuser') ->where('id',$id) -> first();
        return view('/admin/user/edit',[
                'data'=>$data
            ]);
    }   

    public function postUpdate(Request $request)
    {
        // 获取数据
        $arr = $request ->except(['_token','id']);
        $res = DB::table('adminuser') -> where('id',$request -> input('id')) ->update($arr);

        if($res)
        {
            return redirect('/admin/user/index') ->with('success','修改成功');
        }else{
            return back() ->with('error','修改失败');
        }
    }
}
