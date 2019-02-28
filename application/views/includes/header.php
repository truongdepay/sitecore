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
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fontawesome/css/all.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css')?>">
    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugin/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?= base_url('assets/plugin/ckfinder/ckfinder.js'); ?>"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?= base_url('assets/js/script.js'); ?>"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark position-fixed" style="height: 50px; width: 100%; top:0px; z-index: 400">
        <!-- Navbar content -->
    </nav>
	<div id="main">
		<div class="container-fluid p-0">
            <div class="left-sidebar shadow">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active rounded-0">
                        WELCOME!
                    </a>
                    <a href="<?= site_url(''); ?>" class="list-group-item list-group-item-action bg-light rounded-0">Tổng quan</a>

                    <a href="<?= site_url('managerPost/index/index?action=index'); ?>" class="list-group-item list-group-item-action rounded-0">Quản lý bài viết</a>
                    <a href="<?= site_url('managerPost/index/index?action=create'); ?>" class="list-group-item list-group-item-action">Thêm mới bài viết</a>

                    <a href="<?= site_url('managerProduct/index/index?action=index'); ?>" class="list-group-item list-group-item-action rounded-0">Quản lý sản phẩm</a>
                    <a href="<?= site_url('managerProduct/index/index?action=create'); ?>" class="list-group-item list-group-item-action">Thêm mới sản phẩm</a>

                    <a href="<?= site_url('managerCat/index/index?action=index'); ?>" class="list-group-item list-group-item-action rounded-0">Quản lý Danh mục</a>
                    <a href="<?= site_url('managerCat/index/index?action=create'); ?>" class="list-group-item list-group-item-action">Thêm mới danh mục</a>

                    <a href="<?= site_url('managerPage/index/index?action=index'); ?>" class="list-group-item list-group-item-action">Quản lý page</a>
                    <a href="<?= site_url('managerPage/index/index?action=index'); ?>" class="list-group-item list-group-item-action">Thêm mới page</a>

                    <a href="<?= site_url('managerMoney/index/index?action=create'); ?>" class="list-group-item list-group-item-action rounded-0">Money</a>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-12">
