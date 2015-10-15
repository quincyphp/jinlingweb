<?php
session_start();
#登陆验证操作（php、数	据库操作）
require_once('../config.php');

#接收登陆发送过来的账号、密码
$user = trim($_POST['user']);
$pwd = md5(trim($_POST['pwd']));
$code = trim($_POST['code']);

if($code!=$_SESSION['code']){
	exit('2');
}

$check_res = $mysql->get_one("select  * from `admin` where `admin_name`='$user' and `admin_pwd`='$pwd'");
if($check_res){
	#使用session记录账号
	$_SESSION['admin_name'] = $user;
	exit('1');
}else{
	exit('0');
}

?>