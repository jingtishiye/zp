<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-18 01:28:19
         compiled from "/www/wwwroot/zp.canyinyunfu.com//app/template/wap/header_cont.htm" */ ?>
<?php /*%%SmartyHeaderCode:10714406885eea52b3749ca9-76350536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c86dfec8713b3d041bb856bf5538a9937bff97f' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com//app/template/wap/header_cont.htm',
      1 => 1550192912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10714406885eea52b3749ca9-76350536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'config' => 0,
    'wap_style' => 0,
    'fr' => 0,
    'backurl' => 0,
    'topplaceholder' => 0,
    'config_wapdomain' => 0,
    'headertitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eea52b3756673_01198369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eea52b3756673_01198369')) {function content_5eea52b3756673_01198369($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta http-equiv="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
,wap" />
        <meta http-equiv="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width" initial-scale="1" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="format-detection" content="telephone=no,email=no" />
        <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.picker.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/js/mui/css/mui.poppicker.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/job.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
        <?php echo '<script'; ?>
>
            weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";
        <?php echo '</script'; ?>
>
    </head>

    <body>
		<?php if (!$_smarty_tpl->tpl_vars['fr']->value) {?>
        <div class="body_wap">
            <header class="header_h">
                <div class="header_fixed">
                    <div class="header">
                        <div class="header_bg">
                            <a class="hd-lbtn <?php if (!$_smarty_tpl->tpl_vars['backurl']->value) {?>mui-action-back<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['backurl']->value) {
echo $_smarty_tpl->tpl_vars['backurl']->value;
} else { ?>javascript:history.back();<?php }?>"><i class="header_top_l"></i></a>
                            <div class="header_h1">
                                <?php if ($_smarty_tpl->tpl_vars['topplaceholder']->value) {?>
                                <div class="header_fx_search">
                                    
                                    <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php">
                                        <input type="hidden" name="c" value="<?php echo $_GET['c'];?>
" />
                                        <div class="formFiled">
                                            <input type="text" value="<?php echo $_GET['keyword'];?>
" name="keyword" class="input_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['topplaceholder']->value;?>
">
                                        <span class="formFiled_bth">    <input type="submit" value=" " class=" "></span>
                                         </div>
                                    </form>

                                </div>
                                <?php } else { ?>
                                <div class="header_p_z"> <?php echo $_smarty_tpl->tpl_vars['headertitle']->value;?>
</div>
                                <?php }?>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
        </div>
		<?php }?><?php }} ?>
