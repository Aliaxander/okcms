<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 18:19:16
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/callback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103076015559809bf4104173-71562740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c2f6851187d25958ea87c7a555bd85aef745604' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/callback.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103076015559809bf4104173-71562740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'user' => 0,
    'name' => 0,
    'phone' => 0,
    'call_sent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809bf4116036_09685315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809bf4116036_09685315')) {function content_59809bf4116036_09685315($_smarty_tpl) {?>
<div class="hidden">
    <form id="fn_callback" class="popup fn_validate_callback" method="post">

        
        <div class="popup_heading">
            <span data-language="callback_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_header;?>
</span>
        </div>

        
        <div class="form_group">
            <input class="form_input" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['user']->value->name) {?><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-language="form_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*">
        </div>

        
        <div class="form_group">
            <input class="form_input" type="text" name="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_phone" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
*">
        </div>

        
        <div class="form_group">
            <textarea class="form_textarea" rows="3" name="message" data-language="form_enter_message" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
"></textarea>
        </div>

        
        <div class="center">
            <input class="button" type="submit" name="callback" data-language="callback_order" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_order;?>
">
        </div>

    </form>
</div>


<?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
    <div class="hidden">
        <div id="fn_callback_sent" class="popup">
            <div class="popup_heading">
                <span data-language="callback_sent_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_header;?>
</span>
            </div>

            <div data-language="callback_sent_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_text;?>
</div>
        </div>
    </div>
<?php }?>
<?php }} ?>
