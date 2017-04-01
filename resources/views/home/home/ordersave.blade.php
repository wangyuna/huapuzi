@extends('home.layout.index')
@section('music') 
@endsection  
@section('header')
<header style="width: 990px;">
        <div class="logo">

            <h1><a href="/home" style="background:url(/uploads/{{ session('config')[0]['logo'] }}) 0 0 no-repeat;;"></a></h1>
            <i></i>
            
    <h2>中国鲜花礼品网 始于2005，简称花礼网</h2>

        </div>
        
        <div class="service">
            <span class="ico ico-phone"></span>400-889-8188
            <a href="" target="_blank"><span class="ico ico-headset"></span>在线客服</a>
        </div>
    </header>
@endsection
    @section('css')
    <link type="text/css" rel="stylesheet" href="/h/css/common.css">
    <link type="text/css" rel="stylesheet" href="/h/css/public.css">
    @endsection
    <!--[if lt IE 9]>
        <script src="http://img02.hua.com/pc/assets/js/html5shiv.min.js"></script>
    <![endif]-->

    <!-- 头部 End -->
    
@section('content')
<div class="container" style="width: 990px;">
    <div class="pay-info-wrap">
        <div class="pay-info">
            <div class="info-l">
                <h5>订单提交成功，请您尽快付款！</h5>
                <p><i>订单号：{{ $arr['order_num'] }}</i><i>应付金额：<em><b>{{ $arr['totalMoney'] }}</b> 元</em></i></p>
                <p>
                    <a href="javascript:void(0);" class="order-btn">订单详情 <span class="glyphicon glyphicon-triangle-bottom glyphicon-triangle-top"></span></a>
                    <a href="/home/dingdan" class="order-btn">查看订单 </a>
                </p>
            </div>
            <div class="info-r">
                <div class="pay-qrcode">
                    <img src="/h/images/gzpic.aspx" height="78" width="78">
                </div>
                <div class="pay-qrcode-text">
                    <h5>微信扫码关注 <span class="ico ico-weixin-pay"></span></h5>
                    <p class="text-primary">订单送达后，第一时间收到微信通知</p>
                    <p class="text-muted">* 此二维码中已含用户信息，留意仅供本人扫码</p>
                </div>
            </div>
        </div>
        <div class="order-details" style="display: block;">

            收货地址：{{ $arr2['to_state'] }}{{ $arr2['to_city'] }} {{ $arr2['to_address'] }}    收货人：{{ $arr2['to_name'] }} {{ $arr2['to_mobile'] }} 配送时间：{{ $arr1['send_riqi'] }}<br>

            商品名称：@foreach(session('cart') as $v) {{ $v['title'] }}; @endforeach
        </div>
    </div>
            <div class="cart-panel">
                <div class="hd"><h3>国内银行在线支付</h3></div>
                <div class="bd">
                    <ul class="bank-list">
                        <li><a href="http://www.hua.com/Pays/Cmbchina/Pay?OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="招商银行"><i class="pay-platform bank01"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=ICBC-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="工商银行"><i class="pay-platform bank02"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=ABC-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="农业银行"><i class="pay-platform bank03"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=CCB-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="建设银行"><i class="pay-platform bank04"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=BOCO-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="交通银行"><i class="pay-platform bank05"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=BOC-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="中国银行"><i class="pay-platform bank06"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=SPDB-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="上海浦发银行"><i class="pay-platform bank07"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=ECITIC-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="中信银行"><i class="pay-platform bank16"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=CEB-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="光大银行"><i class="pay-platform bank10"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=POST-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="中国邮政储蓄所"><i class="pay-platform bank11"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=SDB-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="深圳发展银行"><i class="pay-platform bank12"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=PINGANBANK-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="平安银行"><i class="pay-platform bank14"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=CMBC-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="民生银行"><i class="pay-platform bank08"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=BCCB-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="北京银行"><i class="pay-platform bank15"></i></a></li>
                        <li class="more"><a href="javascript:void(0);">更多银行</a></li>
                        <li class="hidden"><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=HXB-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="华夏银行"><i class="pay-platform bank17"></i></a></li>
                        <li class="hidden"><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=CIB-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="兴业银行"><i class="pay-platform bank09"></i></a></li>
                        <li class="hidden"><a href="http://www.hua.com/Pays/Yeepay/Pay?bankID=GDB-NET&OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank" title="广发银行"><i class="pay-platform bank13"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="cart-panel">
                <div class="hd"><h3>平台支付</h3></div>
                <div class="bd">
                    <ul class="third-party-list">
                        <li><a href="http://www.hua.com/Pays/Alipay/Pay?OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank"><i class="pay-platform third-party01 h50"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/WeiXinPay/Pay?OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank"><i class="pay-platform third-party02 h50"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/tenpay/Pay?OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank"><i class="pay-platform third-party03 h50"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/yeepay/Pay?OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank"><i class="pay-platform third-party04 h50"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="cart-panel">
                <div class="hd"><h3>外卡支付</h3><i>（支持PayPal帐户余额支付、全球VISA、Master卡、AE卡等信用卡在线快捷支付）</i></div>
                <div class="bd">
                    <ul class="internation-list">
                        <li><a href="http://www.hua.com/Pays/paypal/Pay?OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank"><i class="pay-platform third-party05 h50"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/paypal/Pay?OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank"><i class="pay-platform third-party06 h50"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/paypal/Pay?OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank"><i class="pay-platform third-party07 h50"></i></a></li>
                        <li><a href="http://www.hua.com/Pays/paypal/Pay?OrderID=178797468&OrderAmount=706&sign=d55b445928e6e1a7578ee1ad6b978503" target="_blank"><i class="pay-platform third-party08 h50"></i></a></li>
                    </ul>
                </div>
            </div>
            <ul class="pay-explain">
                <li>a.如果网上支付不成功，您不需要重新提交订单，您可以：</li>
                <ul>
                    <li>1、重新尝试网上支付，<a href="http://www.hua.com/member/payment/balancefill?orderid=178797468&orderamount=706" target="_blank">点击这里&gt;&gt;</a></li>
                    <li>2、如果本页面已关闭或需更换电脑支付，可点击网站首页的<a href="http://www.hua.com/member/payment/balancefill" target="_blank">“在线补款”</a>链接重新支付</li>
                    <li>3、选择其他付款方式：银行汇款/转帐、邮局汇款：<a href="http://www.hua.com/help/payment.htm" target="_blank">详情&gt;&gt;</a></li>
                </ul>
                <li>b.网上支付常见问题，请参考：<a href="http://www.hua.com/help/payment.htm" target="_blank">支付说明</a></li>
                <li>c.想查询订单是否支付成功，请点击：<a href="http://www.hua.com/ordercx/" target="_blank">订单状态查询</a></li>
            </ul>


    <form method="POST" action="/h/images/提交订单成功及支付提示 - 花礼网.html" id="form_chgpay" name="form_chgpay">
        <div style="border:1px solid #D9D9D9;background:#FFFFE8;padding:5px 0 0 10px;line-height:18px;height:55px;text-align:left;font-size:12px;margin:10px 0 0 0;">
            <br>
            &nbsp;&nbsp;&nbsp;<font color="#666666">&nbsp;注：如果当前支付方式不是您需要的，您可以更改：</font>
            <label>
                <input name="gmrid" type="hidden" value="">
                <input name="old_paytype" type="hidden" value="网上支付">
                <input name="old_sum" type="hidden" value="706">
                <input name="order_amount" type="hidden" value="706">
                <input name="payment" type="hidden" value="网上支付">
                <input name="lq3_code" type="hidden" value="">
                <input name="lq3_sum" type="hidden" value="0">
                <input name="lq3_status" type="hidden" value="no">
                <input name="chg_flag" type="hidden" value="yes">
                <select size="1" name="new_paytype">
                    <option value="网上支付">请选择付款方式</option>
                    <option value="网上支付">网上支付</option>
                    <option value="银行汇款">银行转帐/汇款</option>
                </select>
            </label>
            <label>
                <input name="imageField" type="image" src="/h/images/icon_change_paytype.gif" align="bottom" width="86" height="19" border="0">
            </label>
        </div><div style="height:20px;"></div>
    </form>
</div>

<!-- 密码修改弹出框 -->
<div class="modal fade com-modal" id="passwordModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">密码修改</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-group-sm">
                    <div class="form-group">
                        <label for="name" class="col-xs-3 control-label">用户名:</label>
                        <div class="col-xs-6">
                            <p class="form-control-static">2752889273@qq.com</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-xs-3 control-label">新密码:</label>
                        <div class="col-xs-6">
                            <input type="password" class="form-control" id="new_pass1" name="new_pass1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password2" class="col-xs-3 control-label">确认新密码:</label>
                        <div class="col-xs-6">
                            <input type="password" class="form-control" id="new_pass2" name="new_pass2">
                            <input type="hidden" name="Uemail" id="Uemail" value="2752889273@qq.com">
                            <input type="hidden" name="orderNo" id="orderNo" value="178797468">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <button type="button" class="btn btn-default btn-tinge" onclick="ModifyPassSubmit()">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 密码修改弹出框 End -->


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
                    <a href="http://www.hua.com/productpj/"><p>最近评价<font id="pjCount">197729</font>条</p></a>
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
    <!-- 服务 End -->
    <!-- 尾部导航 -->
    @endsection
    <!-- 通用尾部 End -->
    @section('js1')
    <script charset="utf-8" src="/h/js/v.js"></script><script src="/h/js/hm.js"></script><script type="text/javascript" src="/h/js/common.js"></script>
    <script type="text/javascript">
        $(function () {
            $.get("/Passport/Login/LoginState", null, function (data) {
                if (data != null && data.Logined == true) {
                    $("#btn-login").text(data.ShowName).attr("href", "/Member/MemberCenter/");
                    $("#btn-reg").text("退出").attr("href", "/Passport/Login/Loginout");
                }

            }, "json");
            $.getJSON("/shopping/GetCartJson", function (json) {    //购物车信息显示
                if ($("#gwcCount").length > 0) {
                    $("#gwcCount").html("(" + json.productsNum + ")");
                }
                if ($("#cart_num").length > 0) {
                    $("#cart_num").html(json.productsNum);
                }

                var cartInfo = '';
                if (json.productsNum == 0) {
                    cartInfo = '<div class="empty">您的购物车中没有商品，<a href="/">先去选购吧</a>！</div>'
                }
                else {
                    cartInfo = '<div class="cargo">'
                    $.each(json.datas, function (index, data) {
                        cartInfo = cartInfo + '<div class="com-list"><div class="img-box"><a href="/product/' + data.productCode + '.html" target="_blank"><img src="http://img01.hua.com/uploadpic/newpic/' + data.productCode + '.jpg_80x87.jpg" width="50" height="53"></a></div><div class="title"><a href="/product/' + data.productCode + '.html" target="_blank">' + data.productName + '</a></div><div class="num">' + data.productNum + '</div><div class="price"><span class="price-sign text-primary">&yen; </span><span class="price-num text-primary strong"> ' + data.productPrice + '</span></div></div>';
                    });
                    cartInfo = cartInfo + '<div class="settlement"><div class="total-price"><span><strong class="text-primary">' + json.productsNum + '</strong> 件总计:</span><span class="price-sign text-primary strong">&yen; </span><span class="price-num text-primary strong"> ' + json.productsMoney + '</span></div><a href="/shopping/showcart" class="btn btn-primary btn-sm" target="_blank">去购物车结算</a></div></div>';
                }
                if ($("#CartInfo").length > 0) { $("#CartInfo").html(cartInfo); }
            });
            if ($("#pjCount").length > 0) {
                $.get("/productpj/GetPJCount", function (data) {
                    $("#pjCount").text(data);
                })
            }
        });
    </script>
    


    <script type="text/javascript">
        $(function () {
            $('.order-btn').click(function () {
                $(this).find('span').toggleClass('glyphicon-triangle-top');
                $('.order-details').fadeToggle();
            });
            $('#passwordModal').modal({ backdrop: 'static', keyboard: false, show: false });
            $('.j-password').click(function () {
                $('#passwordModal').modal('show');
            });
            $('#passwordModal').on('shown.bs.modal', function () {
                var $this = $(this);
                var $modal_dialog = $this.find('.modal-dialog');
                $this.css('display', 'block');
                $modal_dialog.css({ 'margin-top': Math.max(0, ($(window).height() - $modal_dialog.height()) / 2) });
            });
            $('.bank-list .more').click(function () {
                $(this).hide();
                $(this).parent().find('li').removeClass('hidden');
            });
        });
        function ModifyPassSubmit() {
            var new_pass1 = $("#new_pass1").val();
            var new_pass2 = $("#new_pass2").val();
            var Uemail = $("#Uemail").val();
            var orderNo = $("#orderNo").val();
            if ((new_pass1 == "") || (new_pass1 != new_pass2)) {
                alert("两次输入密码不一致，请重新输入！");
                return;
            }
            var len = new_pass1.length;
            if (len < 6 || len > 16) {
                alert("密码长度在6位到16位之间！");
                return;
            }
            var rmd = Math.random();
            $.ajax({
                type: "GET",
                url: "/shopping/UserModifyPass",
                data: "new_pass1=" + new_pass1 + "&Uemail=" + Uemail + "&rmd=" + rmd,
                async: false,
                success: function (data) {
                    if (data == "0") {
                        alert("修改密码成功");
                        $('#passwordModal').modal('hide');
                    }
                    else if (data == "-2") {
                        alert("密码长度在6位到16位之间！");
                    }
                    else if (data == "-1") {
                        alert("密码中含有非法字符！");
                    }
                    else {
                        alert('修改密码失败。');
                    }
                }
            });
        }

        $("#PayGuanAiTong").click(function () {
            $.ajax({
                type: "post",
                url: "/pays/GuanAiTong/SendPay",
                data: {
                    OrderId:178797468,
                    Total:706,
                },
                async: false,
                success: function (data) {
                    if(data=="1"){
                        alert("非关爱通用户，请勿选择关爱通支付!");
                        return false;
                    }
                    else if (data=="2"){
                        $("#divShelf").show();
                        return false;
                    }
                    else{
                        window.location = "https://api.guanaitong.com/v3/pay/pay?" + data;
                    }
                }
            });
        });
    </script>
    @endsection
