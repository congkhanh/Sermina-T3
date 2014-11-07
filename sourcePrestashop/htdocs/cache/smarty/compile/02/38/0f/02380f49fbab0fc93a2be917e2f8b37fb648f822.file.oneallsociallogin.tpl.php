<?php /* Smarty version Smarty-3.1.19, created on 2014-11-07 14:21:54
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/oneallsociallogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1673683167545c7312742933-23778827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02380f49fbab0fc93a2be917e2f8b37fb648f822' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/oneallsociallogin.tpl',
      1 => 1415343586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1673683167545c7312742933-23778827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identity_provider' => 0,
    'link' => 0,
    'oasl_populate' => 0,
    'oasl_first_name' => 0,
    'oasl_last_name' => 0,
    'oasl_email' => 0,
    'oasl_newsletter' => 0,
    'back' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545c7312868c54_09857944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c7312868c54_09857944')) {function content_545c7312868c54_09857944($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading bottom-indent"><?php echo smartyTranslate(array('s'=>'You have connected with %s !','sprintf'=>$_smarty_tpl->tpl_vars['identity_provider']->value),$_smarty_tpl);?>
</h1>
<p>
	<?php echo smartyTranslate(array('s'=>'Please take a minute to review and complete your account information.'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Once you have reviewed your details, your account is ready to use and you can sign in with %s.','sprintf'=>$_smarty_tpl->tpl_vars['identity_provider']->value),$_smarty_tpl);?>

</p>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="oneallsociallogin">
	<form id="account-creation_form" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('oneallsociallogin',true);?>
" method="post" class="box">
		<fieldset>
			<div class="form_content clearfix">
				<div class="form-group">
						<label for="oasl_firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label> 
						<input type="text" class="is_required form-control" id="oasl_firstname" name="oasl_firstname" value="<?php if (isset($_POST['oasl_firstname'])) {?><?php echo stripslashes($_POST['oasl_firstname']);?>
<?php } elseif ($_smarty_tpl->tpl_vars['oasl_populate']->value=='1') {?><?php echo $_smarty_tpl->tpl_vars['oasl_first_name']->value;?>
<?php }?>" />
				</div>
				<div class="form-group">					
						<label for="oasl_lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<input type="text" class="is_required form-control" id="oasl_lastname" name="oasl_lastname" value="<?php if (isset($_POST['oasl_lastname'])) {?><?php echo stripslashes($_POST['oasl_lastname']);?>
<?php } elseif ($_smarty_tpl->tpl_vars['oasl_populate']->value=='1') {?><?php echo $_smarty_tpl->tpl_vars['oasl_last_name']->value;?>
<?php }?>" />
				</div>
				<div class="form-group">				
						<label for="oasl_email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
 <sup>*</sup></label>
						<input type="text" class="is_required form-control" id="oasl_email" name="oasl_email" value="<?php if (isset($_POST['oasl_email'])) {?><?php echo stripslashes($_POST['oasl_email']);?>
<?php } elseif ($_smarty_tpl->tpl_vars['oasl_populate']->value=='1') {?><?php echo $_smarty_tpl->tpl_vars['oasl_email']->value;?>
<?php }?>" />
				</div>				
				<div class="checkbox">
					<label for="oasl_newsletter">
						<input type="checkbox" id="oasl_newsletter" name="oasl_newsletter" value="1" <?php if (isset($_POST['oasl_newsletter'])&&$_POST['oasl_newsletter']=='1') {?>checked="checked"<?php } elseif (isset($_smarty_tpl->tpl_vars['oasl_newsletter']->value)&&$_smarty_tpl->tpl_vars['oasl_newsletter']->value=='1') {?>checked="checked"<?php }?> />
						<?php echo smartyTranslate(array('s'=>'Sign up for our newsletter!'),$_smarty_tpl);?>

					</label>
				</div>			
				<hr />
				<div class="submit">
					<?php if (isset($_smarty_tpl->tpl_vars['back']->value)) {?><input type="hidden" class="hidden" name="back" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /><?php }?>
					<button name="submit" id="submit" type="submit" class="btn btn-default button button-medium"><span>Confirm<i class="icon-chevron-right right"></i></span></button>
				</div>
			</div>
		</fieldset>
	</form>
</div><?php }} ?>
