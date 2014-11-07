<?php /* Smarty version Smarty-3.1.19, created on 2014-11-07 17:50:35
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1927871129545ca3fbea5246-99786591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ea20a71905bd8497154312e6ef22ed27a2495f1' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1927871129545ca3fbea5246-99786591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545ca3fbf00251_21929812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ca3fbf00251_21929812')) {function content_545ca3fbf00251_21929812($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
