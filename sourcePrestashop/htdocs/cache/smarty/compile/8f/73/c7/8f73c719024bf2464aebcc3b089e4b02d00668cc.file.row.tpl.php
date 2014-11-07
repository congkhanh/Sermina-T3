<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:58
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/kpi/row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194975879545adf063f8385-22841499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f73c719024bf2464aebcc3b089e4b02d00668cc' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/kpi/row.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194975879545adf063f8385-22841499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545adf064175c0_65432317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adf064175c0_65432317')) {function content_545adf064175c0_65432317($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value) {
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-6 col-lg-3">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>
