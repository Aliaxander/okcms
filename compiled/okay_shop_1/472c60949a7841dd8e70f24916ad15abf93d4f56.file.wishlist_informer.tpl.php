<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 14:05:01
         compiled from "/home/okcms/design/okay_shop_1/html/wishlist_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90876373259808a8de73cc2-25791491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '472c60949a7841dd8e70f24916ad15abf93d4f56' => 
    array (
      0 => '/home/okcms/design/okay_shop_1/html/wishlist_informer.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90876373259808a8de73cc2-25791491',
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
  'unifunc' => 'content_59808a8de7b7e1_31185312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59808a8de7b7e1_31185312')) {function content_59808a8de7b7e1_31185312($_smarty_tpl) {?>
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
