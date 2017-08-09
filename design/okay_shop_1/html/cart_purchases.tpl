<div class="table-responsive">
    <table class="table basket-table table-bordered">
        <tr>
            <th></th>
            <th data-language="cart_head_img">{$lang->cart_head_img}</th>
            <th data-language="cart_head_name">{$lang->cart_head_name}</th>
            <th data-language="cart_head_price">{$lang->cart_head_price}</th>
            <th data-language="cart_head_amoun">{$lang->cart_head_amoun}</th>
            <th data-language="cart_head_total">{$lang->cart_head_total}</th>
        </tr>
        {foreach $cart->purchases as $purchase}
        <tr>
            {$image = $purchase->product->images|first}
            <td><a href="{$lang_link}cart/remove/{$purchase->variant->id}" onclick="ajax_remove({$purchase->variant->id});return false;" title="{$lang->cart_remove}" class="sprites i-del"></a></td>
            <td><a href="{$lang_link}products/{$purchase->product->url}">
                    {if $image}
                        <img src="{$image->filename|resize:50:50}" alt="{$purchase->product->name|escape}" title="{$purchase->product->name|escape}">
                    {else}
                        <img width="50" height="50" src="design/{$settings->theme}/images/no_image.png" alt="{$purchase->product->name|escape}" title="{$purchase->product->name|escape}">
                    {/if}
                </a></td>
            <td><div class="name"><a href="{$lang_link}products/{$purchase->product->url}">{$purchase->product->name|escape}</a></div></td>
            <td>{($purchase->variant->price)|convert} {$currency->sign}</td>
            <td><div class="jq-number fn_product_amount{if $settings->is_preorder} fn_is_preorder{/if} amount">
                    <span class="jq-number__spin minus"></span>
                    <div class="jq-number__field"><input class="input_amount" type="text" data-id="{$purchase->variant->id}" name="amounts[{$purchase->variant->id}]" value="{$purchase->amount}" onblur="ajax_change_amount(this, {$purchase->variant->id});" data-max="{$purchase->variant->stock}"></div>
                    <span class="jq-number__spin plus"></span>
                </div></td>
            <td>{($purchase->variant->price*$purchase->amount)|convert} {$currency->sign}</td>
        </tr>
        {/foreach}
        <tr>
            <td colspan="6"><div class="summ" data-language="cart_total_price">{$lang->cart_total_price}: {$cart->total_price|convert} {$currency->sign|escape}</div></td>
        </tr>
    </table>
</div>
