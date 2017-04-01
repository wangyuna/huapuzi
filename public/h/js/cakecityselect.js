/*
Ajax 三级省市联动
日期：2012-7-18

settings 参数说明
-----
url:省市数据josn文件路径
prov:默认省份
city:默认城市
dist:默认地区（县）
nodata:无数据状态
required:必选项
------------------------------ */
(function($){
	$.fn.citySelect=function(settings){
		if(this.length<1){return;};

		// 默认值
		settings=$.extend({
		    url: {
		        "citylist": [{ "p": "选择省份", "c": [{ "n": "选择城市" }] },
                    { "p": "A 安徽", "c": [{ "n": "合肥" }, { "n": "芜湖" }, { "n": "蚌埠" }, { "n": "淮南" }, { "n": "马鞍山" }, { "n": "淮北" }, { "n": "铜陵" }, { "n": "安庆" }, { "n": "黄山" }, { "n": "滁州" }, { "n": "阜阳" }, { "n": "宿州" }, { "n": "巢湖" }, { "n": "六安" }, { "n": "亳州" }, { "n": "池州" }, { "n": "宣城" }] },
                    { "p": "B 北京", "c": [{ "n": "北京" }, { "n": "密云县" }, { "n": "延庆县" }] },
                    { "p": "C 重庆", "c": [{ "n": "重庆市区" }, { "n": "巴南区" }, { "n": "合川区" }, { "n": "綦江区" }, { "n": "万州区" }, { "n": "永川区" }, { "n": "长寿区" }, { "n": "万盛区" }, { "n": "双桥区" }, { "n": "涪陵区" }, { "n": "黔江区" }, { "n": "江津区" }, { "n": "南川区" }, { "n": "璧山县" }, { "n": "大足县" }, { "n": "开县" }, { "n": "忠县" }, { "n": "荣昌县" }, { "n": "铜梁县" }, { "n": "梁平县" }, { "n": "垫江县" }, { "n": "城口县" }, { "n": "云阳县" }, { "n": "武隆县" }, { "n": "其他" }] },
                    { "p": "F 福建", "c": [{ "n": "福州" }, { "n": "厦门" }, { "n": "莆田" }, { "n": "三明" }, { "n": "泉州" }, { "n": "漳州" }, { "n": "南平" }, { "n": "龙岩" }, { "n": "宁德" }] },
                    { "p": "G 广东", "c": [{ "n": "广州" }, { "n": "深圳" }, { "n": "佛山" }, { "n": "珠海" }, { "n": "东莞" }, { "n": "中山" }, { "n": "惠州" }, { "n": "韶关" }, { "n": "汕头" }, { "n": "江门" }, { "n": "湛江" }, { "n": "茂名" }, { "n": "肇庆" }, { "n": "梅州" }, { "n": "汕尾" }, { "n": "河源" }, { "n": "阳江" }, { "n": "清远" }, { "n": "潮州" }, { "n": "揭阳" }, { "n": "云浮" }] },
                    { "p": "G 广西", "c": [{ "n": "南宁" }, { "n": "柳州" }, { "n": "桂林" }, { "n": "梧州" }, { "n": "北海" }, { "n": "防城港" }, { "n": "钦州" }, { "n": "贵港" }, { "n": "玉林" }, { "n": "百色" }, { "n": "贺州" }, { "n": "河池" }, { "n": "来宾" }, { "n": "崇左" }] },
                    { "p": "G 贵州", "c": [{ "n": "贵阳" }, { "n": "六盘水" }, { "n": "遵义" }, { "n": "安顺" }, { "n": "铜仁" }, { "n": "黔西南" }, { "n": "毕节" }, { "n": "黔东南" }, { "n": "黔南" }] },
                    { "p": "G 甘肃", "c": [{ "n": "兰州" }, { "n": "嘉峪关" }, { "n": "金昌" }, { "n": "白银" }, { "n": "天水" }, { "n": "武威" }, { "n": "张掖" }, { "n": "平凉" }, { "n": "酒泉" }, { "n": "庆阳" }, { "n": "定西" }, { "n": "陇南" }, { "n": "临夏" }, { "n": "甘南" }] },
                    { "p": "H 黑龙江", "c": [{ "n": "哈尔滨" }, { "n": "齐齐哈尔" }, { "n": "鸡西" }, { "n": "鹤岗" }, { "n": "双鸭山" }, { "n": "大庆" }, { "n": "伊春" }, { "n": "佳木斯" }, { "n": "七台河" }, { "n": "牡丹江" }, { "n": "黑河" }, { "n": "绥化" }, { "n": "大兴安岭" }] },
                    { "p": "H 河北", "c": [{ "n": "石家庄" }, { "n": "唐山" }, { "n": "秦皇岛" }, { "n": "邯郸" }, { "n": "邢台" }, { "n": "保定" }, { "n": "张家口" }, { "n": "承德" }, { "n": "沧州" }, { "n": "廊坊" }, { "n": "衡水" }] },
                    { "p": "H 河南", "c": [{ "n": "郑州" }, { "n": "开封" }, { "n": "洛阳" }, { "n": "平顶山" }, { "n": "安阳" }, { "n": "鹤壁" }, { "n": "新乡" }, { "n": "焦作" }, { "n": "濮阳" }, { "n": "许昌" }, { "n": "漯河" }, { "n": "三门峡" }, { "n": "南阳" }, { "n": "商丘" }, { "n": "信阳" }, { "n": "周口" }, { "n": "驻马店" }, { "n": "济源" }] },
                    { "p": "H 湖北", "c": [{ "n": "武汉" }, { "n": "黄石" }, { "n": "十堰" }, { "n": "宜昌" }, { "n": "襄樊" }, { "n": "鄂州" }, { "n": "荆门" }, { "n": "孝感" }, { "n": "荆州" }, { "n": "黄冈" }, { "n": "咸宁" }, { "n": "随州" }, { "n": "恩施" }, { "n": "仙桃" }, { "n": "潜江" }, { "n": "天门" }, { "n": "神农架" }] },
                    { "p": "H 湖南", "c": [{ "n": "长沙" }, { "n": "株洲" }, { "n": "湘潭" }, { "n": "衡阳" }, { "n": "邵阳" }, { "n": "岳阳" }, { "n": "常德" }, { "n": "张家界" }, { "n": "益阳" }, { "n": "郴州" }, { "n": "永州" }, { "n": "怀化" }, { "n": "娄底" }, { "n": "湘西" }] },
                    { "p": "H 海南", "c": [{ "n": "海口" }, { "n": "三亚" }, { "n": "五指山" }, { "n": "琼海" }, { "n": "儋州" }, { "n": "文昌" }, { "n": "万宁" }, { "n": "东方" }] },
                    { "p": "J 吉林", "c": [{ "n": "长春" }, { "n": "吉林" }, { "n": "四平" }, { "n": "辽源" }, { "n": "通化" }, { "n": "白山" }, { "n": "松原" }, { "n": "白城" }, { "n": "延边" }] },
                    { "p": "J 江苏", "c": [{ "n": "南京" }, { "n": "无锡" }, { "n": "徐州" }, { "n": "常州" }, { "n": "苏州" }, { "n": "南通" }, { "n": "连云港" }, { "n": "淮安" }, { "n": "盐城" }, { "n": "扬州" }, { "n": "镇江" }, { "n": "泰州" }, { "n": "宿迁" }, { "n": "昆山" }, { "n": "江阴" }, { "n": "张家港" }, { "n": "常熟" }, { "n": "太仓" }, { "n": "兴化" }, { "n": "其他" }] },
                    { "p": "J 浙江", "c": [{ "n": "杭州" }, { "n": "宁波" }, { "n": "温州" }, { "n": "嘉兴" }, { "n": "湖州" }, { "n": "绍兴" }, { "n": "金华" }, { "n": "衢州" }, { "n": "舟山" }, { "n": "台州" }, { "n": "丽水" }] },
                    { "p": "J 江西", "c": [{ "n": "南昌" }, { "n": "景德镇" }, { "n": "萍乡" }, { "n": "九江" }, { "n": "新余" }, { "n": "鹰潭" }, { "n": "赣州" }, { "n": "吉安" }, { "n": "宜春" }, { "n": "抚州" }, { "n": "上饶" }] },
                    { "p": "L 辽宁", "c": [{ "n": "沈阳" }, { "n": "大连" }, { "n": "鞍山" }, { "n": "抚顺" }, { "n": "本溪" }, { "n": "丹东" }, { "n": "锦州" }, { "n": "营口" }, { "n": "阜新" }, { "n": "辽阳" }, { "n": "盘锦" }, { "n": "铁岭" }, { "n": "朝阳" }, { "n": "葫芦岛" }] },
                    { "p": "N 宁夏", "c": [{ "n": "银川" }, { "n": "石嘴山" }, { "n": "吴忠" }, { "n": "固原" }, { "n": "中卫" }] },
                    { "p": "N 内蒙古", "c": [{ "n": "呼和浩特" }, { "n": "包头" }, { "n": "乌海" }, { "n": "赤峰" }, { "n": "通辽" }, { "n": "鄂尔多斯" }, { "n": "呼伦贝尔" }, { "n": "巴彦淖尔" }, { "n": "乌兰察布" }, { "n": "兴安" }, { "n": "锡林郭勒" }, { "n": "阿拉善" }] },
                    { "p": "Q 青海", "c": [{ "n": "西宁" }, { "n": "其他" }] },
                    { "p": "S 山西", "c": [{ "n": "太原" }, { "n": "大同" }, { "n": "阳泉" }, { "n": "长治" }, { "n": "晋城" }, { "n": "朔州" }, { "n": "晋中" }, { "n": "运城" }, { "n": "忻州" }, { "n": "临汾" }, { "n": "吕梁" }] },
                    { "p": "S 上海", "c": [{ "n": "上海" }, { "n": "崇明县" }] },
                    { "p": "S 山东", "c": [{ "n": "济南" }, { "n": "青岛" }, { "n": "淄博" }, { "n": "枣庄" }, { "n": "东营" }, { "n": "烟台" }, { "n": "潍坊" }, { "n": "济宁" }, { "n": "泰安" }, { "n": "威海" }, { "n": "日照" }, { "n": "莱芜" }, { "n": "临沂" }, { "n": "德州" }, { "n": "聊城" }, { "n": "滨州" }, { "n": "菏泽" }] },
                    { "p": "S 四川", "c": [{ "n": "成都" }, { "n": "自贡" }, { "n": "攀枝花" }, { "n": "泸州" }, { "n": "德阳" }, { "n": "绵阳" }, { "n": "广元" }, { "n": "遂宁" }, { "n": "内江" }, { "n": "乐山" }, { "n": "南充" }, { "n": "眉山" }, { "n": "宜宾" }, { "n": "广安" }, { "n": "达川" }, { "n": "雅安" }, { "n": "巴中" }, { "n": "资阳" }, { "n": "阿坝" }, { "n": "甘孜" }, { "n": "凉山" }] },
                    { "p": "S 陕西", "c": [{ "n": "西安" }, { "n": "铜川" }, { "n": "宝鸡" }, { "n": "咸阳" }, { "n": "渭南" }, { "n": "延安" }, { "n": "汉中" }, { "n": "榆林" }, { "n": "安康" }, { "n": "商洛" }] },
                    { "p": "T 天津", "c": [{ "n": "天津" }, { "n": "宁河县" }, { "n": "静海县" }, { "n": "蓟县" }] },
                    { "p": "X 西藏", "c": [{ "n": "拉萨" }, { "n": "其他" }] },
                    { "p": "X 新疆", "c": [{ "n": "乌鲁木齐" }, { "n": "克拉玛依" }, { "n": "吐鲁番" }, { "n": "哈密" }, { "n": "昌吉" }, { "n": "博尔塔拉" }, { "n": "巴音郭楞" }, { "n": "阿克苏" }, { "n": "克孜勒苏" }, { "n": "喀什" }, { "n": "和田" }, { "n": "伊犁" }, { "n": "塔城" }, { "n": "阿勒泰" }, { "n": "石河子" }, { "n": "阿拉尔" }, { "n": "图木舒克" }, { "n": "五家渠" }] },
                    { "p": "Y 云南", "c": [{ "n": "昆明" }, { "n": "曲靖" }, { "n": "玉溪" }, { "n": "保山" }, { "n": "昭通" }, { "n": "丽江" }, { "n": "普洱" }, { "n": "临沧" }, { "n": "楚雄" }, { "n": "红河" }, { "n": "文山" }, { "n": "西双版纳" }, { "n": "大理" }, { "n": "德宏" }, { "n": "怒江" }, { "n": "迪庆" }] }]
		    },
			prov:null,
			city:null,
			dist:null,
			nodata:null,
			required:true
		},settings);

		var box_obj=this;
		var prov_obj=box_obj.find("#to_state");
		var city_obj=box_obj.find("#to_city");
		var dist_obj=box_obj.find("#to_dist");
		var prov_val=settings.prov;
		var city_val=settings.city;
		var dist_val=settings.dist;
		var select_prehtml=(settings.required) ? "" : "<option value=''>请选择</option>";
		var city_json;

		// 赋值市级函数
		var cityStart=function(){
			var prov_id=prov_obj.get(0).selectedIndex;
			if(!settings.required){
				prov_id--;
			};
			city_obj.empty().attr("disabled",true);
			dist_obj.empty().attr("disabled",true);

			if(prov_id<0||typeof(city_json.citylist[prov_id].c)=="undefined"){
				if(settings.nodata=="none"){
					city_obj.css("display","none");
					dist_obj.css("display","none");
				}else if(settings.nodata=="hidden"){
					city_obj.css("visibility","hidden");
					dist_obj.css("visibility","hidden");
				};
				return;
			};
			
			// 遍历赋值市级下拉列表
			temp_html=select_prehtml;
			$.each(city_json.citylist[prov_id].c,function(i,city){
				temp_html+="<option value='"+city.n+"'>"+city.n+"</option>";
			});
			city_obj.html(temp_html).attr("disabled",false).css({"display":"","visibility":""});
			distStart();
		};

		// 赋值地区（县）函数
		var distStart=function(){
			var prov_id=prov_obj.get(0).selectedIndex;
			var city_id=city_obj.get(0).selectedIndex;
			if(!settings.required){
				prov_id--;
				city_id--;
			};
			dist_obj.empty().attr("disabled",true);

			if(prov_id<0||city_id<0||typeof(city_json.citylist[prov_id].c[city_id].a)=="undefined"){
				if(settings.nodata=="none"){
					dist_obj.css("display","none");
				}else if(settings.nodata=="hidden"){
					dist_obj.css("visibility","hidden");
				};
				return;
			};
			
			// 遍历赋值市级下拉列表
			temp_html=select_prehtml;
			$.each(city_json.citylist[prov_id].c[city_id].a,function(i,dist){
				temp_html+="<option value='"+dist.s+"'>"+dist.s+"</option>";
			});
			dist_obj.html(temp_html).attr("disabled",false).css({"display":"","visibility":""});
		};

		var init=function(){
			// 遍历赋值省份下拉列表
			temp_html=select_prehtml;
			$.each(city_json.citylist,function(i,prov){
				temp_html+="<option value='"+prov.p+"'>"+prov.p+"</option>";
			});
			prov_obj.html(temp_html);

			// 若有传入省份与市级的值，则选中。（setTimeout为兼容IE6而设置）
			setTimeout(function(){
				if(settings.prov!=null){
					prov_obj.val(settings.prov);
					cityStart();
					setTimeout(function(){
						if(settings.city!=null){
							city_obj.val(settings.city);
							distStart();
							setTimeout(function(){
								if(settings.dist!=null){
									dist_obj.val(settings.dist);
								};
							},1);
						};
					},1);
				};
			},1);

			// 选择省份时发生事件
			prov_obj.bind("change",function(){
				cityStart();
			});

			// 选择市级时发生事件
			city_obj.bind("change",function(){
				distStart();
			});
		};

		// 设置省市json数据
		if(typeof(settings.url)=="string"){
			$.getJSON(settings.url,function(json){
				city_json=json;
				init();
			});
		}else{
			city_json=settings.url;
			init();
		};
	};
})(jQuery);