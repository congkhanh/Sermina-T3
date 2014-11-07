<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 09:43:36
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/facebooklike/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1011675603545ae058237bd3-12564342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc789b425cfdcd6b8035d6909516f2e1b7e500a0' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/facebooklike/header.tpl',
      1 => 1414335335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1011675603545ae058237bd3-12564342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fl_lang_code' => 0,
    'fl_default_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545ae058243601_86091708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ae058243601_86091708')) {function content_545ae058243601_86091708($_smarty_tpl) {?><div id="fb-root"></div>
<script type="text/javascript">

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['fl_lang_code']->value;?>
/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
<?php if ($_smarty_tpl->tpl_vars['fl_default_image']->value) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['fl_default_image']->value;?>
" /> 
<link rel="image_src" href="<?php echo $_smarty_tpl->tpl_vars['fl_default_image']->value;?>
" />
<?php }?><?php }} ?>
