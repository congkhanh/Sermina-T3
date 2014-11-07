<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:43:37
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockcurrencies/blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:850076284545ae0592ab4f5-04138856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651e00b8aa0fa6ce9fca1c1b162cee0683d7a787' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockcurrencies/blockcurrencies.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '850076284545ae0592ab4f5-04138856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'request_uri' => 0,
    'cookie' => 0,
    'f_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545ae0592fbf62_96611062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ae0592fbf62_96611062')) {function content_545ae0592fbf62_96611062($_smarty_tpl) {?>
<!-- Block currencies module -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
	<div id="currencies-block-top">
		<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
			<div class="current">
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
				<span class="cur-label"><?php echo smartyTranslate(array('s'=>'Currency','mod'=>'blockcurrencies'),$_smarty_tpl);?>
 :</span>
				<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?><strong><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'];?>
</strong><?php }?>
				<?php } ?>
			</div>
			<ul id="first-currencies" class="currencies_ul toogle_content">
				<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
					<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
						<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>

						</a>
					</li>
				<?php } ?>
			</ul>
		</form>
	</div>
<?php }?>
<!-- /Block currencies module --><?php }} ?>
