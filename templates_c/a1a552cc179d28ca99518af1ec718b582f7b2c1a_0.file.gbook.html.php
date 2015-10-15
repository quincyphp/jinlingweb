<?php /* Smarty version 3.1.27, created on 2015-07-22 19:07:32
         compiled from "E:\wamp\www\jinlingweb\templates\gbook.html" */ ?>
<?php
/*%%SmartyHeaderCode:2386055af797436b118_74067499%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1a552cc179d28ca99518af1ec718b582f7b2c1a' => 
    array (
      0 => 'E:\\wamp\\www\\jinlingweb\\templates\\gbook.html',
      1 => 1437563249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2386055af797436b118_74067499',
  'variables' => 
  array (
    'new_info' => 0,
    'value' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55af7974430325_35149447',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55af7974430325_35149447')) {
function content_55af7974430325_35149447 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2386055af797436b118_74067499';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>guestbook</title>
	<link rel="stylesheet" type="text/css" href="css/common.css ">
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
	<div id="clear"></div>
	<div id="guanggao">
		<img src="images/guanggao_bg.gif"/>
	</div>
	<div id="clear"></div>
	<div id="main">
		<div class="main_left">
			<ul class="article">
				<li class="cp">客户留言</li>
				<li class="about">Guestbook</li>
				<li class="kongge">&nbsp;</li>
			</ul>
			<div id="clear"></div>
			<form action="" method="post" id="add" />
				<table>
					<tr>
						<td align="center">呢称</td>
						<td><input type="text" name="username" value=""/></td>
					</tr>
					<tr>
						<td align="center">内容</td>
						<td><textarea name="content" id="" cols="30" rows="5"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="提交" id="submit"/></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="main_right">
			<div class="message">
				<h1>我要留言</h1>
			</div>
			<div id="clear"></div>
			<div class="new_ad" >
				<ul class="ad">
					<li class="new">最新公告</li>
					<li class="news">New</li>
				</ul>
				<ul class="title259" >
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
</a></li>
					<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
				</ul>
			</div>
			<div id="clear"></div>
			<div class="new_ad" >
				<ul class="ad">
					<li class="new">友情链接</li>
					<li class="news">Links</li>
				</ul>
				<ul class="title259" >
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
					<li><a href=""><?php echo $_smarty_tpl->tpl_vars['value']->value['link_name'];?>
</a></li>
				<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
				</ul>
			</div>
		</div>
	</div>
	<div id="clear"></div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
</body>
</html><?php }
}
?>