<tr>
    <td><a href="{$lang_link}/products/{$product->url}" class="article">{if $product->variant->sku}{$product->variant->sku|escape}{else}-----{/if}<span class="hover-image"><img src="{$product->image->filename|resize:100:100}" alt=""
                                                                                class="img-responsive"></span></a></td>
    <td><a href="{$lang_link}/products/{$product->url}">{$product->name|escape}</a></td>
    <td>
        <div class="price">{$product->variant->price|convert} {$currency->sign|escape}</div>
    </td>
    <td><div class="jq-number amount fn_product_amount">
            <span class="jq-number__spin minus"></span>
            <div class="jq-number__field">
                <input class="input_amount" type="text" name="amount" value="1"
                       data-max="{$product->variant->stock}">
            </div>
            <span class="jq-number__spin plus"></span>
        </div></td>
    <td>
        <form class="fn_variants" action="/{$lang_link}cart">
            <button class="btn btn btn-buy" type="submit" data-language="add_to_cart"><span class="sprites i-basket-small"></span></button>
            <select name="variant" class="fn_variant variant_select {if $product->variants|count == 1}hidden{/if}">
                {foreach $product->variants as $v}
                    <option value="{$v->id}" data-price="{$v->price|convert}" data-stock="{$v->stock}"{if $v->compare_price > 0} data-cprice="{$v->compare_price|convert}"{/if}{if $v->sku} data-sku="{$v->sku}"{/if}>{if $v->name}{$v->name}{else}{$product->name|escape}{/if}</option>
                {/foreach}
            </select>
        </form></td>
    <td>{if $product->id|in_array:$wished_products}
            <a href="#" data-id="{$product->id}" class="sprites i-heart-small fn_wishlist selected"
               title="{$lang->remove_favorite}" data-result-text="{$lang->add_favorite}"></a>
        {else}
            <a href="#" data-id="{$product->id}" class="sprites i-heart-small fn_wishlist"
               title="{$lang->add_favorite}" data-result-text="{$lang->remove_favorite}"></a>
        {/if}</td>
    <td>{if !in_array($product->id,$comparison->ids)}
            <a class="sprites fn_comparison i-scales-small" href="#" data-id="{$product->id}"
               title="{$lang->add_comparison}" data-result-text="{$lang->remove_comparison}"></a>
        {else}
            <a class="sprites fn_comparison i-scales-small selected" href="#" data-id="{$product->id}"
               title="{$lang->remove_comparison}" data-result-text="{$lang->add_comparison}"></a>
        {/if}</td>
</tr>
