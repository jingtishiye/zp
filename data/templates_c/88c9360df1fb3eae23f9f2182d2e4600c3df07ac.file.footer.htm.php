<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-17 17:30:34
         compiled from "/www/wwwroot/zp.canyinyunfu.com//app/template/default/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:18211383205ee9e2ba943f46-57638501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c9360df1fb3eae23f9f2182d2e4600c3df07ac' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com//app/template/default/footer.htm',
      1 => 1558935718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18211383205ee9e2ba943f46-57638501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'desc' => 0,
    'desclist' => 0,
    'lit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ee9e2ba951329_14650994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9e2ba951329_14650994')) {function content_5ee9e2ba951329_14650994($_smarty_tpl) {?><?php if (!is_callable('smarty_function_desc')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.desc.php';
if (!is_callable('smarty_function_tongji')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.tongji.php';
if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_baidu')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.baidu.php';
?><?php echo smarty_function_desc(array('assign_name'=>'desc'),$_smarty_tpl);?>

<div class="hp_foot fl">
<div class="w1000">
     <div class="hp_foot_wt fl">
          <div class="hp_foot_pho fl">
          <dl>
              <dt></dt>
              <dd>客服服务热线</dd>
              <dd class="hp_foot_pho_nmb"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</dd>
              <dd><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_worktime'];?>
</dd>
          </dl>
     </div>
     <div class="hp_foot_wh fl">
     <i class="hp_foot_wh_lline"></i>
     <i class="hp_foot_wh_rline"></i>
          <?php  $_smarty_tpl->tpl_vars['desclist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['desclist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['desc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['desclist']->key => $_smarty_tpl->tpl_vars['desclist']->value) {
$_smarty_tpl->tpl_vars['desclist']->_loop = true;
?>
          <dl>
              <dt><?php echo $_smarty_tpl->tpl_vars['desclist']->value['name'];?>
</dt>
              <dd>
                  <ul>
                      <?php  $_smarty_tpl->tpl_vars['lit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['desclist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lit']->key => $_smarty_tpl->tpl_vars['lit']->value) {
$_smarty_tpl->tpl_vars['lit']->_loop = true;
?>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['lit']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['lit']->value['name'];?>
</a></li>
                      <?php } ?>
                  </ul>
              </dd>
          </dl>
          <?php } ?>
     </div>
     </div>

     <div class="hp_foot_wx fr">
          <dl>
              <dt><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
"  width="105" height="105"></dt>
              <dd>微信公众号</dd>
          </dl>
          
     </div>  <div class="hp_foot_wx fr">
          <dl>
              <dt><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wap_qcode'];?>
"  width="105" height="105"></dt>
              <dd>手机浏览</dd>
          </dl>
          
     </div>
</div>
<div class="clear"></div>
     <div class="hp_foot_bt">
     <div class="hp_foot_bt_c">
          <p><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];?>
 <i class="hp_foot_bt_cr"><a href='http://www.miitbeian.gov.cn' target='_blank'><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
</a></i></p>
          <p>地址：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
 EMAIL：<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];
echo smarty_function_tongji(array(),$_smarty_tpl);?>
</p>
     </div> </div>
</div>
<div class="go-top dn" id="go-top">
    <a href="javascript:;" class="uc-2vm"></a>
	<div class="uc-2vm-pop dn">
		<h2 class="title-2wm">用微信扫一扫</h2>
		<div class="logo-2wm-box">
			<img  src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
"   width="120" height="120">
		</div>
	</div>
    <a href="<?php echo smarty_function_url(array('m'=>'advice'),$_smarty_tpl);?>
" target="_blank" class="feedback"></a>
    <a href="javascript:;" class="go"></a>
</div>
<div class="clear"></div>
<div id="uclogin"></div>
<?php echo '<script'; ?>
>
$(function(){
	$(window).on('scroll',function(){
		var st = $(document).scrollTop();
		if( st>0 ){
			if( $('#main-container').length != 0  ){
				var w = $(window).width(),mw = $('#main-container').width();
				if( (w-mw)/2 > 70 )
					$('#go-top').css({'left':(w-mw)/2+mw+20});
				else{
					$('#go-top').css({'left':'auto'});
				}
			}
			$('#go-top').fadeIn(function(){
				$(this).removeClass('dn');
			});
		}else{
			$('#go-top').fadeOut(function(){
				$(this).addClass('dn');
			});
		}	
	});
	$('#go-top .go').on('click',function(){
		$('html,body').animate({'scrollTop':0},500);
	});

	$('#go-top .uc-2vm').hover(function(){
		$('#go-top .uc-2vm-pop').removeClass('dn');
	},function(){
		$('#go-top .uc-2vm-pop').addClass('dn');
	});
});
<?php echo '</script'; ?>
>
 <?php echo smarty_function_baidu(array(),$_smarty_tpl);?>

</body>
</html><?php }} ?>
