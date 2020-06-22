<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-03 18:05:48
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/subscribe.htm" */ ?>
<?php /*%%SmartyHeaderCode:18467867125ed775fcdecc29-59742006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6243caed5706a39f0ec66ffc682aa8c2b792e89' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/subscribe.htm',
      1 => 1513145432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18467867125ed775fcdecc29-59742006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'v' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ed775fce1a2f5_72064930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed775fce1a2f5_72064930')) {function content_5ed775fce1a2f5_72064930($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    
            <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">订阅管理</span> <i class="member_right_h1_icon user_bg"></i> </div>
        <div  class="resume_Prompt_box">
        <div  class="resume_Prompt">
        <i class="resume_Prompt_icon"></i>订阅职位，系统会根据您订阅的职位信息，按照您设定的条件自动发送到你的邮箱！<a class="cblue" href="<?php echo smarty_function_url(array('m'=>'subscribe'),$_smarty_tpl);?>
">立即订阅</a>
        </div>
        </div>
        
       
        <div class="remindbox01 mt10">
            <div id="gms_showclew"></div>
            <form action="index.php" method="get" target="supportiframe" id='myform'>
                <input type="hidden" name="c" value="subscribe" />
                <input type="hidden" name="act" value="del" />
                <div class="resumelistbox01 mt10">
                
                    <div class="resume_box_list">
                    <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
                    
                    
                    
                    
                        <div class="jobsubscribe_list_tit">
                            <div class="jobsubscribe_list_span jobsubscribe_listcheck">&nbsp;</div>
                            <div class="jobsubscribe_list_span jobsubscribe_list_jobname">职位类别</div>
                            <div class="jobsubscribe_list_span jobsubscribe_list_jobcity ">所在城市</div>
                            <div class="jobsubscribe_list_span jobsubscribe_list_jobxz">月薪范围</div>
                            <div class="jobsubscribe_list_span jobsubscribe_list_jobzq">发送周期</div>
                            <div class="jobsubscribe_list_span jobsubscribe_list_jobrz">订阅认证</div>
                            <div class="jobsubscribe_list_span jobsubscribe_list_jobcz">操作</div>
                        </div>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <div class="jobsubscribe_list_list">
                            <div class="jobsubscribe_list_span jobsubscribe_listcheck">
                            <input type=checkbox name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="jobsubscribe_listcheckbox">
                            </div>
                          <div class="jobsubscribe_list_span jobsubscribe_list_jobname">
                                <span class="List_Title_span_com"><?php echo $_smarty_tpl->tpl_vars['v']->value['jobname'];?>
</span>
                               &nbsp;
                            </div>
                                    <div class="jobsubscribe_list_span jobsubscribe_list_jobcity ">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['city_name'];?>
</div>
                              <div class="jobsubscribe_list_span jobsubscribe_list_jobxz">&nbsp;<?php if ($_smarty_tpl->tpl_vars['v']->value['minsalary']&&$_smarty_tpl->tpl_vars['v']->value['maxsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['v']->value['maxsalary'];
} elseif ($_smarty_tpl->tpl_vars['v']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['minsalary'];?>
以上<?php } else { ?>面议<?php }?></div>
							  <div class="jobsubscribe_list_span jobsubscribe_list_jobzq">&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
天</div>
                                <div class="jobsubscribe_list_span jobsubscribe_list_jobrz">&nbsp;<?php if ($_smarty_tpl->tpl_vars['v']->value['status']=='1') {?>已认证<?php } else { ?>未认证<?php }?></div>
                            <div class="jobsubscribe_list_span jobsubscribe_list_jobcz">
								<a href="index.php?c=subscribe&act=record&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="List_dete cblue">发送记录</a>
                                <em class="jobnotice_cz_line">|</em>
                                <a href="<?php echo smarty_function_url(array('m'=>'subscribe','id'=>'`$v.id`'),$_smarty_tpl);?>
" class="List_dete cblue" target="_blank"> 修改</a>
                                <em class="jobnotice_cz_line">|</em>
                                <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=subscribe&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="List_dete cblue"> 删除</a>
                            </div> 
                        </div>
                        <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
                        <div class="msg_no">
              			<p>亲爱的用户，您还没有订阅职位哦，想要获得更多工作机会</p>
              			<p>立即订阅职位吧！</p>
              			<a href="<?php echo smarty_function_url(array('m'=>'subscribe'),$_smarty_tpl);?>
" target="_blank"class="msg_no_sq uesr_submit">立即去订阅>></a>
              			</div>
                        <?php } ?>
                        <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
                        
                         <div class="job_operation_bot">
                       <input id="checkAll" type="checkbox" onclick="m_checkAll(this.form)" class="job_operation_botcheckbox">
                       
                            <input type="button" name="subdel" value="批量删除" onclick="return really('del[]');" class="job_operation_bth">
             
             
             
      </div>



       
                        <div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                        <?php }?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
