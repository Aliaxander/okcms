<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 14:05:01
         compiled from "/home/okcms/design/okay_shop_1/html/comparison_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142583420759808a8de7c8c8-39377348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ec8e673e7c843ffb4bb1788db8d93e82cae3bd' => 
    array (
      0 => '/home/okcms/design/okay_shop_1/html/comparison_informer.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142583420759808a8de7c8c8-39377348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparison' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59808a8de84ba1_65109722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59808a8de84ba1_65109722')) {function content_59808a8de84ba1_65109722($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['comparison']->value->products)>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
comparison">
        <i class="compare_icon"></i>
        <span class="informer_name tablet-hidden" data-language="index_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
</span>
        <span class="informer_counter">(<?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
)</span>
    </a>
<?php } else { ?>
    <div>
        <i class="compare_icon"></i>
        <span class="informer_name tablet-hidden" data-language="index_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
</span>
    </div>
<?php }?>
<?php }} ?>
