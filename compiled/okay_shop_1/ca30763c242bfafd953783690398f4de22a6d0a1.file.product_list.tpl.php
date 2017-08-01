<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 20:17:37
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179114479659809bf13013d9-34513281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca30763c242bfafd953783690398f4de22a6d0a1' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/product_list.tpl',
      1 => 1501607855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179114479659809bf13013d9-34513281',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809bf134f597_25214089',
  'variables' => 
  array (
    'product' => 0,
    'lang_link' => 0,
    'settings' => 0,
    'wished_products' => 0,
    'lang' => 0,
    'comparison' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809bf134f597_25214089')) {function content_59809bf134f597_25214089($_smarty_tpl) {?><div class="wrap-item-block">
    <div class="item-block">
        <a href="<?php if ($_GET['module']=='ComparisonView') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,800,600,'w');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
<?php }?>"
           <?php if ($_GET['module']=='ComparisonView') {?>data-fancybox="group" data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
           class="wrap-image">
            <?php if ($_smarty_tpl->tpl_vars['product']->value->image->filename) {?>
                <img class="img-responsive center-block" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,200,200);?>
"
                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                     title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php } else { ?>
                <img class="img-responsive center-block" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" width="250"
                     height="250"
                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php }?>
        </a>
        <div class="item-body">
            <div class="old-price"></div>
            <div class="price">39 999 руб.</div>
            <div class="name">
                <a class="product_name" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"
                   href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <a href="#" class="btn btn-small">В корзину</a>
                </div>
                <div class="col-xs-6">
                    <?php if ($_GET['module']!="WishlistView") {?>
                        <?php if (in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['wished_products']->value)) {?>
                            <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="sprites i-heart-small selected"
                               title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_favorite;?>
"></a>
                        <?php } else { ?>
                            <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="sprites i-heart-small"
                               title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
"></a>
                        <?php }?>
                    <?php }?>
                    <?php if ($_GET['module']!="ComparisonView") {?>
                        <?php if (!in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['comparison']->value->ids)) {?>
                            <a class="sprites i-scales-small" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"
                               title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
"></a>
                        <?php } else { ?>
                            <a class="sprites i-scales-small selected" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"
                               title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_comparison;?>
"></a>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
