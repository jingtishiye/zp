<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-03 15:56:21
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/default/index/site.htm" */ ?>
<?php /*%%SmartyHeaderCode:6594243415ed757a51a4ff8-03620451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338346031dc1e3f059958659bd6ac2b039a3566e' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/default/index/site.htm',
      1 => 1551767482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6594243415ed757a51a4ff8-03620451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'title' => 0,
    'hy_list' => 0,
    'siteinfo' => 0,
    'vurl' => 0,
    'city_list' => 0,
    'key' => 0,
    'list' => 0,
    'city' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ed757a51db250_68450935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed757a51db250_68450935')) {function content_5ed757a51db250_68450935($_smarty_tpl) {?><?php if (!is_callable('smarty_function_fz_list')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.fz_list.php';
if (!is_callable('smarty_function_hy_list')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.hy_list.php';
if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css"/>
	<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/site.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />

	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body class="body_bg">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="yun_content">
		<div class="current_Location icon"> 您当前的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
">首页</a> &gt; <span>全部城市</span> </div>
	</div>
	
	<div class="clear"></div>

	<div class="city_list_nav">
		<ul class="">
			<?php echo smarty_function_fz_list(array('fz_list'=>'city_list'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['hy_list']->value) {?>
			<li class="city_list_nav_cur" id="css_city"><a href="javascript:;" onClick="show_site('site_city')" class="">按城市</strong></a></li>
			<?php }?>

			<?php echo smarty_function_hy_list(array('hy_list'=>'hy_list'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['hy_list']->value) {?>
			<li class="" id="css_hy"><a href="javascript:;" onClick="show_site('site_hy')" class="">按行业</a></li>
			<?php }?>
 		</ul>
	</div>

	<div class="clear"></div>

	<div class="site_list_bg">
		<div class="yun_content">
			<div id='site_city'>
				<div class="city_come">
					<?php if ($_smarty_tpl->tpl_vars['siteinfo']->value['cityname']) {?>
						点击进入当前所在城市：<span><a href="<?php echo $_smarty_tpl->tpl_vars['vurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['cityname'];?>
</a></span> 
						<em class="site_city_tit_all">
							您也可以点击进入:  <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_indexdomain'];?>
" class="city_come_all"><?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['cityname'];?>
</a>
						</em>
					<?php } else { ?>
						点击进入:  <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_indexdomain'];?>
" class="city_come_all"><?php echo $_smarty_tpl->tpl_vars['siteinfo']->value['cityname'];?>
</a>
					<?php }?>
					
					
				</div>

				<div class="site_city_tit">按首字母选择</div>
				<?php echo smarty_function_fz_list(array('fz_list'=>'city_list'),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
					<div class="city_list">
						<div class="city_list_n"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</div>
						<div class="city_list_c">
							<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['city']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value['name'];?>
</a>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
			<div id='site_hy' class="none">
				<?php echo smarty_function_hy_list(array('hy_list'=>'hy_list'),$_smarty_tpl);?>

				<div class="site_city_hytit ">按行业选择</div>
				<div class="site_city_hy">
					<a href="javascript:;" onclick="setsite_hy('0');" class="site_city_hy_cur">所有行业</a>
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hy_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
						<a href="javascript:;" onclick="setsite_hy('<?php echo $_smarty_tpl->tpl_vars['list']->value['hy'];?>
');"><?php echo $_smarty_tpl->tpl_vars['list']->value['hyname'];?>
</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
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
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/lazyload.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
<!--[if IE 6]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/png.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
DD_belatedPNG.fix('.png,.index_logoin,.index_logoin_current,.nav_list,.fairs_Status,.fairs_Status,.logoin_qybj,.logoin_grbj,.logoin_Shadow_right,.logoin_Shadow_left,.whitebg,.micro_resume_fast,.nav_list_hover a,#bg,.left_comapply_cont li,.icon2,.nav_list .nav_list_hover em,.Fast_right_icon_l,.Fast_right_icon_r,.index_logoin_after,.logoin_after em,.logoin_after_su2,.logoin_after_su1,.hbg,.pagination li a,.firm_post_list,.Auction_tit,.yun_title,.Recommended_tit,.Com_Search_Results_r ul .All_post_h1_act,.sButtonBlock a.closeButton,.Comment_list_top,.icon,.yun_wap_m_bg,.micro_box');
<?php echo '</script'; ?>
>
<![endif]--> 
<?php echo '<script'; ?>
>
function setsite(cityid,name){
	$.post("<?php echo smarty_function_url(array('m'=>'ajax','c'=>'SiteCity'),$_smarty_tpl);?>
",{cityid:cityid,cityname:name},function(data){ 
		if(data!=""){
			window.location.href=data;
		}
	});
}
function setsite_hy(hyid){
	$.post("<?php echo smarty_function_url(array('m'=>'ajax','c'=>'SiteHy'),$_smarty_tpl);?>
",{hyid:hyid},function(data){
		if(data!=""){
			window.location.href=data;
		}
	});
}
function show_site(div_id){
	if(div_id=='site_city'){
		$("#site_city").show();
		$("#site_hy").hide();
		$("#css_hy").removeClass("city_list_nav_cur");
		$("#css_city").addClass("city_list_nav_cur");
	}else{
		$("#site_hy").show();
		$("#site_city").hide();
		$("#css_city").removeClass("city_list_nav_cur");
		$("#css_hy").addClass("city_list_nav_cur");
	}
}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
