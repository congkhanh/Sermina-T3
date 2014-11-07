<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:58
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/products/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1846088312545adf060aad02-98535096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61ce00741dcd817d2adef73273664b43ac8ce71d' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/products/helpers/tree/tree_header.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1846088312545adf060aad02-98535096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'is_category_filter' => 0,
    'toolbar' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545adf06109ef9_93300681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adf06109ef9_93300681')) {function content_545adf06109ef9_93300681($_smarty_tpl) {?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#filter-by-category').click(function() {
			if ($(this).is(':checked')) {
				$('#block_category_tree').show();
				$('#category-tree-toolbar').show();
			} else {
				$('#block_category_tree').hide();
				$('#category-tree-toolbar').hide();
				location.href = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
&reset_filter_category=1';
			}
		});
	});
</script>

<div class="tree-panel-heading-controls clearfix">
	<div id="category-tree-toolbar" <?php if (!$_smarty_tpl->tpl_vars['is_category_filter']->value) {?>style="display:none;"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
	<label class="tree-panel-label-title">
		<input type="checkbox" id="filter-by-category" name="filter-by-category" <?php if ($_smarty_tpl->tpl_vars['is_category_filter']->value) {?>checked="checked"<?php }?> />
		<i class="icon-tags"></i>
		<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

	</label>
</div><?php }} ?>
