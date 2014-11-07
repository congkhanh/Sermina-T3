<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 10:28:56
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/homeslider/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:753270083545aeaf89f48f2-44461062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '435268b1f9fe804a61da117a90d59a59d61e829a' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/themes/default-bootstrap/modules/homeslider/header.tpl',
      1 => 1406832056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '753270083545aeaf89f48f2-44461062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545aeaf8a283f3_75433711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545aeaf8a283f3_75433711')) {function content_545aeaf8a283f3_75433711($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['loop'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['width'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['speed'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['pause'])),$_smarty_tpl);?>

<?php }?><?php }} ?>
