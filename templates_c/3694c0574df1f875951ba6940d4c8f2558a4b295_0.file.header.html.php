<?php /* Smarty version 3.1.27, created on 2015-07-22 14:25:27
         compiled from "E:\wamp\www\jinlingweb\templates\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:1761155af37578970a0_98933832%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3694c0574df1f875951ba6940d4c8f2558a4b295' => 
    array (
      0 => 'E:\\wamp\\www\\jinlingweb\\templates\\header.html',
      1 => 1437490252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1761155af37578970a0_98933832',
  'variables' => 
  array (
    'pnav_data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55af37578fcfc0_34158753',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55af37578fcfc0_34158753')) {
function content_55af37578fcfc0_34158753 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1761155af37578970a0_98933832';
?>
<div id="header">
	<a href="index.php"><img class="logo" src="images/logo.gif"></a>
	<h1 class="title2">金陵贸易有限公司</h1>
	<div class="menu">
		<a href=""class="sheshou">设为首页</a>
		<a href="" class="shoucan">收藏本站</a>
	</div>
	<div class="head">
		<div class="head_left"></div>
		<div class="head_center">
			<ul> 
			<?php
$_from = $_smarty_tpl->tpl_vars['pnav_data']->value;
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
				<li class="shouye"><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['nav_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['nav_name'];?>
</a></li>
			<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
			</ul>
			<div class="time" id="showTime">&nbsp;</div>
		</div>
	<div class="head_right"></div>
</div><?php }
}
?>