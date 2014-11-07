<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:40:23
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282172106545b09c75e24a6-20787565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25ebb04d652ccde9e0e26b47b0dbcf445912eb33' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282172106545b09c75e24a6-20787565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b09c75f1720_40375461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b09c75f1720_40375461')) {function content_545b09c75f1720_40375461($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
