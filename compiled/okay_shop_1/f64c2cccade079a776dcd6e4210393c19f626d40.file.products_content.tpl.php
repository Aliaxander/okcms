<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 19:18:12
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/products_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14123915785980a9c46da658-38137370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f64c2cccade079a776dcd6e4210393c19f626d40' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/products_content.tpl',
      1 => 1501594615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14123915785980a9c46da658-38137370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5980a9c46de718_72227028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5980a9c46de718_72227028')) {function content_5980a9c46de718_72227028($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <div class="no_padding products_item col-sm-6 col-xl-4">
            <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php } ?>
<?php } else { ?>
    <span data-language="products_not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_not_found;?>
</span>
<?php }?><?php }} ?>
