{* The main page template *}
{* The canonical address of the page *}
{$canonical="" scope=parent}
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
                {* Discount products *}
                {get_discounted_products var=discounted_products limit=4}
                {if $discounted_products}
                    <div role="tabpanel" class="tab-pane active" id="actions">
                        <div class="item-slider">
                            {foreach $discounted_products as $product}
                                <div>
                                    {include "product_list.tpl"}
                                </div>
                            {/foreach}
                        </div>
                    </div>
                {/if}

            </div>
            <div role="tabpanel" class="tab-pane" id="hits">
                {* Featured products *}
                {get_featured_products var=featured_products limit=4}
                {if $featured_products}
                    <div role="tabpanel" class="tab-pane" id="hits">
                        <div class="item-slider">
                            {foreach $featured_products as $product}
                                <div>
                                    {include "product_list.tpl"}
                                </div>
                            {/foreach}
                        </div>
                    </div>
                {/if}
            </div>
            <div role="tabpanel" class="tab-pane" id="novelty">
                {* New products *}
                {get_new_products var=new_products limit=4}
                {if $new_products}
                    <div role="tabpanel" class="tab-pane" id="hits">
                        <div class="item-slider">
                            {foreach $new_products as $product}
                                <div>
                                    {include "product_list.tpl"}
                                </div>
                            {/foreach}
                        </div>
                    </div>
                {/if}

            </div>
        </div>
    </div>


    {* Page content and Last posts *}
    {get_posts var=last_posts limit=2 type_post="news"}
    {if $page->description || $last_posts}
        <div class="wrap_block clearfix">
            {if $page->description}
                <div class="no_padding{if $last_posts} col-lg-6{else} col-lg-12{/if}">
                    <div class="h2">
                        <span data-language="main_about_store">{$lang->main_about_store}</span>
                    </div>

                    <div class="block padding">
                        <h1 class="h4">{$page->name|escape}</h1>
                        <div class="main_text">{$page->description}</div>
                    </div>
                </div>
            {/if}

            {if $last_posts}
                <div class="no_padding{if $page->description} col-lg-6{else} col-lg-12{/if}">
                    <div class="h2">
                        <span data-language="main_news">{$lang->main_news}</span>
                    </div>

                    <div class="news clearfix block">
                        {foreach $last_posts as $post}
                            <div class="news_item no_padding col-sm-6">
                                <a class="news_image" href="{$lang_link}{$post->type_post}/{$post->url}">
                                    {if $post->image}
                                        <img class="news_img"
                                             src="{$post->image|resize:250:250:false:$config->resized_blog_dir}"
                                             alt="{$post->name|escape}" title="{$post->name|escape}"/>
                                    {/if}
                                </a>

                                <div class="news_content">

                                    {* News name *}
                                    <div class="h5">
                                        <a href="{$lang_link}{$post->type_post}/{$post->url}"
                                           data-post="{$post->id}">{$post->name|escape}</a>
                                    </div>

                                    {* News date *}
                                    <div class="news_date"><span>{$post->date|date}</span></div>

                                    {* News annotation *}
                                    {if $post->annotation}
                                        <div class="news_annotation">{$post->annotation}</div>
                                    {/if}

                                </div>
                            </div>
                        {/foreach}

                        <div class="look_all">
                            <a href="{$lang_link}news" data-language="main_all_news">{$lang->main_all_news}</a>
                        </div>
                    </div>
                </div>
            {/if}
        </div>
    {/if}
</div>
<div class="about">
    <div class="container">
        <div class="title title-margin-small">Интернет-магазин электротехники АЛЬТТЕХНО</div>
        <p>Сеть магазинов АЛЬТТЕХНО существует на украинско-русском рынке уже более 10 лет и за это время мы успели
            получить звание одного из лучших магазинов современной техники. Все начиналось с небольших точек продаж,
            пока фирма не решила покорить мир интернет-торговли. С тех пор любой житель Украины, а теперь и России может
            заказать оригинальную технику от мировых производителей с быстрой доставкой в свой город. <a href="#">Подробнее</a>
        </p>
    </div>
</div>