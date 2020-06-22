<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-19 17:38:07
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/com/binding.htm" */ ?>
<?php /*%%SmartyHeaderCode:8607376665eec877f075829-56022297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76cfb337effd426bf2dab1a5ce6f1573a95d1ef8' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/com/binding.htm',
      1 => 1558776588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8607376665eec877f075829-56022297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'member' => 0,
    'setname' => 0,
    'company' => 0,
    'cert' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eec877f0c1400_52090886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eec877f0c1400_52090886')) {function content_5eec877f0c1400_52090886($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="w1000">
    <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class=right_box>
            <div class=admincont_box>
                <div class="com_tit"><span class="com_tit_span">账户认证绑定</span> </div>

                <div class="com_body">
                    <div class="admin_new_tip  ">
                        <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
                        <div class="admin_new_tip_list_cont">
                            <div class="admin_new_tip_list"> 建议您启动全部安全设置，以保障账户及资金安全,增加求职反馈的及时性和准确性，从而提高求职成功率</div>
                            <div class="admin_new_tip_list"> 登录用户名：<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<span class="Binding_h1_time">上次登录时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member']->value['login_date'],"%Y-%m-%d %H:%M:%S");?>
 <a href="index.php?c=vs" class="Binding_a">修改密码</a></span>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['setname']->value==1) {?>
                            <div class="admin_new_tip_list">您有一次修改账户名的机会<b>（仅限一次）</b>
                                <a href="index.php?c=setname" style="color:#f00; text-decoration:underline">立即修改</a>
                            </div>
                            <?php }?>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="Binding_list_box">
                        <div class="Binding_list_box_c">
                            <div class="Binding_list">
                                <div class="Binding_list_left">
                                    <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['company']->value['email_status']==1) {?>bingding_yx_cur<?php }?>"><i class="binding_yx_icon"></i></div>
                                </div>
                                <div class="Binding_list_name"> 邮箱认证</div>
                                <div class="Binding_list_cont">

                                    <?php if ($_smarty_tpl->tpl_vars['company']->value['email_status']==1) {?>
                                    <div class="Binding_list_text mt10">当前邮箱已验证：<b class="Binding_list_b"><?php echo $_smarty_tpl->tpl_vars['company']->value['linkmail'];?>
</b> </div>
                                    <div class="Binding_oper">
                                        <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=email');" class="Binding_submit_qx">取消绑定</a>
                                    </div>
                                    <?php } else { ?>
                                    <span class="Binding_list_no"><i class="Binding_list_no_icon"></i>未验证</span>
                                    <div class="Binding_list_text">当前邮箱未验证：<b class="Binding_list_b"><?php echo $_smarty_tpl->tpl_vars['company']->value['linkmail'];?>
</b> 邮箱验证后，<br>可用于直接登录账户，快速找回登录密码，接收账户变动提醒,接受求职者简历投递信息</div>
                                    <div class="Binding_oper">
                                        <a href="javascript:getshow('email','绑定邮箱');" class="Binding_submit">立即验证</a>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="Binding_list">
                                <div class="Binding_list_left">
                                    <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['company']->value['moblie_status']==1) {?>bingding_yx_cur<?php }?>"><i class="binding_sj_icon"></i></div>
                                </div>
                                <div class="Binding_list_cont">
                                    <div class="Binding_list_name"> 绑定手机</div>
                                    <?php if ($_smarty_tpl->tpl_vars['company']->value['moblie_status']==1) {?>
                                    <div class="Binding_list_text mt10">当前手机已绑定： <b class="Binding_list_b"><?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>
</b> </div>
                                    <div class="Binding_oper">
                                        <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=moblie');" class="Binding_submit_qx">取消绑定</a>
                                    </div>
                                    <?php } else { ?>
                                    <span class="Binding_list_no"><i class="Binding_list_no_icon"></i>未绑定</span>
                                    <div class="Binding_list_text">当前手机未绑定： <b class="Binding_list_b"><?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>
</b> 验证后，<br>可用于直接登录账户，快速找回登录密码，接收账户变动提醒,接受求职者简历投递信息</div>
                                    <div class="Binding_oper">
                                        <a href="javascript:getshow('moblie','绑定手机号码');" class="Binding_submit">立即验证</a>
                                    </div>
                                    <?php }?> </div>
                            </div>
                            <div class="Binding_list">
                                <div class="Binding_list_left">
                                    <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1) {?>bingding_yx_cur<?php }?>"><i class="binding_sf_icon"></i></div>
                                </div>
                                <div class="Binding_list_cont">
                                    <div class="Binding_list_name">营业执照</div>
                                    <?php if ($_smarty_tpl->tpl_vars['company']->value['yyzz_status']==1) {?>
                                    <div class="Binding_list_text mt10">当前营业执照已验证 <?php if ($_smarty_tpl->tpl_vars['cert']->value['check']) {?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
" class="Binding_pop_box_msg_cont_pic_p">查看营业执照</a>
                                        <?php }?>
                                    </div>
                                    <div class="Binding_oper">
                                        <a href="javascript:getyyzzcom('上传营业执照','550','410');" class="Binding_submit_qx">修改</a>
                                    </div>
                                    <?php } else { ?> <?php if (!empty($_smarty_tpl->tpl_vars['cert']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['cert']->value['status']==2) {?>
                                    <div class="Binding_list_text">审核未通过 <?php if ($_smarty_tpl->tpl_vars['cert']->value['statusbody']) {?>原因：<?php echo $_smarty_tpl->tpl_vars['cert']->value['statusbody'];?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['cert']->value['check']) {?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
" class="Binding_pop_box_msg_cont_pic_p">查看营业执照</a>
                                        <?php }?>
                                    </div>
                                    <div class="Binding_oper">
                                        <a href="javascript:getyyzzcom('上传营业执照','550','410');" class="Binding_submit_rz">重新上传</a>
                                    </div>
                                    <?php } else { ?>
                                    <div class="Binding_list_text mt10">营业执照已上传，请等待管理员审核 <?php if ($_smarty_tpl->tpl_vars['cert']->value['check']) {?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
" class="Binding_pop_box_msg_cont_pic_p">查看营业执照</a>
                                        <?php }?>
                                    </div>
                                    <div class="Binding_oper">
                                        <a href="javascript:getyyzzcom('上传营业执照','550','410');" class="Binding_submit_rz">重新上传</a>
                                    </div>
                                    <?php }?> <?php } else { ?>
                                    <span class="Binding_list_no"><i class="Binding_list_no_icon"></i>未认证</span>
                                    <div class="Binding_list_text">当前未上传营业执照</div>
                                    <div class="Binding_oper">
                                        <a href="javascript:getyyzzcom('上传营业执照','550','410');" class="Binding_submit">立即验证</a>
                                    </div>
                                    <?php }?> <?php }?>
                                </div>
                            </div>
                            <div class="Binding_list">
                                <div class="Binding_list_left">
                                    <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>bingding_yx_cur<?php }?>"><i class="binding_qq_icon"></i></div>
                                </div>
                                <div class="Binding_list_cont">
                                    <div class="Binding_list_name">绑定QQ</div>
                                    <?php if ($_smarty_tpl->tpl_vars['member']->value['qqid']!='') {?>
                                    <div class="Binding_list_text">已绑定QQ号</div>
                                    <div class="Binding_oper ">
                                        <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=qqid');" class="Binding_submit_qx">取消绑定</a>
                                    </div>
                                    <?php } else { ?>
                                    <span class="Binding_list_no"><i class="Binding_list_no_icon"></i>未绑定</span>
                                    <div class="Binding_list_text">未绑定QQ号</div>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_qqlogin']!='1') {?>
                                    <div class="Binding_oper">
                                        <a href="javascript:void(0)" onclick="layer.msg('对不起，QQ绑定已关闭！');return false;" class="Binding_submit">立即绑定</a>
                                    </div>
                                    <?php } else { ?>
                                    <div class="Binding_oper">
                                        <a href="<?php echo smarty_function_url(array('m'=>'qqconnect','login'=>1),$_smarty_tpl);?>
" class="Binding_submit">立即绑定</a>
                                    </div>
                                    <?php }?> <?php }?> </div>
                            </div>
                            <div class="Binding_list">
                                <div class="Binding_list_left">
                                    <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>bingding_yx_cur<?php }?>"><i class="binding_xl_icon"></i></div>
                                </div>
                                <div class="Binding_list_cont">
                                    <div class="Binding_list_name"> 绑定新浪微博</div>
                                    <?php if ($_smarty_tpl->tpl_vars['member']->value['sinaid']!='') {?>
                                    <div class="Binding_list_text">已绑定，可使用新浪微博快速登录</div>
                                    <div class="Binding_oper">
                                        <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=sinaid');" class="Binding_submit_qx">取消绑定</a>
                                    </div>
                                    <?php } else { ?>
                                    <span class="Binding_list_no"><i class="Binding_list_no_icon"></i>未绑定</span>
                                    <div class="Binding_list_text">授权绑定后，可使用新浪微博快速登录</div>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_sinalogin']!='1') {?>
                                    <div class="Binding_oper">
                                        <a href="javascript:void(0)" onclick="layer.msg('对不起，新浪绑定已关闭！');return false;" class="Binding_submit">立即绑定</a>
                                    </div>
                                    <?php } else { ?>
                                    <div class="Binding_oper">
                                        <a href="<?php echo smarty_function_url(array('m'=>'sinaconnect','login'=>1),$_smarty_tpl);?>
" class="Binding_submit">立即绑定</a>
                                    </div>
                                    <?php }?> <?php }?> </div>
                            </div>

                            <div class="Binding_list">
                                <div class="Binding_list_left">
                                    <div class="bingding_yx <?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']!=''||$_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>bingding_yx_cur<?php }?>"><i class="binding_wx_icon"></i></div>
                                </div>
                                <div class="Binding_list_cont">
                                    <div class="Binding_list_name">绑定微信</div>
                                    <?php if ($_smarty_tpl->tpl_vars['member']->value['wxopenid']!=''||$_smarty_tpl->tpl_vars['member']->value['wxid']!='') {?>
                                    <div class="Binding_list_text">已绑定，可使用微信扫描登录</div>
                                    <div class="Binding_oper">
                                        <a href="javascript:void(0)" onClick="layer_del('确定要取消绑定？','index.php?c=binding&act=del&type=wxid');" class="Binding_submit_qx">取消绑定</a>
                                    </div>
                                    <?php } else { ?>
                                    <span class="Binding_list_no"><i class="Binding_list_no_icon"></i>未绑定</span>
                                    <div class="Binding_list_text">授权绑定后，可使用微信扫描登录</div>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['wx_author']!='1') {?>
                                    <div class="Binding_oper">
                                        <a href="javascript:void(0)" onclick="layer.msg('对不起，微信绑定已关闭！'); return false;" class="Binding_submit">立即绑定</a>
                                    </div>
                                    <?php } else { ?>
                                    <div class="Binding_oper">
                                        <a href="<?php echo smarty_function_url(array('m'=>'wxconnect','login'=>1),$_smarty_tpl);?>
" class="Binding_submit">立即绑定</a>
                                    </div>
                                    <?php }?> <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
 <div id="email" style="display:none;">
    <div class="Binding_pop_box" style="padding:10px;width:480px;background:#fff">

        <div>
            <div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>我的邮箱：</span>
                <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['linkmail'];?>
" class="Binding_pop_box_list_text Binding_pop_box_list_textw200">
            </div>
            <div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>
                <input type="text" name="email_code" maxlength="6" class="Binding_pop_box_list_text" />
                <img id="vcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style=" margin:0 5px 5px 5px; vertical-align:middle;">
                <a href="javascript:void(0);" onclick="checkCode('vcode_img');">看不清</a>
            </div>
            <div class="Binding_pop_box_list"><input class=" Binding_pop_bth" type="button" onclick="sendbemail('vcode_img');" value="发送验证邮件">
            </div>
            <div class="Binding_pop_tip">没收到邮件？</div>
            <div class="Binding_pop_tip_p">
                1. 请检查您的垃圾箱或者广告箱，邮件有可能被误认为垃圾或者广告邮件；<br/> 2.验证邮件24小时内有效，请尽快登录您的邮箱点击验证链接完成验证
            </div>
        </div>
    </div>
</div>
 
 
<div id="moblie" style=" display:none;">
    <div class="Binding_pop_box" style="padding:10px;width:480px;background:#fff;">

        <div class="Binding_pop_box_list" style=" display:block">
            <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>手机号码：</span>
            <input type="text" name="moblie" class="Binding_pop_box_list_text" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>
">
        </div>
		<div class="Binding_pop_box_list"><span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>验证码：</span>
			<input type="text" name="phoneimg_code" maxlength="6" class="Binding_pop_box_list_text" />
			<img id="pcode_img" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/app/include/authcode.inc.php" style=" margin:0 5px 5px 5px; vertical-align:middle;">
			<a href="javascript:void(0);" onclick="checkCode('pcode_img');">看不清</a>
		</div>
        <div class="Binding_pop_box_list">
            <span class="Binding_pop_box_list_left"><i class="Binding_pop_box_list_left_i">*</i>手机校验码：</span>
            <div class="Binding_pop_right"> <input type="text" id="moblie_code" class="Binding_pop_box_list_text">
                <a href="javascript:;" onclick="sendmoblie('pcode_img');" class="Binding_pop_box_magbth" id="time">获取短信校验码
                </a>
            </div>

        </div>
        <div class="Binding_pop_box_list"> <input class="Binding_pop_bth" onclick="check_moblie();" type="button" value="提交" />
        </div>
        <div class="Binding_pop_tip">收不到短信验证码?</div>
        <div class="Binding_pop_tip_p">
            1.短信验证码有效时效为120秒，超过120秒请点击重新发送；<br> 
			2.如您手机无法收取短信或者收取延迟，请关机重启或者联系运营商处理；<br/> 
			3.如以上措施还无法解决，请确认用户名，手机号以及邮箱联系我司客服
        </div>
    </div>
</div>

 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/binding.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
 <div id="yyzz" style=" display:none;">
    <div style="width:850px;">
        <div class="license_box">
            <div class="license_tip">提示：营业执照中的公司名称与招聘账号的公司名称保持一致，扫描件中的注册号,企业名称，年检章等需清晰可辨，否则不能通过认证</div>
            <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
            <form id="certform" name="MyForm" target="supportiframe" method="post" action="index.php?c=binding&act=savecert" enctype="multipart/form-data">
                <div class="license_left">
                    <div class="license_tit">方式一：本地上传</div>
                    <div class="license_list"><span class="license_list_name"><i class="Binding_pop_box_list_left_i">*</i>公司名称</span><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" name="company_name" id="company_name" class="license_left_text"></div>
                    <div class="license_list"><span class="license_list_name"><i class="Binding_pop_box_list_left_i">*</i>上传副本</span>
                        <button type="button" class="yun_bth_pic adminupload" lay-data="{name: 'check',imgid: 'imgicon',parentid: 'imgparent',imga: 'checka'}">上传图片</button>
                        
                        <input type="hidden" id="layupload_type" value="2" />
                        <input type="hidden" id="upload_path" value="cert" />
                        <input type="hidden" id="cert_pic" name="check" value="<?php echo $_smarty_tpl->tpl_vars['cert']->value['check'];?>
" />
						<input type="hidden" id="old_cert" value="<?php echo $_smarty_tpl->tpl_vars['cert']->value['check'];?>
" />
                        <div id="imgparent" class="licensefile_box_img <?php if (!$_smarty_tpl->tpl_vars['cert']->value['check']) {?>none<?php }?>">
                            <img id="imgicon" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
" width="40" height="40" /> 
							<div id="newbind" class="Binding_pop_box_msg_cont_new none">新</div>
                            <a target="_blank" id="checka" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];
echo $_smarty_tpl->tpl_vars['cert']->value['old_check'];?>
" class="Binding_pop_box_msg_cont_pic_p">查看原图</a>
                        </div>
                        <div class="licensefile_box_tip">最大<?php echo $_smarty_tpl->tpl_vars['config']->value['file_maxsize'];?>
M,支持<?php echo $_smarty_tpl->tpl_vars['config']->value['pic_type'];?>
格式</div>
                    </div>
                    <div class="license_list">
						<!--<input type="hidden" id="logid" name="logid" />-->
                        <input class="license_list_bth" name="upfile" type="button" onclick="check_company_cert()" value="提交" />
                    </div>
                </div>
            </form>
            <div class="license_right">
                <div class="license_tit">方式二：手机拍照上传</div>
                <div class="license_ewm">
                    <img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>1),$_smarty_tpl);?>
" alt="手机扫码拍照上传" width="130" height="130" />
                </div>
                <div class="license_right_p"> 扫描二维码 </div>
            </div>
        </div>
    </div>
</div>
 <input type="hidden" id="linktel" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['linktel'];?>
" />
<input type="hidden" id="linkmail" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['linkmail'];?>
" />
<input type="hidden" id="send" value="0" />

<?php echo '<script'; ?>
>
    $('#uploadimg_btn').on('mouseover', function() {
        var that = this;
        layer.tips('<img src="<?php echo smarty_function_url(array('m'=>'upload','c'=>'qrcode','type'=>1),$_smarty_tpl);?>
" alt="手机扫码拍照上传" />', that);
        return false;
    });

    $('#uploadimg_btn').on('mouseout', function() {
        layer.closeAll('tips');
    });
<?php echo '</script'; ?>
>

<!--<?php echo '<script'; ?>
>
 	var second = 0;
	window.setInterval(function () {
		second ++;
	}, 1000);

	var url     = location.href, 
		refer   = document.referrer, 
		timeIn  = Math.ceil(new Date().getTime()/1000); 
	var opera=12;
 	$(function(){
		setTimeout(function(){ 
			$.post('index.php?c=log',{url:url,refer:refer,timeIn:timeIn,second:2,opera:opera},function(data){
				if(data){
					$("#logid").val(data);
				}
			})
		},2000);
		
    }) 
	
	
<?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
