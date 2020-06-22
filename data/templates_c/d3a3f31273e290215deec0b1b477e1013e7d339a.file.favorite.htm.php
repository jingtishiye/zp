<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-03 18:05:45
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/favorite.htm" */ ?>
<?php /*%%SmartyHeaderCode:1948162265ed775f9de8810-92655771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3a3f31273e290215deec0b1b477e1013e7d339a' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/favorite.htm',
      1 => 1550288372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1948162265ed775f9de8810-92655771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgnum' => 0,
    'rows' => 0,
    'job' => 0,
    'city_name' => 0,
    'pagenav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ed775f9e20da9_34186339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed775f9e20da9_34186339')) {function content_5ed775f9e20da9_34186339($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="yun_w1200">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="yun_m_rightbox fltR mt20 re">
    
     <div class="member_right_index_h1 fltL"> <span class="member_right_h1_span fltL">我的职位</span> <i class="member_right_h1_icon user_bg"></i></div>
    <div id="gms_showclew"></div>
    <form action="index.php" method="get" target="supportiframe" id='myform'>
      <input type="hidden" name="c" value="favorite" />
      <input type="hidden" name="act" value="del" />
     <div class="job_list_tit"> <ul class="">
	<li <?php if ($_GET['c']=='msg') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=msg">面试通知</a><?php if ($_smarty_tpl->tpl_vars['msgnum']->value) {?><i class="job_list_tit_cur"><?php echo $_smarty_tpl->tpl_vars['msgnum']->value;?>
</i><?php }?></li>
      <li <?php if ($_GET['c']=='job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=job">申请的职位</a></li>
      <li <?php if ($_GET['c']=='favorite') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=favorite">职位收藏</a></li>
      <li <?php if ($_GET['c']=='look_job') {?>class="job_list_tit_cur"<?php }?>><a href="index.php?c=look_job">浏览的职位 </a></li>
	</ul> </div>
	<div class="resume_box_list  mt20"><?php if (empty($_smarty_tpl->tpl_vars['rows']->value)) {?>
        <div class="msg_no">
          <p>亲爱的用户，您还没有收藏过职位，想要获得更多工作机会</p>
          <p>立即搜索您感兴趣的职位并收藏吧！</p>
          <a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" target="_blank" class="msg_no_sq uesr_submit">立即搜索我感兴趣的职位>></a> </div>
        <?php } else { ?>

		    <div class="job_collection_tit">
         <div class="job_collection_span job_collection_span_checkbox">&nbsp;</div>
          <div class="job_collection_span job_collection_job">收藏的职位</div>
          <div class="job_collection_span job_collection_xz">薪资待遇</div>
           <div class="job_collection_span job_collection_add">工作地点</div>
           <div class="job_collection_span job_collection_zt">招聘状态</div> 
             <div class="job_collection_span job_collection_cz">操作</div> 
           </div>
        <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['job']->_loop = true;
?>
  <div class="job_collection_list">

  <div class="job_collection_span job_collection_span_checkbox">  <input type=checkbox name="del[]" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" class="interview_application_checkbox_input"></div>

          <div class="job_collection_span job_collection_job">

         <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'comapply','id'=>'`$job.job_id`'),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
" class="interview_application_name"><?php echo $_smarty_tpl->tpl_vars['job']->value['job_name'];?>
</a>
     <div class="mt10">
           <a href="<?php echo smarty_function_url(array('m'=>'company','c'=>'show','id'=>'`$job.com_id`'),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
"class=""><?php echo $_smarty_tpl->tpl_vars['job']->value['com_name'];?>
 </a>
          </div>
          
          </div>
		<div class="job_collection_span job_collection_xz"> 
			&nbsp;
			<?php if ($_smarty_tpl->tpl_vars['job']->value['minsalary']>0&&$_smarty_tpl->tpl_vars['job']->value['maxsalary']>0) {?>
				￥<?php echo $_smarty_tpl->tpl_vars['job']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['maxsalary'];
if ($_smarty_tpl->tpl_vars['job']->value['type']!=1) {?>万<?php }?>
			<?php } elseif ($_smarty_tpl->tpl_vars['job']->value['minsalary']) {?>
				￥<?php echo $_smarty_tpl->tpl_vars['job']->value['minsalary'];
if ($_smarty_tpl->tpl_vars['job']->value['type']!=1) {?>万<?php }?>以上
			<?php } else { ?>面议<?php }?>
		</div>
           <div class="job_collection_span job_collection_add">&nbsp;<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['job']->value['provinceid']];?>
-<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['job']->value['cityid']];?>
</div>
           <div class="job_collection_span job_collection_zt">&nbsp;<?php echo $_smarty_tpl->tpl_vars['job']->value['statename'];?>
</div> 
             <div class="job_collection_span job_collection_cz"> <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=favorite&act=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
');" class="re_sc cblue">删除</a> </div> 

           </div>

        <?php } ?>
        <?php }?> 
		</div>
      <?php if ($_smarty_tpl->tpl_vars['rows']->value) {?>
       <div class="job_operation_bot">
        <input id="checkAll" type="checkbox" onclick="m_checkAll(this.form)" class="job_operation_botcheckbox">
      
        <input type="button" name="subdel" value="批量删除" onclick="return really('del[]');" class="job_operation_bth">
      </div>


      <div class="diggg" style="float:right; margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
      <?php }?>
    </form>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
