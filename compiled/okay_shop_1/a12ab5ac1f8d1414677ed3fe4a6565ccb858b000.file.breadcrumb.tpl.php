<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 18:25:45
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55532307959809d794d0929-76515284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12ab5ac1f8d1414677ed3fe4a6565ccb858b000' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/breadcrumb.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55532307959809d794d0929-76515284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'lang_link' => 0,
    'lang' => 0,
    'category' => 0,
    'keyword' => 0,
    'cat' => 0,
    'brand' => 0,
    'page' => 0,
    'product' => 0,
    'order' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809d79518574_06673332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809d79518574_06673332')) {function content_59809d79518574_06673332($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['module']->value!="MainView") {?>
    <ol class="breadcrumbs">

        
        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
            <a itemprop="url" href="<?php if (!empty($_smarty_tpl->tpl_vars['lang_link']->value)) {?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php } else { ?>/<?php }?>" data-language="breadcrumb_home">
                <span itemprop="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
</span>
            </a>
        </li>

        
        <?php if ($_GET['module']=="ProductsView") {?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value&&!$_smarty_tpl->tpl_vars['keyword']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
                    <?php if (!$_smarty_tpl->tpl_vars['cat']->last) {?>
                        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
">
                                <span itemprop="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </a>
                        </li>
                    <?php } else { ?>
                        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                    <?php }?>
                <?php } ?>
            <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands" data-language="breadcrumb_brands">
                        <span itemprop="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_brands;?>
</span>
                    </a>
                </li>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                <li data-language="breadcrumb_search"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_search;?>
</li>
            <?php } else { ?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php }?>

        
        <?php } elseif ($_GET['module']=="BrandsView") {?>
            <li><?php echo $_smarty_tpl->tpl_vars['page']->value->name;?>
</li>

        
        <?php } elseif ($_GET['module']=="ProductView") {?>
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
">
                        <span itemprop="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                </li>
            <?php } ?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>

        
        <?php } elseif ($_GET['module']=="FeedbackView"||$_GET['module']=="PageView") {?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>

        
        <?php } elseif ($_GET['module']=="CartView") {?>
            <li data-language="breadcrumb_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_cart;?>
</li>

        
        <?php } elseif ($_GET['module']=="OrderView") {?>
            <li data-language="breadcrumb_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_order;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</li>

        
        <?php } elseif ($_GET['module']=="LoginView"&&$_GET['action']=="password_remind") {?>
            <li data-language="breadcrumbs_password_remind"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_password_remind;?>
</li>

        
        <?php } elseif ($_GET['module']=="LoginView") {?>
            <li data-language="breadcrumbs_enter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_enter;?>
</li>

        
        <?php } elseif ($_GET['module']=="RegisterView") {?>
            <li data-language="breadcrumbs_registration"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_registration;?>
</li>

        
        <?php } elseif ($_GET['module']=="UserView") {?>
            <li data-language="breadcrumbs_user"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_user;?>
</li>

        
        <?php } elseif ($_GET['module']=="BlogView") {?>
            <?php if ($_GET['url']) {?>
                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_GET['type_post'];?>
" data-language="breadcrumbs_blog">
                        <span itemprop="title">
                            <?php if ($_GET['type_post']=="news") {?>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>

                            <?php }?>
                        </span>
                    </a>
                </li>
                <li>
                    <?php echo $_smarty_tpl->tpl_vars['post']->value->name;?>

                </li>
            <?php } else { ?>
                <li data-language="breadcrumbs_blog">
                    <?php if ($_GET['type_post']=="news") {?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>

                    <?php }?>
                </li>
            <?php }?>
        <?php } elseif ($_GET['module']=='ComparisonView') {?>
            <li data-language="breadcrumb_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_comparison;?>
</li>
        <?php } elseif ($_GET['module']=='WishlistView') {?>
            <li data-language="breadcrumb_wishlist"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_wishlist;?>
</li>
        <?php }?>
    </ol>
<?php }?>
<?php }} ?>
