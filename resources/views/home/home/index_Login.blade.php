@extends('home.layout.index') 
@section('music') 
@endsection  
@section('friendlink')
@endsection  
@section('js')
<script charset="utf-8" src="/h/js/v.js"></script>
<script src="/h/js/hm.js"></script>
<script type="text/javascript" src="/h/images/CheckAgent"></script>
<script type="text/javascript" src="/h/js/common.js"></script>
    
<script src="/h/js/mailautocomplete.js"></script>
@endsection

@section('css')
<link rel="icon" href="http://www.hua.com/favicon.ico" mce_href="/favicon.ico" type="image/x-icon">

<link type="text/css" rel="stylesheet" href="/h/css/common.css">
<link type="text/css" rel="stylesheet" href="/h/css/public.css">

<style type="text/css">
    .logMethod {
        float: right;
        margin-right: 38px;
        color: #ff6a00;
        font-size: 12px;
    }

    a.logMethod {
        text-decoration: none;
    }

        a.logMethod:hover {
            text-decoration: underline;
        }

    .login-box .login-panel .login-notice {
        min-height: 1px;
    }

    .SMScodes {
        float: left;
    }

    .email_autocomplete1, .phoneNum, .SMScodes {
        position: relative;
        display: inline-block;
    }

        .email_autocomplete1 input, .phoneNum input, .SMScodes input {
            width: 267px;
            height: 40px;
            padding: 10px;
            border: 1px solid #d2d2d2;
        }

        .SMScodes input {
            width: 145px;
        }

    .btnSend, #prompt_info {
        height: 40px;
        margin-left: 7px;
        width: 115px;
        border: 0;
        background: #FFAD0D;
        border-radius: 5px;
        color: #fff;
        margin-left: 3px\9;
    }

    .btnSend {
        vertical-align: middle;
    }

        .btnSend:hover {
            background: #faa500;
        }

    #prompt_info {
        line-height: 40px;
        text-align: center;
        display: inline-block;
        float: right;
        background: #bbb;
    }

    .email_autocomplete1 ul {
        margin: 0;
        padding: 0;
        position: absolute;
        left: 0px;
        border: #ddd0d0 1px solid;
        background-color: #fefefe;
        overflow: hidden;
        z-index: 999;
    }

        .email_autocomplete1 ul .curr {
            background-color: #e7f4fd;
        }

        .email_autocomplete1 ul .note {
            color: #777777;
            cursor: auto;
        }

        .email_autocomplete1 ul li {
            margin: 0;
            padding: 0;
            height: 20px;
            line-height: 20px;
            list-style: none;
            padding-left: 5px;
            cursor: pointer;
        }
        .login-box .login-panel .btn{margin-top: 31px;}
        .other-login-ways{margin: 20px 38px 0;}
        .other-login-ways ul{list-style: none;font-size: 12px;overflow: hidden;padding: 0;}
        .other-login-ways li{float: left;}
        .other-login-ways .line{padding: 0 10px;}
        .csqh{
            margin-top: -9px;
            font-size: 26px;
            color: #444;
        }
</style>
    

    <!--[if lt IE 9]>
        <script src="http://img02.hua.com/pc/assets/js/html5shiv.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="/h/css/layer.css" id="layuicss-skinlayercss"></head>
@endsection
    <!-- 顶部导航 -->
    
    
    <!-- 顶部导航 End -->
    <!-- 头部 -->
    
    <!-- 头部 End -->
    


@section('content')
<div class="login-wrapper">
    <div class="container">
        <div class="login-box">
            <!-- 登录/注册tab -->
            <ul class="login-tabs">
                <li class="active"><a href="javascript:void(0)">登录</a></li>
                <li><a href="/home/index_Register/index">注册</a></li>
            </ul>
            <!-- 登录/注册tab End -->
                    
                    
            <form name="myForm" id="myForm" action="/home/index_Login/dologin" method="post">
                {{ csrf_field()}}
                <div class="tab-content">
                    <!-- 普通登录 -->
                    <div id="loginPane" class="tab-pane login-panel fade in active">
                        <!--登录信息提示区begin-->
                        @if(session('error'))
                        <div class="login-notice" id="Enr" style=""><div class="notice-cont"><span class="ico ico-notice"></span>{{ session('error') }}</div></div>
                        @endif
                        <!--登录信息提示区 end-->
                        <div class="login-notice" id="username" style="display: none;"><div class="notice-cont"><span class="ico ico-notice"></span>该账号不存在！</div></div>
                        <div class="form-group">
                            <label class="sr-only" for="InputUser">用户名</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="ico ico-user"></span></div>
                                <div class="email_autocomplete1">
                                    <input name="username" autocomplete="off" placeholder="请输入用户名" nodetype="email" type="text" id="UserName" config="{width:267,height:40}" value="{{ old('username') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="InputPassword">密码</label>
                            <div class="input-group">
                                <div class="input-group-addon"><span class="ico ico-lock"></span></div>
                                <div class="email_autocomplete1"><input name="password" autocomplete="off" placeholder="用户密码" type="password" id="PassWord" value="{{ old('password') }}"></div>
                            </div>
                        </div>
                        <div class="form-group verify">
                            <input type="hidden" name="action" value="reg">
                            <input id="Validate_Code" name="Validate_Code" maxlength="5" type="text" class="form-control" placeholder="验证码">
                            <img src="/code" id="imgCaptcha" height="36" width="100" title="点击更换" onclick="this.src=this.src+'?a=1'">
                            
                        </div>
                            <input id="ValidCode" name="ValidCode" value="" type="hidden">

                        <div class="checkbox">
                            <input type="hidden" name="DoIt" value="ok">
                            <input type="hidden" id="backUrl" name="backUrl" value="/">
                            <label style="display:none;">
                                <input type="checkbox" name="autologin" id="autologin" onclick="ShowAutoLogin()" value="1"> 一个月内自动登录
                            </label>
                            <a class="pull-right" href="/home/update" target="_blank">忘记密码？</a>
                        </div>

                        <!-- <button class="btn btn-primary btn-lg btn-block" type="button" id="dosubmit">登　录</button> -->
                        <input type="submit" value="提交" class="btn btn-primary btn-lg btn-block" type="button" id="dosubmit">
                        <!-- <input type="submit" value="登录" class="btn btn-primary btn-lg btn-block"> -->
                        <!-- <button class="btn btn-primary btn-lg btn-block" type="button" disabled="disabled" style="display:none;" id="submiting">登录中...</button> -->

<!--                         <div class="other-login">
                            使用合作网站账号登录花礼网：<a href="/Passport/Weixin/Login" title="微信快捷登录" target="_blank">微信</a> | <a href="/Passport/QQ/Login" title="QQ快捷登录" target="_blank">QQ</a> | <a href="/Passport/Alipay/Login" title="支付宝快捷登录" target="_blank">支付宝</a>
                        </div> -->
                    </div>
                    <!-- 普通登录 End -->
                </div>
            </form>
          
            <!--手机号获取验证码登录 end-->
            <div class="other-login-ways">
                <ul>
                    <li><a href="http://www.hua.com/Passport/WeiXin/Login" title="微信快捷登录" target="_blank">微信</a><span class="line">|</span></li>
                    <li><a href="http://www.hua.com/Passport/QQ/Login" title="QQ快捷登录" target="_blank">QQ</a><span class="line">|</span></li>
                    <li><a href="http://www.hua.com/Passport/Alipay/Login" title="支付宝快捷登录" target="_blank">支付宝</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade com-modal" id="passwordModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">你第一次使用该手机号登陆，请先验证。</h4>
            </div>
            <div class="modal-body">
                <iframe src="" width="100%" height="210" frameborder="0" id="attPage"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js1')
<script type="text/javascript" src="/h/js/jquery-1.8.3.min.js"></script>
<script>
    $("input[name='username']").focus(function (){
        $("#username").css('display','none');
        // alert(1);
    })

    $("input[name='username']").blur(function (){
        // alert($(this).val());
        $.get('/home/index_Register/ajax1', 'username='+$("input[name='username']").val(), function(str){
                // alert(str);
                if(str == 2){
                    $("#username").css('display','block');
                    // alert(2);
                }
            })
    })
</script>
@endsection
    <!--底部-->
    <!-- 尾部导航 -->
    
    <!-- 尾部导航 End -->
    <!-- 尾部帮助 -->
    
    <!-- 尾部帮助 End -->
    <!-- 通用尾部 -->
    
    <!-- 友情链接 End -->
    
    