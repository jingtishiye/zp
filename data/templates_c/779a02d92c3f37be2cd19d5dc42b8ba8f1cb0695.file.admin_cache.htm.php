<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-03 13:48:32
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/admin/admin_cache.htm" */ ?>
<?php /*%%SmartyHeaderCode:18001787875ed739b0bb4db8-51259486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '779a02d92c3f37be2cd19d5dc42b8ba8f1cb0695' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/admin/admin_cache.htm',
      1 => 1591163271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18001787875ed739b0bb4db8-51259486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'pytoken' => 0,
    'type' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ed739b0bd82f8_43192879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed739b0bd82f8_43192879')) {function content_5ed739b0bd82f8_43192879($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link href="images/reset.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/system.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<link href="images/table_form.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/admin_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp"> 
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示(web1)</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">生成请确保/plus,/cache目录有可写权限，否则无法生成。生成所有的类别，时间较长，建议分批更新。</div>
</div>
</div>
<div class="clear"></div>
<div style="height:10px;"></div>


<div class="main_tag" >
<div class="tag_box">
<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
    <form action="index.php?m=cache&c=cache" target="supportiframe" method="post" class="layui-form">
<table width="100%" class="table_form">
    <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
      <tr>
    	<td class="ud">
        <div class="layui-form-item">
        	<div class="layui-input-block"> 
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <input type="checkbox" class="checkbox" name="cache[]"  title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" id="cache_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"/>
            <?php } ?></div>
          </div>
	   </td>
      </tr>
    <tr>
    	<td class="ud" align="center">
			<input class="layui-btn layui-btn-normal" type="button" name="select" value="全选"/>&nbsp;&nbsp;
            <input class="layui-btn layui-btn-normal" type="submit" name="madeall" value="更新"/>&nbsp;&nbsp;
        </td>
      </tr>
  </table>
 </form>
  </div></div></div>
  <div style="clear:both"></div>

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 language="javascript">
    var checked_all = false;
    
    layui.use(['form'], function(){});//end layui.use()

    $(document).ready(function(){
	    $("input[name=select]").click(function(){
	        var codewebarr = "";
	        checked_all = !checked_all;
			$(".checkbox").attr("checked",checked_all);

            layui.use(['form'], function(){
                var form = layui.form
                    ,$ = layui.$;
                form.render();
            });
	    })
	    $("input[name=madeall]").click(function(){
		    var codewebarr="";
		    $(".checkbox:checked").each(function(){
			    if(codewebarr==""){codewebarr=1;}else{codewebarr++;}
		    });
		    if(!codewebarr){
			    parent.layer.alert('至少选择一项', 8);
			    return false;
		    }
	    })
    })
   <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
    
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
