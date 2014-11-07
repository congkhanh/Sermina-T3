<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:42
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_node_item_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299381155545adef67dfbf5-66872949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ef13136289eae44a2c49ba42a6b594af4b9a40f' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_node_item_checkbox.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299381155545adef67dfbf5-66872949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545adef680e093_20849548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adef680e093_20849548')) {function content_545adef680e093_20849548($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-name-disable<?php }?>">
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
