<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:58
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1295107568545adf06a0ca43-89969972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae2ebfc017ba8297a028c552e87542ad51fa2a06' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1295107568545adf06a0ca43-89969972',
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
  'unifunc' => 'content_545adf06a26181_51533964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adf06a26181_51533964')) {function content_545adf06a26181_51533964($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
