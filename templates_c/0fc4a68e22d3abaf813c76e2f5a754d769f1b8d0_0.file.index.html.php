<?php /* Smarty version 3.1.27, created on 2015-07-22 10:50:48
         compiled from "C:\wamp\www\jinlingweb\templates\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1087655af05086cd7e8_50270223%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fc4a68e22d3abaf813c76e2f5a754d769f1b8d0' => 
    array (
      0 => 'C:\\wamp\\www\\jinlingweb\\templates\\index.html',
      1 => 1437533437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1087655af05086cd7e8_50270223',
  'variables' => 
  array (
    'company' => 0,
    'banner_info' => 0,
    'value' => 0,
    'about_info' => 0,
    'pro_info' => 0,
    'new_info' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55af050882d0f8_82500486',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55af050882d0f8_82500486')) {
function content_55af050882d0f8_82500486 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1087655af05086cd7e8_50270223';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<!--关键字、描述-->
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_description'];?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</title>
	<link rel="stylesheet" type="text/css" href="css/index.css ">
	<link rel="stylesheet" type="text/css" href="css/common.css ">
	<link rel="stylesheet" type="text/css" href="css/pro.css ">
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
	<div id="clear"></div>
	<div class="imgbox">
	<ul id="imgshow">
	<?php
$_from = $_smarty_tpl->tpl_vars['banner_info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
		<li><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['ad_imgurl'];?>
" /></li>
	<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
	</ul>
	</div>
	<div class="changeimg">
		<ul id="change">
			<li onmouseover="changeimg(0,'stop')" onmouseout="runshowimg(1)"><a href="javsscript:void(0)">1</a></li>
			<li onmouseover="changeimg(1,'stop')" onmouseout="runshowimg(2)"><a href="javsscript:void(0)">2</a></li>
			<li onmouseover="changeimg(2,'stop')" onmouseout="runshowimg(3)"><a href="javsscript:void(0)">3</a></li>
			<li onmouseover="changeimg(3,'stop')" onmouseout="runshowimg(4)"><a href="javsscript:void(0)">4</a></li>
		</ul>
	</div>
	<div id="main">
		<div class="main_left">
			<ul class="article">
				<li class="cp">公司简介</li>
				<li class="about">About us</li>
				<li class="kongge">&nbsp;</li>
			
				<p><?php echo $_smarty_tpl->tpl_vars['about_info']->value['about_us'];?>

				<a href="http://www.baidu.com" style="color:blue;">查看更多</a></p>
			</ul>
			<ul class="article">
				<li class="cp">产品展示</li>
				<li class="about">products</li>
				<li class="kongge">&nbsp;</li>
			</ul>
			<div class="picScroll-left">
				<div class="hd">
					<a class="next"></a>
					<ul></ul>
					<a class="prev"></a>
					<span class="pageState"></span>
				</div>
				<div class="bd">
					<ul class="picList">
						<?php
$_from = $_smarty_tpl->tpl_vars['pro_info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
						<li>
							<div class="pic"><a href="" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['product_imgurl'];?>
" alt="" /></a></div>
							<div class="title"><a href="" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['product_name'];?>
</a></div>
						</li>
						<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_right" >
			<ul class="article">
				<li class="cp">最新公告</li>
				<li class="about">New</li>
				<li class="kongge2">&nbsp;</li>
			</ul>
			<div id="clear"></div>
			<ul class="new_title" >
			<?php
$_from = $_smarty_tpl->tpl_vars['new_info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
				<li><a href=""><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a><span><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['value']->value['add_time']);?>
</span></li>
			<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
			</ul>
			<div id="clear"></div>
			<ul class="article">
				<li class="cp">行业知识</li>
				<li class="about">Knowleage</li>
				<li class="kongge2">&nbsp;</li>
			</ul>
			<div id="clear"></div>
			<ul class="new_title" >
				<?php
$_from = $_smarty_tpl->tpl_vars['new_info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
				<li><a href=""><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a><span><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['value']->value['add_time']);?>
</span></li>
			<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
			</ul>
		</div>
		<div id="clear"></div>
		<ul class="link">
			<li class="youqin">友情链接</li>
			<li class="link2">Link2</li>
			<li class="no-background5">&nbsp;</li>
			<p class="two">
			<?php
$_from = $_smarty_tpl->tpl_vars['link']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
				<a href=""><?php echo $_smarty_tpl->tpl_vars['value']->value['link_name'];?>
</a><span>|</span>
			<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
			</p>
		</ul>
	</div>
	<div id="clear"></div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
</body>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery1.42.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/num.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/js.js"><?php echo '</script'; ?>
>
</html><?php }
}
?>