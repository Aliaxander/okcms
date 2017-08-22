{* Product page *}

{* The canonical address of the page *}
{$canonical="/products/{$product->url}" scope=parent}

<div class="content-small">
    <!-- product-block -->
    <div class="product-block" itemscope itemtype="http://schema.org/Product">
        <div class="row">
            <div class="col-sm-6">
                <div class="wrap-slider">
                    {if $product->special}
                        {if $product->special == 'hit.png'}
                            <div class="marker marker-hit">Хит продаж</div>
                        {elseif $product->special == 'akciya.png'}
                            <div class="marker marker-action">Акция</div>
                        {elseif $product->special == 'garant.png'}
                            <div class="marker marker-hit"></div>
                        {elseif $product->special == 'new.png'}
                            <div class="marker marker-new">Новинка</div>
                        {/if}
                    {/if}
                    <div class="slider-for">
                        {if $product->image}
                            <div><a href="{$product->image->filename|resize:800:600:w}"
                                    data-caption="{$product->name|escape}" data-fancybox="gallery"><img
                                            src="{$product->image->filename|resize:300:300}"
                                            alt="{$product->name|escape}"
                                            title="{$product->name|escape}" class="center-block img-responsive fn_img"></a>
                            </div>
                            {foreach $product->images|cut as $i=>$image}
                                <div><a href="{$image->filename|resize:800:600:w}"
                                        data-caption="{$product->name|escape}" data-fancybox="gallery"><img
                                                src="{$image->filename|resize:300:300}" alt="{$product->name|escape}"
                                                title="{$product->name|escape}"
                                                class="center-block img-responsive fn_img"></a>
                                </div>
                            {/foreach}
                        {else}
                            <div><a href="{$product->image->filename|resize:800:600:w}"
                                    data-caption="{$product->name|escape}" data-fancybox="gallery"><img
                                            src="design/{$settings->theme}/images/no_image.png" width="340" height="340"
                                            alt="{$product->name|escape}" title="{$product->name|escape}"
                                            class="center-block img-responsive fn_img"></a></div>
                        {/if}
                    </div>
                    {if $product->images|count > 1}
                        <div class="slider-nav">
                            <div><img src="{$product->image->filename|resize:75:75}" alt="{$product->name|escape}">
                            </div>
                            {foreach $product->images|cut as $i=>$image}
                                <div><img src="{$image->filename|resize:75:75}" alt="{$product->name|escape}"></div>
                            {/foreach}
                        </div>
                    {/if}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="code" data-language="product_sku">{$lang->product_sku}
                    : {$product->variant->sku|escape}</div>
                <h1 class="title" data-product="{$product->id}"
                    itemprop="name">{$product->name|escape} {if $product->variants|count == 1 && !empty($product->variant->name)}({$product->variant->name|escape}){/if}</h1>

                {* Product Rating *}
                <div id="product_{$product->id}"
                     class="product_rating"{if $product->rating > 0} itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"{/if}>

                                    <span class="rating_starOff">
                                        <span class="rating_starOn"
                                              style="width:{$product->rating*90/5|string_format:'%.0f'}px;"></span>
                                    </span>
                    <span class="rating_text"></span>

                    {*Вывод количества голосов данного товара, скрыт ради микроразметки*}
                    {if $product->rating > 0}
                        <span class="hidden" itemprop="reviewCount">{$product->votes|string_format:"%.0f"}</span>
                        <span class="hidden" itemprop="ratingValue">({$product->rating|string_format:"%.1f"})</span>
                        {*Вывод лучшей оценки товара для микроразметки*}
                        <span class="hidden" itemprop="bestRating" style="display:none;">5</span>
                    {else}
                        <span class="hidden">({$product->rating|string_format:"%.1f"})</span>
                    {/if}
                </div>
                <a href="#reviews" class="report" aria-controls="reviews" role="tab" data-toggle="tab">{$comments|count}
                    отзыва</a>
                <div class="wrap-price">
                    <del {if !$product->variant->compare_price} class="hidden"{/if}>{$product->variant->compare_price|convert} {$currency->sign|escape}</del>
                    <div class="price">{$product->variant->price|convert} {$currency->sign|escape}</div>
                    {*+210 бонусов*}
                    <a href="#price-modal" data-toggle="modal" class="link">Предложить свою цену</a><a href="#"
                                                                                                       data-toggle="tooltip"
                                                                                                       data-placement="top"
                                                                                                       title="Если вы считаете, что наша цена не справедлива и вы можете аргументировать это, тогда предложите свою цену и мы рассмотрим ваше предложение."
                                                                                                       class="sprites i-question"></a>
                </div>
                <form action="/{$lang_link}cart">
                    <div class="wrap-buttons">
                        <div class="jq-number amount fn_product_amount">
                            <span class="jq-number__spin minus"></span>
                            <div class="jq-number__field">
                                <input class="input_amount" type="text" name="amount" value="1"
                                       data-max="{$product->variant->stock}">
                            </div>
                            <span class="jq-number__spin plus"></span>
                        </div>
                        <select name="variant"
                                class="fn_variant variant_select{if $product->variants|count < 2} hidden{/if}">
                            {foreach $product->variants as $v}
                                <option value="{$v->id}" data-price="{$v->price|convert}"
                                        data-stock="{$v->stock}"{if $v->compare_price > 0} data-cprice="{$v->compare_price|convert}"{/if}{if $v->sku} data-sku="{$v->sku}"{/if}>{if $v->name}{$v->name}{else}{$product->name|escape}{/if}</option>
                            {/foreach}
                        </select>
                        <button type="submit" class="fn_is_stock  btn btn-buy-big"
                                data-language="product_add_cart"><span
                                    class="sprites i-basket"></span>{$lang->product_add_cart}</button>
                        <a href="#one-click" data-toggle="modal" class="btn btn-buy-white">Купить в 1 клик</a>
                        <a href="#" class="sprites i-heart active fn_wishlist"></a>
                        <a href="#" class="sprites i-scales active fn_comparison"></a>
                    </div>
                    <div class="row product-info mobile-row">
                        <div class="col-md-6 col-sm-12 col-xs-6">
                            <p>Доставка</p>
                            <p>Бесплатно — от 3 000 руб.</p>
                            <p>Доставка курьером — от 100 руб.</p>
                            <p>Самовывоз — бесплатно</p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-6">
                            <p>Оплата</p>
                            <p>Оплата производится после доставки и проверки товара.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- product-tabs -->
    <div role="tabpanel" class="product-tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab"
                                                      data-toggle="tab">ОПИСАНИЕ</a></li>
            <li role="presentation"><a href="#characteristics" aria-controls="characteristics" role="tab"
                                       data-toggle="tab">ХАРАКТЕРИСТИКИ</a>
            </li>
            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">ОТЗЫВЫ
                    ({$comments|count})</a>
            </li>
        </ul>
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active fade in" id="description">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-small">{$product->name|escape}</div>
                        {if $product->description}
                            <p itemprop="description">
                                {$product->description}
                            </p>
                        {/if}
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
                            {*<p><a href="#characteristics" aria-controls="characteristics" role="tab" data-toggle="tab">Полные*}
                            {*характеристики</a></p>*}
                            {*</p>*}
                        {/if}
                    </div>

                    <div class="col-sm-6">
                        <div class="title">Отзывы покупателей</div>
                        {* Form error messages *}
                        {if $error}
                            <div class="message_error">
                                {if $error=='captcha'}
                                    <span data-language="form_error_captcha">{$lang->form_error_captcha}</span>
                                {elseif $error=='empty_name'}
                                    <span data-language="form_enter_name">{$lang->form_enter_name}</span>
                                {elseif $error=='empty_comment'}
                                    <span data-language="form_enter_comment">{$lang->form_enter_comment}</span>
                                {elseif $error=='empty_email'}
                                    <span data-language="form_enter_email">{$lang->form_enter_email}</span>
                                {/if}
                            </div>
                        {/if}
                        <!-- review-form -->
                        <div class="review-form">
                            <form method="post">
                                <div class="row mobile-row">
                                    <div class="col-md-6 col-sm-12 col-xs-6">
                                        <div class="form-group"><label>Имя <span
                                                        class="text-red">*</span>:</label><input
                                                    type="text" name="name" value="{$comment_name|escape}"
                                                    placeholder="{$lang->form_name}"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-6">
                                        <div class="form-group"><label>E-mail:</label><input type="text" name="email"
                                                                                             value="{$comment_email|escape}"
                                                                                             data-language="form_email"
                                                                                             name="email"
                                                                                             placeholder="{$lang->form_email}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><label>Отзыв <span class="text-red">*</span>:</label><textarea
                                            name="text"
                                            placeholder="{$lang->form_enter_comment}">{$comment_text}</textarea>
                                </div>
                                {if $settings->captcha_product}
                                    {get_captcha var="captcha_product"}
                                    <div class="captcha">
                                        <div class="form-group"><label>{$captcha_product[0]|escape} + ?
                                                = {$captcha_product[1]|escape} <span
                                                        class="text-red">*</span>:</label><input type="text"
                                                                                                 name="captcha_code"
                                                                                                 value=""
                                                                                                 placeholder="{$lang->form_enter_captcha}*"/>
                                        </div>
                                    </div>
                                {/if}

                                <p class="text-right">
                                    <input class="btn" type="submit" name="comment" data-language="form_send"
                                           value="{$lang->form_send}"/>
                                </p>
                            </form>
                        </div>
                        <!-- /review-form -->
                    </div>
                    {if $comments}
                        {function name=comments_tree level=0}
                            <div class="col-sm-6">
                                {foreach $comments as $comment}
                                    <div class="review-block">
                                        <p><b>{$comment->name|escape}</b> <span class="post-date">{$comment->date|date}
                                                , {$comment->date|time}</span></p>
                                        <p>{$comment->text|escape|nl2br}</p>
                                    </div>
                                {/foreach}
                            </div>
                        {/function}
                        {comments_tree comments=$comments}
                    {else}
                        <div class="no_comments col-sm-6">
                            <span data-language="product_no_comments">{$lang->product_no_comments}</span>
                        </div>
                    {/if}

                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="characteristics">
                <div class="row">
                    <div class="col-md-6">
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
                            {*<p><a href="#characteristics" aria-controls="characteristics" role="tab" data-toggle="tab">Полные*}
                            {*характеристики</a></p>*}
                            {*</p>*}
                        {/if}
                    </div>
                </div>
            </div>


            <div role="tabpanel" class="tab-pane fade" id="reviews">
                <div class="row">
                    {if $comments}
                        {function name=comments_tree level=0}
                            <div class="col-sm-6">
                                <div class="title">Отзывы покупателей</div>
                                {foreach $comments as $comment}
                                    <div class="review-block">
                                        <p><b>{$comment->name|escape}</b> <span class="post-date">{$comment->date|date}
                                                , {$comment->date|time}</span></p>
                                        <p>{$comment->text|escape|nl2br}</p>
                                    </div>
                                {/foreach}
                            </div>
                        {/function}
                        {comments_tree comments=$comments}
                    {else}
                        <div class="no_comments col-sm-6">
                            <span data-language="product_no_comments">{$lang->product_no_comments}</span>
                        </div>
                    {/if}
                    <div class="col-sm-6">
                        {* Form error messages *}
                        {if $error}
                            <div class="message_error">
                                {if $error=='captcha'}
                                    <span data-language="form_error_captcha">{$lang->form_error_captcha}</span>
                                {elseif $error=='empty_name'}
                                    <span data-language="form_enter_name">{$lang->form_enter_name}</span>
                                {elseif $error=='empty_comment'}
                                    <span data-language="form_enter_comment">{$lang->form_enter_comment}</span>
                                {elseif $error=='empty_email'}
                                    <span data-language="form_enter_email">{$lang->form_enter_email}</span>
                                {/if}
                            </div>
                        {/if}
                        <!-- review-form -->
                        <div class="review-form">
                            <form method="post">
                                <div class="row mobile-row">
                                    <div class="col-md-6 col-sm-12 col-xs-6">
                                        <div class="form-group"><label>Имя <span
                                                        class="text-red">*</span>:</label><input
                                                    type="text" name="name" value="{$comment_name|escape}"
                                                    placeholder="{$lang->form_name}"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-6">
                                        <div class="form-group"><label>E-mail:</label><input type="text" name="email"
                                                                                             value="{$comment_email|escape}"
                                                                                             data-language="form_email"
                                                                                             name="email"
                                                                                             placeholder="{$lang->form_email}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><label>Отзыв <span class="text-red">*</span>:</label><textarea
                                            name="text"
                                            placeholder="{$lang->form_enter_comment}">{$comment_text}</textarea>
                                </div>
                                {if $settings->captcha_product}
                                    {get_captcha var="captcha_product"}
                                    <div class="captcha">
                                        <div class="form-group"><label>{$captcha_product[0]|escape} + ?
                                                = {$captcha_product[1]|escape} <span
                                                        class="text-red">*</span>:</label><input type="text"
                                                                                                 name="captcha_code"
                                                                                                 value=""
                                                                                                 placeholder="{$lang->form_enter_captcha}*"/>
                                        </div>
                                    </div>
                                {/if}

                                <p class="text-right">
                                    <input class="btn" type="submit" name="comment" data-language="form_send"
                                           value="{$lang->form_send}"/>
                                </p>
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

    {*<div class="container">*}
        {*{get_browsed_products var=browsed_products limit=4}*}
        {*{if $browsed_products}*}
            {*<div class="title title-styling">Просмотренные вами ранее</div>*}
            {*<div class="row mobile-row">*}
                {*{foreach $browsed_products as $browsed_product}*}
                    {*<div class="col-md-3 col-xs-6">*}
                        {*<!-- item-block -->*}
                        {*<div class="wrap-item-block wrap-item-last">*}
                            {*<div class="item-block">*}
                                {*<a href="{$lang_link}products/{$browsed_product->url}" class="wrap-image">*}
                                    {*{if $browsed_product->image->filename}*}
                                        {*<img src="{$browsed_product->image->filename|resize:200:200}"*}
                                             {*alt="{$browsed_product->name|escape}" class="img-responsive center-block">*}
                                    {*{else}*}
                                        {*<img src="design/{$settings->theme}/images/no_image.png" alt=""*}
                                             {*class="img-responsive center-block">*}
                                    {*{/if}*}
                                {*</a>*}
                                {*<div class="item-body">*}
                                    {*<div class="old-price"></div>*}
                                    {*<div class="price">39 999 руб.</div>*}
                                    {*<div class="name"><a href="item.html">Apple A1502 MacBook Pro Retina (MF839UA/A)</a>*}
                                    {*</div>*}
                                    {*<div class="row">*}
                                        {*<div class="col-xs-6 col-md-7 col-lg-6">*}
                                            {*<a href="#" class="btn btn-small">В корзину</a>*}
                                        {*</div>*}
                                        {*<div class="col-xs-6 col-md-5 col-lg-6">*}
                                            {*<a href="#" class="sprites i-heart-small"></a>*}
                                            {*<a href="#" class="sprites i-scales-small"></a>*}
                                        {*</div>*}
                                    {*</div>*}
                                {*</div>*}
                            {*</div>*}
                        {*</div>*}
                        {*<!-- /item-block -->*}
                    {*</div>*}
                {*{/foreach}*}
            {*</div>*}
        {*{/if}*}
    {*</div>*}

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
</div>
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
                            <p>{$product->name|escape}</p>
                            <div class="product-price">{$product->variant->price|convert} {$currency->sign|escape}</div>
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
