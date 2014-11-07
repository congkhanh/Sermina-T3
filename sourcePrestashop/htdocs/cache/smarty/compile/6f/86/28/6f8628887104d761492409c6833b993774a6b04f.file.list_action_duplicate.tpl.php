<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:58
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:749614566545adf06a2a8e3-78124243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8628887104d761492409c6833b993774a6b04f' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '749614566545adf06a2a8e3-78124243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545adf06a48048_40595478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adf06a48048_40595478')) {function content_545adf06a48048_40595478($_smarty_tpl) {?>
<a href="#" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ok']->value, ENT_QUOTES, 'UTF-8', true);?>
'; else document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ko']->value, ENT_QUOTES, 'UTF-8', true);?>
'; return false;">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
