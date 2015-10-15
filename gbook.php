<?php
require_once('config.php');
require_once('common.php');

$company = $mysql->get_one('select * from `company`');


$new_info = $mysql->get_all('select * from `article` limit 3');

$link = $mysql->get_all('select * from `friendlink` limit 3');

if(!empty($_POST)){
	$check_res = get_one('select `message_id` from `message` where `username`="'.trim($_POST['username']).'"');
	if($check_res){
		exit('该名称已存在！');
	}

	$data = array(
		'username'=>trim($_POST['username']),
		'content'=>trim($_POST['content']),
		'add_time'=>time()
	);
	$insert = insert($data,'message');
	if($insert){
		jump('留言成功！','gbook.php');
	}else{
		jump('留言失败！');
	}
}else{
	$message = get_all('select * from `message`');
}


$smarty->assign('company',$company);
$smarty->assign('new_info',$new_info);
$smarty->assign('link',$link);
#显示模板文件
$smarty->display('gbook.html');
?>