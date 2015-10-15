<?php /* Smarty version 3.1.27, created on 2015-07-22 09:27:40
         compiled from "C:\wamp\www\jinlingweb\templates\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:2822855aef18c62ebd9_37252743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce306f5ffa005e73901068e69a42658ce0cf38df' => 
    array (
      0 => 'C:\\wamp\\www\\jinlingweb\\templates\\header.html',
      1 => 1437490252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2822855aef18c62ebd9_37252743',
  'variables' => 
  array (
    'pnav_data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55aef18c658c84_27495229',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55aef18c658c84_27495229')) {
function content_55aef18c658c84_27495229 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2822855aef18c62ebd9_37252743';
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