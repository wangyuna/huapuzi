<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// 后台登录路由
Route::get('/admin/login','admin\AdminController@login');
// 后台登录判断页面
Route::controller('/admin/check','admin\AdminController');

// 检测后台是否登录 判断条件
Route::group(['middleware'=>'adminlogin'],function(){
	// 后台主页面
	Route::get('/admin','admin\AdminController@index');
	// 用户模块控制器
	Route::controller('/admin/user','admin\UserController');
	// 后台 网站分类模块路由
	Route::controller('/admin/cate','admin\CateController');
	// 后台 网站配置路由
	Route::controller("/admin/config","admin\ConfigController");
	// 后台 通知模块路由
	Route::controller("/admin/information","admin\InformationController");
	// 后台 文章模块路由
	Route::controller("/admin/artical","admin\ArticalController");
	// 后台商品路由
	Route::controller('/admin/goods','admin\GoodsController');
	// 友情链接
	Route::controller('/admin/friShip','admin\FrishipController');
	//后台轮播图路由
	Route::controller("/admin/lun","admin\LunController");
	//后台 帮助模块路由
	Route::controller("/admin/help","admin\HelpController");
	//后台 订单管理模块路由
	Route::controller('/admin/indent','admin\IndentController');
	// 后台 评论模块路由
	Route::controller('/admin/pinglun','admin\PinglunController');
});


Route::group(['middleware'=>'status'],function(){

	// 前台商品详情页路由
	Route::get('/home/shop/{id}','home\ShopController@index');
	// 前台 收藏模块路由 
	Route::controller('/home/collect','home\CollectController');
	// 前台注册
	Route::controller('/home/index_Register','home\RegisterController');
	// 前台登录路由
	Route::controller('/home/index_Login','home\LoginController');
	// Route::get('/home/shopping/{id}','home\ShopController@shopping');
	// 前台网站首页
	Route::get('/home','home\HomeController@index');
	Route::get('/','home\HomeController@index');
	// 验证码
	Route::get('/code','home\CodeController@index');
	// 邮箱验证
	Route::get('/register','home\RegisterController@register');
	//前台 网站无限分类路由
	// Route::get('/home/index','home\HomeController@index');
	// 前台分类页面
	Route::get('/home/flower','home\HomeController@flower');
	// 前台分类页面二级分类
	Route::get('/home/type','home\HomeController@type');
	// 前台分类页面颜色分类
	Route::get('/home/color','home\HomeController@color');
	// 前台分类页面价格分类
	Route::get('/home/pricerea','home\HomeController@pricerea');
	// 前台分类页面鲜花枝数分类
	Route::get('/home/num','home\HomeController@num');
	//前台 帮助模块路由
	Route::get("/home/help","home\HhelpController@index");
	//前台 ajax帮助模块路由 
	Route::get("/home/xiangxi","home\HxhelpController@index");
	//前台 文章模块接收路由
	Route::controller("/home/artical","home\HuayuController");
	// 前台忘记密码 判断条件路由
	Route::get('/home/change','home\HomeController@change');
	// 前台忘记密码 路由
	Route::get('/home/update','home\HomeController@update');
	

	// 检测前台是否登录 判断条件
	Route::group(['middleware'=>'homelogin'],function(){
		// 前台购物车路由
		Route::get('/home/doshop','home\ShopController@doshop');
		//删除购物车商品
		Route::controller("/home/cart","home\ShopController");
		// 前台订单页面
		Route::controller('/sendinfo','home\SendinfoController');
		// 前台订单页面日历路由
		Route::get('/Shopping/RiLi','home\WinaddressController@RiLi');
		// 前台收货地址路由
		Route::get('/shopping/WinAddress','home\WinaddressController@WinAddress');
		//前台 通知模块路由
		Route::get("/home/information","home\HinformationController@information");
		//前台 ajax发送路由
		Route::get("/home/openinformation","home\HinformationController@openinformation");
		//前天 ajax发送到对应路由进行消息的删除操作
		Route::get("/home/delinformation","home\HinformationController@delinformation");
		// 前台退出清空session路由
		Route::get('/session','home\HomeController@session');
		// 实名认证
		Route::controller('/home/att','home\AttController');
		// 前台 订单路由
		Route::get('/home/dingdan','home\DingdanController@dingdan');
		Route::controller('/home/dingdan','home\DingdanController');
		// 前台 评论模块路由
		Route::controller('/pinglun','home\PinglunController');
	});
});











//前台轮播图路由
// Route::get("/home/index","home\HlunController@index");






// 1
// Route::controller('/home/forgot','home\HomeController');

// 
// Route::get('/home/select','home\HomeController@select');













//前台 个人中心模版路由
// Route::get('/home/center','home\DingdanController@index');


// Route::get('/home/information','home\DingdanController@information');





































































































































































