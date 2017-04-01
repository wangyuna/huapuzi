<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
class CodeController extends Controller
{
    /**
     * index()               生成验证码的方法
     * @param $builder       生成验证码图片的Builder对象，配置相应属性
     * @param $phrase        获取验证码的内容
     * $builder->build()     设置验证码的宽高,字体
     * $builder->output()    输出验证码
     */
    public function index()
    {        
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session(['code'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();        
    }

}
