{* Product page *}

{* The canonical address of the page *}
{$canonical="/products/{$product->url}" scope=parent}

<!-- product-block -->
<div class="product-block" itemscope itemtype="http://schema.org/Product">
    <div class="row">
        <div class="col-sm-6">
            <div class="wrap-slider">
                <div class="marker marker-hit">Хит продаж</div>
                <div class="slider-for">
                    {if $product->image}
                        <div><a href="{$product->image->filename|resize:800:600:w}"
                                data-caption="{$product->name|escape}" data-fancybox="gallery"><img
                                        src="{$product->image->filename|resize:300:300}" alt="{$product->name|escape}"
                                        title="{$product->name|escape}" class="center-block img-responsive"></a></div>
                    {else}
                        <div><a href="{$product->image->filename|resize:800:600:w}"
                                data-caption="{$product->name|escape}" data-fancybox="gallery"><img
                                        src="design/{$settings->theme}/images/no_image.png" width="340" height="340"
                                        alt="{$product->name|escape}" title="{$product->name|escape}"
                                        class="center-block img-responsive"></a></div>
                    {/if}
                </div>
                {if $product->images|count > 1}
                    <div class="slider-nav">
                        {foreach $product->images|cut as $i=>$image}
                            <div><img src="{$image->filename|resize:75:75}" alt="{$product->name|escape}"></div>
                        {/foreach}
                    </div>
                {/if}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="code" data-language="product_sku">{$lang->product_sku}: {$product->variant->sku|escape}</div>
            <h1 class="title" data-product="{$product->id}"
                itemprop="name">{$product->name|escape} {if $product->variants|count == 1 && !empty($product->variant->name)}({$product->variant->name|escape}){/if}</h1>
            <div class="progress rating">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                     style="width: 80%;"></div>
            </div>
            <a href="#">3 отзыва</a>
            <div class="wrap-price">
                <del>{$product->variant->compare_price|convert} {$currency->sign|escape}</del>
                <div class="price">{$product->variant->price|convert} {$currency->sign|escape}</div>
                +210 бонусов
                <a href="#price-modal" data-toggle="modal" class="link">Предложить свою цену</a><a href="#"
                                                                                                   data-toggle="tooltip"
                                                                                                   data-placement="top"
                                                                                                   title="Если вы считаете, что наша цена не справедлива и вы можете аргументировать это, тогда предложите свою цену и мы рассмотрим ваше предложение."
                                                                                                   class="sprites i-question"></a>
            </div>
            <div class="wrap-buttons">
                <input type="number" value="1" min="1" name="amount" max="{$product->variant->stock}">
                <a href="#" class="btn btn-buy-big" data-language="product_add_cart"><span
                            class="sprites i-basket"></span>{$lang->product_add_cart}</a>
                <a href="#one-click" data-toggle="modal" class="btn btn-buy-white">Купить в 1 клик</a>
                <a href="favorites.html" class="sprites i-heart active"></a>
                <a href="collation.html" class="sprites i-scales active"></a>
            </div>
            <div class="row product-info mobile-row">
                <div class="col-md-6 col-sm-12 col-xs-6">
                    <p>Доставка</p>
                    <p>Бесплатно — от 3 000 руб.</p>
                    <p>Доставка курьером — от 100 руб.</p>
                    <p>Самовывоз — бесплатно <a href="shop.html">Адреса магазинов</a></p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-6">
                    <p>Оплата</p>
                    <p>Оплата производится после доставки и проверки товара.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-tabs -->
<div role="tabpanel" class="product-tabs">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab"
                                                  data-toggle="tab">ОПИСАНИЕ</a></li>
        <li role="presentation"><a href="#characteristics" aria-controls="characteristics" role="tab" data-toggle="tab">ХАРАКТЕРИСТИКИ</a>
        </li>
        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">ОТЗЫВЫ (2)</a>
        </li>
    </ul>
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active fade in" id="description">
            <div class="row">
                <div class="col-md-12">
                    {if $product->description}
                        <p itemprop="description">
                            {$product->description}
                        </p>
                    {/if}
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="characteristics">
            <div class="row">
                <div class="col-md-12">
                    {if $product->features}
                        <div class="title-small">Основные характеристики</div>
                        <ul class="characteristics-list">
                            {foreach $product->features as $f}
                                <li>
                                    <b>{$f->name}</b>
                                    <span>{$f->value}</span>
                                </li>
                            {/foreach}
                        </ul>
                        <p><a href="#characteristics" aria-controls="characteristics" role="tab" data-toggle="tab">Полные
                                характеристики</a></p>
                        </p>
                    {/if}
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="reviews">
            <div class="row">
                <div class="col-sm-6">
                    <div class="title">Отзывы покупателей</div>
                    <div class="review-block">
                        <p><b>Валера</b> <span class="post-date">29.06.2017</span></p>
                        <p>Сервис позволяет автоматически отправлять деньги любому количеству клиентов — на электронные кошельки, телефоны, банковские счета и карты.</p>
                        <p>Решение подходит для МФО, маркетинговых агентств, онлайн-игр и похожих сервисов.</p>
                    </div>
                    <div class="review-block">
                        <p><b>Валера</b> <span class="post-date">29.06.2017</span></p>
                        <p>Сервис позволяет автоматически отправлять деньги любому количеству клиентов — на электронные кошельки, телефоны, банковские счета и карты.</p>
                        <p>Решение подходит для МФО, маркетинговых агентств, онлайн-игр и похожих сервисов.</p>
                    </div>
                    <div class="collapse" id="all-review">
                        <div class="review-block">
                            <p><b>Валера</b> <span class="post-date">29.06.2017</span></p>
                            <p>Сервис позволяет автоматически отправлять деньги любому количеству клиентов — на электронные кошельки, телефоны, банковские счета и карты.</p>
                            <p>Решение подходит для МФО, маркетинговых агентств, онлайн-игр и похожих сервисов.</p>
                        </div>
                        <div class="review-block">
                            <p><b>Валера</b> <span class="post-date">29.06.2017</span></p>
                            <p>Сервис позволяет автоматически отправлять деньги любому количеству клиентов — на электронные кошельки, телефоны, банковские счета и карты.</p>
                            <p>Решение подходит для МФО, маркетинговых агентств, онлайн-игр и похожих сервисов.</p>
                        </div>
                    </div>
                    <p><a href="#all-review" data-toggle="collapse"  aria-expanded="true" aria-controls="all-review">Все отзывы</a></p>
                </div>
                <div class="col-sm-6">
                    <!-- review-form -->
                    <div class="review-form">
                        <form action="#">
                            <div class="row mobile-row">
                                <div class="col-md-6 col-sm-12 col-xs-6">
                                    <div class="form-group"><label>Имя <span class="text-red">*</span>:</label><input type="text"></div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-6">
                                    <div class="form-group"><label>E-mail:</label><input type="text"></div>
                                </div>
                            </div>
                            <div class="form-group"><label>Отзыв <span class="text-red">*</span>:</label><textarea name="comment" id="comment"></textarea></div>
                            <p class="text-right"><button class="btn">Написать</button></p>
                        </form>
                    </div>
                    <!-- /review-form -->
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="characteristics"></div>
        <div role="tabpanel" class="tab-pane fade" id="reviews"></div>
        <div role="tabpanel" class="tab-pane fade" id="services"></div>
        <div role="tabpanel" class="tab-pane fade" id="delivery"></div>
    </div>
</div>
</div>


{* Related products *}
{if $related_products}
    <div class="h2">
        <span data-language="product_recommended_products">{$lang->product_recommended_products}</span>
    </div>
    <div class="related clearfix">
        {foreach $related_products as $p}
            <div class="products_item no_padding col-sm-6 col-xl-3">
                {include "product_list.tpl" product = $p}
            </div>
        {/foreach}
    </div>
{/if}

{if $related_posts}
    <div class="h2">
        <span data-language="product_related_post">{$lang->product_related_post}</span>
    </div>
    <div class="blog clearfix">
        {foreach $related_posts as $r_p}
            <div class="blog_item no_padding col-sm-6 col-lg-4 col-xl-3">

                {* The post image *}
                <a class="blog_image" href="{$lang_link}{$r_p->type_post}/{$r_p->url}">
                    {if $r_p->image}
                        <img class="blog_img" src="{$r_p->image|resize:360:360:false:$config->resized_blog_dir}"/>
                    {/if}
                </a>

                <div class="blog_content">
                    {* The post name *}
                    <div class="h5">
                        <a href="{$lang_link}{$r_p->type_post}/{$r_p->url}"
                           data-post="{$r_p->id}">{$r_p->name|escape}</a>
                    </div>

                    {* The post date *}
                    <div class="blog_date">
                        <span>{$r_p->date|date}</span>
                    </div>

                    {* The short description of the post *}
                    <div class="blog_annotation">{$r_p->annotation}</div>
                </div>
            </div>
        {/foreach}
    </div>
{/if}
<!-- one-click -->
<div class="modal fade" id="one-click" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="title-big">Купить в 1 клик</div>
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
<!-- /one-click -->
<!-- price -->
<div class="modal fade" id="price-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="title-big">Купить по вашей цене</div>
                <div class="product-block-modal">
                    <p class="text-info">Если вы считаете, что наша цена не справедлива и вы можете аргументировать это,
                        тогда предложите свою цену и мы рассмотрим ваше предложение.</p>
                    <div class="clearfix">
                        <div class="product-image"><img src="{$product->image->filename|resize:300:300}" alt=""
                                                        class="img-responsive"></div>
                        <div class="product-text">
                            <p>Ноутбук 14,1" Prestigio SmartBook 141A03 Atom/2Gb/32SSD/Win10</p>
                            <div class="product-price">2000 руб.</div>
                        </div>
                    </div>
                </div>
                <form action="#">
                    <div class="row form-row mobile-row">
                        <div class="col-xs-5">
                            <div class="form-group"><label>Ваша цена <span class="text-red">*</span>:</label><input
                                        type="text" class="input-small">Руб.
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="form-group"><label>Номер вашего телефона <span
                                            class="text-red">*</span>:</label><input type="tel"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Ваши комментарии: </label><textarea name="comment-2"
                                                                                       id="commen-2"></textarea></div>
                    <p>
                        <button class="btn btn-big">Отправить</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /price -->
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<!-- range -->

<script type="text/javascript">
    jQuery(function () {
        jQuery("#slider-range").slider({
            min: 3000,
            max: 300000,
            values: [3000, 300000],
            step: 1,
            range: true,
            slide: function (event, ui) {

                $('#min').val(ui.values[0]);
                $('#max').val(ui.values[1]);

            },
            stop: function (event, ui) {

                $('#min').val(ui.values[0]);
                $('#max').val(ui.values[1]);

            },
            change: function (event, ui) {

                $('#min').val(ui.values[0]);
                $('#max').val(ui.values[1]);

            }
        });
        $('#min').val(3000);
        $('#max').val(300000);
    });
</script>

<!-- slick -->
<script type="text/javascript">
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true
    });
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

<!-- formstyler -->
<script type="text/javascript" src="/design/{$settings->theme}/js/jquery.formstyler.js"></script>
<script type="text/javascript">
    (function ($) {
        $(function () {
            $('input').styler();
        });
    })(jQuery);
</script>


