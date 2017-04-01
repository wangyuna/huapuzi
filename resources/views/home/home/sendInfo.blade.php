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
 
    <link rel="icon" href="http://www.hua.com/favicon.ico" mce_href="/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="/h/css/common.css">
    <link type="text/css" rel="stylesheet" href="/h/css/public.css">
    
    <style type="text/css">
        .email_autocomplete1 {
            position: relative;
            display: inline-block;
        }

            .email_autocomplete1 input {
                width: 200px;
                height: 30px;
                border: 1px solid #d2d2d2;
                padding: 5px 10px;
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

        .input-date .ico-riqi {
            position: absolute;
            z-index: 9;
            top: 7px;
            right: 25px;
            color: #d2d2d2;
        }

        .invoice-info {
            margin-left: 0px;
        }

            .invoice-info span {
                padding-right: 30px;
            }

            .invoice-info a,
            .invoice-info a:hover,
            .invoice-info a:focus {
                color: #ff6a00;
            }

        .order-info span {
            padding-right: 30px;
        }

        .order-info a,
        .order-info a:hover,
        .order-info a:focus {
            color: #ff6a00;
        }

        .btn-tinge {
            margin-top: 7px;
        }

        .address-bar .address {
            margin-left: 150px;
        }

            .address-bar .address i {
                margin-right: 10px;
            }

        .address-bar .operate {
            margin-right: 2px;
        }

            .address-bar .operate a {
                margin-right: 10px;
            }

        .address-bar .address i {
            float: left;
        }

        .wzsj {
            display: block;
            max-width: 400px;
            cursor: pointer;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .wzsj_1 {
            display: block;
            max-width: 48px;
            cursor: pointer;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .popover {
            width:352px;
            max-width: 352px;
            margin-left:20px;
        }
    </style>
    @endsection 
    <!--[if lt IE 9]>
        <script src="http://img02.hua.com/pc/assets/js/html5shiv.min.js"></script>
    <![endif]-->

    <!-- 头部 End -->
    

@section('content') 
<form method="POST" action="/sendinfo/ordersave" id="form1" name="form1">
    {{ csrf_field() }}
    <div class="container" style="width:990px;">
        <!-- 填写订单信息 -->
        <div class="cart-panel">
            <div class="hd"><h3>填写订单信息</h3></div>
            <div class="bd">
                <!-- 收货人信息 -->
                        <div class="order-item">
                            <div class="item-hd">
                                <a class="j-consignee" href="javascript:AddressOper('ismember','add')">新增收货人+</a>
                                <h5>收货人信息</h5>
                            </div>
                            <div class="item-bd">
                                <div id="showAddress">
                                @foreach($res as $k => $v)
                                    @if($k == 0)
                                    <div class="address-bar">
                                        <div class="operate">
                                            <a href="javascript:AddressOper('1587793','edit','{{ $v['id'] }}')">编辑</a>
                                        </div>
                                        <div class="name active" id="address1587793"><b>{{ $v['to_name'] }}</b><i class="ico ico-check"></i></div>
                                        <div class="address">
                                            <i class="wzsj_1" id="address1587793_0" class="address_1"><p>{{ $v['to_name'] }}</p></i><i class="wzsj"><span id="address1587793_1" class="address_1">{{ $v['to_state'] }}</span> <span id="address1587793_2" class="address_2">{{ $v['to_city'] }}</span> <span id="address1587793_3" class="address_3">{{ $v['to_address'] }}</span></i><i><span id="address1587793_4" class="address_4">{{ $v['to_mobile'] }}</span> <span id="address1587793_5"></span></i><i style="color: #fff;background: #b8b8b8;line-height: 22px;padding: 0 5px;margin-top: 4px;"> 默认地址</i><span id="address1587793_6" style="display:none;" class="address_5">{{ $v['peisongfei'] }}</span><span id="address1587793_6" style="display:none;" class="address_6">{{ $v['id'] }}</span>
                                        </div>
                                    </div>
                                    @else
                                    <div class="address-bar">
                                        <div class="operate">
                                            <a href="javascript:AddressOper('1587769', 'default')">设为默认地址</a><a href="javascript:AddressOper('1587769','edit','{{ $v['id'] }}')">编辑</a><a href="/sendinfo/delete/{{ $v['id'] }}" onclick="return confirm('确定删除?');">删除</a>
                                        </div>
                                        <div class="name" id="address1587769"><b>{{ $v['to_name'] }}</b><i class="ico ico-check"></i></div>
                                        <div class="address">
                                            <i class="wzsj_1" id="address1587769_0"><p>{{ $v['to_name'] }}</p></i><i class="wzsj"><span id="address1587769_1" class="address_1">{{ $v['to_state'] }}</span> <span id="address1587769_2" class="address_2">{{ $v['to_city'] }}</span> <span id="address1587769_3" class="address_3">{{ $v['to_address'] }}</span></i><i><span id="address1587769_4" class="address_4">{{ $v['to_mobile'] }}</span> <span id="address1587769_5"></span></i><span id="address1587769_6" style="display:none;" class="address_5">{{ $v['peisongfei'] }}</span><span id="address1587769_6" style="display:none;" class="address_6">{{ $v['id'] }}</span>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                <input type="hidden" id="to_name" name="to_name" value="">
                <input type="hidden" id="to_state" name="to_state" value="">
                <input type="hidden" id="to_city" name="to_city" value="">
                <input type="hidden" id="to_address" name="to_address" value="">
                <input type="hidden" id="to_mobile" name="to_mobile" value="">
                <!-- <input type="hidden" id="to_tel" name="to_tel" value=""> -->
                <input type="hidden" id="peisongfei" name="peisongfei" value="">
                <input type="hidden" id="addressid" name="aid" value="">
                <!-- 收货人信息 End -->
                <!-- 订购人信息 -->
                <div class="order-item">
                    <div class="item-hd">
                        <h5>订购人信息</h5>
                    </div>
                    <div class="item-bd">
                        <div class="form-inline order-form" id="OrderPersonInfo">
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" id="realname" name="realname" value="" placeholder="您的姓名" style="width:140px;" maxlength="15">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" id="phone" name="phone" value="" placeholder="手机号码或电话" style="width:140px;" maxlength="25">
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control input-sm" id="Email" name="Email" value="{{ $email }}" readonly="" style="width:200px;">
                            </div>
                            <button class="btn btn-primary btn-sm" type="button" onclick="DoOrderPersonInfo()">确定</button>
                        </div>
                        <div class="order-info" id="OrderPersonInfoText" style="display:none;">
                            <span id="M_RealName"></span> <span id="M_Phone"></span> <span id="M_Email">2752889273@qq.com</span> <a href="javascript:EditOrderPersonInfo()">编辑</a>
                        </div>
                    </div>
                </div>
                <!-- 订购人信息 End -->
                <!-- 配送日期/配送时段 -->

                <div class="order-item">
                    <div class="order-item-inner date">
                        <div class="item-hd" style="width:300px;">
                            <h5 style="display:inline-block;">送达日期</h5>                        </div>
                        <div class="item-bd input-date" id="selectDay">
                            <input type="text" class="form-control input-sm" id="send_riqi" name="send_riqi" value="2017-2-">
                            <span class="ico-riqi" id="xingqi"></span>
                            <i class="ico ico-calendar" id="rlTu"></i>
                        </div>
                        <div id="divShow" style="position: absolute; z-index: 9999; width: 400px; height: auto; display: none; border: 1px solid rgb(255, 207, 98); left: 201px; top: 544px; background: rgb(255, 255, 255);"><iframe src="" id="dialogIframe" name="dialogIframe" marginwidth="0" marginheight="0" scrolling="no" style="border: 0px none; width: 100%; height: 320px;" frameborder="0"></iframe></div>
                    </div>
                    <div class="order-item-inner time">
                            <div class="item-hd">
                                <h5>配送时段</h5>
                            </div>
                            <div class="item-bd">
                                <ul class="selects-list" id="timeFrame">
                                    <li class="active" id="timeSelect0">不限<i class="ico ico-check"></i></li>
                                    <li data-popover="true" data-content="08:30-12:00" id="timeSelect1">上午<i class="ico ico-check"></i></li>
                                    <li data-popover="true" data-content="12:00-18:00" id="timeSelect2">下午<i class="ico ico-check"></i></li>
                                    <li data-popover="true" data-content="18:00-21:00" id="timeSelect3">晚上<i class="ico ico-check"></i></li>
                                        <li data-popover="true" data-content="&lt;span class=&#39;text-primary&#39;&gt;定时服务+30元(非节日)，3.8节+60元，误差±15分钟。&lt;/span&gt;" id="timeSelect4">定时<i class="ico ico-check"></i></li>

                                    <span style="float:left;display:none;" id="selectTimes">
                                        <select id="select_hours" name="select_hours" style="height:30px; width:50px;" onchange="checkSendDate();">
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                        </select>时
                                        <select id="select_minutes" name="select_minutes" style="height:30px; width:50px;" onchange="checkSendDate();">
                                            <option value="00">00</option>
                                            <option value="05">05</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                        </select>分
                                    </span>
                                </ul>
                            </div>
                    </div>                    <p class="error-info" id="SendDate_ErrorInfo" style="display:none;"><span class="text-primary" id="dateErrMsg">特别提醒：日期格式不正确,请选择正确的日期格式, 例如：2015-5-15</span></p>
                    <p class="error-info" id="jieri_notsend" style="display:none"></p>
                    <p class="error-info" id="jieri_notice" style="display:none"></p>
                    <p class="error-info" id="fp_info" style="display:none;">定时服务<span class="text-primary">+30元</span>(非节日)，3.8节<span class="text-primary">+60元</span>，误差<span class="text-primary">±15</span>分钟。(如果付款时间在21:00-8:30，定时时间需晚于10点)</p>
                </div>
                <input type="hidden" name="send_timezone" id="send_timezone" value="随时都可">
                <!-- 配送日期/配送时段 End -->
                <!-- 贺卡内容 -->
                <div class="order-item">
                    <div class="order-item-inner card-text">
                            <div class="item-hd">
                                <h5>贺卡留言+署名</h5>
                            </div>
                            <div class="item-bd" id="cardText">
                                <textarea class="form-control" id="words" name="words" rows="5" placeholder="贺卡留言+署名" maxlength="400"></textarea>
                                <p class="helpBlock">最多200字，您还可以输入 <var class="word">200</var> 字。（仅支持中文，英文）</p>
                            </div>
                    </div>

                    <div class="order-item-inner card-option">
                            <ul class="tab-card">
                                <!-- <li><a href="#cardPane00">圣诞节</a></li> -->
                                <li class="active"><a href="http://www.hua.com/Shopping/SendInfo#cardPane01">送恋人</a></li>
                                <li><a href="http://www.hua.com/Shopping/SendInfo#cardPane02">送朋友</a></li>
                                <li><a href="http://www.hua.com/Shopping/SendInfo#cardPane03">送长辈</a></li>
                            </ul>
                            <div class="tab-content card-content">
                                <!-- <ul class="tab-pane in active" id="cardPane00">
                                    <li data-popover="true" data-content="你一颗聚满礼物的圣诞树，顶上最大最亮的那颗星是我的真心，挂的是我的痴心，制造材料的是我一颗不变有心：圣诞快乐！">
                                        1.你一颗聚满礼物的圣诞树，顶上最大最亮的那颗星是我的真心，挂的是我的痴心，制造材料的是我一颗不变有心：圣诞快乐！
                                    </li>
                                    <li data-popover="true" data-content="因为有了圣诞，雪花倍加浪漫；因为有了许愿，生活更加灿烂；因为有了挂念，幸福爬上笑脸；因为有了祝愿，寒冬倍感温暖；愿你体会我的思念，感受我的祝愿，圣诞快乐">
                                        2.因为有了圣诞，雪花倍加浪漫；因为有了许愿，生活更加灿烂；因为有了挂念，幸福爬上笑脸；因为有了祝愿，寒冬倍感温暖；愿你体会我的思念，感受我的祝愿，圣诞快乐
                                    </li>
                                    <li data-popover="true" data-content="我把自己挣扎着挤进礼包，提心吊胆溜进圣诞老人的背包，日夜煎熬等待今天来到，都只是为了你开启礼物的时候可以看到我的真心：圣诞节这天开始，让我们一起幸福到老！">
                                        3.我把自己挣扎着挤进礼包，提心吊胆溜进圣诞老人的背包，日夜煎熬等待今天来到，都只是为了你开启礼物的时候可以看到我的真心：圣诞节这天开始，让我们一起幸福到老！
                                    </li>
                                    <li data-popover="true" data-content="我告诉你七种活得开心的方法：多想我，多联络我，多梦见我，多关心我，多心疼我，多照顾我。还有，最重要是永远和这么好的我在一起!圣诞快乐。">
                                        4.我告诉你七种活得开心的方法：多想我，多联络我，多梦见我，多关心我，多心疼我，多照顾我。还有，最重要是永远和这么好的我在一起!圣诞快乐。
                                    </li>
                                    <li data-popover="true" data-content="风雨无情人有情，牵挂的心没有停，虽然不能常相见，每分每秒把你念，朋友久别情不断，圣诞问候爱更甜，平安狂欢，尽情欢，切莫把爱藏起来。">
                                        5.风雨无情人有情，牵挂的心没有停，虽然不能常相见，每分每秒把你念，朋友久别情不断，圣诞问候爱更甜，平安狂欢，尽情欢，切莫把爱藏起来。
                                    </li>
                                    <li data-popover="true" data-content="愿你将我的爱深深体验，感受我无边的思念，祝你圣诞快乐，甜蜜每一天。">
                                        6.愿你将我的爱深深体验，感受我无边的思念，祝你圣诞快乐，甜蜜每一天。
                                    </li>
                                    <li data-popover="true" data-content="奉上一颗幸福的心，在这特别的日子里，愿幸福，如意，快乐，鲜花，一切美好的祝愿与你同在。圣诞快乐!">
                                        7.奉上一颗幸福的心，在这特别的日子里，愿幸福，如意，快乐，鲜花，一切美好的祝愿与你同在。圣诞快乐!
                                    </li>
                                    <li data-popover="true" data-content="圣诞临近百花香，一香送你摇钱树，二香送你贵人扶，三香送你心情好，四香送你没烦恼，五香送你钱满箱，六香送你永健康！">
                                        8.圣诞临近百花香，一香送你摇钱树，二香送你贵人扶，三香送你心情好，四香送你没烦恼，五香送你钱满箱，六香送你永健康！
                                    </li>
                                    <li data-popover="true" data-content="平安是幅画，开心和睦萦绕家；平安是朵花，吉祥如意笑哈哈；平安是个富，年年贵富又荣华；平安是份福，顺顺利利谋幸福；平安夜是家，平安回到家，祝你平安夜平安如意！">
                                        9.平安是幅画，开心和睦萦绕家；平安是朵花，吉祥如意笑哈哈；平安是个富，年年贵富又荣华；平安是份福，顺顺利利谋幸福；平安夜是家，平安回到家，祝你平安夜平安如意！
                                    </li>
                                </ul> -->
                                <ul class="tab-pane in active" id="cardPane01">
                                    <li data-popover="true" data-content="我多么希望，有一个门口，早晨，阳光照在草上，我们站着，扶着自己的门扇，门很低，但太阳是明亮的。草在结它的种子，风在摇它的叶子，我们站着，不说话，就十分美好。">
                                        1.我多么希望，有一个门口，早晨，阳光照在草上，我们站着，扶着自己的门扇，门很低，但太阳是明亮的。草在结它的种子，风在摇它的叶子，我们站着，不说话，就十分美好。
                                    </li>
                                    <li data-popover="true" data-content="不要因为也许会改变，就不肯说那句美丽的誓言；不要因为也许会分离，就不敢求一次倾心的相遇。">
                                        2.不要因为也许会改变，就不肯说那句美丽的誓言；不要因为也许会分离，就不敢求一次倾心的相遇。
                                    </li>
                                    <li data-popover="true" data-content="我想和你虚度时光，比如低头看鱼，比如把茶杯留在桌子上离开，浪费它们好看的阴影，我还想连落日一起浪费，比如散步，一直消磨到星光满天……">
                                        3.我想和你虚度时光，比如低头看鱼，比如把茶杯留在桌子上离开，浪费它们好看的阴影，我还想连落日一起浪费，比如散步，一直消磨到星光满天……
                                    </li>
                                    <li data-popover="true" data-content="有些情感，无需多么华美，只是简单的遇见，简单的想念，哪怕它只是简单到：拉着你的手，迎着风走！">
                                        4.有些情感，无需多么华美，只是简单的遇见，简单的想念，哪怕它只是简单到：拉着你的手，迎着风走！
                                    </li>
                                    <li data-popover="true" data-content="遇到你我感到很幸福，但是我不能成为世界上最幸福的人，因为我们在一起，我要让你成为世界上最幸福的人。">
                                        5.遇到你我感到很幸福，但是我不能成为世界上最幸福的人，因为我们在一起，我要让你成为世界上最幸福的人。
                                    </li>
                                    <li data-popover="true" data-content="时间会慢慢地让你了解，一个外表很冷漠又很怕羞的人，他的心却充满了对你的爱。">
                                        6.时间会慢慢地让你了解，一个外表很冷漠又很怕羞的人，他的心却充满了对你的爱。
                                    </li>
                                    <li data-popover="true" data-content="我从灵魂深处爱你，我愿把生命交给你，由你接受多少就多少，现在是这样，以后也决不变更！">
                                        7.我从灵魂深处爱你，我愿把生命交给你，由你接受多少就多少，现在是这样，以后也决不变更！
                                    </li>
                                    <li data-popover="true" data-content="爱你是我一生无悔的决定，漫天星星都是我注视你的眼睛。无论结局如何，我都知道：此生最爱是你！">
                                        8.爱你是我一生无悔的决定，漫天星星都是我注视你的眼睛。无论结局如何，我都知道：此生最爱是你！
                                    </li>
                                    <li data-popover="true" data-content="即使我五音不全，可还是想为你唱一万首情歌……">
                                        9.即使我五音不全，可还是想为你唱一万首情歌……
                                    </li>
                                    <li data-popover="true" data-content="女王大人！原谅我吧！我知道我错了，你若不能原谅我的话，那就不断的打电话骂我吧！我愿意被你骂到老！">
                                        10.女王大人！原谅我吧！我知道我错了，你若不能原谅我的话，那就不断的打电话骂我吧！我愿意被你骂到老！
                                    </li>
                                </ul>
                                <ul class="tab-pane" id="cardPane02">
                                    <li data-popover="true" data-content="一切的不顺心都是纸老虎！希望你开心！">
                                        1.一切的不顺心都是纸老虎！希望你开心！
                                    </li>
                                    <li data-popover="true" data-content="这些日子你过得还好吗？也许忙碌改变了我们的生活，但我永远珍惜我们的情谊。">
                                        2.这些日子你过得还好吗？也许忙碌改变了我们的生活，但我永远珍惜我们的情谊。
                                    </li>
                                    <li data-popover="true" data-content="有些情感，无需多么华美，只是简单的遇见，简单的想念，哪怕它只是简单到：拉着你的手，迎着风走！">
                                        3.有些情感，无需多么华美，只是简单的遇见，简单的想念，哪怕它只是简单到：拉着你的手，迎着风走！
                                    </li>
                                    <li data-popover="true" data-content="不求同年同月同日生，但求同年同月同日疯">
                                        4.不求同年同月同日生，但求同年同月同日疯
                                    </li>
                                    <li data-popover="true" data-content="所有人都说我很坚强，只有你劝我别逞强">
                                        5.所有人都说我很坚强，只有你劝我别逞强
                                    </li>
                                    <li data-popover="true" data-content="无私无邪无猜无疑的友情无价，你是我买不到的奢华">
                                        6.无私无邪无猜无疑的友情无价，你是我买不到的奢华
                                    </li>
                                    <li data-popover="true" data-content="不管世界尽头多寂寞，你的身边一定有我">
                                        7.不管世界尽头多寂寞，你的身边一定有我
                                    </li>
                                    <li data-popover="true" data-content="朋友是一颗心住在两个人的心房里">
                                        8.朋友是一颗心住在两个人的心房里
                                    </li>
                                    <li data-popover="true" data-content="替你那个他娘的还没出现的另一半送束花给你，好好混，以后相互抱大腿。">
                                        9.替你那个他娘的还没出现的另一半送束花给你，好好混，以后相互抱大腿。
                                    </li>
                                    <li data-popover="true" data-content="生日快乐么么哒，恭祝兄弟仙福永享寿与天齐。">
                                        10.生日快乐么么哒，恭祝兄弟仙福永享寿与天齐。
                                    </li>
                                </ul>
                                <ul class="tab-pane" id="cardPane03">
                                    <li data-popover="true" data-content="亲爱的妈妈，我也想嫁出去，只是没遇到对的人。但我保证会过得很好，你别担心。你和爸爸身体健康才是我最幸福的事情。多出去走走，看看这个世界。">
                                        1.亲爱的妈妈，我也想嫁出去，只是没遇到对的人。但我保证会过得很好，你别担心。你和爸爸身体健康才是我最幸福的事情。多出去走走，看看这个世界。
                                    </li>
                                    <li data-popover="true" data-content="亲爱的妈妈：您曾用您坚实的臂弯为我撑起一片蓝天；而今，我也要用我日益丰满的羽翼为您遮挡风雨。妈妈，我永远爱您！生日快乐！祝我的美女妈妈越来越青春，身体健康，瘦成闪电，未来的我可以每个假期带你出去纵横~">
                                        2.亲爱的妈妈：您曾用您坚实的臂弯为我撑起一片蓝天；而今，我也要用我日益丰满的羽翼为您遮挡风雨。妈妈，我永远爱您！生日快乐！祝我的美女妈妈越来越青春，身体健康，瘦成闪电，未来的我可以每个假期带你出去纵横~
                                    </li>
                                    <li data-popover="true" data-content="老爸你知道吗：每天都会有人赞叹我的聪明、优雅和帅气！而我总是骄傲地说：俺爹出品，必属精品! 老爸：父亲节快乐!">
                                        3.老爸你知道吗：每天都会有人赞叹我的聪明、优雅和帅气！而我总是骄傲地说：俺爹出品，必属精品! 老爸：父亲节快乐!
                                    </li>
                                    <li data-popover="true" data-content="妈妈，我是您身边的一只备受关怀的小鸟，今天为您衔来了一束芬芳的鲜花。">
                                        4.妈妈，我是您身边的一只备受关怀的小鸟，今天为您衔来了一束芬芳的鲜花。
                                    </li>
                                    <li data-popover="true" data-content="引一缕清风，为妈妈带去轻松；采一缕阳光，为妈妈送去芬芳；掬一捧清水，为妈妈消去疲惫；送一束鲜花，为妈妈奉上祝福。祝妈妈生日快乐！">
                                        5.引一缕清风，为妈妈带去轻松；采一缕阳光，为妈妈送去芬芳；掬一捧清水，为妈妈消去疲惫；送一束鲜花，为妈妈奉上祝福。祝妈妈生日快乐！
                                    </li>
                                    <li data-popover="true" data-content="不想时间过得那么快，因为我想有再多一点时间回家陪着你。不要觉得自己老了，在别人眼里，你还只是我姐呢。生日快乐，妈，我爱你！">
                                        6.不想时间过得那么快，因为我想有再多一点时间回家陪着你。不要觉得自己老了，在别人眼里，你还只是我姐呢。生日快乐，妈，我爱你！
                                    </li>
                                    <li data-popover="true" data-content="美丽动人可爱迷人的妈妈：生日快乐！青春永驻！虽然不能陪伴在你身边，我的心一直陪伴着你，我爱你，妈妈。">
                                        7.美丽动人可爱迷人的妈妈：生日快乐！青春永驻！虽然不能陪伴在你身边，我的心一直陪伴着你，我爱你，妈妈。
                                    </li>
                                    <li data-popover="true" data-content="“洗衣做饭忙不完，每日忙碌不着闲，历经风霜添白发，勤劳持家不知烦”。作为儿子女儿的我们，深知您每天的辛苦忙碌，但作为儿子女儿的我们，同样要给您幸福，祝您生日快乐，幸福万年长。">
                                        8.“洗衣做饭忙不完，每日忙碌不着闲，历经风霜添白发，勤劳持家不知烦”。作为儿子女儿的我们，深知您每天的辛苦忙碌，但作为儿子女儿的我们，同样要给您幸福，祝您生日快乐，幸福万年长。
                                    </li>
                                    <li data-popover="true" data-content="父爱如山，父爱无言，您总是微笑着担起了整个家庭。在我心中，您是全天下最好的爸爸。">
                                        9.父爱如山，父爱无言，您总是微笑着担起了整个家庭。在我心中，您是全天下最好的爸爸。
                                    </li>
                                    <li data-popover="true" data-content="忘不了您和风细雨般的话语，荡涤了我心灵上的尘泥；忘不了您浩荡东风般的叮咛，鼓起我前进的勇气。老师，我终生感激您！">
                                        10.忘不了您和风细雨般的话语，荡涤了我心灵上的尘泥；忘不了您浩荡东风般的叮咛，鼓起我前进的勇气。老师，我终生感激您！
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
                <!-- 贺卡内容 End -->
                <!-- 支付方式 -->
                <div class="order-item">
                    <div class="item-hd">
                        <h5>支付方式</h5>
                    </div>
                    <div class="item-bd">
                        <ul class="selects-list" id="payWay">
                                <li class="active" id="payway0" data-popover="true" data-content="支持：支付宝、微信扫码、财付通、易宝支付、PayPal；以及工行、农行、建行、中行、招行、交行等10多家主要银行直付。">网上支付<i class="ico ico-pop"></i><i class="ico ico-check"></i></li>

                            <li id="payway3" data-popover="true" data-content="不与其他优惠同时使用，以商品购买价计价。&lt;br /&gt;&lt;a href=&#39;/help/lipinka_check.htm&#39; target=&#39;_blank&#39;&gt;&lt;u&gt;验证卡有效性&lt;/u&gt;&lt;/a&gt;">礼品卡支付<i class="ico ico-check"></i><i class="ico ico-pop"></i></li>
                            <li id="payway2" data-popover="true" data-content="支持40多个主要城市市区提供上门收款服务（包括全部直辖市、省会城市、以及深圳、珠海、东莞、中山、厦门、苏州、大连、青岛、无锡、宁波、温州、桂林），加收服务费10元。&lt;a href=&#39;http://www.hua.com/help/payment_door.htm&#39; target=&#39;_blank&#39;&gt;详情 &gt;&gt;&lt;/a&gt;
">上门收款<i class="ico ico-check"></i><i class="ico ico-pop"></i></li>
                            
                            <span id="shangmen" class="checkbox-wrap form-inline" style="display:none">上门收款地址：<input name="address" type="text" id="address" value="" class="form-control input-sm" placeholder="如不是订购人请同时注明联系人及手机" style="width:230px;" maxlength="120"></span>
                        </ul>
                    </div>
                </div>
                    <input name="pays" type="hidden" id="pays" value="网上支付">
                <!-- 支付方式 End -->
                <!-- 特殊要求 -->
                <div class="checkbox-wrap form-inline" style="margin-bottom:6px;">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="special-checkbox" id="tsYaoQiu" name="tsYaoQiu"> 备注
                        </label>
                    </div>
                    <div class="form-group special-form hidden">
                        <input type="text" class="form-control input-sm" id="quest" name="quest" placeholder="选填，如有其他要求请注明,我们尽量满足，120字以内:)" style="width:500px;" maxlength="120">
                    </div>
                </div>
                <!-- 特殊要求 End -->
                <!-- 我要发票 -->
                    <div class="checkbox-wrap form-inline">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="invoice-checkbox" name="ShowFInfo1" id="ShowFInfo1" value="1"> 我要发票
                            </label>
                        </div>
                        <div class="invoice-info hidden" id="fptextinfo"><span id="fptaitou"></span><span id="fpshr"></span><span id="fptel"></span><span id="fpaddress"></span><span id="fpedit"></span></div>
                        <div class="invoice-form hidden" id="fpinputinfo">
                            <div class="invoice-hd" style="line-height:22px;">
                                <!-- 发票将于付款后1-3个工作日内开具，<span style="color:red;">免费快递寄出</span>。<br> -->
                                <!-- 五个最大的节日前一周，改为： -->
                                发票将于付款后1-7个工作日内开具，<span style="color:red;">免费快递寄出</span>。<br>
                                发票内容：<span style="color:red;">服务费</span>，<span style="color:#999;">如有其他要求，请联系客服</span>
                            </div>
                            <div class="invoice-bd">
                                <p class="error-info" style="display: none; margin:0 0 10px 0;"><span class="text-primary"></span></p>
                                <div class="form-group">
                                    <input name="fp_posttype" type="hidden" value="快递" id="fp_posttype_2">
                                    <input type="text" class="form-control input-sm" id="fp_info01" name="fp_info01" value="" placeholder="发票抬头" style="width:345px;"><input name="yfp_info01" id="yfp_info01" value="" type="hidden" size="30" maxlength="25">
                                </div>
                                <div class="form-group">
                                    <div class="form-inline" style="width:500px;">
                                        <input type="text" class="form-control input-sm" placeholder="收件人" value="" name="fp_info03" id="fp_info03" style="width:170px; float:left; margin-right:5px;">
                                        <input name="yfp_info03" id="yfp_info03" value="" type="hidden" size="30" maxlength="25">
                                        <input type="text" class="form-control input-sm" name="fp_info02a" id="fp_info02a" value="" placeholder="手机或电话" style="width:170px;">
                                        <input name="yfp_info02a" id="yfp_info02a" value="" type="hidden" size="30" maxlength="25">
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:8px;">
                                    <input type="text" name="fp_info02" id="fp_info02" value="" class="form-control input-sm" placeholder="详细地址（请完整填写省、市、区等信息，以保证快递顺利送达）" style="width:500px;"><input name="yfp_info02" id="yfp_info02" value="" type="hidden" size="30" maxlength="25">
                                </div>

                                <div class="form-group" style="width:500px; margin-bottom:0px;">
                                    <label><input type="checkbox" name="FPDefault" id="FPDefault" value="1" checked="checked" style="margin-right:5px;">存为常用发票信息</label>
                                </div>
                                <div class="form-group"><button type="button" class="btn btn-default btn-tinge" onclick="SaveFPInfo()">保存发票信息</button></div>
                            </div>
                        </div>
                    </div>
                <!-- 我要发票 End -->

                <!-- 我有优惠券 -->
                <div class="checkbox-wrap form-inline" style="display:block">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="voucher-checkbox" id="aIsUseLiquan" name="aIsUseLiquan" value="1"> 我有优惠券
                        </label>
                            <a id="canUseCouponCnt" style="border-bottom:1px solid #f60;display:none;" href="javascript:void(0)" onclick="UseCouponFrame()">可用0张</a>

                    </div>
                    <div id="divlqcode" class="form-group voucher-form hidden">
                                <input type="text" class="form-control input-sm" name="lq_code" id="lq_code" value="" placeholder="请输入优惠券号" style="width:200px;">

                        <input type="hidden" name="lq3_sum" id="lq3_sum" value="0">
                    </div>
                </div>
                <!-- 我有优惠券 End -->
            </div>
        </div>
        <!-- 填写订单信息 End -->
        <!-- 核对购物清单 -->
        <div class="cart-panel check">
            <div class="hd"><h3>核对购物清单</h3></div>
            <div class="bd" id="Products">

                @foreach(session('cart') as &$v)
                <ul class="order-list">
                    <li class="img-box"><a href="http://www.hua.com/product/9012165.html" target="_blank"><img src="{{ trim($v['pic1'],'.') }}" height="56" width="50"></a></li>
                    <li class="product">
                        <a href="http://www.hua.com/product/9012165.html">
                            <span class="product-title">{{ $v['title'] }}</span>
                        </a>
                        <div class="price">
                            <span class="price-sign">¥</span>
                            <span class="price-num" id="pro9012165"><p class="price2">{{ $v['price2'] }}</p></span>
                        </div>
                        x <b class="to_num">{{ $v['num'] }}</b>
                    </li>
                </ul>
                @endforeach        

            </div>
        </div>
        <!-- 核对购物清单 End -->
        <!-- 提交订单 -->
        <div class="submit-order">
            <div class="stat">
                <b>2</b>件商品，总商品金额：
                <div class="price">
                    <span class="price-sign">¥</span>
                    <span class="price-num" id="product_money"></span>
                </div>
            </div>
            <!-- 关爱通用户显示优惠金额 start -->
            <!-- 关爱通用户显示优惠金额 End -->
            <div class="stat">
                配送费：
                <div class="price">
                    <span class="price-sign">¥</span>
                    <span class="price-num" id="i_spend_fee">0</span>
                </div>
            </div>
            <div class="stat" id="show_quan" style="display:none;">
                优惠券抵扣：
                <div class="price">
                    <span class="price-sign">¥</span>
                    <span class="price-num" id="quan_num">0</span>
                </div>
            </div>
            <div class="stat" id="show_confirmTime" style="display:none;">
                定时服务费：
                <div class="price">
                    <span class="price-sign">¥</span>
                    <span class="price-num" id="comfirmTime_num">0</span>
                </div>
            </div>
            <div class="stat" id="show_todoors" style="display:none;">
                上门收款费：
                <div class="price">
                    <span class="price-sign">¥</span>
                    <span class="price-num" id="todoors_num">0</span>
                </div>
            </div>
            <div class="stat total">
                实付款：
                <div class="price">
                    <span class="price-sign">¥</span>
                    <span class="price-num" id="order_total_money">706</span>
                </div>
            </div>
            <input type="hidden" name="tt_flag" id="tt_flag" value="1">
            <input type="hidden" name="totalMoney" id="totalMoney" value="706">
            <input type="hidden" name="GuanAiTongMoney" id="GuanAiTongMoney" value="0"></input>
            <input type="hidden" name="sign" id="sign" value="C87RMuTGShr7ntPh">
            <button class="btn btn-primary btn-lg" type="button" onclick="return CheckForm()" id="DoSubmit">提交订单</button>

            <button class="btn btn-primary btn-lg" type="button" id="Submiting" disabled="disabled" style="display:none">提交中,请等待...</button>

            <div class="address">
                配送至： <span id="send_address"></span><br>
                收货人：<span id="receiver"></span>
            </div>
        </div>
        <!-- 提交订单 End -->
    </div>
</form>

<!-- 弹出窗口-->
<div class="modal fade com-modal" id="consigneeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="attNotice">新增收货人信息</h4>
            </div>
            <div class="modal-body">
                <iframe src="" width="100%" height="340" frameborder="0" id="attPage"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- 弹出窗口end-->

    <!--底部-->
    <!-- 服务 -->
    
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
    
    <script type="text/javascript" src="/h/js/mailautocomplete.js"></script>
    <script type="text/javascript">

        $(".address-bar").each(function(){

            // alert($(this).find('b').parent().html());
            $(this).find('b').parent().click(function(){
                var address_0 = $(this).parent().find('p').html();
                var address_1 = $(this).parent().find('.address_1').text();
                var address_2 = $(this).parent().find('.address_2').text();
                var address_3 = $(this).parent().find('.address_3').text();
                var address_4 = $(this).parent().find('.address_4').text();
                var address_5 = $(this).parent().find('.address_5').text();
                var address_6 = $(this).parent().find('.address_6').text();
                // alert(address_6);
                $("#send_address").text(address_1+" "+address_2+" "+address_3);
                $("#receiver").text(address_0+" "+address_4);
                $("#i_spend_fee").html(address_5);

                $("#to_name").val(address_0);
                $("#to_state").val(address_1);
                $("#to_city").val(address_2);
                $("#to_address").val(address_3);
                $("#to_mobile").val(address_4);
                $("#peisongfei").val(address_5);
                $("#addressid").val(address_6);
            })
            // class="address_0"
            // $(".to_address-bar .address_0").click(function(){
            //     $(".to_address-bar .address_0").html();
            // })
        })

        // var operate = ('.operate').parent();
        // operate.each(function(){
        //     $(this).find('.name').click(function(){
        //         alert($(this).find('i').html());
        //     })
        // })
        // alert($('.operate').parent().next().html());


        $(function () {
            $("#words").change(function () {
                wordsChange();
            });
            $("#words").keyup(function () {
                wordsChange();
            });
        });
        function wordsChange(){
            var maxLen1 = parseInt($("#words").attr("maxlength"));
            var str1 = $("#words").val();
            var str2 = str1.replace(/[^\x00-\xff]/g, 'xx');
            if (str2.length > maxLen1) {
                $("#words").val(subStr(str1,maxLen1));
            }
        }
        /* 2007-11-28 XuJian */
        //截取字符串 包含中文处理(串,长度,增加...)
        function subStr(str, len, hasDot) {
            var newLength = 0;
            var newStr = "";
            var chineseRegex = /[^\x00-\xff]/g;
            var singleChar = "";
            var strLength = str.replace(chineseRegex, "**").length;
            for (var i = 0; i < strLength; i++) {
                singleChar = str.charAt(i).toString();
                if (singleChar.match(chineseRegex) != null) {
                    newLength += 2;
                }
                else {
                    newLength++;
                }
                if (newLength > len) {
                    break;
                }
                newStr += singleChar;
            }

            if (hasDot && strLength > len) {
                newStr += "...";
            }
            return newStr;
        }
    </script>

    <script type="text/javascript">
    // alert($("#pro9012165").text());
        function num(){
            var num1=0;
            var totle=0;
            var list = $(".price2")
            list.each(function(){
                // 获取单价
                price = $(this).text();
                var price = parseFloat(price);
                // 获取数量
                num = $(this).parent().parent().parent().find('b').html();
                var num = parseInt(num);
                //写入小计
                totle+=num;
                num1+=(price*num);

            })
            //写入总计
            $("#product_money").html(num1);
            // $(".set-stat .price-num input").val(100);
            // $("input[name='price']").val(num1);
            
            $("#product_money").parent().parent().find('b').html(totle);
            // $("input[name='total_num']").val(totle);
        }   
        num();
        /*$(".price2").each(function(){
            $(".to_num").each(function(){
                alert($(this).text());
            });
            // alert($(this).text());
        })*/


        var ttFlag='1';
        //窗口操作开始
        $('#consigneeModal').modal({backdrop: 'static', keyboard: false, show: false});
        $('#consigneeModal').on('shown.bs.modal', function () {
            var $this = $(this);
            var $modal_dialog = $this.find('.modal-dialog');
            $this.css('display', 'block');
            $modal_dialog.css({'margin-top': Math.max(0, ($(window).height() - $modal_dialog.height()) / 2) });
        });
        $('#consigneeModal').on('hidden.bs.modal', function () {
            $("#attPage").attr("src","");
        });

        function AddressOper(ids,op,id)
        {
            // alert(id);
            var sjs=Math.random();
            if(op=="add")
            {
                $("#attNotice").html("新增收货人地址");
                $('#consigneeModal').modal('show');
                $("#attPage").attr('src','/shopping/WinAddress')
            }
            else if(op=="edit")
            {
                $("#attNotice").html("修改收货人地址");
                $('#consigneeModal').modal('show');
                $("#attPage").attr('src','/shopping/WinAddress?id='+id)
            }
            else  //设置默认收货地址和删除收货人地址
            {
                $.get("/shopping/AddressOper",{ op:op,id:ids},function(data){if(data.toString()=="0"){location.href=location.href;}else{alert("操作失败，请联系客服！");}});
            }
        }

        function UseCouponFrame()
        {
            $("#attNotice").html("使用优惠券");
            $('#consigneeModal').modal('show');
            $("#attPage").attr('src','/shopping/UseCoupon')
        }

        function EditReceiverAddress(ids,to_name,to_state,to_city,to_tel,to_mobile,to_address,peisongfei)//编辑收货人地址
        {
            if(ids!="0")
            {
                // $(".address-bar .name").removeClass('active');
                $("#address"+ids).addClass("active");
            }
            /*$("#address"+ids).html(to_name+"<i class=\"ico ico-check\"></i>");
            $("#address"+ids+"_0").html(to_name);
            $("#address"+ids+"_1").html(to_state);
            $("#address"+ids+"_2").html(to_city);
            $("#address"+ids+"_3").html(to_address);
            $("#address"+ids+"_4").html(to_mobile);
            $("#address"+ids+"_5").html(to_tel);
            $("#address"+ids+"_6").html(peisongfei);
            $("#to_name").val(to_name);
            $("#to_state").val(to_state);
            $("#to_city").val(to_city);
            $("#to_address").val(to_address);
            $("#to_mobile").val(to_mobile);
            $("#to_tel").val(to_tel);
            if(ttFlag=="2")
            {
                $("#peisongfei").val("0");
            }
            else
            {
                $("#peisongfei").val(peisongfei);
            }
            if(!isNaN($("#peisongfei").val()))
            {
                $("#i_spend_fee").text($("#peisongfei").val());
                UpateSpendMoney();
            }
            else
            {
                $("#peisongfei").val("0");
                $("#i_spend_fee").text($("#peisongfei").val());
                UpateSpendMoney();
            }
            UpdateReceiver();
            $('#consigneeModal').modal('hide');*/
        }

        function AddReceiverAddress(ids,to_name,to_state,to_city,to_tel,to_mobile,to_address,peisongfei)//提交增加新收货人地址处理函数
        {
            if(ids=="0")//非登陆会员添加收货人地址
            {
                var html="<div class=\"address-bar\"><div class=\"operate\"><a href=\"javascript:AddressOper('"+ids+"','edit')\">编辑</a></div><div class=\"name active\" id=\"address"+ids+"\">"+to_name+"<i class=\"ico ico-check\"></i></div><div class=\"address\"><i id=\"address"+ids+"_0\">"+to_name+"</i><i><span id=\"address"+ids+"_1\">"+to_state+"</span> <span id=\"address"+ids+"_2\">"+to_city+"</span> <span id=\"address"+ids+"_3\">"+to_address+"</span></i><i><span id=\"address"+ids+"_4\">"+to_mobile+"</span> <span id=\"address"+ids+"_5\">"+to_tel+"</span></i><span id=\"address"+ids+"_6\" style=\"display:none;\">"+peisongfei+"</span></div></div>";
                $("#showAddress").html(html);
                $(".j-consignee").hide();
            }
            else
            {
                // $(".address-bar .name").removeClass('active');
                var yhtml=$("#showAddress").html();
                var html="<div class=\"address-bar\"><div class=\"operate\"><a href=\"javascript:AddressOper('"+ids+"','default')\">设为默认地址</a><a href=\"javascript:AddressOper('"+ids+"','edit')\">编辑</a><a href=\"javascript:if(confirm('确认删除吗？')){AddressOper('"+ids+"','del')}\">删除</a></div><div class=\"name active\" id=\"address"+ids+"\">"+to_name+"<i class=\"ico ico-check\"></i></div><div class=\"address\"><i id=\"address"+ids+"_0\">"+to_name+"</i><i><span id=\"address"+ids+"_1\">"+to_state+"</span> <span id=\"address"+ids+"_2\">"+to_city+"</span> <span id=\"address"+ids+"_3\">"+to_address+"</span></i><i><span id=\"address"+ids+"_4\">"+to_mobile+"</span> <span id=\"address"+ids+"_5\">"+to_tel+"</span></i><span id=\"address"+ids+"_6\" style=\"display:none;\">"+peisongfei+"</span></div></div>";
                $("#showAddress").html(html+yhtml);
                selects($(".address-bar .name"));
            }
            // $("#to_name").val(to_name);
            // $("#to_state").val(to_state);
            // $("#to_city").val(to_city);
            // $("#to_address").val(to_address);
            // $("#to_mobile").val(to_mobile);
            // $("#to_tel").val(to_tel);
            if(ttFlag=="2")
            {
                $("#peisongfei").val("0");
            }
            else
            {
                $("#peisongfei").val(peisongfei);
            }
            if(!isNaN($("#peisongfei").val()))
            {
                // $("#i_spend_fee").text($("#peisongfei").val());
                UpateSpendMoney();
            }
            else
            {
                $("#peisongfei").val("0");
                // $("#i_spend_fee").text($("#peisongfei").val());
                UpateSpendMoney();
            }
            UpdateReceiver();
            $('#consigneeModal').modal('hide');
        }
        //选中优惠券
        function CouponAdd(code,codeVal)
        {
            var lqchk=$("#aIsUseLiquan").prop("checked");
            //$("#aIsUseLiquan").prop("checked", true);
            //$("#divlqcode").show();
            if(lqchk){
                $("#aIsUseLiquan").prop("checked", false);
            }
            $("#aIsUseLiquan").click();
            $("#lq3_sum").val(codeVal)
            $("#quan_num").text($("#lq3_sum").val());
            $("#lq_code").val(code);
            UpateSpendMoney();
            $('#consigneeModal').modal('hide');
        }
        //点击选中，其他取消
        var selects = function(select){
            select.click(function(){
                var indx = select.index(this);
                select.removeClass('active');
                $(this).addClass('active');
                var selectid=$(this).attr("id");
                if(selectid.indexOf("timeSelect")>-1)
                {
                    $("#selectTimes").hide();//定时时间
                    $("#show_confirmTime").hide();//定时服务费展示
                    $("#send_timezone").val($(this).text());
                    if(selectid=="timeSelect4")
                    {
                        $("#send_timezone").val("定点服务");
                        $("#selectTimes").show();
                        $("#show_confirmTime").show();
                    }
                    if(selectid=="timeSelect0")
                    {
                        $("#send_timezone").val("随时都可");
                    }
                    if(selectid=="timeSelect1")
                    {
                        $("#send_timezone").val("上午");
                    }
                    if(selectid=="timeSelect2")
                    {
                        $("#send_timezone").val("下午");
                    }
                    if(selectid=="timeSelect3")
                    {
                        $("#send_timezone").val("晚上");
                    }
                    checkSendDate();
                }
                else if(selectid.indexOf("payway")>-1)
                {
                    $("#shangmen").hide();
                    var vals=$(this).text();
                    if(vals.indexOf("礼品卡支付")>0)
                    {
                        $("#pays").val("礼品卡支付");//支付方式赋值
                    }
                    else{$("#pays").val(vals);}

                    ShowPrice();
                    if($("#pays").val()=="上门收款")
                    {
                        $("#shangmen").show();
                    }
                }
                else if(selectid.indexOf("address")>-1)//选择地址赋值
                {
                    // $("#to_name").val($("#"+selectid+"_0").text());
                    // $("#to_state").val($("#"+selectid+"_1").text());
                    // $("#to_city").val($("#"+selectid+"_2").text());
                    // $("#to_address").val($("#"+selectid+"_3").text());
                    // $("#to_mobile").val($("#"+selectid+"_4").text());
                    // $("#to_tel").val($("#"+selectid+"_5").text());
                    if(ttFlag=="2")
                    {
                        $("#peisongfei").val("0");
                    }
                    else
                    {
                        $("#peisongfei").val($("#"+selectid+"_6").text());
                    }
                    if(!isNaN($("#peisongfei").val()))
                    {
                        // $("#i_spend_fee").text($("#peisongfei").val());
                        UpateSpendMoney();
                    }
                    else
                    {
                        $("#peisongfei").val("0");
                        // $("#i_spend_fee").text($("#peisongfei").val());
                        UpateSpendMoney();
                    }
                    UpdateReceiver();
                }
            })
        };

        selects($(".address-bar .name"));
        if(ttFlag!="2")
        {
            selects($("#timeFrame > li"));
        }
        selects($("#payWay > li"));

        $(function() {
            // 提示框
            var originalLeave = $.fn.popover.Constructor.prototype.leave;
            $.fn.popover.Constructor.prototype.leave = function(obj) {
                var self = obj instanceof this.constructor ?
                    obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type)
                var container, timeout;

                originalLeave.call(this, obj);

                if (obj.currentTarget) {
                    container = $(obj.currentTarget).siblings('.popover')
                    timeout = self.timeout;
                    container.one('mouseenter', function() {
                        clearTimeout(timeout);
                        container.one('mouseleave', function() {
                            $.fn.popover.Constructor.prototype.leave.call(self, self);
                        });
                    })
                }
            };

            $('body').popover({
                selector: '[data-popover]',
                trigger: 'hover',
                placement: 'bottom',
                html: true,
                // container: 'body',
                delay: {
                    show: 300,
                    hide: 10
                }
            });

            // 特殊要求显示/隐藏
            $(".special-checkbox").on('change', function () {
                if($(this).is(':checked')) {
                    $('.special-form').removeClass('hidden');
                }
                else {
                    $('.special-form').addClass('hidden');
                }
            });
            //显示尽快发出
            $("#jinKuai").on('change', function () {
                if($(this).is(':checked')) {
                    $("#send_riqi").val("2017-2-24");
                    $('#selectDay').hide();
                }
                else {
                    $('#selectDay').show();
                }
            });

            // 发票显示/隐藏
            $(".invoice-checkbox").on('change', function () {
                if($(this).is(':checked')) {
                    $('.invoice-form').removeClass('hidden');
                    // $('.invoice-info').removeClass('hidden');
                }
                else {
                    $('.invoice-form, .invoice-info').addClass('hidden');
                }
            });

            // 优惠券显示/隐藏
            $(".voucher-checkbox").on('change', function () {
                if($(this).is(':checked')) {
                    $('.voucher-form').removeClass('hidden');
                    $("#show_quan").show();
                    if($("#lq_code").val()!=null&&$("#lq_code").val().length==9)
                    {
                        UpdateLq();
                    }
                }
                else {
                    $('.voucher-form').addClass('hidden');
                    $("#show_quan").hide();
                    $("#lq3_sum").val(0)
                    $("#quan_num").text($("#lq3_sum").val());
                }
                UpateSpendMoney();
            });

            //输入礼券检测并计算支付总金额
            function UpdateLq()
            {
                $.ajax({type:"get",url:"/shopping/GetCoupon?lq_code="+$("#lq_code").val(),cache:false,async:false,success: function(data){
                    var jine=parseInt(data);
                    if(jine>0)
                    {
                        $("#lq3_sum").val(jine);
                        $("#quan_num").text($("#lq3_sum").val());
                        UpateSpendMoney();
                    }
                    else if(jine==-5)
                    {
                        alert("你输入的礼券已经被使用！");
                        $("#lq3_sum").val(0);
                        $("#quan_num").text($("#lq3_sum").val());
                        $("#lq_code").val("");
                        UpateSpendMoney();
                    }
                    else if(jine==-3)
                    {
                        alert("订单中必须含有鲜花类商品才能使用该礼券！");
                        $("#lq3_sum").val(0);
                        $("#quan_num").text($("#lq3_sum").val());
                        $("#lq_code").val("");
                        UpateSpendMoney();
                    }
                    else if(jine==-4)
                    {
                        alert("VIP会员不能使用该礼券！");
                        $("#lq3_sum").val(0);
                        $("#quan_num").text($("#lq3_sum").val());
                        $("#lq_code").val("");
                        UpateSpendMoney();
                    }
                    else if(jine==-7)
                    {
                        alert("满减券：未达到使用金额要求！");
                        $("#lq3_sum").val(0);
                        $("#quan_num").text($("#lq3_sum").val());
                        $("#lq_code").val("");
                        UpateSpendMoney();
                    }
                    else
                    {
                        alert("礼券不能使用，请联系客服处理！");
                        $("#lq3_sum").val(0);
                        $("#quan_num").text($("#lq3_sum").val());
                        $("#lq_code").val("");
                        UpateSpendMoney();
                    }
                }});
            }

            $("#lq_code").on('input propertychange', function() {
                if($(this).val().length==9)
                {
                    UpdateLq();
                }
                else
                {
                    $("#lq3_sum").val(0);
                    $("#quan_num").text($("#lq3_sum").val());
                    UpateSpendMoney();
                }
            });

            // 下拉菜单
            $('.dropdown-li li').click(function() {
                $("#shangmen").hide();
                var payOption= $(this).find('b').html();
                var paySelect = $(this).parent().prev().find('b');
                paySelect.html(payOption);
                $("#pays").val(payOption);//支付方式赋值
                ShowPrice();
            });

            // card tab
            $('.tab-card a').click(function(e) {
                e.preventDefault()
                $(this).tab('show')
            })
            //文字控制 2016-11-01 修改 by yuandong
            function statInputNum(textArea, numItem) {
                var max = parseInt(numItem.text()),
                    curLength;
                textArea[0].setAttribute("maxlength", max*2);

                var str1 = textArea.val();
                curLength = str1.length;
                if(curLength>max)
                {
                    numItem.text("0");
                    textArea.val(textArea.val().substring(0,max*2));
                }
                else
                {
                    numItem.text(max - curLength);
                }
                textArea.on('input propertychange', function() {
                    if($(this).val().length>max)
                    {
                        numItem.text("0");
                        textArea.val(textArea.val().substring(0,max*2));
                    }
                    else
                    {
                        numItem.text(max - $(this).val().length);
                    }
                });
            };

            var operFlag='1';
            if(operFlag=="1")
            {
                var wordCount = $("#cardText"),
                    textArea = wordCount.find("textarea"),
                    word = wordCount.find(".word");

                statInputNum(textArea, word);

                $('.card-content li').click(function() {
                    $("#cardText textarea").val($(this).data('content'));
                    $("#cardText .word").text(200);
                    statInputNum(textArea, word);
                });
            }

            UpdateReceiver();
            UpateSpendMoney();
            var loginAddressSign='1';//已登录，无地址用户
            var notLoginAddressSign='1';//未登录 ，未填写地址用户
            if(loginAddressSign=="0")
            {
                AddressOper('ismember','add');
            }
            if(notLoginAddressSign=="0")
            {
                AddressOper('notmember','add');
            }
            
            ShowPrice();
        });

        //更新收货人
        function UpdateReceiver()
        {
            // $("#send_address").html($("#to_state").val()+" "+$("#to_city").val()+" "+$("#to_address").val());
            if($("#to_mobile").val().length>0)
            {
                // $("#receiver").html($("#to_name").val()+" "+$("#to_mobile").val());
            }
            else
            {
                // $("#receiver").html($("#to_name").val()+" "+$("#to_tel").val());
            }
        }

        //更新支付总金额
        function UpateSpendMoney()
        {
            var payValue=$("#pays").val();
            if((payValue=="礼品卡支付")||(payValue=="关爱积分支付")||(payValue=="V币支付")||(payValue=="万里通支付")||(payValue=="上门收款"))
            {
                ShowPrice();
            }
            else
            {
                if(payValue=="上门收款")
                {
                    $("#show_todoors").show();
                    $("#todoors_num").text(10);
                }
                else
                {
                    $("#show_todoors").hide();
                    $("#todoors_num").text(0);
                }
                var djq=0;
                if($("#aIsUseLiquan").is(':checked'))
                {
                    djq=parseInt($("#lq3_sum").val());
                }

                var totalMoney=parseInt($("#product_money").text())+parseInt($("#i_spend_fee").text())+parseInt($("#comfirmTime_num").text())+parseInt($("#todoors_num").text())-djq-parseInt(0);

                $("#order_total_money").text(totalMoney.toString());
                $("#totalMoney").val(totalMoney.toString());
            }
        }

        //确认订购人信息
        function DoOrderPersonInfo()
        {
            if((/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/gi).test($("#Email").val()) == false){
                alert("Email地址不正确，请重填，E-mail格式：123@abc.com。");
                document.form1.email.focus();
                return false;
            }
            var phoneNumber=$("#phone").val();
            if(phoneNumber.length<11)
            {
                alert("订购人的手机号或电话号码不能少于11位（电话请加上区号）");
                document.form1.phone.focus();
                return false;
            }
            $("#OrderPersonInfo").hide();
            $("#OrderPersonInfoText").show();
            $("#M_RealName").html($("#realname").val());
            $("#M_Phone").html(phoneNumber);
            $("#M_Email").html($("#Email").val());
        }
        //编辑订购人信息
        function EditOrderPersonInfo()
        {
            $("#OrderPersonInfo").show();
            $("#OrderPersonInfoText").hide();
        }

        //显示更多地址信息
        function showMoreAddress()
        {
            $(".address-bar").show();
            $("#moreBtn").hide();
            $("#hideBtn").show();
        }

        //隐藏更多地址信息
        function hideMoreAddress()
        {
            if($(".address-bar:gt(1)").children(".name").hasClass("active")){
                $(".name.active").parent().insertBefore(".address-bar:eq(0)");
            }
            $(".address-bar:gt(1)").hide();
            $("#hideBtn").hide();
            $("#moreBtn").show();
        }

        //保存发票信息
        function SaveFPInfo()
        {
            $("#fpinputinfo").addClass('hidden');
            $("#fptextinfo").removeClass('hidden');
            $("#fptaitou").html($("#fp_info01").val());
            $("#fpshr").html($("#fp_info03").val());
            $("#fptel").html($("#fp_info02a").val());
            $("#fpaddress").html($("#fp_info02").val());
            $("#fpedit").html("<a href='javascript:EditFPInfo();'>修改</a>");
        }

        //修改发票信息
        function EditFPInfo()
        {
            $("#fpinputinfo").removeClass('hidden');
            $("#fptextinfo").addClass('hidden');
        }

        //日历判断和显示
        var dateProductHtml=$("#Products").html();
        var productPrice=$("#product_money").text();

        function buyTimePrompt(sendTime)
        {
            $.get("/shopping/CheckClassInTime?sendTime="+sendTime, function(data){
                if(data !="")
                {
                    $("#jieri_notsend").css("display","block");
                    $("#jieri_notsend").html("<span class=\"text-primary\">温馨提醒：您订购的商品包含有"+data+"期间商品暂不发货，请谅解。</span>");

                }else{
                    $("#jieri_notsend").css("display","none");
                    $("#jieri_notsend").html("");
                }
            });
        }

        function checkSendDate(){
            $("#SendDate_ErrorInfo").css("display","none");
            $("#fp_info").css("display","none");
            $("#jieri_notice").css("display","none");
            var sj=$("#send_timezone").val();
            var riqi=$("#send_riqi").val();

            $("#timeSelect4").show();
            if(riqi=="2017-2-13" || riqi=="2017-2-14")
            {
                $("#timeSelect4").hide();//隐藏定时服务
                $("#selectTimes").hide();
            }

            var nowDate=new Date(2017,1,24);
            var pattern=/^(\d{4})-(\d{1,})-(\d{1,})$/i
            var matches=riqi.match(pattern);

            if(matches){
                //匹配 yyyy-mm-dd 的形式
                var tempDate=new Date(matches[1],matches[2]-1,matches[3]);

                if(tempDate.getFullYear()!=matches[1]||tempDate.getMonth()!=(matches[2]-1)||tempDate.getDate()!=matches[3])
                {
                    //检查是否正确日期,比如9999-99-99等形式
                    $("#SendDate_ErrorInfo").css("display","block");
                    $("#dateErrMsg").html("日期不正确,请选择正确的日期, 例如："+nowDate.getFullYear()+"-"+nowDate.getMonth()+"-"+nowDate.getDate()+"");
                    return false;
                }

                var currDate=nowDate;
                var currHour=15;
                var currMinute=27;
                var currTime=currHour*60+currMinute;
                var peiSongTime=parseInt($("#select_hours").val())*60+parseInt($("#select_minutes").val());
                //新年期间部分供应商商品不发货提醒
                buyTimePrompt(riqi);
                //end 新年期间部分供应商商品不发货提醒
                if(tempDate<currDate)  //少于当天的日期报错
                {
                    $("#SendDate_ErrorInfo").css("display","block");
                    $("#dateErrMsg").html("请核对您填写的日期，不能选已经过去的日期！");
                    return false;
                }
                else if(tempDate-currDate==0) //等于当天的日期
                {
                    var compareTime=currTime+90;
                    //if(sj=="上午"&&currHour>=12)
                    if(sj=="上午"&&compareTime>=720&&compareTime<1080)
                    {
                        $("#SendDate_ErrorInfo").css("display","block");
                        $("#dateErrMsg").html("请核对你的配送时间！已过上午配送时间，请选择下午或晚上配送！");
                        return false;
                    }
                    if(sj=="上午"&&compareTime>=1080)
                    {
                        $("#SendDate_ErrorInfo").css("display","block");
                        $("#dateErrMsg").html("请核对你的配送时间！已过上午和下午配送时间，请选择晚上配送！");
                        return false;
                    }
                        //else if(sj=="下午"&&currHour>=18)
                    else if(sj=="下午"&&compareTime>=1080&&compareTime<1230)
                    {
                        $("#SendDate_ErrorInfo").css("display","block");
                        $("#dateErrMsg").html("请核对你的配送时间！已过下午配送时间，请选择晚上配送！");
                        return false;
                    }
                    else if(compareTime>=1230)
                    {
                        $("#SendDate_ErrorInfo").css("display","block");
                        $("#dateErrMsg").html("请核对你的配送时间！请选择明日配送！");
                        return false;
                    }

                    var kps=currHour*60+currMinute+150;
                    var kpsHour=parseInt(kps/60);
                    var kpsHourStr=kpsHour.toString();
                    var kpsMinute=kps%60;
                    var kpsMinuteStr=kpsMinute.toString();
                    if(kpsMinute==0)
                    {
                        kpsMinuteStr="00"
                    }

                    if(sj=="定点服务")
                    {
                        if(currTime>=1255&&currTime<1440)  //当天时间在21:00 -24:00下的订单
                        {
                            $("#SendDate_ErrorInfo").css("display","block");
                            $("#dateErrMsg").html("请核对你的配送时间，定时请选择日期2017年2月24日10点以后的时间");
                            return false;
                        }
                        else if(currTime>0&&currTime<450)//当天时间在0-7:30下的订单
                        {
                            if(peiSongTime<640)
                            {
                                $("#SendDate_ErrorInfo").css("display","block");
                                $("#dateErrMsg").html("请核对你的配送时间，请选择今天10点以后的时间");
                                return false;
                            }
                        }
                        else if(currTime>1110&&currTime<1255)//当天时间18：30-21:00下的单
                        {
                            $("#SendDate_ErrorInfo").css("display","block");
                            $("#dateErrMsg").html("请核对你的配送时间，定时请选择日期2017年2月24日8点以后的时间");
                            return false;
                        }
                        else
                        {
                            if(peiSongTime<kps)
                            {
                                $("#SendDate_ErrorInfo").css("display","block");
                                $("#dateErrMsg").html("请核对你的配送时间，定时请选今天"+kpsHourStr+"点"+kpsMinuteStr+"分以后的时间");
                                return false;
                            }
                        }
                    }
                }

                if((sj=="定点服务")&&(tempDate-currDate==1)&&(currTime>=1260&&currTime<1440))//今天下的单，第二天配送的
                {
                    if(peiSongTime<640)
                    {
                        $("#SendDate_ErrorInfo").css("display","block");
                        $("#dateErrMsg").html("请核对你的配送时间，请选择明天10点以后的时间");
                        return false;
                    }
                }

                riqi=tempDate.getFullYear().toString()+"-"+(tempDate.getMonth()+1).toString()+"-"+tempDate.getDate().toString();
                if(sj=="定点服务")
                {
                    $("#fp_info").css("display","block");
                    if(riqi=="2017-2-14")//情人节
                    {
                        $("#comfirmTime_num").text("100");
                    }
                    else if(riqi=="2017-3-8")//女人节
                    {
                        $("#comfirmTime_num").text("60");
                    }
                    else if(riqi=="2017-5-14")//母亲节
                    {
                        $("#comfirmTime_num").text("60");
                    }
                    else if(riqi=="2017-8-28")//七夕
                    {
                        $("#comfirmTime_num").text("60");
                    }
                    else if(riqi=="2016-12-24"||riqi=="2016-12-25")//圣诞节
                    {
                        $("#comfirmTime_num").text("60");
                    }
                    else if(riqi=="2018-2-14")//情人节
                    {
                        $("#comfirmTime_num").text("100");
                    }
                    else if(riqi=="2018-3-8")//女人节
                    {
                        $("#comfirmTime_num").text("60");
                    }
                    else if(riqi=="2018-5-13")//母亲节
                    {
                        $("#comfirmTime_num").text("60");
                    }
                    else if(riqi=="2018-8-17")//七夕
                    {
                        $("#comfirmTime_num").text("60");
                    }
                    else if(riqi=="2017-12-24"||riqi=="2017-12-25")//圣诞节
                    {
                        $("#comfirmTime_num").text("60");
                    }
                    else
                    {
                        $("#comfirmTime_num").text("30");
                    }
                    UpateSpendMoney();//计算总金额
                }
                else
                {
                    $("#comfirmTime_num").text("0");
                    UpateSpendMoney();//计算总金额
                }
                if(sj!="定点服务"&&sj!="随时都可"&&(riqi=="2016-2-13"||riqi=="2016-2-14"||riqi=="2016-5-20"||riqi=="2016-5-8"||riqi=="2016-8-9"||riqi=="2016-12-24"||riqi=="2016-12-25"||riqi=="2017-2-13"||riqi=="2017-2-14"||riqi=="2017-5-14"||riqi=="2017-8-28"||riqi=="2017-12-24"||riqi=="2017-12-25"))
                {
                    $("#jieri_notice").css("display","block");
                    $("#jieri_notice").html("<span class=\"text-primary\"><font color=\"#FF0000\">温馨提示：</font><font color=\"#545454\">"+(tempDate.getMonth()+1).toString()+"月"+tempDate.getDate().toString()+"日节日属于送花高峰期，我们<span style=\"color:#FF0000\">承诺订单将一定在当天送达，但不承诺具体配送时段。</span>您所选时段，我们配送时将做参考，尽量满足但不做为服务承诺。根据我们多年的服务经验，绝大多数订单可以按照客户预定的时间送达，个别客户因为交通不便利、电话无法联系上而延迟配送，敬请谅解。</font></span>");
                }

                ShowPrice();
                ShowXQ(tempDate);
                return true;
            }
            else{
                $("#SendDate_ErrorInfo").css("display","block");
                $("#dateErrMsg").html("日期格式不正确,请选择正确的日期格式, 例如：2017-2-24");
                return false;
            }
            return true;
        }

        //根据日期和支付方式处理价格
        function ShowPrice()
        {
            try{
                var riqi=$("#send_riqi").val();
                var payway="0";
                var payValue=$("#pays").val();
                if((payValue=="礼品卡支付")||(payValue=="关爱积分支付")||(payValue=="V币支付")||(payValue=="万里通支付")){
                    payway="1";
                }
                var rmd=Math.random();
                $.ajaxSettings.async = false;  //设置getJson同步
                $.getJSON("/shopping/GetDatePrice?riqi="+riqi+"&payway="+payway+"&rmd="+rmd, function(json){    //购物车信息显示
                    if(json.productsNum==0)
                    {
                        alert("加载价格数据失败,请重新下单！");
                        location.href=location.href;//刷新本页面
                    }
                    else
                    {
                        if(payValue=="上门收款")
                        {
                            $("#show_todoors").show();
                            $("#todoors_num").text(10);
                        }
                        else
                        {
                            $("#show_todoors").hide();
                            $("#todoors_num").text(0);
                        }

                        $.each(json.datas,function(index,data)
                        {
                            $("#pro"+data.productCode).html(data.productPrice);
                        })

                        $("#product_money").text(json.productsMoney)
                        var djq=0;
                        if($("#aIsUseLiquan").is(':checked'))
                        {
                            djq=parseInt($("#lq3_sum").val());
                        }
                        if(json.canUseCouponCnt>0){
                            $("#canUseCouponCnt").html("可用"+json.canUseCouponCnt+"张");
                        }
                        var totalMoney=parseInt($("#product_money").text())+parseInt($("#i_spend_fee").text())+parseInt($("#comfirmTime_num").text())+parseInt($("#todoors_num").text())-djq-json.guanaitongMoney;
                        $("#gat_YouHuiSum").text(json.guanaitongMoney);
                        $("#GuanAiTongMoney").text(json.guanaitongMoney);
                        $("#order_total_money").text(totalMoney.toString());
                        $("#totalMoney").val(totalMoney.toString());
                    }
                });
            }catch(ex1){}
        }

        function ShowXQ(dd)
        {
            var TodayDate=new Date(2017,1,24);
            var zj=dd.getDay();
            if(zj==0){$("#xingqi").html("周日");}
            else if(zj==1){$("#xingqi").html("周一");}
            else if(zj==2){$("#xingqi").html("周二");}
            else if(zj==3){$("#xingqi").html("周三");}
            else if(zj==4){$("#xingqi").html("周四");}
            else if(zj==5){$("#xingqi").html("周五");}
            else if(zj==6){$("#xingqi").html("周六");}
            var diffTime=Math.floor((dd.getTime() - TodayDate.getTime()) / (1000 * 60 * 60 * 24));
            if(diffTime==0){$("#xingqi").html("今天");}
            else if(diffTime==1){$("#xingqi").html("明天");}
            else if(diffTime==2){$("#xingqi").html("后天");}
        }

        var txtInput ;
        var divShow ;
        txtInput =document.getElementById("send_riqi");
        divShow = document.getElementById("divShow");
        riliTu = document.getElementById("rlTu");

        txtInput.onfocus =function(e)
        {
            var p =getAbsPoint(txtInput);
            divShow.style.left = p.x +'px';
            divShow.style.top = p.y + txtInput.offsetHeight+ 'px';
            divShow.style.display = "block";
            $("#dialogIframe").attr('src',"/Shopping/RiLi");
        };
        riliTu.onclick =function(e)
        {
            var p =getAbsPoint(txtInput);
            divShow.style.left = p.x +'px';
            divShow.style.top = p.y + txtInput.offsetHeight+ 'px';
            divShow.style.display = "block";
            $("#dialogIframe").attr('src',"/Shopping/RiLi");
        };

        window.onresize=function(){
            var pp =getAbsPoint(txtInput);
            divShow.style.left = pp.x +'px';
            divShow.style.top = pp.y + txtInput.offsetHeight+ 'px';
        };

        document.body.onclick=function(e)
        {
            var oEvent=e||event;
            var oLeft=oEvent.clientX;
            var oTop=oEvent.clientY+ $(window.document).scrollTop();
            var xp =getAbsPoint(divShow);
            var minHeight=xp.y-txtInput.offsetHeight;
            var maxHeight=xp.y+divShow.offsetHeight;
            var minWidth=xp.x;
            var maxWidth=xp.x+divShow.offsetWidth;
            if((oTop<minHeight||oTop>maxHeight)||(oLeft<minWidth||oLeft>maxWidth))
            {
                document.getElementById("divShow").style.display = "none";
                $("#dialogIframe").attr('src',"");
            }
        };
        function getAbsPoint(e)
        {
            var x = e.offsetLeft;
            var y = e.offsetTop;
            while(e = e.offsetParent)
            {
                x += e.offsetLeft;
                y += e.offsetTop;
            }
            return {"x": x, "y": y};
        }
        //日历end

        //日期变化，商品价格随着变化
        $("#send_riqi").on('input propertychange', function() {
            checkSendDate();
        });

        //非支持placeholder浏览器处理
        var oForm1 = document.getElementById('form1');
        var oForm1Inputs = oForm1.getElementsByTagName('input');
        for(var i=0;i<oForm1Inputs.length;i++){
            placeHolder(oForm1Inputs[i],false);
        }
        var oForm1Textarea = oForm1.getElementsByTagName('textarea')[0];
        if(oForm1Textarea!=null && oForm1Textarea!=undefined)
        {
            placeHolder(oForm1Textarea,true);
        }

        function placeHolder(obj, span) {

            if (!obj.getAttribute('placeholder')) return;
            var imitateMode = span===true?true:false;
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
                    oWrapper.style.marginTop = parseInt(getStyle(obj, 'marginTop')) ? getStyle(obj, 'marginTop'): 1 + 'px';
                    oWrapper.style.paddingLeft = getStyle(obj, 'paddingLeft');
                    oWrapper.style.width = obj.offsetWidth - parseInt(getStyle(obj, 'marginLeft')) + 'px';
                    oWrapper.style.height = obj.offsetHeight + 'px';
                    oWrapper.style.lineHeight = obj.nodeName.toLowerCase()=='textarea'? '':obj.offsetHeight + 'px';
                    oWrapper.appendChild(placeHolderCont);
                    obj.parentNode.insertBefore(oWrapper, obj);
                    oWrapper.onclick = function () {
                        obj.focus();
                    }

                    if (typeof(obj.oninput)=='object') {
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
        //非支持placeholder浏览器处理end

        function CheckForm()
        {
            try{
                if(($("#to_name").val().length==0)||($("#to_state").val().length==0)||($("#to_city").val().length==0)||($("#to_address").val().length==0)||($("#peisongfei").val().length==0)||($("#to_mobile").val().length==0)&&($("#to_tel").val().length==0))
                {
                    alert("收货人信息不完整,请填写完整！\nRecipient`s infomation is requested.");
                    $("#to_name").focus();
                    return false;
                }
                if($("#to_mobile").val().length<11&&$("#to_tel").val().length<11 )
                {
                    alert("收货人的手机号或电话号码不能少于11位（电话请加上区号）！");
                    $("#to_mobile").focus();
                    return false;
                }
                if($("#realname").val().length==0||$("#realname").val()=="您的姓名")
                {
                    alert("购买人姓名不可为空，请返回上一步重新填写。");
                    $("#realname").focus();
                    return false;
                }
                if($("#Email").val().length==0||$("#Email").val()=="电子邮箱")
                {
                    alert("请留下您的电子邮箱，接收订单送达通知等，E-mail格式：123@abc.com。");
                    $("#Email").focus();
                    return false;
                }
                if((/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/gi).test($("#Email").val()) == false){
                    alert("Email地址不正确，请重填，E-mail格式：123@abc.com。");
                    document.form1.email.focus();
                    return false;
                }
                if($("#phone").val().length==0||$("#phone").val()=="手机号码或电话")
                {
                    alert("订购人的电话或手机未填写或填写不正确，必须正确填写其中一项。");
                    $("#phone").focus();
                    return false;
                }
                //var regStr = new RegExp('^[0-9]+$');
                if($("#phone").val().length<11)
                {
                    alert("订购人的手机号或电话号码不能少于11位（电话请加上区号）");
                    $("#phone").focus();
                    return false;
                }

                if(ttFlag!="2"&&!checkSendDate())
                {
                    $("#send_riqi").focus();
                    return false;
                }

                var stop_city="北京|上海|武汉|成都";
                var to_state=$("#to_state").val();
                var to_city=$("#to_city").val();
                var send_riqi=$("#send_riqi").val();

                var pattern=/^(\d{4})-(\d{1,})-(\d{1,})$/i
                var matches=send_riqi.match(pattern);
                if(!matches)
                {
                    alert("请选择商品的期待送达日期！");
                    $("#send_riqi").focus();
                    return false;
                }

                if(send_riqi=="2016-2-14")
                {
                    if(stop_city.indexOf(to_state)>-1)
                    {
                        alert("特别提醒：您选择的城市"+to_state+"订单已饱和，现已无法接受2月14日配送的订单(其它日期可正常订购)，不便之处，请谅解！");
                        return false;
                    }
                    if(stop_city.indexOf(to_city)>-1)
                    {
                        alert("特别提醒：您选择的城市"+to_city+"订单已饱和，现已无法接受2月14日配送的订单(其它日期可正常订购)，不便之处，请谅解！");
                        return false;
                    }
                }

                if($("#words").val()=="贺卡留言+署名")
                {
                    $("#words").val("");
                }
                if($("#quest").val()=="选填，如有其他要求请注明,我们尽量满足，120字以内:)")
                {
                    $("#quest").val("");
                }

                if($("#quest").val().length>120)
                {
                    alert("备注要求请保持在120字以内。");
                    $("#quest").focus();
                    return false;
                }

                if($("#ShowFInfo1").is(':checked'))
                {
                    if (($("#fp_info01").val().length<=1)||($("#fp_info02").val().length<=1)||($("#fp_info02a").val().length<=1)||($("#fp_info03").val().length<=1))
                    {
                        window.alert("您选择了寄发票，抬头/收信人/地址/电话4项都必须详细填写。");
                        $("#fp_info01").focus();
                        return false;
                    }
                }
                var peisongfei=$("#peisongfei").val();

                var send_timezone=$("#send_timezone").val();
                var send_time="0"//表示不需要定时服务费
                if(send_timezone=="定点服务")
                {
                    send_time="1";
                }
                var pays_way="0" //表示正常模式计算产品价格
                var pays=$("#pays").val();
                if((pays=="礼品卡支付")||(pays=="关爱积分支付")||(pays=="V币支付")||(pays=="万里通支付"))
                {
                    if($("#aIsUseLiquan").is(':checked'))
                    {
                        alert("特别提醒：万里通积分、关爱积分、V币、礼品卡四种支付方式不能使用优惠券，谢谢！");
                        return false;
                    }
                    if($("#ShowFInfo1").is(':checked'))
                    {
                        alert("特别提醒：万里通积分、关爱积分、V币、礼品卡四种支付方式已开具过发票给合作方，不再开具发票给订购者，如有疑问请联系积分/礼品卡提供方！请取消“我要发票”勾选或选择其他支付方式：比如网上支付、银行汇款等，才能提交订单，谢谢！");
                        return false;
                    }
                    pays_way="1";//表示按市场价计算产品价格
                }
                else if(pays=="上门收款")
                {
                    pays_way="2";
                }

                var lqNumber=""
                if($("#aIsUseLiquan").is(':checked'))
                {
                    lqNumber=$("#lq_code").val();
                }

                $("#DoSubmit").hide();
                $("#Submiting").show();
                $("#form1").submit();
            }
            catch(err)
            {
                var errMsg="PC站下单JS异常："+err.toString();
                var rmds = Math.random();
                $.post("/home/writejslog?rmd="+rmds,"errMsg="+errMsg,null)
                $("#DoSubmit").hide();
                $("#Submiting").show();
                $("#form1").submit();
            }
        }

        document.onkeydown=function(event){
            var e = event || window.event || arguments.callee.caller.arguments[0];
            if(e && e.keyCode==13){
                var isFocus=$("#Email").is(":focus");
                if(isFocus)
                {
                    return false;
                }
            }
        };

        setInterval(KeepContinuting, 60000*1);//1分钟
        function KeepContinuting()
        {
            $.ajax({
                url : '/Shopping/GetCartJson',
                type : 'get',
                async: true,//使用同步的方式,true為非同步方式
                success : function(data){ },
                fail:function(){}
            });
        }
    </script>
    @endsection

