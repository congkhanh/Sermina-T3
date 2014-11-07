<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 10:28:57
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockbestsellers/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184505721545aeaf9647d59-51226265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca38a5af219f13967a733fba86e669a8c00e0461' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockbestsellers/blockbestsellers-home.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184505721545aeaf9647d59-51226265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545aeaf9656189_04776631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545aeaf9656189_04776631')) {function content_545aeaf9656189_04776631($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
