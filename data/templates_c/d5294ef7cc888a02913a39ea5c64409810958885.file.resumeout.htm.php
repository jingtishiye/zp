<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-20 15:29:09
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/resumeout.htm" */ ?>
<?php /*%%SmartyHeaderCode:4971002055eedbac53df7f8-92734230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5294ef7cc888a02913a39ea5c64409810958885' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/resumeout.htm',
      1 => 1516254158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4971002055eedbac53df7f8-92734230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'resume' => 0,
    'out' => 0,
    'item' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eedbac540a719_65521042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eedbac540a719_65521042')) {function content_5eedbac540a719_65521042($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
       <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">简历外发</span> <i class="member_right_h1_icon user_bg"></i></div>   
       <div class="resume_box_list">
        <div class="message_content" style="margin-top:0;">  
            <div id="" class="resume_fk_box" style="margin-top:0;">
            <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                <form name="MyForm" onsubmit="return check_out();" target="supportiframe" action="index.php?c=resumeout&act=send" method="post" class="layui-form">
                  <div class="yun_send_resume_list">
                  <div class="yun_send_resume_list_name"><span class="yun_send_resume_list_x">*</span>将要发送的简历：</div>
                  <div class="yun_send_resume_list_right" >
                    <div class="layui-form-item">
                      <div class="layui-input-inline">
                        <select lay-filter="resume" id="resumeallid">
                        <option value="">请选择简历</option>
                        <?php  $_smarty_tpl->tpl_vars['resume'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resume']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resume']->key => $_smarty_tpl->tpl_vars['resume']->value) {
$_smarty_tpl->tpl_vars['resume']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['resume']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['resume']->value['name'];?>
</option>
                        <?php } ?>
                        </select>
                        <input type="hidden" id="resumeid" name="resume" value="" />
                        <input type="hidden" id="resumename" name="resumename" value="" />
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="yun_send_resume_list">
                    <div class="yun_send_resume_list_name"> <span class="yun_send_resume_list_x">*</span>企业的邮箱地址：</div>
                    <div class="yun_send_resume_list_right">
                    <input type="text" class="yun_send_resume_txt" id="email" name="email" value="">
                    </div>
                  </div>
                  <div class="yun_send_resume_list">
                    <div class="yun_send_resume_list_name"><span class="yun_send_resume_list_x">*</span>应聘的企业名称：</div> 
                    <div class="yun_send_resume_list_right" >
                    <input type="text" class="yun_send_resume_txt" id="comname" name="comname" value="" maxlength="20"><i>（限20字）</i>
                    </div>
                  </div>
                  <div class="yun_send_resume_list">
                    <div class="yun_send_resume_list_name"><span class="yun_send_resume_list_x">*</span>应聘的职位名称：</div>
                    <div class="yun_send_resume_list_right" >
                    <input type="text" class="yun_send_resume_txt" id="jobname" name="jobname" value="" maxlength="20"><i>（限20字）</i>
                    </div>
                  </div>
                  <div class="yun_send_resume_list">
                    <div class="yun_send_resume_list_name">&nbsp;</div> 
                    <div class="yun_send_resume_list_right" >
                    <input type="submit" name="submit" class="layui-btn layui-btn-normal" value="发送">
                    </div>
                  </div>
                </form>
            </div>
        </div>
        <div class="resumeout_tit mt40">
            <div class="resumeout_span resumeout_comname" >企业名称</div>
            <div class="resumeout_span resumeout_jobname" >职位名称</div>
            <div class="resumeout_span resumeout_pop" >接收人</div>
            <div class="resumeout_span resumeout_emil">邮箱</div>
            <div class="resumeout_span resumeout_xg">相关简历</div>
            <div class="resumeout_span resumeout_send" >发送时间</div>
            <div class="resumeout_span List_Title_w80" >操作</div>
        </div>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['out']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="resumeout_listbox">
            <div class="resumeout_span resumeout_comname" ><?php echo $_smarty_tpl->tpl_vars['item']->value['comname'];?>
</div>
            <div class="resumeout_span resumeout_jobname" ><?php echo $_smarty_tpl->tpl_vars['item']->value['jobname'];?>
</div>
            <div class="resumeout_span resumeout_pop" ><?php echo $_smarty_tpl->tpl_vars['item']->value['recipient'];?>
</div>
            <div class="resumeout_span resumeout_emil"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</div>
            <div class="resumeout_span resumeout_xg"><?php echo $_smarty_tpl->tpl_vars['item']->value['resume'];?>
</div>
            <div class="resumeout_span resumeout_send" ><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['datetime'],"%Y-%m-%d");?>
</div>
            <div class="resumeout_span List_Title_w80" ><a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=resumeout&act=del&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" class="List_dete cblue"> 删除</a></div>
        </div>
        <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
        <div class="msg_no">暂无简历外发信息！</div>
        <?php } ?>
        <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
    </div>
</div></div>
<?php echo '<script'; ?>
>
layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
	form.on('select(resume)',function(data){
		var str=data.elem.value.split('-');
		$("#resumeid").val(str[0]);
		$("#resumename").val(str[1]);
	});
});<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
