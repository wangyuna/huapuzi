@extends('home.layout.index') 
    @section('js')
    <script charset="utf-8" src="/h/js/v.js"></script>
    <script src="/h/js/hm.js"></script>
    <script type="text/javascript" src="/h/images/CheckAgent"></script>
    @endsection
    @section('css')
    <link rel="icon" href="http://www.hua.com/favicon.ico" mce_href="/favicon.ico" type="image/x-icon">
    
    <link type="text/css" rel="stylesheet" href="/h/css/common.css">
    <link type="text/css" rel="stylesheet" href="/h/css/public.css">
    
    <style type="text/css">
        .email_autocomplete1 {
            position: relative;
            display: inline-block;
        }

            .email_autocomplete1 input {
                width: 304px;
                height: 40px;
                padding: 10px;
                border: 1px solid #d2d2d2;
            }

            .email_autocomplete1 ul {
                margin: 0;
                padding: 0;
                position: absolute;
                left: 0px;
                border: #ddd0d0 1px solid;
                background-color: #fefefe;
                overflow: hidden;
                z-index: 999;
            }

                .email_autocomplete1 ul .curr {
                    background-color: #e7f4fd;
                }

                .email_autocomplete1 ul .note {
                    color: #777777;
                    cursor: auto;
                }

                .email_autocomplete1 ul li {
                    margin: 0;
                    padding: 0;
                    height: 20px;
                    line-height: 20px;
                    list-style: none;
                    padding-left: 5px;
                    cursor: pointer;
                }
                .logMethod {
                    float: right;
                    margin-right: 38px;
                    color: #ff6a00;
                    font-size: 12px;
                    margin-bottom: 10px;
                }

                a.logMethod {
                    text-decoration: none;
                }

                a.logMethod:hover {
                    text-decoration: underline;
                }
                .SMScodes {
                    position: relative;
                    display: inline-block;
                    float: left;
                }
                .SMScodes input {
                    width: 182px;
                    height: 40px;
                    padding: 10px;
                    border: 1px solid #d2d2d2;
                }
                .btnSend{
                    height: 40px;
                    margin-left: 7px;
                    width: 115px;
                    border: 0;
                    background: #FFAD0D;
                    border-radius: 5px;
                    color: #fff;
                    margin-left: 3px\9;
                    vertical-align: middle;
                }
                .btnSend:hover {
                    background: #faa500;
                }
                .login-box .login-panel .login-notice{margin-top: 0;}
                .csqh{
                    margin-top: -9px;
                    font-size: 26px;
                    color: #444;
                }
</style>

    <!--[if lt IE 9]>
        <script src="http://img02.hua.com/pc/assets/js/html5shiv.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="/h/css/layer.css" id="layuicss-skinlayercss">
@endsection

    <!-- 顶部导航 -->
    
    
    <!-- 顶部导航 End -->
    <!-- 头部 -->
    
    <!-- 头部 End -->
    

@section('content')
<div class="login-wrapper">
    <input type="hidden" id="errorMsg">
    <div class="container">
        <div class="login-box">
            <ul class="login-tabs">
                <li class="active"><a href="javascript:void(0)">实名认证</a></li>
            </ul>


            <!-- 登录/注册tab End -->
            <!-- <a href="javascript:void(0);" class="logMethod">使用手机号码注册</a><div style="clear:both;"></div> -->
            <form action="/home/att/insert" method="post" name="regForm" id="regForm">
                {{ csrf_field()}}
                <div class="tab-content">
                    <!-- 注册 -->
                    <div id="registerPane" class="tab-pane login-panel fade in active">
                        <div class="login-notice" id="Enr" style="display:none;"></div>
                        <div class="form-group">
                            <div class="email_autocomplete1">
                            <input name="email" autocomplete="off" placeholder="请填写您的Email地址" nodetype="email" value="" type="email" id="Email" config="{width:304,height:40}">
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="password" id="PassWord" type="text" class="form-control" placeholder="请输入您的身份证号码">
                        </div>
                        <div class="form-group">
                            <input id="RexPassWord" name="repassword" type="text" class="form-control" placeholder="再次输入您的身份证号码">
                        </div>
                        <div class="form-group verify">
                            <input type="hidden" name="action" value="reg">
                            <input id="Validate_Code" name="Validate_Code" maxlength="4" type="text" class="form-control" placeholder="验证码">
                            <img src="/code" id="imgCaptcha" height="36" width="100" title="点击更换" onclick="this.src=this.src+'?a=1'">
                            <a class="refresh" href="javascript:RefreshImage('imgCaptcha');">看不清,换一张</a>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="button" onclick="return Check_User_Login();">立即认证</button>
                    </div>
                    <!-- 注册 End -->
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
    <!--底部-->
    <!-- 尾部导航 -->
    
    <!-- 尾部导航 End -->
    <!-- 尾部帮助 -->
    
    <!-- 尾部帮助 End -->
    <!-- 通用尾部 -->
    
    <!-- 通用尾部 End -->
    <!-- 弹出窗口-->
    
    <!-- 弹出窗口end-->
    <!-- 友情链接 -->
    
    <!-- 友情链接 End -->
    @section('js1')
    <script type="text/javascript" src="/h/js/common.js"></script>
    
    <script src="/h/js/mailautocomplete.js"></script>
    <script>
        $(function () {
            var errorInfo = $.trim($("#errorMsg").val());
            if (errorInfo != "") {
                alert(errorInfo);
            }

        });
        function RefreshImage(valImageId) {
            var objImage = document.getElementById(valImageId)
            if (objImage == undefined) {
                return;
            }
            var now = new Date();
            objImage.src = '/Passport/Register/BaseImageValidCode?x=' + now.toUTCString();
        }

        $(window.parent.document).find("#attPage").load(function () {
            var main = $(window.parent.document).find("#attPage");
            var thisheight = $(document).height();
            main.height(thisheight < 410 ? 410 : thisheight);
        });

        function Check_Reg() {
            var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789_-";
            var checkStr = myform.UserName.value;
            var allValid = true;
            var validGroups = true;
            for (i = 0; i < checkStr.length; i++) {
                ch = checkStr.charAt(i);
                for (j = 0; j < checkOK.length; j++)
                    if (ch == checkOK.charAt(j))
                        break;
                if (j == checkOK.length) {
                    allValid = false;
                    break;
                }
            }
            return allValid;
        }

        //检查EMAIL
        function Check_Email() {
            HideTips();
            if (document.getElementById("Email").value.length < 1) {
                ShowTips("请输入你的Email地址!");
                return false;
            } else if ((/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/gi).test($("#Email").val()) == false) {
                ShowTips("请输入有效的Email地址!");
                return false;
            }
            else {
                var ret = $.ajax(
                    {
                        url: "/Passport/Register/IsExistEmail?username=" + document.getElementById("Email").value,
                        async: false
                    }).responseText;
                if (ret == 0) {
                    ShowTips("对不起，该用户名已经被人占用!");
                    return false;
                }
            }
            return true;
        }

        //检查密码
        function ChangePassword() {
            HideTips();
            var pwd = document.getElementById("PassWord").value;
            if (pwd == null || pwd.length < 6) {
                ShowTips("此项为必填项，密码不能小于6位");
                return false;
            }
            return true;
        }
        //检查重新输出密码
        function Check_RePassWord() {
            HideTips();
            var PassWord = document.getElementById("PassWord");
            var RexPassWord = document.getElementById("RexPassWord");
            if ((RexPassWord.value == "") || (PassWord.value != RexPassWord.value)) {
                ShowTips("两次输入密码不一致，请重新输入！");
                return false;
            } else {
            }
            return true;
        }

        //检查验证码
        function CheckValidateCode() {
            HideTips();
            var Validate_Code = document.getElementById("Validate_Code");
            if ((Validate_Code.value == "") || (Validate_Code.value.length < 4)) {
                ShowTips("请输入正确的验证码");
                return false;
            }
            //else{
            //      return xmlcheckeVCode00(Validate_Code.value);
            //  }
            return true;
        }

        //提交再次验证
        function Check_User_Login() {
            //  alert("Check_Email():"+Check_Email());
            if (!Check_Email()) return false;
            //  alert("ChangePassword():"+ChangePassword());
            if (!ChangePassword()) return false;
            //  alert("Check_RePassWord():"+Check_RePassWord());
            if (!Check_RePassWord()) return false;
            //  alert("CheckValidateCode():"+CheckValidateCode());
            if (!CheckValidateCode()) return false;
            $("#regForm").submit();
        }

        function ChangeImg1() {
            $("#Img1").attr("src", "/Passport/Register/BaseImageValidCode?" + Math.random());
        }
        function ShowTips(nr) {
            $("#Enr").html("<div class=\"notice-cont\"><span class=\"ico ico-notice\"></span>" + nr + "</div>");
            $("#Enr").show();
        }
        function HideTips() {
            $("#Enr").hide();
        }
    </script>

    <script type="text/javascript">
        var oForm1 = document.getElementById('regForm');
        var oForm1Inputs = oForm1.getElementsByTagName('input');
        for (var i = 0; i < oForm1Inputs.length; i++) {
            placeHolder(oForm1Inputs[i], true);
        }

        function placeHolder(obj, span) {
            if (!obj.getAttribute('placeholder')) return;
            var imitateMode = span === true ? true : false;
            var supportPlaceholder = 'placeholder' in document.createElement('input');
            if (!supportPlaceholder) {
                var defaultValue = obj.getAttribute('placeholder');
                if (!imitateMode) {
                    obj.onfocus = function () {
                        (obj.value == defaultValue) && (obj.value = '');
                        obj.style.color = '';
                    }
                    obj.onblur = function () {
                        if (obj.value == defaultValue) {
                            obj.style.color = '';
                        } else if (obj.value == '') {
                            obj.value = defaultValue;
                            obj.style.color = '#A6A6A6';
                        }
                    }
                    obj.onblur();
                } else {
                    var placeHolderCont = document.createTextNode(defaultValue);
                    var oWrapper = document.createElement('span');
                    oWrapper.style.cssText = 'position:absolute; color:#A6A6A6; display:inline-block; overflow:hidden;';
                    oWrapper.className = 'wrap-placeholder';
                    oWrapper.style.fontFamily = getStyle(obj, 'fontFamily');
                    oWrapper.style.fontSize = getStyle(obj, 'fontSize');
                    oWrapper.style.marginLeft = parseInt(getStyle(obj, 'marginLeft')) ? parseInt(getStyle(obj, 'marginLeft')) + 3 + 'px' : 3 + 'px';
                    oWrapper.style.marginTop = parseInt(getStyle(obj, 'marginTop')) ? getStyle(obj, 'marginTop') : 1 + 'px';
                    oWrapper.style.paddingLeft = getStyle(obj, 'paddingLeft');
                    oWrapper.style.width = obj.offsetWidth - parseInt(getStyle(obj, 'marginLeft')) + 'px';
                    oWrapper.style.height = obj.offsetHeight + 'px';
                    oWrapper.style.lineHeight = obj.nodeName.toLowerCase() == 'textarea' ? '' : obj.offsetHeight + 'px';
                    oWrapper.appendChild(placeHolderCont);
                    obj.parentNode.insertBefore(oWrapper, obj);
                    oWrapper.onclick = function () {
                        obj.focus();
                    }

                    if (typeof (obj.oninput) == 'object') {
                        obj.addEventListener("input", changeHandler, false);
                    } else {
                        obj.onpropertychange = changeHandler;
                    }
                    function changeHandler() {
                        oWrapper.style.display = obj.value != '' ? 'none' : 'inline-block';
                    }

                    function getStyle(obj, styleName) {
                        var oStyle = null;
                        if (obj.currentStyle)
                            oStyle = obj.currentStyle[styleName];
                        else if (window.getComputedStyle)
                            oStyle = window.getComputedStyle(obj, null)[styleName];
                        return oStyle;
                    }
                }
            }
        }
        //回车键
        document.onkeydown = function (event) {
            var e = event || window.event || arguments.callee.caller.arguments[0];
            if (e && e.keyCode == 13) {
                var isFocus = $("#Email").is(":focus");
                if (isFocus) {
                    $("#PassWord").focus();
                    return false;
                }
                else {
                    Check_User_Login();
                }
            }
        };
        //********************手机号码注册********************
        var interval = null
        var counter = 0;
        $(function(){
            $("#regForm2").hide();
            $(".logMethod").click(function () {
                if ($(this).text() == "使用邮箱注册") {
                    $(this).text("使用手机号码注册");
                    $("#regForm").show();
                    $("#regForm2").hide();
                } else {
                    $(this).text("使用邮箱注册");
                    $("#regForm").hide();
                    $("#regForm2").show();
                }
            });
            $("#getcode").click(function () {
                $("#phoneErr").hide();
                if ($("#phone").val().length < 11) {
                    $("#phoneErr").html("<div class=\"notice-cont\"><span class=\"ico ico-notice\"></span>请输入手机号</div>").show();
                    return;
                }
                if (!($("#phoneLoginValidCode").is(":hidden")) && ($("#phoneLoginValidCode").val().length < 2)) {
                    $("#phoneErr").html("<div class=\"notice-cont\"><span class=\"ico ico-notice\"></span>请输入图像验证码</div>").show();
                    return;
                }
                var phone = $("#phone").val();
                var imgCode = $("#phoneLoginValidCode").val();
            });
        });
        function intervalFunc() {
            if (counter > 90) {
                counter = 0;
                $("#getcode").show();
                $("#prompt_info").hide();
                window.clearInterval(interval);
            } else {
                $("#regetcode").html((90 - counter).toString());
            }
            counter = counter + 1;
        }
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
// 这儿加了一个判断

         if({{ session('status') }} == 1) {
            alert('实名认证成功');
        }else{
            alert('实名认证失败');
        }
    </script>
    @endsection
