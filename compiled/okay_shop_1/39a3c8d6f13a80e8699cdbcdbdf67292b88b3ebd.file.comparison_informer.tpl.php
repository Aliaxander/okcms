<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 18:19:15
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/comparison_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16306430559809bf3c37869-11340832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a3c8d6f13a80e8699cdbcdbdf67292b88b3ebd' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/comparison_informer.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16306430559809bf3c37869-11340832',
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
  'unifunc' => 'content_59809bf3c3b774_12529862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809bf3c3b774_12529862')) {function content_59809bf3c3b774_12529862($_smarty_tpl) {?>
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
