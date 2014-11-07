<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:42
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74692651545adef6714823-44921607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2577db9c6a703290097fcc136e85c94c395fdf2a' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74692651545adef6714823-44921607',
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
  'unifunc' => 'content_545adef674f2c5_10790857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adef674f2c5_10790857')) {function content_545adef674f2c5_10790857($_smarty_tpl) {?>
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
