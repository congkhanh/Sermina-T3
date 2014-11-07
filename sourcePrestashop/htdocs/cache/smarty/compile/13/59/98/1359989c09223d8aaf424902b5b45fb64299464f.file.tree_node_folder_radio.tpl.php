<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:58
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1260627184545adf061b5330-95692214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1359989c09223d8aaf424902b5b45fb64299464f' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/tree/tree_node_folder_radio.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1260627184545adf061b5330-95692214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'root_category' => 0,
    'input_name' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545adf061eaca6_60446150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adf061eaca6_60446150')) {function content_545adf061eaca6_60446150($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['node']->value['id_category']!=$_smarty_tpl->tpl_vars['root_category']->value) {?>
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li>
<?php }} ?>
