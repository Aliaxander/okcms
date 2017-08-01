<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 18:26:57
         compiled from "backend/design/html/pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63777978659809dc11e9c89-37075769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ab98a75e8563019917af29062109c484d102128' => 
    array (
      0 => 'backend/design/html/pages.tpl',
      1 => 1501594615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63777978659809dc11e9c89-37075769',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'btr' => 0,
    'pages' => 0,
    'page' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59809dc1211819_92379230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59809dc1211819_92379230')) {function content_59809dc1211819_92379230($_smarty_tpl) {?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_tmp1, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pages_site, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PageAdmin'),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pages_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="list_form" method="post" class="fn_form_list">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="pages_wrap okay_list">
                        
                        <div class="okay_list_head">
                            <div class="okay_list_boding okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_page_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pages_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_pages_group"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_setting okay_list_pages_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>

                        
                        <div id="sortable" class="okay_list_body sortable">
                            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row">
                                        <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->position;?>
">

                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                        </div>

                                        <div class="okay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"></label>
                                        </div>

                                        <div class="okay_list_boding okay_list_page_name">
                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PageAdmin','id'=>$_smarty_tpl->tpl_vars['page']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                        </div>

                                        <div class="okay_list_boding okay_list_pages_group">
                                            <select name="menu_id[<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
]" class="selectpicker" data-page_id="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
">
                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['page']->value->menu_id==1) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pages_main_menu, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['page']->value->menu_id==2) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pages_other, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            </select>
                                        </div>

                                        <div class="okay_list_boding okay_list_status">
                                            
                                            <label class="switch switch-default ">
                                                <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['page']->value->visible) {?>fn_active_class<?php }?>" data-module="page" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['page']->value->visible) {?>checked=""<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>

                                        <div class="okay_list_setting okay_list_pages_setting">
                                            
                                            <a href="../<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_view, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'icon_desktop'), 0);?>

                                            </a>
                                        </div>

                                        <div class="okay_list_boding okay_list_close">
                                            
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pages_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        
                        <div class="okay_list_footer fn_action_block">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_boding okay_list_drag"></div>
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker">
                                        <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn_small btn_blue">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pages_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }} ?>
