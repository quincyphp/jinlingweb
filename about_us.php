<?php
require_once('config.php');
require_once('common.php');

$company_info = $mysql->get_one('select * from `about_us`');


$smarty->assign('company_info',$company_info);
#显示模板文件
$smarty->display('about_us.html');
?>