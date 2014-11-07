<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 10:59:46
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/productpaymentlogos/views/templates/hook/productpaymentlogos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1971073289545af232468f94-72053159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82db1e5357c96d36597cea985ac37f11f41ee51a' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/productpaymentlogos/views/templates/hook/productpaymentlogos.tpl',
      1 => 1414256236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1971073289545af232468f94-72053159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_title' => 0,
    'banner_link' => 0,
    'module_dir' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545af232485018_20397878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545af232485018_20397878')) {function content_545af232485018_20397878($_smarty_tpl) {?>
<!-- Productpaymentlogos module -->
<div id="product_payment_logos">
	<div class="box-security">
    <h5 class="product-heading-h5"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h5>
  	<?php if ($_smarty_tpl->tpl_vars['banner_link']->value!='') {?><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php }?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive" />
	<?php if ($_smarty_tpl->tpl_vars['banner_link']->value!='') {?></a><?php }?>
    </div>
</div>
<!-- /Productpaymentlogos module -->
<?php }} ?>
