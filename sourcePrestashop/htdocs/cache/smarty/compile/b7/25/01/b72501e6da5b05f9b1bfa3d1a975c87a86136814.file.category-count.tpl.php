<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:40:22
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81906744545b09c6bf0378-22989645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72501e6da5b05f9b1bfa3d1a975c87a86136814' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/category-count.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81906744545b09c6bf0378-22989645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b09c6c12908_11152276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b09c6c12908_11152276')) {function content_545b09c6c12908_11152276($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
