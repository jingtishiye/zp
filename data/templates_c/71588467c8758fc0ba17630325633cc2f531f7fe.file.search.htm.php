<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-18 01:33:44
         compiled from "/www/wwwroot/zp.canyinyunfu.com//app/template/wap/search.htm" */ ?>
<?php /*%%SmartyHeaderCode:11561569725eea53f860ab92-25853334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71588467c8758fc0ba17630325633cc2f531f7fe' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com//app/template/wap/search.htm',
      1 => 1554800384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11561569725eea53f860ab92-25853334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplmoblie' => 0,
    'config_wapdomain' => 0,
    'keylist' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eea53f8620735_89821962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eea53f8620735_89821962')) {function content_5eea53f8620735_89821962($_smarty_tpl) {?><div id="searchhtml" class="none">
	<div class="body_wap">
		<header class="header_h">
			<div class="header_fixed">
				<div class="header">
					<div class="header_bg  <?php if ($_smarty_tpl->tpl_vars['tplmoblie']->value['color']) {?>bg<?php echo $_smarty_tpl->tpl_vars['tplmoblie']->value['color'];
}?>">
						<a class="hd-lbtn" href="javascript:void(0)" onclick="searchhtmlhide()"><i class="header_top_l"></i></a>
						<div class="header_h1">
							<div class="header_p_z"><?php if ($_GET['c']=='job'||!$_GET['c']) {?>职位<?php } elseif ($_GET['c']=='resume') {?>简历<?php }?>搜索</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div class="search_body">
		<div class="wap_search_header">
			<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['config_wapdomain']->value;?>
/index.php">
				<input type="hidden" id="type" name="c" value="<?php if ($_GET['c']) {
echo $_GET['c'];
} else { ?>job<?php }?>" />
				<div class="wap_search_text">
					<input type="text" value="" onkeyup="this.value = this.value.replace(/[,]/g,'');" id="input_search" name="keyword" class="" placeholder="请输入<?php if ($_GET['c']=='job'||!$_GET['c']) {?>职位<?php } elseif ($_GET['c']=='resume') {?>简历<?php }?>关键字，如：会计...">
				</div>
				<div class="wap_search_bth">
					<input type="submit" value="搜<?php if ($_GET['c']=='job'||!$_GET['c']) {?>职位<?php } elseif ($_GET['c']=='resume') {?>简历<?php }?>" class="" style="color:#fff">
				</div>
			</form>
		</div>

		<div class="search_history">
			<div class="search_history_tite">
				<span class="search_history_li">历史搜索</span> 
				<span class="search_history_shi" style="display:none" id="clearhistory">
					
				</span>
			</div>
			<div class="search_history_tag_box" id="historylist">
			   <div class="search_history_no">
					暂无历史~
				</div>
			</div>
		</div>
		
		<div class="search_history">
			<div class="search_history_tit">热门搜索</div>
			<div class="search_history_tag_box">
				<?php if ($_GET['c']=='job'||!$_GET['c']) {?>
					<?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"12","recom"=>"1","type"=>"3","iswap"=>"1","item"=>"\'keylist\'","nocache"=>"")
;');$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		
		if($paramer[recom]){
			$tuijian = 1;
		}
		
		if($paramer[type]){
			$type = $paramer[type];
		}
		
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['keylist']->key => $_smarty_tpl->tpl_vars['keylist']->value) {
$_smarty_tpl->tpl_vars['keylist']->_loop = true;
?>
					<div class="search_history_tag">
						<a  href="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a>
					</div>
					<?php } ?>
				
				<?php } elseif ($_GET['c']=='resume') {?>
					<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
global $config;eval('$paramer=array("limit"=>"12","recom"=>"1","type"=>"5","iswap"=>"1","item"=>"\'key\'","nocache"=>"")
;');$list=array();
        
        $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		
		if($paramer[recom]){
			$tuijian = 1;
		}
		
		if($paramer[type]){
			$type = $paramer[type];
		}
		
		if($paramer[limit]){
			$limit=$paramer[limit];
		}else{
			$limit=5;
		}
		include PLUS_PATH."/keyword.cache.php";
		if($paramer[iswap]){
			$wap = "/wap";
		}else{
			$index =1;
		}
		if(is_array($keyword)){
			if($paramer[iswap]){
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v[tuijian]!=1){
						continue;
					}
					if($type && $v[type]!=$type){
						continue;
					}

					$i++;
					if($v[type]=="1"){
						$v[url] = Url("wap",array("c"=>"once","keyword"=>$v['key_name']));
						$v[type_name]='店铺招聘';
					}elseif($v['type']=="13"){
						$v['url'] = Url("wap",array("c"=>"tiny","keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v[type]=="3"){
						$v[url] = Url("wap",array("c"=>"job","keyword"=>$v['key_name']));
						$v[type_name]='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("wap",array("c"=>"company","keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("wap",array("c"=>"resume","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}
					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}else{
				$i=0;
				foreach($keyword as $k=>$v){
					if($tuijian && $v['tuijian']!=1){
						continue;
					}
					if($type && $v['type']!=$type){
						continue;
					}
					$i++;
					if($v['type']=="1"){
						$v['url'] = Url("once",array("keyword"=>$v['key_name']));
						$v['type_name']='店铺招聘';
					}elseif($v['type']=="2"){
						$v['url'] = Url("part",array("keyword"=>$v['key_name']));
						$v['type_name']='兼职';
					}elseif($v['type']=="13"){
						$v['url'] = Url("tiny",array("keyword"=>$v['key_name']));
						$v['type_name']='普工简历';
					}elseif($v['type']=="3"){
						$v['url'] = Url("job",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='职位';
					}elseif($v['type']=="4"){
						$v['url'] = Url("company",array("keyword"=>$v['key_name']));
						$v['type_name']='公司';
					}elseif($v['type']=="5"){
						$v['url'] = Url("resume",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='人才';
					}else if($v['type']=="12"){
						$v['url'] = Url("ask",array("c"=>"search","keyword"=>$v['key_name']));
						$v['type_name']='问答';
					}
					$v['key_title']=$v['key_name'];
					if($v['color']){
						$v['key_name']="<font color=\"".$v['color']."\">".$v['key_name']."</font>";
					}

					$list[] = $v;
					if($i==$limit){
						break;
					}
				}
			}
		}$list = $list; if (!is_array($list) && !is_object($list)) { settype($list, 'array');}
foreach ($list as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
?> 
						<div class="search_history_tag">
							<a href="<?php echo $_smarty_tpl->tpl_vars['key']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['key_name'];?>
</a>
						</div>
					<?php } ?>
				<?php }?>    
			</div>
		</div>

	</div>
</div>
<?php echo '<script'; ?>
>
  
    function clearhis(type) {
        $.post("index.php?c=search&a=del", {
            type: type
        }, function(data) {
            if(data) {
                layer.open({
                    content: "历史已清除！",
                    time: 2,
                    end: function() {
						 window.location.href =data;
                    }
                });
                return false;
            } else {
                layer.open({
                    content: "操作失败！",
                    time: 2,
                    end: 8
                });
                return false;
            }
        });
    }
	function searchhtmlhide(){
		$("#searchhtml").addClass('none');
		$("#listhtml").removeClass('none');
	}
	$(document).ready(function() {
		$(".searchnew").on('click', function() {
			$('body').removeAttr('style');
			$('.popshow').removeClass('grade-w-roll');
			$('.popshow').removeAttr('style');
			$('.popshow').removeClass('popshow');
			setTimeout(function(){
				$("#listhtml").addClass('none');
				$("#searchhtml").removeClass('none');
			},400);
		})

		'<?php if ($_GET['i']) {?>'
			$('body').removeAttr('style');
			$('.popshow').removeClass('grade-w-roll');
			$('.popshow').removeAttr('style');
			$('.popshow').removeClass('popshow');
			setTimeout(function(){
				$("#listhtml").addClass('none');
				$("#searchhtml").removeClass('none');
			},100);
		'<?php }?>'

		var type = $("#type").val();
		$.post("index.php?c=search&a=history", {
            type: type
        }, function(data) {
			if(data){
				var data = eval('(' + data + ')');
				if(data.hisid){
					$("#clearhistory").html("<a href='javascript:void(0);' onclick=\"clearhis('"+data.hisid+"')\">清除历史</a>");
					$("#clearhistory").show();
				}
				if(data.list){
					var html='';
					$.each(data.list, function(){
						html+="<div class=\"search_history_tag\"> <a href=\""+this.url+"\">"+this.key_name+"</a></div>";					
					});
					$("#historylist").html(html);
				}
			} 
        });
	});
<?php echo '</script'; ?>
><?php }} ?>
