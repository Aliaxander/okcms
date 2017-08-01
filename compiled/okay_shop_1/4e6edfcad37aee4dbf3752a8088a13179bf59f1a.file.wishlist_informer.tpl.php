<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 18:19:15
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/wishlist_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21264391959809bf3c329d8-13464719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e6edfcad37aee4dbf3752a8088a13179bf59f1a' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/wishlist_informer.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21264391959809bf3c329d8-13464719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wished_products' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809bf3c36931_81789744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809bf3c36931_81789744')) {function content_59809bf3c36931_81789744($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['wished_products']->value)>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
wishlist">
        <i class="wish_icon"></i>
        <span class="informer_name tablet-hidden" data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span> <span class="informer_counter">(<?php echo count($_smarty_tpl->tpl_vars['wished_products']->value);?>
)</span>
    </a>
<?php } else { ?>
    <span>
        <i class="wish_icon"></i>
        <span class="informer_name tablet-hidden" data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span>
    </span>
<?php }?>
<?php }} ?>
