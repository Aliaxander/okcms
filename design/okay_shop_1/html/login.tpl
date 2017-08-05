{* Login page *}

{* The canonical address of the page *}
{$canonical="/user/login" scope=parent}

{* The page title *}
{$meta_title = $lang->login_title scope=parent}

<!-- content -->
<div class="content">
    <h1 data-language="login_enter">{$lang->login_enter}</h1>
    <div class="border-block">
        <div class="row mobile-row">
            <div class="col-sm-8 col-md-6 col-xs-7">
                {if $error}
                    <div class="message_error">
                        {if $error == 'login_incorrect'}
                            <span data-language="login_error_pass">{$lang->login_error_pass}</span>
                        {elseif $error == 'user_disabled'}
                            <span data-language="login_pass_not_active">{$lang->login_pass_not_active}</span>
                        {else}
                            {$error|escape}
                        {/if}
                    </div>
                {/if}
                <form method="post" class="login-form">
                    <div class="form-group"><label>Email: <span class="text-red">*</span></label><input type="email" name="email" class="input-shadow"></div>
                    <div class="form-group"><label>Пароль: <span class="text-red">*</span></label><input type="password" name="password" class="input-shadow"></div>
                    <div class="row mobile-row">
                        <div class="col-xs-6 col-sm-8">
                            <p>
                                <input class="btn" type="submit" name="login" data-language="login_sign_in" value="{$lang->login_sign_in}"/>
                                <a href="{$lang_link}password_remind" data-language="login_remind">{$lang->login_remind}</a>
                            </p>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <p class="text-right"><a href="{$lang_link}register" data-language="login_registration"><span class="sprites i-registration"></span>{$lang->login_registration}</a></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4 col-md-6 col-xs-5">
                <div class="separator">Или</div>
                <ul class="login-list">
                    <li>Вход через соцсети</li>
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
