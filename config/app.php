<?php
session_start();

// Page Config
$pageArray = array ( 'index', 'about', 'blog', 'contact' );

// Const
define('TIME_ZONE', 'Asia/Colombo');

# READ config/app.textar file extract SITE_TITLE
define('SITE_TITLE','SITE_TITLE');
define('TAG_LINE','TAG_LINE');

// Set TimeZone
date_default_timezone_set( TIME_ZONE );

// EOF.