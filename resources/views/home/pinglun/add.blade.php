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
<link rel="stylesheet" href="/x/css/jquery.nouislider.css">
<link rel="stylesheet" href="/x/css/minified.css">
  <script type="text/javascript" charset="utf-8" src="/e/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/e/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/e/lang/zh-cn/zh-cn.js"></script>

<style type="text/css">
    body{
        font-size:12px;
    }
</style>

<script type="text/javascript" src="/d/js/jquery.js?v=2016101103"></script>
<main id="main-content" role="main">
        <div style="margin-top:70px;margin-left:200px" class="container">
            <div class="row">
                
                    <section class="col-xs-12 col-sm-8 col-md-9">
                        <div id="checkout-collapse" class="panel-group checkout"  style='margin-top:-2px;'>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                            <span data-toggle="collapse">
                                                评论中心
                                            </span>
                                    </h4>
                                </div>
                                <div id="checkout-collapse2">
                                    <div class="panel-body">
                                        <form role="form" class="form-horizontal" action="/pinglun/insert" method="post">
                                            {{csrf_field()}}
                                             <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-10">
                                                    <div class="form-group stylish-input">
                                                        <label class="col-sm-4 col-lg-4 control-label required" for="inputFirstname">名称</label>
                                                        <div class="col-sm-8 col-lg-8">
                                                            <span>{{ $data['title'] }}</span>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="gid" value="{{ $data['gid'] }}">
                                                    <input type="hidden" name="id" value="{{ $data['id'] }}">
                                                    
                                                    
                                                    
                                                    <div class="form-group stylish-input">
                                                        <label class="col-sm-4 col-lg-4 control-label required" for="inputLastname">评分</label>
                                                        <div class="col-sm-8 col-lg-8">
                                                            <div id="profile_gender">
                                                                <input type="radio" id="profile_gender_0" name="grade" required="required" value="5"  checked >
                                                                <label for="profile_gender_0" class="required">五分</label>
                                                                <input type="radio" id="profile_gender_1" name="grade" required="required" value="4" >
                                                                <label for="profile_gender_1" class="required">四分</label>
                                                                <input type="radio" id="profile_gender_1" name="grade" required="required" value="3" >
                                                                <label for="profile_gender_1" class="required">三分</label>
                                                                <input type="radio" id="profile_gender_1" name="grade" required="required" value="2" >
                                                                <label for="profile_gender_1" class="required">二分</label>
                                                                <input type="radio" id="profile_gender_1" name="grade" required="required" value="1" >
                                                                <label for="profile_gender_1" class="required">一分</label>
                                                            </div>
                                                        </div>
                                                    </div>
\
                                                    <div class="form-group stylish-input">
                                                        <label class="col-sm-4 col-lg-4 control-label required" for="inputLastname">内容</label>
                                                        <div class="col-sm-8 col-lg-8">
                                                           <script id="editor" name="con" type="text/plain" style="width:410px;height:300px;"></script>
                                                        </div>
                                                    </div>
                                                     <div class="form-group stylish-input">
                                                        <label class="col-sm-4 col-lg-4 control-label required" for="inputLastname">是否匿名</label>
                                                        <div class="col-sm-8 col-lg-8">
                                                            <div id="profile_gender">
                                                                <input type="radio" id="profile_gender_0" name="status" required="required" value="1"  checked >
                                                                <label for="profile_gender_0" class="required">匿名</label>
                                                                <input type="radio" id="profile_gender_1" name="status" required="required" value="2" >
                                                                <label for="profile_gender_1" class="required">实名</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group stylish-input">
                                                        <label class="col-sm-4 col-lg-4 control-label" for="inputFax"></label>
                                                        <div class="col-sm-8 col-lg-8">
                                                            <button style="width:100%" class="btn btn-success">提交评论</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
    </main>
    <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
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