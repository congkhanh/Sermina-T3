<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 10:28:57
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1307040277545aeaf95ad249-99542890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf7ad00d366145585bab599ea09e750f866b0a25' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1307040277545aeaf95ad249-99542890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545aeaf95ba124_97557887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545aeaf95ba124_97557887')) {function content_545aeaf95ba124_97557887($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
