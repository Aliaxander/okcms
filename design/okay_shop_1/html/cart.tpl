{* The cart page template *}

{* The page title *}
{$meta_title = $lang->cart_title scope=parent}

{if $cart->purchases}
<!-- content -->
<div class="content">
    <h1 data-language="cart_header">{$lang->cart_header}</h1>

    {if $cart->purchases}
    {* Cart form *}
    <form method="post" name="cart">
    <!-- basket-table -->
        <div id="fn_purchases">
        {include file='cart_purchases.tpl'}
        </div>
        <div id="fn_ajax_deliveries">
        {include file='cart_deliveries.tpl'}
        </div>
    <!-- /basket-table -->
        {if $error}
            <div class="message_error">
                {if $error == 'empty_name'}
                    <span data-language="form_enter_name">{$lang->form_enter_name}</span>
                {/if}
                {if $error == 'empty_email'}
                    <span data-language="form_enter_email">{$lang->form_enter_email}</span>
                {/if}
                {if $error == 'captcha'}
                    <span data-language="form_error_captcha">{$lang->form_error_captcha}</span>
                {/if}
                {if $error == 'empty_phone'}
                    <span data-language="form_error_phone">{$lang->form_error_phone}</span>
                {/if}
            </div>
        {/if}
        <div class="title-big" data-language="cart_form_header">{$lang->cart_form_header}</div>
        <div class="border-block contacts-block">
            <div class="row mobile-row">
                <div class="col-xs-6"><div class="form-group"><label data-language="form_name">{$lang->form_name}: <span class="text-red">*</span></label><input name="name" type="text" value="{$name|escape}" data-language="form_name" placeholder="{$lang->form_name}"></div></div>
                <div class="col-xs-6"><div class="form-group"><label data-language="form_phone">{$lang->form_phone}: <span class="text-red">*</span></label><input name="phone" type="tel" value="{$phone|escape}" data-language="form_phone" placeholder="{$lang->form_phone}"></div></div>
                <div class="col-xs-6"><div class="form-group"><label data-language="form_email">{$lang->form_email}: <span class="text-red">*</span></label><input name="email" type="email" value="{$email|escape}" data-language="form_email" placeholder="{$lang->form_email}"></div></div>
                <div class="col-xs-6"><div class="form-group"><label data-language="form_address">{$lang->form_address}:</label><input name="address" type="text" value="{$address|escape}" data-language="form_address" placeholder="{$lang->form_address}"></div></div>
            </div>
            <div class="form-group"><label data-language="cart_order_comment">{$lang->cart_order_comment}:</label><textarea id="comment" name="comment" data-language="cart_order_comment" placeholder="{$lang->cart_order_comment}">{$comment|escape}</textarea></div>
            {if $settings->captcha_cart}
                {get_captcha var="captcha_cart"}
                <div class="col-xs-6"><div class="form-group"><label data-language="form_enter_captcha" data-language="form_enter_captcha">{$lang->form_enter_captcha}: <b>{$captcha_cart[0]|escape} + ? =  {$captcha_cart[1]|escape}</b></label><input name="captcha_code" type="text" data-language="form_enter_captcha" placeholder="{$lang->form_enter_captcha}"></div></div>
            {/if}
            <p class="text-right"><input type="submit" name="checkout" data-language="cart_checkout" value="{$lang->cart_checkout}" class="btn btn-big"></p>
        </div>
    </form>
    {/if}
</div>
<!-- /content -->

{else}
{$lang->cart_empty}
{/if}



