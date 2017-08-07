{* Compaison informer (given by Ajax) *}
{if $comparison->products|count > 0}
    <li id="comparison"><a href="{$lang_link}comparison" class="sprites i-scales"><span class="count">{$comparison->products|count}</span></a></li>
{else}
    <li id="comparison"><a href="{$lang_link}comparison" class="sprites i-scales"></a></li>
{/if}
