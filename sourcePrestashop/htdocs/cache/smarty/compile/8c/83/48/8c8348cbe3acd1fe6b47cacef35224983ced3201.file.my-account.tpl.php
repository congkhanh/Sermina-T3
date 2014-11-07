<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:40:08
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810370506545b09b83b0ce1-68342010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c8348cbe3acd1fe6b47cacef35224983ced3201' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810370506545b09b83b0ce1-68342010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b09b83e4cd7_58001975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b09b83e4cd7_58001975')) {function content_545b09b83e4cd7_58001975($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
