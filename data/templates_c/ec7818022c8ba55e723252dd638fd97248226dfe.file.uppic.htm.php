<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-20 15:28:35
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/uppic.htm" */ ?>
<?php /*%%SmartyHeaderCode:6418135235eedbaa31db170-65881886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec7818022c8ba55e723252dd638fd97248226dfe' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/uppic.htm',
      1 => 1549938232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6418135235eedbaa31db170-65881886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eedbaa320f1c1_66740478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eedbaa320f1c1_66740478')) {function content_5eedbaa320f1c1_66740478($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/imgareaselect.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/jquery.imgareaselect.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/imgareaselect/ajaxfileupload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<div class="header_main">
<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
             <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">账号设置</span> <i class="member_right_h1_icon user_bg"></i></div>
			     <div class="clear"></div>
	 <div class="job_list_tit"> <ul class="">
	<li><a href="index.php?c=info">基本信息</a><i class="left_sidebar_leftmune_icon"></i></li>
      <li><a href="index.php?c=passwd">账号安全</a></li>
      <li><a href="index.php?c=binding">绑定授权</a></li>
      <li class="job_list_tit_cur"><a href="index.php?c=uppic">上传照片 </a></li>
	</ul></div>
            <div class="resume_box_list">
              <div class="uppic_msg">提示：有时因页面缓存问题，上传后照片不能及时更新，请刷新页面即可 </div>
            <div class="clear"></div>
            <div class="uppic_left">
            <div class="uppic_tip">方式一：选择本地照片，上传编辑自己的头像</div>
            <div class="uppic_tip_bth">
             <a class="uppic_tip_bthupload" href="javascript:;">选择照片</a>
             <input id="image" class="uppic_tip_bthfile" type="file" name="image" onchange="ajaxfile();" ></div>
             <div class="uppic_tip_gs">最大<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M,支持<?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
格式</div>            
             <div class="search_con">
                  
                    <div class="clear"></div>
                    <div class="oppic_img_cont">
						<div class="uppic_tit">
							头像预览
							<?php if ($_smarty_tpl->tpl_vars['row']->value['photo_status']=='1') {?>
								<font color="#f00">审核中</font>
							<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['photo_status']=='2') {?>
								<font color="#f00">未通过</font>
							<?php }?>
						</div>
                        <div class="oppic_img_big">
                            <div class="oppic_img_big_img">
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==1) {?>
                            <img src=".<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" width='120' height='120' />
                            <?php } else { ?>
                            <img src=".<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);" width='120' height='120' />
                            <?php }?>
                            </div>
                            <div class="oppic_img_big_p">大头像120×120</div>
                        </div>
                        <div class="oppic_img_sim">
                            <div class="oppic_img_sim_img">
                             <?php if ($_smarty_tpl->tpl_vars['row']->value['sex']==1) {?>
                          
                              <img src=".<?php echo $_smarty_tpl->tpl_vars['row']->value['resume_photo'];?>
" width='50' height='50' onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" />
                              
                             <?php } else { ?>
                             <img src=".<?php echo $_smarty_tpl->tpl_vars['row']->value['resume_photo'];?>
" width='50' height='50' onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_iconv'];?>
',2);" />
                            <?php }?>
                            </div>
                            <div class="oppic_img_sim_img_p">
                                小头像<br />
                                50×50
                            </div>
                        </div>
                    </div>
            </div>
              <div class="clear"></div>
					<div class="uppic_flash" style="display:none;width:580px" id='uppic_flash'> 
					<div class="uppic_big_zx">
						<img src="" style="float: left; margin-right: 10px;" id="thumbnail" />
					   </div>
					   <div style="width:150px; float:left">
						<div id="preview2"  class="uppic_previ2">
							<img id="preview2_img"  src="" style="position: relative;"/>
						</div>
						<div id="preview1" class="uppic_previ1">
							<img id="preview1_img" src="" style="position: relative;"/>
						   
						</div>

						
					</div>      
					<div class="uppic_pb">
					<form name="form1" id="form1">
						<input name="sizeit" id="sizeit" type="submit" value="保存头像"  class="uppic_pb_bth"/>	
					</form>
					</div> 
					</div>
            </div>
                <div class="uppic_right">
            			<div class="uppic_right_tit">方式二：手机拍照上传</div>
            			<div class="uppic_ewm">
            			 <img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>3),$_smarty_tpl);?>
" alt="手机扫码拍照上传" width="130" height="130" />
            			 </div>
            			<div class="uppic_ewm_p"> 扫描二维码 </div>
                   	<div class="">  手机拍照上传后，请刷新此页面 </div>
            		</div>                  
              </div>
            </div>
        </div>
    </div>
</div> 
<?php echo '<script'; ?>
>
function ajaxfile() {
	if($("#image").val() != '') {
		layer.load('图片上传中，请稍候....', 0);
		$.ajaxFileUpload({
			url: 'index.php?c=uppic&act=ajaxfileupload',
			secureuri: false, 
			fileElementId: 'image', 
			dataType: 'json', 
			success: function (data, status){  
				layer.closeAll('loading');
				if (data.s_thumb) {
					layer.msg(data.s_thumb, 2, 8);
				} else {
					hideLoading(data.url);
				}
		   }
		})
	}
}
var size1={
	width:120,
	height:120
}
$('#preview1').width(size1.width);
$('#preview1').height(size1.height);
var size2={
	width:50,
	height:50
}	
$('#preview2').width(size2.width);
$('#preview2').height(size2.height);
function hideLoading(pic) {
	$("#thumbnail").attr({ 'src': pic });
	$("#preview1_img").attr({ 'src': pic });
	$("#preview2_img").attr({ 'src': pic });
	$('#uppic_flash').show();
	var ias = $('#thumbnail')
	.imgAreaSelect({
		aspectRatio: '1:1', 
		onSelectChange: lis, 
		onInit:function(){
			var _opt=ias.getOptions();
			render($('#preview1_img'),$("#thumbnail")[0],{
				height:_opt.y2-_opt.y1,
				width:_opt.x2-_opt.x1,
				x1:_opt.x1,
				x2:_opt.x2,
				y1:_opt.y1,
				y2:_opt.y2
			},size1);
			render($('#preview2_img'), $("#thumbnail")[0], {
				height: _opt.y2 - _opt.y1,
				width: _opt.x2 - _opt.x1,
				x1: _opt.x1,
				x2: _opt.x2,
				y1: _opt.y1,
				y2: _opt.y2
			}, size2);
		},
		instance:true,
		keys:true,
		x1:50, 
		y1:50,
		x2:size1.width,
		y2:size1.height
	});
}
function lis(img, sel) {
	render($('#preview1 img'), img, sel, size1);
	render($('#preview2 img'), img, sel, size2);
}
function render(target, img, sel, size) {
	var scale = size.width / sel.width;
	target.css({
		width: Math.round(scale * $(img).width()),
		height: Math.round(scale * $(img).height())
	});
	target.css({
		marginLeft: '-' + Math.round(scale * sel.x1) + 'px',
		marginTop: '-' + Math.round(scale * sel.y1) + 'px'
	});
	target.data('scale', scale);
	target.data('width', sel.width);
	target.data('height', sel.height);
	target.data('x', sel.x1);
	target.data('y', sel.y1);
}

$(function () {
	$('#form1').submit(function (e) {
		e.preventDefault();
		e.stopPropagation();
		var preview1 = $('#preview1 img');
		var preview2 = $('#preview2 img');

		$.post("index.php?c=uppic&act=savethumb", {
			sizeit: true,
			count: 2,
		 
			width1: preview1.data('width'),
			height1: preview1.data('height'),
			x1: preview1.data('x'),
			y1: preview1.data('y'),
			img1: $('#preview1_img').attr('src'),
			scale1: preview1.data('scale'),
			 
			width2: preview2.data('width'),
			height2: preview2.data('height'),
			x2: preview2.data('x'),
			y2: preview2.data('y'),
			img2: $('#preview2_img').attr('src'),
			scale2: preview2.data('scale')
		}, function (res) {
			if (res == 1) {
				layer.msg('头像设置成功！', 2, 9,function(){location.reload();}); 
			} else {
				layer.msg('头像设置失败！', 2, 8,function(){location.reload();}); 
			}
		});
	});
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
