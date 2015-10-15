<?php /* Smarty version 3.1.27, created on 2015-07-22 10:38:26
         compiled from "C:\wamp\www\jinlingweb\templates\product.html" */ ?>
<?php
/*%%SmartyHeaderCode:1851055af0222b4d7b9_64185673%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b400dd10d7fb4ba6daa8d8e931096b27a6e0ca7d' => 
    array (
      0 => 'C:\\wamp\\www\\jinlingweb\\templates\\product.html',
      1 => 1437532676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1851055af0222b4d7b9_64185673',
  'variables' => 
  array (
    'pro' => 0,
    'value' => 0,
    'new_info' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55af0222c26c74_21335991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55af0222c26c74_21335991')) {
function content_55af0222c26c74_21335991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1851055af0222b4d7b9_64185673';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="css/product.css ">
	<link rel="stylesheet" type="text/css" href="css/common.css ">
	<link rel="stylesheet" type="text/css" href="css/page/css.css" >

	<title>product</title>
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
	<div class="clear"></div>
	<div id="guanggao">
		<img src="images/guanggao_bg.gif" width="1024px"/>
	</div>
	<div id="clear"></div>
	<div id="main">
		<div class="main_left">
			<ul class="article">
				<li class="cp">产品展示</li>
				<li class="about">Rroduct</li>
				<li class="kongge">&nbsp;</li>
			</ul>
			<div id="clear"></div>
			<div class="Product">
			<?php
$_from = $_smarty_tpl->tpl_vars['pro']->value;
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
				<ul>
					<li><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['product_imgurl'];?>
" alt="" width="149px" height="106px"/><span><?php echo $_smarty_tpl->tpl_vars['value']->value['product_name'];?>
</span></li>
				</ul>
			<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
			</div>
			<div id="clear"></div>
			
			<ul class="page">
				<?php echo '<?php ';?>echo page($page,$count_nums,$limit,3);<?php echo '?>';?>
			</ul>
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