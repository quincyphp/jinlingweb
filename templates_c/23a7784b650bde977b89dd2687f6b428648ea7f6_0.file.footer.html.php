<?php /* Smarty version 3.1.27, created on 2015-07-22 09:27:40
         compiled from "C:\wamp\www\jinlingweb\templates\footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:2334155aef18c668c63_45654680%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a7784b650bde977b89dd2687f6b428648ea7f6' => 
    array (
      0 => 'C:\\wamp\\www\\jinlingweb\\templates\\footer.html',
      1 => 1437136036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2334155aef18c668c63_45654680',
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55aef18c6b9d73_04461470',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55aef18c6b9d73_04461470')) {
function content_55aef18c6b9d73_04461470 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2334155aef18c668c63_45654680';
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