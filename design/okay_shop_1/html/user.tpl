{* Account page *}

{* The page title *}
{$meta_title = $lang->user_title scope=parent}

<!-- content -->
<div class="content">
    <h1 data-language="user_header">{$lang->user_header}</h1>
    <div class="row wrap-personal">
        <div class="col-md-6">
            <div class="border-block personal-border-block">
                {* Form error messages *}
                {if $error}
                    <div class="message_error">
                        {if $error == 'empty_name'}
                            <span data-language="form_enter_name">{$lang->form_enter_name}</span>
                        {elseif $error == 'empty_email'}
                            <span data-language="form_enter_email">{$lang->form_enter_email}</span>
                        {elseif $error == 'empty_password'}
                            <span data-language="form_enter_password">{$lang->form_enter_password}</span>
                        {elseif $error == 'user_exists'}
                            <span data-language="register_user_registered">{$lang->register_user_registered}</span>
                        {else}
                            {$error}
                        {/if}
                    </div>
                {/if}
                <form method="post" class="login-form">
                    <div class="form-group"><label data-language="form_name">{$lang->form_name}:</label><input value="{$name|escape}" name="name" type="text" data-language="form_name" placeholder="{$lang->form_name}"/></div>
                    <div class="form-group"><label data-language="form_email">{$lang->form_email}:</label><input value="{$email|escape}" name="email" type="email" data-language="form_email" placeholder="{$lang->form_email}"/></div>
                    <div class="form-group"><label data-language="form_phone">{$lang->form_phone}: </label><input value="{$phone|escape}" name="phone" type="tel" data-language="form_phone" placeholder="{$lang->form_phone}"/></div>
                    <div class="form-group"><label data-language="form_address">{$lang->form_address}: </label><input value="{$address|escape}" name="address" type="text" data-language="form_address" placeholder="{$lang->form_address}"/></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6"><label>Пароль:</label><input name="password" type="password"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6"><p><input type="submit" name="user_save" class="btn btn-border" data-language="form_save" value="{$lang->form_save}"/></p></div>
                        <div class="col-xs-6">
                            <p><a href="{$lang_link}user/logout" class="btn btn-border-white pull-right" data-language="user_logout">{$lang->user_logout}</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {if $orders}
        <div class="col-md-6">
            <table class="table table-bordered history-table">
                <thead>
                <tr>
                    <th data-language="user_number_of_order">{$lang->user_number_of_order}</th>
                    <th data-language="user_order_date">{$lang->user_order_date}</th>
                    <th data-language="user_order_status">{$lang->user_order_status}</th>
                </tr>
                </thead>
                {foreach $orders as $order}
                <tr>
                    <td><a href='{$language->label}/order/{$order->url}'><span data-language="user_order_number">{$lang->user_order_number}</span>{$order->id}</a></td>
                    <td><span data-language="user_order_date">{$lang->user_order_date}</span></td>
                    <td> {if $order->paid == 1}
                            <span data-language="status_paid">{$lang->status_paid}</span>,
                        {/if}
                        {$orders_status[$order->status_id]->name|escape}</td>
                </tr>
                {/foreach}
            </table>
        </div>
        {/if}
    </div>
</div>
<!-- /content -->