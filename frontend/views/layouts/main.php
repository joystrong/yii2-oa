<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?=$this->context->siteurl?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=$this->context->siteurl?>/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=$this->context->siteurl?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?=$this->context->siteurl?>/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="<?=$this->context->siteurl?>/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?=$this->context->siteurl?>/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="<?=$this->context->siteurl?>/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?=$this->context->siteurl?>/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?=$this->context->siteurl?>/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="<?=$this->context->siteurl?>/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?=$this->context->siteurl?>/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="<?=$this->context->siteurl?>/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?=$this->context->siteurl?>/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- END PAGE LEVEL STYLES -->

    <link rel="shortcut icon" href="media/image/favicon.ico" />
</head>
<!-- END HEAD -->

<!-- 开始 BODY -->
<body class="page-header-fixed">
<!-- 开始 头部 -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- 开始LOGO -->
            <a class="brand" href="index.html">
                <img src="<?=$this->context->siteurl?>/image/logo.png" alt="logo"/>
            </a>
            <!-- 结束 LOGO -->

            <!-- 开始响应式菜单 -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="<?=$this->context->siteurl?>/image/menu-toggler.png" alt="" />
            </a>
            <!-- 结束响应式菜单 -->
            <ul class="nav pull-right">
                <?php if(Yii::$app->user->isGuest){?>
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="username">登录</span>
                        </a>
                    </li>
                    <li class="dropdown user">
                        <a href="/site/signup" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="username">注册</span>
                        </a>
                    </li>
                <?php }else{?>
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img alt="" src="<?=$this->context->siteurl?>/image/avatar1_small.jpg" />
                            <span class="username"><?=Yii::$app->user->identity->username?></span>
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="extra_profile.html"><i class="icon-user"></i>我的帐号</a></li>
                            <li><a href="page_calendar.html"><i class="icon-calendar"></i>我的日程</a></li>
                            <li><a href="inbox.html"><i class="icon-envelope"></i>我的消息</a></li>
                            <li><a href="#"><i class="icon-tasks"></i>我的任务</a></li>
                            <li class="divider"></li>
                            <li><a href="extra_lock.html"><i class="icon-lock"></i>锁屏</a></li>
                            <li><a href="login.html"><i class="icon-key"></i>退出</a></li>
                        </ul>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<!-- 头部结束 -->
<!-- 开始正文 -->
<div class="page-container">
    <!-- 开始旁边部分 -->
    <div class="page-sidebar nav-collapse collapse">
        <!-- 开始 旁边 按钮 -->
        <ul class="page-sidebar-menu">
            <li>
                <!-- 开始 旁边 伸缩 按钮 -->
                <div class="sidebar-toggler hidden-phone"></div>
                <!-- 结束 旁边 伸缩 按钮 -->
            </li>

            <li>
                <!-- 开始 响应式 快速 搜索 表单 -->
                <form class="sidebar-search">
                    <div class="input-box">
                        <a href="javascript:;" class="remove"></a>
                        <input type="text" placeholder="Search..." />
                        <input type="button" class="submit" value=" " />
                    </div>
                </form>
                <!-- 结束 响应式 快速 搜索 表单 -->
            </li>

            <li class="start active ">
                <a href="index.html">
                    <i class="icon-home"></i>
                    <span class="title">仪表盘</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="">
                <a href="javascript:;">
                    <i class="icon-cogs"></i>
                    <span class="title">主菜单1</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="layout_horizontal_sidebar_menu.html">
                            子菜单1</a>
                    </li>
                    <li>
                        <a href="layout_horizontal_sidebar_menu.html">
                            子菜单2</a>
                    </li>
                    <li>
                        <a href="layout_horizontal_sidebar_menu.html">
                            子菜单3</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="icon-bookmark-empty"></i>
                    <span class="title">主菜单2</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li >
                        <a href="ui_general.html">
                            子菜单1</a>
                    </li>
                    <li >
                        <a href="ui_buttons.html">
                            子菜单2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- 结束 旁边 按钮 -->
    </div>
    <!-- 结束旁边部分 -->


    <!-- 开始 页面部分 -->
    <div class="page-content">
        <!--设置网站风格略过-->
        <!-- 开始 页面 内容-->
        <div class="container-fluid">
            <!-- 开始 页面 头部-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- 开始 页面 标题 和 面包屑导航-->
                    <h6 class="page-title">
                        仪表盘 <small>统计更多</small>
                    </h6>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.html">主页</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">仪表盘</a></li>
                        <li class="pull-right no-text-shadow">
                            <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                                <i class="icon-calendar"></i>
                                <span></span>
                                <i class="icon-angle-down"></i>
                            </div>
                        </li>
                    </ul>
                    <!-- 结束 页面 标题 和 面包屑导航-->
                </div>
            </div>
            <!-- 结束 页面 头部-->
        </div>
        <!-- 结束 页面 内容-->
    </div>
</div>
<?= $content ?>
<!-- 结束正文 -->
<!-- 开始底部 -->
<div class="footer">
    <div class="footer-inner">
        2013 &copy; Metronic by keenthemes.
    </div>
    <div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
    </div>
</div>
<!-- 结束底部 -->
<!-- 开始 JavaScript脚本(在最后一个body前加载JavaScript, 可以减少页面加载时间) -->
<!-- 开始 核心 插件 -->
<script src="<?=$this->context->siteurl?>/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- 重要! 加载 jquery-ui-1.10.1.custom.min.js 在 bootstrap.min.js 之前， fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?=$this->context->siteurl?>/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/bootstrap.min.js" type="text/javascript"></script>

<!--[if lt IE 9]>
<script src="<?=$this->context->siteurl?>/js/excanvas.min.js"></script>
<script src="<?=$this->context->siteurl?>/js/respond.min.js"></script>
<![endif]-->
<script src="<?=$this->context->siteurl?>/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- 结束 核心 插件 -->
<!-- 开始 页面 级 插件 -->
<!--
<script src="<?=$this->context->siteurl?>/js/jquery.vmap.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
-->
<script src="<?=$this->context->siteurl?>/js/jquery.flot.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.flot.resize.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/date.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/daterangepicker.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.gritter.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- 结束 页面 级 插件 -->
<!-- 开始 页面 级 SCRIPTS -->
<script src="<?=$this->context->siteurl?>/js/app.js" type="text/javascript"></script>
<script src="<?=$this->context->siteurl?>/js/index.js" type="text/javascript"></script>
<!-- 结束 页面 级 SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init(); // initlayout and core plugins
//        Index.init();
//        Index.initJQVMAP(); // init index page's custom scripts
//        Index.initCalendar(); // init index page's custom scripts
//        Index.initCharts(); // init index page's custom scripts
//        Index.initChat();
//        Index.initMiniCharts();
//        Index.initDashboardDaterange();
//        Index.initIntro();
    });
</script>
<!-- 结束 JavaScript -->
</body>
<!-- 结束 BODY -->
</html>
<?php $this->endPage() ?>
