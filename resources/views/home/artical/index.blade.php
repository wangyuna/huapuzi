@extends('home.layout.index') 
    @section('css')
    <link href="/h/css/article1.css" rel="stylesheet" type="text/css">
    <link href="/h/css/baike.css" rel="stylesheet" type="text/css">
	<link type="text/css" rel="stylesheet" href="/h/css/pagination.css">
    <link type="text/css" rel="stylesheet" href="/h/css/common.css">
    <link rel="stylesheet" href="/h/css/share_style0_24.css">
	<link rel="stylesheet" href="/h/css/imgshare.css">
	<link rel="stylesheet" href="/h/css/share_style0_16.css">
	<link rel="stylesheet" href="/h/css/share_popup.css">
	<link rel="stylesheet" href="/h/css/select_share.css">
	<style>
		ul, ol{ padding:0; margin-bottom:0;}
		.rabox .content .incontent a{ font-size:12px;}
		.aboutallbox.box-sizing{inherit;}
		h3{ font-size:17px;}
		#top-rated {font-size: 12px;height:410px;margin: 15px 0px 0px;width: 954px;}
		#top-rated ul li {float: left;margin-bottom: 30px;width:466px;}
		#top-rated .article .ccontent {float: left;height: 80px;position: relative;width: 300px;}
		#top-rated  ul,#top-rated  li {list-style-type: none;background:none;font-size:12px; padding:0;}
		.Item_Brief{ margin-bottom:18px; line-height:18px; text-indent:24px; width:950px;}
		.Item_Title{ height:24px; line-height:24px; width:1000px; clear:both}
		.home_rec_cat{ float:left; width:464px;list-style:square;}
		.rabox .content .incontent {padding:10px 15px 40px 15px;}
		.bd_weixin_popup .bd_weixin_popup_foot{margin-top:-12px;}
		#top-rated .article .ccontent p {color: #6A6A6A;line-height: 20px;margin: 0px 0px 7px;overflow: hidden;height: 60px;}
	</style>
	@endsection
<!--[if lt IE 9]>
        <script src="http://img02.hua.com/pc/assets/js/html5shiv.min.js"></script>
    <![endif]-->
    @section('js')
    <script src="/h/js/hm.js"></script>
    <script src="/h/js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="/h/js/comm.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () { $.get("/ajax/mltoplogininfo.asp?rmd=" + Math.random(), null, function (data) { $("#loginInfo").html(data); }); });
</script>
<script src="/h/js/share.js"></script>
<script type="text/javascript" src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/statesandright.js"></script>
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
<!-- 中部内容开始 -->
<div class="aboutallbox">
<div class="inbasebox_L2">

<!-- rightbox -->
<div class="rabox">
<div class="content">
<div class="incontent" style=" border-top:1px solid  #DDDDDD;">
<!--图文推荐-->
<div class="g-row" id="top-rated">
    
    <div class="g-row ctitle Home_Header"><a href="http://www.hua.com/huayu/tuwentuijian.html"><h3 class="">图文推荐</h3></a></div>
    <ul> 
     
     @foreach($arr as $k=>$v)
        <li class="">
            <div class="g-row article">
                <div class="pic"><a href="http://www.hua.com/huayu/13676.html" target="_blank">
                <img width="134" height="100" src="{{$v['pic']}}" data-bd-imgshare-binded="1">
                </a></div> 
                <div class="g-a1 ccontent">
                    <div class="g-row">
                        <h4><a href="/home/artical/xiang/{{$v['id']}}" target="_blank" title="花语大全权威版，花礼网独家出品！">{{$v['title']}}</a></h4> 
                        <span>分类：<a target="_blank" href="http://www.hua.com/huayu/huayu.html">花语</a></span> 
                    </div> 
                    <p>花语大全权威版，花礼网独家出品！花语包括：玫瑰花语、百合花语、满天星花语、薰衣草花语、蓝色妖姬花语、勿忘我花语、香槟玫瑰花语、郁金香花语、康乃馨的花语……还有送</p> 
                </div> 
            </div>
        </li>
	@endforeach	
    </ul> 
</div>
  <div class="separate"></div>
<!--推荐文章-->
    <div class="Home_Header Home_dot">推荐文章</div>
             <div class="Item_Title">
                <a href="http://www.hua.com/huayu/17749.html" class="left" target="_blank">如何区分进口永生花和国产永生花？</a>
                <a target="_blank" class="right" href="http://www.hua.com/huayu/huayi.html">花卉花艺</a></div>
             <div class="Item_Brief"><a href="http://www.hua.com/huayu/17749.html" target="_blank">鲜花易逝，永生花的出现便是为了将这份爱定格为永恒。永生玫瑰最早在20世纪的德国出现，采用高科技手段处理，将鲜花经过脱水、保色、干燥等复杂程序加工而成，色泽、性状、手感与鲜花无异，它既保持了鲜花的特质，也可以更长久地陪伴在ta身边（一般可保存3-5年）</a></div>
        
             <div class="Item_Title">
                <a href="http://www.hua.com/huayu/17747.html" class="left" target="_blank">永生花的花语是什么？送永生花有什么寓意！</a>
                <a target="_blank" class="right" href="http://www.hua.com/huayu/huayu.html">花语</a></div>
             <div class="Item_Brief"><a href="http://www.hua.com/huayu/17747.html" target="_blank">永生花的花语是“永不凋谢的爱”，相比那些容易凋零的鲜花，不如就送爱人一盒永生花，见证你们爱情爱情的甜蜜长久。</a></div>
        
             <div class="Item_Title">
                <a href="http://www.hua.com/huayu/17744.html" class="left" target="_blank">送红玫瑰代表什么？花礼网经典红玫瑰花束推荐！</a>
                <a target="_blank" class="right" href="http://www.hua.com/huayu/jiqiao.html">送花艺术</a></div>
             <div class="Item_Brief"><a href="http://www.hua.com/huayu/17744.html" target="_blank">红玫瑰的花语是我爱你、热恋，激情的爱，象征坚贞不渝的爱情。当然，不同支数的红玫瑰有不同的寓意，1枝代表“唯一的爱”，3支代表“我爱你”，9支代表“长相守的爱”等等。</a></div>
        
             <div class="Item_Title">
                <a href="http://www.hua.com/huayu/17743.html" class="left" target="_blank">永生花是什么？永生花是真花吗？它为什么叫永生花？</a>
                <a target="_blank" class="right" href="http://www.hua.com/huayu/jiqiao.html">送花艺术</a></div>
             <div class="Item_Brief"><a href="http://www.hua.com/huayu/17743.html" target="_blank">永生花是什么？永生花是真花吗？它为什么叫永生花？-中国鲜花礼品网（花礼网）</a></div>
        
             <div class="Item_Title">
                <a href="http://www.hua.com/huayu/17737.html" class="left" target="_blank">异地恋必须知道的5个技巧</a>
                <a target="_blank" class="right" href="http://www.hua.com/huayu/yidisonghua.html">异地送花</a></div>
             <div class="Item_Brief"><a href="http://www.hua.com/huayu/17737.html" target="_blank">异地恋必须知道的5个技巧-如何异地鲜送花,异地订花怎么订？中国鲜花礼品网专业提供24小时异地订花、全国1000多个城市异地送花服务,无论您身处何地,最快3小时将新鲜而美丽的鲜花送货上门,真正实现：全国连锁，千里真情、瞬间传递！</a></div>
        
             <div class="Item_Title">
                <a href="http://www.hua.com/huayu/17720.html" class="left" target="_blank">春节祝福送花，送这15种花</a>
                <a target="_blank" class="right" href="http://www.hua.com/huayu/chunjie.html">春节送花</a></div>
             <div class="Item_Brief"><a href="http://www.hua.com/huayu/17720.html" target="_blank">春节祝福送花，送这15种花，中国鲜花礼品网专业提供过年及春节鲜花花束、鲜花花篮及盆栽花卉配送服务。春节和过年是喜庆的日子，有许多适合主题的花卉。春节送花时人们都喜爱色彩鲜艳、大红大紫的花卉，寓意着新的一年有更好的气象，日子像这些花朵一样红艳艳！</a></div>
        
             <div class="Item_Title">
                <a href="http://www.hua.com/huayu/17694.html" class="left" target="_blank">爱情如何保鲜？结婚纪念日送花推荐！</a>
                <a target="_blank" class="right" href="http://www.hua.com/huayu/jiehunjinian.html">结婚纪念送花</a></div>
             <div class="Item_Brief"><a href="http://www.hua.com/huayu/17694.html" target="_blank">爱情如何保鲜？结婚纪念日送花推荐！确定了结婚纪念日送花的战术，对结婚纪念日送什么花还要认真筹划。毕竟在婚姻这次旅途上，距离和时间的不同，需要制定相应的“鲜花攻势”。更多结婚纪念日送花，尽在中国鲜花礼品网（花礼网）</a></div>
        
             <div class="Item_Title">
                <a href="http://www.hua.com/huayu/17686.html" class="left" target="_blank">新春根据家居风格来选年宵花！</a>
                <a target="_blank" class="right" href="http://www.hua.com/huayu/chunjie.html">春节送花</a></div>
             <div class="Item_Brief"><a href="http://www.hua.com/huayu/17686.html" target="_blank">新春根据家居风格来选年宵花！中国鲜花礼品网专业提供过年及春节鲜花花束、鲜花花篮及盆栽花卉配送服务。春节和过年是喜庆的日子，有许多适合主题的花卉。春节送花时人们都喜爱色彩鲜艳、大红大紫的花卉，寓意着新的一年有更好的气象，日子像这些花朵一样红艳艳！</a></div>
            
      <div class="separate"></div>
<!--分类推荐-->
     
 <div class="Home_Header Home_dot">分类推荐</div> 
     <div class="separate"></div> 
             <dl class="home_rec_cat">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/huayu/list_liwu.html">送礼</a>
                <a class="right" target="_blank" href="http://www.hua.com/huayu/list_liwu.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/huayu/10561.html" target="_blank">元旦送什么礼物？</a></dd><dd><a href="http://www.hua.com/huayu/17495.html" target="_blank">这些节日礼物所代表的寓意你都知道吗？</a></dd><dd><a href="http://www.hua.com/huayu/17494.html" target="_blank">挑什么礼物送给男性朋友？</a></dd><dd><a href="http://www.hua.com/huayu/16970.html" target="_blank">释放洪荒之力，教你如何拿下处女座MM</a></dd><dd><a href="http://www.hua.com/huayu/16555.html" target="_blank">最全送礼禁忌整理！</a></dd><dd><a href="http://www.hua.com/huayu/16419.html" target="_blank">职场中，如何给领导送礼？</a></dd><dd><a href="http://www.hua.com/huayu/16415.html" target="_blank">教你如何在结婚纪念日时，为爱人挑选礼物？</a></dd><dd><a href="http://www.hua.com/huayu/14899.html" target="_blank">2016年生日礼物新品推荐</a></dd>
             </dl>
        
              <dl class="home_rec_cat g-a4">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/huayu/shengri.html">生日送花</a>
                <a class="right" target="_blank" href="http://www.hua.com/huayu/shengri.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/huayu/16624.html" target="_blank">女朋友生日送永生花有没有推荐？</a></dd><dd><a href="http://www.hua.com/huayu/13891.html" target="_blank">未来婆婆生日送什么花？</a></dd><dd><a href="http://www.hua.com/huayu/17734.html" target="_blank">女朋友过生日送什么好？</a></dd><dd><a href="http://www.hua.com/huayu/17727.html" target="_blank">第一次给女朋友过生日送什么好？</a></dd><dd><a href="http://www.hua.com/huayu/16913.html" target="_blank">生日同城鲜花速递有哪些推荐？</a></dd><dd><a href="http://www.hua.com/huayu/16912.html" target="_blank">生日送花可以微信预订吗？</a></dd><dd><a href="http://www.hua.com/huayu/16621.html" target="_blank">生日送永生花可以吗？</a></dd><dd><a href="http://www.hua.com/huayu/16357.html" target="_blank">生日送花可以网上预定吗？</a></dd>
             </dl>
             <div class="separate_cat"></div>
        
             <dl class="home_rec_cat">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/huayu/jiqiao.html">送花艺术</a>
                <a class="right" target="_blank" href="http://www.hua.com/huayu/jiqiao.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/huayu/17744.html" target="_blank">送红玫瑰代表什么？花礼网经典红玫瑰花束推荐！</a></dd><dd><a href="http://www.hua.com/huayu/17743.html" target="_blank">永生花是什么？永生花是真花吗？它为什么叫永生花？</a></dd><dd><a href="http://www.hua.com/huayu/16891.html" target="_blank">六个表白技巧让你920表白节顺利脱单</a></dd><dd><a href="http://www.hua.com/huayu/16859.html" target="_blank">十二星座女喜欢什么花？给十二星座女适合送什么花？</a></dd><dd><a href="http://www.hua.com/huayu/16355.html" target="_blank">微信订花哪家好？送花微信公众号哪个靠谱？</a></dd><dd><a href="http://www.hua.com/huayu/16354.html" target="_blank">送花APP哪一个靠谱？APP订花方便吗？</a></dd><dd><a href="http://www.hua.com/huayu/16341.html" target="_blank">电商移动化，你会微信订鲜花吗？关注哪个微信公众号订鲜花比较好？</a></dd><dd><a href="http://www.hua.com/huayu/16339.html" target="_blank">看十二生肖收花如何反应？一图看出爱情运势</a></dd>
             </dl>
        
              <dl class="home_rec_cat g-a4">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/huayu/zhishi.html">鲜花常识</a>
                <a class="right" target="_blank" href="http://www.hua.com/huayu/zhishi.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/huayu/14593.html" target="_blank">2016，为12星座开运的12种花</a></dd><dd><a href="http://www.hua.com/huayu/12939.html" target="_blank">婚礼十大必备花卉</a></dd><dd><a href="http://www.hua.com/huayu/17644.html" target="_blank">黑魔术玫瑰和卡罗拉玫瑰的区别！</a></dd><dd><a href="http://www.hua.com/huayu/17634.html" target="_blank">啤酒花常识你知多少？</a></dd><dd><a href="http://www.hua.com/huayu/17628.html" target="_blank">家养花为何易萎焉？</a></dd><dd><a href="http://www.hua.com/huayu/17625.html" target="_blank">让长寿花多开花的三个方法！</a></dd><dd><a href="http://www.hua.com/huayu/17619.html" target="_blank">白掌（白雪公主）为何变绿色了？</a></dd><dd><a href="http://www.hua.com/huayu/17571.html" target="_blank">了解常见插花花材花语！</a></dd>
             </dl>
             <div class="separate_cat"></div>
        
             <dl class="home_rec_cat">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/huayu/shenghuo.html">鲜花生活</a>
                <a class="right" target="_blank" href="http://www.hua.com/huayu/shenghuo.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/huayu/17487.html" target="_blank">你见过秋色绣球的美吗？秋色绣球如何做干花？</a></dd><dd><a href="http://www.hua.com/huayu/15442.html" target="_blank">最能代表女神的花，你是哪一种？</a></dd><dd><a href="http://www.hua.com/huayu/13519.html" target="_blank">雾霾天，清除污染的最佳十大室内植物</a></dd><dd><a href="http://www.hua.com/huayu/17742.html" target="_blank">外面那么冷，家里这些植物却花开正艳呐</a></dd><dd><a href="http://www.hua.com/huayu/17740.html" target="_blank">现在种下这些球 来年家中花爆盆</a></dd><dd><a href="http://www.hua.com/huayu/17739.html" target="_blank">你家窗台还没变花园？只因缺了这6种花</a></dd><dd><a href="http://www.hua.com/huayu/11272.html" target="_blank">元旦的由来</a></dd><dd><a href="http://www.hua.com/huayu/17688.html" target="_blank">还在家里摆放绿植的你out啦，来看看植物控的新玩法</a></dd>
             </dl>
        
              <dl class="home_rec_cat g-a4">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/huayu/huayi.html">花卉花艺</a>
                <a class="right" target="_blank" href="http://www.hua.com/huayu/huayi.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/huayu/17749.html" target="_blank">如何区分进口永生花和国产永生花？</a></dd><dd><a href="http://www.hua.com/huayu/17491.html" target="_blank">花艺，先让色彩说话</a></dd><dd><a href="http://www.hua.com/huayu/17489.html" target="_blank">新手想学习花艺，该如何快速入门？</a></dd><dd><a href="http://www.hua.com/huayu/16428.html" target="_blank">教你如何制作一款简单的手捧花~</a></dd><dd><a href="http://www.hua.com/huayu/16421.html" target="_blank">花礼网新品永生花推荐，她怎会不喜欢？</a></dd><dd><a href="http://www.hua.com/huayu/17708.html" target="_blank">红心海棠叶子边缘枯了是什么原因？</a></dd><dd><a href="http://www.hua.com/huayu/17683.html" target="_blank">开始插花前，你所需要知道的插花类型</a></dd><dd><a href="http://www.hua.com/huayu/17641.html" target="_blank">扶郎花这样搭配才好看！</a></dd>
             </dl>
             <div class="separate_cat"></div>
        
             <dl class="home_rec_cat">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/huayu/huayu.html">花语</a>
                <a class="right" target="_blank" href="http://www.hua.com/huayu/huayu.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/huayu/17747.html" target="_blank">永生花的花语是什么？送永生花有什么寓意！</a></dd><dd><a href="http://www.hua.com/huayu/17488.html" target="_blank">多头康乃馨的花语是什么？</a></dd><dd><a href="http://www.hua.com/huayu/10550.html" target="_blank">蓝色妖姬花语和寓意是什么？</a></dd><dd><a href="http://www.hua.com/huayu/10807.html" target="_blank">薰衣草花语是什么？</a></dd><dd><a href="http://www.hua.com/huayu/11558.html" target="_blank">百合花语，百合花怎么养？</a></dd><dd><a href="http://www.hua.com/huayu/11044.html" target="_blank">白玫瑰花语，送白玫瑰代表什么意思？</a></dd><dd><a href="http://www.hua.com/huayu/10961.html" target="_blank">彼岸花的花语</a></dd><dd><a href="http://www.hua.com/huayu/10885.html" target="_blank">满天星花语</a></dd>
             </dl>
        
              <dl class="home_rec_cat g-a4">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/huayu/list_zhufuyu.html">祝福语大全</a>
                <a class="right" target="_blank" href="http://www.hua.com/huayu/list_zhufuyu.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/huayu/13284.html" target="_blank">重阳节送花祝福语精选</a></dd><dd><a href="http://www.hua.com/huayu/20060119182956.htm" target="_blank">情人节祝福语（一）</a></dd><dd><a href="http://www.hua.com/huayu/20120525123201.htm" target="_blank">经典生日祝福语</a></dd><dd><a href="http://www.hua.com/huayu/20051116174222.htm" target="_blank">经典送花祝福语</a></dd><dd><a href="http://www.hua.com/huayu/17731.html" target="_blank">2017鸡年年会祝福语(二)</a></dd><dd><a href="http://www.hua.com/huayu/17730.html" target="_blank">2017鸡年年会祝福语(一)</a></dd><dd><a href="http://www.hua.com/huayu/17728.html" target="_blank">元旦节新年微信祝福语</a></dd><dd><a href="http://www.hua.com/huayu/17732.html" target="_blank">2017企业新年祝福语</a></dd>
             </dl>
             <div class="separate_cat"></div>
        
             <dl class="home_rec_cat">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/profile/media.html">媒体报道</a>
                <a class="right" target="_blank" href="http://www.hua.com/profile/media.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/profile/17371.html" target="_blank">鲜花助力920表白节，看花礼网如何玩转“920”？</a></dd><dd><a href="http://www.hua.com/profile/10413.html" target="_blank">中国鲜花礼品网，引领网上送花潮流</a></dd><dd><a href="http://www.hua.com/profile/17656.html" target="_blank">花礼网荣获中国电子商务行业门户大会鲜花礼品行业龙头奖</a></dd><dd><a href="http://www.hua.com/profile/17639.html" target="_blank">百易（花礼网）获2016年国家级高新技术企业认定</a></dd><dd><a href="http://www.hua.com/profile/17533.html" target="_blank">花礼网与"不要音乐"合作打造国内大型音乐旅行节目</a></dd><dd><a href="http://www.hua.com/profile/17190.html" target="_blank">教师节临近鲜花走俏   康乃馨仍然最抢手</a></dd><dd><a href="http://www.hua.com/profile/16165.html" target="_blank">花礼网携手陌陌礼物商城推出鲜花即时送</a></dd><dd><a href="http://www.hua.com/profile/15419.html" target="_blank">花礼网微电影《勇敢爱》倾情巨献</a></dd>
             </dl>
        
              <dl class="home_rec_cat g-a4">
                <dd class="header">
                <a class="left" target="_blank" href="http://www.hua.com/profile/gdsj.html">感动瞬间</a>
                <a class="right" target="_blank" href="http://www.hua.com/profile/gdsj.html">更多&gt;&gt;</a>
                </dd>
                 <dd><a href="http://www.hua.com/profile/17387.html" target="_blank">希望你永远自由自在</a></dd><dd><a href="http://www.hua.com/profile/16994.html" target="_blank">爱你如初</a></dd><dd><a href="http://www.hua.com/profile/16888.html" target="_blank">我们一直在你身边</a></dd><dd><a href="http://www.hua.com/profile/16838.html" target="_blank">《38℃》</a></dd><dd><a href="http://www.hua.com/profile/16781.html" target="_blank">在最好的年华遇见你</a></dd><dd><a href="http://www.hua.com/profile/16714.html" target="_blank">我永远的小公举</a></dd><dd><a href="http://www.hua.com/profile/16701.html" target="_blank">相见恨晚，时间未晚。</a></dd><dd><a href="http://www.hua.com/profile/16679.html" target="_blank">你愿意成为我的爱侣吗？</a></dd>
             </dl>
             <div class="separate_cat"></div>
        
        
    
    <div class="separate"></div>
    <!--最新文章-->
   <div class="Home_Header Home_dot"><a class="right" style="float:right" target="_blank" href="http://www.hua.com/huayu/zuixin.html">更多&gt;&gt;</a>最新文章</div>
            
        
            <div class="Item_Title">
             <a class="left" href="http://www.hua.com/huayu/17756.html" target="_blank">过年买的花这么养，3个月又能开爆！</a>
             <a target="_blank" class="right" href="http://www.hua.com/huayu/yanghua_03.html">绿植养护</a>
             </div>
            <div class="Item_Brief"><a href="http://www.hua.com/huayu/17756.html" target="_blank">过年买的花这么养，3个月又能开爆！中国鲜花礼品网专业提供绿植养护知识,绿色植物养护技巧,办公室及家庭常见室内绿色植物养护知识。</a></div>
        
            <div class="Item_Title">
             <a class="left" href="http://www.hua.com/huayu/17755.html" target="_blank">水仙花的叶子长了能剪掉吗？叶子垂下来了怎么办？</a>
             <a target="_blank" class="right" href="http://www.hua.com/huayu/yanghua_02.html">花卉盆栽养护</a>
             </div>
            <div class="Item_Brief"><a href="http://www.hua.com/huayu/17755.html" target="_blank">水仙花的叶子长了能剪掉吗？叶子垂下来了怎么办？ 中国鲜花礼品网专业提供花卉养护知识、盆栽花卉保养技巧、室内花卉养护方法。</a></div>
        
            <div class="Item_Title">
             <a class="left" href="http://www.hua.com/huayu/17754.html" target="_blank">情人节送11朵玫瑰花代表什么意思？</a>
             <a target="_blank" class="right" href="http://www.hua.com/huayu/qingrenjie.html">情人节送花</a>
             </div>
            <div class="Item_Brief"><a href="http://www.hua.com/huayu/17754.html" target="_blank">情人节送11朵玫瑰花代表什么意思？中国鲜花礼品网专业提供2月14日情人节送花服务，数百款情人节鲜花任您选择：玫瑰花束,玫瑰花盒，玫瑰花篮，适合送给爱人、恋人、妻子、情人，款式新颖，花艺精美！</a></div>
        
            <div class="Item_Title">
             <a class="left" href="http://www.hua.com/huayu/17753.html" target="_blank">情人节送19朵玫瑰花代表什么意思？</a>
             <a target="_blank" class="right" href="http://www.hua.com/huayu/qingrenjie.html">情人节送花</a>
             </div>
            <div class="Item_Brief"><a href="http://www.hua.com/huayu/17753.html" target="_blank">情人节送19朵玫瑰花代表什么意思？,214情人节订花送花服务?中国鲜花礼品网专业提供2月14日情人节送花服务，数百款情人节鲜花任您选择：玫瑰花束,玫瑰花盒，玫瑰花篮，适合送给爱人、恋人、妻子、情人，款式新颖，花艺精美！</a></div>
        
            <div class="Item_Title">
             <a class="left" href="http://www.hua.com/huayu/17752.html" target="_blank">情人节，十二星座爱情密语</a>
             <a target="_blank" class="right" href="http://www.hua.com/huayu/qingrenjie.html">情人节送花</a>
             </div>
            <div class="Item_Brief"><a href="http://www.hua.com/huayu/17752.html" target="_blank">情人节，十二星座爱情密语,214情人节订花送花服务?中国鲜花礼品网专业提供2月14日情人节送花服务，数百款情人节鲜花任您选择：玫瑰花束,玫瑰花盒，玫瑰花篮，适合送给爱人、恋人、妻子、情人，款式新颖，花艺精美！</a></div>
        
            <div class="Item_Title">
             <a class="left" href="http://www.hua.com/huayu/17751.html" target="_blank">送恋人什么花好？送什么花代表什么意思？</a>
             <a target="_blank" class="right" href="http://www.hua.com/huayu/forgirl.html">给女朋友送花</a>
             </div>
            <div class="Item_Brief"><a href="http://www.hua.com/huayu/17751.html" target="_blank">在浪漫的节日或者是女朋友的生日，很多人都会送一束鲜花，大多是玫瑰。其实，不一定要每次都送玫瑰花束的，有时候送其他花束或者是玫瑰搭配其他鲜花的花款，更能给女朋友惊喜。</a></div>
        
            <div class="Item_Title">
             <a class="left" href="http://www.hua.com/profile/17750.html" target="_blank">花礼网2017年年会晚宴圆满结束——花礼花礼，有爱有你</a>
             <a target="_blank" class="right" href="http://www.hua.com/profile/news.htm">公司动态</a>
             </div>
            <div class="Item_Brief"><a href="http://www.hua.com/profile/17750.html" target="_blank">花礼网2017年年会晚宴圆满结束——花礼花礼，有爱有你-中国鲜花礼品网公司动态</a></div>
        
            <div class="Item_Title">
             <a class="left" href="http://www.hua.com/huayu/17746.html" target="_blank">郁金香|选好年宵花，鸿运迎回家</a>
             <a target="_blank" class="right" href="http://www.hua.com/huayu/huayu.html">花语</a>
             </div>
            <div class="Item_Brief"><a href="http://www.hua.com/huayu/17746.html" target="_blank">郁金香饱满柔嫩舒展大气
是胜利美好的象征
红色是过年最鲜花最具代表性的颜色
寓意吉祥如意，平安喜乐</a></div>
                
    
 <div class="separate"></div>
 
<!-- 分享到start -->

<div class="fenxiang">

<!-- Baidu Button BEGIN -->

<div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1486879013600">
    
    <a href="http://www.hua.com/huayu/#" class="bds_more" data-cmd="more">分享到:</a>
    <a href="http://www.hua.com/huayu/#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
    <a href="http://www.hua.com/huayu/#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
    <a href="http://www.hua.com/huayu/#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
    <a href="http://www.hua.com/huayu/#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
    <a href="http://www.hua.com/huayu/#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
    

</div>
<script>window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "0", "bdSize": "24" }, "share": {}, "image": { "viewList": ["tsina", "tqq", "qzone", "sqq", "weixin"], "viewText": "分享到：", "viewSize": "16" }, "selectShare": { "bdContainerClass": null, "bdSelectMiniList": ["tsina", "tqq", "qzone", "sqq", "weixin"] } }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];

</script>
<!-- Baidu Button END -->

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
<!-- 花语大全 -->

   
    <div class="hybk_titbox">
<div class="title">花语分类导航</div>
<div class="borderct">
<div class="incontent">
    
<ul class="bk_menu">
    
             <li class="first"><a href="http://www.hua.com/huayu/list_xianhua.html" target="_blank">送花</a></li>
            <li><dl>
            <dd><a href="http://www.hua.com/huayu/jiehun.html" target="_blank">结婚送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/story.html" target="_blank">送花故事分享</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/shengri.html" target="_blank">生日送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/jiqiao.html" target="_blank">送花艺术</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/zhishi.html" target="_blank">鲜花常识</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/shenghuo.html" target="_blank">鲜花生活</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/huayi.html" target="_blank">花卉花艺</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/huayu.html" target="_blank">花语</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/shangwu.html" target="_blank">商务送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/huadian.html" target="_blank">花店经营</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/daoqian.html" target="_blank">道歉送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/kaiye.html" target="_blank">开业送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/qiaoqian.html" target="_blank">乔迁送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/shengzi.html" target="_blank">生子送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tanbing.html" target="_blank">探病送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/biye.html" target="_blank">毕业送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/jiehunjinian.html" target="_blank">结婚纪念送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forgirl.html" target="_blank">给女朋友送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forfriend.html" target="_blank">给朋友送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forleader.html" target="_blank">给领导送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forkids.html" target="_blank">给孩子送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forelder.html" target="_blank">给长辈送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forteacher.html" target="_blank">给老师送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/formate.html" target="_blank">给同事送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forclient.html" target="_blank">给客户送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forparent.html" target="_blank">给父母送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forwife.html" target="_blank">给妻子送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/forrelative.html" target="_blank">给亲属送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/yidisonghua.html" target="_blank">异地送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/zhushousonghua.html" target="_blank">祝寿送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/qiuhunsonghua.html" target="_blank">求婚送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/biaobaisonghua.html" target="_blank">求爱表白送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/guanggunjie.html" target="_blank">光棍节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/ganenjie.html" target="_blank">感恩节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/shengdanjie.html" target="_blank">圣诞节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/chunjie.html" target="_blank">春节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/qingrenjie.html" target="_blank">情人节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/sanbajie.html" target="_blank">三八妇女节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/muqingjie.html" target="_blank">母亲节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/fuqingjie.html" target="_blank">父亲节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/qixijie.html" target="_blank">七夕节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/jiaoshijie.html" target="_blank">教师节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/zhongqiujie.html" target="_blank">中秋节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/hushijie.html" target="_blank">护士节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/duanwujie.html" target="_blank">端午节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/chongyangjie.html" target="_blank">重阳节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/yuanxiaojie.html" target="_blank">元宵节送花</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/whiteday.html" target="_blank">白色情人节送花</a></dd>
            </dl></li>
        
             <li class="first"><a href="http://www.hua.com/huayu/list_dangao.html" target="_blank">蛋糕常识</a></li>
            <li><dl></dl></li>
        
             <li class="first"><a href="http://www.hua.com/huayu/list_liwu.html" target="_blank">送礼</a></li>
            <li><dl>
            <dd><a href="http://www.hua.com/huayu/tolingdao.html" target="_blank">送领导生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tozhangbei.html" target="_blank">送长辈生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/totongshi.html" target="_blank">送同事生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tomuqing.html" target="_blank">送母亲生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tonvyou.html" target="_blank">送女朋友生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tonanyou.html" target="_blank">送男朋友生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tokehu.html" target="_blank">送客户生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/togongsi.html" target="_blank">送员工生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/topengyou.html" target="_blank">送朋友生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/toxiaohai.html" target="_blank">送小孩生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tofuqing.html" target="_blank">送父亲生日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tosongli.html" target="_blank">送礼艺术</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tozhinan.html" target="_blank">生日礼物指南</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/tojieri.html" target="_blank">节日礼物</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/toqizi.html" target="_blank">送妻子生日礼物</a></dd>
            </dl></li>
        
             <li class="first"><a href="http://www.hua.com/huayu/list_zhufuyu.html" target="_blank">祝福语大全</a></li>
            <li><dl></dl></li>
        
             <li class="first"><a href="http://www.hua.com/huayu/yanghua.html" target="_blank">养花</a></li>
            <li><dl>
            <dd><a href="http://www.hua.com/huayu/yanghua_01.html" target="_blank">鲜花养护</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/yanghua_02.html" target="_blank">花卉盆栽养护</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/yanghua_03.html" target="_blank">绿植养护</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/huahuidaquan.html" target="_blank">花卉大全</a></dd>
            
            <dd><a href="http://www.hua.com/huayu/xianqiehua.html" target="_blank">常用鲜切花专辑</a></dd>
            </dl></li>
        
</ul>

</div>
</div>

<div class="imgbottom"></div>
</div>

<!-- 花语大全END -->
</div>

</div>

<!-- 中部内容结束 -->
<div style="clear:both"></div>
@endsection	
	<!-- 尾部导航 -->
	
	<!-- 通用尾部 End -->


