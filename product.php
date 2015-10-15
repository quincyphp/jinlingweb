<?php
require_once('config.php');
require_once('common.php');

$pro = $mysql->get_all("select * from `product` limit $start,$limit");

$count_sql = 'select count(`product_id`) as num from `product`';
$count_nums = count_nums($count_sql);

$smarty->assign('pro',$pro);
$smarty->assign('count_nums',$count_nums);
#显示模板文件
$smarty->display('product.html');
?>