<?php

namespace App\Http\Controllers\home;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CateController;
class HinformationController extends Controller
{
    public function information()
    {
        $uid = 52;
        $arr = DB::table('information')->where("uid",$uid)->get();
        
        return view('home.information.Hinformation',[
                'res'=>CateController::getCatePid(0),
                'arr'=>$arr
            ]);
    } 

    /*通过ajax发送请求修改当前点击选项的状态为1，
        参数 ： 需要修改数据的id；
    */
    public function openinformation(Request $request)
    {
        if(DB::table('information')->where('id',$request->input('id'))->update(['status'=>1])){
            echo 'yes';
            return ;
        }else{
            echo 'no';
            return ;
        }
    } 

    public function delinformation(Request $request)
    {
        if(DB::table('information')->where('id',$request->input('id'))->delete())
        {
            echo 'yes';
            return ;
        }else{
            echo 'no';
            return ;
        }
    }
}
