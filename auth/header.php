<?php
require_once '../config/app.php';
require_once 'class.Auth.inc.php';

$authObj = new Auth();
?>
<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Admin &bull; <?php print SITE_TITLE; ?></title>

<link href="css/styles.css" type="text/css" rel="stylesheet" media="all" />

</head>

<body>