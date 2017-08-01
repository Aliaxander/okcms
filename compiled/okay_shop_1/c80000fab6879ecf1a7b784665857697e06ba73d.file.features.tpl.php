<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 19:18:12
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11381213965980a9c469b188-25146367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c80000fab6879ecf1a7b784665857697e06ba73d' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/features.tpl',
      1 => 1501594615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11381213965980a9c469b188-25146367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'prices' => 0,
    'features' => 0,
    'products' => 0,
    'lang' => 0,
    'brand' => 0,
    'b' => 0,
    'f' => 0,
    'key' => 0,
    'o' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5980a9c46c64b3_83037860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5980a9c46c64b3_83037860')) {function content_5980a9c46c64b3_83037860($_smarty_tpl) {?>
<?php if (($_smarty_tpl->tpl_vars['category']->value->brands||$_smarty_tpl->tpl_vars['prices']->value||$_smarty_tpl->tpl_vars['features']->value)&&count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
    <div class="filters_heading fn_switch lg-hidden">
        <span data-language="filters"><?php echo $_smarty_tpl->tpl_vars['lang']->value->filters;?>
</span>
        <i class="angle_icon"></i>
    </div>

    <div class="filters tablet-hidden">
        
        <?php if ($_smarty_tpl->tpl_vars['prices']->value&&count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
            <div class="h2 filter_name">
                <span data-language="features_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_price;?>
</span>
            </div>

            <div class="filter_group">
                
                <div id="fn_slider_price"></div>

                
                <div class="price_range">
                    <div class="price_label">
                        <input class="min_input" id="fn_slider_min" name="p[min]" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['prices']->value->current->min)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prices']->value->range->min : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['prices']->value->range->min;?>
" type="text">
                    </div>

                    <div class="price_label max_price">
                        <input class="max_input" id="fn_slider_max" name="p[max]" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['prices']->value->current->max)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prices']->value->range->max : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['prices']->value->range->max;?>
" type="text">
                    </div>
                </div>
            </div>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['category']->value->brands) {?>
            
            <div class="h2 filter_name">
                <span data-language="features_manufacturer"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_manufacturer;?>
</span>
            </div>
            <div class="filter_group">
                
                <div class="filter_item">
                    <a class="filter_link<?php if (!$_smarty_tpl->tpl_vars['brand']->value->id&&!$_GET['b']) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('brand'=>null,'page'=>null)),$_smarty_tpl);?>
">
                        <i class="filter_indicator"></i>
                        <span data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                    </a>
                </div>
                
                <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->brands; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                    <div class="filter_item">
                        <a class="filter_link<?php if ($_smarty_tpl->tpl_vars['brand']->value->id==$_smarty_tpl->tpl_vars['b']->value->id||$_GET['b']&&in_array($_smarty_tpl->tpl_vars['b']->value->id,$_GET['b'])) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('brand'=>$_smarty_tpl->tpl_vars['b']->value->url,'page'=>null)),$_smarty_tpl);?>
">
                             <i class="filter_indicator"></i>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php }?>
        
        
        <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
                
                <div class="h2 filter_name" data-feature="<?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</div>

                <div class="filter_group">
                    
                    <div class="filter_item">
                        <a class="filter_link<?php if (!$_GET[$_smarty_tpl->tpl_vars['key']->value]) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>null,'page'=>null)),$_smarty_tpl);?>
">
                            <i class="filter_indicator"></i>
                            <span data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                        </a>
                    </div>
                    
                    <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f']->value->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
                        <div class="filter_item">
                            <a class="filter_link<?php if ($_GET[$_smarty_tpl->tpl_vars['f']->key]&&in_array($_smarty_tpl->tpl_vars['o']->value->translit,$_GET[$_smarty_tpl->tpl_vars['f']->key])) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>$_smarty_tpl->tpl_vars['o']->value->translit,'page'=>null)),$_smarty_tpl);?>
">
                                <i class="filter_indicator"></i>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            <?php } ?>
        <?php }?>
    </div>
<?php }?>
<?php }} ?>
