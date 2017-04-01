<!DOCTYPE html>
<!-- saved from url=(0019)http://www.hua.com/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ session('config')[0]['webname'] }}</title>
    <meta name="description" content="鲜花网,选中国鲜花礼品网(花礼网)-中国鲜花网领先品牌,Hua.com专注鲜花速递服务10年,销量居鲜花礼品网站首位！鲜花网可24小时预订鲜花，同城送花、异地送花服务,网上订花后最快3小时即可将鲜花快递上门,送花网站覆盖中国900多城市！">
    <meta name="keywords" content="{{ session('config')[0]['keywords'] }}">
    <meta name="author">
    <script src="/h/js/hm.js"></script>
    <script type="text/javascript" src="/h/images/CheckAgent"></script>
    @section('js')
    
    @show    
    <link rel="icon" href="http://www.hua.com/favicon.ico" mce_href="/favicon.ico" type="image/x-icon">
    
    <link type="text/css" rel="stylesheet" href="/h/css/common.css">
    <link type="text/css" rel="stylesheet" href="/h/css/public.css">
    <link type="text/css" rel="stylesheet" href="/h/css/mbar.css">
    <link type="text/css" rel="stylesheet" href="/h/css/style.css" />
    @section('css')
    
    @show
    <style>
        a:hover{
            text-decoration:none;
        }
        body {
            min-width: 1200px;
        }

        .categorys .dropdown-cate {
            height: 400px;
        }

        .beian {
            width: 16px;
            height: 16px;
            background: url(http://img02.hua.com/pc/pimg/beian.png) no-repeat;
            background-size: 16px;
            margin: -3px 2px 0;
        }
    </style>
    <style>
        .app-wx-wrapper .app-download {
            width: 334px;
            text-align: left;
            padding-left: 0;
        }

            .app-wx-wrapper .app-download img {
                margin-left: 13px;
                margin-right: 19px;
            }

        .app-wx-wrapper .cartoon {
            width: 466px;
        }

        .app-wx-wrapper .weixin {
            width: 390px;
        }

        .app-wx-wrapper .cartoon img {
            margin: 13px auto;
        }

        .app-wx-wrapper .weixin img {
            margin-right: 20px;
            margin-left: 18px;
        }

        .app-wx-wrapper .app-download, .app-wx-wrapper .weixin {
            padding: 25px 0px 20px 20px;
        }
        #fj{
            width: 210px;
            height: 40px;
            line-height: 40px;
            display: block;
            overflow: hidden;
            position: absolute;
            left: 0;
            top: 0;
            z-index: 901;   
        }
        .leftNav ul li {
            height: 40px;
            line-height: 40px;
            background: url(/h/images/n_arrow.gif) no-repeat 195px center;
            color: #FFF;
            font-size: 14px;
            margin-left: 1px;
            cursor: pointer;
            position: relative;
        }   
    </style>

    <!--[if lt IE 9]>
        <script src="http://img02.hua.com/pc/assets/js/html5shiv.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="/h/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/h/js/menu.js"></script>    

<link rel="stylesheet" href="/h/css/layer.css" id="layuicss-skinlayercss"></head>
<body class="home">

    <!-- 顶部导航 -->
    @section('music')
    <a href="http://www.hua.com/yongganai/music/" target="_blank"><div style="background:url(/h/images/16_music_banner_top.jpg) 50% 0 no-repeat;height:80px;"></div></a>
    @show
    <div class="site-nav">
        <div class="container">

            <ul class="site-nav-l">
                <li class="menu">
                    <a href="#" onclick="addfavorite();return false;"><span class="ico ico-star"></span>收藏鲜花网(hua.com)</a>
                </li>
                <li class="menu dropdown">
                    <a href="javascript:void(0)" data-hover="dropdown" data-delay="0" aria-expanded="false"><span class="ico ico-weixin"></span>关注微信</a>
                    <div class="dropdown-menu dropdown-weixin">
                        <img src="/h/images/wechat_qrcode.jpg" height="124" width="124">
                        <p>扫码关注<br>回复"礼物" 更多惊喜！</p>
                    </div>
                </li>
                <li class="menu dropdown">
                    <a href="http://www.hua.com/mobile/" data-hover="dropdown" data-delay="0" target="_blank" aria-expanded="false"><span class="ico ico-mobile"></span>手机花礼</a>
                    <div class="dropdown-menu dropdown-weixin">
                        <img src="/h/images/app_qrcode.jpg" height="124" width="124">
                        <p>新人专享100元大礼包</p>
                    </div>
                </li>
            </ul>
            <ul class="site-nav-r">
                <!--登陆状态信息显示start-->
                @if(!empty(session('uid')))
                <li class="menu login" id="LoginInfo"><a href="/home/information" rel="nofollow">{{session('username')}}</a><a href="/session" title="退出">退出</a></li>
                <li class="site-nav-pipe">|</li>
                <li class="menu">
                    <a href="/home/dingdan" rel="nofollow" target="_blank">订单查询</a>
                </li>
                @else
                <li class="menu login" id="LoginInfo"><a href="/home/index_Login/index" rel="nofollow">你好，请登录</a><a href="/home/index_Register/index" title="注册">注册</a></li>
                @endif
                <!--登陆状态信息显示end-->
                
                <li class="site-nav-pipe">|</li>
                <!--我的花礼信息显示start-->
                <li class="menu dropdown">
                    <a href="http://www.hua.com/member/" rel="nofollow" data-hover="dropdown" data-delay="0" target="_blank">我的花礼</a>
                </li><!--我的花礼信息显示end-->
                <li class="site-nav-pipe">|</li>
                <li class="menu dropdown">
                    <a href="http://www.hua.com/help/" data-hover="dropdown" data-delay="0" target="_blank">客户服务<span class="glyphicon glyphicon-triangle-bottom"></span></a>
                    <div class="dropdown-menu dropdown-service">
                        <a href="http://www.hua.com/member/payment/balancefill" target="_blank">在线付款</a>
                        <a href="http://www.hua.com/help/" target="_blank">帮助中心</a>
                        <a href="http://www.hua.com/help/afterservice.htm" target="_blank">售后服务</a>
                        <a href="http://www.hua.com/help/sendRange.htm" target="_blank">配送范围</a>
                        <a href="http://www.hua.com/chat/" target="_blank">留言反馈</a>
                    </div>
                </li>
                <li class="site-nav-pipe">|</li>
                <!--购物车信息显示start-->
                <li class="menu dropdown">
                    <a href="/home/doshop" data-hover="dropdown" data-delay="0" rel="nofollow" target="_blank"><span class="ico ico-cart"></span>购物车<span class="text-primary" id="gwcCount">(0)</span><span class="glyphicon glyphicon-triangle-bottom"></span></a>
                    
                </li><!--购物车信息显示end-->
                <li class="site-nav-pipe">|</li>
                <li class="menu slogan">
                    中国鲜花礼品网:中国鲜花网领先品牌
                </li>
            </ul>
        </div>
    </div>
    <!-- 顶部导航 End -->
    <!-- 头部 -->
    @section('header')
    <header>
        <div class="logo" >

            <h1><a href="/home" style="background:url(/uploads/{{ session('config')[0]['logo'] }}) 0 0 no-repeat;"></a></h1>
            <i></i>
            
    <h2>中国鲜花礼品网 始于2005，简称花礼网</h2>

        </div>
        <div class="search">
            <form name="i_search" method="get" action="/home/flower">
                <div class="input-group">
                    <input name="search" type="text" class="form-control" placeholder="商品关键词">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" onclick="this.form.submit()">搜索</button>
                    </span>
                </div>
            </form>
            
    <span class="help-block">
        <a href="/home/flower" target="_blank">鲜花</a> | <a href="/home/flower" target="_blank">鲜花用途</a> | <a href="/home/flower" target="_blank">鲜花花材</a> | <a href="/home/flower" target="_blank">鲜花类别</a>
    </span>

        </div>
        <div class="service">
            <span class="ico ico-phone"></span>400-889-8188
            <a href="" target="_blank"><span class="ico ico-headset"></span>在线客服</a>
        </div>
    </header>
    @show
    <!-- 头部 End -->
    


    <!-- 导航 -->
    @section('nav')
    
    @show
    <!-- 导航 End -->
    <!-- 大图轮翻 -->
    @section('lunbo')
    
    @show
    <!-- 大图轮翻 -->

    <!-- 大图轮翻 End -->
    <!-- 大图轮翻 End -->
    <!-- 内容 -->
    @section('content')
    
    @show
    <!--底部-->
    <!-- 尾部导航 -->
    <div class="footer-nav">
        <a href="#">首页</a> <b>|</b> <a href="/home/help" target="_blank">关于我们</a> <b>|</b> <a href="#" target="_blank">媒体报道</a> <b>|</b> <a href="#" target="_blank">联系方式</a> <b>|</b> <a href="#" target="_blank">企业团购</a> <b>|</b> <a href="#" target="_blank">花店加盟</a> <b>|</b> <a href="#" target="_blank">友情链接</a> <b>|</b> <a href="#" target="_blank">在线补款</a> <b>|</b> <a class="last-child" href="#" target="_blank">为什么选择中国鲜花礼品网</a>
    </div>
    <!-- 尾部导航 End -->
    <!-- 尾部帮助 -->
    @section('help')
    
    @show
    <!-- 尾部帮助 End -->
    <!-- 通用尾部 -->
    <footer>
        <div class="auth">
            <!-- <span style="margin-right:8px;">
                <script src="http://kxlogo.knet.cn/seallogo.dll?sn=e15041744030058395oqbo000000&amp;size=4"></script>
            </span> -->
            <img style="height:40px;" src="/h/images/cxwz.png">
            <img src="/h/images/cxwz.gif" height="40" width="112">
            <img src="/h/images/smyz.gif" height="40" width="106">
<img src="/h/images/slogan.png" height="50" width="212">            <img src="/h/images/zfb.gif" height="49" width="96">
           <img src="/h/images/100.jpg" height="49" width="150">
            <img src="/h/images/bico1.jpg" alt="ICP" height="46" width="35">
            <!--             <a href="http://www.sznet110.gov.cn/webrecord/innernet/Welcome.jsp?bano=4403301920636" rel="nofollow" target="_blank"><img alt="网警" src="http://img02.hua.com/pc/assets/images/bico2.jpg" height="46" width="35"></a> -->
            <img alt="工商网监" src="/h/images/bico4.jpg" height="46" width="35">
            <img src="/h/images/bico3.jpg" alt="网安" height="46" width="35">
        </div>
        <p><a href="#" rel="nofollow" target="_blank" title="中国花卉协会会员">中国花卉协会会员</a> <a href="#" rel="nofollow" target="_blank">中国电子商务协会会员</a> ICP经营许可证：<a href="#" rel="nofollow" target="_blank">粤B2-20050744</a> <b>|</b> <a href="#" rel="nofollow" target="_blank">粤ICP备09171662号</a> <span class="ico beian"></span>粤公网安备44030502000373号 Copyright © 2005-2017</p>
        <p>花礼网 （中国鲜花礼品网） <a href="#">www.hua.com</a> 中国鲜花网领先品牌，鲜花速递专家！版权：{{ session('config')[0]['copy'] }}</p>
    </footer>
    <!-- 通用尾部 End -->
    <!-- 弹出窗口-->
    
    <!-- 弹出窗口end-->
    <!-- 友情链接 -->
    @section('friendlink')
    <div class="footer-link" style="display:block;">
        <b>友链</b>
        <div>
            @foreach(session('friendlink') as $v)
            <a href="{{ $v['url'] }}" target="_blank" title="{{ $v['content'] }}">{{ $v['linkname'] }}</a>
            @endforeach
        </div>
    </div>
    @show
    <!-- 友情链接 End -->
        <div class="mui-mbar-tabs">
            
        <div class="quick_links_wrap"><div class="quick_link_mian">
                <div class="quick_links_panel">
                    <div id="quick_links" class="quick_links">
                        <li>
                            <a href="http://www.hua.com/#none" class="my_qlinks"><i class="ico_user"></i></a>
                            <!-- ***** 未登录 ***** -->
                            <div class="ibar_login_box">
                                <div class="avatar_box" id="loginStats"><p class="avatar_imgbox"><img src="./鲜花网_中国鲜花礼品网-中国鲜花网,鲜花速递网站,网上订花送花上门,鲜花快递网上花店_files/avatar.jpg"></p><a href="http://www.hua.com/Member/MemberCenter/">张三哥</a>，你好！</div>
                                <div class="login_btnbox">
                                    <a href="http://www.hua.com/Member/Order/"><i class="ico_order"></i>我的订单</a>
                                </div>
                                <i class="icon_arrow_right_white"></i>
                            </div>
                        </li>
                        <li id="shopCart">
                            <a href="javascript:void(0)" class="message_list current"><i class="ico_cart"></i><div class="span">购物车</div><span class="cart_num" id="cart_num">1</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" info="guanzhu1" class="history_list"><i class="ico_collect"></i></a>
                            <div class="mp_tooltip">
                                <a href="javascript:void(0)" info="guanzhu1" class="history_list" style="color: #595656;font-size: 14px;width: 100%;background: #fff;border-radius: 3px 0 0 3px;">我的关注</a>
                                <i class="icon_arrow_right_white"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="mpbtn_histroy"><i class="ico_histroy"></i></a>
                            <div class="mp_tooltip">
                                <a href="javascript:void(0)" class="mpbtn_histroy" style="color: #595656;font-size: 14px;width: 100%;background: #fff;border-radius: 3px 0 0 3px;">最近查看</a>
                                <i class="icon_arrow_right_white"></i>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="leave_message"><i class="ico_phone"></i></a>
                            <div class="mp_tooltip">400-899-8188<i class="icon_arrow_right_white"></i></div>
                        </li>
                        <li>
                            <a href="http://www.hua.com/chat/" class="mpbtn_recharge" target="_blank"><i class="ico_headset"></i></a>
                            <div class="mp_tooltip">
                                <a href="http://www.hua.com/chat/" class="mpbtn_recharge" style="color: #595656;font-size: 14px;width: 100%;background: #fff;border-radius: 3px 0 0 3px;">在线客服</a>
                                <i class="icon_arrow_right_white"></i>
                            </div>
                        </li>
                    </div>
                    <div class="quick_toggle">
                        <li>
                            <a href="javascript:void(0)"><i class="ico_qrcode"></i></a>
                            <div class="mp_qrcode">
                                <p>
                                    <img src="./鲜花网_中国鲜花礼品网-中国鲜花网,鲜花速递网站,网上订花送花上门,鲜花快递网上花店_files/QR_wx.jpg" width="110" height="110">
                                    关注微信公众号
                                </p>
                                <p>
                                    <img src="./鲜花网_中国鲜花礼品网-中国鲜花网,鲜花速递网站,网上订花送花上门,鲜花快递网上花店_files/QR_app.jpg" width="110" height="110">
                                    下载花礼APP
                                </p>
                                <i class="icon_arrow_right_white"></i>
                            </div>
                        </li>
                        <!--                         <li>
                                                    <a href="/Surveys.html" class="mpbtn_recharge" target="_blank"><i class="ico_surveys"></i></a>
                                                    <div class="mp_tooltip">反馈意见<i class="icon_arrow_right_white"></i></div>
                                                </li> -->
                        <li>
                            <a href="http://www.hua.com/#top" class="return_top"><i class="ico_gotop"></i></a>
                            <div class="mp_tooltip">
                                <a href="#top" class="return_top" style="color: #595656;font-size: 14px;width: 100%;background: #fff;border-radius: 3px 0 0 3px;">返回顶部</a>
                                <i class="icon_arrow_right_white"></i>
                            </div>
                        </li>
                    </div>
                </div>
                <div id="guanzhu1" style="display:block;left:-315px;width:280px;height:100%;display:none;" class="quick_links_pop ">
                    <table>
                        
                    @foreach(App\Http\Controllers\home\CollectController::select() as $collect)
                       <tr style="height:80px;">
                           <td style="width:80px;">
                               <img height="50px" src="{{trim($collect['pic1'],'.')}}" alt="">
                           </td>
                           <td style="">
                               {{$collect['title']}}
                           </td>
                           <td>
                               {{$collect['price2']}}
                           </td>
                           <td>
                               <a href="javascript:;" gid="{{$collect['id']}}" info="shanchu">删除</a>
                           </td>
                       </tr>
                            


                    @endforeach
                    </table>
                </div>
            </div></div></div>
   
    @section('js1')

    @show
   <script type="text/javascript">

    $('a[info="guanzhu1"]').click(function(){
        $('#guanzhu1').fadeToggle('1000');
    });
    $('a[info="shanchu"]').click(function(){
        var id = $(this).attr('gid');
        var tr = $(this).parent().parent();
        $.ajax({
            url:'/home/collect/delete',
            type:'get',
            data:{'id':id},
            success:function(mes){
                if(mes == 'yes'){
                    tr.remove();
                }else{
                    alert('删除失败');
                }
            }
        });
    });
</script>

</body></html>
