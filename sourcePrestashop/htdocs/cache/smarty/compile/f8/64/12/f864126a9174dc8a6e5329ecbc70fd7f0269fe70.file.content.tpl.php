<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:34:56
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/modules/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1047455474545b0880941b74-46938698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f864126a9174dc8a6e5329ecbc70fd7f0269fe70' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/modules/content.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1047455474545b0880941b74-46938698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b0880976d95_18295185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b0880976d95_18295185')) {function content_545b0880976d95_18295185($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['module_content']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

<?php } else { ?>
	<?php if (!isset($_GET['configure'])) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if (isset($_GET['select'])&&$_GET['select']=='favorites') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/favorites.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	<?php }?>
<?php }?>
<?php }} ?>
