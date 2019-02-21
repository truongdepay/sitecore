<?php
/*
 * CKFinder
 * ========
 * https://ckeditor.com/ckeditor-4/ckfinder/
 * Copyright (c) 2007-2018, CKSource - Frederico Knabben. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
 */

require_once __DIR__ . '/vendor/autoload.php';
session_start();
use CKSource\CKFinder\CKFinder;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/debug.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger

$ch = curl_init();

// Set query data here with the URL
curl_setopt($ch, CURLOPT_URL, 'http://demo.io/managerUser/index/index.html?action=ckfinder');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
$content = trim(curl_exec($ch));
curl_close($ch);
$logger->info(json_encode($_COOKIE));
$content = json_decode($content);
$_SESSION['login'] = $content->result;


$ckfinder = new CKFinder(__DIR__ . '/../../../config.php');

$ckfinder->run();
