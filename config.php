<?php
header('Content-type:text/html;charset=utf-8');//设置编码
date_default_timezone_set('PRC');//设置时区
error_reporting(E_ALL);//提示错误

define('WEB_URL','http://www.jinlingweb.com/');
define('PATH_URL',$_SERVER['DOCUMENT_ROOT']);
//加载mysql类
require_once(PATH_URL.'/includes/function.php');//加载数据库 不能用相对地址

require_once(PATH_URL.'/includes/mysql.php');//加载mysql类

$mysql = new Mysql('localhost','root','','jinlingweb');

require_once('/includes/libs/Smarty.class.php');
$smarty = new Smarty();

#基本配置
//$smarty->force_compile = true; //是否进行编译（默认是true）
$smarty->debugging = true; //开启调试
$smarty->caching = false; //开启缓存
$smarty->cache_lifetime = 10; //缓存时间（秒）

$smarty->setTemplateDir('./templates/'); //模板目录
$smarty->setCompileDir('./templates_c/'); //编译目录
$smarty->setCacheDir('./cache/'); //缓存目录

//$smarty->setConfigDir('./configs/');//配置目录
//$smarty->setPluginsDir('./plugins/');//插件目录

//左右边界符(标签)，默认为{}
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

$smarty->assign('web_url',WEB_URL);
$user = isset($_COOKIE['user'])?$_COOKIE['user']:'';
$smarty->assign('user',$user);
?>