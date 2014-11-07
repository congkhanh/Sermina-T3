<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:43:37
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/blockbanner/blockbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1881800626545ae0592363f6-36035868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40a6f6e078cdf7d7eceb8318db8f57e93ba52a75' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/blockbanner/blockbanner.tpl',
      1 => 1414162750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881800626545ae0592363f6-36035868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545ae059255004_68469394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ae059255004_68469394')) {function content_545ae059255004_68469394($_smarty_tpl) {?>
<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
	<img class="img-responsive" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="1170" height="65" />
<?php } else { ?>
	<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

<?php }?>
</a>
<?php }} ?>
