{if $products}
    <div class="item-catalogue">
    {foreach $products as $product}
        <div class="col-md-4 col-xs-6">
            {include file="product_list.tpl"}
        </div>
    {/foreach}
    </div>
    <div class="table-responsive wrap-item-table">
        <table class="table item-table" style="display: none">
            <tr>
                <th>Артикул</th>
                <th>Наименование</th>
                <th>В розницу </th>
                <th>Кол-во</th>
                <th>Купить</th>
                <th>Избр.</th>
                <th>Сравн.</th>
            </tr>
    {foreach $products as $product}
        <div class="col-md-4 col-xs-6">
            {include file="product-list-table.tpl"}
        </div>
    {/foreach}
        </table>
    </div>
{else}
    <span data-language="products_not_found">{$lang->products_not_found}</span>
{/if}