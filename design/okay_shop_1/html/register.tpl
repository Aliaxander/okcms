{* Registration page *}

{* The canonical address of the page *}
{$canonical="/user/register" scope=parent}

{* The page title *}
{$meta_title = $lang->register_title scope=parent}

<!-- content -->
<div class="content">
    <h1 data-language="register_header">{$lang->register_header}</h1>
    <div class="border-block">
        <div class="row mobile-row">
            <div class="col-sm-8 col-md-6 col-xs-7">
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
                        {elseif $error == 'captcha'}
                            <span data-language="form_error_captcha">{$lang->form_error_captcha}</span>
                        {else}
                            {$error}
                        {/if}
                    </div>
                {/if}
                <form method="post" class="login-form">
                    <div class="form-group"><label data-language="form_email">{$lang->form_email}: <span class="text-red">*</span></label><input type="email" name="email" value="{$email|escape}" data-language="form_email" placeholder="{$lang->form_email}"/></div>
                    <div class="form-group"><label data-language="form_name">{$lang->form_name}: <span class="text-red">*</span></label><input type="text" name="name"  value="{$name|escape}" data-language="form_name" placeholder="{$lang->form_name}"/></div>
                    <div class="form-group"><label data-language="form_phone">{$lang->form_phone}:</label><input type="tel" name="phone" value="{$phone|escape}" data-language="form_phone" placeholder="{$lang->form_phone}"/></div>
                    <div class="form-group"><label data-language="form_address">{$lang->form_address}:</label><input type="text" name="address" value="{$address|escape}" data-language="form_address" placeholder="{$lang->form_address}"/></div>
                    <div class="form-group"><label data-language="form_enter_password">{$lang->form_enter_password}: <span class="text-red">*</span></label><input type="password" name="password" value="" data-language="form_enter_password" placeholder="{$lang->form_enter_password}"/></div>
                    {if $settings->captcha_register}
                    {get_captcha var="captcha_register"}
                    <div class="form-group"><label data-language="form_enter_captcha">{$lang->form_enter_captcha}: <span class="text-red">* </span><b>{$captcha_register[0]|escape} + ? =  {$captcha_register[1]|escape}</b></label><input type="text" name="captcha_code" value="" data-language="form_enter_captcha" placeholder="{$lang->form_enter_captcha}"/></div>
                    {/if}
                    <div class="row">
                        <div class="col-sm-6"><p><input type="submit" name="register" class="btn btn-block" data-language="register_create_account" value="{$lang->register_create_account}"/></p></div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4 col-md-6 col-xs-5">
                <div class="separator">Или</div>
                <ul class="login-list">
                    <li>Зарегистрируйтесь через соцсети</li>
                    <li><a href="#"><img src="{$config->root_url}/design/{$settings->theme}/img/content/tw.jpg" alt="" class="img-responsive center-block"></a></li>
                    <li><a href="#"><img src="{$config->root_url}/design/{$settings->theme}/img/content/g.jpg" alt="" class="img-responsive center-block"></a></li>
                    <li><a href="#"><img src="{$config->root_url}/design/{$settings->theme}/img/content/fb.jpg" alt="" class="img-responsive center-block"></a></li>
                    <li><a href="#"><img src="{$config->root_url}/design/{$settings->theme}/img/content/vk.jpg" alt="" class="img-responsive center-block"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /content -->
