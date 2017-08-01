<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 18:19:15
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195958115759809bf3c3ce22-43324263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eafdfc7c05fa185c81cf00ea15dd4e357b2afede' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/cart_informer.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195958115759809bf3c3ce22-43324263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'lang_link' => 0,
    'lang' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809bf3c44c24_45250042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809bf3c44c24_45250042')) {function content_59809bf3c44c24_45250042($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart" class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
         <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </a>
<?php } else { ?>
    <div class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
        <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </div>
<?php }?>
<?php }} ?>
