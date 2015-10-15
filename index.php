<?php
require_once('config.php');
require_once('common.php');

$about_sql = 'select * from `about_us`';
$about_info = $mysql->get_one($about_sql);
//var_dump($article_info);

$banner_sql = 'select * from `banners`';
$banner_info = $mysql->get_all($banner_sql);

$pro_sql = 'select * from `product`';
$pro_info = $mysql->get_all($pro_sql);

$new_info = $mysql->get_all('select * from `article`');

$link = $mysql->get_all('select * from `friendlink`');


#对内容进行赋值
$smarty->assign('banner_info',$banner_info);
$smarty->assign('about_info',$about_info);
$smarty->assign('pro_info',$pro_info);
$smarty->assign('new_info',$new_info);
$smarty->assign('link',$link);

#显示模板文件
$smarty->display('index.html');
?>
