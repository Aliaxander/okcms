{* The Categories page *}

{* The canonical address of the page *}
{if $set_canonical}
    {if $category}
        {$canonical="/catalog/{$category->url}" scope=parent}
    {elseif $brand}
        {$canonical="/brands/{$brand->url}" scope=parent}
    {elseif $page->url=='discounted'}
        {$canonical="/discounted" scope=parent}
    {elseif $page->url=='bestsellers'}
        {$canonical="/bestsellers" scope=parent}
    {elseif $keyword}
        {$canonical="/all-products" scope=parent}
    {else}
        {$canonical="/all-products" scope=parent}
    {/if}
{/if}

<div class="content">
    <div class="row">
        <div class="col-sm-4 col-md-3">{include file='features.tpl'}</div>
        <div class="col-sm-8 col-md-9">
            {* The page heading *}
            {if $keyword}
                <h1 class="h1"><span data-language="products_search">{$lang->products_search}</span> {$keyword|escape}</h1>
            {elseif $page}
                <h1 class="title-margin" data-page="{$page->id}">{$page->name|escape}
                </h1>
            {else}
                <h1 class="title-margin" data-category="{$category->id}">{if $category->name_h1|escape}{$category->name_h1|escape}{else}{$category->name|escape}{/if} {$brand->name|escape} {$filter_meta->h1|escape}</h1>
            {/if}

            {if $current_page_num == 1 && ($category->annotation || $brand->annotation)}
                <div class="block padding">
                    {* Краткое описание категории *}
                    {$category->annotation}

                    {* Краткое описание бренда *}
                    {$brand->annotation}
                </div>
            {/if}

            {if $products}
                {* Product Sorting *}
                <div class="fn_products_sort">
                    {include file="products_sort.tpl"}
                </div>
            {/if}

            {* Product list *}
            <div id="fn_products_content" class="fn_categories products clearfix">
                {include file="products_content.tpl"}
            </div>

            {if $products}
                {* Friendly URLs Pagination *}
                <div class="fn_pagination">
                    {include file='chpu_pagination.tpl'}
                </div>
            {/if}

            {if $page->body}
                <div class="block padding">
                    {$page->body}
                </div>
            {/if}

            {if $current_page_num == 1 && (!$category || !$brand) && ($category->description || $brand->description)}
                <div class="block padding">
                    {* Описание категории *}
                    {$category->description}

                    {* Описание бренда *}
                    {$brand->description}
                </div>
            {/if}
        </div>
    </div>
</div>