<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 10:28:56
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109654177545aeaf8c231a5-75141163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08dbedf4606d4f363086645a796d8b77b05dcb13' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/blockfacebook/blockfacebook.tpl',
      1 => 1414153807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109654177545aeaf8c231a5-75141163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545aeaf8c2f834_34288772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545aeaf8c2f834_34288772')) {function content_545aeaf8c2f834_34288772($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
