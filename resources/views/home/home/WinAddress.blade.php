


<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>收货人地址管理 - 花礼网</title>
    <link type="text/css" rel="stylesheet" href="/h/css/common.css">
    <link type="text/css" rel="stylesheet" href="/h/css/public.css">
    <!--[if lt IE 9]>
            <script src="http://img02.hua.com/pc/assets/js/html5shiv.min.js"></script>
        <![endif]-->
</head>
<body>
    <div id="consigneeModal">
        @if(!empty($res1))
        <form class="form-horizontal form-group-sm" id="addressOper" action="/sendinfo/edit" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="col-xs-2 control-label">收货人姓名:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control" id="to_name" name="to_name" value="{{ $res1[0]['to_name'] }}" maxlength="15">
                </div>
            </div>
            <div class="form-group">
                <label for="moblie" class="col-xs-2 control-label">收货人手机:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="to_mobile" name="to_mobile" value="{{ $res1[0]['to_mobile'] }}" maxlength="25">
                </div>
                <label for="phone" class="col-xs-1 control-label">或电话:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="to_tel" name="to_tel" value="" maxlength="25">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2 control-label">省 市 区:</label>
                <div class="col-xs-9" id="city_1">
                    <div class="col-xs-4">
                        <select class="form-control" id="to_state" name="to_state"></select>
                    </div>
                    <div class="col-xs-4">
                        <select class="form-control" id="to_city" name="to_city" disabled="disabled"></select>
                    </div>
                    <span class="help-block col-xs-12">注：县级及以上城市均可配送 (新/藏/青/甘/内蒙偏远地区的县城例外)</span>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-xs-2 control-label">详细地址:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="to_address" name="to_address" value="{{ $res1[0]['to_address'] }}" maxlength="120">
                </div>
            </div>
            <div class="form-group" id="psfChoose">
                <label class="col-xs-2 control-label">选配送费用:</label>
                <div class="col-xs-10">
                    <ul class="selects-list" id="distrExpenses">
                        <li @if($res1[0]['peisongfei'] == 0) class="active" @endif id="0">市区(免费)<i class="ico ico-check"></i></li>
                        <li @if($res1[0]['peisongfei'] == 30) class="active" @endif id="30">郊区(+30元)<i class="ico ico-check"></i></li>
                        <li @if($res1[0]['peisongfei'] == 50) class="active" @endif id="50">远郊(+50元)<i class="ico ico-check"></i></li>
                    </ul>
                    <span class="help-block">注：偏远地区请咨询客服，<a href="/help/send_zone.htm" target="_blank">市区/郊区列表</a></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <input type="hidden" name="peisongfei" id="peisongfei" value="0">
                    <input type="hidden" name="id" id="ca" value="{{ $res1[0]['id'] }}">
                    <button type="button" class="btn btn-default btn-tinge" onClick="return confirmForm();" id="dosubmit">保存收货人信息</button>
                    <button type="button" class="btn btn-default btn-tinge" disabled="disabled" style="display:none" id="submiting">保存中...</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-default btn-tinge" onClick="DoClear();">清除</button>
                </div>
            </div>
        </form>
        @else
        <form class="form-horizontal form-group-sm" id="addressOper" action="/sendinfo/address" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="col-xs-2 control-label">收货人姓名:</label>
                <div class="col-xs-2">
                    <input type="text" class="form-control" id="to_name" name="to_name" value="" maxlength="15">
                </div>
            </div>
            <div class="form-group">
                <label for="moblie" class="col-xs-2 control-label">收货人手机:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="to_mobile" name="to_mobile" value="" maxlength="25">
                </div>
                <label for="phone" class="col-xs-1 control-label">或电话:</label>
                <div class="col-xs-3">
                    <input type="text" class="form-control" id="to_tel" name="to_tel" value="" maxlength="25">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-2 control-label">省 市 区:</label>
                <div class="col-xs-9" id="city_1">
                    <div class="col-xs-4">
                        <select class="form-control" id="to_state" name="to_state"></select>
                    </div>
                    <div class="col-xs-4">
                        <select class="form-control" id="to_city" name="to_city" disabled="disabled"></select>
                    </div>
                    <span class="help-block col-xs-12">注：县级及以上城市均可配送 (新/藏/青/甘/内蒙偏远地区的县城例外)</span>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-xs-2 control-label">详细地址:</label>
                <div class="col-xs-10">
                    <input type="text" class="form-control" id="to_address" name="to_address" value="" maxlength="120">
                </div>
            </div>
            <div class="form-group" id="psfChoose">
                <label class="col-xs-2 control-label">选配送费用:</label>
                <div class="col-xs-10">
                    <ul class="selects-list" id="distrExpenses">
                        <li class="active" id="0">市区(免费)<i class="ico ico-check"></i></li>
                        <li  id="30">郊区(+30元)<i class="ico ico-check"></i></li>
                        <li  id="50">远郊(+50元)<i class="ico ico-check"></i></li>
                    </ul>
                    <span class="help-block">注：偏远地区请咨询客服，<a href="/help/send_zone.htm" target="_blank">市区/郊区列表</a></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <input type="hidden" name="peisongfei" id="peisongfei" value="0">
                    <!-- <input type="hidden" name="ca" id="ca" value="0"> -->
                    <button type="button" class="btn btn-default btn-tinge" onClick="return confirmForm();" id="dosubmit">保存收货人信息</button>
                    <button type="button" class="btn btn-default btn-tinge" disabled="disabled" style="display:none" id="submiting">保存中...</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-default btn-tinge" onClick="DoClear();">清除</button>
                </div>
            </div>
        </form>
        @endif
    </div>
    <script type="text/javascript" src="/h/js/common.js"></script>
    <script type="text/javascript" src="/h/js/jquery.cityselect.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#city_1").citySelect({
                prov: "请选择省份",
                city: "请选择城市",

                nodata: "none"
            });
            var selects = function (select) {
                select.click(function () {
                    select.removeClass('active');
                    $(this).addClass('active');
                    $("#peisongfei").val($(this).attr("id"));
                })
            };
            selects($("#distrExpenses > li"));

            var tt_flag = top.document.getElementById("tt_flag").value;

            if (tt_flag == "2") {
                $("#psfChoose").hide();
            }
        });

        /*$.get('/sendinfo/ajax', function(str){
                    alert(str);
                }
            })*/
        function confirmForm() {
            if ($("#to_name").val().length < 1) {
                alert("请填写收货人");
                $("#to_name").focus();
                return false;
            }
            if ($("#to_mobile").val() == "" && $("#to_tel").val() == "") {
                alert("请填写收货人手机号或电话！");
                $("#to_mobile").focus();
                return false;
            }
            if ($("#to_mobile").val().length > 0 && $("#to_mobile").val().length < 11) {
                alert("请填写正确的11位手机号码！");
                $("#to_mobile").focus();
                return false;
            }

            if ($("#to_tel").val().length > 0 && $("#to_tel").val().length < 11) {
                alert("请填写正确的11位电话号码(请加上区号)！");
                $("#to_tel").focus();
                return false;
            }

            if ($("#to_state").val() == "请选择省份") {
                alert("请选择收货人省份！");
                return false;
            }
            if ($("#to_city").val() == "请选择城市") {
                alert("请选择收货人城市！");
                return false;
            }
            if ($("#to_address").val().length < 2) {
                alert("请填写收货人详细地址！");
                $("#to_address").focus();
                return false;
            }

            /*$.ajax({
                type:'GET',
                url:'/sendinfo/ajax',
                data:{'to_name':$("#to_name").val(),'to_mobile=':$("#to_mobile").val(),'peisongfei':$("#peisongfei").val(),'to_state':$("#to_state").val(),'to_city':$("#to_city").val(),'to_address':$("#to_address").val()},
                dataType:'json',
                success:function(str){
                    alert(str);*/
                    
                        
                    
                    $("#dosubmit").hide()
                    $("#submiting").show()
                    $("#addressOper").submit();
                    top.location.href='/sendinfo/index';
                    // top.location.href:'/sendinfo/index';
                    // $("#addressOper").submit()
            /*    }
            });*/

            
            // alert($("#to_name").val());
            // $("#dosubmit").hide()
            // $("#submiting").show()
            // $("#addressOper").submit();
        }

        function DoClear() {
            $("#to_name").val("");
            $("#to_mobile").val("");
            $("#to_tel").val("");
            $("#to_address").val("");
            $("#city_1").citySelect({
                prov: "请选择省份",
                city: "请选择城市",
                nodata: "none"
            });
        }

        
    </script>
</body>
</html>