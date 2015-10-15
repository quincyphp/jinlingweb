<?php /* Smarty version 3.1.27, created on 2015-07-22 14:25:27
         compiled from "E:\wamp\www\jinlingweb\templates\footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:2167255af375792b549_01619184%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '328a77afdeaed26960712e5084fd61c73c0ff44f' => 
    array (
      0 => 'E:\\wamp\\www\\jinlingweb\\templates\\footer.html',
      1 => 1437136036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2167255af375792b549_01619184',
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55af37579c13c6_51848828',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55af37579c13c6_51848828')) {
function content_55af37579c13c6_51848828 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2167255af375792b549_01619184';
?>
<div class="footer">
	<p>地址：<?php echo $_smarty_tpl->tpl_vars['company']->value['company_address'];?>

			联系人：<?php echo $_smarty_tpl->tpl_vars['company']->value['company_linkman'];?>

			移动电话：<?php echo $_smarty_tpl->tpl_vars['company']->value['company_mobile'];?>

			固定电话：<?php echo $_smarty_tpl->tpl_vars['company']->value['company_phone'];?>

			传 真：<?php echo $_smarty_tpl->tpl_vars['company']->value['company_fax'];?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['company']->value['company_copyright'];?>

			<?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
 版权所有  
			</p>
	<p><a href="#"><?php echo $_smarty_tpl->tpl_vars['company']->value['company_recordnumber'];?>
</a></p>
    <div class="qqImg"><img src="images/qqjiaotang.gif" alt="" /></div>
</div><?php }
}
?>