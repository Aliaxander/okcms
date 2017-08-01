<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 14:05:01
         compiled from "/home/okcms/design/okay_shop_1/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4517856559808a8dcf1843-57111947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c45ad4ec28f8de6a76fc9ebc47b2408f1f737f12' => 
    array (
      0 => '/home/okcms/design/okay_shop_1/html/index.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4517856559808a8dcf1843-57111947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'config' => 0,
    'meta_title' => 0,
    'filter_meta' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'module' => 0,
    'set_canonical' => 0,
    'settings' => 0,
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
    'user' => 0,
    'lang' => 0,
    'ln' => 0,
    'cnt' => 0,
    'currencies' => 0,
    'currency' => 0,
    'c' => 0,
    'keyword' => 0,
    'is_mobile' => 0,
    'is_tablet' => 0,
    'banner_group1' => 0,
    'bi' => 0,
    'content' => 0,
    'subscribe_error' => 0,
    'subscribe_success' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59808a8de6c091_52084415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59808a8de6c091_52084415')) {function content_59808a8de6c091_52084415($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/okcms/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html <?php if ($_smarty_tpl->tpl_vars['language']->value->href_lang) {?>lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->href_lang, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> prefix="og: http://ogp.me/ns#">
<head>
    
    <base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/">

    
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
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
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
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
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
            <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
            <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
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
        <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
">
    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?>
        <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
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

    
    <link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="icon">
    <link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="shortcut icon">

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-2.1.4.min.js"></script>

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/slick.min.js"></script>

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.matchHeight-min.js"></script>

    
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">

    
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/libs.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/responsive.css" rel="stylesheet">

    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value->g_analytics) {?>
    
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

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
<header>
    <nav class="top_nav">
        <div class="container">
            
            <div class="fn_menu_switch menu_switch md-hidden"></div>

            
            <ul class="menu mobile-hidden">
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
                        <li class="menu_item">
                            <a class="menu_link" data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </li>
                    <?php }?>
                <?php } ?>
            </ul>

            
            <ul class="informers">

                
                <li id="wishlist" class="informer">
                    <?php echo $_smarty_tpl->getSubTemplate ("wishlist_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </li>

                
                <li id="comparison" class="informer">
                    <?php echo $_smarty_tpl->getSubTemplate ("comparison_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </li>

                <li class="informer md-hidden">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                        
                        <a class="account_informer" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user"></a>
                    <?php } else { ?>
                        
                        <a class="account_informer" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/login" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
"></a>
                    <?php }?>
                </li>

                
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                    <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['ln'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ln']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ln']->key => $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['ln']->value->enabled) {?>
                            <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['cnt']->value+1, null, 0);?>
                        <?php }?>
                    <?php } ?>
                    <?php if ($_smarty_tpl->tpl_vars['cnt']->value>1) {?>
                        <li class="informer languages">
                            <div class="fn_switch lang_switch">
                                <i class="angle_icon tablet-hidden"></i>
                                <span class="informer_name tablet-hidden"><?php echo $_smarty_tpl->tpl_vars['language']->value->{('name_').($_smarty_tpl->tpl_vars['language']->value->label)};?>
</span>
                                <span class="informer_name lg-hidden"><?php echo $_smarty_tpl->tpl_vars['language']->value->label;?>
</span>
                            </div>
                            <div class="dropdown">
                                <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
                                        <a class="dropdown_item<?php if ($_smarty_tpl->tpl_vars['language']->value->id==$_smarty_tpl->tpl_vars['l']->value->id) {?> active<?php }?>"
                                           href="<?php echo $_smarty_tpl->tpl_vars['l']->value->url;?>
">
                                           <span class="tablet-hidden"><?php echo $_smarty_tpl->tpl_vars['l']->value->{('name_').($_smarty_tpl->tpl_vars['language']->value->label)};?>
</span>
                                           <span class="lg-hidden"><?php echo $_smarty_tpl->tpl_vars['l']->value->label;?>
</span>
                                        </a>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        </li>
                    <?php }?>
                <?php }?>

                
                <?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
                    <li class="informer currencies">
                        <div class="fn_switch cur_switch">
                            <i class="angle_icon tablet-hidden"></i>
                            <span class="informer_name tablet-hidden"><?php echo $_smarty_tpl->tpl_vars['currency']->value->name;?>
</span>
                            <span class="informer_name lg-hidden"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
                        </div>
                        <div class="dropdown">
                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>
                                    <a class="dropdown_item<?php if ($_smarty_tpl->tpl_vars['currency']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> active<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('currency_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl);?>
">
                                        <span class="tablet-hidden"><?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
</span>
                                        <span class="lg-hidden"><?php echo $_smarty_tpl->tpl_vars['c']->value->sign;?>
</span>
                                    </a>
                                <?php }?>
                            <?php } ?>
                        </div>
                    </li>
                <?php }?>  
            </ul>
        </div>
    </nav>

    <div class="container">

        
        <a class="logo" href="<?php if ($_GET['module']=="MainView") {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php }?>">
            <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
        </a>
        
        

       <div class="account mobile-hidden">
            <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                
                <a class="account_link" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user">
                    <span class="small-hidden" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
</span>
                    <span class="account_name small-hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            <?php } else { ?>
                
                <a class="account_link" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/login" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
">
                    <span class="small-hidden" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
</span>
                    <span class="account_name small-hidden" data-language="index_login"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
</span>
                </a>
            <?php }?>
        </div>

        
        <div class="times">
            <div class="times_inner">
                <span class="times_text" data-language="index_we_open"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_we_open;?>
</span>
                <div><span data-language="company_open_hours"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_open_hours;?>
</span></div>
            </div>
        </div>

        
        <div class="phones">
            <div class="phones_inner">
                <div><a href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
" data-language="company_phone_1" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
</a></div>
                <div><a href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
" data-language="company_phone_2" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
</a></div>
            </div>
        </div>

        
        <a class="fn_callback callback" href="#fn_callback" data-language="index_back_call"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_back_call;?>
</span></a>

    </div>

    <div class="header_bottom">
        <div class="container">
           
            <div id="cart_informer">
                <?php echo $_smarty_tpl->getSubTemplate ('cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

            
            <form id="fn_search" class="search" action="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
all-products">
                <input class="fn_search search_input" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="index_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_search;?>
"/>
                <button class="search_button" type="submit"><?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"search_icon"), 0);?>
</button>
            </form>

            <div class="categories">
                
                <div class="categories_heading fn_switch">
                    <?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"menu_icon"), 0);?>

                    <span class="small-hidden" data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div>
</header>


<div id="fn_content" class="main">
    
    <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_banner'][0][0]->get_banner_plugin(array('var'=>'banner_group1','group'=>'group1'),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['banner_group1']->value->items) {?>
            <div class="fn_banner_group1 banners container">
                <?php  $_smarty_tpl->tpl_vars['bi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_group1']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bi']->key => $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->_loop = true;
?>
                    <div>
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
</div>

<div class="to_top"></div>


<footer>
    <div class="footer_top">
        <div class="container">
            <span class="payments_text tablet-hidden" data-language="index_payments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_payments;?>
</span>
            <div class="footer_payment">
                <img src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/payments.png" alt="visa" title="visa">
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="foot col-sm-6 col-lg-4">

                    
                    <div id="subscribe_container">
                        <div class="h3">
                            <span data-language="subscribe_heading"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_heading;?>
</span>
                        </div>

                        <form class="subscribe_form fn_validate_subscribe" method="post">
                            <input type="hidden" name="subscribe" value="1"/>

                            <input class="subscribe_input" type="email" name="subscribe_email" value="" data-format="email" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
"/>

                            <button class="subscribe_button" type="submit"><span data-language="subscribe_button"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_button;?>
</span></button>

                            <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value) {?>
                                <div id="subscribe_error" class="popup">
                                    <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value=='email_exist') {?>
                                        <span data-language="subscribe_already"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_already;?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value=='empty_email') {?>
                                        <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                    <?php }?>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['subscribe_success']->value) {?>
                                <div id="fn_subscribe_sent" class="popup">
                                    <span data-language="subscribe_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_sent;?>
</span>
                                </div>
                            <?php }?>
                        </form>

                        <div class="subscribe_promotext">
                            <span data-language="subscribe_promotext"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_promotext;?>
</span>
                        </div>
                    </div>

                    
                    <div class="h3">
                        <span data-language="index_in_networks"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_in_networks;?>
</span>
                    </div>

                    <div class="foot_social">
                        <a class="fb" href="https://facebook.com/okaycms" target="_blank" title="Facebook"></a>
                        <a class="vk" href="https://vk.com/club72497645" target="_blank" title="В контакте"></a>
                        <a class="ok" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
#" target="_blank" title="Одноклассники"></a>
                        <a class="tw" href="https://twitter.com/okaycms" target="_blank" title="Twitter"></a>
                        <a class="ins" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
#" target="_blank"  title="Instagram"></a>
                    </div>

                </div>

                
                <div class="foot col-sm-6 col-lg-2">
                    <div class="h3">
                        <span data-language="index_about_store"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_about_store;?>
</span>
                    </div>

                    <div class="foot_menu">
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
                                <div class="foot_item">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>

                
                <div class="foot col-sm-6 col-lg-3">
                    <div class="h3">
                        <span data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
                    </div>

                    <div class="foot_menu">
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                                <div class="foot_item">
                                    <a  href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>

                
                <div class="foot col-sm-6 col-lg-3">
                    <div class="h3">
                        <span data-language="index_contacts"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_contacts;?>
</span>
                    </div>

                    <div class="footer_contacts">
                        <div class="foot_item">
                            <a href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
" data-language="company_phone_1" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
</a>
                        </div>
                        <div class="foot_item">
                            <a href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
" data-language="company_phone_2" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
</a>
                        </div>
                        <div class="foot_item">
                            <span data-language="company_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_email;?>
</span>
                        </div>
                    </div>
                </div>

            </div>

            
            <div class="copyright">
                <span>© <?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>
                <a href="http://okay-cms.com" target="_blank">
                    <span data-language="index_copyright"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_copyright;?>
</span>
                </a>
            </div>
        </div>
    </div>
</footer>



<?php echo $_smarty_tpl->getSubTemplate ('callback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value->yandex_metrika_counter_id) {?>
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter<?php echo $_smarty_tpl->tpl_vars['settings']->value->yandex_metrika_counter_id;?>
 = new Ya.Metrika({
                        id:<?php echo $_smarty_tpl->tpl_vars['settings']->value->yandex_metrika_counter_id;?>
,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true,
                        trackHash:true,
                        ecommerce:"dataLayer"
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <!-- /Yandex.Metrika counter -->

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value->body_custom_script) {?>
    <?php echo $_smarty_tpl->tpl_vars['settings']->value->body_custom_script;?>

<?php }?>




<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-ui.min.js"></script>


<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jquery.fancybox.min.css" rel="stylesheet">
<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.fancybox.min.js" defer></script>


<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.autocomplete-min.js" defer></script>


<?php if ($_SESSION['admin']) {?>
    <script src ="backend/design/js/admintooltip/admintooltip.js"></script>
    <link href="backend/design/js/admintooltip/styles/admin.css" rel="stylesheet">
<?php }?>


<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.validate.min.js" ></script>
<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/additional-methods.min.js"></script>


<?php if ($_GET['module']=='ProductView'||$_GET['module']=="BlogView") {?>
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/font-awesome.min.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jssocials.css" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jssocials-theme-flat.css" rel="stylesheet">
    <script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jssocials.min.js" ></script>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/okay.js"></script>

</body>
</html>
<?php }} ?>
