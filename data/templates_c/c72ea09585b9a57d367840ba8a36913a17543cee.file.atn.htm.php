<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-03 18:05:48
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/atn.htm" */ ?>
<?php /*%%SmartyHeaderCode:1855829225ed775fc02b293-52867613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c72ea09585b9a57d367840ba8a36913a17543cee' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/atn.htm',
      1 => 1533900136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1855829225ed775fc02b293-52867613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgnum' => 0,
    'rows' => 0,
    'log' => 0,
    'config' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ed775fc061026_44425331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed775fc061026_44425331')) {function content_5ed775fc061026_44425331($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    
        <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">我的关注</span> <i class="member_right_h1_icon user_bg"></i></div>
   		<div id="gms_showclew"></div>
        <div class="job_list_tit"> 
		<ul class="">
   	  <li <?php if ($_GET['c']=='atn') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=atn">关注的企业</a><?php if ($_smarty_tpl->tpl_vars['msgnum']->value) {?><i class="left_sidebar_leftmune_icon"><?php echo $_smarty_tpl->tpl_vars['msgnum']->value;?>
</i><?php }?></li>
    
    
     </ul> 
	</div>
        <div class="resume_box_list mt20">
        <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
            <div class="attention_enterprises_tit">
                <div style="width:300px;" class="attention_enterprises_span attention_enterprises_name"><em class="List_Title_span_name">企业名称</em></div>
                <div style="width:300px;" class="attention_enterprises_span attention_enterprises_job">正在招聘</div>
                <div style="width:150px;" class="attention_enterprises_span attention_enterprises_time">关注时间</div>
                <div style="width:150px;" class="attention_enterprises_span attention_enterprises_cz">操作</div>
            </div>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
            <div class="attention_enterprises_list">
                <div style="width:300px;" class="attention_enterprises_span attention_enterprises_name">
                    <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$log.sc_uid`'),$_smarty_tpl);?>
" target="_blank" class="attention_enterprises_name_a"><?php echo $_smarty_tpl->tpl_vars['log']->value['com_name'];?>
&nbsp;</a>

					<div class="mt10"><?php echo $_smarty_tpl->tpl_vars['log']->value['com_pr'];?>
<span class="look_myresume_comline">|</span><?php echo $_smarty_tpl->tpl_vars['log']->value['com_mun'];
if ($_smarty_tpl->tpl_vars['log']->value['com_sdate']) {?><span class="look_myresume_comline">|</span><?php echo $_smarty_tpl->tpl_vars['log']->value['com_sdate'];?>
年<?php }?></div>
                </div>
                <div style="width:300px;" class="attention_enterprises_span attention_enterprises_job mt15">
                    <?php if ($_smarty_tpl->tpl_vars['log']->value['jobnum']>0) {?>
                    <?php echo $_smarty_tpl->tpl_vars['log']->value['jobname'];?>
 
                    <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$log.sc_uid`'),$_smarty_tpl);?>
#job" target="_blank" class="attention_enterprises_job_n">共<?php echo $_smarty_tpl->tpl_vars['log']->value['jobnum'];?>
个职位>></a>
                    <?php } else { ?>
                    暂无职位
                    <?php }?>
                    &nbsp;
                </div>
                <div style="width:150px;" class="attention_enterprises_span attention_enterprises_time mt15"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['log']->value['time'],'%Y-%m-%d');?>
</div>
                <div style="width:150px;" class="attention_enterprises_span attention_enterprises_cz mt15"><a href="javascript:void(0)" onclick="layer_del('您确定要取消关注？', '<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/member/index.php?c=atn&act=del&id=<?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
&uid=<?php echo $_smarty_tpl->tpl_vars['log']->value['sc_uid'];?>
');" class="cblue">取消关注</a>
                </div>
            </div>
            <?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
           <div class="msg_no">
      <p>亲爱的用户，目前您未关注任何企业，想要了解企业近况</p>
  <p>立即搜索我感兴趣的企业关注吧！</p>
<a href="<?php echo smarty_function_url(array('m'=>'company'),$_smarty_tpl);?>
" target="_blank" class="msg_no_sq uesr_submit">立即搜索我感兴趣的企业>></a>
</div>
            <?php } ?>
            <div class="clear"></div>
            <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
