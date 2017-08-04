{* Cart informer (given by Ajax) *}
{if $cart->total_products > 0}
    <li><a href="{$lang_link}cart" class="sprites i-basket"><span class="count">{$cart->total_products}</span></a></li>
{else}
    <li><a href="{$lang_link}cart" class="sprites i-basket"></a></li>
{/if}
