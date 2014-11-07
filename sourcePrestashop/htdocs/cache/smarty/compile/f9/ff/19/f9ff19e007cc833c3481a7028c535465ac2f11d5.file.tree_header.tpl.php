<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:53:19
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1144455894545b0ccf090bd8-13587291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9ff19e007cc833c3481a7028c535465ac2f11d5' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144455894545b0ccf090bd8-13587291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b0ccf0a9686_29052602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b0ccf0a9686_29052602')) {function content_545b0ccf0a9686_29052602($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
