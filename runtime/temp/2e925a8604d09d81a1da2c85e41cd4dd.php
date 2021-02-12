<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:80:"D:\phpstudy\WWW\bcthinkphpshop\public/../application/admin\view\index\index.html";i:1610953590;s:70:"D:\phpstudy\WWW\bcthinkphpshop\application\admin\view\common\base.html";i:1610953590;s:72:"D:\phpstudy\WWW\bcthinkphpshop\application\admin\view\common\header.html";i:1610953590;s:72:"D:\phpstudy\WWW\bcthinkphpshop\application\admin\view\common\navbar.html";i:1610953590;s:73:"D:\phpstudy\WWW\bcthinkphpshop\application\admin\view\common\sidebar.html";i:1612405371;s:73:"D:\phpstudy\WWW\bcthinkphpshop\application\admin\view\common\chatbar.html";i:1610953590;s:77:"D:\phpstudy\WWW\bcthinkphpshop\application\admin\view\common\page-header.html";i:1610953590;}*/ ?>

    <!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 1.6.0
Purchase: https://wrapbootstrap.com/theme/beyondadmin-adminapp-angularjs-mvc-WB06R48S4
-->


<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <title>B-C电商商城</title>

    <meta name="description" content="BeyondAdmin Versions"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/static/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet"/>
    <link id="bootstrap-rtl-link" href="" rel="stylesheet"/>
    <link href="/static/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/static/css/weather-icons.min.css" rel="stylesheet"/>

    <!--Fonts-->
<!--        <link href="../fonts.googleapis.com/css@family=open+sans_3a300italic,400italic,600italic,700italic,400,600,700,300.css" rel="stylesheet" type="text/css">-->

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/css/beyond.min.css" rel="stylesheet"/>
    <link href="/static/css/demo.min.css" rel="stylesheet"/>
    <link href="/static/css/typicons.min.css" rel="stylesheet"/>
    <link href="/static/css/animate.min.css" rel="stylesheet"/>
    <link href="/static/css/datatables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <!--卑微小谭自定义样式 styles-->
    <link rel="stylesheet" href="/static/css/common/add-common.css">

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/skins.min.js"></script>
    <script src="/static/layui/layui.js"></script>
    <script src="/static/js/common/cost-common.js"></script>
</head>
<!-- /Head -->
    <!-- Body -->
    <body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/static/img/logo.png" alt=""/>
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class=" dropdown-toggle" data-toggle="dropdown" title="Help" href="#">
                                <i class="icon fa fa-warning"></i>
                            </a>
                            <!--Notification Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-notifications">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <div class="notification-icon">
                                                <i class="fa fa-phone bg-themeprimary white"></i>
                                            </div>
                                            <div class="notification-body">
                                                <span class="title">Skype meeting with Patty</span>
                                                <span class="description">01:00 pm</span>
                                            </div>
                                            <div class="notification-extra">
                                                <i class="fa fa-clock-o themeprimary"></i>
                                                <span class="description">office</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <div class="notification-icon">
                                                <i class="fa fa-check bg-darkorange white"></i>
                                            </div>
                                            <div class="notification-body">
                                                <span class="title">Uncharted break</span>
                                                <span class="description">03:30 pm - 05:15 pm</span>
                                            </div>
                                            <div class="notification-extra">
                                                <i class="fa fa-clock-o darkorange"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <div class="notification-icon">
                                                <i class="fa fa-gift bg-warning white"></i>
                                            </div>
                                            <div class="notification-body">
                                                <span class="title">Kate birthday party</span>
                                                <span class="description">08:30 pm</span>
                                            </div>
                                            <div class="notification-extra">
                                                <i class="fa fa-calendar warning"></i>
                                                <i class="fa fa-clock-o warning"></i>
                                                <span class="description">at home</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <div class="notification-icon">
                                                <i class="fa fa-glass bg-success white"></i>
                                            </div>
                                            <div class="notification-body">
                                                <span class="title">Dinner with friends</span>
                                                <span class="description">10:30 pm</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-footer ">
                                        <span>
                                            Today, March 28
                                        </span>
                                    <span class="pull-right">
                                            10°c
                                            <i class="wi wi-cloudy"></i>
                                        </span>
                                </li>
                            </ul>
                            <!--/Notification Dropdown-->
                        </li>
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" title="Mails" href="#">
                                <i class="icon fa fa-envelope"></i>
                                <span class="badge">3</span>
                            </a>
                            <!--Messages Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages">
                                <li>
                                    <a href="#">
                                        <img src="/static/img/avatars/divyia.jpg" class="message-avatar"
                                             alt="Divyia Austin">
                                        <div class="message">
                                                <span class="message-sender">
                                                    Divyia Austin
                                                </span>
                                            <span class="message-time">
                                                    2 minutes ago
                                                </span>
                                            <span class="message-subject">
                                                    Here's the recipe for apple pie
                                                </span>
                                            <span class="message-body">
                                                    to identify the sending application when the senders image is shown for the main icon
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/static/img/avatars/bing.png" class="message-avatar"
                                             alt="Microsoft Bing">
                                        <div class="message">
                                                <span class="message-sender">
                                                    Bing.com
                                                </span>
                                            <span class="message-time">
                                                    Yesterday
                                                </span>
                                            <span class="message-subject">
                                                    Bing Newsletter: The January Issue‏
                                                </span>
                                            <span class="message-body">
                                                    Discover new music just in time for the Grammy® Awards.
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/static/img/avatars/adam-jansen.jpg" class="message-avatar"
                                             alt="Divyia Austin">
                                        <div class="message">
                                                <span class="message-sender">
                                                    Nicolas
                                                </span>
                                            <span class="message-time">
                                                    Friday, September 22
                                                </span>
                                            <span class="message-subject">
                                                    New 4K Cameras
                                                </span>
                                            <span class="message-body">
                                                    The 4K revolution has come over the horizon and is reaching the general populous
                                                </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!--/Messages Dropdown-->
                        </li>

                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" title="Tasks" href="#">
                                <i class="icon fa fa-tasks"></i>
                                <span class="badge">4</span>
                            </a>
                            <!--Tasks Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-tasks dropdown-arrow ">
                                <li class="dropdown-header bordered-darkorange">
                                    <i class="fa fa-tasks"></i>
                                    4 Tasks In Progress
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Account Creation</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-xs">
                                            <div style="width: 65%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Profile Data</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-xs">
                                            <div style="width: 35%" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Updating Resume</span>
                                            <span class="pull-right">75%</span>
                                        </div>

                                        <div class="progress progress-xs">
                                            <div style="width: 75%" class="progress-bar progress-bar-darkorange"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Adding Contacts</span>
                                            <span class="pull-right">10%</span>
                                        </div>

                                        <div class="progress progress-xs">
                                            <div style="width: 10%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </a>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="#">
                                        See All Tasks
                                    </a>
                                    <button class="btn btn-xs btn-default shiny darkorange icon-only pull-right"><i
                                            class="fa fa-check"></i></button>
                                </li>
                            </ul>
                            <!--/Tasks Dropdown-->
                        </li>
                        <li>
                            <a class="wave in" id="chat-link" title="Chat" href="#">
                                <i class="icon glyphicon glyphicon-comment"></i>
                            </a>
                        </li>
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/img/avatars/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="email"><a>David.Stevenson@live.com</a></li>
                                <!--Avatar Area-->
                                <li>
                                    <div class="avatar-area">
                                        <img src="/static/img/avatars/adam-jansen.jpg" class="avatar">
                                        <span class="caption">Change Photo</span>
                                    </div>
                                </li>
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="profile.html" class="pull-left">Profile</a>
                                    <a href="#" class="pull-right">Setting</a>
                                </li>
                                <!--Theme Selector Area-->
                                <li class="theme-area">
                                    <ul class="colorpicker" id="skin-changer">
                                        <li><a class="colorpick-btn" href="#" style="background-color: #5DB2FF;"
                                               rel="/static/css/skins/blue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #2dc3e8;"
                                               rel="/static/css/skins/azure.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #03B3B2;"
                                               rel="/static/css/skins/teal.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #53a93f;"
                                               rel="/static/css/skins/green.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #FF8F32;"
                                               rel="/static/css/skins/orange.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #cc324b;"
                                               rel="/static/css/skins/pink.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #AC193D;"
                                               rel="/static/css/skins/darkred.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #8C0095;"
                                               rel="/static/css/skins/purple.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #0072C6;"
                                               rel="/static/css/skins/darkblue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #585858;"
                                               rel="/static/css/skins/gray.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #474544;"
                                               rel="/static/css/skins/black.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color: #001940;"
                                               rel="/static/css/skins/deepblue.min.css"></a></li>
                                    </ul>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="login.html">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                    <div class="setting">
                        <a id="btn-setting" title="Setting" href="#">
                            <i class="icon glyphicon glyphicon-cog"></i>
                        </a>
                    </div>
                    <div class="setting-container">
                        <label>
                            <input type="checkbox" id="checkbox_fixednavbar">
                            <span class="text">Fixed Navbar</span>
                        </label>
                        <label>
                            <input type="checkbox" id="checkbox_fixedsidebar">
                            <span class="text">Fixed SideBar</span>
                        </label>
                        <label>
                            <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                            <span class="text">Fixed BreadCrumbs</span>
                        </label>
                        <label>
                            <input type="checkbox" id="checkbox_fixedheader">
                            <span class="text">Fixed Header</span>
                        </label>
                    </div>
                    <!-- Settings -->
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input type="text" class="searchinput"/>
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="javascript:void(0)" data-load-href="<?php echo url('index/home'); ?>">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>
        <!--UI 商品管理-->
        <li>
            <a href="javascript:void(0)" class="menu-dropdown">
                <i class="menu-icon fa fa-cubes"></i>
                <span class="menu-text"> 商品管理 </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">商品列表</span>
                    </a>
                </li>
                <li >
                    <a href="javascript:void(0)">
                        <span class="menu-text">添加商品</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="menu-dropdown">
                                    <span class="menu-text">
                                        商品品牌
                                    </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">
<!--                        <li>-->
<!--                            <a href="javascript:void(0)" data-load-href="<?php echo url('brand/add'); ?>">-->
<!--                                <i class="menu-icon fa fa-rocket"></i>-->
<!--                                <span class="menu-text">品牌添加</span>-->
<!--                            </a>-->
<!--                        </li>-->
                        <li>
                            <a href="javascript:void(0)" data-load-href="<?php echo url('brand/lists'); ?>">
                                <i class="menu-icon fa fa-rocket"></i>
                                <span class="menu-text">品牌列表</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">商品分类</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">商品类型</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">商品回收站</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--UI 文章管理-->
        <li>
            <a href="javascript:void(0)" class="menu-dropdown">
                <i class="menu-icon fa fa-cubes"></i>
                <span class="menu-text"> 文章管理 </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="javascript:void(0)" data-load-href="<?php echo url('cate/lists'); ?>">
                        <i class="menu-icon fa fa-rocket"></i>
                        <span class="menu-text">文章栏目</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--UI 促销管理-->
        <li>
            <a href="javascript:void(0)" class="menu-dropdown">
                <i class="menu-icon fa fa-slideshare"></i>
                <span class="menu-text"> 促销管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">团购活动</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">积分商城</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">优惠券</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--UI 订单管理-->
        <li>
            <a href="javascript:void(0)" class="menu-dropdown">
                <i class="menu-icon fa fa-ambulance"></i>
                <span class="menu-text"> 订单管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">订单列表</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">订单查询</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--UI 会员管理-->
        <li>
            <a href="javascript:void(0)" class="menu-dropdown">
                <span class="menu-icon glyphicon glyphicon-user"></span>
                <span class="menu-text"> 会员管理 </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">会员列表</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">会员等级</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">会员留言</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--UI 权限管理-->
        <li>
            <a href="javascript:void(0)" class="menu-dropdown">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> 权限管理 </span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <!--UI 系统设置-->
        <li>
            <a href="javascript:void(0)" class="menu-dropdown">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> 系统设置 </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">商店设置</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">会员注册项设置</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">支付方式设置</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--UI 数据库管理-->
        <li>
            <a href="javascript:void(0)" class="menu-dropdown">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> 数据库管理 </span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">数据备份</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">数据表优化</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--UI 短信管理-->
        <li>
            <a href="javascript:void(0)" class="menu-dropdown">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> 短信管理 </span>

                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">发送短信</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="menu-text">短信签名</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /Sidebar Menu -->
</div>
<!-- /Page Sidebar -->
            <!-- Chat Bar -->
<div id="chatbar" class="page-chatbar">
    <div class="chatbar-contacts">
        <div class="contacts-search">
            <input type="text" class="searchinput" placeholder="Search Contacts"/>
            <i class="searchicon fa fa-search"></i>
            <div class="searchhelper">Search Your Contacts and Chat History</div>
        </div>
        <ul class="contacts-list">
            <li class="contact">
                <div class="contact-avatar">
                    <img src="/static/img/avatars/divyia.jpg"/>
                </div>
                <div class="contact-info">
                    <div class="contact-name">Divyia Philips</div>
                    <div class="contact-status">
                        <div class="online"></div>
                        <div class="status">online</div>
                    </div>
                    <div class="last-chat-time">
                        last week
                    </div>
                </div>
            </li>
            <li class="contact">
                <div class="contact-avatar">
                    <img src="/static/img/avatars/nicolai-larson.jpg"/>
                </div>
                <div class="contact-info">
                    <div class="contact-name">Adam Johnson</div>
                    <div class="contact-status">
                        <div class="offline"></div>
                        <div class="status">left 4 mins ago</div>
                    </div>
                    <div class="last-chat-time">
                        today
                    </div>
                </div>
            </li>
            <li class="contact">
                <div class="contact-avatar">
                    <img src="/static/img/avatars/john-smith.jpg"/>
                </div>
                <div class="contact-info">
                    <div class="contact-name">John Smith</div>
                    <div class="contact-status">
                        <div class="online"></div>
                        <div class="status">online</div>
                    </div>
                    <div class="last-chat-time">
                        1:57 am
                    </div>
                </div>
            </li>
            <li class="contact">
                <div class="contact-avatar">
                    <img src="/static/img/avatars/osvaldus-valutis.jpg"/>
                </div>
                <div class="contact-info">
                    <div class="contact-name">Osvaldus Valutis</div>
                    <div class="contact-status">
                        <div class="online"></div>
                        <div class="status">online</div>
                    </div>
                    <div class="last-chat-time">
                        today
                    </div>
                </div>
            </li>
            <li class="contact">
                <div class="contact-avatar">
                    <img src="/static/img/avatars/javi-jimenez.jpg"/>
                </div>
                <div class="contact-info">
                    <div class="contact-name">Javi Jimenez</div>
                    <div class="contact-status">
                        <div class="online"></div>
                        <div class="status">online</div>
                    </div>
                    <div class="last-chat-time">
                        today
                    </div>
                </div>
            </li>
            <li class="contact">
                <div class="contact-avatar">
                    <img src="/static/img/avatars/stephanie-walter.jpg"/>
                </div>
                <div class="contact-info">
                    <div class="contact-name">Stephanie Walter</div>
                    <div class="contact-status">
                        <div class="online"></div>
                        <div class="status">online</div>
                    </div>
                    <div class="last-chat-time">
                        yesterday
                    </div>
                </div>
            </li>
            <li class="contact">
                <div class="contact-avatar">
                    <img src="/static/img/avatars/sergey-azovskiy.jpg"/>
                </div>
                <div class="contact-info">
                    <div class="contact-name">Sergey Azovskiy</div>
                    <div class="contact-status">
                        <div class="offline"></div>
                        <div class="status">offline since oct 24</div>
                    </div>
                    <div class="last-chat-time">
                        22 oct
                    </div>
                </div>
            </li>
            <li class="contact">
                <div class="contact-avatar">
                    <img src="/static/img/avatars/lee-munroe.jpg"/>
                </div>
                <div class="contact-info">
                    <div class="contact-name">Lee Munroe</div>
                    <div class="contact-status">
                        <div class="online"></div>
                        <div class="status">online</div>
                    </div>
                    <div class="last-chat-time">
                        today
                    </div>
                </div>
            </li>
            <li class="contact">
                <div class="contact-avatar">
                    <img src="/static/img/avatars/divyia.jpg"/>
                </div>
                <div class="contact-info">
                    <div class="contact-name">Divyia Philips</div>
                    <div class="contact-status">
                        <div class="online"></div>
                        <div class="status">online</div>
                    </div>
                    <div class="last-chat-time">
                        last week
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="chatbar-messages" style="display: none;">
        <div class="messages-contact">
            <div class="contact-avatar">
                <img src="/static/img/avatars/divyia.jpg"/>
            </div>
            <div class="contact-info">
                <div class="contact-name">Divyia Philips</div>
                <div class="contact-status">
                    <div class="online"></div>
                    <div class="status">online</div>
                </div>
                <div class="last-chat-time">
                    a moment ago
                </div>
                <div class="back">
                    <i class="fa fa-arrow-circle-left"></i>
                </div>
            </div>
        </div>
        <ul class="messages-list">
            <li class="message">
                <div class="message-info">
                    <div class="bullet"></div>
                    <div class="contact-name">Me</div>
                    <div class="message-time">10:14 AM, Today</div>
                </div>
                <div class="message-body">
                    Hi, Hope all is good. Are we meeting today?
                </div>
            </li>
            <li class="message reply">
                <div class="message-info">
                    <div class="bullet"></div>
                    <div class="contact-name">Divyia</div>
                    <div class="message-time">10:15 AM, Today</div>
                </div>
                <div class="message-body">
                    Hi, Hope all is good. Are we meeting today?
                </div>
            </li>
            <li class="message">
                <div class="message-info">
                    <div class="bullet"></div>
                    <div class="contact-name">Me</div>
                    <div class="message-time">10:14 AM, Today</div>
                </div>
                <div class="message-body">
                    Hi, Hope all is good. Are we meeting today?
                </div>
            </li>
            <li class="message reply">
                <div class="message-info">
                    <div class="bullet"></div>
                    <div class="contact-name">Divyia</div>
                    <div class="message-time">10:15 AM, Today</div>
                </div>
                <div class="message-body">
                    Hi, Hope all is good. Are we meeting today?
                </div>
            </li>
            <li class="message">
                <div class="message-info">
                    <div class="bullet"></div>
                    <div class="contact-name">Me</div>
                    <div class="message-time">10:14 AM, Today</div>
                </div>
                <div class="message-body">
                    Hi, Hope all is good. Are we meeting today?
                </div>
            </li>
            <li class="message reply">
                <div class="message-info">
                    <div class="bullet"></div>
                    <div class="contact-name">Divyia</div>
                    <div class="message-time">10:15 AM, Today</div>
                </div>
                <div class="message-body">
                    Hi, Hope all is good. Are we meeting today?
                </div>
            </li>
        </ul>
        <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholde <!-- /Page Sidebar --> r="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
        </div>
    </div>
</div>
<!-- /Chat Bar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Header -->
<div class="page-header position-relative">
    <div class="header-title">
        <h1 style="color: #3ca09f;">
            Dashboard
        </h1>
    </div>
    <!--Header Buttons-->
    <div class="header-buttons">
        <a class="sidebar-toggler" href="#">
            <i class="fa fa-arrows-h"></i>
        </a>
        <a class="refresh" id="refresh-toggler" href="default.htm">
            <i class="glyphicon glyphicon-refresh"></i>
        </a>
        <a class="fullscreen" id="fullscreen-toggler" href="#">
            <i class="glyphicon glyphicon-fullscreen"></i>
        </a>
    </div>
    <!--Header Buttons End-->
</div>
<!-- /Page Header -->
                <!-- Page Body -->
                <!-- Page Body -->
                <div class="page-body">


                    <div id="body-contains">index</div>


                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

    <!--Basic Scripts-->
    <script src="/static/js/jquery.serializejson.min.js" type="text/javascript" ></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="/static/js/beyond.min.js"></script>
    <script src="/static/js/common/cost-common.js"></script>
    <script>
        $(function () {
            layui.use(['layer', 'form',"laydate"], function(){
                var layer = layui.layer;
                var form = layui.form;
                var laydate = layui.laydate;
            });

            $(document).off("click", "#sidebar a").on("click", "#sidebar a", function () {
                $("#sidebar li").removeClass("active");
                $(this).closest("li").addClass("active");
                var arrays=[];
                var that=this;
                $(".header-title>h1").text(function () {
                    var lis=$(that).parents("li");
                    lis.each(function (index, domEle) {
                        arrays[lis.length-index-1]=$($(domEle).find("span")[0]).text();
                    });
                    return arrays.join(" / ");
                });
                  $("#body-contains").load($(this).data("load-href"));
            });
        });
    </script>

    <!--Page Related Scripts-->
    </body>
    <!--  /Body -->
    </html>
