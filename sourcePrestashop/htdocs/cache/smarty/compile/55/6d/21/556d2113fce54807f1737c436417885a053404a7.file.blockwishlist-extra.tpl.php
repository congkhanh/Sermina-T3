<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 10:59:46
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:476586423545af2324521c1-01485234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '556d2113fce54807f1737c436417885a053404a7' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '476586423545af2324521c1-01485234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545af23245b294_97683762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545af23245b294_97683762')) {function content_545af23245b294_97683762($_smarty_tpl) {?>

<p class="buttons_bottom_block no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>
