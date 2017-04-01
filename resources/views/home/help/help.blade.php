@extends('home.layout.index') 
@section('css')
<link type="text/css" rel="stylesheet" href="/h/css/common.css">
<link type="text/css" rel="stylesheet" href="/h/css/public.css">
<!--[if lt IE 9]>
        <script src="http://img02.hua.com/pc/assets/js/html5shiv.min.js"></script>
    <![endif]-->
    <script charset="utf-8" src="/h/images/v.htm"></script><script src="/h/js/hm.js"></script><script type="text/javascript" src="/h/images/CheckAgent.txt"></script>
<style>
	.box-border .article h4{border: 0;font-size: 16px;}
	.box-border .article .yga a{display: inline-block;}
	.tip{font-size: 12px;color: #b2b2b2;}
	.box-border .article .img-pack img{margin-bottom: 8px;}
	.box-border .article h3 b{font-size: 25px;}
</style>
@endsection
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
		<div class="breadcrumbs"><a href="http://www.hua.com/">首页</a> &gt; <a href="http://www.hua.com/profile/about.htm">关于我们</a></div>
		<div class="wrapper about">
			<div class="pull-left w970 l230">
				<div class="box-border" id='pp'>
					
				</div>
			</div>
			<div class="pull-left w210 r970">
				<div class="box-border">
					<ul class="bd">
					@foreach($list1 as $v)
						<li><a><span class="ico ico-about1"></span>{{$v['name']}}</a></li>
						@foreach($v['sub'] as $val)
						
						<li  id="{{$val['id']}}"><a><span class="ico ico-about2"></span>{{$val['name']}}</a></li>
						@endforeach
						
					@endforeach
					
					</ul>
				</div>
			</div>
		</div>
	</div>
	@endsection
		<!-- 尾部导航 -->
	
	<!-- 通用尾部 End -->
@section('js1')	
<script type="text/javascript" src="/h/js/common.js"></script>
<script type="text/javascript" src="/h/js/jquery-1.8.3.min.js"></script>

<script>

</script>
<script type="text/javascript" src="/h/js/statesandright.js"></script>
</body></html>
<script type="text/javascript">
	$(function() {

	$(".bd li").live("click",function(){
				
				var id = $(this).attr("id");
				$.ajax({
					url:"/home/xiangxi",
					data:{"pid":id},
					type:"get",
					dataType:"json",
					success:function(mes){
						console.log(mes);
						$("#pp").empty();
						var newp = $('<p style="font-size: 36px;height: 48px;line-height: 48px;color: #000;font-weight: normal;margin-bottom:10px">'+mes['title']+'</p>');

						$("#pp").append(newp);
						$("#pp").append(mes['content']);
					}

				})
			})
});
</script>
@endsection