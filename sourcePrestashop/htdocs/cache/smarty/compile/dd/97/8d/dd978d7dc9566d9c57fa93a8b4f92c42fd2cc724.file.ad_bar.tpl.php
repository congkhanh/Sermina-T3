<?php /* Smarty version Smarty-3.1.19, created on 2014-11-07 18:53:56
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/modules/ad_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:736073529545cb2d45d1810-76827884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd978d7dc9566d9c57fa93a8b4f92c42fd2cc724' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/controllers/modules/ad_bar.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '736073529545cb2d45d1810-76827884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad_modules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545cb2d4655393_89776712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545cb2d4655393_89776712')) {function content_545cb2d4655393_89776712($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/vol9_6/byethost17.com/b17_15466088/htdocs/tools/smarty/plugins/function.cycle.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['ad_modules']->value['not_installed'])) {?>
<div class="bootstrap panel">
	<h3><i class="icon-certificate"></i> <?php echo smartyTranslate(array('s'=>'You might be interested in'),$_smarty_tpl);?>
</h3>
	<div class="row">
		<table id="tab_modules_list_not_installed" class="table">
			<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad_modules']->value['not_installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class_row'=>$_tmp1), 0);?>

			<?php } ?>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }?>

<?php }} ?>
