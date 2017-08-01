<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 13:56:57
         compiled from "backend/design/html/theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1109566149598088a96d2cf5-10562289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68ea18b6a51591c4c7e3cf0077238ed75448142d' => 
    array (
      0 => 'backend/design/html/theme.tpl',
      1 => 1501594615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109566149598088a96d2cf5-10562289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
    'btr' => 0,
    'settings' => 0,
    'message_error' => 0,
    'themes_dir' => 0,
    'themes' => 0,
    't' => 0,
    'root_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_598088a9708e67_34586921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598088a9708e67_34586921')) {function content_598088a9708e67_34586921($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/okcms/Smarty/libs/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['theme']->value->name) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['btr']->value->general_theme)." ".((string)$_smarty_tpl->tpl_vars['theme']->value->name), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_current, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>

            </div>
            <div class="box_btn_heading">
                <a class="fn_clone_theme btn btn_small btn-info" href="/">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_copy, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
</span>
                </a>
            </div>
         </div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-12 float-xs-right"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['theme']->value->locked) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_close, ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>
        </div>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='permissions') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_permissionse, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['themes_dir']->value;?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='name_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                <input type="hidden" name="action">
                <input type="hidden" name="theme">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="heading_box">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_themes, ENT_QUOTES, 'UTF-8', true);?>

                            <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                                <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="toggle_body_wrap fn_card on">
                            <div class="row">
                                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['t']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['t']->index++;
 $_smarty_tpl->tpl_vars['t']->first = $_smarty_tpl->tpl_vars['t']->index === 0;
?>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="banner_card">
                                            <div class="banner_card_header img_bnr_c_head">
                                                <input type="text" class="hidden" name="old_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <div class="form-group col-lg-9 col-md-8 px-0 fn_rename_value hidden mb-0">
                                                    <input type="text" class="form-control" name="new_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                                <span class="theme_active_span font-weight-bold"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true),20,'...');?>
 <?php if ($_smarty_tpl->tpl_vars['t']->value->name==$_smarty_tpl->tpl_vars['theme']->value->name) {?><span class="text_success">- <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_current_item, ENT_QUOTES, 'UTF-8', true);?>
 </span><?php }?></span>
                                                <?php if (!$_smarty_tpl->tpl_vars['t']->value->locked) {?>
                                                    <i class="fa fa-pencil fn_rename_theme rename_theme p-h" data-old_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></i>
                                                <?php }?>

                                                <?php if (!$_smarty_tpl->tpl_vars['t']->first) {?>
                                                    <button data-theme_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close float-xs-right fn_remove_theme" data-toggle="modal" data-target="#fn_delete_theme">
                                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                                    </button>
                                                <?php }?>
                                            </div>
                                            <div class="banner_card_block">
                                                <div class="theme_block_image" style="position:relative;">
                                                    <img class="<?php if ($_smarty_tpl->tpl_vars['theme']->value->name!=$_smarty_tpl->tpl_vars['t']->value->name) {?>gray_filter<?php }?>" width="" src='<?php echo $_smarty_tpl->tpl_vars['root_dir']->value;?>
../design/<?php echo $_smarty_tpl->tpl_vars['t']->value->name;?>
/preview.png'>
                                                    <?php if ($_smarty_tpl->tpl_vars['theme']->value->name!=$_smarty_tpl->tpl_vars['t']->value->name) {?>
                                                        <div style="position:absolute; bottom:0px; right:0px;" class="fn_set_theme btn btn_small btn_blue" data-set_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" name="save" class="btn btn_small btn_blue fn_chek_all float-md-right ">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="fn_delete_theme" class="modal fade show" role="document">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header">
                <div class="h5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->theme_perform, ENT_QUOTES, 'UTF-8', true);?>
</div>
            </div>
            <div class="modal-body">
                <button type="submit" class="btn btn-sm btn-success fn_submit_delete"><i class="fa fa-dot-circle-o"></i> Submit</button>
                <button type="button" class="btn btn-default fn_dismiss_delete" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    

    $(function() {

        $('.fn_rename_theme').on('click',function(){
            $(this).parent().find('.fn_rename_value').toggleClass('hidden');
            $(this).prev().toggleClass('hidden');
            $(this).parent().find('.fn_set_theme').toggleClass('opacity_toggle');
            $(this).parent().find('.fn_rename_value > input').val($(this).data('old_name'))
        });
        $('.fn_set_theme').on('click',function(){
            $("input[name=action]").val('set_main_theme');
            $("input[name=theme]").val($(this).data('set_name'));
            $("form").submit();
        });
        // Клонировать текущую тему
        $('.fn_clone_theme').on('click',function(e){
            e.preventDefault();
            $("input[name=action]").val('clone_theme');
            $("form").submit();
        });

        $(".fn_remove_theme").on("click", function () {
            action = "delete_theme";
            theme_name = $(this).data("theme_name");
        });
        $(".fn_submit_delete").on("click",function () {
            $("form input[name=action]").val(action);
            $("form input[name=theme]").val(theme_name);
            $("form").submit();
        });
        $(".fn_dismiss_delete").on("click",function () {
            $("form input[name=action]").val("");
            $("form input[name=theme]").val("");
        });

    });
    
</script>
<?php }} ?>
