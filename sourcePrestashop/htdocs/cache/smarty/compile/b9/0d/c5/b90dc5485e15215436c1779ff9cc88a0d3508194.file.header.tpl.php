<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:43:36
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/zopimfree/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1333834608545ae0581d8971-69161433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90dc5485e15215436c1779ff9cc88a0d3508194' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/zopimfree/header.tpl',
      1 => 1414209923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333834608545ae0581d8971-69161433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widgetid' => 0,
    'customerName' => 0,
    'customerEmail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545ae0582106f2_58831048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ae0582106f2_58831048')) {function content_545ae0582106f2_58831048($_smarty_tpl) {?><?php if (!isset($_GET['content_only'])) {?>
<!--Start of Zopim Live Chat Script-->

<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?<?php echo $_smarty_tpl->tpl_vars['widgetid']->value;?>
';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>

<?php if ($_smarty_tpl->tpl_vars['customerName']->value&&$_smarty_tpl->tpl_vars['customerEmail']->value) {?>

<script>
  $zopim(function() {
    $zopim.livechat.setName('<?php if ($_smarty_tpl->tpl_vars['customerName']->value) {?><?php echo $_smarty_tpl->tpl_vars['customerName']->value;?>
<?php }?>');
    $zopim.livechat.setEmail('<?php if ($_smarty_tpl->tpl_vars['customerEmail']->value) {?><?php echo $_smarty_tpl->tpl_vars['customerEmail']->value;?>
<?php }?>');
  });
</script>

<?php }?>
<!--End of Zopim Live Chat Script-->
<?php }?><?php }} ?>
