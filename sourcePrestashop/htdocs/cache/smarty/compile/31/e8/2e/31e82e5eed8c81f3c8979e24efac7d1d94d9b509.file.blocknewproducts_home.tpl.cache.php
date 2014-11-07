<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 10:28:57
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blocknewproducts/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299852788545aeaf915a867-58645338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e82e5eed8c81f3c8979e24efac7d1d94d9b509' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blocknewproducts/blocknewproducts_home.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299852788545aeaf915a867-58645338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545aeaf91695c7_39442627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545aeaf91695c7_39442627')) {function content_545aeaf91695c7_39442627($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
