<?php
require_once('config.php');

$page = isset($_GET['page'])?$_GET['page']:1;
$limit = 5;
$start = ($page-1)*$limit;

$company = $mysql->get_one('select * from `company`');

//查询一级导航
$pnav_sql = 'select * from `navs` where `parent_id` is null';
$pnav_res = mysql_query($pnav_sql);
$pnav_data = array();
if($pnav_res){
	while($data = mysql_fetch_assoc($pnav_res)){
		$pnav_data[] = $data;
	}
}else{
	exit('查询不到记录'.mysql_error('查询不到记录，错误为：'.mysql_error()));
}

$new_info = $mysql->get_all('select * from `article` limit 3');
$link = $mysql->get_all('select * from `friendlink` limit 3');

$smarty->assign('company',$company);
$smarty->assign('pnav_data',$pnav_data);
$smarty->assign('new_info',$new_info);
$smarty->assign('link',$link);
$smarty->assign('page',$page);
$smarty->assign('limit',$limit);
$smarty->assign('start',$start);
?>