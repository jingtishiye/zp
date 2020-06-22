<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-03 18:05:29
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/job.htm" */ ?>
<?php /*%%SmartyHeaderCode:9861967005ed775e9dc5660-53695647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4e9363c517006b65172f9fcabaaaae7b1fc4b5f' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/job.htm',
      1 => 1533956160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9861967005ed775e9dc5660-53695647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgnum' => 0,
    'total' => 0,
    'StateList' => 0,
    'key' => 0,
    'v' => 0,
    'search_list' => 0,
    'rows' => 0,
    'job' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ed775e9e11a64_81932105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed775e9e11a64_81932105')) {function content_5ed775e9e11a64_81932105($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    
       <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">我的职位</span> <i class="member_right_h1_icon user_bg"></i></div>
   
    <div class="job_list_tit"> <ul class=""><li <?php if ($_GET['c']=='msg') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=msg">面试通知</a><?php if ($_smarty_tpl->tpl_vars['msgnum']->value) {?><i class="left_sidebar_leftmune_icon"><?php echo $_smarty_tpl->tpl_vars['msgnum']->value;?>
</i><?php }?></li>
      <li <?php if ($_GET['c']=='job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=job">申请的职位</a></li>
      <li <?php if ($_GET['c']=='favorite') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=favorite">职位收藏</a></li>
      <li <?php if ($_GET['c']=='look_job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=look_job">浏览的职位 </a></li>
	  </ul>
      </div>
        <div class="clear"></div>
     <div  class="resume_Prompt_box">
<div  class="resume_Prompt"><i class="resume_Prompt_icon"></i>您已申请 <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> 条职位,请耐心等待企业回复！</div></div>
      <div class="clear"></div>

 <div class="resume_box_list">


       <div class="job_td_list_box">
     <div class="job_td_list mt10">
      投递反馈： 
      <a href="index.php?c=job" class="<?php if (!$_GET['browse']) {?>job_td_list_cur<?php } else { ?>job_td_list_a<?php }?>">不限</a>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['StateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
     <a href="index.php?c=job&browse=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if ($_GET['browse']==$_smarty_tpl->tpl_vars['key']->value) {?>job_td_list_cur<?php } else { ?>job_td_list_a<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
        <?php } ?>
        </div>
      <div class="job_td_list job_td_list_mt">
      投递时间：
       <a href="index.php?c=job" class="<?php if (!$_GET['datetime']) {?>job_td_list_cur<?php } else { ?>job_td_list_a<?php }?>">不限</a>
       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['search_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <a href="index.php?c=job&datetime=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  class="<?php if ($_GET['datetime']==$_smarty_tpl->tpl_vars['key']->value) {?>job_td_list_cur<?php } else { ?>job_td_list_a<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
        <?php } ?>
      </div>
        </div>
       <div class="clear"></div>
       
      <div id="gms_showclew"></div>
      <form action="index.php" method="get" target="supportiframe" id='myform'>
      <input type="hidden" name="c" value="job" />
      <input type="hidden" name="act" value="del" />
      <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value)) {?>

      <div class="interview_application_tit mt40"> 
	 
      <div class="interview_application_span interview_application_jobname">申请的职位</div> 
      <div class="interview_application_span interview_application_jobzt">职位状态</div>
      <div class="interview_application_span interview_application_tdfk">投递反馈</div>
	  <div class="interview_application_span interview_application_tdtime">投递时间</div>
      <div class="interview_application_span interview_application_tdjlmc">投递简历名称</div>
      
      <div class="interview_application_span interview_application_cz">操作</div>
      </div>
      <?php }?>
      <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
      <div class="interview_application_list">
       

       <div class="interview_application_span interview_application_jobname"> 


	   <?php if ($_smarty_tpl->tpl_vars['job']->value['type']==1) {?> 
	   
     
        <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.job_id`'),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
" class="interview_application_name"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
</a> 
         
      
        <?php }?> 
        
      
        
         <div class="mt10">
    
        <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$job.com_id`'),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
"class="interview_application_comname"><?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
 </a> 
 		</div>
        
        
        
        
		</div>
        <div class="interview_application_span interview_application_jobzt mt20">
         <?php if ($_smarty_tpl->tpl_vars['job']->value['id']) {?> 

            <?php if ($_smarty_tpl->tpl_vars['job']->value['status']==0) {?> 
            <div class="interview_zph">招聘中</div>
            <?php } else { ?>
            <div class=" interview_yxj">已下架</div>
            <?php }?>
         <?php } else { ?>
        	<div class=" <?php if ($_smarty_tpl->tpl_vars['job']->value['status']>0) {?>statuscolor<?php }?>">已删除</div>
         <?php }?>
</div>
        <div class="interview_application_span interview_application_tdfk mt20">
       <?php if ($_smarty_tpl->tpl_vars['job']->value['is_browse']==4) {?>
       <span class="interview_application_bfh"><i class="interview_application_bfh_icon"></i>条件不符</span>
		 <?php } elseif ($_smarty_tpl->tpl_vars['job']->value['is_browse']==5) {?>
       <span class="interview_application_bfh"><i class="interview_application_bfh_icon"></i>无法联系</span>
		<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['is_browse']==1) {?>
        <span class="interview_application_whf">尚未回复</span>
		<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['is_browse']==2) {?>
        <span class="interview_application_yck">企业已查看</span>
		<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['is_browse']==3) {?>
		<span class="interview_application_dtz">...等待通知</span>
		<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['is_browse']==0) {?>
        <span class="interview_application_yq"><i class="interview_application_yq_icon"></i>邀请面试</span>
        <?php }?>
		</div>
  
    <div class="interview_application_span interview_application_tdtime mt20"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value['datetime'],'%Y-%m-%d');?>
</div>
	 <div class="interview_application_span interview_application_tdjlmc mt20"><?php echo $_smarty_tpl->tpl_vars['job']->value['resume_name'];?>
&nbsp;</div>

      <div class="interview_application_span interview_application_cz mt20"> 
      <!--批量取消-->
      
      <?php if ($_smarty_tpl->tpl_vars['job']->value['quxiao']=='1') {?>
      <span class="List_dete" style="color:#999;">已取消申请</span><br/>
      <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=job&act=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="List_dete cblue" >删除</a>
      <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['job']->value['body']!='') {?> <span class="List_dete" style="color:#999;">已取消申请</span><br/>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['job']->value['is_browse']=='1'&&$_smarty_tpl->tpl_vars['job']->value['body']=='') {?> <a href="javascript:void(0)" onclick="canceljob(<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
);" class="List_dete cblue" >取消申请</a> <?php } else { ?> <a href="javascript:void(0)" onclick="layer_del('确定要删除？','index.php?c=job&act=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="List_dete cblue" >删除</a> <?php }?> 
        <?php }?>  
       
        </span> </div>
</div>

      <div class="clear"></div>
      <?php }
if (!$_smarty_tpl->tpl_vars['job']->_loop) {
?>
      <div class="msg_no">
      <p>亲爱的用户，您还没有申请过职位，想要获得更多工作机会</p>
  <p>立即搜索您感兴趣的职位并申请吧！</p>
<a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" target="_blank"class="msg_no_sq uesr_submit">立即搜索我感兴趣的职位>></a>
</div>
      <?php } ?>
       </div>
      <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
  <div class="diggg" style="margin-top:10px; float:right"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>  
     <?php }?>
    </form>
    
  </div>
</div>
<div style="padding:10px;display:none;" id='blackdiv'>
  <div class="Blacklist_box">
    <form action="index.php?c=job&act=qs" target="supportiframe" method="post" class="layui-form">
      <input type="hidden" value="" name="id" id="qsid">
       <div class="qxsq_box"> 
        <div class="Blacklist_box_qx" style="padding:10px 0; ">选择合适的取消原因</div>
        <select name="body" style="width:160px;">
          <option value="已经找到工作">已经找到工作</option>
          <option value="想休息一段时间">想休息一段时间</option>
          <option value="生病了">生病了</option>
          <option value="看错信息了">看错信息了</option>
          <option value="很长时间没有查看">很长时间没有查看</option>
          <option value="其它原因">其它原因</option>
        </select>
      </div>
      <div class="qxsq_box_bth" style="padding:10px 0; ">
        <input type="submit" value="确定" class="layui-btn layui-btn-normal" style="width:264px;">
      </div>
    </form>
  </div>
  <div class="clear"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form
    ,$ = layui.$;
});
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
