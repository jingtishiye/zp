<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-17 17:30:57
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/admin/admin_advertise_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:15374733895ee9e2d1e54da2-52302445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d1e264b35e6e81a1fa122362d84e337a70ccdce' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/admin/admin_advertise_add.htm',
      1 => 1549938246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15374733895ee9e2d1e54da2-52302445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'info' => 0,
    'Dname' => 0,
    'class' => 0,
    'v' => 0,
    'lasturl' => 0,
    'pytoken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ee9e2d1e96e35_50317370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9e2d1e96e35_50317370')) {function content_5ee9e2d1e96e35_50317370($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function checkform(){
	if($("#ad_name").val()==""){ 
		parent.layer.msg('广告名称不能为空！', 2,8);
		return false;
	}
	if($("#ad_time_start").val()==""){ 
		parent.layer.msg('请填写广告生效时间！', 2,8);
		return false;
	}

  if($("#ad_time_end").val()==""){ 
    parent.layer.msg('请填写广告结束时间！', 2,8);
    return false;
  }

	var item = $('input[name="ad_type"]:checked').val();
	
	if(!item){
		 parent.layer.msg('请选择一种广告类型！', 2,8); return false;
	}else{ 
		if(item=="word"&&$("input[name=word_info]").val()==""){
			parent.layer.msg('请填写文字信息！', 2,8); return false;
		}
	}
  return true;
}
<?php echo '</script'; ?>
>
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
</style>
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp">
<div class="admin_new_tip">
<a href="javascript:;" class="admin_new_tip_close"></a>
<a href="javascript:;" class="admin_new_tip_open" style="display:none;"></a>
<div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
<div class="admin_new_tip_list_cont">
<div class="admin_new_tip_list">添加广告时，请正确选择分类和类型。广告分类由：“分站、主站”和广告形式（联盟广告、图片和flash）等个性化设置。</div>
</div>
</div>
<div class="clear"></div>
  <div class="tag_box mt10">

  <iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
  <form name="myform" target="supportiframe" action="<?php if (is_array($_smarty_tpl->tpl_vars['info']->value)) {?>index.php?m=advertise&c=modify_save<?php } else { ?>index.php?m=advertise&c=ad_saveadd<?php }?>" method="post" encType="multipart/form-data" onsubmit="return checkform();" class="layui-form">
    <table width="100%" class="table_form">
       <tr >  
       <tbody>
          <th bgcolor="#f0f6fb" colspan="2" ><span class="admin_bold"><?php if (is_array($_smarty_tpl->tpl_vars['info']->value)) {?>更新广告<?php } else { ?>添加广告<?php }?></span></th>
            </tbody>
            </tr >
      <tr >
        <th width="200">广告名称：</th>
        <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input class="input-text" id="ad_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['ad_name'];?>
" name="ad_name" size="30">
                   <input type="checkbox" name="target" value="2" <?php if ($_smarty_tpl->tpl_vars['info']->value['target']!=1) {?>checked<?php }?> title="新窗口打开">
                 </div>
               </div>
            </div>
        </td>
      </tr>
     <tr class="admin_table_trbg">
        <th width="200">使用范围：</th>
        <td><input type="button" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['did']) {
echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['info']->value['did']];
} else { ?>总站<?php }?>" class="city_news_but" onClick="add_site('<?php echo $_smarty_tpl->tpl_vars['info']->value['did'];?>
','<?php echo $_smarty_tpl->tpl_vars['Dname']->value[$_smarty_tpl->tpl_vars['info']->value['did']];?>
');">
        <input type="hidden" id="did" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['did'];?>
" name="did"></td>
      </tr> 
     	<tr>
        <th width="200">广告所属分类：</th>
        <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <select name="class_id" lay-filter="" id="class_id_val">
                      <option value="">请选择</option>
                      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['class_id']==$_smarty_tpl->tpl_vars['v']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['class_name'];?>
</option>
                      <?php } ?>
                    </select>
                 </div>
               </div>
            </div>
        </td>
      </tr> 
	  <tr class="admin_table_trbg">
        <th width="200">广告是否启用：</th>
        <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input name='is_open' value='1' type='radio' checked  title="启用">
                   <input name='is_open' value='0' <?php if ('0'==$_smarty_tpl->tpl_vars['info']->value['is_open']) {?>checked<?php }?> type='radio'  title="关闭">
                 </div>
               </div>
            </div>
		</td>
      </tr>
	  <tr>
        <th width="200">排序：</th>
        <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input class="input-text" type="text" id="sort" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
" name="sort" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
                 </div>
                 <div class="layui-form-mid layui-word-aux">越大越在前</div>
               </div>
            </div></td>
      </tr>
      <tr class="admin_table_trbg">
        <th width="200">广告有效期：</th>
        <td>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <div class="layui-input-inline">
                   <input class="layui-input input-text" type="text" id="ad_time_start" size="30" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['time_start'];?>
" name="ad_time_start" placeholder="生效时间" style="width:100px;"/>
                 </div>
                 <div class="layui-input-inline">
                   <input class="layui-input input-text" type="text" id="ad_time_end" size="30" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['time_end'];?>
" name="ad_time_end" placeholder="结束时间" style="width:100px;"/>
                 </div>
               </div>
            </div>
          </td>
      </tr>
		<tr>
			<th width="200">备注：</th>
			<td><textarea cols="50" rows="3" name="remark"  class="admin_comdit_textarea"><?php echo $_smarty_tpl->tpl_vars['info']->value['remark'];?>
</textarea></td>
		</tr>
     	<tr>
        <th width="200">广告类型：</th>
        <td colspan="2">
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <input type="radio" id="word_ad" name="ad_type" value="word" <?php if ($_smarty_tpl->tpl_vars['info']->value['ad_type']=="word") {?>checked<?php }?> title="文字广告">
                 <input value="pic" type="radio" id="pic_ad" name="ad_type" <?php if ($_smarty_tpl->tpl_vars['info']->value['ad_type']=="pic") {?>checked<?php }?> title="图片广告">
                 <input type="radio" value="flash" id="flash_ad" name="ad_type" <?php if ($_smarty_tpl->tpl_vars['info']->value['ad_type']=="flash") {?>checked<?php }?> title="FLASH广告">
                 <input type="radio" value="lianmeng" id="lianmeng_ad" name="ad_type" <?php if ($_smarty_tpl->tpl_vars['info']->value['ad_type']=="lianmeng") {?>checked<?php }?> title="联盟广告">
               </div>
            </div>
          </td>
      </tr>
      <tr> 
      <td class="admin_table_trbg" colspan="2" style="padding:0; background:none">
      <table width="100%" id="word" style="display:none">
    	<tr class="admin_table_trbg">
           <th width="200" >文字信息：</th>
        <td ><input class='input-text' id="word_info" name='word_info' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['word_info'];?>
'></td>
      </tr>
      <tr>
        <th>文字链接：</th>
        <td><input class='input-text' id="word_url" name='word_url' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['word_url'];?>
'><span class="admin_web_tip">外部链接请加上“http://”</span></td>
      </tr>
      </table>
	   </td>
      </tr>
	  <tr>
      <td colspan="2" style="padding:0; background:none">
      <table id="pic" style="display:none;" width="100%">
      <tr class="admin_table_trbg">
        <th width="200" >图片地址：</th>
        <td  id='typeid'>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <input class='input-text' type='text' id='upload_url' name='pic_url' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['pic_url'];?>
'>
				 <div id="pic_div" class="yun_file_box_gg" style="display:none;">
				 <button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'ad_url',imgid: 'imgicon',parentid:'imgparent'}">上传图片</button>
				<input type="hidden" id="layupload_type" value="2"/>
				<input type="hidden" id="upload_path" value="pimg"/>
				<input type="hidden" id='upload_pic_url' name="" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pic_url'];?>
"/>
				</div>
				 
                 <input id='upload' checked type='radio' name='upload' title="远程地址" value="upload">
                 <input id='upload_pic' type='radio' name='upload' title="本地上传" value="upload_pic">
               </div>
            </div>
          </td>
      </tr>
	  <tr class="none" id="imgparent">
        <th width="200">图片：</th>
        <td><img id="imgicon" src="" width="200"></td>
      </tr>
      <tr>
        <th width="200">图片链接：</th>
        <td><input class='input-text' id="pic_src" name='pic_src' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['pic_src'];?>
' ><span class="admin_web_tip">外部链接请加上“http://”</span></td>
      </tr>
      <tr class="admin_table_trbg">
        <th width="200">图片描述：</th>
        <td><input class='input-text' id="pic_content" name='pic_content' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['pic_content'];?>
' ><span class="admin_web_tip">例如：公司名称或图片介绍，可留空</span></td>
      </tr>
      <tr>
        <th width="200">图片宽度：</th>
        <td><input class='input-text' id="pic_width" size='8'onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" name='pic_width' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['pic_width'];?>
' style="width:90px;"> px(像素) </td>
      </tr>
      <tr>
        <th width="200">图片高度：</th>
        <td><input class='input-text' id="pic_height" size='8' onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" name='pic_height' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['pic_height'];?>
' style="width:90px;"> px(像素)</td>
      </tr>
       </table>
	   <table id="flash" style="display:none;" width="100%">
		   <tr class="admin_table_trbg">
			<th width="200">FLASH地址：</th>
			<td id='flashid'>
            <div class="layui-form-item">
              <div class="layui-input-block">
                 <input class='input-text' id="flash_url"  name='flash_url' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['flash_url'];?>
'>
				 <div id="flash_div" class="yun_file_box" style="display:none;">
				上传falsh
				<input  type="file" size="45" id='upload_flash_url' name='flash_url' class="yun_file_bth" >
				</div>
                 <input type='radio' id='flash' checked name='flash' title="远程地址" value="flash">
                 <input type='radio' id='upload_flash' name='flash' title="本地上传" value="upload_flash">
               </div>
            </div>
             </td>
		  </tr>
		  <tr>
			  <th >FLASH宽度：</th>
			<td><input class='input-text' id="flash_width" name='flash_width' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['flash_width'];?>
'> px(像素)
            </td>
      </tr>
      		  <tr>
			  <th >FLASH高度：</th>
			<td><input class='input-text' id="flash_height" name='flash_height' value='<?php echo $_smarty_tpl->tpl_vars['info']->value['flash_height'];?>
'> px(像素)</td> 
      </tr>
      </table>
      <table id="lianmeng" style="display:none;" width="100%">
		   <tr class="admin_table_trbg">
			<th width="200">联盟广告代码：</th>
			<td id='lianmengid'>
            <textarea class="admin_comdit_textarea" cols="50" rows="3" id="lianmeng_url"  name='lianmeng_url'><?php echo $_smarty_tpl->tpl_vars['info']->value['lianmeng_url'];?>
</textarea>
             </td>
		  </tr>
      </table>
      </td>
      </tr>
      <?php if (is_array($_smarty_tpl->tpl_vars['info']->value)) {?>
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
      <input type="hidden" name="lasturl" value="<?php echo $_smarty_tpl->tpl_vars['lasturl']->value;?>
">
      <?php }?>
      <tr class="admin_table_trbg">
      <td align="left">&nbsp;</td>
        <td align="left" >
        <input type="hidden" name="pytoken" value="<?php echo $_smarty_tpl->tpl_vars['pytoken']->value;?>
">
        <input class="layui-btn layui-btn-normal" type="submit" name="submit" value="&nbsp;提  交&nbsp;" />
        <input class="layui-btn layui-btn-normal" type="reset" name="reset" value="&nbsp;重 置 &nbsp;" /></td>
      </tr>
    </table>
  </form>
</div></div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['adminstyle']->value)."/checkdomain.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
>

layui.use(['layer', 'form','laydate'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,laydate = layui.laydate
    ,$ = layui.$;

	laydate.render({
		elem: '#ad_time_start'
 	});

  laydate.render({
    elem: '#ad_time_end'
   });

	$("input[name='ad_type']").each(function(){
		$(this).next().click(function(){
			var type = $(this).prev().val();  
			if(type=="word"){
				$("#word").show();
				$("#pic").hide();
				$("#flash").hide();
				$("#lianmeng").hide();
			}else if(type=="pic"){
				$("#word").hide();
				$("#pic").show();
				$("#flash").hide();
				$("#lianmeng").hide();
			}else if(type=="flash"){
				$("#word").hide();
				$("#pic").hide();
				$("#flash").show();
				$("#lianmeng").hide();
			}else if(type=="lianmeng"){
				$("#word").hide();
				$("#pic").hide();
				$("#flash").hide();
				$("#lianmeng").show();
			}
		});
	});
	$("input[name='upload']").each(function(){
		$(this).next().click(function(){
			var type = $(this).prev().val();  
			if(type=="upload"){
				$("input[name=upload]").removeAttr('checked');
				$("input[name=pic_url]").removeAttr('name');
				$("#upload").attr('checked');
				$("#upload_url").attr('name','ad_url');
				$("#pic_div").hide();
				$("#upload_url").show();
			}else if(type=="upload_pic"){
				$("input[name=upload]").removeAttr('checked');
				$("input[name=pic_url]").removeAttr('name');
				$("#upload_pic").attr('checked');
				$("#upload_pic_url").attr('name','ad_url');
				$("#pic_div").show();
				$("#upload_url").hide();
			}
		});
	});
	$("input[name='flash']").each(function(){
		$(this).next().click(function(){
			var type = $(this).prev().val();  
			if(type=="flash"){
				$("input[name=flash]").removeAttr('checked');
				$("input[name=flash_url]").removeAttr('name');
				$("#flash").attr('checked');
				$("#flash_url").attr('name','flash_url');
				$("#flash_div").hide();
				$("#flash_url").show();
			}else if(type=="upload_flash"){
				$("input[name=flash]").removeAttr('checked');
				$("input[name=flash_url]").removeAttr('name');
				$("#upload_flash").attr('checked');
				$("#upload_flash_url").attr('name','flash_url');
				$("#flash_div").show();
				$("#flash_url").hide();
			}
		});
	});
	$(function(){
		if('<?php echo $_smarty_tpl->tpl_vars['info']->value['ad_type'];?>
'){
			$("#<?php echo $_smarty_tpl->tpl_vars['info']->value['ad_type'];?>
").show();
		}
	});
});
var weburl = '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
> 
</body>
</html><?php }} ?>
