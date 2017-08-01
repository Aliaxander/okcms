<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 19:49:24
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64247710259809bf3b69430-61582034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9678f87fb125d04dc98551f8e61d1b95b83e117' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/index.tpl',
      1 => 1501606157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64247710259809bf3b69430-61582034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809bf3c2d691_43115393',
  'variables' => 
  array (
    'language' => 0,
    'settings' => 0,
    'meta_title' => 0,
    'filter_meta' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'module' => 0,
    'set_canonical' => 0,
    'config' => 0,
    'total_pages_num' => 0,
    'current_page_num' => 0,
    'rel_prev_next' => 0,
    'lang_link' => 0,
    'canonical' => 0,
    'product' => 0,
    'post' => 0,
    'sort_canonical' => 0,
    'languages' => 0,
    'l' => 0,
    'pages' => 0,
    'p' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809bf3c2d691_43115393')) {function content_59809bf3c2d691_43115393($_smarty_tpl) {?><!DOCTYPE html>
<html <?php if ($_smarty_tpl->tpl_vars['language']->value->href_lang) {?>lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->href_lang, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> prefix="og: http://ogp.me/ns#">
<head>
    

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/css/slick.css">
    <link rel="stylesheet" href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/css/bootstrap.min.css">
    <link rel="stylesheet" href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700|Russo+One&amp;subset=cyrillic"
          rel="stylesheet">


    
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->title, ENT_QUOTES, 'UTF-8', true);?>
</title>

    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <?php if ((!empty($_smarty_tpl->tpl_vars['meta_description']->value)||!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->description)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->keywords))&&!$_GET['page']) {?>
        <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->description, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->keywords, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductsView') {?>
        <?php if ($_smarty_tpl->tpl_vars['set_canonical']->value) {?>
            <meta name="robots" content="noindex,nofollow">
        <?php } elseif ($_GET['page']||$_GET['sort']) {?>
            <meta name="robots" content="noindex,follow">
        <?php } elseif (isset($_GET['keyword'])) {?>
            <meta name="robots" content="noindex,follow">
        <?php } else { ?>
            <meta name="robots" content="index,follow">
        <?php }?>
    <?php } elseif ($_GET['module']=="RegisterView"||$_GET['module']=="LoginView"||$_GET['module']=="UserView"||$_GET['module']=="CartView") {?>
        <meta name="robots" content="noindex,follow">
    <?php } elseif ($_GET['module']=="OrderView") {?>
        <meta name="robots" content="noindex,nofollow">
    <?php } else { ?>
        <meta name="robots" content="index,follow">
    <?php }?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="generator" content="OkayCMS <?php echo $_smarty_tpl->tpl_vars['config']->value->version;?>
">

    <?php if ($_smarty_tpl->tpl_vars['settings']->value->g_webmaster) {?>
        <meta name="google-site-verification" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->g_webmaster;?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value->y_webmaster) {?>
        <meta name='yandex-verification' content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->y_webmaster;?>
">
    <?php }?>

    
    <?php if ($_GET['module']=="BlogView"&&$_smarty_tpl->tpl_vars['total_pages_num']->value>1) {?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==$_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
                <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
"/>
            <?php } else { ?>
                <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
            <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>2),$_smarty_tpl);?>
"/>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
                <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
"/>
            <?php } else { ?>
                <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
            <?php }?>
            <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl);?>
"/>
        <?php }?>
    <?php }?>

    
    <?php echo $_smarty_tpl->tpl_vars['rel_prev_next']->value;?>


    
    <?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductView') {?>
        <meta property="og:url"
              content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta property="og:description" content='<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->annotation);?>
'>
        <meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
">
        <link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
">
        
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:description" content="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->annotation);?>
">
        <meta name="twitter:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
">
    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value=='BlogView') {?>
        <meta property="og:url"
              content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
        <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
            <meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
">
            <link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
">
        <?php } else { ?>
            <meta property="og:image"
                  content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
            <meta name="twitter:image"
                  content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
        <?php }?>
        <meta property="og:description" content='<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value->annotation);?>
'>
        
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:description" content="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value->annotation);?>
">
        <meta name="twitter:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
">
    <?php } else { ?>
        <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
">
        <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
        <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <link rel="image_src" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
        
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <meta name="twitter:image"
              content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?>
        <link rel="canonical"
              href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
">
    <?php } elseif ($_GET['sort']) {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sort_canonical']->value;?>
">
    <?php }?>

    
    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
            <link rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['l']->value->href_lang;?>
" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['l']->value->url;?>
">
        <?php }?>
    <?php } ?>

    
    <link href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="icon">
    <link href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="shortcut icon">

    
    <script src="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-2.1.4.min.js"></script>

    
    <script src="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/slick.min.js"></script>

    
    <script src="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.matchHeight-min.js"></script>

    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value->g_analytics) {?>
    
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', '<?php echo $_smarty_tpl->tpl_vars['settings']->value->g_analytics;?>
', 'auto');
            ga('send', 'pageview');
        </script>
    
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value->head_custom_script) {?>
        <?php echo $_smarty_tpl->tpl_vars['settings']->value->head_custom_script;?>

    <?php }?>

</head>
<body>
<div id="wrap">
    <!-- header -->
    <header>
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <ul class="navbar-nav navbar-right">
                    <li><a href="/user/login"><span class="sprites i-login"></span>Вход</a></li>
                    <li><a href="/user/register"><span class="sprites i-registration"></span>Регистрация</a></li>
                </ul>
                <div id="navbar" class="collapse navbar-collapse wrap-nav">
                    <ul class="nav navbar-nav">
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
                                <li>
                                    <a data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
"
                                       href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /header-top -->
        <div class="container">
            <div class="row">
                <div class="col-xs-8-m col-xs-4 col-sm-4 col-lg-3 col-md-3">
                    <div class="logo"><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
//"><img
                                    src="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/logo.svg" alt="" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-xs-4-m col-xs-3 col-sm-3 col-lg-3 col-md-2 pull-right">
                    <!-- info-nav -->
                    <ul class="info-nav">
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/favorites.html" class="sprites i-heart"></a></li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/collation.html" class="sprites i-scales"></a></li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/basket.html" class="sprites i-basket"></a></li>
                    </ul>
                    <!-- /info-nav -->
                </div>
                <div class="col-xs-5 col-sm-5 col-lg-6 col-md-7 phone">
                    <!-- phone -->
                    <a href="tel:+79788901534">+7 (978) 890-15-34</a>
                    <a href="tel:+79788901534">+7 (978) 890-15-34</a>
                    <a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#callback" data-toggle="modal" class="link">Перезвонить вам?</a>
                    <!-- /phone -->
                </div>
            </div>
            <!-- header-bottom -->
            <div class="header-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <!-- catalogue -->
                        <div class="catalogue   <?php if ($_smarty_tpl->tpl_vars['module']->value=="MainView") {?>catalogue-home<?php }?> dropdown">
                            <a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#" data-toggle="dropdown" aria-haspopup="true"
                               role="button" aria-expanded="false">Каталог
                                товаров<span class="sprites i-angle"></span></a>
                            <?php echo $_smarty_tpl->getSubTemplate ("categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                        <div class="shadow"></div>
                        <!-- /catalogue -->
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['module']->value=="MainView") {?>
                        <div class="col-lg-9 col-md-8 col-sm-7 wrap-search">
                            <!-- search -->
                            <div class="search">
                                <form action="#">
                                    <input type="text" placeholder="Поиск">
                                    <button class="search-btn"><span class="sprites i-search"></span></button>
                                </form>
                            </div>
                            <!-- /search -->
                            <!-- action -->
                            <img src="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/content/action.jpg" alt="" class="img-responsive">
                            <!-- action -->
                        </div>
                    <?php }?>

                </div>
            </div>
            <!-- /header-bottom -->
        </div>
    </header>
    <!-- /header -->

    <!-- TODO: block for nav index -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <?php if ($_smarty_tpl->tpl_vars['module']->value=="MainView") {?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php } else { ?>
        <div class="container">
            <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="fn_ajax_content">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div>
    <?php }?>


    <!-- footer -->
    <footer>
        <div class="container">
            <!-- advantages -->
            <div class="advantages row mobile-row">
                <div class="col-sm-3 col-xs-6">
                    <a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#" class="advantages-block">
                        <span class="sprites i-advantages-4"></span>
                        У нас свои сервисные центры
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#" class="advantages-block">
                        <span class="sprites i-advantages-1"></span>
                        Обмениваем старую технику на новую
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#" class="advantages-block">
                        <span class="sprites i-advantages-2"></span>
                        В нашем магазине можно торговаться
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#" class="advantages-block">
                        <span class="sprites i-advantages-3"></span>
                        Выгодная программа бонусных балов
                    </a>
                </div>
            </div>
            <!-- /advantages -->
        </div>
        <!-- subscription -->
        <div class="subscription">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-5 col-sm-5">
                            <p><span class="sprites i-subscription"></span><b>Подписывайтесь</b> на акции и скидки:</p>
                        </div>
                        <div class="col-lg-5 col-sm-4"><p><input type="text" placeholder="Ваш e-mail адрес"></p></div>
                        <div class="col-lg-2 col-sm-3">
                            <button class="btn-block btn btn-black">Подписаться</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /subscription -->
        <div class="container">
            <div class="row mobile-row">
                <div class="col-md-3 col-xs-12 footer-contacts">
                    <p><a href="tel:+79788901534">+7(978) 890-15-34</a><br>
                        <span class="text-small">з 8:00 до 21:00 ежедневно</span></p>
                    <a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#director" data-toggle="modal" class="btn btn-white"><span
                                class="sprites i-message"></span>письмо директору</a>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="title-nav">АЛЬТТЕХНО</div>
                    <ul class="footer-nav">
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#">О компании</a></li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#">Новости, статьи и обзоры</a></li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="title-nav">Покупателям</div>
                    <ul class="footer-nav">
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#">Оплата и доставка</a></li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#">Гарантии и возврат</a></li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#">Бонусная программа</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="title-nav">Информация</div>
                    <ul class="footer-nav">
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#">Адреса магазинов</a></li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#">Сервисные центры</a></li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#">Гарантийное обслуживание</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="title-nav">Мы в соц. сетях</div>
                    <ul class="social-list">
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#" target="_blank"><span class="sprites i-vk"></span>Вконтакте</a>
                        </li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#" target="_blank"><span class="sprites i-fb"></span>Фейсбук</a>
                        </li>
                        <li><a href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/#" target="_blank"><span class="sprites i-ins"></span>Инстаграм</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
</div>

<!-- callback -->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="title-big">Заказ обратного звонка</div>
                <form action="#">
                    <div class="form-group"><label>Имя:</label><input type="text"></div>
                    <div class="form-group"><label>Телефон <span class="text-red">*</span>:</label><input type="tel">
                    </div>
                    <div class="form-group"><label>Сообщение:</label><textarea name="comment-1"
                                                                               id="commen-1"></textarea></div>
                    <p>
                        <button class="btn btn-big">Отправить</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /callback -->

<!-- director -->
<div class="modal fade" id="director" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="title-big">Письмо директору</div>
                <form action="#">
                    <div class="form-group"><label>Имя:</label><input type="text"></div>
                    <div class="form-group"><label>Телефон <span class="text-red">*</span>:</label><input type="tel">
                    </div>
                    <div class="form-group"><label>Сообщение:</label><textarea name="comment-1"
                                                                               id="commen-1"></textarea></div>
                    <p>
                        <button class="btn btn-big">Отправить</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /director -->

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/bootstrap.min.js"></script>

<!-- slick -->
<script type="text/javascript" src="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/slick.min.js"></script>
<script type="text/javascript">
    $('.item-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 570,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
    $('.text-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 570,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
</script>
</body>
</html><?php }} ?>
