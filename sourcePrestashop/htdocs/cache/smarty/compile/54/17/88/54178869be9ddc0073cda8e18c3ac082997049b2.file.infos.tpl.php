<?php /* Smarty version Smarty-3.1.19, created on 2014-11-07 18:37:09
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/bankwire/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1075889946545caee52154a8-92966482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54178869be9ddc0073cda8e18c3ac082997049b2' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/bankwire/views/templates/hook/infos.tpl',
      1 => 1414337310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1075889946545caee52154a8-92966482',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545caee52ae7e1_71828339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545caee52ae7e1_71828339')) {function content_545caee52ae7e1_71828339($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
