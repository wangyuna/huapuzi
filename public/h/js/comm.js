$(function(){	
	$("#goods_detail_float_price").hide();

	if($("#goods_detail_float").length > 0){
		var goods_detail_float_top =  $("#goods_detail_float").position().top;
		$("#goods_detail_float").height(0);

		$(window).scroll(function(){
			if($(window).scrollTop() > goods_detail_float_top){
				$("#goods_detail_float").find("div").show();
			}else{
				$("#goods_detail_float").find("div").hide();
			}
		});
	}
	if($("#app_phone_btn").length > 0)
	{
		$("#app_phone_container").mouseout(function(){
			$("#app_phone_container").css("display","none");	
		});
	
		$("#app_phone_btn").mouseover(function(){
			var myTop=$('#app_phone_btn').offset().top; 
			var myLeft=$('#app_phone_btn').offset().left-15; 
			$("#app_phone_container").css("left",myLeft + "px");
			$("#app_phone_container").css("top",myTop + "px");
			$("#app_phone_container").css("display","block");	
		});
	}
	if($("#wx_my_btn").length > 0)
	{
		$("#wx_my_container").mouseout(function(){
			$("#wx_my_container").css("display","none");	
		});
	
		$("#wx_my_btn").mouseover(function(){
			var mTop=$('#wx_my_btn').offset().top; 
			var mLeft=$('#wx_my_btn').offset().left-7; 
			$("#wx_my_container").css("left",mLeft + "px");
			$("#wx_my_container").css("top",mTop + "px");
			$("#wx_my_container").css("display","block");	
		});
	}
});

function reqUrlParam(paras)
{ 
	var url = location.href; 
	var paraString = url.substring(url.indexOf("?")+1,url.length).split("&"); 
	var paraObj = {} 
	for (i=0; j=paraString[i]; i++){ 
	paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length); 
	} 
	var returnValue = paraObj[paras.toLowerCase()]; 
	if(typeof(returnValue)=="undefined"){ 
	return ""; 
	}else{ 
	return returnValue; 
	} 
}
String.prototype.trim = function() { return this.replace(/^\*|\s*$/gi, "") }

function setIsFrom(){var sid,uid;var rmd = Math.random();sid=reqUrlParam("sid");uid=reqUrlParam("u_id");sid=sid.trim();uid=uid.trim();if(sid != ""){$.get("/home/from?rmd="+rmd,"sid=" + sid + "&u_id=" + uid,null);}}

$(function(){
setIsFrom();
//搜索框
var $hdText=$('#hd2-sr .hd-text');
$hdText.val('毛衣 女');
$hdText.focus(function(){
	$(this).select();
	$(this).removeClass('lower');
	if($(this).val()==this.defaultValue){
		$(this).val('');
		}
	}).blur(function(){
		if($(this).val()==''){
			$(this).addClass('lower').val(this.defaultValue);
			}
		});
$('#hd2-sr form:first').submit(function(){
	if($hdText.val()==$hdText[0].defaultValue||$hdText.val()==''){
		return false;
		}
	});
//新COMM
if($.browser.msie&&$.browser.version==6){
$('#hd2_nav > li').hover(function(){
	var $slideDiv=$(this).find('div.navp');
	if ($slideDiv.length === 0) {
		return;
	}
	$(this).children("a").addClass("hover");
	$slideDiv.show();
	$(this).append('<iframe id="selectMask" style="position:absolute;left:0;z-index:-1;" frameborder="0"></iframe>');
	$('#selectMask').height($slideDiv.height()+3).width($slideDiv.width()+4);},
	function(){
		var $that=$(this);
		var $slideDiv=$(this).find('div.navp');
		if ($slideDiv.length === 0) {
			return;
		}
		$slideDiv.hide(0);
		$(this).find('iframe').remove().children("a").removeClass('hover');
		});
	//修复IE6不缓存背景图
	try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
}
//下拉导航
$("#hd2_nav > li").hover(function(){
	var $slideDiv=$(this).find('div.navp');
	if ($slideDiv.length === 0) {
		return;
	}
	$(this).children("a").addClass("hover");
	$slideDiv.show();
}, function(){
	var $that=$(this);
	var $slideDiv=$(this).find('div.navp');
	if ($slideDiv.length === 0) {
		return;
	}
	$slideDiv.hide();
	$(this).children("a").removeClass('hover');
});
//我的麦网下拉
$("#hd2 li.myPage").hover(function(){
	$(this).children("ul").show();
	$(this).addClass("hover");
	$(this).css({paddingLeft: "10px",paddingRight: "11px",marginTop: "-1px"});
}, function(){
	$(this).children("ul").hide();
	$(this).removeClass("hover");
	$(this).css({paddingLeft: "11px",paddingRight: "11px",marginTop: "0px"});
});
//购物车效果
$("#hd2-cart").hover(function(){
	$(this).addClass("hover");
}, function(){
	$(this).removeClass("hover")
});
//新导航结束

//页脚hover效果
$("#help2").find("dl").hover(function(){
		$(this).addClass("cur");					   
	},
	function(){
		$(this).removeClass("cur");
	});
//DOMreader结束
});

// 订单号验证
$(function() { $("#AdditionalPayment").click(function() { if ($("#isFrom").val() != "M") { var orderID = $("input[OID='1']").val().trim(); var reg = /^[1-9]{1}\d{6}$|^[1-9]{1}\d{8}$/gi; if (!reg.test(orderID)) { return confirm("订单号输入有误，确定要继续支付？"); } } }); });
// 花语百科栏目页
function menuSwitch(obj) {if ($("#MenuChild").attr("v") == "1") { $("#MenuChild").attr("v", "0"); $(obj).find("img").attr("src", "http://www.hua.com/images/baike/tree_opened.gif"); $("#MenuChild").show(); } else { $("#MenuChild").attr("v", "1");$(obj).find("img").attr("src", "/images/baike/tree_closed.gif");$("#MenuChild").hide();}}
// 花语百科栏搜索验证
$(function() {
	$("form[action='byCity.asp']").submit(function(){var txt = $(this).find("input[name='city']").val();txt = txt.replace(/^\s*|\s*$/gi,"");if(txt.length > 2){
		if(txt.substr(txt.length-1,1) == "市"){$(this).find("input[name='city']").val(txt.substr(0,txt.length-1));}	
	}});
    if ($("form[name='i_search']").get(0) != undefined) {
        $("form[name='i_search']").submit(function() {
            if ($(this).find("input[name='keyword']").val().trim() == "") {
                return false;
            } else {
                return true;
            }
        });
    }
});


// 添加至收藏夹
function addfavorite()
{
	try
	{
   if(document.all)
   {
      window.external.addFavorite("http://www.hua.com/","花礼网 www.hua.com - 销量稳居行业首位");
   }
   else if (window.sidebar)
   {
      window.sidebar.addPanel("花礼网 www.hua.com - 销量稳居行业首位","http://www.hua.com/", "");
   }
   else{
	 alert("对不起，您的浏览器不支持本操作！\n请您使用菜单栏或 Ctrl + D 收藏本站。");   
  }
	}catch(e){
	alert("对不起，您的浏览器不支持本操作！\n请您使用菜单栏或 Ctrl + D 收藏本站。");   
		}
} 

// 返回顶部
$(function(){
	var htmlCode = "<div id=\"toppanel\">";
	htmlCode += "<a href=\"javascript:void(0)\" id=\"toppanel_wx\" class=\"wx\"><img src=\"http://www.hua.com/skins/default/images/sjkhd_1.png\"/></a>";
	htmlCode += "<a href=\"http://www.hua.com/chat/\" target=\"_blank\" id=\"toppanel_zxkf\" class=\"zxkf\"></a>";
	htmlCode += "<a href=\"javascript:void(0)\"   title=\"使用快捷键T也可返回顶部哦！\" id=\"toppanel_top\" class=\"top\"></a>";
	htmlCode += "</div>";
	
	$(document.body).append(htmlCode);
	setPanelPos();
	$(window).scroll(function(){setTopPanel();});
	$(window).resize(function(){setPanelPos();});
	$("#toppanel_wx").mouseover(function(){
		$(this).find("img").css("display","block");	
	});
	$("#toppanel_wx").mouseout(function(){
		$(this).find("img").css("display","none");	
	});
	
	$("#toppanel_top").click(function(){ 
		if(window.document.body.scrollTop){window.document.body.scrollTop=0;}
		if(window.document.documentElement.scrollTop){ window.document.documentElement.scrollTop=0;}
	});
	
	$(window.document).keyup(function(e){
		if(e.keyCode == 84 ||e.keyCode == 116 ){
			if(window.document.body.scrollTop){window.document.body.scrollTop=0;}
			if(window.document.documentElement.scrollTop){ window.document.documentElement.scrollTop=0;}
		}
	});
});


function setTopPanel(){
		var cWidth = window.document.documentElement.clientWidth  >= 	window.document.body.clientWidth ? window.document.documentElement.clientWidth : window.document.body.clientWidth;
		var sTop = window.document.documentElement.scrollTop >= window.document.body.scrollTop ? window.document.documentElement.scrollTop : window.document.body.scrollTop;

		if(sTop > 5 && cWidth > 1056){			
			var right = cWidth - ((cWidth - 1000)/2 + 1000 + 26);
			$("#toppanel_top").css("right", right.toString() + "px");
			$("#toppanel").css("height","220px");
			$("#toppanel_top").css("display","block");
		}else{
			$("#toppanel_top").css("display","none");
			$("#toppanel").css("height","120px");
		}
}

function setPanelPos(){
	var cWidth = window.document.documentElement.clientWidth  >= 	window.document.body.clientWidth ? window.document.documentElement.clientWidth : window.document.body.clientWidth;
	
	if(cWidth > 1056){			
		var right = cWidth - ((cWidth - 1000)/2 + 1000 + 26);
		$("#toppanel").css("right", right.toString() + "px");
	}else{
		$("#toppanel").css("display","none");
	}
}


function addCookie(objName,objValue,objHours){//添加cookie
	var str = objName + "=" + escape(objValue);
	
	if(objHours > 0){//为0时不设定过期时间，浏览器关闭时cookie自动消失
		var date = new Date();
		var ms = objHours*3600*1000;
		date.setTime(date.getTime() + ms);
		str += "; expires=" + date.toGMTString();
	}
	
	document.cookie = str;
}

function getCookie(objName){//获取指定名称的cookie的值
	var arrStr = document.cookie.split("; ");
	var cokValue = "";
	
	for(var i = 0;i < arrStr.length;i ++){
		var temp = arrStr[i].split("=");
		
		if(temp[0] == objName){
			cokValue 	=  unescape(temp[1]);
		}
	} 
	
	return cokValue;
}