<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Zenn
 * @Date:   2018-04-25 00:44:08
 * @Last Modified by:   Ngoc Truong
 * @Last Modified time: 2018-05-27 17:29:12
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $siteTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?= base_url('assets/plugins/pace-master/themes/blue/pace-theme-flash.css'); ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/plugins/uniform/css/uniform.default.min.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/fontawesome/css/font-awesome.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/line-icons/simple-line-icons.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/waves/waves.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/switchery/switchery.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/3d-bold-navigation/css/style.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/slidepushmenus/css/component.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/weather-icons-master/css/weather-icons.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/metrojs/MetroJs.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/plugins/toastr/toastr.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fontawesome/css/all.css')?>">
    <link href="<?= base_url('assets/plugins/bootstrap-datepicker/css/datepicker3.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- Theme Styles -->
    <link href="<?= base_url('assets/css/modern.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/css/themes/green.css') ?>" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css"/>
    <!--    CK editor-->
    <script src="<?= base_url('assets/plugin/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?= base_url('assets/plugin/ckfinder/ckfinder.js'); ?>"></script>

    <script src="<?= base_url('assets/plugins/3d-bold-navigation/js/modernizr.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/offcanvasmenueffects/js/snap.svg-min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/pace-master/pace.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-blockui/jquery.blockui.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/switchery/switchery.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/uniform/jquery.uniform.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/offcanvasmenueffects/js/classie.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/offcanvasmenueffects/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/waves/waves.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/3d-bold-navigation/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/waypoints/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-counterup/jquery.counterup.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/toastr/toastr.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/flot/jquery.flot.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/flot/jquery.flot.time.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/flot/jquery.flot.symbol.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/flot/jquery.flot.resize.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/flot/jquery.flot.tooltip.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/curvedlines/curvedLines.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/metrojs/MetroJs.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/modern.js') ?>"></script>
    <script src="<?= base_url('assets/js/pages/dashboard.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            // Sidebar Menu

            var parent, ink, d, x, y;
            $('.sidebar .accordion-menu li .sub-menu').slideUp(0);
            $('.sidebar .accordion-menu li.open > .sub-menu').slideDown(0);
            $('.small-sidebar .sidebar .accordion-menu li.open .sub-menu').hide(0);
            $('.sidebar .accordion-menu > li.droplink > a').click(function(){

                if(!($('body').hasClass('small-sidebar'))&&(!$('body').hasClass('page-horizontal-bar'))&&(!$('body').hasClass('hover-menu'))) {

                    var menu = $('.sidebar .menu'),
                        sidebar = $('.page-sidebar-inner'),
                        page = $('.page-content'),
                        sub = $(this).next(),
                        el = $(this);

                    menu.find('li').removeClass('open');
                    $('.sub-menu').slideUp(200, function() {
                        sidebarAndContentHeight();
                    });
                    sidebarAndContentHeight();

                    if (!sub.is(':visible')) {
                        $(this).parent('li').addClass('open');
                        $(this).next('.sub-menu').slideDown(200, function() {
                            sidebarAndContentHeight();
                        });
                    } else {
                        sub.slideUp(200, function() {
                            sidebarAndContentHeight();
                        });
                    }
                    return false;
                };

                if(($('body').hasClass('small-sidebar'))&&($('body').hasClass('page-sidebar-fixed'))) {

                    var menu = $('.sidebar .menu'),
                        sidebar = $('.page-sidebar-inner'),
                        page = $('.page-content'),
                        sub = $(this).next(),
                        el = $(this);

                    menu.find('li').removeClass('open');
                    $('.sub-menu').slideUp(200, function() {
                        sidebarAndContentHeight();
                    });
                    sidebarAndContentHeight();

                    if (!sub.is(':visible')) {
                        $(this).parent('li').addClass('open');
                        $(this).next('.sub-menu').slideDown(200, function() {
                            sidebarAndContentHeight();
                        });
                    } else {
                        sub.slideUp(200, function() {
                            sidebarAndContentHeight();
                        });
                    }
                    return false;
                }
            });

            $('.sidebar .accordion-menu .sub-menu li.droplink > a').click(function(){

                var menu = $(this).parent().parent(),
                    sidebar = $('.page-sidebar-inner'),
                    page = $('.page-content'),
                    sub = $(this).next(),
                    el = $(this);

                menu.find('li').removeClass('open');
                sidebarAndContentHeight();

                if (!sub.is(':visible')) {
                    $(this).parent('li').addClass('open');
                    $(this).next('.sub-menu').slideDown(200, function() {
                        sidebarAndContentHeight();
                    });
                } else {
                    sub.slideUp(200, function() {
                        sidebarAndContentHeight();
                    });
                }
                return false;
            });

            // Makes .page-inner height same as .page-sidebar height
            var sidebarAndContentHeight = function () {
                var content = $('.page-inner'),
                    sidebar = $('.page-sidebar'),
                    body = $('body'),
                    height,
                    footerHeight = $('.page-footer').outerHeight(),
                    pageContentHeight = $('.page-content').height();

                content.attr('style', 'min-height:' + sidebar.height() + 'px !important');

                if (body.hasClass('page-sidebar-fixed')) {
                    height = sidebar.height() + footerHeight;
                } else {
                    height = sidebar.height() + footerHeight;
                    if (height  < $(window).height()) {
                        height = $(window).height();
                    }
                }

                if (height >= content.height()) {
                    content.attr('style', 'min-height:' + height + 'px !important');
                }
            };

            sidebarAndContentHeight();

            window.onresize = sidebarAndContentHeight;
        });
    </script>

</head>

<body class="page-header-fixed">
<div class="overlay"></div>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
    <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
    <div class="slimscroll">
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
    </div>
</nav>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
    <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
    <div class="slimscroll chat">
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="assets/images/avatar2.png" alt="">
            </div>
            <div class="chat-message">
                Hi There!
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Hi! How are you?
            </div>
        </div>
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="assets/images/avatar2.png" alt="">
            </div>
            <div class="chat-message">
                Fine! do you like my project?
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Yes, It's clean and creative, good job!
            </div>
        </div>
        <div class="chat-item chat-item-left">
            <div class="chat-image">
                <img src="assets/images/avatar2.png" alt="">
            </div>
            <div class="chat-message">
                Thanks, I tried!
            </div>
        </div>
        <div class="chat-item chat-item-right">
            <div class="chat-message">
                Good luck with your sales!
            </div>
        </div>
    </div>
    <div class="chat-write">
        <form class="form-horizontal" action="javascript:void(0);">
            <input type="text" class="form-control" placeholder="Say something">
        </form>
    </div>
</nav>
<div class="menu-wrap">
    <nav class="profile-menu">
        <div class="profile"><img src="assets/images/profile-menu-image.png" width="60" alt="David Green"/><span>David Green</span></div>
        <div class="profile-menu-list">
            <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
            <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
            <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
            <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
        </div>
    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
</div>
<form class="search-form" action="#" method="GET">
    <div class="input-group">
        <input type="text" name="search" class="form-control search-input" placeholder="Search...">
        <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
    </div><!-- Input Group -->
</form><!-- Search Form -->
<main class="page-content content-wrap">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="logo-box">
                <a href="<?= base_url('') ?>" class="logo-text"><span>EngLish</span></a>
            </div><!-- Logo Box -->
            <div class="search-button">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
            </div>
            <div class="topmenu-outer">
                <div class="top-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                        </li>
                        <li>
                            <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">1</span></a>
                            <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                <li><p class="drop-title">You have 1 new  messages !</p></li>
                                <li class="dropdown-menu-list slimscroll messages">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                <p class="msg-name">Admin</p>
                                                <p class="msg-text">Hey ! I'm working on your project</p>
                                                <p class="msg-time">3 minutes ago</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">1</span></a>
                            <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                <li><p class="drop-title">You have 1 pending tasks !</p></li>
                                <li class="dropdown-menu-list slimscroll tasks">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                <p class="task-details">New user registered.</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <?php
                                $session = $this->session->userdata('login');
                                if ($session['check']) {
                                    ?>
                                    <span class="user-name"><?= $session['fullname'] ?><i class="fa fa-angle-down"></i></span>
                                    <?php
                                }
                                ?>
                                <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-list" role="menu">
                                <li role="presentation"><a href="<?= site_url('managerUser/index/index?action=manager') ?>"><i class="fa fa-user"></i>Profile</a></li>
                                <li role="presentation">
                                    <a href="<?= site_url('managerUser/index/index?action=logout') ?>"> <i class="fas fa-sign-out-alt"></i>Log out</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                    </ul><!-- Nav -->
                </div><!-- Top Menu -->
            </div>
        </div>
    </div><!-- Navbar -->
    <div class="page-sidebar sidebar">
        <div class="page-sidebar-inner slimscroll">
            <div class="sidebar-header">
                <div class="sidebar-profile">
                    <a href="javascript:void(0);" id="profile-menu-link">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                        </div>
                        <div class="sidebar-profile-details">
                            <span>David Green<br><small>Art Director</small></span>
                        </div>
                    </a>
                </div>
            </div>

<!--    MENU LEFT        -->

            <ul class="menu accordion-menu">
                <li class="active"><a href="<?= site_url('') ?>" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Profile</p></a></li>
                <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-pen-alt"></i><p>Bài viết</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="<?= site_url('managerPost/index/index?action=index'); ?>">Quản lý</a></li>
                        <li><a href="<?= site_url('managerPost/index/index?action=create'); ?>">Thêm mới</a></li>
                    </ul>
                </li>
                <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fab fa-product-hunt"></i><p>Sản phẩm</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="<?= site_url('managerProduct/index/index?action=index'); ?>">Quản lý</a></li>
                        <li><a href="<?= site_url('managerProduct/index/index?action=create'); ?>">Thêm mới</a></li>
                    </ul>
                </li>
                <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-list-ol"></i><p>Danh mục</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="<?= site_url('managerCat/index/index?action=index'); ?>">Quản lý</a></li>
                        <li><a href="<?= site_url('managerCat/index/index?action=create'); ?>">Thêm mới</a></li>
                    </ul>
                </li>
                <li class="droplink"><a href="#" class="waves-effect waves-button"><i class="fas fa-list-ol"></i><p>Money</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="<?= site_url('managerMoney/index/index?action=create'); ?>">Thêm mới</a></li>
                    </ul>
                </li>
            </ul>
<!--    END MENU LEFT        -->
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->
    <div class="page-inner">
        <div id="main-wrapper">

