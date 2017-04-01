@extends('home.layout.index') 
    @section('css')
    <link href="/h/css/article1.css" rel="stylesheet" type="text/css">
    <link href="/h/css/baike.css" rel="stylesheet" type="text/css">
	<link type="text/css" rel="stylesheet" href="/h/css/pagination.css">
    <link type="text/css" rel="stylesheet" href="/h/css/common.css">
    <link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/share_style0_24.css"><link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/imgshare.css?v=a7830602.css"><link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=6aba13f0.css"><link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/share_popup.css?v=240f357d.css"><link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/select_share.css?v=15f56735.css">
	<style>
	ul, ol{ padding:0; margin-bottom:0;}
	/*.rabox .content .incontent a{ font-size:12px;}*/
	.Item_Title{ height:24px; line-height:24px; width:955px; clear:both}
	.home_rec_cat{ float:left; width:464px;list-style:square;}
	.rabox .content .incontent {padding:10px 15px 40px 15px;}
	.Item_Brief{ margin-bottom:18px; line-height:18px; text-indent:24px; width:950px;}
	.bdsharebuttonbox{ padding:10px 15px; }
	.bdsharebuttonbox a:hover{ text-decoration:none;}
	.bd_weixin_popup .bd_weixin_popup_foot{margin-top:-12px;}
	</style>
	@endsection
<!--[if lt IE 9]>
        <script src="http://img02.hua.com/pc/assets/js/html5shiv.min.js"></script>
    <![endif]-->
    @section('js')
    <script src="/h/js/push.js"></script><script src="/h/js/hm.js"></script><script src="/h/js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="/h/images/comm.js" type="text/javascript"></script>
	<script src="/h/js/share.js"></script></head>
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
                    <div class="leftNav" style="color:red;height: 430px;">
                    <ul style="margin-left: 15px;">    
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
@section('content')    
<div class="breadcrumbs1"><a href="http://www.hua.com/" title="首页">首页</a> &gt; <a href="http://www.hua.com/huayu/" title="花语大全">花语大全</a>
    
        &gt; <a href="http://www.hua.com/huayu/list_xianhua.html" title="送花">送花</a>
    <label></label>
            &gt; <a href="http://www.hua.com/huayu/huayu.html" title="花语">花语</a>
        


</div>

<!-- 中部内容开始 -->
<div class="aboutallbox">
<div class="inbasebox_L2">

<!-- rightbox -->
<div class="rabox">
<div class="title"><h4>花语大全权威版，花礼网独家出品！</h4></div>
<div class="title1">□ 标签-&gt;<strong>花语大全，玫瑰花语，百合花语</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中国鲜花礼品网 / 2015-12-10

</div>
<div class="content">
<div class="incontent">
<div>
    <p>&nbsp;</p>
<p>&nbsp; &nbsp;<span style="font-family:;" yahei";font-size:16px;"="" microsoft="">{!! $arr['con'] !!}</span></p>
<p><span style="font-family:;" yahei";font-size:16px;"="" microsoft="">&nbsp; <span style="font-family:;" yahei";font-size:16px;"="" microsoft="">&nbsp;</span></span><span style="font-family:;" microsoft="" yahei";"=""><span style="line-height: 20.86px; font-family:;" yahei";font-size:16px;"="" microsoft="">还有</span></span><span style="line-height: 20.86px; font-family:;" yahei";font-size:16px;"="" microsoft="">送花的含义、</span><span style="line-height: 20.86px; font-family:;" yahei";font-size:16px;"="" microsoft="">送花数量的含义、</span><span style="line-height: 20.86px; font-family:;" yahei";font-size:16px;"="" microsoft="">送花朵数的含义、</span><span style="line-height: 20.86px; font-family:;" yahei";font-size:16px;"="" microsoft="">生日送花的技巧……种种</span><span style="line-height: 20.86px; font-family:;" yahei";font-size:16px;"="" microsoft="">送花的讲究，</span><span style="line-height: 20.86px; font-family:;" yahei";font-size:16px;"="" microsoft="">尽在花语大全。</span></p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;<span style="color: rgb(229, 102, 0); font-family:;" microsoft="" yahei";font-size:16px;font-weight:bold;"="">枝数花语</span><span style="color: rgb(229, 102, 0); line-height: 1.5; font-family:;" microsoft="" yahei";"=""><span style="line-height:22.85px;font-size:16px;"><b>▼</b></span></span></p>
<p style="text-align:center;"><span style="color: rgb(229, 102, 0); font-family:;" microsoft="" yahei";"=""><span style="line-height:22.85px;font-size:16px;"><b><img alt="" src="{{$arr['pic']}}" border="0" data-bd-imgshare-binded="1"><br>
</b></span></span></p>
<br>
<table width="94%" align="center" class="ke-zeroborder" style="border:1px solid #e2e2e2;border-image:none;color:#737373;font-size:12px;" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <th width="30%" height="40" align="center" style="padding:0px 10px;" bgcolor="#f1f1f1"><span style="color:#333333;font-size:14px;">枝数</span></th>
        <th width="70%" height="40" align="center" style="padding:0px 10px;border-left-color:#e2e2e2;border-left-width:1px;border-left-style:solid;" bgcolor="#f1f1f1"><span style="color:#333333;font-size:14px;">花语</span></th>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-top-color:#e2e2e2;border-bottom-color:#e2e2e2;border-top-width:1px;border-bottom-width:1px;border-top-style:solid;border-bottom-style:solid;">1朵 </td>
        <td height="40" style="padding:0px 10px;border-top-color:#e2e2e2;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-top-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-bottom-style:solid;border-left-style:solid;">情有独钟、你是我的唯一</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">2朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">心目中只有我倆</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">3朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">我爱你</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">4朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">誓言、承诺、山盟海誓</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">5朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">无怨无悔</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">6朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">愿你一切顺利</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">7朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">喜相逢</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">8朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">深表歉意、盼您原谅</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">9朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">终生相爱、无怨无悔</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">10朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">完美的爱情、十全十美</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">11朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">一心一意</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">12朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">圆满组合、心心相印</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">13朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">暗恋</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">15朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">对你感到抱歉</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">16朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">爱的最高点</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">17朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">好聚好散</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">18朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">真诚的心</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">19朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">期待陪伴</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">20朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">此情不渝、永远爱你</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">21朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">你是我的最爱</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">22朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">双双对对、你浓我浓、两情相悦</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">24朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">思念</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">25朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">祝你好运</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">29朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">不须言语的爱</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">30朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">爱到永久</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">33朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">深情呼喚、我爱你三生三世 </td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">36朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">浪漫心情、我心属于你</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">44朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">亘古不变的誓言</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">50朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">无怨无悔</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">55朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">无悔的爱</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">56朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">吾爱</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">60朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">爱情永固</td>
      </tr>
      <tr>
      
      </tr>
<tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">66朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">心情顺利、真爱不变</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">77朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">相逢自是有缘</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">88朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">用心弥补一切的错</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">99朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">长相厢守、坚定</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">100朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">百分之百的爱、百年好合</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">101朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">您是我的唯一</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">108朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">嫁給我吧、求婚</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">123朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">爱情自由</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">144朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">爱你日日月月生生世世</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">365朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">天天想你、天天爱你</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">999朵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">天长地久、爱无止休</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;">
        1001朵         </td>
        <td height="40" style="padding:0px 10px;border-left-color:#e2e2e2;border-left-width:1px;border-left-style:solid;">忠诚的爱、直到永远</td>
      </tr>
    </tbody>
  </table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="font-family:;" yahei";font-size:16px;"="" microsoft=""><b><span style="color:#e56600;">&nbsp; &nbsp;花材花语</span></b></span><span style="color: rgb(229, 102, 0); font-family:;" microsoft="" yahei";"=""><span style="line-height:22.85px;font-size:16px;"><b>▼</b></span></span></p>
<p style="text-align:center;"><b><img alt="" src="/h/images/2015121411938247378.jpg" border="0" data-bd-imgshare-binded="1"><br>
</b> <br>
</p><table width="94%" align="center" class="ke-zeroborder" style="border:1px solid #e2e2e2;border-image:none;color:#737373;font-size:12px;" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <th width="30%" height="40" align="center" style="padding:0px 10px;" bgcolor="#f1f1f1"><span style="color:#333333;font-size:14px;">花材</span></th>
        <th width="70%" height="40" align="center" style="padding:0px 10px;border-left-color:#e2e2e2;border-left-width:1px;border-left-style:solid;" bgcolor="#f1f1f1"><span style="color:#333333;font-size:14px;">花语</span></th>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-top-color:#e2e2e2;border-bottom-color:#e2e2e2;border-top-width:1px;border-bottom-width:1px;border-top-style:solid;border-bottom-style:solid;">红玫瑰 </td>
        <td height="40" style="padding:0px 10px;border-top-color:#e2e2e2;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-top-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-style:solid;border-bottom-style:solid;border-left-style:solid;">热情、热恋、热爱着你</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">粉玫瑰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">初恋、爱的宣言、关心</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">白玫瑰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">天真、纯洁、纯真的爱</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">紫玫瑰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;"> 	浪漫真情、珍贵独特</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">蓝玫瑰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">清醇的爱、敦厚善良</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">香槟玫瑰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">我只钟情你一个</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">黄玫瑰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">为爱道歉</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">红色康乃馨</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">思念、祝健康长寿</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">粉色康乃馨</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">祝永远美丽</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">黄色康乃馨</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">对母亲的感激之情、热爱着您</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">郁金香</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">爱的告白、永恒的祝福</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">马蹄莲</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">永恒、优雅、希望、纯洁</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">百合</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">顺利、心想事成、祝福</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">向日葵</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">勇敢地去追求幸福、沉默的爱</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">非洲菊</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">有毅力、不畏艰难、互敬互爱</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">绣球花</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">希望、忠贞、美满</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">满天星</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">关怀、思恋、配角</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">勿忘我</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">永恒的爱、浓情厚谊</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">洋桔梗</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">富于感情、感动</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">红掌</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">大展宏图</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">剑兰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">用心、福禄、康宁</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">紫罗兰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">永恒的美与爱</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">蝴蝶兰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">高洁、清雅、富贵</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">大花蕙兰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">高贵雍容</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">君子兰</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">高贵、有君子之风</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-bottom-width:1px;border-bottom-style:solid;">凤梨花</td>
        <td height="40" style="padding:0px 10px;border-bottom-color:#e2e2e2;border-left-color:#e2e2e2;border-bottom-width:1px;border-left-width:1px;border-bottom-style:solid;border-left-style:solid;">完美无缺</td>
      </tr>
      <tr>
        <td height="40" style="padding:0px 10px;">仙客来</td>
        <td height="40" style="padding:0px 10px;border-left-color:#e2e2e2;border-left-width:1px;border-left-style:solid;">喜悦</td>
      </tr>
    </tbody>
  </table>
<p></p>
<p><b><br>
</b></p>
<p>&nbsp;</p>
<p><span style="font-family:;" yahei";font-size:16px;"="" microsoft=""><b><span style="color:#e56600;">&nbsp; &nbsp;送花攻略</span></b></span><span style="color: rgb(229, 102, 0); font-family:;" microsoft="" yahei";"=""><span style="line-height:22.85px;font-size:16px;"><b>▼</b></span></span></p>
<p style="text-align:center;"><b style="color: rgb(229, 102, 0); line-height: 22.85px; font-family:;" yahei";font-size:16px;"="" microsoft=""><img alt="" src="/h/images/20151214119112890445.jpg" border="0" data-bd-imgshare-binded="1"><br>
</b> <br>
</p><table width="94%" align="center" class="ke-zeroborder" style="border:1px solid #e2e2e2;border-image:none;color:#737373;font-size:12px;" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <th height="40" align="center" style="padding:0px 10px;border-left-color:#e2e2e2;border-left-width:1px;border-left-style:solid;" bgcolor="#f1f1f1"><span style="color:#333333;font-size:14px;">送花攻略</span></th>
      </tr>
      <tr>
        <td style="padding:0px 10px;"><div style="border-bottom-color:#999999;border-bottom-width:1px;border-bottom-style:dashed;"><span class="red"><br>
<strong style="color:#ff6600;line-height:28px;font-size:14px;">不同的送花对象——</strong><br>
<br>
</span><span class="red">恋人：</span>适合送玫瑰以及百合、郁金香、马蹄莲等。<br>
<br>
             <span class="red">父母/长辈/老师：</span>适合送康乃馨，最好是康乃馨搭配百合、扶郎、玫瑰的花束和花篮。<br>
<br>
            <span class="red">朋友/同事：</span>适合送百合、扶郎、郁金香、马蹄莲，也可以搭配玫瑰一起赠送。<br>
<br>
</div>
<div style="border-bottom-color:#999999;border-bottom-width:1px;border-bottom-style:dashed;"><br>
<span class="red"><strong style="color:#ff6600;line-height:28px;font-size:14px;">不同颜色的鲜花——</strong><br>
<br>
</span><span class="red">红色：</span>红色代表吉祥、喜气、热烈，红色鲜花适合出现在喜庆的场合，以及用来表达炽热的情感，如代表热恋的红玫瑰。<br>
<br>
             <span class="red">粉色：</span>粉色代表可爱、温馨、青春、恋爱等，多用在女性的身上，粉色花朵主要用来送给女性，所以粉色康乃馨被认为是母爱的象征。<br>
<br>
            <span class="red">白色：</span>白色代表纯洁、圣洁、严肃，白色花朵适合出现在庄重的场合，以及用来表达真挚的情感，如白玫瑰代表纯真的爱。<br>
<br>
             <span class="red">黄色：</span>黄色被认为是快乐和希望的颜色，黄色花朵适合用来祝病人早日康复，以及表达祝福。不过，黄玫瑰比较特别，虽然可代表美好的祝福，但重在为爱道歉。<br>
<br>
</div>
<div><br>
<span class="red"><strong style="color:#ff6600;line-height:28px;font-size:14px;">花朵朵数的选择——</strong><br>
<br>
</span>时下，比较常见且受欢迎的是11朵、19朵、29朵、33朵、66朵、99朵的花束。<br>
<br>
             <span class="red">11朵</span>代表一心一意，经济实惠之选，常用来表白示爱。<br>
<br>
            <span class="red">19朵</span>代表期待陪伴，正式恋爱后可赠送，特别适合异地恋的情侣。<br>
<br>
             <span class="red">29朵</span>代表不需言语的爱，热恋时送花的心意之选。<br>
<br>
<span class="red">33朵</span>代表三生三世的爱，适合在相爱纪念日赠送。<br>
<br>
<span class="red">66朵</span>代表真爱不变，适合恋爱走过轰轰烈烈后送给对方。<br>
<br>
<span class="red">99朵</span>代表长长久久的爱，较多用于示爱/求婚。<br>
<br>
如果是很有纪念意义的重要场合，通常送29朵、66朵、99朵这种朵数较多的花束比较合适。<br>
<br>
<br>
</div>
</td>
      </tr>
    </tbody>
  </table>
<p></p>
<p><b style="color: rgb(229, 102, 0); line-height: 22.85px; font-family:;" yahei";font-size:16px;"="" microsoft=""><br>
</b></p>

</div>
<div style=" clear:both;"></div>
<dl class="next_prev">


    <dd>上一篇：<a href="http://www.hua.com/huayu/13675.html" target="_self">16朵白玫瑰的花语，16朵白玫瑰代表什么意思？</a></dd> 
    
    <dd>下一篇：<a href="http://www.hua.com/huayu/13677.html" target="_self">圣诞表白送花，向12星座女求婚一举拿下！</a></dd>
    
    
</dl>
<div class="separate"></div>

    <dl class="titlelst"><dt><span>看过本文的人还看过</span></dt>
         <dd> · <a href="http://www.hua.com/huayu/17561.html" target="_self">花礼网怎么样？花礼网靠谱吗？</a></dd>
    
         <dd> · <a href="http://www.hua.com/huayu/10665.html" target="_self">黄玫瑰花语</a></dd>
    
         <dd> · <a href="http://www.hua.com/huayu/10869.html" target="_self">蝴蝶兰花语</a></dd>
    
         <dd> · <a href="http://www.hua.com/huayu/10610.html" target="_self">粉玫瑰的花语是什么？</a></dd>
    
         <dd> · <a href="http://www.hua.com/huayu/10626.html" target="_self">向日葵的花语</a></dd>
    </dl>

<div class="separate"></div>

    <dl class="titlelst"><dt><span>点击排行</span></dt>
         <dd> · <a href="http://www.hua.com/huayu/16298.html" target="_self">香槟洋桔梗的花语是什么？</a></dd>
    
         <dd> · <a href="http://www.hua.com/huayu/16865.html" target="_self">永生花的花语是什么？永生花的寓意是什么？</a></dd>
    
         <dd> · <a href="http://www.hua.com/huayu/16257.html" target="_self">黄金球（金槌花）的花语是什么？</a></dd>
    
         <dd> · <a href="http://www.hua.com/huayu/16275.html" target="_self">中国洛神花的由来及传说</a></dd>
    
         <dd> · <a href="http://www.hua.com/huayu/16289.html" target="_self">戴安娜玫瑰寓意着什么？</a></dd>
    
         <dd> · <a href="http://www.hua.com/huayu/17488.html" target="_self">多头康乃馨的花语是什么？</a></dd>
    </dl>

<div class="separate"></div>


    

 <div style=" clear:both;"></div>

 
<!-- 分享到start -->

<div class="fenxiang">

<div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1487763614516">
    
    <a href="http://www.hua.com/huayu/13676.html#" class="bds_more" data-cmd="more">分享到:</a>
    <a href="http://www.hua.com/huayu/13676.html#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
    <a href="http://www.hua.com/huayu/13676.html#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
    <a href="http://www.hua.com/huayu/13676.html#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
    <a href="http://www.hua.com/huayu/13676.html#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
    <a href="http://www.hua.com/huayu/13676.html#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
    

</div>
<script>window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "0", "bdSize": "24" }, "share": {}, "image": { "viewList": ["tsina", "tqq", "qzone", "sqq", "weixin"], "viewText": "分享到：", "viewSize": "16" }, "selectShare": { "bdContainerClass": null, "bdSelectMiniList": ["tsina", "tqq", "qzone", "sqq", "weixin"] } }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];

</script>

</div>

<!-- 分享到END -->

 
<div class="hytablebox">
  <div class="clear"></div>
</div>

</div>

</div>


</div>


</div>

<div class="inbasebox_R2">

<!-- 热门文章 -->
<div class="hot_titbox">
<div class="title">热门文章</div>
<div class="borderct">
<div class="incontent">
    <ul class="ul11">
         <li><a href="http://www.hua.com/huayu/11359.html" title="蓝色妖姬多少钱一朵？" target="_self">蓝色妖姬多少钱一朵？</a></li>
    
         <li><a href="http://www.hua.com/huayu/11421.html" title="绿萝的养殖方法和注意事项" target="_self">绿萝的养殖方法和注意事项</a></li>
    
         <li><a href="http://www.hua.com/huayu/10626.html" title="向日葵的花语" target="_self">向日葵的花语</a></li>
    
         <li><a href="http://www.hua.com/huayu/10542.html" title="19朵玫瑰代表什么？" target="_self">19朵玫瑰代表什么？</a></li>
    
         <li><a href="http://www.hua.com/huayu/10610.html" title="粉玫瑰的花语是什么？" target="_self">粉玫瑰的花语是什么？</a></li>
    
         <li><a href="http://www.hua.com/huayu/10665.html" title="黄玫瑰花语" target="_self">黄玫瑰花语</a></li>
    
         <li><a href="http://www.hua.com/huayu/10548.html" title="11朵玫瑰代表什么意思？" target="_self">11朵玫瑰代表什么意思？</a></li>
    
         <li><a href="http://www.hua.com/huayu/10869.html" title="蝴蝶兰花语" target="_self">蝴蝶兰花语</a></li>
    
         <li><a href="http://www.hua.com/huayu/11044.html" title="白玫瑰花语，送白玫瑰代表什么意思？" target="_self">白玫瑰花语，送白玫瑰代表什么</a></li>
    
         <li><a href="http://www.hua.com/huayu/11251.html" title="绣球花花语" target="_self">绣球花花语</a></li>
    </ul>
</div>
</div>

<div class="imgbottom"></div>
</div>
<!-- 热门文章 END -->

<div class="imgbottom"></div>


<!-- 花语大全 -->
<div class="hybk_titbox">
<div class="title">相关分类</div>
<div class="borderct">
<div class="incontent">

    <ul class="home_menu">
    
    
         <li onmouseover="$(this).addClass(&#39;cursor_hand&#39;)" onmouseout="$(this).removeClass(&#39;cursor_hand&#39;)" onclick="menuSwitch(this)"><img src="/h/images/tree_opened.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/list_xianhua.html" target="_self">送花</a></li>
    
   <li id="MenuChild" v="0">
   
   <dl>
    
      
      <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a style=" color:Red;" href="http://www.hua.com/huayu/huayu.html" target="_self">花语</a></dd>  
   
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/jiehun.html" target="_self">结婚送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/story.html" target="_self">送花故事分享</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/shengri.html" target="_self">生日送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/jiqiao.html" target="_self">送花艺术</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/zhishi.html" target="_self">鲜花常识</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/shenghuo.html" target="_self">鲜花生活</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/huayi.html" target="_self">花卉花艺</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/shangwu.html" target="_self">商务送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/huadian.html" target="_self">花店经营</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/daoqian.html" target="_self">道歉送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/kaiye.html" target="_self">开业送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/qiaoqian.html" target="_self">乔迁送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/shengzi.html" target="_self">生子送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/tanbing.html" target="_self">探病送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/biye.html" target="_self">毕业送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/jiehunjinian.html" target="_self">结婚纪念送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forgirl.html" target="_self">给女朋友送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forfriend.html" target="_self">给朋友送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forleader.html" target="_self">给领导送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forkids.html" target="_self">给孩子送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forelder.html" target="_self">给长辈送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forteacher.html" target="_self">给老师送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/formate.html" target="_self">给同事送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forclient.html" target="_self">给客户送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forparent.html" target="_self">给父母送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forwife.html" target="_self">给妻子送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/forrelative.html" target="_self">给亲属送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/yidisonghua.html" target="_self">异地送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/zhushousonghua.html" target="_self">祝寿送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/qiuhunsonghua.html" target="_self">求婚送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/biaobaisonghua.html" target="_self">求爱表白送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/guanggunjie.html" target="_self">光棍节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/ganenjie.html" target="_self">感恩节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/shengdanjie.html" target="_self">圣诞节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/chunjie.html" target="_self">春节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/qingrenjie.html" target="_self">情人节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/sanbajie.html" target="_self">三八妇女节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/muqingjie.html" target="_self">母亲节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/fuqingjie.html" target="_self">父亲节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/qixijie.html" target="_self">七夕节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/jiaoshijie.html" target="_self">教师节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/zhongqiujie.html" target="_self">中秋节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/hushijie.html" target="_self">护士节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/duanwujie.html" target="_self">端午节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/chongyangjie.html" target="_self">重阳节送花</a></dd>    
            
            <dd><img src="/h/images/tree_switch.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/yuanxiaojie.html" target="_self">元宵节送花</a></dd>    
               
                   <dd><img src="/h/images/tree_leaf.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/whiteday.html" target="_self">白色情人节送花</a></dd>      
            
            </dl>
            
       </li>

    
    
              <li class="first"><img src="/h/images/tree_opened.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/list_dangao.html" target="_self">蛋糕常识</a></li>
              
              <li class="first"><img src="/h/images/tree_opened.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/list_liwu.html" target="_self">送礼</a></li>
              
              <li class="first"><img src="/h/images/tree_opened.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/list_zhufuyu.html" target="_self">祝福语大全</a></li>
              
              <li class="first"><img src="/h/images/tree_opened.gif" data-bd-imgshare-binded="1"><a href="http://www.hua.com/huayu/yanghua.html" target="_self">养花</a></li>
              
              
</ul>
</div>
</div>



</div>
<!-- 花语大全END -->


    

</div>


<div class="clear"></div>
</div>

<!-- 中部内容结束 -->
<div style="clear:both"></div>
@endsection
	<!-- 尾部导航 -->
	
	<!-- 通用尾部 End -->
    <!-- 返回顶部  -->  
    @section('js1')  
    <style type="text/css">
    #goTopBtn{BOTTOM: 80px; CURSOR: pointer; RIGHT:15px; _position: absolute; _right: auto;height:40px; width:40px;POSITION: fixed; border:1px solid #e6e6e6; background:#fafafa;}
    #goTopBtn span{display:inline-block;width:17px;height:16px;background:url("http://img02.hua.com/pc/pimg/top_1.png") no-repeat;vertical-align:top; margin:12px 11px;}

    </style>
    <a style="display: none;" id="goTopBtn" title="返回顶部"><span></span></a>
    <script type="text/javascript">
    function goTopEx() {
    var obj = document.getElementById("goTopBtn");
    function getScrollTop() {
    return document.documentElement.scrollTop + document.body.scrollTop;
    }
    function setScrollTop(value) {
    if (document.documentElement.scrollTop) {
    document.documentElement.scrollTop = value;
    } else {
    document.body.scrollTop = value;
    }
    }
    window.onscroll = function() {
    getScrollTop() > window.screen.height ? obj.style.display = "": obj.style.display = "none";
    }
    obj.onclick = function() {
    var goTop = setInterval(scrollMove, 10);
    function scrollMove() {
    setScrollTop(0);
    if (getScrollTop() < 1) clearInterval(goTop);
    }
    }
    }
    </script>
    <script type="text/javascript">goTopEx();</script>


    <script type="text/javascript" src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/addclick.js" id="baike_js_click" tag="bc83323f-cb9f-4115-a58d-8d6bdf0f3808"></script>
    <script type="text/javascript" src="/h/js/statesandright.js"></script>



<script>
    (function () {
        var bp = document.createElement('script');
        bp.src = '//push.zhanzhang.baidu.com/push.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
@endsection