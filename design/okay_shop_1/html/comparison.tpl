{* The products comparison page *}

{* The page title *}
{$meta_title = $lang->comparison_title scope=parent}

{* The products comparison page *}

{* The page title *}
{$meta_title = $lang->comparison_title scope=parent}

<div class="content-small">
    <h1 data-language="comparison_header">{$lang->comparison_header}</h1>
    {if $comparison->products}
    <div class="row collation-row">
        <div class="col-md-3 col-sm-4">
            {if $comparison->products|count > 1}
            <ul class="collation-sort fn_show">
                <li class="active"><a href="#show_all" data-language="comparison_all">{$lang->comparison_all}</a></li>
                <li  class="unique"><a href="#show_dif" data-language="comparison_unique">{$lang->comparison_unique}</a></li>
            </ul>
            {/if}
            <table class="table collation-table collation-table-heading">
                <tr><td data-language="product_rating">{$lang->product_rating}</td></tr>
                {if $comparison->features}
                    {foreach $comparison->features as $id=>$cf}
                <tr><td data-feature="{$cf->id}">{$cf->name}</td></tr>
                    {/foreach}
                {/if}
            </table>
        </div>
        <div class="col-md-9 col-sm-8">
            <div class="text-slider collation-slider">
                {foreach $comparison->products as $id=>$product}
                <div>
                    <!-- item-block -->
                    {include file="product_list.tpl"}
                    <!-- /item-block -->
                    {if $product->features}
                    <table class="table collation-table">
                        <tr>
                            <td>
                                <div class="progress rating">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:{$product->rating*90/5|string_format:'%.0f'}px;"></div>
                                </div>
                            </td>
                        </tr>
                        {foreach $product->features as $id=>$value}
                            <tr><td>{$value|default:"&mdash;"}</td></tr>
                        {/foreach}
                    </table>
                    {/if}
                </div>
                {/foreach}
            </div>
        </div>
    </div>
    {else}
        {$lang->comparison_empty}
    {/if}
</div>
<!-- /content -->