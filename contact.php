<?php
require_once('config.php');
require_once('common.php');

$company = $mysql->get_one('select * from `company`');


$new_info = $mysql->get_all('select * from `article` limit 3');

$link = $mysql->get_all('select * from `friendlink` limit 3');

$smarty->assign('company',$company);
$smarty->assign('new_info',$new_info);
$smarty->assign('link',$link);
#显示模板文件
$smarty->display('contact.html');
?>