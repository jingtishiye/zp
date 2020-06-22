<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-22 08:59:11
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/com/special.htm" */ ?>
<?php /*%%SmartyHeaderCode:14855308605ef0025f4eb8b3-54901757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b0c9c5bf34202ff9e2129aa8f3a345e3f3ee42b' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/com/special.htm',
      1 => 1517816804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14855308605ef0025f4eb8b3-54901757',
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
  'unifunc' => 'content_5ef0025f517351_94711063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef0025f517351_94711063')) {function content_5ef0025f517351_94711063($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php echo '<script'; ?>
>
function statusbody(id){
	var statusbody=$("#statusbody"+id).attr('statusbody');
	$("#showbody").html(statusbody)
	$.layer({
		type : 1,
		title : '审核说明',
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['320px','auto'],
		page : {dom : '#infobox'}
	});
}
<?php echo '</script'; ?>
>
<div class="w1000">
  <div class="admin_mainbody"> <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class=right_box>
      <div class=admincont_box>
        <div class="com_tit"><span class="com_tit_span">专题招聘</span></div>
        <div class="clear"></div>
        <div class="com_body">
          <div class="admin_new_tip">
            <div class="admin_new_tit"><i class="admin_new_tit_icon"></i>操作提示</div>
            <div class="admin_new_tip_list_cont">
              <div class="admin_new_tip_list">只有网站管理员发起专题招聘才可参加 </div>
            </div>
          </div>
          <div class="clear"></div>
          <table class="com_table mt20">
            <tr>
              <th >专题名称</th>
              <th>时间</th>
              <th>状态 </th>
              <th width="60">操作</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <tr>
              <td><a href="<?php echo smarty_function_url(array('m'=>'special','c'=>'show','id'=>'`$v.sid`'),$_smarty_tpl);?>
" class="cblue" target=_blank><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
              <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],'%Y-%m-%d');?>
</td>
              <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?><font color="green">已审核</font><?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?><span class="tip_no"><i class="tip_no_icon"></i>未通过</span><?php } else { ?><span class="tip_no"><i class="tip_no_icon"></i>未审核</span><?php }
if ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?> <a href="javascript:void(0);" class="wtg_ly cblue " id="statusbody<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" statusbody="<?php echo $_smarty_tpl->tpl_vars['v']->value['statusbody'];?>
" onclick="statusbody('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" >说明</a> <?php }?></td>
              <td align="center"> <a href="javascript:void(0)" onclick="layer_del('确定要删除？', 'index.php?c=special&act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
');" class="com_bth cblue">删除</a></td>
            </tr>
            <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
            <tr>
              <td colspan="8" class="table_end"><div class="com_msg_no">
                  <p>亲爱的用户，目前您还没有报名专题招聘</p>
                  <a class="com_msg_no_bth com_submit" href="<?php echo smarty_function_url(array('m'=>'special'),$_smarty_tpl);?>
" target="_blank">查看专题招聘信息</a> </div></td>
            </tr>
            <?php } ?>
            <tr>
              <td colspan="8" class="table_end"><div class="diggg"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="admin_Operating_sh" id="infobox" style="padding:10px;display:none;">
  <div class="" style="padding:5px; height:auto;color:#C30; font-size:14px; line-height:23px;white-space: normal; word-break: break-all;" id="showbody"> </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
