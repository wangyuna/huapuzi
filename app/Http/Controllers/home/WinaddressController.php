<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class WinaddressController extends Controller
{
    public function RiLi()
    {
        return view('home.home.RiLi');
    }

    public function WinAddress(Request $request)
    {
        $id = $request -> input('id');
        if(!empty($id)) 
        {
        	$res1 = DB::table('address') -> where('id',$id) -> get();
        	
        	return view('home.home.WinAddress',[
                    'res1'=>$res1
                ]);
        }else{
        	return view('home.home.WinAddress');
        }        
    }
}
