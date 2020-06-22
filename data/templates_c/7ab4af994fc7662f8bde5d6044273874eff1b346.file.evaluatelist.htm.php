<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-05 05:51:23
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/wap/evaluatelist.htm" */ ?>
<?php /*%%SmartyHeaderCode:480851905ed96cdb8033f3-12575416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ab4af994fc7662f8bde5d6044273874eff1b346' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/wap/evaluatelist.htm',
      1 => 1533368294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '480851905ed96cdb8033f3-12575416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wap_style' => 0,
    'config' => 0,
    'rows' => 0,
    'v' => 0,
    'style' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ed96cdb830ca7_16846112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed96cdb830ca7_16846112')) {function content_5ed96cdb830ca7_16846112($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/header_cont.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/mui/css/mui.min.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/template/wap/css/style.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css" />
<div class="evaluate_box">

<!--列表-->
<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div class="evaluate_list">
 <a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>'evaluate','a'=>'show','id'=>$_smarty_tpl->tpl_vars['v']->value['id']),$_smarty_tpl);?>
">
<div class="evaluate_pic">  <img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"  onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/nopic.gif',2);" width="90"/></div>
<div class="evaluate_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</div>
<div class="evaluate_p"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</div>
<div class="evaluate_cs"><?php echo $_smarty_tpl->tpl_vars['v']->value['visits'];?>
人访问过<span class="evaluate_p_bth">开始测试 ></span></div>

</a>
</div>

<?php } ?>
 <div class="pages"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<?php } else { ?>
<div class="wap_member_nosearch">
	<div class="wap_member_no_tip"> 很抱歉,这个星球没有测评试卷呢！</div>
</div>
<?php }?>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/layer/layer.m.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['wap_style']->value;?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wapstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
