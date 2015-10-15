<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>登录页</title>
	
	<!--                       CSS                       -->
  
	<!-- Reset Stylesheet -->
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
  
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	
	<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
	<link rel="stylesheet" href="css/invalid.css" type="text/css" media="screen" />	
	<style type="text/css">
		#login-wrapper #login-content .text-input{
			float:left;
		}
		#login-wrapper #login-content #yzcode{
			width:100px;
		}
		#code{
			cursor:pointer;
		}
	</style>
</head>
  
<body id="login">
	
	<div id="login-wrapper" class="png_bg">
		<div id="login-top">
		
			<h1>Simpla Admin</h1>
			<!-- Logo (221px width) -->
			<img id="logo" src="images/6.jpg" alt="Simpla Admin logo" width="221px" height="40px"/>
		</div> <!-- End #logn-top -->
		
		<div id="login-content">
				
				<form action="index.html" method="post">
				
					<div class="notification information png_bg">
						<div>
							输出完成后请点击 “登 陆”
						</div>
					</div>
					
					<p>
						<label>用户名</label>
						<input class="text-input" type="text" name="user" id="user" />
					</p>
					<div class="clear"></div>
					<p>
						<label>密  码</label>
						<input class="text-input" type="password" name="pwd" id="pwd" />
					</p>
					<div class="clear"></div>
					<p>
						<label>验证码</label>
						<input class="text-input yzcode" type="text" name="yzcode" id="yzcode" />
						&nbsp;
						<img src="./yzcode/yzcode.php" id="code" />
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" type="button" value="登 陆" id="btn" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
		
	</div> <!-- End #login-wrapper -->

	<!--                       Javascripts                       -->
  
	<!-- jQuery -->
	<script type="text/javascript" src="scripts/jquery-1.3.2.min.js"></script>
	
	<!-- jQuery Configuration -->
	<script type="text/javascript" src="scripts/simpla.jquery.configuration.js"></script>
	
	<!-- Facebox jQuery Plugin -->
	<script type="text/javascript" src="scripts/facebox.js"></script>
	
	<!-- jQuery WYSIWYG Plugin -->
	<script type="text/javascript" src="scripts/jquery.wysiwyg.js"></script>
	<!--jS的ajax-->
	<script type="text/javascript">
		var btn = document.getElementById('btn');
		btn.onclick = function(){
			var user = document.getElementById('user');
			var u_val = user.value;

			var pwd = document.getElementById('pwd');
			var p_val = pwd.value;

			var yzcode = document.getElementById('yzcode');
			var y_val = yzcode.value;

			if(u_val==''||p_val==''){
				alert('请输入账号或密码！');
				return false;				
			}

			if(y_val==''){
				alert('请输入验证码！');
				return false;
			}
			//1.创建XMLHttpRequest对象
			var ajax = false;
			if(window.ActiveXObject){ //IE浏览器
				ajax = new ActiveXObject("Microsoft.XMLHTTP");	
			}else if(window.XMLHttpRequest){  //非IE浏览器
				ajax = new XMLHttpRequest();
			}
			//2.创建一个请求
			ajax.open('post','check_login.php',true);
			ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			
			//3.发送数据给服务器（把管理员名称发送php文件）
			ajax.send('user='+u_val+'&pwd='+p_val+'&code='+y_val);

			//4.做接收服务器端响应的结果(监听)
			ajax.onreadystatechange = function(){
				if(ajax.readyState==4){ //请求、接收成功
					if(ajax.status == 200){
						if(ajax.responseText=='1'){
							alert('登陆成功！');
							window.location.href = 'index.php';
						}else if(ajax.responseText=='2'){
							alert('验证码错误！');
						}else{
							alert('账号或密码错误！');
						}
					}else{
						alert('网络请求错误或服务器出现问题');
					}
				}
			}
		}
		
		var code = document.getElementById('code');
		code.onclick = function(){
			this.src="./yzcode/yzcode.php?code="+Math.random();
		}
	</script>
</body>
</html>
