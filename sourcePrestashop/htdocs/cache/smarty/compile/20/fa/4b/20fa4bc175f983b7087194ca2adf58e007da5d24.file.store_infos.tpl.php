<?php /* Smarty version Smarty-3.1.19, created on 2014-11-07 10:08:53
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1392596756545c37c529c680-39358697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20fa4bc175f983b7087194ca2adf58e007da5d24' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/store_infos.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1392596756545c37c529c680-39358697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545c37c52d1e12_33167579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c37c52d1e12_33167579')) {function content_545c37c52d1e12_33167579($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>
