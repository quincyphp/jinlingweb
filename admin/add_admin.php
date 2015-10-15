<?php
require_once('../config.php');

$user = trim($_POST['user']);
$check_res = $mysql->get_one("select * from `admin` where `admin_name`='$user'");

if($check_res){
	echo json_encode(array('res'=>'has'));
	exit();
}

$data = array(
	'admin_name'=>$user,
	'admin_pwd'=>md5(trim($_POST['pwd'])),
	'power'=>1,
	'register_time'=>time(),
	'register_ip'=>$_SERVER['SERVER_ADDR']
);

$insert = $mysql->insert($data,'admin');
if($insert){
	$data['register_time'] = date('Y-m-d H:i:s');
	$data['admin_id'] = $insert;
	echo json_encode(array('res'=>$data));
	exit();
}else{
	echo json_encode(array('res'=>'no'));
	exit();
}
?>