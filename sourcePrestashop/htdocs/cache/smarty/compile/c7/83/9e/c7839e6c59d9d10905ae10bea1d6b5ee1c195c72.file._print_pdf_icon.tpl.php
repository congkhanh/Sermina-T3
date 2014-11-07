<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 15:21:14
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/orders/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1138301726545b2f7a943739-10065067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7839e6c59d9d10905ae10bea1d6b5ee1c195c72' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1138301726545b2f7a943739-10065067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_state' => 0,
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b2f7a992512_14798030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b2f7a992512_14798030')) {function content_545b2f7a992512_14798030($_smarty_tpl) {?>


<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE')&&(($_smarty_tpl->tpl_vars['order_state']->value&&$_smarty_tpl->tpl_vars['order_state']->value->invoice)||$_smarty_tpl->tpl_vars['order']->value->invoice_number)) {?>
		<a class="btn btn-default" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
	
	<?php if ((($_smarty_tpl->tpl_vars['order_state']->value&&$_smarty_tpl->tpl_vars['order_state']->value->delivery)||$_smarty_tpl->tpl_vars['order']->value->delivery_number)) {?>
		<a class="btn btn-default"  target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span><?php }} ?>
