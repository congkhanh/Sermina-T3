<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:42
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_toolbar_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:836559068545adef6794465-44580251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '777e51f1c198f8f7fff96533d91884e4a77949fb' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_toolbar_link.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '836559068545adef6794465-44580251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'action' => 0,
    'id' => 0,
    'icon_class' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545adef67b71d8_96746019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adef67b71d8_96746019')) {function content_545adef67b71d8_96746019($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="btn btn-default">
	<?php if (isset($_smarty_tpl->tpl_vars['icon_class']->value)) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>

</a><?php }} ?>
