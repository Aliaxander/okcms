<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 18:25:45
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120233936959809d7938c202-70038026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0caab9b321e81d25c609a50c237fc4f0a4e4f912' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/page_404.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120233936959809d7938c202-70038026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809d79393784_72581301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809d79393784_72581301')) {function content_59809d79393784_72581301($_smarty_tpl) {?>


<h1 class="h1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>


<div class="block padding">
    <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

</div><?php }} ?>
