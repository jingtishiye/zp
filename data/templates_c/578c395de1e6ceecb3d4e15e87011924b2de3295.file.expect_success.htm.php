<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-03 18:06:01
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/expect_success.htm" */ ?>
<?php /*%%SmartyHeaderCode:1816108975ed77609a206c5-86371207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '578c395de1e6ceecb3d4e15e87011924b2de3295' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/user/expect_success.htm',
      1 => 1548665664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816108975ed77609a206c5-86371207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'style' => 0,
    'expect' => 0,
    'resume' => 0,
    'id' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ed77609a51734_94905596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ed77609a51734_94905596')) {function content_5ed77609a51734_94905596($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/public_search/index_search.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/data/plus/job.cache.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/class.public.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/class.public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
> 
<form action="index.php?c=expect&act=add" method="post" target="supportiframe">
 
 <div class="news_expect">
<div class="news_expect_cont">

<div class="news_expect_last_msg"><span class="news_expect_last_msg_s">恭喜您，简历创建成功</span></div>


<div class="news_expect_content">
<div class="news_expect_last_content">
<div class="news_expect_last_wzd">
<span class="news_expect_last_wzd_span">简历完整度：</span>
<div class="member_index_resume_t_wzd" style="margin-top:0px;"> <span class="member_index_resume_t_wz_b"> <em class="ember_index_resume_t_wz_c" style="width:<?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%"></em> </span> <span class="member_index_resume_t_wz_n"><?php echo $_smarty_tpl->tpl_vars['expect']->value['integrity'];?>
%</span> </div><a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$id`'),$_smarty_tpl);?>
" target="_blank" class="member_index_resume_yl">简历预览 </a></div>
<div class="news_expect_last_p">企业看重这些信息，建议您进行补充</div>
<div class="news_expect_last_sub">
<?php if (!$_smarty_tpl->tpl_vars['resume']->value['work']) {?>
<a href="index.php?c=expect&e=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
#work_upbox" class="news_expect_last_sub_a">工作经历   </a>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['resume']->value['work']) {?><a href="index.php?c=expect&e=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
#edu_upbox" class="news_expect_last_sub_a">教育经历  </a><?php }?>
<?php if (!$_smarty_tpl->tpl_vars['resume']->value['training']) {?><a href="index.php?c=expect&e=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
#training_upbox" class="news_expect_last_sub_a">培训经历  </a><?php }?>
<?php if (!$_smarty_tpl->tpl_vars['resume']->value['skill']) {?><a href="index.php?c=expect&e=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
#skill_upbox" class="news_expect_last_sub_a">职业技能 </a><?php }?>
<?php if (!$_smarty_tpl->tpl_vars['resume']->value['project']) {?><a href="index.php?c=expect&e=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
#project_upbox" class="news_expect_last_sub_a">项目经验 </a><?php }?>
<?php if (!$_smarty_tpl->tpl_vars['resume']->value['other']) {?><a href="index.php?c=expect&e=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
#other_upbox" class="news_expect_last_sub_a">其他信息  </a><?php }?>
<a href="index.php?c=expect&e=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
#description_upbox" class="news_expect_last_sub_a">自我评价  </a>
<?php if ($_smarty_tpl->tpl_vars['info']->value['photo']=='') {?>
<a href="index.php?c=uppic" class="news_expect_last_sub_a">上传头像  </a>
<?php }?>
</div>

<div class="news_expect_last_search">您也可以直接去搜索合适的职位了<a href="<?php echo smarty_function_url(array('m'=>'job'),$_smarty_tpl);?>
" target="_blank" class="news_expect_last_subjob">职位搜索</a><a href="index.php" class="news_expect_last_a">返回我的求职首页>></a></div>



</div>
</div>
</div>
</div>
</form>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['userstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
