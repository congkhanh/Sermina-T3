<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:58
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1128865588545adf06a4c807-18291237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1107a2f3e41b8b1b483acced384a17fafbbbd80' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1128865588545adf06a4c807-18291237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545adf06a74166_85573445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adf06a74166_85573445')) {function content_545adf06a74166_85573445($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
