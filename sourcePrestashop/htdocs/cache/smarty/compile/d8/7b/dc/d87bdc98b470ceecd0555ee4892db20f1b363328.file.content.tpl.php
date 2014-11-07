<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:37:39
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1241320052545adef3a39549-46311235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87bdc98b470ceecd0555ee4892db20f1b363328' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/admin123/themes/default/template/content.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1241320052545adef3a39549-46311235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545adef3ad65a3_06130714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545adef3ad65a3_06130714')) {function content_545adef3ad65a3_06130714($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
