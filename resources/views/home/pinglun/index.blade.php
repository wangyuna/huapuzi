@extends('home.layout.index')

@section('css')

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
                <div class="dropdown-cate">
                <div>
                    <div class="leftNav" style="color:red;">
                    <ul>    
                        @foreach($res as $k=>$v)  
                        <li>
                            <div class="fj">
                                <span class="fl"><a href="/home/flower/{{ $v['id'] }}">{{ $v['name']}}</a></span>
                            </div>
                            <div class="zj" style="display: none;">
                                <div class="zj_l">
                                    @foreach($v['sub'] as $kk=>$vv)
                                    <div class="zj_l_c"> 
                                        <h2>{{ $vv['name']}}</h2>
                                            @foreach($vv['sub'] as $kkk=>$vvv)
                                            <a href="/home/type/{{ $vvv['id'] }}">{{ $vvv['name']}}</a>|
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
                </div>

            </div>
            </div>
        </div>
    </div>
    <ul class="nav">
        <li><a href="/home" target="_blank">首页</a></li>
        @foreach($res as $k => $v)
        <li><a href="/home/flower/{{ $v['id'] }}" target="_blank">{{ $v['name'] }}</a></li>
        @endforeach
    </ul>
</nav>
@endsection
<!-- 内容  -->
@section('content')

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