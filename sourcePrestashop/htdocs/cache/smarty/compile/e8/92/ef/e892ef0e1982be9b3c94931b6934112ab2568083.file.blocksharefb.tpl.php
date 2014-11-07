<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 10:59:46
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536310393545af2323369f3-03680003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e892ef0e1982be9b3c94931b6934112ab2568083' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/blocksharefb/blocksharefb.tpl',
      1 => 1414162267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536310393545af2323369f3-03680003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545af23233d367_10113574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545af23233d367_10113574')) {function content_545af23233d367_10113574($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
