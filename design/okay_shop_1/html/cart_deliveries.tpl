{if $deliveries}
<!-- delivery -->
<div class="title-big" data-language="cart_delivery">{$lang->cart_delivery}</div>
<div class="border-block">
    <ul class="radio-list">
        {foreach $deliveries as $delivery}
        <li>
            <label>
                <input onclick="change_payment_method({$delivery->id})" type="radio" name="delivery_id" value="{$delivery->id}" {if $delivery_id==$delivery->id || $delivery@first} checked{/if} />
                <span class="sprites i-delivery-{$delivery->id}"></span>
            </label>
            <p><b>{$delivery->name|escape}
                    {if $cart->total_price < $delivery->free_from && $delivery->price>0 && !$delivery->separate_payment}
                        <span class="nowrap">({$delivery->price|convert} {$currency->sign|escape})</span>
                    {elseif $delivery->separate_payment}
                        <span data-language="cart_free">({$lang->cart_paid_separate})</span>
                    {elseif $cart->total_price >= $delivery->free_from && !$delivery->separate_payment}
                        <span data-language="cart_free">({$lang->cart_free})</span>
                    {/if}</b></p>
            <p>{$delivery->description}</p>
        </li>
        {/foreach}
    </ul>
</div>
<!-- /delivery -->
{foreach $deliveries as $delivery}
{if $delivery->payment_methods}
<!-- payments -->
    <div id="fn_delivery_payment_{$delivery->id}" class="fn_delivery_payment" {if $delivery@iteration != 1} style="display:none"{/if}>
<div class="title-big "data-language="cart_payment">{$lang->cart_payment}</div>
<div class="border-block">
    <ul class="radio-list payment-list">
        {foreach $delivery->payment_methods as $payment_method}
        <li>
            <label><input id="payment_{$delivery->id}_{$payment_method->id}" type="radio" name="payment_method_id" value="{$payment_method->id}"{if $delivery@first && $payment_method@first} checked{/if} />
                <span>
                    {if $payment_method->image}
                        <img src="{$payment_method->image|resize:50:50:false:$config->resized_payments_dir}" />
                    {/if}
                </span>
            </label>
            {$total_price_with_delivery = $cart->total_price}
            {if !$delivery->separate_payment && $cart->total_price < $delivery->free_from}
                {$total_price_with_delivery = $cart->total_price + $delivery->price}
            {/if}
            <p><b>{$payment_method->name|escape} {$lang->cart_deliveries_to_pay} <span class="text-red">{$total_price_with_delivery|convert:$payment_method->currency_id} {$all_currencies[$payment_method->currency_id]->sign|escape}</span></b></p>
            <p>{$payment_method->description}</p>
        </li>
        {/foreach}
    </ul>
</div>
<!-- /payments -->
    </div>
    {/if}
    {/foreach}
{/if}
