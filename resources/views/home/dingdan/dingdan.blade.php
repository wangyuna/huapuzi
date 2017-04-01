@extends('home.layout.index')

@section('css')
<style>
	.ucenter {
		width: 1200px;
		margin: 30px auto 20px auto;
	}
	.ucenter .leftnnav {
		width: 175px;
		padding: 30px 0 7px 42px;
		float: left;
		display: inline;
		overflow: hidden;
		background-color: #fff;
		text-align: left;
		font-family: 'Microsoft Yahei';
	}
	.ucenter dl {
		margin-bottom: 25px;
	}
	.ucenter .leftnnav dt {
		height: 32px;
		line-height: 32px;
		color: #333;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 13px;
	}
	.ucenter .leftnnav dd {
		line-height: 32px;
		font-size: 14px;
	}
	.ucenter .leftnnav dd a.cur {
		color: #d70057;
	}
	.ucenter dl {
		margin-bottom: 25px;
	}
	.ucenter .rMain {
		background-color: #fff;
		margin-left: 230px;
		margin-bottom: 20px;
		padding: 0 40px;
		overflow: hidden;
	}

	.pinkborder {
		border: 1px solid #d70057;
	}
	.order-item .pinkbgbor {
	background-color: #fff7fa;
	}
	.order-item tr.titl td {
padding: 25px 0 26px;
height: 28px;
vertical-align: bottom;
line-height: 35px;
}
.order-item .pinkbgbor td {
border-bottom: 1px solid #f0cedb;
}
caption, th, td {
font-weight: normal;
text-align: left;
vertical-align: top;
}
.order-item tr.titl td.priceright {
text-align: right;
}
.pay-orderinfo {
line-height: 22px;
color: #666;
font-size: 14px;
}
.pay-orderinfo a {
color: #666;
}
.pay-orderinfo .sep {
color: #999;
padding: 0 10px;
}
.order-item .pay-priceinfo i {
position: relative;
top: 2px;
font-family: 'Microsoft Yahei';
font-size: 30px;
color: #333;
}
caption, th, td {
font-weight: normal;
text-align: left;
vertical-align: top;
}
.order-item .ordergoing-status {
width: 90px;
padding-left: 30px;
color: #d70057;
font-family: 'Microsoft Yahei';
font-size: 18px;
}
.pay-orderinfo {
line-height: 22px;
color: #666;
font-size: 14px;
}
.order-item tr.titl td.priceright {
text-align: right;
}
.order-item .pay-priceinfo {
padding-right: 30px;
line-height: 26px;
color: #666;
font-size: 14px;
}
.order-goodinfo .gdetail {
display: inline-block;
line-height: 20px;
margin-bottom: 5px;
margin-right: 35px;
}
.order-goodinfo .gname {
display: inline-block;
line-height: 20px;
margin-bottom: 5px;
color: #666;
}
.order-item .thumb {
padding-left: 30px;
width: 90px;
}
.order-item .order-operate {
text-align: right;
font-size: 12px;
position: relative;
line-height: 30px;
}
.ucenter .rmainTitle {
padding: 30px 0 0 0;
/*height: 50px;*/
position: relative;
}
.ucenter .rmainTitle h3 {
display: inline-block;
vertical-align: middle;
line-height: 50px;
font-family: 'Microsoft Yahei';
font-size: 30px;
color: #666;
}
.ucenter h3 {
font-weight: normal;
}
.ucenter .rmainTitle span {
display: inline-block;
margin-left: 20px;
vertical-align: -8px;
font-size: 14px;
color: #666;
}
.ucenter .mainOrder {
margin-top: 28px;
line-height: 32px;
font-family: 'Microsoft Yahei';
font-size: 14px;
color: #666;
}

.mainOrder .all-order {
padding-right: 23px;
color: #d70057;
}
a {
background-color: transparent;
}
.mainOrder .waite-order {
padding-left: 23px;
color: #666;
}
</style>

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
<!-- 内容  -->
@section('content')
<div class="ucenter">
    <div class="leftnnav">
	    <dl>
	        <dt>订单中心</dt>
	        <dd><a class="cur" title="我的订单" href="/home/dingdan">我的订单</a></dd>
	        <dd><a title="评价晒单" href="/home/dingdan/qr">评价晒单</a></dd>
	    </dl>
	    <dl>
	        <dt>个人中心</dt>
	        <dd><a title="我的收藏" href="/home/col">我的收藏</a></dd>
	        <dd><a title="我的积分" href="/home/score">我的积分</a></dd>
	        <dd><a title="实名认证" href="/renzheng/add">实名认证</a></dd>
	        <dd><a title="账号安全" href="/home/center">账号安全</a></dd>
	        <dd><a title="我的消息" href="/home/information">我的消息<span style="color:#d70057;font-weight:bold;margin-left:5px"></span></a></dd>
	    </dl>
	 
	</div>    
    <div style="min-height:599px;overflow: visible;" class="rMain">
	        <div class="rmainTitle">
	            <h3>我的订单</h3>
	            <span> {{ session('username') }} ,好！</span>
	        </div>
	        <!--广告位-->
	                <p style="margin-bottom:20px" class="mainOrder">
	            <!-- <a href="/order/lists"><span class="all-order">全部订单</span></a>|<a href="/order/lists/c"><span class="waite-order">待评价晒单</span></a> -->

	            <a href="/home/dingdan"><span style="color:#d70057" class="all-order">全部订单</span></a>|<a href="/home/dingdan/qr"><span style="color:#666" class="waite-order">待评价晒单</span></a>
	        </p>
	        <!--无子订单模板start-->
	        @foreach($res2 as $v)
			<table class="order-item pinkborder">
	    	<tbody>
				<tr class="titl pinkbgbor">
		        	<td width="120"><span class="ordergoing-status">@if($v['status'] == 2) 正在发送 @else 等待出库 @endif</span></td>
		            <td width="548">
		            	<p class="pay-orderinfo">订单编码：
		            	<a target="_blank" class="ordercode">{{$v['order_num']}}</a>
		            	<span class="sep">|</span>{{$v['time']}}<span class="sep">|</span>{{$v['to_name']}}&nbsp;（收货人）
		            	</p>
		            </td>
		            <td width="220" class="priceright">
		            	<span class="pay-priceinfo">订单金额：<i>￥{{$v['totalMoney']}}</i>
		            	</span>
		            	<div style="width:100px;left:100px;top:0px;" class="order-operate">
		            	@if($v['status'] == 2)
		            	<a href="/home/dingdan/qr/{{ $v['id'] }}">
		           		 
							<input type="button" style="background:red;height:30px;border:0px;border-radius:5px;color:#fff;" value="确认收货">
						
						</a>
						@endif
						</div>
		            </td>
		        </tr>

	        <!--循环子订单中的商品列表，展示商品清单-->
			  @foreach(App\Http\Controllers\home\DingdanController::getOrderxq($v['id']) as $val)
				<tr>
					<td style="height:20px;" colspan="3"></td>
				</tr>
	    		<tr class="pay-good-item">
	        		<td class="padbom20">
	                <a target="_blank" href="/home/shop/{{$val['gid']}}">
	                	<img src="{{ trim($val['pic1'],'.') }}" class="thumb">
	                </a>
	            </td>
	            <td class="padbom20">
					<div class="order-goodinfo">
						<p>
							<a target="_blank" href="/home/shop/{{$val['gid']}}" class="gname">{{$val['title']}} </a><br>
							<span class="gdetail">数量：{{$val['num']}}</span><span class="gdetail">单价：￥{{$val['price2']}}</span>
						</p>
					</div>
	            </td>

	            <td class="order-operate">
					
					<!--去支付链接-->
					
	            </td>
	       		</tr>
	       	@endforeach

			

		        </tbody>
		</table>
		@endforeach
		
	        
	        <!--无子订单模板start-->
	        			
				
			<!--无子订单模板end-->
			<!--无子订单模板start-->
	</div>
</div>
@endsection
<!-- 内容 End -->


<!-- 导航 End -->
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