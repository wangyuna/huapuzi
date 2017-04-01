@extends('home.layout.index')
    <!-- 顶部导航 -->
    
    <!-- 顶部导航 End -->
    <!-- 头部 -->
    
    <!-- 头部 End -->
@section('music') 
@endsection  
@section('header')
<header style="width: 990px;">
        <div class="logo">

            <h1><a href="/home" style="background:url(/uploads/{{ session('config')[0]['logo'] }}) 0 0 no-repeat;"></a></h1>
            <i></i>
            
    <h2>中国鲜花礼品网 始于2005，简称花礼网</h2>

        </div>
        
        <div class="service">
            <span class="ico ico-phone"></span>400-889-8188
            <a href="" target="_blank"><span class="ico ico-headset"></span>在线客服</a>
        </div>
    </header>
@endsection
@section('content')
<div class="container">
    <!-- 订单列表 -->
    <form action="/sendinfo/index" method="GET" name="form1" id="form1" style="width: 990px;margin: 0 auto;">
        {{ csrf_field() }}
        <div class="cart-panel">
            <div class="hd">
                <ul class="order-title">
                    <li class="product">商品名称</li>
                    <li class="market-price">情人节原价</li>
                    <li class="order-price">情人节订购价</li>
                    <li class="num">数量</li>
                    <li class="operate">操作</li>
                </ul>
            </div>
            <div class="bd">
             
            @foreach($cart as $v)
                @if(!empty($v['gid']))
                        <ul class="order-list">
                                    <li class="img-box"><a href="http://www.hua.com/product/9012165.html" target="_blank"><img src="{{ trim($v['pic1'],'.') }}" height="56" width="50"></a></li>
                                    <li class="product">
                                        <a href="http://www.hua.com/product/9012165.html" target="_blank">
                                            <span class="product-title">{{$v['title']}}</span>
                                            <span class="feature"></span>
                                        </a>
                                    </li>

                            <li class="market-price">
                                <span class="price-sign">¥</span>
                                <span class="price-num">{{$v['price1']}}</span>
                            </li>
                            <li class="order-price">
                                <span class="price-sign">¥</span>
                                <b>{{$v['price2']}}</b>
                            </li>
                            <li class="num">
                                <div class="input-num">
                                    <a href="#" class="btn btn-default"><span class="reduce">-</span></a>
                                    <input type="text" class="form-control input-sm" name="{{$v['gid']}}" id="Q_4526" value="1" maxlength="2" style="text-align: center;">
                                    <a href="#" class="btn btn-default">
                                    <span class="add">+</span>
                                    <input type="hidden" name="num" value="10">
                                    </a>
                                </div>
                            </li>
                            <li class="operate"><span class="{{$v['gid']}}" onclick="del({{$v['gid']}})" style="cursor:pointer;">删除</span><br><a href="javascript:DoGuanZhu('9012165')">移到我的关注</a></li>
                        </ul>

                        @endif

                        @endforeach

            
                    
            


            </div>
        </div>
                                <div class="set-bar">
                                    <div class="set-info">
                                        <a class="back" href="/home" style="width:90px;"><span class="ico ico-back"></span>继续挑选</a>
                                        
                                        <div class="set-stat">
                                            应付金额:
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num"></span>
                                                <input type="hidden" value="" name="price">
                                            </div>
                                        </div>

                                        <div class="set-stat" style="margin-right: 20px;">
                                            商品数量:
                                            <div style="display: inline-block;font-weight: bold;color: #ff6a00;">
                                            <span id="total_num"></span>
                                            <input type="hidden" name="total_num" value="">                
                                            </div>
                                        </div>

                                    </div>
                                    <button class="btn btn-primary btn-lg" type="submit">去结算</button>
                                </div>

        <!-- 结算 End -->
        <input type="hidden" name="type" id="type" value="valentine">
    </form>

    <!-- tabs -->
    <div class="cart-tabs-wrap" style="width: 990px;margin: 0 auto;">
        <ul class="cart-tabs">
            <li class="active"><a href="http://www.hua.com/Shopping/ShowCart?type=valentine#likePane">购买该商品的还购买了</a></li>
                            <li><a href="http://www.hua.com/Shopping/ShowCart?type=valentine#browsePane">最近浏览</a></li>
            <li><a href="http://www.hua.com/Shopping/ShowCart?type=valentine#addtionalPane">巧克力/花瓶</a></li>
        </ul>
        <div class="tab-content">
            <!-- tab内容一 -->
            <div class="tab-pane fade in active" id="likePane">
                <div class="owl-carousel1 owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <!-- 商品 -->
                                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2864px; left: 0px; display: block;"><div class="owl-item" style="width: 179px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/1064005.html" target="_blank"><img src="/h/images/1064005.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/1064005.html" target="_blank">顺丰包邮/十八音水晶钢琴一水晶音乐盒 韵升精品机芯 最佳送女友礼物</a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">218</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=1064005&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 179px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/1065004.html" target="_blank"><img src="/h/images/1065004.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/1065004.html" target="_blank">顺丰包邮/宝石旋转木马/蓝一音乐盒畅销款 送女友表白最佳礼物</a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">152</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=1065004&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 179px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/1065041.html" target="_blank"><img src="/h/images/1065041.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/1065041.html" target="_blank">顺丰包邮/雪人房子LED灯水晶球音乐盒一 曲目《天空之城》</a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">150</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=1065041&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 179px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/1060002.html" target="_blank"><img src="/h/images/1060002.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/1060002.html" target="_blank">顺丰包邮/我爱你一不凋谢的玫瑰 红玫瑰系列 最佳送女友礼物</a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">202</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=1060002&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 179px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/1070053.html" target="_blank"><img src="/h/images/1070053.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/1070053.html" target="_blank">顺丰包邮/芭蕾舞女孩永生花礼盒一粉色化妆镜+永生玫瑰，心动系列礼盒</a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">370</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=1070053&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 179px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/1061002.html" target="_blank"><img src="/h/images/1061002.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/1061002.html" target="_blank">顺丰包邮/999纯金箔康乃馨一千足金箔，最佳送母亲礼物 </a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">115</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=1061002&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 179px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/1061004.html" target="_blank"><img src="/h/images/1061004.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/1061004.html" target="_blank">顺丰包邮/999纯金箔玫瑰一永不凋谢的玫瑰 情人节礼物 送女友生日礼品 爱的信物</a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">115</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=1061004&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 179px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/1070017.html" target="_blank"><img src="/h/images/1070017.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/1070017.html" target="_blank">顺丰包邮/天使之恋一高档精品化妆镜,天然深海母贝，彩白色的奥地利水钻</a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">130</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=1070017&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div></div>
                        <!-- 商品 End -->
                        <!-- 商品 -->
                                
                        <!-- 商品 End -->
                        <!-- 商品 -->
                                
                        <!-- 商品 End -->
                        <!-- 商品 -->
                                
                        <!-- 商品 End -->
                        <!-- 商品 -->
                                
                        <!-- 商品 End -->
                        <!-- 商品 -->
                                
                        <!-- 商品 End -->
                        <!-- 商品 -->
                                
                        <!-- 商品 End -->
                        <!-- 商品 -->
                                
                        <!-- 商品 End -->

                <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div>
            </div>
            <!-- tab内容一 End -->
            <!-- tab内容二 -->
            <div class="tab-pane fade" id="attentionPane">
                <div class="owl-carousel2" style="opacity: 0;">

                </div>
            </div>

            <!-- tab内容二 End -->
            <!-- tab内容三 -->

            <div class="tab-pane fade" id="browsePane">
                <div class="owl-carousel3 owl-carousel owl-theme" style="opacity: 0; display: block;">
                                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 80px; left: 0px; display: block;"><div class="owl-item" style="width: 20px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/9012161.html" target="_blank"><img src="/h/images/9012161.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/9012161.html" target="_blank">鲜花/爱的诺言一红玫瑰19枝，白色腊梅2枝</a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">190</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=9012161&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 20px;"><div class="grid-item">
                                    <div class="grid-panel">
                                        <div class="img-box">
                                            <a href="http://www.hua.com/product/9012165.html" target="_blank"><img src="/h/images/9012165.jpg_220x240.jpg"></a>
                                        </div>
                                        <div class="info-cont">
                                            <div class="title">
                                                <a href="http://www.hua.com/product/9012165.html" target="_blank">鲜花/爱在巴黎一精品玫瑰礼盒:红玫瑰39枝，搭配白色腊梅、尤加利、银叶菊少量</a>
                                            </div>
                                            <div class="price">
                                                <span class="price-sign">¥</span>
                                                <span class="price-num">366</span>
                                            </div>
                                            <div class="operate">
                                                <a href="http://www.hua.com/shopping/AddtoCart/?product_code=9012165&type=valentine" class="add-cart">加入购物车</a>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div></div>
                                

                <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div>
            </div>

            <!-- tab内容三 End -->
            <!-- tab内容4 -->
            <div class="tab-pane fade" id="addtionalPane">
                <div class="owl-carousel4 owl-carousel owl-theme" style="opacity: 0; display: block;">
                            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 160px; left: 0px; display: block;"><div class="owl-item" style="width: 20px;"><div class="grid-item">
                                <div class="grid-panel">
                                    <div class="img-box">
                                        <a href="http://www.hua.com/product/3010001.html" target="_blank"><img src="/h/images/3010001_m.jpg"></a>
                                    </div>
                                    <div class="info-cont">
                                        <div class="title">
                                            <a href="http://www.hua.com/product/3010001.html" target="_blank">精美玻璃花瓶</a><font color="#666666">(图案供参考)</font>
                                        </div>
                                        <div class="price">
                                            <span class="price-sign">¥</span>
                                            <span class="price-num">38</span>
                                        </div>
                                        <div class="operate">
                                            <a href="http://www.hua.com/shopping/AddtoCart/?product_code=3010001&type=valentine" class="add-cart">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 20px;"><div class="grid-item">
                                <div class="grid-panel">
                                    <div class="img-box">
                                        <a href="http://www.hua.com/product/3010003.html" target="_blank"><img src="/h/images/3010003_m.jpg"></a>
                                    </div>
                                    <div class="info-cont">
                                        <div class="title">
                                            <a href="http://www.hua.com/product/3010003.html" target="_blank">德芙:98g铁盒或109克礼盒</a>
                                        </div>
                                        <div class="price">
                                            <span class="price-sign">¥</span>
                                            <span class="price-num">68</span>
                                        </div>
                                        <div class="operate">
                                            <a href="http://www.hua.com/shopping/AddtoCart/?product_code=3010003&type=valentine" class="add-cart">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 20px;"><div class="grid-item">
                                <div class="grid-panel">
                                    <div class="img-box">
                                        <a href="http://www.hua.com/product/3010008.html" target="_blank"><img src="/h/images/3010008_m.gif"></a>
                                    </div>
                                    <div class="info-cont">
                                        <div class="title">
                                            <a href="http://www.hua.com/product/3010008.html" target="_blank">德芙精心之选140g或恋语150g(随机发货)</a>
                                        </div>
                                        <div class="price">
                                            <span class="price-sign">¥</span>
                                            <span class="price-num">105</span>
                                        </div>
                                        <div class="operate">
                                            <a href="http://www.hua.com/shopping/AddtoCart/?product_code=3010008&type=valentine" class="add-cart">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 20px;"><div class="grid-item">
                                <div class="grid-panel">
                                    <div class="img-box">
                                        <a href="http://www.hua.com/product/3010004.html" target="_blank"><img src="/h/images/3010004_m.jpg"></a>
                                    </div>
                                    <div class="info-cont">
                                        <div class="title">
                                            <a href="http://www.hua.com/product/3010004.html" target="_blank">费列罗巧克力300克</a>
                                        </div>
                                        <div class="price">
                                            <span class="price-sign">¥</span>
                                            <span class="price-num">138</span>
                                        </div>
                                        <div class="operate">
                                            <a href="http://www.hua.com/shopping/AddtoCart/?product_code=3010004&type=valentine" class="add-cart">加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </div></div></div></div>
                            
                            
                            

                    
                <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div>
            </div>
            <!-- tab内容4 End -->
        </div>
    </div>
    <!-- tabs End -->
</div>
@endsection
<!-- 弹出窗口-->
@section('loginModal')
<div class="modal fade com-modal" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="attNotice">关注商品</h4>
            </div>
            <div class="modal-body" style="height:420px;overflow:hidden;">
                <iframe src="" width="100%" height="410" frameborder="0" id="attPage"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- 弹出窗口end-->

    <!--底部-->
    <!-- 服务 -->
    <div class="cart-server">
        <div class="toper-server">
            <ul>
                <li>
                    <span class="ico ico-server-o1"></span>
                    <h4>鲜花电商龙头</h4>
                    <p>销量领先，权威认证龙头企业</p>
                </li>
                <li>
                    <span class="ico ico-server-o2"></span>
                    <h4>10年品牌 真实口碑</h4>
                    <a href="http://www.hua.com/productpj/"><p>最近评价<font id="pjCount">193023</font>条</p></a>
                </li>
                <li>
                    <span class="ico ico-server-o3"></span>
                    <h4>鲜花送前实拍展示</h4>
                    <p>展现送前实拍的鲜花网</p>
                </li>
                <li>
                    <span class="ico ico-server-o4"></span>
                    <h4>3小时送达</h4>
                    <p>全国连锁，3小时送1000城市</p>
                </li>
            </ul>
        </div>
    </div>
    @endsection
    <!-- 服务 End -->
    <!-- 尾部导航 -->
    
    <!-- 通用尾部 End -->
    @section('js1')
    <script charset="utf-8" src="/h/js/v.js"></script>
    <script src="/h/js/hm.js"></script>
    <script type="text/javascript" src="/h/js/common.js"></script>
    
    <script type="text/javascript" src="/h/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/h/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript">

        function del(id){
            $.ajax({
                type:"get",
                url:"/home/cart/delete",
                data:{"id":id},
                success:function(mes){
                    $('.'+id).parent().parent().remove()
                    num();                                 
                }
            })
        }


        
        // list.click(alert(1));
        function num(){
            var num1=0;
            var totle=0;
            var list = $(".order-list")
            list.each(function(){
                
                // 获取单价
                var price = $(this).find('b').html();
                var price = parseFloat(price);
                // 获取数量
                var num = $(this).find('input').val();
                var num = parseInt(num);
                //写入小计
                totle+=num;
                num1+=(price*num);
                if(num1==0){
                    $("#list").css("display","none");
                }
            })
            //写入总计
            $(".set-stat .price-num").html(num1);
            // $(".set-stat .price-num input").val(100);
            $("input[name='price']").val(num1);
            
            $("#total_num").html(totle);
            $("input[name='total_num']").val(totle);
        }   
        num();
        // $('.set-stat .price-num').text(price*num);

        $(".reduce").each(function(){
            $(this).click(function(){
                // alert(1);
                // var count = $('input').val();
                var count = $(this).parent().next("input").val();
                // alert(count);
                if(count>1){
                    count--;
                }
                $(this).parent().next("input").val(count);
                // alert(count);
                var price = $(this).parents("li").prev().find("b").html();
                // $("input[name='1']").val(count);
                // $(this).input.css('background','red');
                // $(this).parents("li").next().find("pr").html(price*count);
                // $('.set-stat .price-num').text(price*count);
                num();
            })
        })

        $(".add").each(function(){
            $(this).click(function(){
                // alert(1);
                var count = $(this).parent().prev("input").val();
                if(count<parseInt($(this).next().val())){
                    count++;
                }
                $(this).parent().prev("input").val(count);
                num();
            })
        })

        // alert($('.set-stat .price-num').text());
        /*$(".ico ico-minus").each(function(){
            $(this).click(function(){
                var count = $('input').val();
                if(count>1){
                    count--;
                // sendAjax($(this).parents("tr").attr("id"),"reduce");
                }
                $('input').val(count)
                // $(this).parent().next().find("input").val(count);

                $('.set-stat .price-num').text(price*count);

            })
        })*/

    </script>
@endsection