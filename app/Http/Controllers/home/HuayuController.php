<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CateController;

class HuayuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        
        $arr = DB::table('artical') -> get();

        return view('home.artical.index',['arr'=> $arr,'res'=>CateController::getCatePid(0)]);
    }

    public function getXiang($id)
    {
         $arr = DB::table('artical') -> where('id',$id)->first();
         return view('home.wenzhang.wenzhang',['arr'=> $arr,'res'=>CateController::getCatePid(0)]);
    }
}
