<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 14:05:38
         compiled from "backend/design/html/styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184346650359808ab242cd40-48489552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5819af919eff1fb09a97459388ba4c1d6bc99f9a' => 
    array (
      0 => 'backend/design/html/styles.tpl',
      1 => 1501594615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184346650359808ab242cd40-48489552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style_file' => 0,
    'btr' => 0,
    'theme' => 0,
    'message_error' => 0,
    'styles' => 0,
    's' => 0,
    'style_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59808ab244ec31_30355070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59808ab244ec31_30355070')) {function content_59808ab244ec31_30355070($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['style_file']->value) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['btr']->value->styles_styles)." ".((string)$_smarty_tpl->tpl_vars['style_file']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<link rel="stylesheet" href="design/js/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="design/js/codemirror/theme/monokai.css">
<script src="design/js/codemirror/lib/codemirror.js"></script>

<script src="design/js/codemirror/mode/css/css.js"></script>
<script src="design/js/codemirror/addon/selection/active-line.js"></script>
 

<style type="text/css">

.CodeMirror{
    font-family:'Courier New';
    margin-bottom:10px;
    border:1px solid #c0c0c0;
    background-color: #ffffff;
    height: auto;
    min-height: 100px;
    width:100%;
}
.CodeMirror-scroll
{
    overflow-y: hidden;
    overflow-x: auto;
}
</style>

<script>
$(function() {    
    // Сохранение кода аяксом
    function save() {
        $('.CodeMirror').css('background-color','#e0ffe0');
        content = editor.getValue();
        $.ajax({
            type: 'POST',
            url: 'ajax/save_style.php',
            data: {'content': content, 'theme':'<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
', 'style': '<?php echo $_smarty_tpl->tpl_vars['style_file']->value;?>
', 'session_id': '<?php echo $_SESSION['id'];?>
'},
            success: function(data){
                $('.CodeMirror').animate({'background-color': '#ffffff'});
                $('.CodeMirror').animate({'background-color': '#272822'},500);
            },
            dataType: 'json'
        });
    }
    // Нажали кнопку Сохранить
    $('.fn_save').on('click',function(){
        save();
    });
});
</script>



<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_theme, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->styles_style, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['style_file']->value;?>

            </div>
        </div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-12 float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='permissions') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_permission, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['style_file']->value;?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='theme_locked') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_protected, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="boxed boxed_attention">
            <div class="">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_design_message, ENT_QUOTES, 'UTF-8', true);?>

                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_design_message2, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="boxed match fn_toggle_wrap tabs">
            <div class="design_tabs">
                <div class="design_container">
                    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['styles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                        <a class="design_tab <?php if ($_smarty_tpl->tpl_vars['style_file']->value==$_smarty_tpl->tpl_vars['s']->value) {?>focus<?php }?>" href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'StylesAdmin','file'=>$_smarty_tpl->tpl_vars['s']->value),$_smarty_tpl);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['style_file']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->styles_styles, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style_file']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                 <form>
                    <textarea id="content" name="content" style="width:100%;height:500px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style_content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </form>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" name="save" class="fn_save btn btn_small btn_blue float-md-right">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
    
    <script>

    var editor = CodeMirror.fromTextArea(document.getElementById("content"), {
            mode: "css",
            lineNumbers: true,
            styleActiveLine: true,
            matchBrackets: false,
            enterMode: 'keep',
            indentWithTabs: false,
            indentUnit: 1,
            tabMode: 'classic',
            theme : 'monokai'
        });
    </script>
    

<?php }?>
<?php }} ?>
