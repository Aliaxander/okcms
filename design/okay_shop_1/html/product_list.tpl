<div class="wrap-item-block">
    <div class="item-block">
        <a href="{if $smarty.get.module=='ComparisonView'}{$product->image->filename|resize:800:600:w}{else}{$lang_link}products/{$product->url}{/if}"
           {if $smarty.get.module=='ComparisonView'}data-fancybox="group" data-caption="{$product->name|escape}"{/if}
           class="wrap-image">
            {if $product->image->filename}
                <img class="img-responsive center-block" src="{$product->image->filename|resize:200:200}"
                     alt="{$product->name|escape}"
                     title="{$product->name|escape}"/>
            {else}
                <img class="img-responsive center-block" src="design/{$settings->theme}/images/no_image.png" width="250"
                     height="250"
                     alt="{$product->name|escape}"/>
            {/if}
        </a>
        <div class="item-body">
            <div class="old-price"></div>
            <div class="price">39 999 руб.</div>
            <div class="name">
                <a class="product_name" data-product="{$product->id}"
                   href="{$lang_link}products/{$product->url}">{$product->name|escape}</a>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <a href="#" class="btn btn-small">В корзину</a>
                </div>
                <div class="col-xs-6">
                    {if $smarty.get.module != "WishlistView"}
                        {if $product->id|in_array:$wished_products}
                            <a href="#" data-id="{$product->id}" class="sprites i-heart-small selected"
                               title="{$lang->remove_favorite}" data-result-text="{$lang->add_favorite}"></a>
                        {else}
                            <a href="#" data-id="{$product->id}" class="sprites i-heart-small"
                               title="{$lang->add_favorite}" data-result-text="{$lang->remove_favorite}"></a>
                        {/if}
                    {/if}
                    {if $smarty.get.module != "ComparisonView"}
                        {if !in_array($product->id,$comparison->ids)}
                            <a class="sprites i-scales-small" href="#" data-id="{$product->id}"
                               title="{$lang->add_comparison}" data-result-text="{$lang->remove_comparison}"></a>
                        {else}
                            <a class="sprites i-scales-small selected" href="#" data-id="{$product->id}"
                               title="{$lang->remove_comparison}" data-result-text="{$lang->add_comparison}"></a>
                        {/if}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>