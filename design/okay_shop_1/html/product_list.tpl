<div class="wrap-item-block">
    <div class="item-block">
        {if $smarty.get.module == "ComparisonView"}
            <a href="#" class="fn_comparison selected sprites i-del" data-id="{$product->id}">
            </a>
        {/if}

        {if $smarty.get.module == "WishlistView"}
            <a href="#" class="fn_wishlist selected sprites i-del" data-id="{$product->id}">
            </a>
        {/if}

        <a href="{if $smarty.get.module=='ComparisonView'}{$product->image->filename|resize:800:600:w}{else}{$lang_link}/products/{$product->url}{/if}"
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
            <div class="old-price">{if !$product->variant->compare_price}{$product->variant->compare_price|convert} {$currency->sign|escape}{/if}</div>
            <div class="price">{$product->variant->price|convert} {$currency->sign|escape}</div>
            <div class="name">
                <a class="product_name" data-product="{$product->id}"
                   href="{$lang_link}products/{$product->url}">{$product->name|escape}</a>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <form class="fn_variants" action="/{$lang_link}cart">
                    <button class="btn btn-small" type="submit" data-language="add_to_cart">{$lang->add_to_cart}</button>
                        <select name="variant" class="fn_variant variant_select {if $product->variants|count == 1}hidden{/if}">
                            {foreach $product->variants as $v}
                                <option value="{$v->id}" data-price="{$v->price|convert}" data-stock="{$v->stock}"{if $v->compare_price > 0} data-cprice="{$v->compare_price|convert}"{/if}{if $v->sku} data-sku="{$v->sku}"{/if}>{if $v->name}{$v->name}{else}{$product->name|escape}{/if}</option>
                            {/foreach}
                        </select>
                    </form>
                </div>
                <div class="col-xs-6">
                    {if $smarty.get.module != "WishlistView"}
                        {if $product->id|in_array:$wished_products}
                            <a href="#" data-id="{$product->id}" class="sprites i-heart-small fn_wishlist selected"
                               title="{$lang->remove_favorite}" data-result-text="{$lang->add_favorite}"></a>
                        {else}
                            <a href="#" data-id="{$product->id}" class="sprites i-heart-small fn_wishlist"
                               title="{$lang->add_favorite}" data-result-text="{$lang->remove_favorite}"></a>
                        {/if}
                    {/if}
                    {if $smarty.get.module != "ComparisonView"}
                        {if !in_array($product->id,$comparison->ids)}
                            <a class="sprites fn_comparison i-scales-small" href="#" data-id="{$product->id}"
                               title="{$lang->add_comparison}" data-result-text="{$lang->remove_comparison}"></a>
                        {else}
                            <a class="sprites fn_comparison i-scales-small selected" href="#" data-id="{$product->id}"
                               title="{$lang->remove_comparison}" data-result-text="{$lang->add_comparison}"></a>
                        {/if}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>