<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 14:05:01
         compiled from "/home/okcms/design/okay_shop_1/html/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213429619259808a8d7f72f5-73783224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7eb884e6e340de2af6c505210a0b2a393fd238' => 
    array (
      0 => '/home/okcms/design/okay_shop_1/html/main.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213429619259808a8d7f72f5-73783224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_mobile' => 0,
    'is_tablet' => 0,
    'lang' => 0,
    'featured_products' => 0,
    'lang_link' => 0,
    'new_products' => 0,
    'discounted_products' => 0,
    'banner_group2' => 0,
    'bi' => 0,
    'config' => 0,
    'all_brands' => 0,
    'b' => 0,
    'page' => 0,
    'last_posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59808a8d870675_83693606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59808a8d870675_83693606')) {function content_59808a8d870675_83693606($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
        <div class="advantages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="advantage advantage_1">
                            <span data-language="advantage_1"><?php echo $_smarty_tpl->tpl_vars['lang']->value->advantage_1;?>
</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="advantage advantage_2">
                            <span data-language="advantage_2"><?php echo $_smarty_tpl->tpl_vars['lang']->value->advantage_2;?>
</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="advantage advantage_3">
                            <span data-language="advantage_3"><?php echo $_smarty_tpl->tpl_vars['lang']->value->advantage_3;?>
</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="advantage advantage_4">
                            <span data-language="advantage_4"><?php echo $_smarty_tpl->tpl_vars['lang']->value->advantage_4;?>
</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products','limit'=>4),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
        <div class="h2">
            <span data-language="main_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_recommended_products;?>
</span>
        </div>

        <div class="main_products clearfix">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <div class="products_item no_padding col-sm-6 col-xl-3">
                    <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            <?php } ?>

            <div class="look_all">
                <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
bestsellers" data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
</a>
            </div>
        </div>
    <?php }?>

    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>4),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
        <div class="h2">
            <span data-language="main_new_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_new_products;?>
</span>
        </div>

        <div class="main_products clearfix">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <div class="products_item no_padding col-sm-6 col-xl-3">
                    <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            <?php } ?>
        </div>
    <?php }?>

    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0][0]->get_discounted_products_plugin(array('var'=>'discounted_products','limit'=>4),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['discounted_products']->value) {?>
        <div class="h2">
            <span data-language="main_discount_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_discount_products;?>
</span>
        </div>

        <div class="main_products clearfix">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <div class="products_item no_padding col-sm-6 col-xl-3">
                    <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            <?php } ?>

            <div class="look_all">
                <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
discounted" data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
</a>
            </div>
        </div>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_banner'][0][0]->get_banner_plugin(array('var'=>'banner_group2','group'=>'group2'),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['banner_group2']->value->items) {?>
            <div class="fn_banner_group2 banners clearfix">
                <?php  $_smarty_tpl->tpl_vars['bi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_group2']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bi']->key => $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->_loop = true;
?>
                    <div class="no_padding col-sm-6">
                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['bi']->value->url;?>
" target="_blank">
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->image) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->banners_images_dir;?>
<?php echo $_smarty_tpl->tpl_vars['bi']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bi']->value->alt;?>
" title="<?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>
"/>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                            </a>
                        <?php }?>
                    </div>
                <?php } ?>
            </div>
        <?php }?>
    <?php }?>

    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_brands'][0][0]->get_brands_plugin(array('var'=>'all_brands','visible_brand'=>1),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['all_brands']->value) {?>
        <div class="h2">
            <span data-language="main_brands"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_brands;?>
</span>
        </div>

        <div class="fn_all_brands all_brands block">
            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                <div class="fleft">
                    <a class="all_brands_link" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands/<?php echo $_smarty_tpl->tpl_vars['b']->value->url;?>
" data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['b']->value->image) {?>
                            <div class="brand_image">
                                <img class="brand_img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['b']->value->image,250,250,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <?php } else { ?>
                            <div class="brand_name">
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                        <?php }?>
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php }?>

    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0][0]->get_posts_plugin(array('var'=>'last_posts','limit'=>2,'type_post'=>"news"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['page']->value->description||$_smarty_tpl->tpl_vars['last_posts']->value) {?>
        <div class="wrap_block clearfix">
            <?php if ($_smarty_tpl->tpl_vars['page']->value->description) {?>
                <div class="no_padding<?php if ($_smarty_tpl->tpl_vars['last_posts']->value) {?> col-lg-6<?php } else { ?> col-lg-12<?php }?>">
                    <div class="h2">
                        <span data-language="main_about_store"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_about_store;?>
</span>
                    </div>

                    <div class="block padding">
                        <h1 class="h4"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                        <div class="main_text"><?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>
</div>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['last_posts']->value) {?>
                <div class="no_padding<?php if ($_smarty_tpl->tpl_vars['page']->value->description) {?> col-lg-6<?php } else { ?> col-lg-12<?php }?>">
                    <div class="h2">
                        <span data-language="main_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>
</span>
                    </div>

                    <div class="news clearfix block">
                        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                            <div class="news_item no_padding col-sm-6">
                                <a class="news_image" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                                        <img class="news_img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,250,250,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                    <?php }?>
                                </a>

                                <div class="news_content">

                                    
                                    <div class="h5">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    </div>

                                    
                                    <div class="news_date"><span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</span></div>

                                    
                                    <?php if ($_smarty_tpl->tpl_vars['post']->value->annotation) {?>
                                        <div class="news_annotation"><?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>
</div>
                                    <?php }?>

                                </div>
                            </div>
                        <?php } ?>

                        <div class="look_all">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
news" data-language="main_all_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_all_news;?>
</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    <?php }?>

</div><?php }} ?>
