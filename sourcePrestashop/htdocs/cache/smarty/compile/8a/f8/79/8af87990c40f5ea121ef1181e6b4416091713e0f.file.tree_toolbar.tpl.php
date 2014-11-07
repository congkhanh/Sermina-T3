<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:53:19
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1315089398545b0ccf04b715-53503446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8af87990c40f5ea121ef1181e6b4416091713e0f' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1315089398545b0ccf04b715-53503446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b0ccf088c28_32029358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b0ccf088c28_32029358')) {function content_545b0ccf088c28_32029358($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
