{if $products|count > 0}
    <div class="sort-block clearfix">
        <ul class="sort-list">
            <li data-language="products_sort_by">{$lang->products_sort_by}:</li>

            <li{if $sort=='position'} class="active"{/if}><a href="{furl sort=position page=null}">
                <span data-language="products_by_default">{$lang->products_by_default}</span>
                </a></li>

            <li{if $sort=='price'} class="active"{/if}><a href="{if $sort=='price'}{furl sort=price_desc page=null}{else}{furl sort=price page=null}{/if}">
                <span data-language="products_by_price">{$lang->products_by_price}</span>
                </a></li>

            <li{if $sort=='name'} class="active"{/if}><a href="{if $sort=='name'}{furl sort=name_desc page=null}{else}{furl sort=name page=null}{/if}">
                    <span data-language="products_by_name">{$lang->products_by_name}</span>
                </a></li>

            <li{if $sort=='rating'} class="active"{/if}><a {if $sort=='rating'}href="{furl sort=rating_desc page=null}"
                        {else}href="{furl sort=rating page=null}{/if}" data-language="products_by_rating">
                    <span data-language="products_by_name">{$lang->products_by_rating}</span>
                </a></li>
        </ul>
        <ul class="type-list">
            <li><a href="catalogue-list.html" class="sprites i-list"></a></li>
            <li class="active"><a href="catalogue.html" class="sprites i-block"></a></li>
        </ul>
    </div>
{/if}
