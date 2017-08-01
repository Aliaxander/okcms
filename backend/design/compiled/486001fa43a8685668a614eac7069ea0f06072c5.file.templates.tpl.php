<?php /* Smarty version Smarty-3.1.18, created on 2017-08-01 13:59:53
         compiled from "backend/design/html/templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3140886515980895948e408-79434274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486001fa43a8685668a614eac7069ea0f06072c5' => 
    array (
      0 => 'backend/design/html/templates.tpl',
      1 => 1501594615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3140886515980895948e408-79434274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_file' => 0,
    'btr' => 0,
    'theme' => 0,
    'message_error' => 0,
    'current_dir' => 0,
    'templates' => 0,
    't' => 0,
    'template_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_598089594b8b67_81555515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598089594b8b67_81555515')) {function content_598089594b8b67_81555515($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['template_file']->value) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['btr']->value->general_template)." ".((string)$_smarty_tpl->tpl_vars['template_file']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_theme, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_template, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>

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
 <?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>

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
                <div class="design_navigation">
                    <a class="design_navigation_link <?php if ($_smarty_tpl->tpl_vars['current_dir']->value=="html") {?>focus<?php }?>" href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'TemplatesAdmin','file'=>null,'email'=>null),$_smarty_tpl);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_template, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <a class="design_navigation_link <?php if ($_smarty_tpl->tpl_vars['current_dir']->value=="email") {?>focus<?php }?>" href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'TemplatesAdmin','file'=>null,'email'=>1),$_smarty_tpl);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_templates_email, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </div>
                <div class="design_container">
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                        <a class="design_tab <?php if ($_smarty_tpl->tpl_vars['template_file']->value==$_smarty_tpl->tpl_vars['t']->value) {?>focus<?php }?>" href='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'TemplatesAdmin','file'=>$_smarty_tpl->tpl_vars['t']->value),$_smarty_tpl);?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['template_file']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_template, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>
</div>

                <form>
                    <textarea id="template_content" name="template_content" style="width:700px;height:500px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_content']->value, ENT_QUOTES, 'UTF-8', true);?>
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
<?php }?>



<link rel="stylesheet" href="design/js/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="design/js/codemirror/theme/monokai.css">

<script src="design/js/codemirror/lib/codemirror.js"></script>

<script src="design/js/codemirror/mode/smarty/smarty.js"></script>
<script src="design/js/codemirror/mode/smartymixed/smartymixed.js"></script>
<script src="design/js/codemirror/mode/xml/xml.js"></script>
<script src="design/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="design/js/codemirror/mode/css/css.js"></script>
<script src="design/js/codemirror/mode/javascript/javascript.js"></script>

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
        .cm-s-monokai .cm-smarty.cm-tag{color: #ff008a;}
        .cm-s-monokai .cm-smarty.cm-string {color: #007000;}
        .cm-s-monokai .cm-smarty.cm-variable {color: #ff008a;}
        .cm-s-monokai .cm-smarty.cm-variable-2 {color: #ff008a;}
        .cm-s-monokai .cm-smarty.cm-variable-3 {color: #ff008a;}
        .cm-s-monokai .cm-smarty.cm-property {color: #ff008a;}
        .cm-s-monokai .cm-comment {color: #505050;}
        .cm-s-monokai .cm-smarty.cm-attribute {color: #ff20Fa;}
    </style>

<script>
    $(function() {
        // Сохранение кода аяксом
        function save() {
            $('.CodeMirror').css('background-color','#e0ffe0');
            content = editor.getValue();
            $.ajax({
                type: 'POST',
                url: 'ajax/save_template.php',
                data: {'content': content, 'theme':'<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
', 'template': '<?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>
', 'session_id': '<?php echo $_SESSION['id'];?>
'},
                success: function(data){
                    $('.CodeMirror').animate({'background-color': '#fff'},500);
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



    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("template_content"), {
            mode: "smartymixed",
            lineNumbers: true,
            styleActiveLine: true,
            matchBrackets: false,
            enterMode: 'keep',
            indentWithTabs: false,
            indentUnit: 2,
            tabMode: 'classic',
            theme : 'monokai'
        });
    </script>


<?php }} ?>
