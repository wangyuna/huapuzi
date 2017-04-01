<?php

namespace App\Http\Middleware;
use DB;
use Closure;

class StatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = DB::table("config")->first()['status'];
        
        if($data==0)
        {
            
            return $next($request);
        }else{
         
            return view("errors.500");
        }
    }
}
