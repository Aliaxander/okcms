<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 19:59:30
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5339354959809bf057dca0-38464039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e761674a6100b9acc68ccf907cedf43f2357976' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/main.tpl',
      1 => 1501606766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5339354959809bf057dca0-38464039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809bf06124a7_49728367',
  'variables' => 
  array (
    'discounted_products' => 0,
    'featured_products' => 0,
    'new_products' => 0,
    'page' => 0,
    'last_posts' => 0,
    'lang' => 0,
    'lang_link' => 0,
    'post' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809bf06124a7_49728367')) {function content_59809bf06124a7_49728367($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="container">
    <div class="advantages row mobile-row">
        <div class="col-sm-3 col-xs-6">
            <a href="#" class="advantages-block">
                <span class="sprites i-advantages-1"></span>
                Обмениваем старую технику на новую
            </a>
        </div>
        <div class="col-sm-3 col-xs-6">
            <a href="#" class="advantages-block">
                <span class="sprites i-advantages-2"></span>
                В нашем магазине можно торговаться
            </a>
        </div>
        <div class="col-sm-3 col-xs-6">
            <a href="#" class="advantages-block">
                <span class="sprites i-advantages-3"></span>
                Выгодная программа бонусных балов
            </a>
        </div>
        <div class="col-sm-3 col-xs-6">
            <a href="#" class="advantages-block">
                <span class="sprites i-advantages-4"></span>
                У нас свои сервисные центры
            </a>
        </div>
    </div>


    <div class="item-tabs" role="tabpanel">
        <ul class="item-tabs-nav" role="tablist">
            <li role="presentation" class="active"><a href="#actions" aria-controls="actions" role="tab"
                                                      data-toggle="tab">Акции</a></li>
            <li role="presentation"><a href="#hits" aria-controls="hits" role="tab" data-toggle="tab">Хиты продаж</a>
            </li>
            <li role="presentation"><a href="#novelty" aria-controls="novelty" role="tab" data-toggle="tab">Новинки</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="actions">
                
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0][0]->get_discounted_products_plugin(array('var'=>'discounted_products','limit'=>4),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['discounted_products']->value) {?>
                    <div class="item-slider">
                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounted_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                            <div>
                                <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>
                        <?php } ?>
                    </div>
                <?php }?>

            </div>
            <div role="tabpanel" class="tab-pane" id="hits">
                
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0][0]->get_featured_products_plugin(array('var'=>'featured_products','limit'=>4),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
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
                    </div>
                <?php }?>
            </div>
            <div role="tabpanel" class="tab-pane" id="novelty">
                
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>4),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
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

            </div>
        </div>
    </div>


    
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
                                        <img class="news_img"
                                             src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,250,250,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
"
                                             alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                    <?php }?>
                                </a>

                                <div class="news_content">

                                    
                                    <div class="h5">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->url;?>
"
                                           data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
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
