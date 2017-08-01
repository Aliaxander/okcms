<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 18:50:06
         compiled from "/home/irina/web/ox/okcms/design/okay_shop_1/html/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16937481135980a32e85f098-75526789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '925cc401e3da7f9210d9a87c595d3c98c3e8494b' => 
    array (
      0 => '/home/irina/web/ox/okcms/design/okay_shop_1/html/product.tpl',
      1 => 1501594615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16937481135980a32e85f098-75526789',
  'function' => 
  array (
    'comments_tree' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'product' => 0,
    'brand' => 0,
    'lang' => 0,
    'lang_link' => 0,
    'settings' => 0,
    'image' => 0,
    'wished_products' => 0,
    'comparison' => 0,
    'v' => 0,
    'currency' => 0,
    'f' => 0,
    'comments' => 0,
    'comment' => 0,
    'level' => 0,
    'children' => 0,
    'error' => 0,
    'comment_name' => 0,
    'comment_email' => 0,
    'comment_text' => 0,
    'captcha_product' => 0,
    'prev_product' => 0,
    'next_product' => 0,
    'related_products' => 0,
    'p' => 0,
    'related_posts' => 0,
    'r_p' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5980a32e8fa143_25863874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5980a32e8fa143_25863874')) {function content_5980a32e8fa143_25863874($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/irina/web/ox/okcms/Smarty/libs/plugins/modifier.date_format.php';
?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products/".((string)$_smarty_tpl->tpl_vars['product']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="block padding">
    <div class="fn_product product" itemscope itemtype="http://schema.org/Product">
        
        
        <h1 class="product_heading">
            <span data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)==1&&!empty($_smarty_tpl->tpl_vars['product']->value->variant->name)) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variant->name, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></span>
        </h1>

        
        <div class="sku clearfix">
            <?php if ($_smarty_tpl->tpl_vars['brand']->value) {?>
                <div class="product_brand_block clearfix">
                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_brand_name;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></span>
                </div>
            <?php }?>
            <div class="<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->sku) {?> hidden<?php }?>">
                <span data-language="product_sku"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_sku;?>
:</span>
                <span class="fn_sku sku_nubmer"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variant->sku, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
        </div>

        <div class="row fn_transfer">
            <div class="col-lg-5 col-xl-6">
                <div class="product_image">
                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,800,600,'w');?>
" data-fancybox="group" data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            <img class="fn_img product_img" itemprop="image" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,300,300);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                        </a>
                    <?php } else { ?>
                        <img class="fn_img" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" width="340" height="340" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->special) {?>
                        <img class="promo_img" alt='<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
' title="<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
"  src='files/special/<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
'/>
                    <?php }?>
                </div>

                
                <?php if (count($_smarty_tpl->tpl_vars['product']->value->images)>1) {?>
                    <div class="fn_images images clearfix">
                        
                        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['cut'][0][0]->cut_modifier($_smarty_tpl->tpl_vars['product']->value->images); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
 $_smarty_tpl->tpl_vars['image']->iteration++;
?>
                            <div class="images_item">
                                <a class="images_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,800,600,'w');?>
" data-fancybox="group" data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 #<?php echo $_smarty_tpl->tpl_vars['image']->iteration;?>
">
                                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,75,75);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?> 
            </div>

            <div class="col-lg-7 col-xl-6">
                <div class="product_details" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                    <div class="row">
                        <div class="col-sm-6">
                            
                            <div>
                                <?php if (in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['wished_products']->value)) {?>
                                    <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist selected product_wish" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_favorite;?>
" data-language="product_remove_favorite"></a>
                                <?php } else { ?>
                                    <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist product_wish" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_favorite;?>
" data-language="product_add_favorite"></a>
                                <?php }?>
                            </div>

                            
                            <div>
                                <?php if (!in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['comparison']->value->ids)) {?>
                                    <a class="fn_comparison product_compare" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_comparison;?>
" data-language="product_add_comparison"></a>
                                <?php } else { ?>
                                    <a class="fn_comparison selected product_compare" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_comparison;?>
" data-language="product_remove_comparison"></a>
                                <?php }?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="clearfix">
                                <span class="details_label" data-language="product_rating"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_rating;?>
:</span>

                                
                                <div id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="product_rating"<?php if ($_smarty_tpl->tpl_vars['product']->value->rating>0) {?> itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"<?php }?>>
                                    
                                    <span class="rating_starOff">
                                        <span class="rating_starOn" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value->rating*90/sprintf('%.0f',5);?>
px;"></span>
                                    </span>
                                    <span class="rating_text"></span>

                                    
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->rating>0) {?>
                                        <span class="hidden" itemprop="reviewCount"><?php echo sprintf("%.0f",$_smarty_tpl->tpl_vars['product']->value->votes);?>
</span>
                                        <span class="hidden" itemprop="ratingValue">(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['product']->value->rating);?>
)</span>
                                        
                                        <span class="hidden" itemprop="bestRating" style="display:none;">5</span>
                                    <?php } else { ?>
                                        <span class="hidden">(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['product']->value->rating);?>
)</span>
                                    <?php }?>
                                </div>
                            </div>

                            
                            <span class="details_label" data-language="available"><?php echo $_smarty_tpl->tpl_vars['lang']->value->available;?>
:</span>

                            <div class="available">
                                <span class="no_stock fn_not_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>" data-language="product_out_of_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_out_of_stock;?>
</span>

                                <span class="in_stock fn_in_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden<?php }?>" data-language="product_in_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_in_stock;?>
</span>
                            </div>
                        </div>
                    </div>

                    <form class="fn_variants" action="/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart">
                        <div class="row">
                            <div class="col-sm-6">
                                
                                <select name="variant" class="fn_variant variant_select<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?> hidden<?php }?>">
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
" data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> data-cprice="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value->sku) {?> data-sku="<?php echo $_smarty_tpl->tpl_vars['v']->value->sku;?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-sm-6 fn_is_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden<?php }?>">
                                <span class="details_label quontity_label" data-language="product_quantity"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_quantity;?>
:</span>

                                
                                <div class="amount fn_product_amount">
                                    <span class="minus">&minus;</span>
                                    <input class="input_amount" type="text" name="amount" value="1" data-max="<?php echo $_smarty_tpl->tpl_vars['product']->value->variant->stock;?>
">
                                    <span class="plus">&plus;</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                
                                <div class="old_price<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> hidden<?php }?>">
                                    <span class="fn_old_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->compare_price);?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                                </div>

                                
                                <div class="price ">
                                    <span class="fn_price" itemprop="price" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price,'',false);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price);?>
</span>
                                    <span itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                            </div>

                            <div class="col-sm-6 product_buttons">
                                <?php if (!$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>
                                    
                                    <div class="fn_not_preorder <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>">
                                        <button class="disable_button" type="button" data-language="product_out_of_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_out_of_stock;?>
</button>
                                    </div>
                                <?php } else { ?>
                                    
                                    <div class="fn_is_preorder <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>">
                                        <button class="button product_btn" type="submit" data-language="product_pre_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</button>
                                    </div>
                                <?php }?>
                                
                                
                                <button class="fn_is_stock button product_btn<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden<?php }?>" type="submit" data-language="product_add_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_cart;?>
</button>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="info_delivery fn_col">
                                <div class="h5">
                                    <span data-language="product_delivery"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery;?>
</span>
                                </div>
                                <p data-language="product_delivery_1"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_1;?>
</p>
                                <p data-language="product_delivery_2"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_2;?>
</p>
                                <p data-language="product_delivery_3"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_3;?>
</p>
                                <p data-language="product_delivery_4"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_4;?>
</p>
                            </div>
                        </div>

                        
                        <div class="col-sm-6">
                            <div class="info_payment fn_col">
                                <div class="h5">
                                    <span data-language="product_payment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment;?>
</span>
                                </div>
                                <p data-language="product_payment_1"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_1;?>
</p>
                                <p data-language="product_payment_2"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_2;?>
</p>
                                <p data-language="product_payment_3"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_3;?>
</p>
                                <p data-language="product_payment_4"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_4;?>
</p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="product_share">
                        <div class="share_text">
                            <span data-language="product_share"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_share;?>
</span>
                        </div>
                        <div class="fn_share jssocials"></div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="tabs clearfix">
            <div class="tab_navigation">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->description) {?>
                    <a href="#description" data-language="product_description"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_description;?>
</a>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
                    <a href="#features" data-language="product_features"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_features;?>
</a>
                <?php }?>

                <a href="#comments" data-language="product_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_comments;?>
</a>
            </div>
        
            <div class="tab_container">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->description) {?>
                    <div id="description" class="tab product_description" itemprop="description">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
                    <div id="features" class="tab">    
                        <ul class="features">
                            <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                                <li>
                                    <span class="features_name"><span><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</span></span>
                                    <span class="features_value"><?php echo $_smarty_tpl->tpl_vars['f']->value->value;?>
</span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php }?>

                
                <div id="comments" class="tab">
                    <div class="row">
                        <div class="col-lg-7">
                            <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                                <?php if (!function_exists('smarty_template_function_comments_tree')) {
    function smarty_template_function_comments_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['comments_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>

                                        
                                        <a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>

                                        
                                        <div class="comment_item<?php if ($_smarty_tpl->tpl_vars['level']->value>0) {?> admin_note<?php }?>">

                                            <div class="comment_header">
                                                
                                                <span class="comment_author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                
                                                <span class="comment_date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
, <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
</span>
                                                
                                                <?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>
                                                    <span data-language="post_comment_status">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comment_status;?>
)</span>
                                                <?php }?>
                                            </div>

                                            
                                            <div class="comment_content">
                                                <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

                                            </div>
                                            <?php if (isset($_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id])) {?>
                                                <?php smarty_template_function_comments_tree($_smarty_tpl,array('comments'=>$_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                            <?php }?>
                                        </div>
                                    <?php } ?>
                                <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                                <?php smarty_template_function_comments_tree($_smarty_tpl,array('comments'=>$_smarty_tpl->tpl_vars['comments']->value));?>

                            <?php } else { ?>
                                <div class="no_comments">
                                    <span data-language="product_no_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_no_comments;?>
</span>
                                </div>
                            <?php }?>
                        </div>

                        <div class="col-lg-5">
                            
                            <form class="comment_form fn_validate_product" method="post">

                                <div class="h3">
                                    <span data-language="product_write_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_write_comment;?>
</span>
                                </div>

                                
                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                    <div class="message_error">
                                        <?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
                                            <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
                                            <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_comment') {?>
                                            <span data-language="form_enter_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
                                            <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                        <?php }?>
                                    </div>
                                <?php }?>

                                <div class="row">
                                    
                                    <div class="col-lg-6 form_group">
                                        <input class="form_input" type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*"/>
                                    </div>

                                    
                                    <div class="col-lg-6 form_group">
                                        <input class="form_input" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
"/>
                                    </div>
                                </div>

                                
                                <div class="form_group">
                                    <textarea class="form_textarea" rows="3" name="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
*"><?php echo $_smarty_tpl->tpl_vars['comment_text']->value;?>
</textarea>
                                </div>

                                
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_product) {?>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0][0]->get_captcha_plugin(array('var'=>"captcha_product"),$_smarty_tpl);?>

                                    <div class="captcha">
                                        <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_product']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_product']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <input class="form_input input_captcha" type="text" name="captcha_code" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*"/>
                                    </div>
                                <?php }?>

                                
                                <input class="button" type="submit" name="comment" data-language="form_send" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
        <?php if ($_smarty_tpl->tpl_vars['prev_product']->value||$_smarty_tpl->tpl_vars['next_product']->value) {?>
            <nav>
                <ol class="pager row">
                    <li class="col-xs-12<?php if ($_smarty_tpl->tpl_vars['next_product']->value) {?> col-sm-6<?php } else { ?> col-sm-12<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['prev_product']->value) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['prev_product']->value->url;?>
">← <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></a>
                        <?php }?>
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <?php if ($_smarty_tpl->tpl_vars['next_product']->value) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['next_product']->value->url;?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span> →</a>
                        <?php }?>
                    </li>
                </ol>
            </nav>
        <?php }?>
    </div>
</div>

        

<?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
    <div class="h2">
        <span data-language="product_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_recommended_products;?>
</span>
    </div>

    <div class="related clearfix">
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <div class="products_item no_padding col-sm-6 col-xl-3">
                <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['p']->value), 0);?>

            </div>
        <?php } ?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['related_posts']->value) {?>
    <div class="h2">
        <span data-language="product_related_post"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_related_post;?>
</span>
    </div>
    <div class="blog clearfix">
        <?php  $_smarty_tpl->tpl_vars['r_p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r_p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r_p']->key => $_smarty_tpl->tpl_vars['r_p']->value) {
$_smarty_tpl->tpl_vars['r_p']->_loop = true;
?>
            <div class="blog_item no_padding col-sm-6 col-lg-4 col-xl-3">

                
                <a class="blog_image" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['r_p']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['r_p']->value->url;?>
">
                    <?php if ($_smarty_tpl->tpl_vars['r_p']->value->image) {?>
                        <img class="blog_img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['r_p']->value->image,360,360,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
" />
                    <?php }?>
                </a>

                <div class="blog_content">
                    
                    <div class="h5">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['r_p']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['r_p']->value->url;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['r_p']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r_p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>

                    
                    <div class="blog_date">
                        <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['r_p']->value->date);?>
</span>
                    </div>

                    
                    <div class="blog_annotation"><?php echo $_smarty_tpl->tpl_vars['r_p']->value->annotation;?>
</div>
                </div>  
            </div>
        <?php } ?>
    </div>
<?php }?>



<script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "Product",
"name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
",
"image": "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
",
"description": "<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->annotation);?>
",
"mpn": "<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->sku) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->variant->sku;?>
<?php } else { ?>Не указано<?php }?>",

<?php if ($_smarty_tpl->tpl_vars['brand']->value->name) {?>

"brand": {
"@type": "Brand",
"name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
},

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->rating>0) {?>

"aggregateRating": {
"@type": "AggregateRating",
"ratingValue": "<?php echo sprintf('%.1f',$_smarty_tpl->tpl_vars['product']->value->rating);?>
",
"ratingCount": "<?php echo sprintf('%.0f',$_smarty_tpl->tpl_vars['product']->value->votes);?>
"
},

<?php }?>

"offers": {
"@type": "Offer",
"priceCurrency": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
",
"price": "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price,'',false);?>
",
"priceValidUntil": "<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
",
"itemCondition": "http://schema.org/UsedCondition",
"availability": "http://schema.org/InStock",
"seller": {
"@type": "Organization",
"name": "<?php echo $_smarty_tpl->tpl_vars['settings']->value->company_name;?>
"
}
}
}
</script>

<?php }} ?>
