<?php
require_once('config.php');
require_once('common.php');

$count_sql = 'select count(`id`) as num from `knowledge`';
$count_nums = count_nums($count_sql);

$knowledge = $mysql->get_all("select * from `knowledge` limit $start,$limit");

$smarty->assign('knowledge',$knowledge);
$smarty->assign('count_nums',$count_nums);
#显示模板文件
$smarty->display('knowledge.html');
?>
