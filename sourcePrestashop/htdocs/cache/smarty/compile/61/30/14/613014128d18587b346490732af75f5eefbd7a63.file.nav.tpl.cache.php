<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:43:37
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1687335519545ae059354251-23347317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613014128d18587b346490732af75f5eefbd7a63' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockcontact/nav.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1687335519545ae059354251-23347317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545ae059365bd6_82015417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ae059365bd6_82015417')) {function content_545ae059365bd6_82015417($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>
