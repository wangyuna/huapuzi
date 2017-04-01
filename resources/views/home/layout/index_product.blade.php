@extends('home.layout.index') 
@section('music') 
@endsection  
    @section('js')
    <script charset="utf-8" src="/h/js/v.js"></script>
    <script src="/h/js/hm.js"></script>
    <script type="text/javascript" src="/h/images/CheckAgent"></script>
    <meta name="mobile-agent" content="format=xhtml;url=http://m.hua.com/product/9012161.html">
    <script src="/h/js/share.js"></script>
    @endsection
    
    @section('css')
    <link rel="icon" href="http://www.hua.com/favicon.ico" mce_href="/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="/h/css/common.css">
    <link type="text/css" rel="stylesheet" href="/h/css/public.css">
    <link type="text/css" rel="stylesheet" href="/h/css/mbar.css">
    
    <style>
        #did{
          width:450px;
          height:450px;
          overflow:hidden;
          /*position:absolute;*/
          display:none;
        }
        #d{
          width:200px;
          height:200px;
          background:#ccc;
          opacity:0.5;
          position:absolute;
          top:100px;
          display:none;
        } 
        .bd img{
            height:100px;
        }
        .tabs{
            margin-left:0;
        }
    </style>
    <link rel="stylesheet" href="/h/css/layer.css" id="layuicss-skinlayercss">
    <link rel="stylesheet" href="/h/css/share_style0_24.css">
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
    <div class="breadcrumbs">
        <a href="/home"><b>首页</b></a> &gt;
            <a href="/home/flower?id={{ $type2[0]['id'] }}">{{ $type2[0]['name'] }}</a>          &gt;
            {{ $type1[0]['name'] }}       &gt;
        <span class="text-primary"><a href="/home/type?id={{ $type[0]['id'] }}">{{ $type[0]['name'] }}</a></span>
    </div>
    <!-- 商品 -->
    <div class="product-wrapper">
        <div class="product-l">
            <!-- 商品图片 -->
            <div class="pro-preview">
                <!-- 大图 -->
                    <div class="pro-bigimage"><img src="{{ trim($data[0]['pic1'],'.') }}" name="1" alt="点击查看下一张" style="display: inline;width:450px;height:450px;">
                    <div id="d"></div>
                    </div>

                <!-- 大图 End -->
                <!-- 小图 -->
                    <div class="pro-thumb">
                        <!-- <img src="/h/images/9012161.jpg_80x87.jpg" name="0||http://img01.hua.com/uploadpic/newpic/9012161.jpg" alt="爱的诺言" class=""> -->
                                <img src="{{ trim($data[0]['pic1'],'.') }}" name="" class="current">
                                <img src="{{ trim($data[0]['pic2'],'.') }}" name="">
                                <img src="{{ trim($data[0]['pic3'],'.') }}" name="">

                    </div>
                    
                <!-- 小图 End -->
                <!-- 箭头 -->
                            <!-- <div class="pro-btn">
                                <a class="prev" href="javascript:getNum('prev')" title="上一张"></a>
                                <a class="next" href="javascript:getNum('next')" title="下一张"></a>
                            </div> -->
                <!-- 箭头 End-->
            </div>
            <!-- 商品图片 End -->
        </div>
        <div class="product-r">
            <div id="did">
                <img src="{{ trim($data[0]['pic1'],'.') }}" alt="">                
            </div>
            <div class="title">
                <h3 class="product-title">
                @section('title')
                @show
                </h3>
                <p class="product-subtitle">新品特价</p>
            </div>
            <div class="attribute">
                <dl>
                    <dt>类 别：</dt>
                    <dd>鲜花 编 号：9012161</dd>
                </dl>
                <dl>
                    <dt>材 料：</dt>
                    <dd>{{ $data[0]['material'] }}</dd>
                </dl>
                <dl>
                    <dt>包 装：</dt>
                    <dd>内层白底黑边丽染纸，外层深灰色雾面纸，白咖罗纹带</dd>
                </dl>
                <dl>
                    <dt>花 语：</dt>
                    <dd>一生为你心动回旋，真爱永不止息！</dd>
                </dl>
                    <dl>
                        <dt>附 送：</dt>
                        <dd>免费附送精美贺卡，代写您的祝福。(您下单时可填写留言栏)</dd>
                    </dl>
                <dl>
                    <dt>配 送：</dt>
                    <dd>
                        全国
（可配送至全国1000多城市，<span class="color_hong">市区免配送费</span>）                    </dd>
                </dl>
                <dl id="tips" style="">
                    <dt>小贴士：</dt>
                    <dd>2月9日 - 15日配送,请选择右边的情人节预订价 ↓↓↓</dd>
                </dl>
            </div>
            <div class="price-wrap" id="ajax_pricebox" style="border:none;">



        <input type="hidden" id="Prod_IsShelf" value="yes">
        <input type="hidden" id="sell_price" value="198">
        <input type="hidden" id="jr_sell_price" value="356">
        <input type="hidden" id="jrType" value="valentine">
        <input type="hidden" id="defaultJrPrice" value="true">
        <input type="hidden" id="shuangjia" value="true">
        <input type="hidden" id="tipText" value="2月9日 - 15日配送,请选择右边的情人节预订价 ↓↓↓">
                <input type="hidden" id="wxapp_price" value="省4元">
                <input type="hidden" id="jr_wxapp_price" value="省7元">
            <input type="hidden" id="qrcode_path" value="http://www.hua.com/weixin/api/tempqrpic.aspx?pid=9012161&amp;userid=2057984&amp;type=1&amp;sj=2017-2-12&amp;sign=d252cf84c1f06589">
        <input type="hidden" id="Is_Attention" value="no">
            <div class="price" id="fjr" class="price active">
                <i class="ico ico-check"></i>
                <div class="price-original">市场价(非节日)：<em class="price-sign">¥</em><em class="price-num">{{ $data[0]['price1'] }}</em></div>
                    <div class="price-sell">花礼价(非节日)：<em class="price-sign">¥</em><em class="price-num">{{ $data[0]['price2'] }}</em></div>
            </div>
            
</div>
            <!--app微信专享价-->
            <div class="appzx" id="wxappzx" style="">
                <ul>
                    <li class="mu plft">
                        <font style="color:#737373">促销信息：</font>
                        <img src="/h/images/appzx_01.png" height="21" width="142" style="margin-top:-3px; margin-right:7px;">
                        <span id="wxapp_share_price" style="color: rgb(115, 115, 115);">省7元</span>
                    </li>
                    <li class="mu dropdown">
                        <a href="javascript:void(0)" data-hover="dropdown" data-delay="0" target="_blank">
                            <span class="ico ico-wxrwm"></span>去APP购买<img src="/h/images/xxjt.png" height="6" width="8" style="margin-left:8px;">
                        </a>
                        <div class="dropdown-menu dropdown-app">
                            <img src="/h/images/app_qrcode.jpg" height="120" width="120">
                            <p style="margin-top: 5px;margin-bottom: 0px; color:#737373;">新人专享100元大礼包</p>
                        </div>
                    </li>
                    <li class="mu dropdown">
                        <a href="javascript:void(0)" data-hover="dropdown" data-delay="0">
                            <span class="ico ico-wxrwm"></span>去微信购买<img src="/h/images/xxjt.png" height="6" width="8" style="margin-left:8px;">
                        </a>
                        <div class="dropdown-menu dropdown-weixin">
                            <img src="/h/images/tempqrpic.aspx" height="120" width="120" id="wx_qrcode"><p style="margin-top: 0px;margin-bottom: 0px; color:#737373;">
                                扫码关注<br>回复"礼物" 更多惊喜！
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--app微信专享价 End-->
            <form class="mws-form" action="/home/doshop" method="get" enctype="multipart/form-data">
            <form action="/home/goods/insert"  method="post">
            <input type="hidden" name="gid" value="{{ $data[0]['id'] }}">            
            <div class="btn-buy">
                
                <input type="image" src="/h/images/gouwuche.png">
                
                <a href="javascript:DoGuanZhu('9012161')" class="btn btn-link" id="Btn_GuanZhu"><span class="ico ico-heart"></span>关 注</a>
            </div>
            </form>
            <div class="share">
                分享：
                <div class="bdsharebuttonbox bdshare-button-style0-24" data-tag="share_1" data-bd-bind="1486879397847">
                    <a class="bds_mshare" data-cmd="mshare" title="分享到一键分享"></a><a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                    <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a class="bds_baidu" data-cmd="baidu"></a><a class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a class="bds_more" data-cmd="more">更多</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 商品 End -->
    <div class="wrapper">
        <div class="pull-left w970 l230">
            <!-- 商品详情 -->
            <ul id="Tabs" class="tabs stuckMenu" style="position: relative;">
                <li class="tabs-item active"><a href="#Details">商品详情</a></li>
                <li class="tabs-item"><a href="#Comment">用户评价</a></li>
                <li class="tabs-item"><a href="#Photo">订单实拍</a></li>
                <li class="tabs-item"><a href="#Story">送花故事</a></li>
                <li class="tabs-item"><a href="#Server">购物保障</a></li>
                <li class="btn-buy-s" style="position:relative;display:none;">
                    <div class="price" style="font-size:24px;">
                        <span class="price-sign" style="font-size:15px;">¥</span>
                        <span class="price-num" id="goods_detail_float_price">356</span>
                    </div>
                    <a style="font-size: 20px;width: 170px;height: 39px;margin-top: -9px;padding-left:35px;padding-right:10px" href="http://www.hua.com/shopping/AddtoCart?product_code=9012161&type=valentine" class="btn btn-primary btn-sm" id="goods_detail_float_addtocart">立即购买</a>
                    <span class="ico ico-cart-white" style="position: absolute;right:120px;top:7px;"></span>
                </li>
            </ul>
            <div id="Details" class="tabs-panel" style="margin-top: 0px;">
                {!! $data[0]['content'] !!}
            </div>
            <!-- 商品详情 End -->
            <!-- 用户评价 -->
            <ul class="tabs">
                <li><a href="#Details">商品详情</a></li>
                <li class="active"><a href="#Comment">用户评价</a></li>
                <li><a href="#Photo">订单实拍</a></li>
                <li><a href="#Story">送花故事</a></li>
                <li><a href="#Server">购物保障</a></li>
            </ul>

            <div id="Comment" class="tabs-panel">
                <div class="comment-bd">
                    <div align="center"><font color="#999999">本商品评价<font color="red" id="curTotal">15</font>条，最近所有商品评价<font color="red" id="TotalPL">192991</font>条</font><br><br></div>
                            @foreach($pinglun as $v)
                            <dl>
                                <dt>
                                    <a href="images/index_product.html"><img src="/h/images/9012161.jpg_80x87.jpg" height="63" width="58"></a>
                                    @if($v['status'] == 1) 匿名 @else {{ $v['username'] }} @endif
                                    <br>
                                    
                                </dt>
                                <dd>
                                    <div class="hd">
                                        <span class="pull-right">评价时间：{{ date('Y-m-d H:i:s',$v['time']) }} </span>
                                        整体评分：
                                            @for($i=1; $i <= $v['grade']; $i++)
                                            <img src="/h/images/review_star_fen.gif" align="absmiddle">
                                            @endfor
                                                                            </div>
                                    <div class="bd">
                                        <h6></h6>
                                        <p class="text-justify">评价内容：{!! $v['con'] !!}</p>
                                    </div>
                                </dd>
                            </dl>
                            @endforeach
                </div>
                <div class="comment-ft">
                        <span>
                            &nbsp;本商品评价<font color="red">15</font>条&nbsp;【<a target="_blank" href="http://www.hua.com/productpj/9012161.html" title="查看本商品所有评价" class="color_hong2">查看本商品全部评价</a>】
                        </span>
                    &nbsp;【<a href="http://www.hua.com/productpj/" target="_blank" title="查看所有商品评价" class="color_hong2">查看所有商品评价</a>】
                </div>
            </div>
            <!-- 用户评价 End -->
            <!-- 订单实拍 -->
            <ul class="tabs">
                <li><a href="#Details">商品详情</a></li>
                <li><a href="#Comment">用户评价</a></li>
                <li class="active"><a href="#Photo">订单实拍</a></li>
                <li><a href="#Story">送花故事</a></li>
                <li><a href="#Server">购物保障</a></li>
            </ul>

            <div id="Photo" class="tabs-panel">
                <p class="bg-warning">我们提供数十个城市的订单实拍展示，让您真是感知订单的制作效果。照片由各地连锁店配送前拍取，只求真实，未做修饰，图片在光线，角度，背景等方面的瑕疵在所难免。我们花艺师深知没有最好，只有更好，一直致力于用心制作更具气质的花礼。</p>
                <div class="photo-bd">
                    <iframe width="100%" name="iframeid" style="display:block;" id="iframeid" height="333" src="/h/images/saved_resource.html" border="0" marginheight="0" marginwidth="0" frameborder="0"></iframe>
                </div>
            </div>
            <!-- 订单实拍 End -->
            <!-- 送花故事 -->
            <ul class="tabs">
                <li><a href="#Details">商品详情</a></li>
                <li><a href="#Comment">用户评价</a></li>
                <li><a href="#Photo">订单实拍</a></li>
                <li class="active"><a href="#Story">送花故事</a></li>
                <li><a href="#Server">购物保障</a></li>
            </ul>
            <div id="Story" class="tabs-panel">
                <div class="story-bd">
                    <iframe width="100%" height="420" src="/h/images/9012161.html" border="0" marginheight="0" marginwidth="0" frameborder="0"></iframe>
                </div>
            </div>
            <!-- 送花故事 End -->
            <!-- 购物保障 -->
            <ul class="tabs">
                <li><a href="#Details">商品详情</a></li>
                <li><a href="#Comment">用户评价</a></li>
                <li><a href="#Photo">订单实拍</a></li>
                <li><a href="#Story">送花故事</a></li>
                <li class="active"><a href="#Server">购物保障</a></li>
            </ul>
            <div id="Server" class="tabs-panel">
                <ul class="tab-indicators">
                    <li class="active"><a href="#serverPane01"><span class="ico ico-server-go1"></span>十年品牌</a></li>
                    <li><a href="#serverPane02"><span class="ico ico-server-go2"></span>销量第一</a></li>
                    <li><a href="#serverPane03"><span class="ico ico-server-go3"></span>百万客户信赖</a></li>
                    <li><a href="#serverPane04"><span class="ico ico-server-go4"></span>订单实拍</a></li>
                    <li><a href="#serverPane05"><span class="ico ico-server-go5"></span>3小时配送</a></li>
                    <li><a href="#serverPane06"><span class="ico ico-server-go6"></span>200%退赔承诺</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="serverPane01">
                        <img src="/h/images/server_01.jpg" height="350" width="910">
                    </div>
                    <div class="tab-pane fade" id="serverPane02">
                        <img src="/h/images/server_02.jpg" height="350" width="910">
                    </div>
                    <div class="tab-pane fade" id="serverPane03">
                        <img src="/h/images/server_03.jpg" height="350" width="910">
                    </div>
                    <div class="tab-pane fade" id="serverPane04">
                        <img src="/h/images/server_04.jpg" height="350" width="910">
                    </div>
                    <div class="tab-pane fade" id="serverPane05">
                        <img src="/h/images/server_05.jpg" height="350" width="910">
                    </div>
                    <div class="tab-pane fade" id="serverPane06">
                        <img src="/h/images/server_06.jpg" height="350" width="910">
                    </div>
                </div>
            </div>
            <!-- 购物保障 End -->
        </div>
        <div class="pull-left w210 r970">
            <!-- 浏览记录 -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">浏览记录</h3>
                </div>
                <div class="panel-body" id="Latest_Record"><div class="side-item-s"><div class="img-box"><a href="http://www.hua.com/product/9012165.html"><img src="/h/images/9012165.jpg_80x87.jpg" height="56" width="50"></a></div><div class="info-cont"><a href="http://www.hua.com/product/9012165.html" class="product-title">爱在巴黎—精品玫瑰礼盒:红玫瑰39枝，搭配白色腊梅、尤加利、银叶菊少量</a><div class="price"><span class="price-sign">¥</span><span class="price-num">&nbsp; 378</span></div></div></div></div>
            </div>
            <!-- 浏览记录 End -->
            <!-- 热销推荐 -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">热销推荐</h3>
                </div>
                <div class="panel-body">
                    <!-- 侧边商品 -->
                @foreach($data1 as $k => $v)
                @if($v['sid'] == 2)
                <div class="side-item">
                    <div class="img-box">
                        <a href="/home/shop/{{ $v['id'] }}" target="_blank"><img src="{{ trim($v['pic1'],'.') }}" width="180" height="196" alt="给你幸福"></a>
                    </div>
                    <div class="info-cont">
                        <div class="title">
                            <a href="/home/shop/{{ $v['id'] }}" class="product-title">
                                {{ $v['title'] }}
                            </a>
                        </div>
                        <div class="price">
                            <span class="price-sign">¥</span>
                            <span class="price-num">{{ $v['price2'] }}</span>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                    <!-- 侧边商品 End -->
                </div>
            </div>
            <!-- 热销推荐 End -->
        </div>
    </div>
</div>
@endsection
<!-- 内容 End -->




    <!--底部-->
    <!-- 尾部导航 -->
    

    
    
    @section('js1')
    <script type="text/javascript" src="/h/js/jquery-1.8.3.min.js"></script>
    <script>
        
        $('.pro-thumb img').hover(
            function(){
                //获取移动的小图src
                var src = $(this).attr('src');
                var border = $(this).css('border','5px solid red');
                // alert(src);
                //设置中图的src
                $('.pro-bigimage img').attr('src',src);
            },  
            function(){
                
                var src = $(this).css('border','');
            
            }
        );

        /*$('.pro-bigimage').mouseover(function(){
            $('div').show();
        }).mouseout(function(){
            $('div').hide();
        }).mousemove(function(ent){
            // 获取鼠标的坐标点
            var x = ent.pageX;
            var y = ent.pageY;
            // 计算小图片坐标点
            var o = $(this).offset();
            var xx = x - o.left;
            var xy = y - o.top;
            // 计算大图坐标点
            var dx = xx * 3;
            var dy = xy * 3;
            // 设置div内容滚动的距离
            $('div').scrollTop(dy-150);
            $('div').scrollLeft(dx-150);
        })*/

        $('.pro-bigimage').mouseover(function(){
        //显示移动的div
        // alert(1);
        $('#d').show();
        //显示放大镜
        $('#did').show();
        var y= $(this).offset().top+30;
        var x= $(this).offset().left+600;
        //定位放大镜位置
        $('#did').css({'top':y+'px','left':x+'px'});
        

        //鼠标移动事件
        $(this).mousemove(function(ent){
            //设置放大镜图片
            $('#did img').attr('src',$(this).find('img').attr('src'));
            //鼠标相遇body 的偏移量
            var mx = ent.clientX-160;
            var my = ent.clientY-80;
           
            //中图相对于body的偏移量
            var y = $(this).position().top
            var x = $(this).position().left;
            //鼠标相对中图的偏移量
            var bx  =mx-x;
            var by  =my-y;
            //设置滚动
            $('#did').scrollTop(by*3-200).scrollLeft(bx*3-100);         
            //设置#d移动
            if(my<y+100){
                $('#d').css('top',y+'px');
            }else if(my>y+417-100){
                $('#d').css('top',y+217+'px');
            }else{
                $('#d').css('top',my-100+'px');
            }   
            if(mx<x+100){
                $('#d').css('left',x+'px');
            }else if(mx>x+600-100){
                $('#d').css('left',x+500+'px');
            }else{
                $('#d').css('left',mx-100+'px');
            }   
        });
        }).mouseout(function(){
            $('#did').hide();
            //隐藏移动的div
            $('#d').hide();
        });

        
    </script>
    
    <script type="text/javascript" src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/statesandright.js"></script>
    <script type="text/javascript" src="/h/js/stickUp.min.js"></script>
    <script language="javascript" type="text/javascript">
        $("#TotalPL").html('197770');
        $("#curTotal").html('84');
    </script>

    <script type="text/javascript">

        // 固定元素+导航
        jQuery(function ($) {
            $(document).ready(function () {
                $('#Tabs').stickUp({
                    parts: {
                        0: 'Details',
                        1: 'Comment',
                        2: 'Photo',
                        3: 'Story',
                        4: 'Server'
                    },
                    itemClass: 'tabs-item',
                    itemHover: 'active'
                });
            });
        });
        // 购物保障tab
        $('.tab-indicators a').hover(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })

        function request(paras) {
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

        $(function () {
            var priceURL, addToCartURL;
            var types = request("type").toLowerCase()
            priceURL = "/product/pricewx/?rmd="+Math.random();
            addToCartURL = "/shopping/AddtoCart?product_code=9012161";
            if (types.length > 1) {
                addToCartURL = "/shopping/AddtoCart?product_code=9012161&type=" + types;
            }
            $.getJSON("/Home/getLatestJson?pp=9012161&rmd=" + Math.random(), function (json) {
                var cartHtml = '';
                if (json.productsNum > 0) {
                    $.each(json.datas, function (index, data) {
                        cartHtml = cartHtml + '<div class="side-item-s"><div class="img-box"><a href="/product/' + data.productCode + '.html"><img src="http://img01.hua.com/uploadpic/newpic/' + data.productCode + '.jpg_80x87.jpg" height="56" width="50"></a></div><div class="info-cont"><a href="/product/' + data.productCode + '.html" class="product-title">' + data.productName + '</a><div class="price"><span class="price-sign">&yen;</span><span class="price-num">&nbsp; ' + data.productPrice + '</span></div></div></div>';
                    });
                }
                else { cartHtml = '<div class="side-item-s"><span>暂无浏览记录！</span></div>'; }
                $("#Latest_Record").html(cartHtml);
            });

            $.get(priceURL, { code: "9012161", type: types }, function (data) {
                $("#ajax_pricebox").html(data);
                var sell_price = $("#sell_price").val();
                var jr_sell_price = $("#jr_sell_price").val();
                var jrType = $("#jrType").val();
                var shuangjia = $("#shuangjia").val();
                var tipText = $("#tipText").val();
                var defaultJrPrice = $("#defaultJrPrice").val();

                var wxapp_price = $("#wxapp_price").val();
                var jr_wxapp_price = $("#jr_wxapp_price").val();
                var tipText = $("#tipText").val();
                //微信app专享是否显示
                if ($("#wxapp_price").length > 0 && $("#qrcode_path").length > 0) {
                    $("#wxappzx").show();
                    $("#wxapp_share_price").html("￥<strong>" + wxapp_price + "</strong>");
                    if (types.length > 0)
                    {
                        $("#wxapp_share_price").html("￥<strong>" + jr_wxapp_price + "</strong>");
                    }
                    $("#wx_qrcode").attr("src", $("#qrcode_path").val());
                }
                else {
                    $("#wxappzx").hide();
                }
                //微信app专享结束

                if (defaultJrPrice == "true") {
                    addToCartURL = "/shopping/AddtoCart?product_code=9012161&type=" + jrType;
                }

                if ($("#Prod_IsShelf").val() == "no") {
                    $("#Btn_AddToCart").attr("href", "javascript:void(0)");
                    $("#Btn_AddToCart").addClass("btn-noclick");
                    $("#Btn_AddToCart").removeClass("btn-primary");
                    $("#Btn_AddToCart").html("<span class=\"ico ico-cart-white\"></span>售罄/已下架");
                    $("#goods_detail_float_addtocart").attr("href", "javascript:void(0)");
                    $("#goods_detail_float_addtocart").html("售罄/已下架");
                } else {
                    $("#Btn_AddToCart").attr("href", addToCartURL);
                    $("#Btn_AddToCart").html("<span class=\"ico ico-cart-white\"></span>立即购买");
                    $("#goods_detail_float_addtocart").attr("href", addToCartURL);
                    $("#goods_detail_float_addtocart").html("立即购买");
                }
                if ($("#Is_Attention").val() == "yes") {
                    $("#Btn_GuanZhu").html("<span class=\"ico ico-heart\"></span>已关注");
                }

                if (shuangjia == "false" || types.length > 0) {
                    $("#ajax_pricebox").removeClass("price-wrap");
                    $("#ajax_pricebox").addClass("price");
                    if (types.length > 0) {
                        $("#goods_detail_float_price").html(jr_sell_price);
                    }
                    else {
                        $("#goods_detail_float_price").html(sell_price);
                    }
                }
                else {
                    $("#tips").show();
                    $("#tips dd").html(tipText);
                    $("#ajax_pricebox").removeClass("price");
                    $("#ajax_pricebox").addClass("price-wrap");
                    if (defaultJrPrice=="true") {
                        $("#wxapp_share_price").css("color", "#737373").html(jr_wxapp_price);
                        $("#goods_detail_float_price").html(jr_sell_price);
                        addToCartURL = "/shopping/AddtoCart?product_code=9012161&type=" + jrType;
                    }
                    else
                    {
                        $("#wxapp_share_price").css("color", "#737373").html(wxapp_price);
                        $("#goods_detail_float_price").html(sell_price);
                    }
                    var checkPrice = function (check) {
                        check.click(function () {
                            var indx = check.index(this);
                            check.removeClass('active');
                            $(this).addClass('active');
                            addToCartURL = "/shopping/AddtoCart?product_code=9012161";
                            if ($(this).attr("id") == "jr") {
                                $("#wxapp_share_price").css("color", "#737373").html(jr_wxapp_price);
                                $("#goods_detail_float_price").html(jr_sell_price);
                                addToCartURL = addToCartURL + "&type=" + jrType;
                            }
                            else {
                                $("#wxapp_share_price").css("color", "#737373").html(wxapp_price);
                                $("#goods_detail_float_price").html(sell_price);
                            }
                            $("#Btn_AddToCart").attr("href", addToCartURL);
                            $("#goods_detail_float_addtocart").attr("href", addToCartURL);
                            if ($("#Prod_IsShelf").val() == "no")
                            {
                                $("#Btn_AddToCart").attr("href", "javascript:void(0)");
                                $("#Btn_AddToCart").addClass("btn-noclick");
                                $("#Btn_AddToCart").removeClass("btn-primary");
                                $("#Btn_AddToCart").html("<span class=\"ico ico-cart-white\"></span>售罄/已下架");
                                $("#goods_detail_float_addtocart").attr("href", "javascript:void(0)");
                                $("#goods_detail_float_addtocart").html("售罄/已下架");
                            }
                        })
                    };
                    checkPrice($(".price-wrap > .price"));
                }

            });
        });

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


    

    @endsection
