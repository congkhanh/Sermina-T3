<?php /*%%SmartyHeaderCode:824443215545ae05837c064-32285278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '824443215545ae05837c064-32285278',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545b93b34e5d08_41547347',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545b93b34e5d08_41547347')) {function content_545b93b34e5d08_41547347($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://traicaybonmua.byethost17.com/en/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
