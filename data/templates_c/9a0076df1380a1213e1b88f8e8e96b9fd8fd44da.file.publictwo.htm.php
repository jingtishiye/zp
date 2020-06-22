<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-18 01:28:19
         compiled from "/www/wwwroot/zp.canyinyunfu.com//app/template/wap/publictwo.htm" */ ?>
<?php /*%%SmartyHeaderCode:6127806305eea52b37e0d04-66717303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0076df1380a1213e1b88f8e8e96b9fd8fd44da' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com//app/template/wap/publictwo.htm',
      1 => 1554283386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6127806305eea52b37e0d04-66717303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'job_index' => 0,
    'v' => 0,
    'job_name' => 0,
    'city_index' => 0,
    'city_name' => 0,
    'config' => 0,
    'city_type' => 0,
    'userdata' => 0,
    'userclass_name' => 0,
    'config_wapdomain' => 0,
    'industry_name' => 0,
    'uptime' => 0,
    'industry_index' => 0,
    'key' => 0,
    'comdata' => 0,
    'comclass_name' => 0,
    'partdata' => 0,
    'partclass_name' => 0,
    'redeem_index' => 0,
    'redeem_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eea52b3852aa3_70968646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eea52b3852aa3_70968646')) {function content_5eea52b3852aa3_70968646($_smarty_tpl) {?><?php if (!is_callable('smarty_function_searchurl')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.searchurl.php';
if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
?><?php echo '<script'; ?>
>
	$(document).ready(function() {
		$(".searchOptions_list li a").removeClass("search_h1_box_cur_list");
		$("#resume").submit(function(e) {
			var min = $("#minresume").val();
			var max = $("#maxresume").val();
			if(min && max && parseInt(max) < parseInt(min)) {
				$("#minresume").val(max);
				$("#maxresume").val(min);
			}
		});
		$("#job").submit(function(e) {
			var min = $("#minjob").val();
			var max = $("#maxjob").val();
			if(min && max && parseInt(max) < parseInt(min)) {
				$("#minjob").val(max);
				$("#maxjob").val(min);
			}
		});
	});
<?php echo '</script'; ?>
>
<!-- Category职位类别 -->
<div class="Category-eject">
	<ul class="Category-w" id="jobone">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['job_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li class="qCategorytw<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="Categorytw('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','jobone')"><?php echo $_smarty_tpl->tpl_vars['job_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Category-t" id="jobone_son">
	</ul>
	<ul class="Category-s" id="job_post">
	</ul>
</div>
<!-- End Category -->

<!-- grade 城市类别-->
<div class="grade-eject">

	<ul class="grade-w" id="provinceid">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li class="qgrade<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="grade1('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','provinceid','<?php echo $_GET['a'];?>
')"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="grade-t" id="cityid"></ul>
	<ul class="grade-s" id="three_cityid" <?php if ($_GET['a']=='schoolacademy') {?>style="display: none;" <?php }?>></ul>

</div>
<!-- End grade -->

<!-- Substation 分站地区-->
<div class="Substation-eject Substation-height">
	<ul class="Substation-Substation" id="Substation-Substation">
		<li>
			<?php if ($_GET['c']=="job") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'job','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			<?php } elseif ($_GET['c']=="resume") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'resume','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			<?php } elseif ($_GET['c']=="part") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			<?php } elseif ($_GET['c']=="company") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','three_cityid'=>'','untype'=>'three_cityid'),$_smarty_tpl);?>
">全部</a>
			 
			<?php }?>

		</li>

		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['city_type']->value[$_smarty_tpl->tpl_vars['config']->value['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<?php if ($_GET['c']=="job") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'job','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="resume") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'resume','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="part") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			<?php } elseif ($_GET['c']=="company") {?>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','three_cityid'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'three_cityid'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['city_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			 
			<?php }?>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Substation -->

<!-- Sortexp 找人才工作经验-->
<div class="Sortexp-eject Sortexp-height">
	<ul class="Sortexp-Sortexp" id="Sortexp-Sortexp">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<a <?php if ($_GET['c']=="ltresume") {?>href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'ltresume','exp'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'exp'),$_smarty_tpl);?>
" <?php } else { ?>href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'resume','exp'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'exp'),$_smarty_tpl);?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sortexp -->

<!-- gengduos 找人才更多-->
<div class="Gengduos-eject">
	<form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php" method="get" id="resume">
		<input type="hidden" name="c" value="<?php if ($_GET['c']) {
echo $_GET['c'];
} else { ?>resume<?php }?>" />
		<ul class="Gengduos-w" id="Gengduos">
			<li tab_name="Gengduohyt">
				<a href="javascript:void(0);">行业类别<em id="gdshy">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];?>
</em></a>
			</li>
			<li tab_name="Gengduoedut">
				<a href="javascript:void(0);">学历要求<em id="gdsedu">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['edu']];?>
</em></a>
			</li>
			<li tab_name="Gengduoreportt">
				<a href="javascript:void(0);">到岗时间<em id="gdsreport">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['report']];?>
</em></a>
			</li>
			<li tab_name="Gengduouptimet">
				<a href="javascript:void(0);">更新日期<em id="gdsuptime">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];?>
</em></a>
			</li>
			<li tab_name="Gengduotagt">
				<a href="javascript:void(0);">个人标签<em id="gdstag">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_GET['tag']];?>
</em></a>
			</li>
			<li>薪资待遇：
				<span class="salary_text_box">	<input type="text" size="5" name="minsalary" id="minresume" placeholder="1999" value="<?php echo $_GET['minsalary'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text"></span>
				<span> - </span>
				<span class="salary_text_box">	<input type="text" size="5" name="maxsalary" id="maxresume" placeholder="2999" value="<?php echo $_GET['maxsalary'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text"></span>
			</li>
			<li>
				<?php if ($_GET['provinceid']) {?><input type="hidden" name="provinceid" value="<?php echo $_GET['provinceid'];?>
"/><?php }?>
				<?php if ($_GET['cityid']) {?><input type="hidden" name="cityid" value="<?php echo $_GET['cityid'];?>
"/><?php }?>
				<?php if ($_GET['three_cityid']) {?><input type="hidden" name="cityid" value="<?php echo $_GET['three_cityid'];?>
"/><?php }?>
				<?php if ($_GET['jobin']) {?><input type="hidden" name="jobin" value="<?php echo $_GET['jobin'];?>
"/><?php }?>
				<?php if ($_GET['exp']) {?><input type="hidden" name="exp" value="<?php echo $_GET['exp'];?>
"/><?php }?>
               
				<input type="hidden" name="hy" id="gdshyi" value="<?php echo $_GET['hy'];?>
" />
				<input type="hidden" name="edu" id="gdsedui" value="<?php echo $_GET['edu'];?>
" />
				<input type="hidden" name="report" id="gdsreporti" value="<?php echo $_GET['report'];?>
" />
				<input type="hidden" name="uptime" id="gdsuptimei" value="<?php echo $_GET['uptime'];?>
" />
				<input type="hidden" name="tag" id="gdstagi" value="<?php echo $_GET['tag'];?>
" />
				   <div class="search_chlosebth_box"><input type="submit" value="确定" class="">
				<a href="<?php echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c']),$_smarty_tpl);?>
" class="search_chlosebth_box_qk">清空所有</a>
                </div>
               
			</li>
		</ul>
	</form>
	<ul class="Gengduos-t" id="Gengduohyt" style="display:block;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdshy" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
 </li>
		<?php } ?>
	</ul>
	<ul class="Gengduos-t" id="Gengduoedut" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdsedu" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduos-t" id="Gengduoreportt" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdsreport" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduos-t" id="Gengduouptimet" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<li tab_name="gdsuptime" data="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduos-t" id="Gengduotagt" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userdata']->value['user_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdstag" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
</div>
<!-- End gengduos -->

<!-- Sort 找工作经验-->
<div class="Sort-eject Sort-height">
	<ul class="Sort-Sort" id="Sort-Sort">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li onclick="check_city_li('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','exp')">
			<a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sort -->

<!-- Gengduoj 找工作更多-->
<div class="Gengduoj-eject">
	<form action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php" method="get" id="job">
		<input type="hidden" name="c" value="<?php if ($_GET['c']) {
echo $_GET['c'];
} else { ?>job<?php }?>" />
		<?php if ($_GET['a']) {?><input type="hidden" name="a" value="<?php echo $_GET['a'];?>
" /><?php }?>
		<ul class="Gengduoj-w" id="Gengduoj">
		<div class="job_list_chlose ">
				<span <?php if ($_GET['urgent']==''&&$_GET['rec']=='') {?>class="job_list_chlose_a " <?php }?>><a  href="<?php if ($_GET['a']) {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c'],'a'=>$_GET['a']),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c']),$_smarty_tpl);
}?>" ><i class="job_list_chlose_c">所有职位</i></a></span>
				<span <?php if ($_GET['urgent']) {?>class="job_list_chlose_a " <?php }?>>
          			<a class="search_icon" href="<?php if ($_GET['a']) {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c'],'a'=>$_GET['a'],'urgent'=>1),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c'],'urgent'=>1),$_smarty_tpl);
}?>"><i class="job_list_chlose_c">紧急职位</i></a>
     			</span>
				<span <?php if ($_GET['rec']) {?>class="job_list_chlose_a " <?php }?>>
		          	<a class="search_icon" href="<?php if ($_GET['a']) {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c'],'a'=>$_GET['a'],'rec'=>1),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c'],'rec'=>1),$_smarty_tpl);
}?>"><i class="job_list_chlose_c">推荐职位</i></a>
	          	</span>
				<input type="hidden" value="1" id="search" />
			</div>
			<li tab_name="Gengduohy">
				<a href="javascript:void(0);">行业类别<em id="gdjhy">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_GET['hy']];?>
</em></a>
			</li>
			<li tab_name="Gengduopr">
				<a href="javascript:void(0);">公司性质<em id="gdjpr">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['pr']];?>
</em></a>
			</li>
			<li tab_name="Gengduonum">
				<a href="javascript:void(0);">公司规模<em id="gdjnum">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['num']];?>
</em></a>
			</li>
			<li tab_name="Gengduoedu">
				<a href="javascript:void(0);">学历要求<em id="gdjedu">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_GET['edu']];?>
</em></a>
			</li>
			<li tab_name="Gengduouptime">
				<a href="javascript:void(0);">更新日期<em id="gdjuptime">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['uptime']->value[$_GET['uptime']];?>
</em></a>
			</li>
			<li>薪资待遇
				<span class="salary_text_box"><input type="text" size="5" name="minsalary" id="minjob" placeholder="1999" value="<?php echo $_GET['minsalary'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text"></span>
				<span> - </span>
				<span class="salary_text_box"><input type="text" size="5" name="maxsalary" id="maxjob" placeholder="2999" value="<?php echo $_GET['maxsalary'];?>
" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" class="salary_text"></span>
			</li>
			<li>
				<?php if ($_GET['provinceid']) {?><input type="hidden" name="provinceid" value="<?php echo $_GET['provinceid'];?>
"/><?php }?>
				<?php if ($_GET['cityid']) {?><input type="hidden" name="cityid" value="<?php echo $_GET['cityid'];?>
"/><?php }?>
				<?php if ($_GET['three_cityid']) {?><input type="hidden" name="cityid" value="<?php echo $_GET['three_cityid'];?>
"/><?php }?>
				<?php if ($_GET['jobin']) {?><input type="hidden" name="jobin" value="<?php echo $_GET['jobin'];?>
"/><?php }?>
				<?php if ($_GET['exp']) {?><input type="hidden" name="exp" value="<?php echo $_GET['exp'];?>
"/><?php }?>
				<input type="hidden" name="hy" id="gdjhyi" value="<?php echo $_GET['hy'];?>
" />
				<input type="hidden" name="pr" id="gdjpri" value="<?php echo $_GET['pr'];?>
" />
				<input type="hidden" name="num" id="gdjnumi" value="<?php echo $_GET['num'];?>
" />
				<input type="hidden" name="edu" id="gdjedui" value="<?php echo $_GET['edu'];?>
" />
				<input type="hidden" name="uptime" id="gdjuptimei" value="<?php echo $_GET['uptime'];?>
" />
				 <div class="search_chlosebth_box"><input type="submit" value="确定" class=""><a href="<?php if ($_GET['a']) {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c'],'a'=>$_GET['a']),$_smarty_tpl);
} else {
echo smarty_function_url(array('m'=>'wap','c'=>$_GET['c']),$_smarty_tpl);
}?>" class="search_chlosebth_box_qk">清空所有</a></div>
				
			</li>
		</ul>
	</form>
	<ul class="Gengduoj-t" id="Gengduohy" style="display:block;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdjhy" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduoj-t" id="Gengduopr" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdjpr" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduoj-t" id="Gengduonum" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdjnum" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduoj-t" id="Gengduoedu" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li tab_name="gdjedu" data="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="Gengduoj-t" id="Gengduouptime" style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uptime']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<li tab_name="gdjuptime" data="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
		<?php } ?>
	</ul>
</div>
<!-- End Gengduoj -->

<!-- Sorthy 行业弹出框-->
<div class="Sorthy-eject Sorthy-height">
	<ul class="Sorthy-Sorthy" id="Sorthy-Sorthy">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
 			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','hy'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'hy'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['industry_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			 
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sorthy -->

<!-- Sortpr 企业性质弹出框-->
<div class="Sortpr-eject Sortpr-height">
	<ul class="Sortpr-Sortpr" id="Sortpr-Sortpr">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			 
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','pr'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'pr'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			 

		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sortpr -->

<!-- Sortmun 企业规模弹出框-->
<div class="Sortmun-eject Sortmun-height">
	<ul class="Sortmun-Sortmun" id="Sortmun-Sortmun">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comdata']->value['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
		 
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'company','mun'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'mun'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['comclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
			 

		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sortmun -->

<!-- Sorttype 兼职类型弹出框-->
<div class="Sorttype-eject Sorttype-height">
	<ul class="Sorttype-Sorttype" id="Sorttype-Sorttype">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','type'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'type'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sorttype -->
<!-- Sortcycle 结算周期弹出框-->
<div class="Sortcycle-eject Sortcycle-height">
	<ul class="Sortcycle-Sortcycle" id="Sortcycle-Sortcycle">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partdata']->value['part_billing_cycle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li>
			<a href="<?php echo smarty_function_searchurl(array('m'=>'wap','c'=>'part','cycle'=>$_smarty_tpl->tpl_vars['v']->value,'untype'=>'cycle'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['partclass_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</a>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- End Sortcycle -->


 
 

 
 
 


<!-- wap商城商品类别 -->
<div class="redeem-eject">
	<ul class="redeem-w" id="nid">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['redeem_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<li class="qredeemw<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" onclick="redeemw('<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['redeem_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
','nid')"><?php echo $_smarty_tpl->tpl_vars['redeem_name']->value[$_smarty_tpl->tpl_vars['v']->value];?>
</li>
		<?php } ?>
	</ul>
	<ul class="redeem-t" id="tnid">
	</ul>

</div>
<!-- End redeem --><?php }} ?>
