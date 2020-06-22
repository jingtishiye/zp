<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-20 15:29:29
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/resume/sendresume.htm" */ ?>
<?php /*%%SmartyHeaderCode:1836240915eedbad9ae3d94-93071235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cf8d9d55826a72880ff4113a1252c45c7f4cf51' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/resume/sendresume.htm',
      1 => 1555667242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1836240915eedbad9ae3d94-93071235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Info' => 0,
    'config' => 0,
    'all' => 0,
    'one' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eedbad9b485e3_50773670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eedbad9b485e3_50773670')) {function content_5eedbad9b485e3_50773670($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>简历</title>
</head>
<body style="background:#fff; margin:0 auto">
<div class="user_resume_bg" style="	width:834px;margin:0 auto">
  <div class="user_resume" style="float:left;width:834px;padding-bottom:15px;">
    <div class="user_resume_box" style="float:left;width:824px;padding:5px;border:1px solid #ddddde;">
      <div class="resume_ct_msg" style="float:left;width:784px;padding:20px;background:#fbfbfb; line-height:35px;">
        <div class="ct_msg_ft" style="width:600px; float:left; font-size:14px;">
          <div class="ct_msg_ft_nm"><em style="font-style:normal;font-size:24px;"><?php echo $_smarty_tpl->tpl_vars['Info']->value['username_n'];?>
</em><i style="font-style:normal">&nbsp;（<?php echo $_smarty_tpl->tpl_vars['Info']->value['sex'];?>
,<?php echo $_smarty_tpl->tpl_vars['Info']->value['age'];?>
岁）</i></div>
          <div class="ct_msg_ft_x" style="float:left;width:100%;"><span class="ct_msg_ft_x_edu" style="float:left;width:160px;"><i style="font-style:normal">学历:</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['useredu'];?>
</span><span class="ct_msg_ft_x_pc" style="float:left;width:140px;"><i style="font-style:normal">经验：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_exp'];?>
</span> <span class="ct_msg_ft_x_pc" style="float:left;width:140px;"><i style="font-style:normal">所在地：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['living'];?>
</span> <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_marriage']) {?> <span class="ct_msg_ft_x_pc" style="float:left;width:140px;"><i style="font-style:normal">婚姻：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_marriage'];?>
</span> <?php }?> </div>
          <?php if ($_smarty_tpl->tpl_vars['Info']->value['basic_info']=='1') {?>
          <div class="ct_msg_ft_x"  style="float:left;width:100%;"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['domicile']) {?> <span class="ct_msg_ft_x_edu"  style="float:left;width:160px;"><i style="font-style:normal">籍贯:</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['domicile'];?>
</span><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['Info']->value['height']) {?><span class="ct_msg_ft_x_pc" style="float:left;width:140px;"><i style="font-style:normal">身高：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['height'];?>
cm</span><?php }?>            
            <?php if ($_smarty_tpl->tpl_vars['Info']->value['weight']) {?><span class="ct_msg_ft_x_pc" style="float:left;width:140px;"><i style="font-style:normal">体重：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['weight'];?>
kg</span><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['Info']->value['nationality']) {?><span class="ct_msg_ft_x_pc" style="float:left;width:140px;"><i style="font-style:normal">民族：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['nationality'];?>
</span><?php }?> </div>
          <?php }?> </div>
        <div class="ct_msg_rt" style="width:120px; float:right;"> 
        <img src="<?php echo $_smarty_tpl->tpl_vars['Info']->value['resume_photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" width="120" height="120"> </div>
      </div>
      <div class="resume_ct_det" style="float:left;width:784px;padding:20px;font-size:14px; line-height:35px;">
        <div class="ct_det_tit" style="float:left;width:100%;height:32px;line-height:32px;margin-top:10px;margin-bottom:25px;font-size:18px;"><span class="icon_a"></span>求职意向</div>
        <div class="ct_det_exp"><i style="color:#666;font-style:normal">期望职位：</i><em style="font-style:normal;	color:#ff6600;"><?php echo $_smarty_tpl->tpl_vars['Info']->value['customjob'];?>
</em></div>
         <div class="ct_det_exp"><i style="color:#666;font-style:normal">工作职能：</i><em style="font-style:normal;	color:#ff6600;"><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobname'];?>
</em></div>
        <div class="ct_det_bus"> <span class="ct_det_bus_b" style="float:left;width:350px;"><i style="font-style:normal;color:#666;">期望行业：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['hy'];?>
</span> 
        <span class="ct_det_bus_c" style="float:left;width:350px;"><i style="color:#666;font-style:normal">期望薪资：</i><?php if ($_smarty_tpl->tpl_vars['Info']->value['maxsalary']&&$_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
-<?php echo $_smarty_tpl->tpl_vars['Info']->value['maxsalary'];
} elseif ($_smarty_tpl->tpl_vars['Info']->value['minsalary']) {?>￥<?php echo $_smarty_tpl->tpl_vars['Info']->value['minsalary'];?>
以上<?php } else { ?>面议<?php }?></span> </div>
        <div class="ct_det_bus"> <span class="ct_det_bus_b"  style="float:left;width:350px;"><i style="color:#666;font-style:normal">工作地区：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['cityname'];?>
</span> 
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['report']) {?><span class="ct_det_bus_c" style="float:left;width:350px;"><i style="color:#666;font-style:normal">到职时间：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['report'];?>
</span><?php }?></div>
        <div class="ct_det_bus"> <?php if ($_smarty_tpl->tpl_vars['Info']->value['jobstatus']) {?><span class="ct_det_bus_b"  style="float:left;width:350px;"><i style="font-style:normal;color:#666;">求职状态：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['jobstatus'];?>
</span> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['type']) {?><span class="ct_det_bus_c" style="float:left;width:350px;"><i style="color:#666;font-style:normal">职位性质：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['type'];?>
</span><?php }?> </div>
      </div>
      <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_work'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_work'])) {?>
      <div class="resume_ct_det" style="float:left;width:784px;padding:20px;font-size:14px;">
        <div class="ct_det_tit" style="float:left;width:100%;height:32px;line-height:32px;margin-top:10px;margin-bottom:25px;font-size:18px;"><span class="icon_b"></span>工作经历</div>
        <?php  $_smarty_tpl->tpl_vars['all'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['all']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['all']->key => $_smarty_tpl->tpl_vars['all']->value) {
$_smarty_tpl->tpl_vars['all']->_loop = true;
?>
        <div class="ct_det_work" style="float:left;position:relative;padding-top:15px;width:690px;margin-top:10px;margin-left:10px;word-wrap:break-word;border-left:2px solid #dfdfdf;"> <i class="ct_det_work_icon" style="position:absolute;top:20px;left:-6px;border-radius:50%;display:block;width:10px;height:10px;background:#0393d6;font-style:normal;
overflow:hidden;"></i>
     <span class="ct_det_time" style="float:left;color:#666;width:100%;padding-left:30px;line-height:26px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['all']->value['sdate'],"%Y年%m月");?>
 - <?php if ($_smarty_tpl->tpl_vars['all']->value['edate']) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['all']->value['edate'],"%Y年%m月");
} else { ?>至今<?php }?></span>
     <span class="ct_det_peo" style="float:left;width:100%;padding-left:30px;line-height:26px;"><em style="font-size:16px;font-weight:bold;font-style:normal"><?php echo $_smarty_tpl->tpl_vars['all']->value['title'];?>
</em><i style="font-style:normal"></i></span> <span class="ct_det_bx_tep" style="float:left;width:600px;padding-left:30px;line-height:26px;"><?php echo $_smarty_tpl->tpl_vars['all']->value['name'];?>
</span> 
     <?php if ($_smarty_tpl->tpl_vars['all']->value['content']) {?><span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;">工作内容：<?php echo $_smarty_tpl->tpl_vars['all']->value['content'];?>
</span><?php }?> </div>
        <?php } ?> </div>
      <?php }?>
      <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_edu'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_edu'])) {?>
      <div class="resume_ct_det" style="float:left;width:784px;padding:20px;font-size:14px;">
        <div class="ct_det_tit" style="float:left;width:100%;height:32px;line-height:32px;margin-top:10px;margin-bottom:25px;font-size:18px;"><span class="icon_c"></span>教育经历</div>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['all'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['all']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['name'] = 'all';
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Info']->value['user_edu']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total']);
?>
        <div class="ct_det_work"  style="float:left;position:relative;padding-top:15px;width:690px;margin-top:10px;margin-left:10px;word-wrap:break-word;border-left:2px solid #dfdfdf;"> <i class="ct_det_work_icon" style="position:absolute;top:20px;left:-6px;border-radius:50%;display:block;width:10px;height:10px;background:#0393d6;font-style:normal;overflow:hidden;"></i> 
        <span class="ct_det_time" style="float:left;color:#666;width:100%;padding-left:30px;line-height:26px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['user_edu'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['sdate'],"%Y年%m月");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['user_edu'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['edate'],"%Y年%m月");?>
</span> 
        <span class="ct_det_peo" style="float:left;width:100%;padding-left:30px;line-height:26px;"><em style="font-size:16px;font-weight:bold;font-style:normal"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_edu'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['education_n'];?>
</em></span> <span class="ct_det_peo" style="float:left;width:100%;padding-left:30px;line-height:26px;"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_edu'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['name'];?>
</span> 
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_edu'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['specialty']) {?><span class="ct_det_peo" style="float:left;width:100%;padding-left:30px;line-height:26px;">专业：<?php echo $_smarty_tpl->tpl_vars['Info']->value['user_edu'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['specialty'];?>
</span><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['user_edu'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['title']) {?><span class="ct_det_bx_tep">担任职务：<?php echo $_smarty_tpl->tpl_vars['Info']->value['user_edu'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['title'];?>
</span><?php }?>
        </div>
        <?php endfor; endif; ?> </div>
      <?php }?>
      <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_tra'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_tra'])) {?>
      <div class="resume_ct_det" style="float:left;width:784px;padding:20px;font-size:14px;">
        <div class="ct_det_tit" style="float:left;width:100%;height:32px;line-height:32px;margin-top:10px;margin-bottom:25px;font-size:18px;"><span class="icon_g"></span>培训经历</div>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['all'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['all']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['name'] = 'all';
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Info']->value['user_tra']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total']);
?>
        <div class="ct_det_work"  style="float:left;position:relative;padding-top:15px;width:690px;margin-top:10px;margin-left:10px;word-wrap:break-word;border-left:2px solid #dfdfdf;"> <i class="ct_det_work_icon" style="position:absolute;top:20px;left:-6px;border-radius:50%;display:block;width:10px;height:10px;background:#0393d6;
overflow:hidden;font-style:normal"></i> 
        <span class="ct_det_time"  style="float:left;color:#666;width:100%;padding-left:30px;line-height:26px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['user_tra'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['sdate'],"%Y年%m月");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['user_tra'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['edate'],"%Y年%m月");?>
</span>
        <span class="ct_det_peo" style="float:left;width:100%;padding-left:30px;line-height:26px;"><em style="font-size:16px;font-weight:bold;font-style:normal"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_tra'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['title'];?>
</em></span>
        <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_tra'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['name'];?>
</span>
        <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;">培训描述：<?php echo $_smarty_tpl->tpl_vars['Info']->value['user_tra'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['content'];?>
</span> </div>
        <?php endfor; endif; ?> </div>
      <?php }?>
      <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_skill'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_skill'])) {?>
      <div class="resume_ct_det" style="float:left;width:784px;padding:20px;font-size:14px;">
        <div class="ct_det_tit" style="float:left;width:100%;height:32px;line-height:32px;margin-top:10px;margin-bottom:25px;font-size:18px;"><span class="icon_d"></span>职业技能</div>       
        <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['user_skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
        <div class="ct_det_work"  style="float:left;position:relative;padding-top:15px;width:690px;margin-top:10px;margin-left:10px;word-wrap:break-word;border-left:2px solid #dfdfdf;"> <i class="ct_det_work_icon" style="position:absolute;top:20px;left:-6px;border-radius:50%;display:block;width:10px;height:10px;background:#0393d6;font-style:normal;overflow:hidden;"></i>
        <span class="ct_det_peo" style="float:left;width:100%;padding-left:30px;line-height:26px;"><em style="font-size:16px;font-weight:bold;font-style:normal"><?php echo $_smarty_tpl->tpl_vars['one']->value['skill_n'];?>
</em></span>
        <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;">掌握时间：<?php echo $_smarty_tpl->tpl_vars['one']->value['longtime'];?>
年</span>
        <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;">技能名称：<?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</span>       
       <?php if ($_smarty_tpl->tpl_vars['one']->value['picurl']) {?> <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;">技能证书：         
        <img src="<?php echo $_smarty_tpl->tpl_vars['one']->value['picurl'];?>
"  style="vertical-align:middle;max-height:100px; max-width:100px;"></span><?php }?> </div>
        <?php } ?> </div>
      <?php }?>
      <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_xm'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_xm'])) {?>
      <div class="resume_ct_det" style="float:left;width:784px;padding:20px;font-size:14px;">
        <div class="ct_det_tit" style="float:left;width:100%;height:32px;line-height:32px;margin-top:10px;margin-bottom:25px;font-size:18px;"><span class="icon_e"></span>项目经验</div>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['all'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['all']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['name'] = 'all';
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Info']->value['user_xm']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total']);
?>
        <div class="ct_det_work"  style="float:left;position:relative;padding-top:15px;width:690px;margin-top:10px;margin-left:10px;word-wrap:break-word;border-left:2px solid #dfdfdf;"> <i class="ct_det_work_icon" style="position:absolute;top:20px;left:-6px;border-radius:50%;display:block;width:10px;height:10px;background:#0393d6;
overflow:hidden;font-style:normal"></i> 
        <span class="ct_det_time" style="float:left;color:#666;width:100%;padding-left:30px;line-height:26px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['user_xm'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['sdate'],"%Y年%m月");?>
 - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Info']->value['user_xm'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['edate'],"%Y年%m月");?>
</span>
         <span class="ct_det_peo" style="float:left;width:100%;padding-left:30px;line-height:26px;"><em style="font-size:16px;font-weight:bold;font-style:normal"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_xm'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['name'];?>
</em></span> 
         <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_xm'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['title'];?>
</span> 
         <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;">项目内容：<?php echo $_smarty_tpl->tpl_vars['Info']->value['user_xm'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['content'];?>
</span> </div>
        <?php endfor; endif; ?> </div>
      <?php }?>
           
      <?php if (is_array($_smarty_tpl->tpl_vars['Info']->value['user_other'])&&!empty($_smarty_tpl->tpl_vars['Info']->value['user_other'])) {?>
      <div class="resume_ct_det" style="float:left;width:784px;padding:20px;font-size:14px;">
        <div class="ct_det_tit" style="float:left;width:100%;height:32px;line-height:32px;margin-top:10px;margin-bottom:25px;font-size:18px;"><span class="icon_h"></span>其他信息</div>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['all'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['all']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['name'] = 'all';
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Info']->value['user_other']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['all']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['all']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['all']['total']);
?>
        <div class="ct_det_work"  style="float:left;position:relative;padding-top:15px;width:690px;margin-top:10px;margin-left:10px;word-wrap:break-word;border-left:2px solid #dfdfdf;"> <i class="ct_det_work_icon" style="position:absolute;top:20px;left:-6px;border-radius:50%;display:block;width:10px;height:10px;background:#0393d6;font-style:normal;overflow:hidden;"></i> 
        <span class="ct_det_peo" style="float:left;width:100%;padding-left:30px;line-height:26px;"><em style="font-size:16px;font-weight:bold;font-style:normal"><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_other'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['name'];?>
</em></span> 
        <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;"><i style="font-style:normal">其他描述：</i><?php echo $_smarty_tpl->tpl_vars['Info']->value['user_other'][$_smarty_tpl->getVariable('smarty')->value['section']['all']['index']]['content'];?>
</span> </div>
        <?php endfor; endif; ?> </div>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['Info']->value['description'])) {?>
      <div class="resume_ct_det" style="float:left;width:784px;padding:20px;font-size:14px;">
        <div class="ct_det_tit" style="float:left;width:100%;height:32px;line-height:32px;margin-top:10px;margin-bottom:25px;font-size:18px;"><span class="icon_j"></span>自我评价</div>
        <div class="ct_det_bx"  style="float:left;position:relative;padding-top:15px;width:690px;margin-top:10px;margin-left:10px;word-wrap:break-word;border-left:2px solid #dfdfdf;"> <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;"><?php echo $_smarty_tpl->tpl_vars['Info']->value['description'];?>
</span> 
        <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;"> 
        <?php if ($_smarty_tpl->tpl_vars['Info']->value['arrayTag']) {?>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Info']->value['arrayTag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <span class="ct_det_tag" style="background: #FFC;padding: 0px 11px;height: 28px;line-height: 28px;
border: 1px solid #FC9;display: inline-block;margin-right: 5px;margin-top: 2px;"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span>
        <?php } ?>
        <?php }?> 
        </span> </div>
      </div>
      <?php }?>
      <div class="resume_ct_det" style="float:left;width:784px;padding:20px;font-size:14px;">
        <div class="ct_det_tit" style="float:left;width:100%;height:32px;line-height:32px;margin-top:10px;margin-bottom:25px;font-size:18px;"><span class="icon_k"></span>联系方式</div>
        <div class="ct_det_bx"  style="float:left;position:relative;padding-top:15px;width:690px;margin-top:10px;margin-left:10px;word-wrap:break-word;border-left:2px solid #dfdfdf;"> 
        <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;">联系电话：<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
">登录后可以查看</a></span>
         <?php if ($_smarty_tpl->tpl_vars['Info']->value['basic_info']=='1') {?> <?php if ($_smarty_tpl->tpl_vars['Info']->value['address']) {?>
         <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;">详细地址：<?php echo $_smarty_tpl->tpl_vars['Info']->value['address'];?>
</span>
          <?php }?>   <?php }?> 
          <span class="ct_det_bx_tep"  style="float:left;width:600px;padding-left:30px;line-height:26px;">电子邮箱：<a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>$_smarty_tpl->tpl_vars['Info']->value['id']),$_smarty_tpl);?>
">登录后可以查看</a></span> </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php }} ?>
