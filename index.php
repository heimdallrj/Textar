<?php
require_once 'config/app.php';
require_once 'functions.php';

$page = 'index';

if ( isset($_REQUEST['page'] ) )
{
	if ( in_array($_REQUEST['page'],$pageArray) )
	{
		$page = $_REQUEST['page'];
	}
}

?>
<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php print SITE_TITLE.' &mdash; '.TAG_LINE; ?></title>

<link href="css/basic.css" type="text/css" rel="stylesheet" media="all" />
<link href="css/theme.css" type="text/css" rel="stylesheet" media="all" />

</head>

<body>

<?php include_once 'app/'.$page.'/content.textar'; ?>

</body>
</html>