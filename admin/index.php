<?php
require_once('../config.php');//加载配置文件、
check_login();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>金陵后台</title>
</head>
	<frameset frameborder="0" cols="17%,83%">
		<frame src="meun.php" scrolling="no" />
		<frame name="main" src="list.php" />
	</frameset>
</html>