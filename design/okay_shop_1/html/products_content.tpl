{if $products}
    {foreach $products as $product}
        <div class="col-md-4 col-xs-6">
            {include file="product_list.tpl"}
        </div>
    {/foreach}
{else}
    <span data-language="products_not_found">{$lang->products_not_found}</span>
{/if}