<?php 
require_once('../config.php');//加载配置文件

session_start();
session_destroy();

jump('退出成功!','login.php');
?>