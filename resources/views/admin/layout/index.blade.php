<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/d/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/custom-plugins/picklist/picklist.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/plugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/plugins/ibutton/jquery.ibutton.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/plugins/cleditor/jquery.cleditor.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/d/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/d/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/jui/jquery-ui.custom.css" media="screen">
@section('css')
@show
<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/d/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/d/css/themer.css" media="screen">

<title>
    @section('title')
        
    @show

</title>

</head>

<body>

    <!-- Themer (Remove if not needed) -->  
    <div id="mws-themer">
        <div id="mws-themer-css-dialog">
            <form class="mws-form">
                <div class="mws-form-row">
                    <div class="mws-form-item">
                        <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->

    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <a href="/admin"><img src="/d/images/mws-logo.png" alt="mws admin"></a>
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-messages">
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/d/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, {{ session('adminname') }}
                    </div>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="/admin/login">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            <!-- Main Navigation -->

            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-list"></i>用户信息</a>
                        <ul class="closed">
                            <li><a href="/admin/user/hindex">查看用户</a></li>
                            <li><a href="/admin/user/index">查看管理员</a></li>
                            <li><a href="/admin/user/add">添加管理员</a></li>
                        </ul>
                    </li>      
                </ul>
            </div>
            

            <!-- Main Navigation -->

            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-list"></i>分类管理</a>
                        <ul class="closed">
                            <li><a href="/admin/cate/index">分类列表</a></li>
                            <li><a href="/admin/cate/add">分类添加</a></li>
                        </ul>
                    </li>      
                </ul>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-shopping-cart"></i>商品管理</a>
                        <ul class="closed">
                            <li><a href="/admin/goods/index">浏览商品</a></li>                            
                            <li><a href="/admin/goods/add">添加商品</a></li>                            
                        </ul>
                    </li>      
                </ul>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-tags"></i>订单管理</a>
                        <ul class="closed">
                            <li><a href="/admin/indent/index/1">查看新订单</a></li>
                            <li><a href="/admin/indent/index/2">查看发送订单</a></li>
                            <li><a href="/admin/indent/index/3">查看已完成订单</a></li>
                        </ul>
                    </li>      
                </ul>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-volume-up"></i>评论中心</a>
                        <ul class="closed">
                            <li><a href="/admin/pinglun/index/1">显示评论</a></li>                            
                            <li><a href="/admin/pinglun/index/2">隐藏评论</a></li>                            
                        </ul>
                    </li>      
                </ul>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-book"></i>文章中心</a>
                        <ul class="closed">
                            <li><a href="/admin/artical/index">浏览信息</a></li>                            
                            <li><a href="/admin/artical/add">添加文章</a></li>                            
                        </ul>
                    </li>      
                </ul>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-repeat"></i>轮播广告</a>
                        <ul class="closed">
                            <li><a href="/admin/lun/index">查看轮播</a></li>
                            <li><a href="/admin/lun/add">添加图片</a></li>
                        </ul>
                    </li>      
                </ul>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-trophy-2"></i>帮助管理</a>
                        <ul class="closed">
                            <li><a href="/admin/help/index">浏览信息</a></li>                            
                            <li><a href="/admin/help/add">添加帮助</a></li>                            
                        </ul>
                    </li>      
                </ul>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-comments-2"></i>通知模块</a>
                        <ul class="closed">
                            <li><a href="/admin/information/add">发送通知</a></li>
                        </ul>
                    </li>      
                </ul>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-link"></i>友情链接</a>
                        <ul class="closed">
                            <li><a href="/admin/friShip/index">链接管理</a></li>
                            <li><a href="/admin/friShip/add">添加链接</a></li>
                        </ul>
                    </li>      
                </ul>
            </div>
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-tools"></i>网站配置</a>
                        <ul class="closed">
                            <li><a href="/admin/config/add">网站配置</a></li>
                        </ul>
                    </li>      
                </ul>
            </div>
        </div>
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <!-- Inner Container Start -->
                <div class="container">
                    @if(session('error'))
                    <div class="mws-form-message warning">
                        {{ session('error') }}
                    </div>
                    @endif


                    @if(session('success'))
                    <div class="mws-form-message info">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    @section('content')

                    @show
                </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
                Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/d/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/d/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/d/js/libs/jquery.placeholder.min.js"></script>
    <script src="/d/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/d/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/d/jui/jquery-ui.custom.min.js"></script>
    <script src="/d/jui/js/jquery.ui.touch-punch.js"></script>

    <script src="/d/jui/js/globalize/globalize.js"></script>
    <script src="/d/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

    <!-- Plugin Scripts -->
    <script src="/d/custom-plugins/picklist/picklist.min.js"></script>
    <script src="/d/plugins/autosize/jquery.autosize.min.js"></script>
    <script src="/d/plugins/select2/select2.min.js"></script>
    <script src="/d/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/d/plugins/validate/jquery.validate-min.js"></script>
    <script src="/d/plugins/ibutton/jquery.ibutton.min.js"></script>
    <script src="/d/plugins/cleditor/jquery.cleditor.min.js"></script>
    <script src="/d/plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script src="/d/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
    <script src="/d/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

    <!-- Core Script -->
    <script src="/d/bootstrap/js/bootstrap.min.js"></script>
    <script src="/d/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/d/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/d/js/demo/demo.formelements.js"></script>

</body>
</html>


