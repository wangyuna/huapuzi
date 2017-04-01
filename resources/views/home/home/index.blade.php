@extends('home.layout.index')    

@section('css')
<style>
    .info p img{
        display:none;
    }
</style>
@endsection

@section('nav')
<!-- 导航 -->
<nav class="default">
    <div class="container">
        <div class="categorys">
            <h3 class="categorys-title">
                <a href="#" target="_blank">全部商品导购</a>
            </h3>
               <div class="dropdown-cate">
                <div>
                    <div class="leftNav" style="color:red;">
                    <ul>    
                        @foreach($res as $k=>$v)  
                        <li>
                            <div class="fj">
                                <span class="fl"><a href="/home/flower?id{{ $v['id'] }}" style="color: rgb(255, 106, 0);font-weight: bold;Letter-spacing: 25px;">{{ $v['name']}}</a></span>
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
                    <div class="dropdown-cate">
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
    <div style="float:left;width:900px">
        <ul class="nav" style="margin-left: 1px;">
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
        </div>
        </div>
        
    </div>
    
</nav>
@endsection
<!-- 导航 End -->
<!-- 大图轮翻 -->
<!-- 大图轮翻 -->
@section('lunbo')
<div id="fullCarousel" class="carousel slide carousel-fade">
    <ol class="carousel-indicators">
       
       @foreach($list3 as $k=>$v)
       @if($k==0)
        <li style="solid #ccc" data-target="#fullCarousel" data-slide-to="0" class="active"></li>
        @else
         <li style="solid #ccc" data-target="#fullCarousel" data-slide-to="{{$k}}" class=""></li>
       
        @endif
    @endforeach
       
    </ol>

    <div class="carousel-inner">
    @foreach($list3 as $k=>$v)
       @if($k==0)
       <div class="item active left">
      
                  <div class="fill" style="background-image:url(&#39;{{$v['img']}}&#39;);">
                <a href="javascript:void(0)" target="_blank"></a>
            </div>
        </div>
        @elseif($k==1)
        <div class="item next left">
      
                  <div class="fill" style="background-image:url(&#39;{{$v['img']}}&#39;);">
                <a href="javascript:void(0)" target="_blank"></a>
            </div>
        </div>
        @else
        <div class="item">
      
                  <div class="fill" style="background-image:url(&#39;{{$v['img']}}&#39;);">
                <a href="javascript:void(0)" target="_blank"></a>
            </div>
        </div>
        @endif
    @endforeach
        

    </div>
    <div class="control-wrapper">
        <a class="left carousel-control" href="http://www.hua.com/#fullCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="http://www.hua.com/#fullCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <div class="focus-wrapper">
        <div class="bd">
            <a href="javascript:void(0)" target="_blank"><img src="/h/images/rightbox_1_161215.jpg" height="140" width="210"></a>
            <a href="javascript:void(0)" target="_blank"><img src="/h/images/rightbox_2_161202.jpg" height="140" width="210"></a>
            <a class="last-child" href="javascript:void(0)" target="_blank"><img src="/h/images/rightbox_3_170212.jpg" height="140" width="210"></a>
            <!-- <a class="last-child" href="/product/1073094.html" target="_blank"><img src="http://img02.hua.com/tuijian/xianshi_3_161027.jpg" height="140" width="210"></a> -->
        </div>
    </div>
</div>
@endsection
<!-- 大图轮翻 End -->
<!-- 大图轮翻 End -->
<!-- 内容 -->
@section('content')
<div class="container">
    <!-- 服务 -->
    <div class="toper-server">
        <ul>
            <li>
                <a href="javascript:void(0)" target="_blank">
                    <span class="ico ico-server-o1"></span>
                    <h4>鲜花电商龙头</h4>
                    <p>销量领先，权威认证龙头企业</p>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" target="_blank">
                    <span class="ico ico-server-o2"></span>
                    <h4>11年品牌 真实口碑</h4>
                    <p>最近评价<font id="pjCount">193021</font>条</p>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" target="_blank">
                    <span class="ico ico-server-o3"></span>
                    <h4>鲜花实拍秀展示</h4>
                    <p>敢展现送前实拍的鲜花网</p>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" target="_blank">
                    <span class="ico ico-server-o4"></span>
                    <h4>3小时送花</h4>
                    <p>全国连锁，3小时送1000城市</p>
                </a>
            </li>
            <li class="last-child">
                <a href="javascript:void(0)" target="_blank">
                    <span class="ico ico-server-o5"></span>
                    <h4>200%退赔承诺</h4>
                    <p>可靠的售后保障</p>
                </a>
            </li>
        </ul>
    </div>
    <!-- 服务 End -->
    <!-- 限时推荐 -->
    <div class="time-limit">
        <div class="title">
            <span class="ico ico-clock "></span>
            限时推荐
        </div>
        <ul class="product-list">
            @foreach(App\Http\Controllers\home\HomeController::sid() as $v)
            <li><a href="/home/shop/{{ $v['id'] }}" target="_blank"><img src="{{ trim($v['pic1'],'.') }}" alt="" width="238" height="198"></a></li>
            @endforeach
        </ul>
        <div class="comic-choose">
            <a href="javascript:void(0)" target="_blank"><img src="/h/images/comic_choose_flowers.jpg" height="200" width="250" alt=""></a>
        </div>
    </div>
    <!-- 限时推荐 End -->
    <!-- 楼层01 -->
    <div class="floor f1">
        <div class="hd">
            <a class="more" href="/home/type?id=135" target="_blank">更多爱情鲜花 &gt;&gt;</a>
            <h3><a href="/home/type?id=135" target="_blank">爱情鲜花</a><span>送·让你怦然心动的人</span></h3>
        </div>
        <div class="bd">
            <div class="bd-l">
                <div class="banner-box">
                    <a href="javascript:void(0)" target="_blank"><img src="/h/images/banner_love.jpg" height="438" width="243"></a>
                </div>
                <a class="banner-link" href="/home/type?id=135" target="_blank">爱情鲜花专区 &gt;&gt;</a>
            </div>
            <ul class="floor-products">
                
                @foreach($hua1 as $v)    
                <li>
                    <a href="/home/shop/{{ $v['id'] }}" target="_blank">
                        <span class="img-box" href="/home/shop/{{ $v['id'] }}">
                            <img src="{{ trim($v['pic1'],'.') }}" height="240" width="220">
                        </span>
                        <span class="product-title"><div style="width: 200px;margin: 0 auto;overflow:hidden;height: 20px;">鲜花 · {{ $v['title'] }}</div></span>
                        <p class="price">
                            <span class="price-sign">¥</span>
                            <span class="price-num">{{ $v['price2'] }}</span>
                        </p>
                    </a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
    <!-- 楼层01 End -->
    <!-- 楼层02 -->
    <div class="floor f2">
        <div class="hd">
            <a class="more" href="/home/type?id=139" target="_blank">更多送长辈鲜花 &gt;&gt;</a>
            <h3><a href="/home/type?id=139" target="_blank">送长辈鲜花</a><span>赠·父母/恩师/长辈</span></h3>
        </div>
        <div class="bd">
            <div class="bd-l">
                <div class="banner-box">
                    <a href="#" target="_blank"><img src="/h/images/banner_elder.jpg" height="438" width="243"></a>
                </div>
                <a class="banner-link" href="/home/type?id=139" target="_blank">送长辈鲜花专区 &gt;&gt;</a>
            </div>
            <ul class="floor-products">
                @foreach($hua2 as $v)    
                <li>
                    <a href="/home/shop/{{ $v['id'] }}" target="_blank">
                        <span class="img-box" href="/home/shop/{{ $v['id'] }}">
                            <img src="{{ trim($v['pic1'],'.') }}" height="240" width="220">
                        </span>
                        <span class="product-title"><div style="width: 200px;margin: 0 auto;overflow:hidden;height: 20px;">鲜花 · {{ $v['title'] }}</div></span>
                        <p class="price">
                            <span class="price-sign">¥</span>
                            <span class="price-num">{{ $v['price2'] }}</span>
                        </p>
                    </a>
                </li>
                @endforeach
                    
    

            </ul>
        </div>
    </div>
    <!-- 楼层02 End -->
    <!-- 楼层03 -->
    <div class="floor f3">
        <div class="hd">
            <a class="more" href="/home/type?id=143" target="_blank">更多婚庆鲜花 &gt;&gt;</a>
            <h3><a href="/home/type?id=143" target="_blank">婚庆鲜花</a><span>许·她一生承诺</span></h3>
        </div>
        <div class="bd">
            <div class="bd-l">
                <div class="banner-box">
                    <a href="/home/type?id=143" target="_blank"><img src="/h/images/banner_song.jpg" height="438" width="243"></a>
                </div>
                <a class="banner-link" href="/home/type?id=143" target="_blank">婚庆鲜花专区 &gt;&gt;</a>
            </div>
            <ul class="floor-products">
                @foreach($hua3 as $v)    
                <li>
                    <a href="/home/shop/{{ $v['id'] }}" target="_blank">
                        <span class="img-box" href="/home/shop/{{ $v['id'] }}">
                            <img src="{{ trim($v['pic1'],'.') }}" height="240" width="220">
                        </span>
                        <span class="product-title"><div style="width: 200px;margin: 0 auto;overflow:hidden;height: 20px;">鲜花 · {{ $v['title'] }}</div></span>
                        <p class="price">
                            <span class="price-sign">¥</span>
                            <span class="price-num">{{ $v['price2'] }}</span>
                        </p>
                    </a>
                </li>
                @endforeach
                    
    

            </ul>
        </div>
    </div>
    <!-- 楼层03 End -->
    <!-- 楼层04 -->
    <!-- <div class="floor f4">
        <div class="hd">
            <a class="more" href="#" target="_blank">更多蛋糕 &gt;&gt;</a>
            <h3><a href="#" target="_blank">蛋糕</a><span>一起品味甜蜜时光</span></h3>
            <div class="dropdown">
                <a href="javascript:void(0)" data-hover="dropdown" data-delay="0" class="btn btn-default btn-sm">当前城市：<span class="text-primary">请选择</span> <span class="glyphicon glyphicon-triangle-bottom"></span><span class="glyphicon glyphicon-triangle-top"></span> <i>【请选择蛋糕配送城市】</i></a>
                <div class="dropdown-menu">
                    <div class="delivery-city-cont">
                        <h3>请选择或输入蛋糕配送城市</h3>
                        <h4>热门城市</h4>
                        <ul>
                            <li><a href="#" target="_blank">北京</a></li>
                            <li><a href="#" target="_blank">上海</a></li>
                            <li><a href="#" target="_blank">广州</a></li>
                            <li><a href="#" target="_blank">深圳</a></li>
                            <li><a href="#" target="_blank">天津</a></li>
                            <li><a href="#" target="_blank">成都</a></li>
                            <li><a href="#" target="_blank">重庆</a></li>
                            <li><a href="#" target="_blank">西安</a></li>
                            <li><a href="#" target="_blank">苏州</a></li>
                            <li><a href="#" target="_blank">杭州</a></li>
                            <li><a href="#" target="_blank">南京</a></li>
                            <li><a href="#" target="_blank">合肥</a></li>
                            <li><a href="#" target="_blank">武汉</a></li>
                            <li><a href="#" target="_blank">郑州</a></li>
                            <li><a href="#" target="_blank">长沙</a></li>
                            <li><a href="#" target="_blank">南昌</a></li>
                            <li><a href="#" target="_blank">哈尔滨</a></li>
                            <li><a href="#" target="_blank">沈阳</a></li>
                            <li><a href="#" target="_blank">长春</a></li>
                            <li><a href="#" target="_blank">大连</a></li>
                            <li><a href="#" target="_blank">青岛</a></li>
                            <li><a href="#" target="_blank">济南</a></li>
                            <li><a href="#" target="_blank">福州</a></li>
                            <li><a href="#" target="_blank">厦门</a></li>
                            <li><a href="#" target="_blank">昆明</a></li>
                            <li><a href="#" target="_blank">贵阳</a></li>
                            <li><a href="#" target="_blank">南宁</a></li>
                            <li><a href="#" target="_blank">石家庄</a></li>
                            <li><a href="#" target="_blank">海口</a></li>
                            <li><a href="#" target="_blank">太原</a></li>
                            <li><a href="#" target="_blank">兰州</a></li>
                            <li><a href="#" target="_blank">乌鲁木齐</a></li>
                            <li><a href="#" target="_blank">唐山</a></li>
                            <li><a href="#" target="_blank">呼和浩特</a></li>
                            <li><a href="#" target="_blank">东莞</a></li>
                            <li><a href="#" target="_blank">佛山</a></li>
                            <li><a href="#" target="_blank">宁波</a></li>
                            <li><a href="#" target="_blank">无锡</a></li>
                            <li><a href="#" target="_blank">温州</a></li>
                            <li><a href="#" target="_blank">常州</a></li>
                        </ul>
                        <div class="form-box">
                            <input class="form-control" type="text" placeholder="请输入配送城市">
                            <a class="btn btn-link" href="javascript:void(0)"><span class="ico ico-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bd">
            <div class="bd-l">
                <div class="banner-box">
                    <a href="#"><img src="/h/images/banner_cake.jpg" height="320" width="242"></a>
                </div>
                <a class="banner-link" href="#">蛋糕专区 &gt;&gt;</a>
                <h4 style="margin:20px 12px 10px;">按城市选购蛋糕</h4>
                <ul class="item-list list-inline">
                    <li><a href="#" target="_blank">北京</a></li>
                    <li><a href="#" target="_blank">上海</a></li>
                    <li><a href="#" target="_blank">深圳</a></li>
                    <li><a href="#" target="_blank">广州</a></li>
                    <li><a href="#" target="_blank">天津</a></li>
                    <li><a href="#" target="_blank">重庆</a></li>
                    <li><a href="#" target="_blank">成都</a></li>
                    <li><a href="#" target="_blank">沈阳</a></li>
                    <li><a href="#" target="_blank">武汉</a></li>
                    <li><a href="#" target="_blank">西安</a></li>
                    <li><a href="#" target="_blank">杭州</a></li>
                    <li><a href="#" target="_blank">南京</a></li>
                    <li><a href="#" target="_blank">苏州</a></li>
                    <li><a href="#" target="_blank">更多</a></li>
                </ul>
                <div class="line" style="margin:15px 12px;"></div>
                <h4 style="margin:20px 12px 10px;">蛋糕品牌</h4>
                <ul class="item-list list-inline">
                    <li><a href="index_product.html" target="_blank">元祖蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">好利来蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">幸福西饼蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">诺心蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">窝夫小子蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">Mcake蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">可颂坊蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">米卡米卡蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">Vcake蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">一品轩蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">卡拉多蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">Oneonecake蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">美滋每客蛋糕</a></li>
                    <li><a href="index_product.html" target="_blank">贝思客蛋糕</a></li>
                    <li><a href="index_product.htmlx" target="_blank">全国蛋糕</a></li>
                </ul>
            </div>
            <ul class="floor-products">
    
                    <li>
        <a href="http://www.hua.com/product/5302016.html" target="_blank">
            <span class="img-box" href="/product/5302016.html">
                <img src="/h/images/5302016.jpg_220x240.jpg" height="240" width="220">
            </span>
            <span class="product-title">元祖蛋糕 · 田园晓美(8寸)</span>
            <p class="price">
                <span class="price-sign">¥</span>
                <span class="price-num">218</span>
            </p>
        </a>
    </li>
    <li>
        <a href="index_product.html" target="_blank">
            <span class="img-box" href="/product/5303069.html">
                <img src="/h/images/5303069.jpg_220x240.jpg" height="240" width="220">
            </span>
            <span class="product-title">元祖蛋糕 · 玫瑰圆舞曲(10寸)</span>
            <p class="price">
                <span class="price-sign">¥</span>
                <span class="price-num">288</span>
            </p>
        </a>
    </li>
    <li>
        <a href="index_product.html" target="_blank">
            <span class="img-box" href="/product/5201103.html">
                <img src="/h/images/5201103.jpg_220x240.jpg" height="240" width="220">
            </span>
            <span class="product-title">好利来蛋糕 · 臻爱礼盒(6寸)</span>
            <p class="price">
                <span class="price-sign">¥</span>
                <span class="price-num">239</span>
            </p>
        </a>
    </li>
    <li>
        <a href="index_product.html" target="_blank">
            <span class="img-box" href="/product/5602016.html">
                <img src="/h/images/5602016.jpg_220x240.jpg" height="240" width="220">
            </span>
            <span class="product-title">幸福西饼蛋糕 · 四重奏蛋糕(约2磅)</span>
            <p class="price">
                <span class="price-sign">¥</span>
                <span class="price-num">198</span>
            </p>
        </a>
    </li>
    <li>
        <a href="index_product.html" target="_blank">
            <span class="img-box" href="/product/5901052.html">
                <img src="/h/images/5901052.jpg_220x240.jpg" height="240" width="220">
            </span>
            <span class="product-title">诺心蛋糕 · 你好米菲蛋糕 hallo miffy（1磅）</span>
            <p class="price">
                <span class="price-sign">¥</span>
                <span class="price-num">218</span>
            </p>
        </a>
    </li>
    <li>
        <a href="index_product.html" target="_blank">
            <span class="img-box" href="/product/5142026.html">
                <img src="/h/images/5142026.jpg_220x240.jpg" height="240" width="220">
            </span>
            <span class="product-title">Mcake蛋糕 · 鲜莓印雪</span>
            <p class="price">
                <span class="price-sign">¥</span>
                <span class="price-num">298</span>
            </p>
        </a>
    </li>
    <li>
        <a href="index_product.html" target="_blank">
            <span class="img-box" href="/product/5112024.html">
                <img src="/h/images/5112024.jpg_220x240.jpg" height="240" width="220">
            </span>
            <span class="product-title">Vcake蛋糕 · 在一起（8寸）</span>
            <p class="price">
                <span class="price-sign">¥</span>
                <span class="price-num">209</span>
            </p>
        </a>
    </li>
    <li>
        <a href="index_product.html" target="_blank">
            <span class="img-box" href="/product/5131001.html">
                <img src="/h/images/5131001.jpg_220x240.jpg" height="240" width="220">
            </span>
            <span class="product-title">贝思客蛋糕 · PAPI PAPI熊蛋糕（1.2磅）</span>
            <p class="price">
                <span class="price-sign">¥</span>
                <span class="price-num">188</span>
            </p>
        </a>
    </li>
    
            </ul>
        </div>
    </div> -->
    <!-- 楼层04 End -->
    <!-- 楼层05 -->
    
    <!-- 楼层05 End -->
    <!-- 面板 -->
    <div class="panel-wrapper">
        <div class="gray-panel news1">
            <div class="hd">
                <a href="#" target="_blank"><span class="ico ico-plus"></span></a>
                <h4>感动瞬间</h4>
            </div>
            <div class="bd">
                <ul>

                        <li><a href="#" target="_blank" title="希望你永远自由自在">希望你永远自由自在</a></li>
                        <li><a href="#" target="_blank" title="爱你如初">爱你如初</a></li>
                        <li><a href="#" target="_blank" title="我们一直在你身边">我们一直在你身边</a></li>
                        <li><a href="#" target="_blank" title="《38℃》">《38℃》</a></li>
                        <li><a href="#" target="_blank" title="在最好的年华遇见你">在最好的年华遇见你</a></li>
                        <li><a href="#" target="_blank" title="我永远的小公举">我永远的小公举</a></li>
                </ul>
            </div>
        </div>
        <div class="gray-panel comments">
            <div class="hd">
                <a href="#" target="_blank"><span class="ico ico-plus"></span></a>
                <h4>最新评价</h4>
            </div>
            <div class="bd">
                @foreach(App\Http\Controllers\home\HomeController::estimate() as $v)
                <dl class="comment-item dl-horizontal">
                    <dt>
                        <a href="#" target="_blank">
                            <img src="/h/images/9010966.jpg_80x87.jpg" height="38" width="37" class="img-thumbnail">
                            {{ $v['username'] }}
                        </a>
                    </dt>
                    <dd>
                        <div class="info">
                            <div class="rating">@for($i=1; $i <= $v['grade']; $i++)
                                            <img src="/h/images/review_star_fen.gif" align="absmiddle">
                                            @endfor</div>
                            <p class="cnt">
                                <a href="#" target="_blank">
                                    内容：
                                    {!! $v['con'] !!}
                                </a>
                            </p>
                        </div>
                        <div class="date">{{ date('Y-m-d',$v['time'])}}</div>
                    </dd>
                </dl>
                @endforeach
            </div>
        </div>
        <div class="gray-panel news">
            <div class="hd">
                <a href="" target="_blank"><span class="ico ico-plus"></span></a>
                <h4>热门资讯</h4>
            </div>
            <div class="bd">
                <ul>

                        <li><a href="#" target="_blank" title="情人节收到的鲜花，如何能保存持久？">情人节收到的鲜花，如何能保存持久</a></li>
                        <li><a href="#" target="_blank" title="除了红玫瑰, 情人节还可以送什么花？">除了红玫瑰, 情人节还可以送什么</a></li>
                        <li><a href="#" target="_blank" title="12星座异地恋如何维持？送你一份送花攻略！">12星座异地恋如何维持？送你一份</a></li>
                        <li><a href="#" target="_blank" title="看十二生肖收花如何反应？一图看出爱情运势">看十二生肖收花如何反应？一图看出</a></li>
                        <li><a href="#" target="_blank" title="送花的含义，生活中怎么送花？">送花的含义，生活中怎么送花？</a></li>
                        <li><a href="#" target="_blank" title="送女朋友鲜花，送花卡片写什么？">送女朋友鲜花，送花卡片写什么？</a></li>
                </ul>
                <ul>
                    <!-- <li><a href="/theme/xingzuo/" target="_blank">2017年摩羯座鲜花专题</a></li> -->
                    <!-- <li><a href="/theme/xmas/" target="_blank">2016年圣诞节鲜花专题</a></li> -->
                    <li><a href="#" target="_blank">2017年情人节鲜花专题</a></li>
                    <li><a href="#" target="_blank">鲜花枝数与其对应的含意</a></li>
                    <li><a href="#" target="_blank">鲜花寓意 浪漫花语</a></li>
                    <li><a href="#" target="_blank">通用送花祝福语-经典送花祝福语</a></li>
                    <li><a href="#" target="_blank">送花的常识与技巧</a></li>
                    <li><a href="#" target="_blank">女孩都喜欢别人送鲜花吗？</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 面板 End -->
    <!-- app+微信 -->
    <div class="app-wx-wrapper">
        <div class="app-download">
            <img src="/h/images/app_download_qrcode.png" height="122" width="122">
            <div class="intro first">
                <h5>手机APP下载</h5>
                <p>新人专享100元大礼包</p>
                <span class="ico ico-apple"></span>
                <span class="ico ico-android"></span>
            </div>
        </div>
        <div class="cartoon">
            <a href="#" target="_blank"><img src="/h/images/home_manhua.jpg" height="143" width="466"></a>
        </div>
        <div class="weixin">
            <img src="/h/images/wechat_qrcode_b.png" height="122" width="122">
            <div class="intro">
                <h5>关注微信</h5>
                <p>回复“礼物”有惊喜！"<br>活动多多，在花礼遇见幸福的自己</p>
                <span class="ico ico-weixin-app"></span>
            </div>
        </div>
    </div>
    <!-- app+微信 End-->
    <!-- 尾部服务 -->
    <div class="footer-server">
        <ul>
            <li><a href="#" target="_blank"><span class="ico ico-server-w1"></span>十一年品牌</a></li>
            <li><a href="#" target="_blank"><span class="ico ico-server-w2"></span>销量领先</a></li>
            <li><a href="#" target="_blank"><span class="ico ico-server-w3"></span>百万客户信赖</a></li>
            <li><a href="#" target="_blank"><span class="ico ico-server-w4"></span>时尚原创花艺</a></li>
            <li><a href="#" target="_blank"><span class="ico ico-server-w5"></span>订单实拍</a></li>
            <li><a href="#" target="_blank"><span class="ico ico-server-w6"></span>低价保障</a></li>
            <li><a href="#" target="_blank"><span class="ico ico-server-w7"></span>3小时配送</a></li>
            <li class="last-child"><a href="#" target="_blank"><span class="ico ico-server-w8"></span>200%退赔承诺</a></li>
        </ul>
    </div>
    <!-- 尾部服务 End -->
</div>
@endsection
    <!--底部-->
    <!-- 尾部导航 -->
   
    <!-- 尾部导航 End -->
    <!-- 尾部帮助 -->
    @section('help')
    <div class="footer-help" style="display:block;">
        <div class="container">
            <div class="mod mod-a">
                <h4>客户服务</h4>
                <ul class="list-unstyled">
                    <li><a href="#" target="_blank" rel="nofollow">服务声明</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">支付说明</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">境外支付</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">配送说明</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">配送范围</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">订单查询</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">取消订单</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">补交货款</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">隐私条款</a></li>
                    <li><a href="#" target="_blank" rel="nofollow">安全条款</a></li>
                </ul>
            </div>
            <div class="mod mod-b">
                <h4>热门咨询</h4>
                <ul class="list-unstyled">
                    <li><a href="#" target="_blank" class="thiscolor_h">中国鲜花礼品网购物流程</a></li>
                    <li><a href="#" target="_blank">中国鲜花礼品网订购演示</a> </li>
                    <li><a href="#" target="_blank">鲜花网能配送哪些城市？</a></li>
                    <li><a href="#" target="_blank">鲜花售后服务是怎么样的？</a></li>
                    <li><a href="#" target="_blank">我应该提前多久预订鲜花？</a></li>
                </ul>
            </div>
            <div class="mod mod-c">
                <h4><a href="#" target="_blank">同城鲜花专区</a></h4>
                <ul class="list-unstyled">
                    <li><a href="#" target="_blank" title="深圳鲜花">深圳鲜花</a></li>
                    <li><a href="#" target="_blank" title="北京鲜花">北京鲜花</a></li>
                    <li><a href="#" target="_blank" title="上海鲜花">上海鲜花</a></li>
                    <li><a href="#" target="_blank" title="广州鲜花">广州鲜花</a></li>
                    <li><a href="#" target="_blank" title="天津鲜花">天津鲜花</a></li>
                    <li><a href="#" target="_blank" title="重庆鲜花">重庆鲜花</a></li>
                    <li><a href="#" target="_blank" title="成都鲜花">成都鲜花</a></li>
                    <li><a href="#" target="_blank" title="西安鲜花">西安鲜花</a></li>
                    <li><a href="#" target="_blank" title="武汉鲜花">武汉鲜花</a></li>
                    <li><a href="#" target="_blank" title="南京鲜花">南京鲜花</a></li>
                    <li><a href="#" target="_blank" title="厦门鲜花">厦门鲜花</a></li>
                    <li><a href="#" target="_blank" title="更多城市">更多城市</a></li>
                </ul>
            </div>
            <div class="mod mod-d">
                <h4>联系我们</h4>
                <p>
                    全国订购热线:400-889-8188(免长途费)<br>
                    <a href="#" target="_blank">在线客服</a><br>
                    7x24小时在线订购<br>
                    客服工作时间：8:30-21:00<br>
                    E-mail: <a href="#">kefu@hua.com</a>
                </p>
            </div>
        </div>
    </div>
    @endsection
    <!-- 尾部帮助 End -->
    <!-- 通用尾部 -->
    
    <!-- 通用尾部 End -->
    <!-- 弹出窗口-->
    
    <!-- 弹出窗口end-->
    <!-- 友情链接 -->
    
    <!-- 友情链接 End -->
       

    @section('js')
    <script type="text/javascript" src="/h/js/common_index.js"></script>
    <script type="text/javascript" src="/h/js/statesandright.js"></script>
    <script>
        // 大图轮翻(5秒)
        $('#fullCarousel').carousel({ interval: 5000 });

        // 大图鼠标移到小圆点轮翻
        $("#fullCarousel ol li").hover(function () {
            var index = $("#fullCarousel ol li").index(this);
            $("#fullCarousel").carousel(index);
        });

        // 大图右侧banner鼠标移上左移动
        $('.focus-wrapper a').hover(
            function () {
                $(this).animate({
                    left: '-5px'
                }, 300);
            },
            function () {
                $(this).animate({
                    left: '0'
                }, 300);
            }
        );

        // 漫画选花放大
        $('.comic-choose img').hover(
            function () {
                $(this).animate({
                    width: '270px',
                    height: '216px',
                    margin: '-10px 0 0 -8px'
                }, 100);
            },
            function () {
                $(this).animate({
                    width: '250px',
                    height: '200px',
                    margin: '0'
                }, 100);
            }
        );
        // 花粉晒幸福(3秒)
        $('#showCarousel').carousel({ interval: 3000 });
    </script>

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
        /*if ($("#pjCount").length > 0) {
            $.get("/h/images/GetPJCount", function (data) {
                $("#pjCount").text(data);
            });
        }*/
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
        
        if({{ session('status') }} == 1) {
            alert('邮箱验证成功');
        }else{
            alert('邮箱验证失败');
        }

    </script>
@endsection
