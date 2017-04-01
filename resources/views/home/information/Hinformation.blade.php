
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
    .ucenter .rmainTitle {
    padding: 30px 0 0 0;
    height: 50px;
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
.ucenter .inbox {
margin-top: 65px;
width: 100%;
border: 1px solid #b0b0b0;
color: #999;
border-collapse: collapse;
}

.ucenter .inbox tbody tr th{
    height:50px;
    color:black;
    text-align: center;
}
#q td{
    text-align: center;
}
/*.newcard .inbox th, .newcard .inbox td {
text-align: center;
font-family: 'Microsoft Yahei';
}*/
.ucenter .jifen td.mycheck {
text-align: left;
}
.ucenter .jifen td {
padding: 0;
line-height: 48px;
}
.jifen .infotopic {
width: 205px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
text-align: center;
cursor: auto;
}
.jifen span, .jifen a {
display: inline-block;
vertical-align: middle;
margin: 0 5px;
cursor: pointer;
text-align: center;
}
.jifen span, .jifen a {
display: inline-block;
vertical-align: middle;
margin: 0 5px;
cursor: pointer;
text-align: center;
}
.jifen .infoshow b {
display: inline-block;
vertical-align: middle;
width: 15px;
height: 10px;
background: url("/h/images/ucenter-icon1.png") -126px -9px no-repeat;
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
	        <dd><a title="我的订单" href="/home/dingdan">我的订单</a></dd>
	        <dd><a title="评价晒单" href="/home/dingdan/qr">评价晒单</a></dd>
	    </dl>
	    <dl>
	        <dt>个人中心</dt>
	        <dd><a title="我的收藏" href="/home/col">我的收藏</a></dd>
	        <dd><a title="我的积分" href="/home/score">我的积分</a></dd>
	        <dd><a title="实名认证" href="/renzheng/add">实名认证</a></dd>
	        <dd><a title="账号安全" href="/home/center">账号安全</a></dd>
	        <dd><a class="cur" title="我的消息" href="/home/information">我的消息<span style="color:#d70057;font-weight:bold;margin-left:5px"></span></a></dd>
	    </dl>
	 
	</div>    
    <div style="min-height:599px;overflow: visible;" class="rMain">
	    <div class="rmainTitle">
            <h3>我的消息</h3>
        </div>
        <div class="newcard"> 
            <table class="inbox jifen">
                <tr class="titl" style="background:#ccc;border:1px;">
          			<th width="110"></th>
                    <th width="205">主题</th>
                    <th width="190">时间</th>
                    <th width="130">来自</th>
                    <th width="125">状态</th>
                    <th width="130">操作</th>
                </tr>
                @foreach($arr as $v)
                		<tr id="{{$v['id']}}">
                            <td class="mycheck"></td>
                            <td><span class="infotopic">{{$v['title']}}</span></td>
                            <td>{{date("Y-m-d H:i:s",$v['time'])}}</td>
                            <td>{{$v['from']}}</td>
                            <td class="isread">@if($v['status']==0) 未读 @else 已读 @endif</td>
                            <td><span uid="{{$v['id']}}" class="infoshow">打开<b></b></span><a onclick="del({{$v['id']}})">删除</a></td>
                        </tr>
                        <tr style="display:none;" >
                            <td colspan="6">
                                <p class="myinfo-detail">{{$v['content']}}</p>
                            </td>
                        </tr>
                      @endforeach
				</table>
            <div class="pageNum"></div>
        </div>     
	</div>
	<div class="OB_clearB"></div>
</div>
<script type="text/javascript" src="/d/js/libs/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
	function del(id){
		$.ajax({
			url:"/home/delinformation",
			data:{"id":id},
			success:function(mes){
				$("#"+id).remove();
			}
		})
	}
    // function openfile(id){
    //     if($("#"+id).next().css("display")=="none"){
    //         $("#"+id).next().css({"display":"table-row"});
    //         $.ajax({
    //         url:"/home/openinformation",
    //         data:{"id":id},
    //         success:function(mes){
    //             $("#"+id).find("td:eq(4)").html("已读");
    //         }
    //     })
    //     }else{
    //         $("#"+id).next().css("display","none");
    //     }
    // }
    $('.infoshow').live('click',function(){
    	var id = $(this).attr('uid');
		 if($("#"+id).next().css("display")=="none"){
            $("#"+id).next().css({"display":"table-row"});
	    	$.ajax({
	    		url:'/home/openinformation',
	    		data:{'id':id},
	    		type:'get',
	    		success:function(mes){
	    			$("#"+id).find("td:eq(4)").html("已读");
	    		}
	    	});
	    }else{
	    	$("#"+id).next().css("display","none");
	    }
    });
</script>
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