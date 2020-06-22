<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-17 17:30:34
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/default/index/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:12972140735ee9e2ba758929-83352286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c2cc8a0f64bed38ccf59285ed0523c6fd54ff93' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/default/index/index.htm',
      1 => 1550884648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12972140735ee9e2ba758929-83352286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'style' => 0,
    'config' => 0,
    'ishtml' => 0,
    'adlist_73' => 0,
    'adlist_72' => 0,
    'lunbo' => 0,
    'keylist' => 0,
    'urgent_list' => 0,
    'announcementlist' => 0,
    'indexmodel' => 0,
    'hotjoblist' => 0,
    'adlist_13' => 0,
    'adlist_14' => 0,
    'adlist_15' => 0,
    'rec_list' => 0,
    'job_list' => 0,
    'ulist' => 0,
    'alist' => 0,
    'pkey' => 0,
    'plist' => 0,
    'linklist' => 0,
    'linklist2' => 0,
    'uid' => 0,
    'footer_ad' => 0,
    'key' => 0,
    'left_ad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ee9e2ba7f4182_32374712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee9e2ba7f4182_32374712')) {function content_5ee9e2ba7f4182_32374712($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.url.php';
if (!is_callable('smarty_function_listurl')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.listurl.php';
if (!is_callable('smarty_function_formatpicurl')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.formatpicurl.php';
if (!is_callable('smarty_function_webspecial')) include '/www/wwwroot/zp.canyinyunfu.com/app/include/libs/plugins/function.webspecial.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/demo14.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/style/css.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" rel="stylesheet" type="text/css" /> 
		<?php if ($_smarty_tpl->tpl_vars['ishtml']->value) {?>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('m'=>'ajax','c'=>'wjump'),$_smarty_tpl);?>
" language="javascript"><?php echo '</script'; ?>
>
        <?php }?>
    </head>

    <body class="body_bg">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="w1000">
            <div class="index_banner none" id="js_ads_banner_top">
                <?php  $_smarty_tpl->tpl_vars['adlist_73'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_73']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[73];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 1;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0') &&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_73']->key => $_smarty_tpl->tpl_vars['adlist_73']->value) {
$_smarty_tpl->tpl_vars['adlist_73']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['adlist_73']->value['html'];?>
 <?php } ?>
            </div>
            <div class="index_banner" id="js_ads_banner_top_slide">
                <?php  $_smarty_tpl->tpl_vars['adlist_72'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_72']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[72];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 1;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0') &&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_72']->key => $_smarty_tpl->tpl_vars['adlist_72']->value) {
$_smarty_tpl->tpl_vars['adlist_72']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['adlist_72']->value['html'];?>
 <?php } ?>
            </div>
            <div class="hp_kk fl">
                <div class="hp_login fl">
                    <div class="hp_login_tit"><i class="hp_login_tit_icon"></i>会员登录</div>
                    <div class="hp_login_hy"> <i class="hp_login_hy_icon fl"></i>
                        <input class="hp_login_hy_but fl" type="text" id="username" name="username" placeholder="邮箱/手机号/用户名" />
                    </div>
                    <div class="hp_login_hy"> <i class="hp_login_mm_icon fl"></i>
                        <input class="hp_login_mm_but fl" type="password" id="password" name="password" placeholder="请输入密码" />
                    </div>
                    <div class="hp_login_lg">
                        <input class="hp_login_lg_but" type="submit" value="登录" onclick="check_login('<?php echo smarty_function_url(array('m'=>'login','c'=>'loginsave'),$_smarty_tpl);?>
');" />
                    </div>
                    <div class="hp_login_rg">
                        <a href="<?php echo smarty_function_url(array('m'=>'register'),$_smarty_tpl);?>
">注册账号</a>
                    </div>
                </div>

                <div class="hp_t_cont">
                    <div class="hp_banner fl" id="ban">
                        <div class="layui-carousel" id="test1" lay-filter="test1">
                            <div carousel-item=""> <?php  $_smarty_tpl->tpl_vars["lunbo"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lunbo"]->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[3];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0') &&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars["lunbo"]->key => $_smarty_tpl->tpl_vars["lunbo"]->value) {
$_smarty_tpl->tpl_vars["lunbo"]->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars["lunbo"]->key;
?>
                                <div><?php echo $_smarty_tpl->tpl_vars['lunbo']->value['html'];?>
</div>
                                <?php } ?> </div>
                        </div>
                    </div>

                    <div class="hp_hotjob fl">
                        <div class="hp_hotjob_b">
                            <?php  $_smarty_tpl->tpl_vars['keylist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keylist']->_loop = false;
global $config;eval('$paramer=array("limit"=>"28","recom"=>"1","type"=>"3","item"=>"\'keylist\'","nocache"=>"")
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
                            <a href="<?php echo smarty_function_listurl(array('type'=>'keyword','v'=>$_smarty_tpl->tpl_vars['keylist']->value['key_title']),$_smarty_tpl);?>
" class="jos_tag_a" title="<?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['keylist']->value['key_name'];?>
</a> <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="hp_zp fr">
                    <div class="wantedjob">

                        <div class="wantedjob_tit"><span class="wantedjob_tit_s">紧急招聘</span>
                            <a href="<?php echo smarty_function_listurl(array('type'=>'tp','v'=>1),$_smarty_tpl);?>
" target="_blank" class="wantedjob_titmore">更多>></a>
                        </div>
                        <div class="wantedjob_cont">
                            <ul class="wantedjob_cont_list">
                                <?php  $_smarty_tpl->tpl_vars['urgent_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['urgent_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("namelen"=>"30","comlen"=>"30","urgent"=>"\'1\'","limit"=>"12","item"=>"\'urgent_list\'","name"=>"\'urgent_list1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

			//排序字段默认为更新时间
			$orderField = "lastupdate";
			if($paramer[order] && $paramer[order]!="lastdate"){
				$orderField = str_replace("'","",$paramer[order]);
			}

			//排序规则 默认为倒序
			$orderType = "DESC";
			if(strtoupper(trim($paramer[sort])) == "ASC"){
				$orderType = "ASC";
			}

			$sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

			if($paramer[ispage]){
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
			}
						
			if(count(ids) > 0){
				$ids = implode(",", $ids);
				$where = "id in ($ids) order by field(id, $ids) ";
			}
			else{
				$where = "0";
			}
			
			$limit = "";
		}//end if($config["useSphinx"])
		else{
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(is_array($cityid)){
					foreach($cityid as $value){
						$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
					}
					$where1[]=@implode(" or ",$class);
				}
				$where.=" AND (".@implode(" or ",$where1).")";
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$urgent_list = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($urgent_list) && !empty($urgent_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($urgent_list as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($urgent_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($urgent_list[$key]);
					continue;
				}else{
					$urgent_list[$key] = $db->array_action($value,$cache_array);
					$urgent_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$urgent_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$urgent_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$urgent_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$urgent_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$urgent_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$urgent_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$urgent_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$urgent_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$urgent_list[$key][logo] =$r_uid[$value['uid']][logo];
					$urgent_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$urgent_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$urgent_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$urgent_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$urgent_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$urgent_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$urgent_list[$key]['redtime'] =1;
					}else{
						$urgent_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$urgent_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$urgent_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$urgent_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$urgent_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$urgent_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$urgent_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$urgent_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$urgent_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$urgent_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$urgent_list[$key][ratlogo] = $v[com_pic];
							}else{
								$urgent_list[$key][ratlogo] ='';
							}
							$urgent_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$urgent_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$urgent_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$urgent_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$urgent_list[$key][name_n]);
						$urgent_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$urgent_list[$key][com_n]);
						$urgent_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$urgent_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($urgent_list)){
				if($paramer[keyword]!=""&&!empty($urgent_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$urgent_list = $urgent_list; if (!is_array($urgent_list) && !is_object($urgent_list)) { settype($urgent_list, 'array');}
foreach ($urgent_list as $_smarty_tpl->tpl_vars['urgent_list']->key => $_smarty_tpl->tpl_vars['urgent_list']->value) {
$_smarty_tpl->tpl_vars['urgent_list']->_loop = true;
?>
                                <li>
                                    <div class="wantedjob_cont_list_b">
                                        <div class="wantedjob_name"> <i class="wantedjob_icon"></i>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['urgent_list']->value['job_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['urgent_list']->value['name'];?>
</a> <img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/jobjp.png" alt="<?php echo $_smarty_tpl->tpl_vars['urgent_list']->value['com_name'];?>
"></div>
                                        <div class="wantedjob_info"><i class="hp_urg_job_ct_r"><?php if ($_smarty_tpl->tpl_vars['urgent_list']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['urgent_list']->value['job_salary'];?>
</i> <?php echo $_smarty_tpl->tpl_vars['urgent_list']->value['job_exp'];?>
经验<i class="index_job_line">|</i><?php echo $_smarty_tpl->tpl_vars['urgent_list']->value['job_edu'];?>
学历</div>
                                        <div class="wantedjob_comname">
                                            <a class="" href="<?php echo $_smarty_tpl->tpl_vars['urgent_list']->value['com_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['urgent_list']->value['com_name'];?>
</a>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>

                            </ul>

                        </div>
                    </div>
                    <div class="hp_web_cont">
                        <div class="hp_web">
                            <div class="hp_web_top">网站公告
                                <a href="<?php echo smarty_function_url(array('m'=>'announcement'),$_smarty_tpl);?>
" class="g_more">更多>></a>
                            </div>
                            <div class="hp_web_ct">
                                <ul>
                                    <?php  $_smarty_tpl->tpl_vars['announcementlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcementlist']->_loop = false;
$announcementlist=array();$time=time();eval('$paramer=array("limit"=>"2","item"=>"\'announcementlist\'","t_len"=>"20","nocache"=>"")
;');
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = 1;
		//分站
		if($config['did']){
			$where.=" and `did`='".$config['did']."'";
		}else if($config['sy_web_site']=="1"){
			$where.=" and `did`='0'";
		}  
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"admin_announcement",$where,$Purl,"",0,$_smarty_tpl);
		}
		//排序字段 默认按照xuanshang排序
		if($paramer[order]){
			$where.="  ORDER BY `".$paramer[order]."`";
		}else{
			$where.="  ORDER BY `datetime`";
		}
		//排序方式默认倒序
		if($paramer[sort]){
			$where.=" ".$paramer[sort];
		}else{
			$where.=" DESC";
		}

		$announcementlist=$db->select_all("admin_announcement",$where.$limit);
		if(is_array($announcementlist)){
			foreach($announcementlist as $key=>$value){
				//截取标题
				if($paramer[t_len]){
					$announcementlist[$key][title_n] = mb_substr($value['title'],0,$paramer[t_len],"utf-8");
				}
				$announcementlist[$key][time]=date("Y-m-d",$value[datetime]);
				$announcementlist[$key][url] = Url("announcement",array("id"=>$value[id]),"1");
			}
		}$announcementlist = $announcementlist; if (!is_array($announcementlist) && !is_object($announcementlist)) { settype($announcementlist, 'array');}
foreach ($announcementlist as $_smarty_tpl->tpl_vars['announcementlist']->key => $_smarty_tpl->tpl_vars['announcementlist']->value) {
$_smarty_tpl->tpl_vars['announcementlist']->_loop = true;
?>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['announcementlist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['announcementlist']->value['title_n'];?>
</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php  $_smarty_tpl->tpl_vars['xxxx'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xxxx']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['indexmodel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xxxx']->key => $_smarty_tpl->tpl_vars['xxxx']->value) {
$_smarty_tpl->tpl_vars['xxxx']->_loop = true;
?>
			 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } ?>
            <!-- 名企-->
            <div class="yun_new_index_box" style="padding-bottom:0px;">
                <div class="yun_new_index_tit fl">
                    <i class="yun_new_index_tit_line"></i>
                    <i class="yun_new_index_tit_lefticon"></i>
                    <div class="yun_new_index_tit_left">名企招聘</div>

                    <a href="<?php echo smarty_function_listurl(array('m'=>'company','rec'=>1),$_smarty_tpl);?>
" target="_blank" class="yun_new_index_titmore">查看更多>></a>
                </div>

                <section>
                    <div class="yunFamousenterprises fl">
                        <div class="yunFamousenterprises_box fl">
                            <div class="Famous_recruitment_cont">
                                <div class="index_left15560">
                                    <div id="mainids">
                                        <?php  $_smarty_tpl->tpl_vars['hotjoblist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hotjoblist']->_loop = false;
global $db,$db_config,$config;eval('$paramer=array("item"=>"\'hotjoblist\'","limit"=>"18","nocache"=>"")
;');$hotjoblist=array();
		
		$time = time();
		//处理传入参数，并且构造分页参数
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr['arr'];
		$Purl =  $ParamerArr['purl'];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		//是否属于分站下
		if($config[sy_web_site]=="1"){
			$jobwhere="";
			if($config[province]>0 && $config[province]!=""){
				$jobwhere.=" and `provinceid`='$config[province]'";
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$jobwhere.=" and `cityid`='$config[cityid]'";
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$jobwhere.=" and `three_cityid`='$config[three_cityid]'";
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$jobwhere.=" and `hy`='".$config[hyclass]."'";
			} 
			if($jobwhere){
				$comlist=$db->select_all("company","1 ".$jobwhere,"`uid`");
				if(is_array($comlist)){
					foreach($comlist as $v){
						$cuid[]=$v[uid];
					}
				}
				$hotwhere=" and `uid` in (".@implode(",",$cuid).")";
			} 
		}
		

		$time = time();
		$where = "`time_start`<$time AND `time_end`>$time".$hotwhere;$order = " ORDER BY `sort` ";$sort = 'DESC';
		if($paramer['limit']){
				$limit=" limit ".$paramer['limit'];
			}
		$where.=$order.$sort;
        $Query = $db->query("SELECT * FROM $db_config[def]hotjob where ".$where.$limit); 
		while($rs = $db->fetch_array($Query)){
			$hotjoblist[] = $rs;
			$ListId[] =  $rs[uid];
		}

		//是否需要查询对应职位
		$JobId = @implode(",",$ListId);
		$comList=$db->select_all("company","`uid` IN ($JobId)","`shortname`,`uid`,`hy`,`provinceid`,`cityid`,`three_cityid`");
		
		$JobList=$db->select_all("company_job","`uid` IN ($JobId) and state=1 and r_status='1' and status='0' $jobwhere");
		$statis=$db->select_all("company_statis","`uid` IN ($JobId)","`uid`,`comtpl`");
		if(is_array($ListId)){
			//处理类别字段
			$cache_array = $db->cacheget();
			foreach($hotjoblist as $key=>$value){
				foreach($comList as $v){
					if($value['uid']==$v['uid']){
						if($v['shortname']){
							$hotjoblist[$key]["username"]= $v[shortname];
						}
						$hotjoblist[$key]["hy"]= $cache_array[industry_name][$v[hy]];
						$hotjoblist[$key]["job_city_one"]= $cache_array[city_name][$v[provinceid]];
						$hotjoblist[$key]["job_city_two"]= $cache_array[city_name][$v[cityid]];
					}
				}
				$i=0;$j=0;
				$hotjoblist[$key]["num"]=0;
				if(is_array($JobList)){
					

					foreach($JobList as $ke=>$va){ 
						if($value[uid]==$va[uid]){
							if($j<3){
								$hotjob_url = Url("job",array("c"=>"comapply","id"=>"$va[id]"),"1");
								$curl=  Url("company",array("c"=>"show","id"=>$value[uid]));
								$va[name] = mb_substr($va[name],0,8,"utf-8");
								$hotjoblist[$key]["hotjob"].="<div class='index_mq_box_cont_showjoblist'><a href=\"$hotjob_url\">".$va[name]."</a></div>";
								
							}else{
                                if($j==3){
                                    $hotjoblist[$key]["hotjob"].="<div class='index_mq_box_cont_showjobmore'><a href=\"$curl\">更多职位</a></div>";
							     }
							}
                            $j++;
						}
					}

					
					$hotjoblist[$key]["job"].="<div class=\"area_left\"> ";
					
					foreach($JobList as $k=>$v){
						if($value[uid]==$v[uid] && $i<5){
							$job_url = Url("job",array("c"=>"comapply","id"=>"$v[id]"),"1");
							$v[name] = mb_substr($v[name],0,10,"utf-8");
							$hotjoblist[$key]["job"].="<a href='".$job_url."'>".$v[name]."</a>";
							$i++;
						}
						if($value[uid]==$v[uid]){
							$hotjoblist[$key]["num"]=$hotjoblist[$key]["num"]+1;
						}
					}

					foreach($statis as $v){
						if($value['uid']==$v['uid']){
							if($v['comtpl'] && $v['comtpl']!="default"){
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]))."#job";
							}else{
								$jobs_url = Url("company",array("c"=>"show","id"=>$value[uid]));
							}
						}
					}
					$com_url = Url("company",array("c"=>"show","id"=>$value[uid]));
					$hotjoblist[$key]["job"].="</div><div class=\"area_right\"><a href='".$com_url."'>".$value["username"]."</a></div>";
					$hotjoblist[$key]["url"]=$com_url;
				}
			}
		}$hotjoblist = $hotjoblist; if (!is_array($hotjoblist) && !is_object($hotjoblist)) { settype($hotjoblist, 'array');}
foreach ($hotjoblist as $_smarty_tpl->tpl_vars['hotjoblist']->key => $_smarty_tpl->tpl_vars['hotjoblist']->value) {
$_smarty_tpl->tpl_vars['hotjoblist']->_loop = true;
?>
                                        <div class="tlogo">
                                            <ul>
                                                <li onmouseover="showDiv2(this)" onmouseout="showDiv2(this)">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['url'];?>
" target="_blank" class="tlogo_p_a"><img width="100" height="100" border="1" class="on lazy" src="<?php echo smarty_function_formatpicurl(array('path'=>$_smarty_tpl->tpl_vars['hotjoblist']->value['hot_pic'],'type'=>'comlogo'),$_smarty_tpl);?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" alt="<?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['username'];?>
" /></a>
                                                    <div class="yunFamousenterprises_comname"><?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['username'];?>
</div>
                                                    <div class="yunFamousenterprises_comname_bg"></div>
                                                    <div class="show">
                                                        <div class="area"><?php echo $_smarty_tpl->tpl_vars['hotjoblist']->value['job'];?>
</div>
                                                    </div>

                                                </li>
                                            </ul>
                                        </div>
                                        <?php } ?> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
           
            <div class="hp_urg_job_l fl">
                <div class="hp_urg_job_l_1250 fl">
                    <?php  $_smarty_tpl->tpl_vars['adlist_13'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_13']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[13];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 5;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0') &&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_13']->key => $_smarty_tpl->tpl_vars['adlist_13']->value) {
$_smarty_tpl->tpl_vars['adlist_13']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['adlist_13']->value['html'];?>
 <?php } ?> <?php  $_smarty_tpl->tpl_vars['adlist_14'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_14']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[14];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 6;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0') &&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_14']->key => $_smarty_tpl->tpl_vars['adlist_14']->value) {
$_smarty_tpl->tpl_vars['adlist_14']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['adlist_14']->value['html'];?>
 <?php } ?> <?php  $_smarty_tpl->tpl_vars['adlist_15'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adlist_15']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[15];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 16;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0') &&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['adlist_15']->key => $_smarty_tpl->tpl_vars['adlist_15']->value) {
$_smarty_tpl->tpl_vars['adlist_15']->_loop = true;
?> <?php echo $_smarty_tpl->tpl_vars['adlist_15']->value['html'];?>
 <?php } ?> </div>
            </div>

            <div class="yun_new_index_box">
                <div class="yun_new_index_tit fl">
                    <i class="yun_new_index_tit_line"></i>
                    <i class="yun_new_index_tit_lefticon"></i>
                    <div class="yun_new_index_tit_left">推荐职位</div>

                    <a href="<?php echo smarty_function_listurl(array('type'=>'tp','v'=>2),$_smarty_tpl);?>
" target="_blank" class="yun_new_index_titmore">查看更多>></a>

                </div>

                <div class="index_newjob fl">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['rec_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rec_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("namelen"=>"12","comlen"=>"18","rec"=>"\'1\'","limit"=>"12","item"=>"\'rec_list\'","name"=>"\'rec_list1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

			//排序字段默认为更新时间
			$orderField = "lastupdate";
			if($paramer[order] && $paramer[order]!="lastdate"){
				$orderField = str_replace("'","",$paramer[order]);
			}

			//排序规则 默认为倒序
			$orderType = "DESC";
			if(strtoupper(trim($paramer[sort])) == "ASC"){
				$orderType = "ASC";
			}

			$sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

			if($paramer[ispage]){
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
			}
						
			if(count(ids) > 0){
				$ids = implode(",", $ids);
				$where = "id in ($ids) order by field(id, $ids) ";
			}
			else{
				$where = "0";
			}
			
			$limit = "";
		}//end if($config["useSphinx"])
		else{
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(is_array($cityid)){
					foreach($cityid as $value){
						$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
					}
					$where1[]=@implode(" or ",$class);
				}
				$where.=" AND (".@implode(" or ",$where1).")";
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$rec_list = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($rec_list) && !empty($rec_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($rec_list as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($rec_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($rec_list[$key]);
					continue;
				}else{
					$rec_list[$key] = $db->array_action($value,$cache_array);
					$rec_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$rec_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$rec_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$rec_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$rec_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$rec_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$rec_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$rec_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$rec_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$rec_list[$key][logo] =$r_uid[$value['uid']][logo];
					$rec_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$rec_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$rec_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$rec_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$rec_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$rec_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$rec_list[$key]['redtime'] =1;
					}else{
						$rec_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$rec_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$rec_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$rec_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$rec_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$rec_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$rec_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$rec_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$rec_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$rec_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$rec_list[$key][ratlogo] = $v[com_pic];
							}else{
								$rec_list[$key][ratlogo] ='';
							}
							$rec_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$rec_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$rec_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$rec_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$rec_list[$key][name_n]);
						$rec_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$rec_list[$key][com_n]);
						$rec_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$rec_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($rec_list)){
				if($paramer[keyword]!=""&&!empty($rec_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$rec_list = $rec_list; if (!is_array($rec_list) && !is_object($rec_list)) { settype($rec_list, 'array');}
foreach ($rec_list as $_smarty_tpl->tpl_vars['rec_list']->key => $_smarty_tpl->tpl_vars['rec_list']->value) {
$_smarty_tpl->tpl_vars['rec_list']->_loop = true;
?>
                        <li>
                            <div class="index_newjob_name">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['rec_list']->value['job_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['rec_list']->value['name_n'];?>
</a>
                            </div>
                            <div class="index_newjob_time">
                                <?php if ($_smarty_tpl->tpl_vars['rec_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['rec_list']->value['redtime']=='1') {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['rec_list']->value['time'];?>
</span> <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['rec_list']->value['time'];?>
 <?php }?>更新

                            </div>
                            <div class="index_newjob_info">
                                <span class="index_newjob_info_xz"><?php if ($_smarty_tpl->tpl_vars['rec_list']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['rec_list']->value['job_salary'];?>
</span><span class="index_job_line">|</span><?php echo mb_substr($_smarty_tpl->tpl_vars['rec_list']->value['job_city_two'],0,4,"utf-8");?>
 <?php echo mb_substr($_smarty_tpl->tpl_vars['rec_list']->value['job_city_three'],0,4,"utf-8");?>
<span class="index_job_line">|</span><?php echo $_smarty_tpl->tpl_vars['rec_list']->value['job_exp'];?>
经验<span class="index_job_line">|</span><?php echo $_smarty_tpl->tpl_vars['rec_list']->value['job_edu'];?>
学历
                            </div>
                            <div class="index_newjob_com">
                                <div class="index_newjob_comlogo"><img src="<?php echo $_smarty_tpl->tpl_vars['rec_list']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" width="48" height="48" /></div>
                                <div class="index_newjob_comname">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['rec_list']->value['com_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['rec_list']->value['com_n'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['rec_list']->value['ratlogo']&&$_smarty_tpl->tpl_vars['rec_list']->value['ratlogo']!="0") {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['rec_list']->value['ratlogo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['rec_list']->value['ratname'];?>
" width="16" height="16" /><?php }?> <?php if ($_smarty_tpl->tpl_vars['rec_list']->value['yyzz_status']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/disc_icon10.png" title="认证企业" /><?php }?>
                                </div>
                                <div class="index_newjob_cominfo"><?php echo $_smarty_tpl->tpl_vars['rec_list']->value['hy_n'];?>
</div>
                            </div>

                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="yun_new_index_box">
                <div class="yun_new_index_tit fl">
                    <i class="yun_new_index_tit_line"></i>
                    <i class="yun_new_index_tit_lefticon"></i>
                    <div class="yun_new_index_tit_left">最新职位</div>

                    <a href="<?php echo smarty_function_url(array('m'=>'job','c'=>'search'),$_smarty_tpl);?>
" target="_blank" class="yun_new_index_titmore">查看更多>></a>

                </div>

                <div class="index_newjob fl">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['job_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['job_list']->_loop = false;
global $db,$db_config,$config;
		$time = time();
		
		
		//可以做缓存
        eval('$paramer=array("namelen"=>"30","comlen"=>"18","limit"=>"12","item"=>"\'job_list\'","name"=>"\'job_list1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
        $Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		include_once  PLUS_PATH."/comrating.cache.php";
		include(CONFIG_PATH."db.data.php"); 
		if($config[sy_web_site]=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config[cityid]>0 && $config[cityid]!=""){
				$paramer[cityid] = $config[cityid];
			}
			if($config[three_cityid]>0 && $config[three_cityid]!=""){
				$paramer[three_cityid] = $config[three_cityid];
			}
			if($config[hyclass]>0 && $config[hyclass]!=""){
				$paramer[hy]=$config[hyclass];
			}
		}

		if(isUseSphinx()){
			include_once(LIB_PATH."sphinx.class.php");
			
			$where = array();

			$where[] = array("setFilterRange", "edate", $time, 9999999999);
			$where[] = array("setFilter", "state", array(1));
			if($paramer[sdate]){
				$where[] = array("setFilterRange", "sdate", strtotime("-".intval($paramer[sdate])." day",time()), 9999999999);
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where[] = array("setFilter", "uid", array($paramer[uid]));
			}

			//是否推荐职位
			if($paramer[rec]){
				$where[] = array("setFilterRange", "rec_time", $time, 9999999999);
			}

			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $job_uid);
			}

			//取不包含当前id的职位
			if($paramer[noid]){
				$where[] = array("setFilter", "id", array($paramer[noid]), true);
			}

			//是否被锁定
			if($paramer[r_status]){
				$where[] = array("setFilter", "r_status", array(2));
			}else{
				$where[] = array("setFilter", "r_status", array(1));
			}

			//是否下架职位
			if($paramer[status]){
				$where[] = array("setFilter", "status", array(1));
			}else{
				$where[] = array("setFilter", "status", array(0));
			}

			//公司体制
			if($paramer[pr]){
				$where[] = array("setFilter", "pr", array($paramer[pr]));
			}

			//公司行业分类
			if($paramer['hy']){
				$where[] = array("setFilter", "hy", array($paramer[hy]));
			}

			//职位大类
			if($paramer[job1]){
				$where[] = array("setFilter", "job1", array($paramer[job1]));
			}
			//职位子类
			if($paramer[job1_son]){
				$where[] = array("setFilter", "job1_son", array($paramer[job1_son]));
			}
			//职位三级分类
			if($paramer[job_post]){
				$job_post = explode(",", $paramer[job_post]);
				$where[] = array("setFilter", "job_post", $job_post);
			}

			//您可能感兴趣的职位--个人会员中心
			// if($paramer['jobwhere']){
			// 	$where[] = array("setFilter", "jobwhere", array($paramer[jobwhere]));
			// }

			//职位分类综合查询
			$queryStr = array();
			if($paramer['jobids']){
				$queryStr [] = "(@job1 = $paramer[jobids] | @job1_son = $paramer[jobids] | @job_post = $paramer[jobids] )";
			}

			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$queryStr [] = "(@job1 in ($paramer[jobin]) | @job1_son in ($paramer[jobin]) | @job_post in ($paramer[jobin]) )";
			}

			//城市大类
			if($paramer[provinceid]){
				$where[] = array("setFilter", "provinceid", array($paramer[provinceid]));
			}
			//城市子类
			if($paramer['cityid']){
				$cityid = explode(",", $paramer[cityid]);
				$where[] = array("setFilter", "cityid", $cityid);
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$three_cityid = explode(",", $paramer[three_cityid]);
				$where[] = array("setFilter", "three_cityid", $three_cityid);
			}
			
			//学历
			if($paramer[edu]){
				$where[] = array("setFilter", "edu", array($paramer[edu]));
			}
			//工作经验
			if($paramer[exp]){
				$where[] = array("setFilter", "exp", array($paramer[exp]));
			}
			//到岗时间
			if($paramer[report]){
				$where[] = array("setFilter", "report", array($paramer[report]));
			}
			//职位性质
			if($paramer[type]){
				$where[] = array("setFilter", "type", array($paramer[type]));
			}
			//性别
			if($paramer[sex]){
				$where[] = array("setFilter", "sex", array($paramer[sex]));
			}
			//应届生
			if($paramer[is_graduate]){
				$where[] = array("setFilter", "is_graduate", array($paramer[is_graduate]));
			}
			//公司规模
			if($paramer[mun]){
				$where[] = array("setFilter", "mun", array($paramer[mun]));
			}

			if($paramer[minsalary]){
				$where[] = array("setFilterRange", "maxsalary", intval($paramer[minsalary]), 99999999);
				
			}
			if($paramer[maxsalary]){
				$where[] = array("setFilterRange", "minsalary", 0, intval($paramer[maxsalary]));
			}

            //福利待遇
            $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where[] = array("setFilter", "uid", $welfareid);
			}

			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$queryStr [] = "(@provinceid in ($paramer[cityin]) | @cityid in ($paramer[cityin]) | @three_cityid in ($paramer[cityin]) )";
			}

			//紧急招聘urgent
			if($paramer[urgent]){
				$where[] = array("setFilterRange", "urgent_time", $time, 9999999999);
			}

			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
    			    $where[] = array("setFilterRange", "lastupdate", $beginToday, 9999999999);
        		}else{
        			$time=time();
    				$uptime = $time-($paramer[uptime]*86400);
    				$where[] = array("setFilterRange", "lastupdate", $uptime, 9999999999);
        		}
			}

			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$queryStr [] = "(@com_name ($paramer[comname]) )";
			}

			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where[] = array("setFilter", "com_provinceid", array($paramer[com_pro]));
			}

			//按照关键字匹配职位名称、企业名称等
			if($paramer[keyword]){
				include  PLUS_PATH."/city.cache.php";
				$cityid = array();
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(count($cityid) > 0){
					$cityid = implode(",", $cityid);
					$queryStr [] = "(@provinceid in ($cityid) | @cityid in ($cityid) | @three_cityid in ($cityid) )";
				}

				$where["keywords"] = $paramer[keyword];
			}

			//多选职位
			if($paramer["job"]){
				$paraJob = explode(",", $paramer[job]);
				$where[] = array("setFilter", "job_post", $paraJob);
			}

			//竞价招聘
			if($paramer[bid]){
				$where[] = array("setFilterRange", "xsdate", $time, 9999999999);
			}

			if(count($queryStr) > 0){
				$where["queryStr"] = $queryStr;
			}
			
			$sphinx = new sphinx();
			$sphinx->setFieldWeights(array("name"=>2,"com_name"=>1));

			//排序字段默认为更新时间
			$orderField = "lastupdate";
			if($paramer[order] && $paramer[order]!="lastdate"){
				$orderField = str_replace("'","",$paramer[order]);
			}

			//排序规则 默认为倒序
			$orderType = "DESC";
			if(strtoupper(trim($paramer[sort])) == "ASC"){
				$orderType = "ASC";
			}

			$sphinx->setSortMode(SPH_SORT_EXTENDED, "@weight desc, $orderField $orderType, @id desc");

			if($paramer[ispage]){
				$limitArr = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);
				$ids = $sphinx->getIds($where, $limitArr["offset"], $limitArr["limit"], "company_job");
			}
			else if($paramer[limit]){
				$ids = $sphinx->getIds($where, 0, $paramer[limit], "company_job");
			}
			else{
				$ids = $sphinx->getIds($where, 0, 20, "company_job");
			}
						
			if(count(ids) > 0){
				$ids = implode(",", $ids);
				$where = "id in ($ids) order by field(id, $ids) ";
			}
			else{
				$where = "0";
			}
			
			$limit = "";
		}//end if($config["useSphinx"])
		else{
			if($paramer[sdate]){
				$where = "`sdate`>".strtotime("-".intval($paramer[sdate])." day",time())." and `state`=1";
			}else{
				$where = "`state`=1";
			}
	        
			//按照UID来查询（按公司地址查询可用GET[id]获取当前公司ID）
			if($paramer[uid]){
				$where .= " AND `uid` = '$paramer[uid]'";
			}
			//是否推荐职位
			if($paramer[rec]){
				
				$where.=" AND `rec_time`>=".time();
				
			}
			//企业认证条件
			if($paramer['cert']){
				$job_uid=array();
				$company=$db->select_all("company","`yyzz_status`=1","`uid`");
				if(is_array($company)){
					foreach($company as $v){
						$job_uid[]=$v['uid'];
					}
				}
				$where.=" and `uid` in (".@implode(",",$job_uid).")";
			}
			//取不包含当前id的职位
			if($paramer[noid]){
				$where.= " and `id`<>$paramer[noid]";
			}
			//是否被锁定
			if($paramer[r_status]){
				$where.= " and `r_status`=2";
			}else{
				$where.= " and `r_status`=1";
			}
			//是否下架职位
			if($paramer[status]){
				$where.= " and `status`='1'";
			}else{
				$where.= " and `status`='0'";
			}
			//公司体制
			if($paramer[pr]){
				$where .= " AND `pr` =$paramer[pr]";
			}
			//公司行业分类
			if($paramer['hy']){
				$where .= " AND `hy` = $paramer[hy]";
			} 
			//职位大类
			if($paramer[job1]){
				$where .= " AND `job1` = $paramer[job1]";
			}
			//职位子类
			if($paramer[job1_son]){
				$where .= " AND `job1_son` = $paramer[job1_son]";
			}
			//职位三级分类
			if($paramer[job_post]){
				$where .= " AND (`job_post` IN ($paramer[job_post]))";
			}
			//您可能感兴趣的职位--个人会员中心
			if($paramer['jobwhere']){
				$where .=" and ".$paramer['jobwhere'];
			}
			//职位分类综合查询
			if($paramer['jobids']){
				$where.= " AND (`job1` = $paramer[jobids] OR `job1_son`=$paramer[jobids] OR `job_post`=$paramer[jobids])";
			}
			//职位分类区间,不建议执行该查询
			if($paramer['jobin']){
				$where .= " AND (`job1` IN ($paramer[jobin]) OR `job1_son` IN ($paramer[jobin]) OR `job_post` IN ($paramer[jobin]))";
			}
			//城市大类
			if($paramer[provinceid]){
				$where .= " AND `provinceid` = $paramer[provinceid]";
			}
			//城市子类
			if($paramer['cityid']){
				$where .= " AND (`cityid` IN ($paramer[cityid]))";
			}
			//城市三级子类
			if($paramer['three_cityid']){
				$where .= " AND (`three_cityid` IN ($paramer[three_cityid]))";
			}
			if($paramer['cityin']){
				$where .= " AND `three_cityid` IN ($paramer[cityin])";
			}
			//学历
			if($paramer[edu]){
				$where .= " AND `edu` = $paramer[edu]";
			}
			//工作经验
			if($paramer[exp]){
				$where .= " AND `exp` = $paramer[exp]";
			}
			//到岗时间
			if($paramer[report]){
				$where .= " AND `report` = $paramer[report]";
			}
			//职位性质
			if($paramer[type]){
				$where .= " AND `type` = $paramer[type]";
			}
			//性别
			if($paramer[sex]){
				$where .= " AND `sex` = $paramer[sex]";
			}
			//应届生
			if($paramer[is_graduate]){
				$where .= " AND `is_graduate` = $paramer[is_graduate]";
			}
			//公司规模
			if($paramer[mun]){
				$where .= " AND `mun` = $paramer[mun]";
			}
			if($paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary])."))";
				/*$where.= " and case when minsalary>0 then `minsalary`<= ".intval($paramer[minsalary]). " end and case when maxsalary>0 then `maxsalary`<= ".intval($paramer[maxsalary])." else minsalary<".intval($paramer[maxsalary])." and maxsalary =0 end ";*/
	    	}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`>=".intval($paramer[minsalary])." and `maxsalary`>=".intval($paramer[minsalary]).") 
							or (`minsalary`!=0 and  `maxsalary`=0))";
				/*$where.= " AND `minsalary`>=".intval($paramer[minsalary])." and minsalary>0";*/
			}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
				$where.= " AND ((`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`>=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and `maxsalary`<=".intval($paramer[maxsalary]).") 
							or (`minsalary`<=".intval($paramer[maxsalary])." and maxsalary=0) 
							or (`minsalary`=0 and  `maxsalary`!=0)
							)";
				/*$where.= " AND `maxsalary`<=".intval($paramer[maxsalary])." and maxsalary>0";*/
			}
	         //福利待遇
	         $cache_array = $db->cacheget();
			$comclass_name = $cache_array["comclass_name"];
			if($paramer[welfare]){
			    $welfarename=$comclass_name[$paramer[welfare]];
				$welfare=$db->select_all("company"," `welfare` LIKE '%".$welfarename."%'","`uid`");
				if(is_array($welfare)){
					foreach($welfare as $v){
						$welfareid[]=$v['uid'];
					}
				}
				$where .=" AND uid in (".@implode(",",$welfareid).")";
			}
			//城市区间,不建议执行该查询
			if($paramer[cityin]){
				$where .= " AND (`provinceid` IN ($paramer[cityin]) OR `cityid` IN ($paramer[cityin]) OR `three_cityid` IN ($paramer[cityin]))";
			}
			//紧急招聘urgent
			if($paramer[urgent]){
				$where.=" AND `urgent_time`>".time();
			}
			//更新时间区间
			if($paramer[uptime]){
				if($paramer[uptime]==1){
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
	    			$where.=" AND lastupdate>$beginToday";
	    		}else{
	    			$time=time();
					$uptime = $time-($paramer[uptime]*86400);
					$where.=" AND lastupdate>$uptime";
	    		}
			}
			//按类似公司名称,不建议进行大数据量操作
			if($paramer[comname]){
				$where.=" AND `com_name` LIKE '%".$paramer[comname]."%'";
			}
			//按公司归属地,只适合查询一级城市分类
			if($paramer[com_pro]){
				$where.=" AND `com_provinceid` ='".$paramer[com_pro]."'";
			}
			//按照职位名称匹配
			if($paramer[keyword]){
				$where1[]="`name` LIKE '%".$paramer[keyword]."%'";
				$where1[]="`com_name` LIKE '%".$paramer[keyword]."%'";
				include  PLUS_PATH."/city.cache.php";
				foreach($city_name as $k=>$v){
					if(strpos($v,$paramer[keyword])!==false){
						$cityid[]=$k;
					}
				}
				if(is_array($cityid)){
					foreach($cityid as $value){
						$class[]= "(provinceid = '".$value."' or cityid = '".$value."')";
					}
					$where1[]=@implode(" or ",$class);
				}
				$where.=" AND (".@implode(" or ",$where1).")";
			}
			//多选职位
			if($paramer["job"]){
				$where.=" AND `job_post` in ($paramer[job])";
			}
			//置顶招聘
			if($paramer[bid]){
				if($config[joblist_top]!=1){
					$paramer[limit] = 5;
				}
				$where.="  and `xsdate`>'".time()."'";
			} 
			
			//自定义查询条件，默认取代上面任何参数直接使用该语句
			if($paramer[where]){
				$where = $paramer[where];
			}

			//查询条数
			$limit = '';
			if($paramer[limit]){

				$limit = " limit ".$paramer[limit];
			}

			if($paramer[ispage]){
				$limit = PageNav($paramer,$_GET,"company_job",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"6",$_smarty_tpl);        
			}

			//排序字段默认为更新时间
            //置顶设置为随机5条时，随机查询
            if($paramer[bid] && $paramer[limit]){
                $order = " ORDER BY rand() ";
            }else{
                if($paramer[order] && $paramer[order]!="lastdate"){
    				$order = " ORDER BY ".str_replace("'","",$paramer[order])."  ";
    			}else{
    				$order = " ORDER BY `lastupdate` ";
    			}
            }
			//排序规则 默认为倒序
			if($paramer[sort]){
				$sort = $paramer[sort];
			}else{
				$sort = " DESC";
			} 
			$where.=$order.$sort;
		}
		
		
			
		$job_list = $db->select_all("company_job",$where.$limit);
		
		
		
		if(is_array($job_list) && !empty($job_list)){
			//处理类别字段
			$cache_array = $db->cacheget();
			$comuid=$jobid=array();
			foreach($job_list as $key=>$value){
				if(in_array($value['uid'],$comuid)==false){$comuid[] = $value['uid'];}
				if(in_array($value['id'],$jobid)==false){$jobid[] = $value['id'];} 
			}
			$comuids = @implode(',',$comuid);
			$jobids = @implode(',',$jobid);
			
			if($comuids){
				$r_uids=$db->select_all("company","`uid` IN (".$comuids.")","`uid`,`yyzz_status`,`logo`,`logo_status`,`pr`,`hy`,`mun`,`shortname`,`welfare`");
				if(is_array($r_uids)){
					foreach($r_uids as $key=>$value){
						if($value[shortname]){
    						$value['shortname_n'] = $value[shortname];
    					}
						if(!$value['logo'] || $value['logo_status']!=0 ||!file_exists(str_replace('./',APP_PATH,$value['logo']))){
							$value['logo'] = $config['sy_weburl']."/".$config['sy_unit_icon'];
						}else{
							$value['logo']= $config['sy_weburl']."/".$value['logo'];
						}
						$value['pr_n'] = $cache_array['comclass_name'][$value[pr]];
						$value['hy_n'] = $cache_array['industry_name'][$value[hy]];
						$value['mun_n'] = $cache_array['comclass_name'][$value[mun]];
						$r_uid[$value['uid']] = $value;
					}
				}
			}
			    
			//$comrat = $db->select_all("company_rating","`display`='1'");
			if($paramer[bid]){
				$noids=array();
			}	
			foreach($job_list as $key=>$value){

				if($paramer[bid]){
					$noids[] = $value[id];
				}
				//筛除重复
				if($paramer[noids]==1 && !empty($noids) && in_array($value['id'],$noids)){
					unset($job_list[$key]);
					continue;
				}else{
					$job_list[$key] = $db->array_action($value,$cache_array);
					$job_list[$key][stime] = date("Y-m-d",$value[sdate]);
					$job_list[$key][etime] = date("Y-m-d",$value[edate]);
					if($arr_data['sex'][$value['sex']]){
						$job_list[$key][sex_n]=$arr_data['sex'][$value['sex']];
					}
					$job_list[$key][lastupdate] = date("Y-m-d",$value[lastupdate]);
					if($value[minsalary]&&$value[maxsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."-".$value[maxsalary];
					}elseif($value[minsalary]){
						$job_list[$key][job_salary] =$value[minsalary]."以上";
					}else{
						$job_list[$key][job_salary] ="面议";
					}
					if($r_uid[$value['uid']][shortname]){
						$job_list[$key][com_name] =$r_uid[$value['uid']][shortname];
					}
					$job_list[$key][yyzz_status] =$r_uid[$value['uid']][yyzz_status];
					$job_list[$key][logo] =$r_uid[$value['uid']][logo];
					$job_list[$key][pr_n] =$r_uid[$value['uid']][pr_n];
					$job_list[$key][hy_n] =$r_uid[$value['uid']][hy_n];
					$job_list[$key][mun_n] =$r_uid[$value['uid']][mun_n];
					$time=$value['lastupdate'];
					//今天开始时间戳
					$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
					//昨天开始时间戳
					$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
					//一周内时间戳
					$week=strtotime(date("Y-m-d",strtotime("-1 week")));
					if($time>$week && $time<$beginYesterday){
						$job_list[$key]['time'] ="一周内";
					}elseif($time>$beginYesterday && $time<$beginToday){
						$job_list[$key]['time'] ="昨天";
					}elseif($time>$beginToday){	
						$job_list[$key]['time'] = date("H:i",$value['lastupdate']);
						$job_list[$key]['redtime'] =1;
					}else{
						$job_list[$key]['time'] = date("Y-m-d",$value['lastupdate']);
					}
					//获得福利待遇名称
					if($r_uid[$value['uid']][welfare]){
						$welfareList = @explode(',',$r_uid[$value['uid']][welfare]);

						if(!empty($welfareList)){
							$job_list[$key][welfarename] =$welfareList;
						}
					}
					//截取公司名称
					if($paramer[comlen]){
						if($r_uid[$value['uid']][shortname]){
							$job_list[$key][com_n] = mb_substr($r_uid[$value['uid']][shortname],0,$paramer[comlen],"utf-8");
						}else{
							$job_list[$key][com_n] = mb_substr($value['com_name'],0,$paramer[comlen],"utf-8");
						}
					}
					//截取职位名称
					if($paramer[namelen]){
						if($value['rec_time']>time()){
							$job_list[$key][name_n] = "<font color='red'>".mb_substr($value['name'],0,$paramer[namelen],"utf-8")."</font>";
						}else{
							$job_list[$key][name_n] = mb_substr($value['name'],0,$paramer[namelen],"utf-8");
						}
					}else{
						if($value['rec_time']>time()){
							$job_list[$key]['name_n'] = "<font color='red'>".$value['name']."</font>";
						}
					}
					//构建职位伪静态URL
					$job_list[$key][job_url] = Url("job",array("c"=>"comapply","id"=>$value[id]),"1");
					//构建企业伪静态URL
					$job_list[$key][com_url] = Url("company",array("c"=>"show","id"=>$value[uid]));
					foreach($comrat as $k=>$v){
						if($value[rating]==$v[id]){
							$job_list[$key][color] = str_replace("#","",$v[com_color]);
							if($v[com_pic]&&file_exists(str_replace('./',APP_PATH,$v[com_pic]))){
								$job_list[$key][ratlogo] = $v[com_pic];
							}else{
								$job_list[$key][ratlogo] ='';
							}
							$job_list[$key][ratname] = $v[name];
						}
					}
					if($paramer[keyword]){
						$job_list[$key][name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[name]);
						$job_list[$key][com_name]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$value[com_name]);
						$job_list[$key][name_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][name_n]);
						$job_list[$key][com_n]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$job_list[$key][com_n]);
						$job_list[$key][job_city_one]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[provinceid]]);
						$job_list[$key][job_city_two]=str_replace($paramer[keyword],"<font color=#FF6600 >".$paramer[keyword]."</font>",$city_name[$value[cityid]]);
					}
				}
			}

			if(is_array($job_list)){
				if($paramer[keyword]!=""&&!empty($job_list)){
					addkeywords('3',$paramer[keyword]);
				}
			}
		}$job_list = $job_list; if (!is_array($job_list) && !is_object($job_list)) { settype($job_list, 'array');}
foreach ($job_list as $_smarty_tpl->tpl_vars['job_list']->key => $_smarty_tpl->tpl_vars['job_list']->value) {
$_smarty_tpl->tpl_vars['job_list']->_loop = true;
?>
                        <li>
                            <div class="index_newjob_name">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['name_n'];?>
</a>
                            </div>
                            <div class="index_newjob_time"> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['time']=='昨天'||$_smarty_tpl->tpl_vars['job_list']->value['redtime']=='1') {?> <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>
</span> <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['job_list']->value['time'];?>
 <?php }?>更新 </div>
                            <div class="index_newjob_info"> <span class="index_newjob_info_xz"><?php if ($_smarty_tpl->tpl_vars['job_list']->value['job_salary']!='面议') {?>￥<?php }
echo $_smarty_tpl->tpl_vars['job_list']->value['job_salary'];?>
</span><span class="index_job_line">|</span><?php echo mb_substr($_smarty_tpl->tpl_vars['job_list']->value['job_city_two'],0,4,"utf-8");?>
 <?php echo mb_substr($_smarty_tpl->tpl_vars['job_list']->value['job_city_three'],0,4,"utf-8");?>
<span class="index_job_line">|</span><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_exp'];?>
经验<span class="index_job_line">|</span><?php echo $_smarty_tpl->tpl_vars['job_list']->value['job_edu'];?>
学历 </div>
                            <div class="index_newjob_com">
                                <div class="index_newjob_comlogo"><img src="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['logo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_unit_icon'];?>
',2);" width="48" height="48" /></div>
                                <div class="index_newjob_comname">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['com_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['com_n'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!=''&&$_smarty_tpl->tpl_vars['job_list']->value['ratlogo']!="0") {?><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['job_list']->value['ratlogo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['job_list']->value['ratname'];?>
" width="16" height="16" /><?php }?> <?php if ($_smarty_tpl->tpl_vars['job_list']->value['yyzz_status']==1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/images/disc_icon10.png" title="认证企业" /><?php }?> </div>
                                <div class="index_newjob_cominfo"><?php echo $_smarty_tpl->tpl_vars['job_list']->value['hy_n'];?>
</div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>

                </div>
            </div>

            <div class="yun_new_index_box">
                <div class="yun_new_index_tit fl">
                    <i class="yun_new_index_tit_line"></i>
                    <i class="yun_new_index_tit_lefticon"></i>
                    <div class="yun_new_index_tit_left">人才推荐</div>

                    <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'search'),$_smarty_tpl);?>
" target="_blank" class="yun_new_index_titmore">查看更多>></a>

                </div>

                <div class="hp_people fl">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['ulist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ulist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$ulist=array();global $db,$db_config,$config;
		if(is_array($_GET)){
			foreach($_GET as $key=>$value){
				if($value=='0'){
					unset($_GET[$key]);
				}
			}
		}
		eval('$paramer=array("item"=>"\'ulist\'","post_len"=>"10","limit"=>"10","key"=>"\'key\'","name"=>"\'userlist1\'","nocache"=>"")
;');
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }

	    //处理类别字段
		$cache_array = $db->cacheget();
        $fscache_array = $db->fscacheget();
		$userclass_name = $cache_array["user_classname"];
		$city_name      = $cache_array["city_name"];
        $city_index     = $cache_array["city_index"];
		$job_name		= $cache_array["job_name"];
        $job_index		= $cache_array["job_index"];
		$job_type		= $cache_array["job_type"];
		$industry_name	= $cache_array["industry_name"];
        $city_parent       = $fscache_array["city_parent"];
        $job_parent     = $fscache_array["job_parent"];

		//是否属于分站下
		if($config['sy_web_site']=="1"){
			if($config[province]>0 && $config[province]!=""){
				$paramer[provinceid] = $config[province];
			}
			if($config['cityid']>0 && $config['cityid']!=""){
				$paramer['cityid']=$config['cityid'];
			}
			if($config['three_cityid']>0 && $config['three_cityid']!=""){
				$paramer['three_cityid']=$config['three_cityid'];
			}
			if($config['hyclass']>0 && $config['hyclass']!=""){
				$paramer['hy']=$config['hyclass'];
			}
		}

		$where = "a.`defaults`='1' and a.`status`='1' and a.`r_status`='1'";
		//关注我公司的人才--条件
		if($paramer[where_uid]){
			$where .=" AND a.`uid` in (".$paramer['where_uid'].")";
		}
		//黑名单不能查看已拉黑的个人用户简历
		if($_COOKIE['uid']&&$_COOKIE['usertype']=="2"){
			$blacklist=$db->select_all("blacklist","`p_uid`='".$_COOKIE['uid']."'","c_uid");
			if(is_array($blacklist)&&$blacklist){
				foreach($blacklist as $v){
					$buid[]=$v['c_uid'];
				}
				$where .=" AND a.`uid` NOT IN (".@implode(",",$buid).")";
			}
		}
		//置顶
		if($paramer[topdate]){
			$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
		}
		if($paramer[top]){
			$where .=" AND a.`top`=1 AND a.`topdate`>'".time()."'";
		}
		//身份认证
		if($paramer[idcard]){
			$where .=" AND a.`idcard_status`='1'";
		}
		//高级人才
		if($paramer[height_status]){
			$where .=" AND a.`height_status`=".$paramer[height_status];
		}else{
			$where .=" AND a.`height_status`='0'";
		}
		//高级人才推荐
		if($paramer[rec]){
			$where .=" AND a.`rec`=1";
		}
		//普通推荐
		if($paramer[rec_resume]){
			$where .=" AND a.`rec_resume`=1";
		}
		//作品
		if($paramer[work]){
			$show=$db->select_all("resume_show","1 group by eid","`eid`");
			if(is_array($show)){
				foreach($show as $v){
					$eid[]=$v['eid'];
				}
			}
			$where .=" AND a.`id` in (".@implode(",",$eid).")";
		}
		//标签
		if($paramer[tag]){
			$tagname=$userclass_name[$paramer[tag]];
			$tag=$db->select_all("resume","`def_job`>0 and `r_status`<>2 and `status`=1 and FIND_IN_SET('".$tagname."',`tag`)","`def_job`");
			if(is_array($tag)){
				foreach($tag as $v){
					$tagid[]=$v['def_job'];
				}
			}
			$where .=" AND a.`id` in (".@implode(",",$tagid).")";
		}
		//更新时间区间
		if($paramer[uptime]){
			if($paramer[uptime]==1){
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				$where.=" AND a.`lastupdate`>$beginToday";
			}else{
				$time=time();
				$uptime = $time-($paramer[uptime]*86400);
				$where.=" AND a.`lastupdate`>$uptime";
			}
		}
		//添加时间区间，即审核时间
		if($paramer[adtime]){
			$time=time();
			$adtime = $time-($paramer[adtime]*86400);
			$where.=" AND a.`status_time`>$adtime";
		}
		//是否有照片
		if($paramer[pic]=="0" || $paramer[pic]){
			$where .=" AND a.`photo`<>'' AND a.`phototype`!=1";
			 
		}
		//行业
		if($paramer['hy']!=""){
			$where .= " AND a.`hy` IN (".$paramer['hy'].")";
		}
		$citywhere = "1";
		//城市大类
		if($paramer[provinceid]){
			$citywhere .= " AND `provinceid` = $paramer[provinceid]";
		}
		//城市子类
		if($paramer[cityid]){
			$citywhere .= " AND `cityid` = $paramer[cityid]";
		}
		//城市三级子类
		if($paramer[three_cityid]){
			$citywhere .= " AND `three_cityid` = $paramer[three_cityid]";
		}
		//城市区间,不建议执行该查询
		if($paramer[cityin]){
			if($city_parent[$paramer[cityin]]=='0'){
					$citywhere .= " AND `provinceid` = $paramer[cityin]";
				}elseif(in_array($city_parent[$paramer[cityin]],$city_index)){
					$citywhere .= " AND `cityid` = $paramer[cityin]";
				}elseif($city_parent[$paramer[cityin]]>0){
					$citywhere .= " AND `three_cityid` = $paramer[cityin]";
				}
		}
		//职位类别
		$jobwhere = "1";
		if($paramer[job1]){
			$jobwhere.=" AND `job1`= $paramer[job1]";
		}
		if($paramer[job1_son]){
			$jobwhere.=" AND `job1_son`= $paramer[job1_son]";
		}
		if($paramer[job_post]){
			$jobwhere.=" AND `job_post`= $paramer[job_post]";
		}
		//职位区间,不建议执行该查询
		if($paramer[jobin]){
			if($job_parent[$paramer[jobin]]=='0'){
            	$jobwhere.=" AND `job1`= $paramer[jobin]";
            }elseif(in_array($job_parent[$paramer[jobin]],$job_index)){
            	$jobwhere.=" AND `job1_son`= $paramer[jobin]";
            }elseif($job_parent[$paramer[jobin]]>0){
            	$jobwhere.=" AND `job_post`= $paramer[jobin]";
            }
		}
		//工作经验
		if($paramer[exp]){
			$where .=" AND a.`exp`=$paramer[exp]";
		}
		//学历
		if($paramer[edu]){
			$where .=" AND a.`edu`=$paramer[edu]";
		}
		//性别
		if($paramer[sex]){
			$where .=" AND a.`sex`=$paramer[sex]";
		}
		//到岗时间
		if($paramer[report]){
			$where .=" AND a.`report`=$paramer[report]";
		}
		//工作性质
		if($paramer[type]){
			$where .= " AND a.`type`=$paramer[type]";
		}
		//关键字
		if($paramer[keyword]){
			$jobid = array();
			$where1[]="`name` LIKE '%$paramer[keyword]%'";
			$where1[]="`uname` LIKE '%$paramer[keyword]%'";
			//关键字带期望城市搜索
			$cityid=array();
			foreach($city_name as $k=>$v){
				if(strpos($v,$paramer[keyword])!==false){
					$cityid[]=$k;
				}
			}
			//匹配城市
			if(!empty($cityid)){
				$ckwhere ="1 AND ( `cityid` IN (".@implode(",",$cityid).") or `three_cityid` IN (".@implode(",",$cityid).") )";
				$cityresume = $db->select_all("resume_cityclass",$ckwhere);
				if($cityresume){
					foreach ($cityresume as $k=>$v){
						$where1[]=" `id` = ".$v['eid'];
					}
				}
			}
			
			$where.=" AND (".@implode(" or ",$where1).")";
		}
		//薪资待遇
		if($paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
						or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary])."))";
		}elseif($paramer[minsalary]&&!$paramer[maxsalary]){
			$where.= " AND ((a.`minsalary`<=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).") 
						or (a.`minsalary`>=".intval($paramer[minsalary])." and a.`maxsalary`>=".intval($paramer[minsalary]).")
						or (a.`minsalary`!=0 and  a.`maxsalary`=0))";
		}elseif(!$paramer[minsalary]&&$paramer[maxsalary]){
			$where.= " AND ((a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`>=".intval($paramer[maxsalary]).")
						or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`<=".intval($paramer[maxsalary]).")  
						or (a.`minsalary`<=".intval($paramer[maxsalary])." and a.`maxsalary`=0) 
						or (a.`minsalary`=0 and a.`maxsalary`!=0)
						)";
		}
		//排序字段默认为更新时间
		if($paramer[order] && $paramer[order]!="lastdate"){
			if($paramer[order]=='topdate'){
				$nowtime=time();
				$order = " ORDER BY if(a.`topdate`>$nowtime,a.`topdate`,a.`lastupdate`)";
			}else{
				$order = " ORDER BY a.`".$paramer[order]."`";
			}
		}else{
			$order = " ORDER BY a.`lastupdate` ";
		}
		//排序规则 默认为倒序
		$sort = $paramer[sort]?$paramer[sort]:'DESC';
		//查询条数
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}
		//自定义查询条件，默认取代上面任何参数直接使用该语句
		if($paramer[where]){
			$where = $paramer[where];
		}
		$pagewhere = "";$joinwhere = "";
		if($citywhere!="1"){
			$pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_cityclass` where ".$citywhere." group by `eid`) b";
			$joinwhere .= " a.`id`=b.`eid` and ";
		}
		if($jobwhere!="1"){
			$pagewhere.=" ,(select `eid` from `".$db_config[def]."resume_jobclass` where ".$jobwhere." group by `eid`) c";
			$joinwhere .= " a.`id`=c.`eid` and ";
		}
		if($paramer[ispage]){
			if($paramer["height_status"]){
				$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",$paramer[islt]?$paramer[islt]:"3",$_smarty_tpl,$pagewhere,$joinwhere);
			}else{
				$limit = PageNav($paramer,$_GET,"resume_expect",$where,$Purl,"",'0',$_smarty_tpl,$pagewhere,$joinwhere);
			}
		}

		
		if($paramer[topdate] && $_GET[page]>1){
			$ulist = array();
		}else{
			
			$select="a.`id`,a.`uid`,a.`name`,a.`hy`,a.`job_classid`,a.`city_classid`,a.`jobstatus`,a.`type`,a.`report`,a.`lastupdate`,a.`rec`,a.`top`,a.`topdate`,a.`rec_resume`,a.`ctime`,a.`uname`,a.`idcard_status`,a.`minsalary`,a.`maxsalary`";
			if($pagewhere!=""){
				$sql = "select ".$select." from `".$db_config[def]."resume_expect` a ".$pagewhere." where ".$joinwhere.$where.$order.$sort.$limit;
				$ulist=$db->DB_query_all($sql,"all");
			}else{
				$sql = "select ".$select." from `".$db_config[def]."resume_expect` a where ".$where.$order.$sort.$limit;
				$ulist=$db->DB_query_all($sql,"all");
			}
		}
            
        
        include(CONFIG_PATH."db.data.php");		

		if(!empty($ulist) && is_array($ulist)){
			
			//如果存在top，则说明请求来自排行榜页面
			if($paramer['top']){
				$uids=$m_name=array();
				foreach($ulist as $k=>$v){
					$uids[]=$v[uid];
				}

				$member=$db->select_all($db_config[def]."member","`uid` in(".@implode(',',$uids).")","uid,username");
				foreach($member as $val){
					$m_name[$val[uid]]=$val['username'];
				}
			}
			$uid = $eid = array();
			foreach($ulist as $key=>$value){
				$uid[] = $value['uid'];
				$eid[] = $value['id'];
			}
			$eids = @implode(',',$eid);
			$uids = @implode(',',$uid);
            $resume=$db->select_all("resume","`uid` in(".$uids.")","uid,name,nametype,tag,sex,moblie_status,edu,exp,photo,phototype,photo_status,birthday");
			if($paramer[topdate]){
				$noids=array();
			}	
			foreach($ulist as $k=>$v){
				if($paramer[topdate]){
					$noids[] = $v[id];
				}
				//筛除重复
				if($paramer[noid]=='1' && !empty($noids) && in_array($v['id'],$noids)){
					unset($ulist[$k]);
					continue;
				}
			    foreach($resume as $val){
			        if($v['uid']==$val['uid']){
                        $ulist[$k]['where']=$citywhere;
						$ulist[$k]['name_n']=$v['name'];
			    		$ulist[$k]['edu_n']=$userclass_name[$val['edu']];
				        $ulist[$k]['exp_n']=$userclass_name[$val['exp']];
			            if($val['birthday']){
							$year = date("Y",strtotime($val['birthday']));
							$ulist[$k]['age'] =date("Y")-$year;
						}
						if($val['sex']==152){
							$val['sex']='1';
						}elseif ($val['sex']==153){
							$val['sex']='2';
						}
						$ulist[$k]['sex'] =$arr_data[sex][$val['sex']];
		                $ulist[$k]['phototype']=$val[phototype];
						if($config['user_pic']==1 || !$config['user_pic']){
		                if($val['photo'] && $val['photo_status']==0 && $val['phototype']!=1&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
            				$ulist[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
            			}else{
            				if($val['sex']==1){
            					$ulist[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
            				}else{
            					$ulist[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
            				}
            			}
						}elseif($config['user_pic']==2){
							if($val['photo']&& $val['photo_status']==0&&(file_exists(str_replace($config['sy_weburl'],APP_PATH,'.'.$val['photo']))||file_exists(str_replace($config['sy_weburl'],APP_PATH,$val['photo'])))){
								$ulist[$k]['photo']=str_replace("./",$config['sy_weburl']."/",$val['photo']);
							}else{
								if($val['sex']==1){
									$ulist[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
								}else{
									$ulist[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
								}
							}
						}elseif($config['user_pic']==3){
							if($val['sex']==1){
								$ulist[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_icon'];
							}else{
								$ulist[$k]['photo']=$config['sy_weburl']."/".$config['sy_member_iconv'];
							}
						}
						if($val['tag']){
                            $ulist[$k]['tag']=explode(',',$val['tag']);
	                    }
                        $ulist[$k]['nametype']=$val[nametype];
                        $ulist[$k]['moblie_status']=$val[moblie_status];
                        //名称显示处理
						if($config['user_name']==1 || !$config['user_name']){
    						if($val['nametype']==3){
    						    if($val['sex']==1){
    						        $ulist[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
    						    }else{
    						        $ulist[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
    						    }
    						}elseif($val['nametype']==2){
    						    $ulist[$k]['username_n'] = "NO.".$v['id'];
    						}else{
    							$ulist[$k]['username_n'] = $val['name'];
    						}
						}elseif($config['user_name']==3){
							if($val['sex']==1){
								$ulist[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."先生";
							}else{
								$ulist[$k]['username_n'] = mb_substr($val['name'],0,1,'utf-8')."女士";
							}
						}elseif($config['user_name']==2){
							$ulist[$k]['username_n'] = "NO.".$v['id'];
						}elseif($config['user_name']==4){
							$ulist[$k]['username_n'] = $val['name'];
						}
                    }
                }
				
				//更新时间显示方式
				$time=$v['lastupdate'];
				//今天开始时间戳
				$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
				//昨天开始时间戳
				$beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
				//一周内时间戳
				$week=strtotime(date("Y-m-d",strtotime("-1 week")));
				if($time>$week && $time<$beginYesterday){
					$ulist[$k]['time'] = "一周内";
				}elseif($time>$beginYesterday && $time<$beginToday){
					$ulist[$k]['time'] = "昨天";
				}elseif($time>$beginToday){
					$ulist[$k]['time'] = date("H:i",$v['lastupdate']);
					$ulist[$k]['redtime'] =1;
				}else{
					$ulist[$k]['time'] = date("Y-m-d",$v['lastupdate']);
				} 
				
				$ulist[$k]['user_jobstatus_n']=$userclass_name[$v['jobstatus']];
// 				$ulist[$k]['job_city_one']=$city_name[$v['provinceid']];
// 				$ulist[$k]['job_city_two']=$city_name[$v['cityid']];
// 				$ulist[$k]['job_city_three']=$city_name[$v['three_cityid']];
				if($v['minsalary']&&$v['maxsalary']){
					$ulist[$k]["salary_n"] = "￥".$v['minsalary']."-".$v['maxsalary'];    
                }else if($v['minsalary']){
                    $ulist[$k]["salary_n"] = "￥".$v['minsalary']."以上";  
                }else{
    				$ulist[$k]["salary_n"] = "面议";
    			}
				$ulist[$k]['report_n']=$userclass_name[$v['report']];
				$ulist[$k]['type_n']=$userclass_name[$v['type']];
				$ulist[$k]['lastupdate']=date("Y-m-d",$v['lastupdate']);
					
				$ulist[$k]['user_url']=Url("resume",array("c"=>"show","id"=>$v['id']),"1");
				$ulist[$k]["hy_info"]=$industry_name[$v['hy']];
				if($paramer['top']){
					$ulist[$k]['m_name']=$m_name[$v['uid']];
					$ulist[$k]['user_url']=Url("ask",array("c"=>"friend","a"=>"myquestion","uid"=>$v['uid']));
				}
				$kjob_classid=@explode(",",$v['job_classid']);
				$kjob_classid=array_unique($kjob_classid);	
				$jobname=array();
				if(is_array($kjob_classid)){
					foreach($kjob_classid as $val){
					    if($val!=''){
					        if($paramer['keyword']){
                               $jobname[]=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$job_name[$val]);
                            }else{
                               $jobname[]=$job_name[$val];
                            }
                        }
					}
				}
				//$ulist[$k]['job_post']=@implode(",",$jobname);
				$ulist[$k]['expectjob']=$jobname;
				$kcity_classid=@explode(",",$v['city_classid']);
				$kcity_classid=array_unique($kcity_classid);	
				$cityname=array();
				if(is_array($kcity_classid)){
					foreach($kcity_classid as $val){
					    if($val!=''){
					       
                            $cityname[]=$city_name[$val];
                            
                        }
					}
				}
                //$ulist[$k]['citylist']=@implode("/",$cityname);
				$ulist[$k]['expectcity']=$cityname;
				//截取标题
				if($paramer['post_len']){
					$postname[$k]=@implode(",",$jobname);
					$ulist[$k]['job_post_n']=mb_substr($postname[$k],0,$paramer[post_len],"utf-8");
				}
                if($paramer['city_len']){
					$scityname[$k]=@implode("/",$cityname);
					$ulist[$k]['city_name_n']=mb_substr($scityname[$k],0,$paramer[city_len],"utf-8");
				}
			}
			foreach($ulist as $k=>$v){
               if($paramer['keyword']){
					$ulist[$k]['username_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$v['username_n']);
					$ulist[$k]['job_post']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$ulist[$k]['job_post']);
					$ulist[$k]['job_post_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$ulist[$k]['job_post_n']);
					$ulist[$k]['name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$ulist[$k]['name']);
					$ulist[$k]['city_name_n']=str_replace($paramer['keyword'],"<font color=#FF6600 >".$paramer['keyword']."</font>",$ulist[$k]['city_name_n']);
				}
            }
			if($paramer['keyword']!=""&&!empty($ulist)){
				addkeywords('5',$paramer['keyword']);
			}
		}$ulist = $ulist; if (!is_array($ulist) && !is_object($ulist)) { settype($ulist, 'array');}
foreach ($ulist as $_smarty_tpl->tpl_vars['ulist']->key => $_smarty_tpl->tpl_vars['ulist']->value) {
$_smarty_tpl->tpl_vars['ulist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ulist']->key;
?>
                        <li>
                            <div class="hp_people_box">
                                <div class="hp_people_box_rt fl">
                                    <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$ulist.id`'),$_smarty_tpl);?>
" target="_blank"><img width="80" height="80" src="<?php echo $_smarty_tpl->tpl_vars['ulist']->value['photo'];?>
" onerror="showImgDelay(this,'<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_member_icon'];?>
',2);" /></a>
                                </div>
                                <div class="hp_people_box_ft fl">
                                    <div class="hp_people_box_ft_nm">
                                        <a href="<?php echo smarty_function_url(array('m'=>'resume','c'=>'show','id'=>'`$ulist.id`'),$_smarty_tpl);?>
" target="_blank"><?php echo mb_substr($_smarty_tpl->tpl_vars['ulist']->value['username_n'],0,10,"utf-8");?>
</a>
                                    </div>
                                    <div class="hp_people_box_ft_v"><?php echo $_smarty_tpl->tpl_vars['ulist']->value['exp_n'];?>
经验<i class="index_job_line">|</i><?php echo $_smarty_tpl->tpl_vars['ulist']->value['edu_n'];?>
学历</div>
                                    <div class="hp_people_box_ft_y"><?php echo $_smarty_tpl->tpl_vars['ulist']->value['job_post_n'];?>
</div>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>

                </div>
            </div>

            <div class="yun_new_index_box">
                <div class="yun_new_index_tit fl">
                    <i class="yun_new_index_tit_line"></i>
                    <i class="yun_new_index_tit_lefticon"></i>
                    <div class="yun_new_index_tit_left">职场资讯</div>

                    <a href="<?php echo smarty_function_url(array('m'=>'article'),$_smarty_tpl);?>
" target="_blank" class="yun_new_index_titmore">查看更多>></a>

                </div>

                <div class="index_news_box">
                    <div class="index_news_left">
                        <div class="index_news_tip">
                            <div class="index_news_tip_tit">专业职场资讯</div>
                            <div class="">排忧艰难，带你就业带你飞</div>
                            <i class="index_news_tip_icon"></i>
                        </div>
                        <div class="index_news_list">
                            <ul>
                                <?php  $_smarty_tpl->tpl_vars['alist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alist']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$alist=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("item"=>"\'alist\'","t_len"=>"18","limit"=>"7","key"=>"\'key\'","name"=>"\'newlist1\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($alist[$rs['nid']]['pic'])<$piclimit){
              $alist[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($alist[$rs['nid']]['arclist'])<$paramer[limit]){
          $alist[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $alist[] = $rs;
        }//end while
      }$alist = $alist; if (!is_array($alist) && !is_object($alist)) { settype($alist, 'array');}
foreach ($alist as $_smarty_tpl->tpl_vars['alist']->key => $_smarty_tpl->tpl_vars['alist']->value) {
$_smarty_tpl->tpl_vars['alist']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['alist']->key;
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['alist']->value['url'];?>
" class="hp_news_list_cr" target="_blank"><?php echo $_smarty_tpl->tpl_vars['alist']->value['title'];?>
</a>
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>

                    <div class="index_news_list_imgnews ">
                        <div class="index_news_list_imgnews_cont ">
                            <?php  $_smarty_tpl->tpl_vars['plist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plist']->_loop = false;
 $_smarty_tpl->tpl_vars['pkey'] = new Smarty_Variable;

      global $db,$db_config,$config;
      include PLUS_PATH.'/group.cache.php';$plist=array();
      $rs=null;
      $nids=null;
      eval(
        '$paramer=array("pic"=>"1","t_len"=>"20","limit"=>"4","item"=>"\'plist\'","key"=>"\'pkey\'","nocache"=>"")
;
        ');
      $ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
      $paramer = $ParamerArr['arr'];
      $Purl =  $ParamerArr['purl'];
      if($paramer[cache]){
        $Purl="{{page}}.html";
      }
      global $ModuleName;
      if(!$Purl["m"]){
        $Purl["m"]=$ModuleName;
      }

      $where=1;
      if($config['did']){
        $where.=" and `did`='".$config['did']."'";
      }
      
      include PLUS_PATH."/group.cache.php"; 
      if($paramer['nid']){
        $nid_s = @explode(',',$paramer[nid]);				
        foreach($nid_s as $v){
          if($group_type[$v]){
            $paramer[nid] = $paramer[nid].",".@implode(',',$group_type[$v]);
          }
        }
      }

      if($paramer['nid']!=""){
        $where .=" AND `nid` in ($paramer[nid])";
        $nids = @explode(',',$paramer['nid']);
        $paramer['nid']=$paramer['nid'];
      }else if($paramer['rec']!=""){
        $nids=array();
        if(is_array($group_rec)){
          foreach($group_rec as $key=>$value){
            if($key<=2){
              $nids[]=$value;
            }
          }
          $paramer[nid]=@implode(',',$nids);
        }
      }

      if($paramer['type']){
        $type = str_replace("\"","",$paramer[type]);
        $type_arr =	@explode(",",$type);
        if(is_array($type_arr) && !empty($type_arr)){
          foreach($type_arr as $key=>$value){
            $where .=" AND FIND_IN_SET('".$value."',`describe`)";
            if(count($nids)>0){
              $picwhere .=" AND FIND_IN_SET('".$value."',`describe`)";
            }
          }
        }
      }

      //拼接补充SQL条件
      if($paramer['pic']!=""){
        $where .=" AND `newsphoto`<>''";
      }

      //新闻搜索
      if($paramer['keyword']!=""){
        $where .=" AND `title` LIKE '%".$paramer[keyword]."%'";
      }

      //拼接查询条数
      if(intval($paramer['limit'])>0){
        $limit = intval($paramer['limit']);
        $limit = " limit ".$limit;
      }

      if($paramer['ispage']){
        if($Purl["m"]=="wap"){
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","6",$_smarty_tpl);
        }else{
          $limit = PageNav($paramer,$_GET,"news_base",$where,$Purl,"","5",$_smarty_tpl);
        }
      }

      //拼接字段排序
      if($paramer['order']!=""){
        $order = str_replace("'","",$paramer['order']);
        $where .=" ORDER BY $order";
      }else{
        $where .=" ORDER BY `datetime`";
      }

      //排序方式默认倒序
      if($paramer['sort']){
        $where.=" ".$paramer[sort];
      }else{
        $where.=" DESC";
      }

      //多类别新闻查找
      if(!intval($paramer['ispage']) && count($nids)>0){
        $nidArr = @explode(',',$paramer[nid]);
        $rsnids = '';
        if(is_array($group_type)){
          foreach($group_type as $key=>$value){
            if(in_array($key,$nidArr)){						
              if(is_array($value)){
                foreach($value as $v){
                  $rsnids[$v] = $key;
                  $nidArr[] = $v;
                }
              }
            }
          }
        }

        $where = " `nid` IN (".@implode(',',$nidArr).")";

        if($config['did']){
          $where.=" and `did`='".$config['did']."'";
        }

        //查询带图新闻
        if($paramer['pic']){
          if(!$paramer['piclimit']){
            $piclimit = 1;
          }else{
            $piclimit = $paramer['piclimit'];
          }
        
          $db->query("set @f=0,@n=0");
          $query = $db->query("select * from (select id,title,color,datetime,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." AND `newsphoto` <>''  order by nid asc,datetime desc) a where aid <=".$piclimit);
        
          while($rs = $db->fetch_array($query)){
            if($rsnids[$rs['nid']]){
              $rs['nid'] = $rsnids[$rs['nid']];
            }
        
            //处理标题长度
            if(intval($paramer[t_len])>0){
              $len = intval($paramer[t_len]);
              $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
            }

            if($rs[color]){
              $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
            }

            //处理描述内容长度
            if(intval($paramer[d_len])>0){
              $len = intval($paramer[d_len]);
              $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
            }

            $rs['name'] = $group_name[$rs['nid']];

            //构建资讯静态链接
            if($config[sy_news_rewrite]=="2"){
              $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
            }else{
              $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
            }
      
            if(mb_substr($rs[newsphoto],0,4)=="http"){
              $rs["picurl"]=$rs[newsphoto];
            }else{
				if($rs['newsphoto']){
					if(file_exists(APP_PATH.$rs['newsphoto'])){
						$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
					}else{
						$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
					}
				}else{
					$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
				}
            }
          
            $rs[time]=date("Y-m-d",$rs[datetime]);
            $rs['datetime']=date("m-d",$rs[datetime]);
            if(count($plist[$rs['nid']]['pic'])<$piclimit){
              $plist[$rs['nid']]['pic'][] = $rs;
            }
          }//end while
        }

        $db->query("set @f=0,@n=0");
        $query = $db->query("select * from (select id,title,datetime,color,description,newsphoto,@n:=if(@f=nid,@n:=@n+1,1) as aid,@f:=nid as nid from $db_config[def]news_base  WHERE ".$where." order by nid asc,datetime desc) a where aid <=$paramer[limit]");

        while($rs = $db->fetch_array($query)){
          if($rsnids[$rs['nid']]){
            $rs['nid'] = $rsnids[$rs['nid']];
          }
          
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
      
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
            if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          if(count($plist[$rs['nid']]['arclist'])<$paramer[limit]){
          $plist[$rs['nid']]['arclist'][] = $rs;
          }
        }//end while
      }//end if(!intval($paramer['ispage']) && count($nids)>0)
      else{
        $query = $db->query("SELECT * FROM `$db_config[def]news_base` WHERE ".$where.$limit);
        while($rs = $db->fetch_array($query)){
          //处理标题长度
          if(intval($paramer[t_len])>0){
            $len = intval($paramer[t_len]);
            $rs[title] = mb_substr($rs[title],0,$len,"utf-8");
          }

          if($rs[color]){
            $rs[title] = "<font color='".$rs[color]."'>".$rs[title]."</font>";
          }

          //处理描述内容长度
          if(intval($paramer[d_len])>0){
            $len = intval($paramer[d_len]);
            $rs[description] = mb_substr($rs[description],0,$len,"utf-8");
          }

          //获取所属类别名称
          $rs['name'] = $group_name[$rs['nid']];
          
          //构建资讯静态链接
          if($config[sy_news_rewrite]=="2"){
            $rs["url"]=$config['sy_weburl']."/news/".date("Ymd",$rs["datetime"])."/".$rs[id].".html";
          }else{
            $rs["url"] = Url("article",array("c"=>"show","id"=>$rs[id]),"1");
          }

          if(mb_substr($rs[newsphoto],0,4)=="http"){
            $rs["picurl"]=$rs[newsphoto];
          }else{
			if($rs['newsphoto']){
				if(file_exists(APP_PATH.$rs['newsphoto'])){
					$rs["picurl"] = $config['sy_weburl']."/".$rs['newsphoto'];
				}else{
					$rs["picurl"] = str_replace("./",$config['sy_weburl']."/",$rs['newsphoto']);
				}
			}else{
				$rs["picurl"] = $config[sy_weburl]."/app/template/".$config[style]."/images/nopic.gif";
			}
          }

          $rs[time]=date("Y-m-d",$rs[datetime]);
          $rs[datetime]=date("m-d",$rs[datetime]);
          $plist[] = $rs;
        }//end while
      }$plist = $plist; if (!is_array($plist) && !is_object($plist)) { settype($plist, 'array');}
foreach ($plist as $_smarty_tpl->tpl_vars['plist']->key => $_smarty_tpl->tpl_vars['plist']->value) {
$_smarty_tpl->tpl_vars['plist']->_loop = true;
 $_smarty_tpl->tpl_vars['pkey']->value = $_smarty_tpl->tpl_vars['plist']->key;
?> <?php if ($_smarty_tpl->tpl_vars['pkey']->value==0||$_smarty_tpl->tpl_vars['pkey']->value==1) {?>
                            <div class="hp_news_t fl">
                                <dl>
                                    <dt><a href="<?php echo $_smarty_tpl->tpl_vars['plist']->value['url'];?>
"><img style="width:430px;height:260px;" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['plist']->value['newsphoto'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['plist']->value['title'];?>
"/></a></dt>
                                    <dd>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['plist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['plist']->value['title'];?>
</a>
                                    </dd>
                                </dl>
                                <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['pkey']->value==2) {?>
                                <div class="hp_news_w fl">
                                    <?php }?>
                                    <div class="hp_news_w_p fl">
                                        <div class="hp_news_p_img fl">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['plist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['plist']->value['newsphoto'];?>
" width="160" height="120" alt="<?php echo $_smarty_tpl->tpl_vars['plist']->value['title'];?>
" /></a>
                                        </div>
                                        <div class="hp_news_p_wr fl">
                                            <div class="hp_news_p_wr_tit">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['plist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['plist']->value['title'];?>
</a>
                                            </div>
                                            <div class="hp_news_p_ct"><?php echo $_smarty_tpl->tpl_vars['plist']->value['description'];?>
</div>
                                        </div>
                                    </div>
                                    <?php }?> <?php if ($_smarty_tpl->tpl_vars['pkey']->value!=2) {?>
                                </div>
                                <?php }?> <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="yun_new_index_box">
                    <div class="yun_new_index_tit fl">
                        <i class="yun_new_index_tit_line"></i>
                        <i class="yun_new_index_tit_lefticon"></i>
                        <div class="yun_new_index_tit_left">友情链接</div>
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_linksq']==1) {?>

                        <a href="<?php echo smarty_function_url(array('m'=>'link'),$_smarty_tpl);?>
" class="yun_new_index_titmore">申请链接</a>

                        <?php }?>

                    </div>

                    <div class="hp_link fl">

                        <div class="hp_link_banner">
                            <ul class="hp_link_banner_img">
                                <?php  $_smarty_tpl->tpl_vars['linklist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linklist']->_loop = false;
global $config;
		//跨域名使用范围
		$domain='';
		if($config["cityid"]!="" || $config["hyclass"]!=""){
			include(PLUS_PATH."/domain_cache.php");
			$host_url=$_SERVER['HTTP_HOST'];
			foreach($site_domain as $v){
				if($v['host']==$host_url){
					$domain=$v['id'];
				}
			}
		}$tem_type = 2;
        include PLUS_PATH."/link.cache.php";
		if(is_array($link)){$linkList=array();
			$i=0;
			foreach($link as $key=>$value)
			{
				if($config["did"]!=0 && $value["did"]!=$config["did"])
				{
					continue;
				}elseif(is_numeric('2') && $value['tem_type']!='2' && $value['tem_type']!='1'){
					continue;

				}elseif((!is_numeric('2') || '2'=='1') && $value['tem_type']!='1'){

					continue;
				}elseif(!$config["did"] && $value["did"]>0){
					continue;
				}
				if(is_numeric('2') && $value['link_type']!='2')
				{
					continue;
				}
				if(is_numeric('') && intval('')<=$i)
				{
					break;
				}
				if($value['pic']&& file_exists(APP_PATH.$value['pic'])&&$value['img_type']==1){
					$value[pic] = $config[sy_weburl]."/".$value[pic];
				}
				$linkList[] = $value;
				$i++;
			}
		}$linkList = $linkList; if (!is_array($linkList) && !is_object($linkList)) { settype($linkList, 'array');}
foreach ($linkList as $_smarty_tpl->tpl_vars['linklist']->key => $_smarty_tpl->tpl_vars['linklist']->value) {
$_smarty_tpl->tpl_vars['linklist']->_loop = true;
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['linklist']->value['link_url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['linklist']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['linklist']->value['link_name'];?>
" /></a>
                                </li>
                                <?php } ?>
                            </ul>
                            <div class="hp_link_banner_wr"> <?php  $_smarty_tpl->tpl_vars['linklist2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linklist2']->_loop = false;
global $config;
		//跨域名使用范围
		$domain='';
		if($config["cityid"]!="" || $config["hyclass"]!=""){
			include(PLUS_PATH."/domain_cache.php");
			$host_url=$_SERVER['HTTP_HOST'];
			foreach($site_domain as $v){
				if($v['host']==$host_url){
					$domain=$v['id'];
				}
			}
		}$tem_type = 2;
        include PLUS_PATH."/link.cache.php";
		if(is_array($link)){$linkList=array();
			$i=0;
			foreach($link as $key=>$value)
			{
				if($config["did"]!=0 && $value["did"]!=$config["did"])
				{
					continue;
				}elseif(is_numeric('2') && $value['tem_type']!='2' && $value['tem_type']!='1'){
					continue;

				}elseif((!is_numeric('2') || '2'=='1') && $value['tem_type']!='1'){

					continue;
				}elseif(!$config["did"] && $value["did"]>0){
					continue;
				}
				if(is_numeric('1') && $value['link_type']!='1')
				{
					continue;
				}
				if(is_numeric('') && intval('')<=$i)
				{
					break;
				}
				if($value['pic']&& file_exists(APP_PATH.$value['pic'])&&$value['img_type']==1){
					$value[pic] = $config[sy_weburl]."/".$value[pic];
				}
				$linkList[] = $value;
				$i++;
			}
		}$linkList = $linkList; if (!is_array($linkList) && !is_object($linkList)) { settype($linkList, 'array');}
foreach ($linkList as $_smarty_tpl->tpl_vars['linklist2']->key => $_smarty_tpl->tpl_vars['linklist2']->value) {
$_smarty_tpl->tpl_vars['linklist2']->_loop = true;
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['linklist2']->value['link_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['linklist2']->value['link_name'];?>
</a> <?php } ?> </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_footer_fix']=='1') {?>
            <div class="tip_bottom">
                <div class="tip_bottom_cont">
                    <div class="tip_bottom_bg"></div>
                    <div class="tip_bottom_cont_c">
                        <div class="tip_bottom_main">
                            <div class="tip_bottom_icon png"></div>
                            <div class="tip_bottom_left">
                                <a href="javascript:void(0);" onclick="$('.tip_bottom').hide();" class="tip_bottom_close png"></a>
                                <div class="tip_bottom_ewm">
                                    <div class="tip_bottom_ewm_bg"><i class="tip_bottom_ewm_p_icon"></i><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_wx_qcode'];?>
" width="90" height="90"></div>
                                    <div class="tip_bottom_ewm_p">手机也能找工作</div>
                                </div>
                                <span class="tip_bottom_logo">
        <h2><span class="tip_bottom_fast"><span class="tip_bottom_time">30秒</span> 填写简历</span>，好工作轻松搞定！</h2>
                                </span>
                                <div class="tip_bottom_num "><span>0</span>公司</div>
                                <div class="tip_bottom_num "><span>0</span>职位</div>
                                <?php if (!$_smarty_tpl->tpl_vars['uid']->value) {?>
                                <div class="tip_bottom_member">
                                    <a href="<?php echo smarty_function_url(array('m'=>'login'),$_smarty_tpl);?>
" class="tip_bottom_login">登录</a>
                                    <a href="<?php echo smarty_function_url(array('m'=>'register'),$_smarty_tpl);?>
" class="tip_bottom_reg">快速注册<i class="tip_bottom_reg_icon"></i></a>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>

            <div id="bg"></div>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/backtop.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div id='footer_ad'> <?php  $_smarty_tpl->tpl_vars['footer_ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['footer_ad']->_loop = false;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[10];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0') &&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['footer_ad']->key => $_smarty_tpl->tpl_vars['footer_ad']->value) {
$_smarty_tpl->tpl_vars['footer_ad']->_loop = true;
?>
                <div class="footer_ban" id="">
                    <div class="baner_footer" id='bottom_ad_fl'> <span class="ban_close" onclick="colse_bottom()">关闭</span> <?php echo $_smarty_tpl->tpl_vars['footer_ad']->value['html'];?>
 </div>
                    <input type="hidden" value='1' id='bottom_ad_is_show' />
                </div>
                <?php } ?> <?php  $_smarty_tpl->tpl_vars['left_ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['left_ad']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$AdArr=array();$paramer=array();
			include(PLUS_PATH.'/pimg_cache.php');$add_arr = $ad_label[11];if(is_array($add_arr) && !empty($add_arr)){
				$i=0;$limit = 0;$length = 0;
				foreach($add_arr as $key=>$value){
					if(($value['did']==$config['did'] ||$value['did']=='0') &&$value['start']<time()&&$value['end']>time()){
						if($i>0 && $limit==$i){
							break;
						}
						if($length>0){
							$value['name'] = mb_substr($value['name'],0,$length);
						}
						if($paramer['type']!=""){
							if($paramer['type'] == $value['type']){
								$AdArr[] = $value;
							}
						}else{
							$AdArr[] = $value;
						}
						$i++;
					}
				}
			}$AdArr = $AdArr; if (!is_array($AdArr) && !is_object($AdArr)) { settype($AdArr, 'array');}
foreach ($AdArr as $_smarty_tpl->tpl_vars['left_ad']->key => $_smarty_tpl->tpl_vars['left_ad']->value) {
$_smarty_tpl->tpl_vars['left_ad']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['left_ad']->key;
?>
                <div class="duilian <?php if ($_smarty_tpl->tpl_vars['key']->value=='0') {?>duilian_left<?php } else { ?>duilian_right<?php }?>">
                    <div class="duilian_con"><?php echo $_smarty_tpl->tpl_vars['left_ad']->value['html'];?>
</div>
                    <div class="close_container">
                        <div class="btn_close"></div>
                    </div>
                </div>
                <?php } ?> </div>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/jquery-1.8.0.min.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/public.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/index.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" language="javascript"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/js/reg_ajax.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/slides.jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type="text/javascript"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui/phpyun_layer.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript">
                layui.use(['carousel'], function() {
                    var carousel = layui.carousel;
                    carousel.render({
                        elem: '#test1',
                        width: '590px',
                        height: '270px'
                    });
                });
                //顶部伸展广告
                if($("#js_ads_banner_top_slide").length) { //判断当前广告是否展开，如果没有，则执行下面代码
                    var $slidebannertop = $("#js_ads_banner_top_slide"),
                        $bannertop = $("#js_ads_banner_top");
                    setTimeout(function() {
                        $bannertop.slideUp(1000);
                        $slidebannertop.slideDown(1000);
                    }, 1500); //1500毫秒(1.5秒)后，小广告收回，大广告伸开，执行时间都是1秒(1000毫秒)
                    setTimeout(function() {
                        $slidebannertop.slideUp(1000, function() {
                            $bannertop.slideDown(1000);
                        });
                    }, 2000); //2.0秒(2000毫秒)之后，大广告收回，小广告展开。
                }
                $(document).ready(function() {
                    //首页登录框以及登录后显示各会员中心内容
                    var loginIndex = '<?php echo smarty_function_url(array('m'=>'ajax','c'=>'DefaultLoginIndex'),$_smarty_tpl);?>
';
                    $.post(loginIndex, {
                        rand: Math.random()
                    }, function(data) {
                        $(".hp_login").html(data);
                    });
                    $(".index_new_job li").hover(function() {
                        var aid = $(this).attr("aid");
                        $("#joblist" + aid).addClass("index_new_job_hover");
                    }, function() {
                        var aid = $(this).attr("aid");
                        $("#joblist" + aid).removeClass("index_new_job_hover");
                    })
                    $(".menu_box").hover(function() {
                        var aid = $(this).attr("aid");
                        var ftop = Number($(this).offset().top);
                        var sheight = Number($("#jobclass_" + aid).height());
                        if(aid == '0') {
                            $("#jobclass_" + aid).css("top", "0px");
                        } else if(sheight > ftop) {
                            $("#jobclass_" + aid).css("top", "0px");
                        } else if(ftop > sheight && Number(sheight) < 250) {
                            var isIE6 = !window.XMLHttpRequest;
                            if(isIE6) {
                                var top = Number(ftop) - Number(99);
                            } else if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.match(/9./i) == "9.") {
                                var top = Number(ftop) - Number(94);
                            } else {
                                var top = Number(ftop) - Number(94);
                            }
                            $("#jobclass_" + aid).css("top", top + "px");
                        } else if(Number(sheight) > 250) {
                            var top = Number(ftop) - Number(320);
                            $("#jobclass_" + aid).css("top", top + "px");
                        }
                        $("#jobclass" + aid).addClass("current");
                        $("#jobclass_" + aid).attr("class", "menu_sub db");
                    }, function() {
                        var aid = $(this).attr("aid");
                        $("#jobclass" + aid).removeClass("current");
                        $("#jobclass_" + aid).attr("class", "menu_sub dn");
                    })
                    $(".select_wrap").hover(function() {
                        $(".select_wrap_list").show();
                    }, function() {
                        $(".select_wrap_list").hide();
                    })
                });
            <?php echo '</script'; ?>
>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['sy_footer_fix']=='1') {?>
            <?php echo '<script'; ?>
>
                $(document).ready(function() {
                    $.get('<?php echo smarty_function_url(array('m'=>'ajax','c'=>'footertj'),$_smarty_tpl);?>
', {
                        rand: Math.random()
                    }, function(data) {
                        $(".tip_bottom_left").html(data);
                    })
                })
            <?php echo '</script'; ?>
>
            <?php }?>
            <!--下面为调用网站主题-->
            <?php echo smarty_function_webspecial(array(),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
