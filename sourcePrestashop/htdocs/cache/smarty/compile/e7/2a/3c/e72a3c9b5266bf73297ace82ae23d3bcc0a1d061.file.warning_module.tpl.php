<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:34:56
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52389152545b08805a6b24-68602709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e72a3c9b5266bf73297ace82ae23d3bcc0a1d061' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52389152545b08805a6b24-68602709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b08805bc580_68928401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b08805bc580_68928401')) {function content_545b08805bc580_68928401($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
