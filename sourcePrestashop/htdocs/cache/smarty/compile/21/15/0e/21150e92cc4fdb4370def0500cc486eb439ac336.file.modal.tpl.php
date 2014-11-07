<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:37
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:501305160545adef1cf0626-59831618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21150e92cc4fdb4370def0500cc486eb439ac336' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '501305160545adef1cf0626-59831618',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545adef1d4f9d9_68942895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adef1d4f9d9_68942895')) {function content_545adef1d4f9d9_68942895($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
