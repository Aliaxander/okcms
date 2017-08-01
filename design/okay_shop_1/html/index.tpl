<!DOCTYPE html>
<html {if $language->href_lang}lang="{$language->href_lang|escape}"{/if} prefix="og: http://ogp.me/ns#">
<head>
    {* Full base address *}

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/design/{$settings->theme}/css/slick.css">
    <link rel="stylesheet" href="/design/{$settings->theme}/css/bootstrap.min.css">
    <link rel="stylesheet" href="/design/{$settings->theme}/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700|Russo+One&amp;subset=cyrillic"
          rel="stylesheet">


    {* Title *}
    <title>{$meta_title|escape}{$filter_meta->title|escape}</title>

    {* Meta tags *}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    {if (!empty($meta_description) || !empty($meta_keywords) || !empty($filter_meta->description) || !empty($filter_meta->keywords)) && !$smarty.get.page}
        <meta name="description" content="{$meta_description|escape}{$filter_meta->description|escape}">
        <meta name="keywords" content="{$meta_keywords|escape}{$filter_meta->keywords|escape}">
    {/if}

    {if $module == 'ProductsView'}
        {if $set_canonical}
            <meta name="robots" content="noindex,nofollow">
        {elseif $smarty.get.page || $smarty.get.sort}
            <meta name="robots" content="noindex,follow">
        {elseif isset($smarty.get.keyword)}
            <meta name="robots" content="noindex,follow">
        {else}
            <meta name="robots" content="index,follow">
        {/if}
    {elseif $smarty.get.module == "RegisterView" || $smarty.get.module == "LoginView" || $smarty.get.module == "UserView" || $smarty.get.module == "CartView"}
        <meta name="robots" content="noindex,follow">
    {elseif $smarty.get.module == "OrderView"}
        <meta name="robots" content="noindex,nofollow">
    {else}
        <meta name="robots" content="index,follow">
    {/if}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="generator" content="OkayCMS {$config->version}">

    {if $settings->g_webmaster}
        <meta name="google-site-verification" content="{$settings->g_webmaster}">
    {/if}

    {if $settings->y_webmaster}
        <meta name='yandex-verification' content="{$settings->y_webmaster}">
    {/if}

    {* rel prev next для блога *}
    {if $smarty.get.module == "BlogView" && $total_pages_num > 1}
        {if $current_page_num == $total_pages_num}
            {if $current_page_num == 2}
                <link rel="prev" href="{url page=null}"/>
            {else}
                <link rel="prev" href="{url page=$current_page_num-1}"/>
            {/if}
        {elseif $current_page_num == 1}
            <link rel="next" href="{url page=2}"/>
        {else}
            {if $current_page_num == 2}
                <link rel="prev" href="{url page=null}"/>
            {else}
                <link rel="prev" href="{url page=$current_page_num-1}"/>
            {/if}
            <link rel="next" href="{url page=$current_page_num+1}"/>
        {/if}
    {/if}

    {* rel prev next для каталога товаров *}
    {$rel_prev_next}

    {* Product image/Post image for social networks *}
    {if $module == 'ProductView'}
        <meta property="og:url"
              content="{$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{$product->name|escape}">
        <meta property="og:description" content='{$product->annotation|strip_tags}'>
        <meta property="og:image" content="{$product->image->filename|resize:330:300}">
        <link rel="image_src" href="{$product->image->filename|resize:330:300}">
        {*twitter*}
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{$product->name|escape}">
        <meta name="twitter:description" content="{$product->annotation|strip_tags}">
        <meta name="twitter:image" content="{$product->image->filename|resize:330:300}">
    {elseif $module == 'BlogView'}
        <meta property="og:url"
              content="{$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{$post->name|escape}">
        {if $post->image}
            <meta property="og:image" content="{$post->image|resize:400:300:false:$config->resized_blog_dir}">
            <link rel="image_src" href="{$post->image|resize:400:300:false:$config->resized_blog_dir}">
        {else}
            <meta property="og:image"
                  content="{$config->root_url}/design/{$settings->theme}/images/{$settings->site_logo}">
            <meta name="twitter:image"
                  content="{$config->root_url}/design/{$settings->theme}/images/{$settings->site_logo}">
        {/if}
        <meta property="og:description" content='{$post->annotation|strip_tags}'>
        {*twitter*}
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{$post->name|escape}">
        <meta name="twitter:description" content="{$post->annotation|strip_tags}">
        <meta name="twitter:image" content="{$post->image|resize:400:300:false:$config->resized_blog_dir}">
    {else}
        <meta property="og:title" content="{$settings->site_name|escape}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{$config->root_url}">
        <meta property="og:image" content="{$config->root_url}/design/{$settings->theme}/images/{$settings->site_logo}">
        <meta property="og:site_name" content="{$settings->site_name|escape}">
        <meta property="og:description" content="{$meta_description|escape}">
        <link rel="image_src" href="{$config->root_url}/design/{$settings->theme}/images/{$settings->site_logo}">
        {*twitter*}
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{$settings->site_name|escape}">
        <meta name="twitter:description" content="{$meta_description|escape}">
        <meta name="twitter:image"
              content="{$config->root_url}/design/{$settings->theme}/images/{$settings->site_logo}">
    {/if}

    {* The canonical address of the page *}
    {if isset($canonical)}
        <link rel="canonical"
              href="{$config->root_url}{if $lang_link}/{str_replace('/', '', $lang_link)}{/if}{$canonical}">
    {elseif $smarty.get.sort}
        <link rel="canonical" href="{$sort_canonical}">
    {/if}

    {* Language attribute *}
    {foreach $languages as $l}
        {if $l->enabled}
            <link rel="alternate" hreflang="{$l->href_lang}" href="{$config->root_url}/{$l->url}">
        {/if}
    {/foreach}

    {* Favicon *}
    <link href="/design/{$settings->theme}/images/favicon.png" type="image/x-icon" rel="icon">
    <link href="/design/{$settings->theme}/images/favicon.png" type="image/x-icon" rel="shortcut icon">

    {* JQuery *}
    <script src="/design/{$settings->theme}/js/jquery-2.1.4.min.js"></script>

    {* Slick slider *}
    <script src="/design/{$settings->theme}/js/slick.min.js"></script>

    {* Match height *}
    <script src="/design/{$settings->theme}/js/jquery.matchHeight-min.js"></script>

    {* Google Analytics *}
    {if $settings->g_analytics}
    {literal}
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

            ga('create', {/literal}'{$settings->g_analytics}'{literal}, 'auto');
            ga('send', 'pageview');
        </script>
    {/literal}
    {/if}

    {if $settings->head_custom_script}
        {$settings->head_custom_script}
    {/if}

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
                        {foreach $pages as $p}
                            {if $p->menu_id == 1}
                                <li>
                                    <a data-page="{$p->id}"
                                       href="{$lang_link}{$p->url}">{$p->name|escape}</a>
                                </li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>
        <!-- /header-top -->
        <div class="container">
            <div class="row">
                <div class="col-xs-8-m col-xs-4 col-sm-4 col-lg-3 col-md-3">
                    <div class="logo"><a href="/design/{$settings->theme}//"><img
                                    src="/design/{$settings->theme}/img/logo.svg" alt="" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-xs-4-m col-xs-3 col-sm-3 col-lg-3 col-md-2 pull-right">
                    <!-- info-nav -->
                    <ul class="info-nav">
                        <li><a href="/design/{$settings->theme}/favorites.html" class="sprites i-heart"></a></li>
                        <li><a href="/design/{$settings->theme}/collation.html" class="sprites i-scales"></a></li>
                        <li><a href="/design/{$settings->theme}/basket.html" class="sprites i-basket"></a></li>
                    </ul>
                    <!-- /info-nav -->
                </div>
                <div class="col-xs-5 col-sm-5 col-lg-6 col-md-7 phone">
                    <!-- phone -->
                    <a href="tel:+79788901534">+7 (978) 890-15-34</a>
                    <a href="tel:+79788901534">+7 (978) 890-15-34</a>
                    <a href="/design/{$settings->theme}/#callback" data-toggle="modal" class="link">Перезвонить вам?</a>
                    <!-- /phone -->
                </div>
            </div>
            <!-- header-bottom -->
            <div class="header-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <!-- catalogue -->
                        <div class="catalogue   {if $module == "MainView"}catalogue-home{/if} dropdown">
                            <a href="/design/{$settings->theme}/#" data-toggle="dropdown" aria-haspopup="true"
                               role="button" aria-expanded="false">Каталог
                                товаров<span class="sprites i-angle"></span></a>
                            {include file="categories.tpl"}
                        </div>
                        <div class="shadow"></div>
                        <!-- /catalogue -->
                    </div>
                    {if $module == "MainView"}
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
                            <img src="/design/{$settings->theme}/img/content/action.jpg" alt="" class="img-responsive">
                            <!-- action -->
                        </div>
                    {/if}

                </div>
            </div>
            <!-- /header-bottom -->
        </div>
    </header>
    <!-- /header -->

    <!-- TODO: block for nav index -->
    {*{if $is_mobile === false && $is_tablet === false}*}
    {*{get_banner var=banner_group1 group='group1'}*}
    {*{if $banner_group1->items}*}
    {*<div class="fn_banner_group1 banners container">*}
    {*{foreach $banner_group1->items as $bi}*}
    {*<div>*}
    {*{if $bi->url}*}
    {*<a href="{$bi->url}" target="_blank">*}
    {*{/if}*}
    {*{if $bi->image}*}
    {*<img src="{$config->banners_images_dir}{$bi->image}" alt="{$bi->alt}"*}
    {*title="{$bi->title}"/>*}
    {*{/if}*}
    {*{if $bi->url}*}
    {*</a>*}
    {*{/if}*}
    {*</div>*}
    {*{/foreach}*}
    {*</div>*}
    {*{/if}*}
    {*{/if}*}

    {if $module == "MainView"}
        {$content}
    {else}
        <div class="container">
            {include file='breadcrumb.tpl'}
            <div class="fn_ajax_content">
                {$content}
            </div>
        </div>
    {/if}


    <!-- footer -->
    <footer>
        <div class="container">
            <!-- advantages -->
            <div class="advantages row mobile-row">
                <div class="col-sm-3 col-xs-6">
                    <a href="/design/{$settings->theme}/#" class="advantages-block">
                        <span class="sprites i-advantages-4"></span>
                        У нас свои сервисные центры
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href="/design/{$settings->theme}/#" class="advantages-block">
                        <span class="sprites i-advantages-1"></span>
                        Обмениваем старую технику на новую
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href="/design/{$settings->theme}/#" class="advantages-block">
                        <span class="sprites i-advantages-2"></span>
                        В нашем магазине можно торговаться
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href="/design/{$settings->theme}/#" class="advantages-block">
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
                    <a href="/design/{$settings->theme}/#director" data-toggle="modal" class="btn btn-white"><span
                                class="sprites i-message"></span>письмо директору</a>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="title-nav">АЛЬТТЕХНО</div>
                    <ul class="footer-nav">
                        <li><a href="/design/{$settings->theme}/#">О компании</a></li>
                        <li><a href="/design/{$settings->theme}/#">Новости, статьи и обзоры</a></li>
                        <li><a href="/design/{$settings->theme}/#">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="title-nav">Покупателям</div>
                    <ul class="footer-nav">
                        <li><a href="/design/{$settings->theme}/#">Оплата и доставка</a></li>
                        <li><a href="/design/{$settings->theme}/#">Гарантии и возврат</a></li>
                        <li><a href="/design/{$settings->theme}/#">Бонусная программа</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="title-nav">Информация</div>
                    <ul class="footer-nav">
                        <li><a href="/design/{$settings->theme}/#">Адреса магазинов</a></li>
                        <li><a href="/design/{$settings->theme}/#">Сервисные центры</a></li>
                        <li><a href="/design/{$settings->theme}/#">Гарантийное обслуживание</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="title-nav">Мы в соц. сетях</div>
                    <ul class="social-list">
                        <li><a href="/design/{$settings->theme}/#" target="_blank"><span class="sprites i-vk"></span>Вконтакте</a>
                        </li>
                        <li><a href="/design/{$settings->theme}/#" target="_blank"><span class="sprites i-fb"></span>Фейсбук</a>
                        </li>
                        <li><a href="/design/{$settings->theme}/#" target="_blank"><span class="sprites i-ins"></span>Инстаграм</a>
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
<script type="text/javascript" src="/design/{$settings->theme}/js/bootstrap.min.js"></script>

<!-- slick -->
<script type="text/javascript" src="/design/{$settings->theme}/js/slick.min.js"></script>
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
</html>