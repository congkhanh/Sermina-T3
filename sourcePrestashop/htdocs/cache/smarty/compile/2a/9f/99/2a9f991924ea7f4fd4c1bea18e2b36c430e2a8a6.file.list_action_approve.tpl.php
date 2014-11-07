<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:37:40
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/productcomments/views/templates/admin/list_action_approve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:723594706545b0924144b00-15871072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9f991924ea7f4fd4c1bea18e2b36c430e2a8a6' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/productcomments/views/templates/admin/list_action_approve.tpl',
      1 => 1415252121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '723594706545b0924144b00-15871072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b092414a534_64128458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b092414a534_64128458')) {function content_545b092414a534_64128458($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="btn btn-success" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-check"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
