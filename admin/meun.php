<?php
require_once('../config.php');
check_login();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; ch
		require_once('../config.php');arset=utf-8" />
		
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />	
		<link rel="stylesheet" href="css/invalid.css" type="text/css" media="screen" />	
		<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="scripts/simpla.jquery.configuration.js"></script>

		<title>逗比后台</title>
	</head>
<body>

		<div id="sidebar">
			
			<div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">简约风格</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="images/6.jpg" alt="6不6？" width="220px" height="90px" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				您好, <a href="" title="Edit your profile"><?php echo $_SESSION['admin_name'];?></a>, 您有<a href="#messages" rel="modal" title="">n 条信息</a><br />
				<br />
				<a href="" title="">查 看</a> | <a href="logout.php" title="Sign Out">退 出</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				<!--变白色 就在nav-top-item 后面加current-->
				
				<li> 
					<a href="knowledge_list.php" class="nav-top-item" target="main"> <!-- Add the class "current" to current menu item -->
						<b>公司简介</b>
					</a>
				</li>
				
				<li>
					<a href="list.php" class="nav-top-item" target="main" >
						<b>产品列表</b>
					</a>
				</li>
				
				<li>
					<a href="list.php" class="nav-top-item" target="main" >
						<b>行业知识</b>
					</a>
				</li>
				<li>
					<a href="list.php" class="nav-top-item" target="main" >
						<b>客户留言</b>
					</a>
				</li>
				<li>
					<a href="list.php" class="nav-top-item" target="main" >
						<b>联系我们</b>
					</a>
				</li>
			</ul> <!-- End #main-nav -->		
		</div>	
</body>
  

<!-- Download From www.exet.tk-->
</html>
