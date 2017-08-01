<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 19:18:12
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/products_sort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20283077525980a9c46c9053-99697092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d97070add4573aa365f96a7148cee6099ce4baf' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/products_sort.tpl',
      1 => 1501594615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20283077525980a9c46c9053-99697092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'ajax' => 0,
    'lang' => 0,
    'sort' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5980a9c46d8ce6_22253260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5980a9c46d8ce6_22253260')) {function content_5980a9c46d8ce6_22253260($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
    <div class="sort<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?> fn_is_ajax<?php }?> clearfix">
        <span class="sort_title" data-language="products_sort_by"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_sort_by;?>
:</span>

        <a class="sort_link<?php if ($_smarty_tpl->tpl_vars['sort']->value=='position') {?> active_up<?php }?> no_after" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'position','page'=>null),$_smarty_tpl);?>
">
            <span data-language="products_by_default"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_default;?>
</span>
        </a>

        <a class="sort_link<?php if ($_smarty_tpl->tpl_vars['sort']->value=='price') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='price_desc') {?> active_down<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['sort']->value=='price') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'price_desc','page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'price','page'=>null),$_smarty_tpl);?>
<?php }?>">
            <span data-language="products_by_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_price;?>
</span>
        </a>

        <a class="sort_link<?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='name_desc') {?> active_down<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'name_desc','page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'name','page'=>null),$_smarty_tpl);?>
<?php }?>">
            <span data-language="products_by_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_name;?>
</span>
        </a>

        <a class="sort_link <?php if ($_smarty_tpl->tpl_vars['sort']->value=='rating') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='rating_desc') {?> active_down<?php }?>" <?php if ($_smarty_tpl->tpl_vars['sort']->value=='rating') {?>href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'rating_desc','page'=>null),$_smarty_tpl);?>
" <?php } else { ?>href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'rating','page'=>null),$_smarty_tpl);?>
<?php }?>" data-language="products_by_rating">
            <span data-language="products_by_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_rating;?>
</span>
        </a>
    </div>
<?php }?>
<?php }} ?>
