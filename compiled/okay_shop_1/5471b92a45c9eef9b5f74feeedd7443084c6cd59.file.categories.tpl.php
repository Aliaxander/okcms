<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 19:36:30
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79309320959809bf3c4f4e6-51110005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5471b92a45c9eef9b5f74feeedd7443084c6cd59' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/categories.tpl',
      1 => 1501605387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79309320959809bf3c4f4e6-51110005',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809bf3c62445_29845679',
  'variables' => 
  array (
    'categories' => 0,
    'c' => 0,
    'category' => 0,
    'lang_link' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809bf3c62445_29845679')) {function content_59809bf3c62445_29845679($_smarty_tpl) {?><ul class="dropdown-menu" role="menu">
    <?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                    <li class="category_item">
                        <a class="category_link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>"
                           href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories&&$_smarty_tpl->tpl_vars['c']->value->has_children_visible) {?>
                            <div class="sub-list">
                                <div class="row">
                                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</p>
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value->subcategories; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
                                            <li><a class="category_link<?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['sub']->value->id) {?> selected<?php }?>"
                                                   href="/catalog/<?php echo $_smarty_tpl->tpl_vars['sub']->value->url;?>
"
                                                   data-category="<?php echo $_smarty_tpl->tpl_vars['sub']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                    </li>
                <?php }?>
            <?php } ?>
        <?php }?>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

    <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1));?>

</ul><?php }} ?>
