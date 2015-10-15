<?php /* Smarty version 3.1.27, created on 2015-07-22 18:13:42
         compiled from "E:\wamp\www\jinlingweb\templates\contact.html" */ ?>
<?php
/*%%SmartyHeaderCode:2413455af6cd6ce9e29_46857499%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8a2e6d00a3b99b987c5811d49265e1134c09dcd' => 
    array (
      0 => 'E:\\wamp\\www\\jinlingweb\\templates\\contact.html',
      1 => 1437502008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2413455af6cd6ce9e29_46857499',
  'variables' => 
  array (
    'company' => 0,
    'new_info' => 0,
    'value' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55af6cd6de6b09_20091048',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55af6cd6de6b09_20091048')) {
function content_55af6cd6de6b09_20091048 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2413455af6cd6ce9e29_46857499';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>contact</title>
	<link rel="stylesheet" type="text/css" href="css/common.css ">
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
	<div id="clear"></div>
	<div id="guanggao">
		<img src="images/guanggao_bg.gif"/>
	</div>
	<div id="main">
		<div class="main_left">
			<ul class="article">
				<li class="cp">联系我们</li>
				<li class="about">Contact us</li>
				<li class="kongge">&nbsp;</li>
			</ul>
			<div id="clear"></div>
			<form class="detail">
				<table>
					<tr>
						<td align="right">地址：</td>
						<td><?php echo $_smarty_tpl->tpl_vars['company']->value['company_address'];?>
</td>
					</tr>
					<tr>
						<td align="right">联系人:</td>
						<td><?php echo $_smarty_tpl->tpl_vars['company']->value['company_linkman'];?>
</td>
					</tr>
					<tr>
						<td align="right">移动电话:</td>
						<td><?php echo $_smarty_tpl->tpl_vars['company']->value['company_mobile'];?>
</td>
					</tr>
					<tr>
						<td align="right">固定电话:</td>
						<td><?php echo $_smarty_tpl->tpl_vars['company']->value['company_phone'];?>
</td>
					</tr>
					<tr>
						<td align="right">传真:</td>
						<td><?php echo $_smarty_tpl->tpl_vars['company']->value['company_fax'];?>
</td>
					</tr>
				</table>
			</form>
			<ul class="article">
				<li class="cp">我的位置</li>
				<li class="about">map</li>
				<li class="kongge">&nbsp;</li>
			</ul>
			<img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_map'];?>
" alt="" id="photo" />
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
 
	<?php echo '<script'; ?>
 type="text/javascript" src="js/js.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>