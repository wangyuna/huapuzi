@extends('home.layout.index') 
@section('music') 
@endsection  
        @section('js')
        <script charset="utf-8" src="/h/js/v.js"></script>
        <script src="/h/js/hm.js"></script>
        <script type="text/javascript" src="/h/images/CheckAgent"></script>
        <script type="text/javascript" src="/h/js/menu.js"></script>   
        <script type="text/javascript" src="/h/js/jquery-1.8.2.min.js"></script>
        <script src="/h/js/hm.js"></script>

        <!--多级菜单特效js-->
        <script type="text/javascript" src="/h/js/jquery-1.11.1.min_044d0927.js"></script>
        <script type="text/javascript" src="/h/js/menu.js"></script>    
            
        <!---->


    <meta name="mobile-agent" content="format=xhtml; url=http://m.hua.com/flower/">


    <link rel="icon" href="http://www.hua.com/favicon.ico" mce_href="/favicon.ico" type="image/x-icon">
    @endsection
    
    @section('css')
    <link type="text/css" rel="stylesheet" href="/h/css/common.css">
    <link type="text/css" rel="stylesheet" href="/h/css/public.css">
    <link type="text/css" rel="stylesheet" href="/h/css/mbar.css">
    <link type="text/css" rel="stylesheet" href="/h/css/style.css" />
    <link rel="stylesheet" href="/h/css/layer.css" id="layuicss-skinlayercss"></head>
    
    <style>
        .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
            margin-right: -15px;
        }
        .com-cont img{
            display:none;
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
    
<!-- 导航 -->
@section('nav')
<nav class="common">
    <div class="container">
        <div class="categorys dropdown">
            <h3 class="categorys-title" data-hover="dropdown" data-delay="0" aria-expanded="false">
                <a href=""><span class="pull-right glyphicon glyphicon-menu-down"></span>全部商品导购</a>
            </h3>
            <div class="dropdown-menu dropdown-cate">
                
                <div>
                    <div class="leftNav" style="color:red;">
                    <ul>    
                        @foreach($res as $k=>$v)  
                        <li>
                            <div class="fj" >
                                <span class="fl"><a href="/home/flower" style="color: rgb(255, 106, 0);font-weight: bold;Letter-spacing: 25px;">{{ $v['name']}}</a></span>
                            </div>
                            <div class="zj" style="display: none;">
                                <div class="zj_l">
                                    @foreach($v['sub'] as $kk=>$vv)
                                    <div class="zj_l_c"> 
                                        <h2>{{ $vv['name']}}</h2>
                                            @foreach($vv['sub'] as $kkk=>$vvv)
                                            <a href="/home/type?id={{ $vvv['id'] }}">{{ $vvv['name']}}</a>|
                                            @endforeach
                                    </div>
                                   @endforeach  
                                </div>
                                <div class="zj_r">
                                    <a href="javascript:void(0)"><img src="/h/images/9012116.jpg_220x240.jpg" width="236" height="200"></a>
                                    <a href="javascript:void(0)"><img src="/h/images/5303069.jpg_220x240.jpg" width="236" height="200"></a>
                                </div>
                            </div>
                        </li>
                        @endforeach                       
                    </ul>  
                    <div class="dropdown-cate" style="height:391px;">
                    @foreach($res as $k=>$v)
                    @foreach($v['sub'] as $kk=>$vv)
                    <h4>{{ $vv['name']}}</h4>
                    <ul class="cate-list list-inline">
                        @foreach($vv['sub'] as $kkk=>$vvv)
                        <li><a href="/home/type?id={{ $vvv['id'] }}" target="_blank">{{ $vvv['name']}}</a></li>
                        @endforeach
                        
                    </ul>
                    @endforeach
                    @endforeach 
               
            </div>                 
                

            </div>
            </div>
        </div>
    </div>
    <ul class="nav">
        <li><a href="/home" target="_blank">首页</a></li>
            @foreach($res as $k => $v)
            <li><a href="/home/flower?id={{ $v['id'] }}" target="_blank">{{ $v['name'] }}</a></li>
            @foreach($v['sub'] as $kk=>$vv)
            <li><a href="/home/flower?id={{ $v['id'] }}" target="_blank">{{ $vv['name'] }}</a></li>
            @endforeach
            @endforeach
            <li><a href="/home/artical" target="_blank">花语大全</a></li>
            <li><a href="/home/help" target="_blank">关于我们</a></li>
    </ul>
</nav>
@endsection
<!-- 导航 End -->






<!-- 内容 -->
@section('content')
<div class="container">
    <div class="wrapper">
        <div class="pull-left w970 l230">
            <!-- 大图轮播 -->
            <div id="flowerCarousel" class="carousel slide carousel-fade">
                <ol class="carousel-indicators">
                    <li data-target="#flowerCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#flowerCarousel" data-slide-to="1"></li>
                    <li data-target="#flowerCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <a href="javascript:void(0)" target="_bank"><img src="/h/images/xianhua01_20161129.jpg" alt="给你我的温柔"></a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)" target="_bank"><img src="/h/images/xianhua02.jpg" alt="给你幸福"></a>
                    </div>
                    <div class="item active">
                        <a href="javascript:void(0)" target="_bank"><img src="/h/images/xianhua03_20161111.jpg" alt="情有独钟"></a>
                    </div>
                </div>
                <a class="left carousel-control" href="http://www.hua.com/flower/#flowerCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">上一页</span>
                </a>
                <a class="right carousel-control" href="http://www.hua.com/flower/#flowerCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">下一页</span>
                </a>
            </div>
            <!-- 大图轮播 End -->
            <!-- 筛选 -->
                <div class="filterbar">
                    <ul class="filter-items list-inline">
                        <li class="active"><a href="javascript:void(0)">综合</a></li>
                        <li class=""><a href="javascript:void(0)">销量<span class="glyphicon glyphicon-triangle-bottom"></span></a></li>
                            <li class=""><a href="javascript:void(0)">价格<span class="glyphicon glyphicon-triangle-bottom"></span></a></li>
                        <li class=""><a href="javascript:void(0)">最新<span class="glyphicon glyphicon-triangle-bottom"></span></a></li>
                    </ul>
                    <ul class="pager">
                        <li class="total-page"><strong class="text-primary">{{ $page }}</strong>/{{ $max }}</li>
                            <li class="disabled"><a href="javascript:void(0)"><span class="glyphicon glyphicon-menu-left"></span></a></li>
                                                    <li><a href="javascript:void(0)"><span class="glyphicon glyphicon-menu-right"></span></a></li>
                    </ul>
                </div>
            <!-- 筛选 End -->
            <!-- 商品列    表  -->
                <div class="grid-wrapper">
                @section('content1')
            
                @show
                
                    
            
                </div>
            <!-- 商品列表 End -->
            <!-- 分页 -->
                        <div class="page-wrapper">

                            <p class="total-page">{{ $page }}-{{ $max }} / 共{{ $sum }}件商品</p>
                            <ul class="pagination">                     
                                {!! $data-> appends($request)->render() !!}
                                                                    
                            </ul>
                        </div>
            <!-- 分页 End -->
        </div>
        <div class="pull-left w210 r970">
            <!-- 分类 -->
            <div class="navigation">
                <div class="item">
                    <div class="title">
                        <span class="ico ico-effect"></span>
                        <h4>用途</h4>
                    </div>
                    <ul class="item-list list-inline">
                        @foreach($res[0]['sub'][0]['sub'] as $k => $v)
                        <li><a href="/home/type?id={{ $v['id'] }}">{{ $v['name'] }}</a></li>                     
                        @endforeach   
                    </ul>
                </div>
                <div class="item">
                    <div class="title">
                        <span class="ico ico-texture"></span>
                        <h4>花材</h4>
                    </div>
                    <ul class="item-list list-inline">
                        @foreach($res[0]['sub'][1]['sub'] as $k => $v)
                        <li><a href="/home/type?id={{ $v['id'] }}">{{ $v['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="item">
                    <div class="title">
                        <span class="ico ico-color"></span>
                        <h4>颜色</h4>
                    </div>
                    <ul class="item-list list-inline">
                        <li><a href="/home/color?id=1"><span class="c-red"></span>红色</a></li>
                        <li><a href="/home/color?id=2"><span class="c-pink"></span>粉色</a></li>
                        <li><a href="/home/color?id=3"><span class="c-champagne"></span>香槟</a></li>
                        <li><a href="/home/color?id=4"><span class="c-yellow"></span>黄色</a></li>
                        <li><a href="/home/color?id=5"><span class="c-white"></span>白色</a></li>
                        <li><a href="/home/color?id=6"><span class="c-purple"></span>紫色</a></li>
                        <li><a href="/home/color?id=7"><span class="c-blue"></span>蓝色</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="title">
                        <span class="ico ico-sort"></span>
                        <h4>类别</h4>
                    </div>
                    <ul class="item-list list-inline">
                        @foreach($res[0]['sub'][2]['sub'] as $k => $v)
                        <li><a href="/home/type?id={{ $v['id'] }}">{{ $v['name'] }}</a></li>
                        @endforeach                       
                    </ul>
                </div>
                <div class="item">
                    <div class="title">
                        <span class="ico ico-price"></span>
                        <h4>价格</h4>
                    </div>
                    <ul class="item-list list-inline">
                        @section('pricerea')
                        @show                        
                    </ul>
                </div>

                <div class="item last-child">
                    <div class="title">
                        <span class="ico ico-num"></span>
                        <h4>枝数</h4>
                    </div>
                    <ul class="item-list list-special list-inline">
                        @section('num')
                        @show                        
                    </ul>
                </div>
            </div>
            <!-- 分类 End -->
            <!-- 热销推荐 -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">热销鲜花推荐</h3>
                </div>
                <div class="panel-body">
            @section('sid')
            @show 
            <!-- <div class="side-item">
                <div class="img-box">
                    <a href="http://www.hua.com/product/9010966.html" target="_blank"><img src="/h/images/9010966.jpg_220x240.jpg" width="180" height="196" alt="一往情深"></a>
                </div>
                <div class="info-cont">
                    <div class="title">
                        <a href="http://www.hua.com/product/9010966.html" class="product-title">
                            鲜花/一往情深-精品玫瑰礼盒:19枝红玫瑰，勿忘我适量
                        </a>
                    </div>
                    <div class="price">
                        <span class="price-sign">¥</span>
                        <span class="price-num">239</span>
                    </div>
                </div>
            </div> -->
        

                </div>
            </div>
            <!-- 热销推荐 End -->
            <!-- 最新鲜花订单评价 -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">最新鲜花订单评价</h3>
                </div>
                <div class="panel-body">
                @foreach(App\Http\Controllers\home\HomeController::estimate() as $v)
                <div class="side-com">
                    <div class="img-box">
                        <a href="/home/shop/{{ $v['gid'] }}" target="_blank">
                            <img src="/h/images/9012055.jpg_80x87.jpg">
                        </a>
                    </div>
                    <div class="com-cont">
                        <h5>会员号：@if($v['status'] == 1) 匿名 @else {{ $v['username'] }} @endif</h5>
                        <a href="/home/shop/{{ $v['gid'] }}" target="_blank">{!! $v['con'] !!}</a>
                    </div>
                </div>
                @endforeach

                </div>
            </div>
            <!-- 最新鲜花订单评价 End -->
        </div>
    </div>
    <!-- 鲜花常识&送花礼仪 -->
    <div class="panel panel-default knowledge">
        <div class="panel-heading">
            <h3 class="panel-title">鲜花常识&amp;送花礼仪</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li><a href="http://www.hua.com/huayu/10973.html" target="_blank">为什么要选择鲜花速递？</a> </li>
                <li><a href="http://www.hua.com/huayu/10976.html" target="_blank">选择鲜花速递需要注意什么？</a></li>
                <li><a href="http://www.hua.com/huayu/20051115103610.htm" target="_blank">送花支数代表的含义</a> </li>
                <li><a href="http://www.hua.com/huayu/20051115103923.htm" target="_blank">各种花代表的不同含义</a> </li>
                <li><a href="http://www.hua.com/huayu/20051116172128.htm" target="_blank">玫瑰概述及花语</a> </li>
            </ul>
            <ul>
                <li><a href="http://www.hua.com/huayu/20051115105306.htm" target="_blank">送花的常识和技巧</a> </li>
                <li><a href="http://www.hua.com/huayu/20051116174222.htm" target="_blank">经典送花祝福语</a> </li>
                <li><a href="http://www.hua.com/huayu/20050612082846.htm" target="_blank">用鲜花表达情感-谈送花礼仪</a></li>
                <li><a href="http://www.hua.com/huayu/20050611130752.htm" target="_blank">不同场合送什么花？</a> </li>
                <li><a href="http://www.hua.com/huayu/20050611130659.htm" target="_blank"> 鲜花与星座</a> </li>
            </ul>
            <ul>
                <li><a href="http://www.hua.com/huayu/20050422170012.htm" target="_blank">如何让鲜花保鲜</a> </li>
                <li><a href="http://www.hua.com/huayu/20050611130941.htm" target="_blank">鲜花与节日</a> </li>
                <li><a href="http://www.hua.com/huayu/20050611131024.htm" target="_blank"> 鲜花与生日</a></li>
                <li><a href="http://www.hua.com/huayu/20050612080530.htm" target="_blank">婚礼用鲜花大全</a> </li>
                <li><a href="http://www.hua.com/huayu/20050405004253.htm" target="_blank">女孩都喜欢别人送鲜花吗？</a> </li>
            </ul>
        </div>
    </div>
    <!-- 鲜花常识&送花礼仪 End -->
</div>
@endsection
<!-- 内容 End -->

    <!--底部-->
    <!-- 尾部导航 -->
    
    <!-- 尾部导航 End -->
    <!-- 尾部帮助 -->
    
    <!-- 尾部帮助 End -->
    <!-- 通用尾部 -->
    
    <!-- 通用尾部 End -->
    <!-- 弹出窗口-->
    
    
    


    <!-- 弹出窗口end-->
    <!-- 友情链接 -->
    
    <!-- 友情链接 End -->
    @section('js1')
        <script type="text/javascript" src="/h/js/common.js"></script>
    
    
    <script>
        //关注js
        $('#loginModal').modal({ backdrop: 'static', keyboard: false, show: false });
        $('#loginModal').on('shown.bs.modal', function () {
            var $this = $(this);
            var $modal_dialog = $this.find('.modal-dialog');
            $this.css('display', 'block');
            $modal_dialog.css({ 'margin-top': Math.max(0, ($(window).height() - $modal_dialog.height()) / 2) });
        });
        $('#loginModal').on('hidden.bs.modal', function () {
            $("#attPage").attr("src", "");
        });
        //关注商品
        function DoGuanZhu(pp) {
            $("#attNotice").html("关注商品");
            $('#loginModal').modal('show');
            $("#attPage").attr('src', '/shopping/winguanzhu?pp=' + pp)
        }
        //关注end
    </script>



        <script type="text/javascript" src="/h/js/statesandright.js"></script>
    <script src="/h/js/layer.js"></script>
    <script type="text/javascript">
        function reqUrlParam(paras) {
            var url = location.href;
            var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
            var paraObj = {}
            for (i = 0; j = paraString[i]; i++) {
                paraObj[j.substring(0, j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=") + 1, j.length);
            }
            var returnValue = paraObj[paras.toLowerCase()];
            if (typeof (returnValue) == "undefined") {
                return "";
            } else {
                return returnValue;
            }
        }
        function setCurUrlClass() {
            // css : class = "color_tj"
            var pathname1 = window.location.pathname;
            $("a[href='" + pathname1 + "'").addClass("color_tj");
        }
        if ($("#pjCount").length > 0) {
            $.get("/productpj/GetPJCount", function (data) {
                $("#pjCount").text(data);
            });
        }
        $(function () {
            var rmd = Math.random();
            $.get("/Home/UserDjUpgrade?rmd=" + rmd, null, function (data) {
                if (data == "1") {
                    layer.open({
                        title: '温馨提示'
                     , content: '恭喜您已经升级为VIP会员！'
                       , area: ['500px', '150px']

                    });
                }
            }, "json");
        });
    </script>
@endsection
