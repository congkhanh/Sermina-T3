<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:40:08
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:784025434545b09b83ed698-09745890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf254f022193947d39102c025940719a2add1a7d' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '784025434545b09b83ed698-09745890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b09b8401a78_04644584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b09b8401a78_04644584')) {function content_545b09b8401a78_04644584($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
