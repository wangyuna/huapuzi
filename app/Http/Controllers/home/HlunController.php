<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HlunController extends Controller
{
    public function index()
    {
        $res = DB::table('lun') -> get();
        
        return view('home.home.index',[
                'res'=> $res
            ]);
    }
}
