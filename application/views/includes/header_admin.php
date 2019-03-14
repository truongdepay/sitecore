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
    <link href="https://fonts.googleapis.com/css?family=Anton|Noto+Serif:400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
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
    <script src="<?= base_url('assets/js/script.js'); ?>"></script>
</head>
<body class="page-login">
<main class="page-content">
    <div class="page-inner" style="height: 100vh;">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
