<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AttController extends Controller
{
    public function getIndex()
    {
        return view('home.home.att');
    }

    public function postInsert(Request $request)
    {
        $b = $request -> except('_token','action');
        $a = DB::table('user') -> where('email',$b['email']) -> value('id');
        $c = DB::table('att') -> where('number',$b['password']) -> get();
        $e = $b['password'];
        $f = preg_match("/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$/",$e);
        $g = preg_match('/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/',$e);
        $att['gid'] = $a;
        $att['number'] = $e;
        $att['status'] = 2;

        if(empty($c) &&($f ==1 || $g == 1) && !empty($b['email']) && !empty($b['password']))
        {
            $I = DB::table('att') -> insert($att);
            $res = DB::table('att') -> where('gid',$a) -> update($att);
            
            return redirect('/home/index') -> with('status',2);
        }else{

            return back() -> with('status',0);
        }
    }
     
}

