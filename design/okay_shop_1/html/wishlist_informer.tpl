{* Информер избранного (отдаётся аяксом) *}
{if $wished_products|count > 0}
    <li><a href="{$lang_link}wishlist" class="sprites i-heart"><span class="count">{$wished_products|count}</span></a></li>
{else}
    <li><a href="{$lang_link}wishlist" class="sprites i-heart"></a></li>
{/if}