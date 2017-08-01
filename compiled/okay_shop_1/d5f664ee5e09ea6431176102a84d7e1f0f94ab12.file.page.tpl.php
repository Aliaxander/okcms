<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 18:25:45
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17500711459809d793726a5-38326845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f664ee5e09ea6431176102a84d7e1f0f94ab12' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/page.tpl',
      1 => 1501595831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17500711459809d793726a5-38326845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809d79388361_18067486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809d79388361_18067486')) {function content_59809d79388361_18067486($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<?php if ($_smarty_tpl->tpl_vars['page']->value->url=='404') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>

    
    <h1 class="h1">
        <span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </h1>
    
    
    <div class="block padding">
        <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

    </div>
    
<?php }?>
<?php }} ?>
