<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-03 18:05:50
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/binding.htm" */ ?>
<?php /*%%SmartyHeaderCode:12613526305ed775fe92f4c6-41724222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2620bf1b45d9221f098b819a1f3fcc538052535' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/binding.htm',
      1 => 1534154206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12613526305ed775fe92f4c6-41724222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'member' => 0,
    'resume' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ed775fe95df77_85600101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed775fe95df77_85600101')) {function content_5ed775fe95df77_85600101($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/member_public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/binding.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>var weburl = "<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
";<?php echo '</script'; ?>
>
<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
            <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">账号设置</span> <i class="member_right_h1_icon user_bg"></i></div>
    

        <div class="clear"></div>

	 <div class="job_list_tit"> <ul class="">
	<li><a href="index.php?c=info">基本信息</a><i class="left_sidebar_leftmune_icon"></i></li>
      <li><a href="index.php?c=passwd">账号安全</a></li>
      <li class="job_list_tit_cur"><a href="index.php?c=binding">绑定授权</a></li>
      <li><a href="index.php?c=uppic">上传照片 </a></li>

	</ul></div>

 <div  class="resume_Prompt_box"><div  class="resume_Prompt"><i class="resume_Prompt_icon"></i> 绑定的第三方帐号，可用于直接登录网站</div></div>


        <div class="resume_box_list">
         
       
        
            <div class="Binding_list">
                <div class="Binding_list_left">
				<div class="Bingding_icon <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>Bingding_icon_cur<?php }?>"><i class="binding_qq_icon"></i></div>
				<span class="bingding_yx_wr">绑定QQ</span></div>
                <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>
                <div class="Binding_list_text Binding_list_text_mt">已绑定QQ号</div>
                <div class="Binding_oper">
                    <a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=qqid');" class="Binding_submit_qx">取消绑定</a>
                </div>
                <?php } else { ?>
				<div class="Binding_list_text">
				  <span class="Binding_list_text_zt"><i class="Binding_list_text_zticon"></i>未绑定QQ号</span>
                <div class="Binding_list_p">授权绑定后，可使用QQ账号登录</div>


              </div>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']!='1') {?>
                <div class="Binding_oper">
                    <a href="javascript:void(0)" onclick="layer.msg('对不起，QQ绑定已关闭！');return false;" class="Binding_submit">立即绑定</a>
                </div>
                <?php } else { ?>
                <div class="Binding_oper">
                    <a href="<?php echo smarty_function_url(array('m'=>'qqconnect','login'=>1),$_smarty_tpl);?>
" class="Binding_submit">立即绑定</a>
                </div>
                <?php }?>
                <?php }?>
            </div>
            <div class="Binding_list">
                <div class="Binding_list_left">
				<div class="Bingding_sinaicon <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>bingding_sina_cur<?php }?>"><i class="binding_xl_icon"></i></div>
				<span class="bingding_yx_wr">绑定新浪微博</span></div>
                <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>
                <div class="Binding_list_text Binding_list_text_mt">已绑定，可使用新浪微博快速登录</div>
                <div class="Binding_oper">
                    <a href="javascript:void(0)" onclick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=sinaid');" class="Binding_submit_qx">取消绑定</a>
                </div>
                <?php } else { ?>
				  <div class="Binding_list_text">
				  <span class="Binding_list_text_zt"><i class="Binding_list_text_zticon"></i>未绑定新浪微博</span>
                <div class="Binding_list_p">授权绑定后，可使用新浪微博快速登录</div>
				</div>
                <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']!='1') {?>
                <div class="Binding_oper">
                    <a href="javascript:void(0)" onclick="layer.msg('对不起，新浪绑定已关闭！');return false;" class="Binding_submit">立即绑定</a>
                </div>
                <?php } else { ?>
                <div class="Binding_oper">
                    <a href="<?php echo smarty_function_url(array('m'=>'sinaconnect','login'=>1),$_smarty_tpl);?>
" class="Binding_submit">立即绑定</a>
                </div>
                <?php }?>
                <?php }?>
            </div>
			<div class="Binding_list">
            <div class="Binding_list_left">
			<div class="Bingding_wx <?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']!=''||$_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>bingding_wx_cur<?php }?>"><i class="binding_wx_icon"></i></div>
			<span class="bingding_yx_wr">绑定微信</span>
			</div>
            <?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']!=''||$_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>
            <div class="Binding_list_text  Binding_list_text_mt">已绑定，您已可使用微信扫描登录</div>
            <div class="Binding_oper"><a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=wxid');" class="Binding_submit_qx">取消绑定</a></div>
            <?php } else { ?>
			<div class="Binding_list_text">
				  <span class="Binding_list_text_zt"><i class="Binding_list_text_zticon"></i>未绑定微信</span>
                <div class="Binding_list_p">授权绑定后，可使用微信扫描登录</div>
			</div>

            <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']!='1') {?>
            <div class="Binding_oper"><a href="javascript:void(0)" onclick="layer.msg('对不起，微信绑定已关闭！'); return false;" class="Binding_submit">立即绑定</a></div>
            <?php } else { ?>
            <div class="Binding_oper"><a href="<?php echo smarty_function_url(array('m'=>'wxconnect','login'=>1),$_smarty_tpl);?>
" class="Binding_submit">立即绑定</a></div>
            <?php }?>
            <?php }?> 
		  </div>
 
        </div>
    </div>
</div>

<input type="hidden" id="linktel" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['telphone'];?>
" />
<input type="hidden" id="linkmail" value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['email'];?>
" />
<input type="hidden" id="send" value="0" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
