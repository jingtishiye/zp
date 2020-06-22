<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.sucaihuo.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class admin_company_job_controller extends adminCommon{
	
	function set_search(){
		include(CONFIG_PATH."db.data.php");
		$source=$arr_data['source'];
		$this->yunset('source',$source);
		$search_list[]=array("param"=>"state","name"=>'审核状态',"value"=>array("1"=>"已审核","4"=>"未审核","3"=>"未通过"));
		$search_list[]=array("param"=>"status","name"=>'招聘状态',"value"=>array("1"=>"已下架","2"=>"招聘中"));
		$search_list[]=array("param"=>"jtype","name"=>'职位类型',"value"=>array("urgent"=>"紧急职位","xuanshang"=>"置顶职位","rec"=>"推荐职位"));
		$search_list[]=array("param"=>"source","name"=>'数据来源',"value"=>$source);
		$search_list[]=array("param"=>"adtime","name"=>'发布时间',"value"=>array("1"=>"今天","3"=>"最近三天","7"=>"最近七天","15"=>"最近半月","30"=>"最近一个月"));
 		$this->yunset("search_list",$search_list);
	}
	function index_action(){

 		$this->set_search();
		$time = time();
        $wheres = "1 ";
		if($_GET['hy']){
			$wheres .= " AND `hy` = '".$_GET['hy']."' ";
			$urlarr['hy']=$_GET['hy'];
		}
		if($_GET['job1']){
			$wheres .= " AND `job1` = '".$_GET['job1']."' ";
			$urlarr['job1']=$_GET['job1'];
		}
		if($_GET['job1_son']){
			$wheres .= " AND `job1_son` = '".$_GET['job1_son']."' ";
			$urlarr['job1_son']=$_GET['job1_son'];
		}
		if($_GET['job_post']){
			$wheres .= " AND `job_post` = '".$_GET['job_post']."' ";
			$urlarr['job_post']=$_GET['job_post'];
		}
		if($_GET['provinceid']){
			$wheres .= " AND `provinceid` = '".$_GET['provinceid']."' ";
			$urlarr['provinceid']=$_GET['provinceid'];
		}
		if($_GET['cityid']){
			$wheres .= " AND `cityid` = '".$_GET['cityid']."' ";
			$urlarr['cityid']=$_GET['cityid'];
		}
		if($_GET['three_cityid']){
			$wheres .= " AND `three_cityid` = '".$_GET['three_cityid']."' ";
			$urlarr['three_cityid']=$_GET['three_cityid'];
		}
		if($_GET['type']){
			$wheres .= " AND `type` = '".$_GET['type']."' ";
			$urlarr['type']=$_GET['type'];
		}
		if($_GET['number']){
			$wheres .= " AND `number` = '".$_GET['number']."' ";
			$urlarr['number']=$_GET['number'];
		}
		if($_GET['exp']){
			$wheres .= " AND `exp` = '".$_GET['exp']."' ";
			$urlarr['exp']=$_GET['exp'];
		}
		if($_GET['report']){
			$wheres .= " AND `report` = '".$_GET['report']."' ";
			$urlarr['report']=$_GET['report'];
		}
		if($_GET['sex']){
			$wheres .= " AND `sex` = '".$_GET['sex']."' ";
			$urlarr['sex']=$_GET['sex'];
		}
		if($_GET['edu']){
			$wheres .= " AND `edu` = '".$_GET['edu']."' ";
			$urlarr['edu']=$_GET['edu'];
		}
		if($_GET['marriage']){
			$wheres .= " AND `marriage` = '".$_GET['marriage']."' ";
			$urlarr['marriage']=$_GET['marriage'];
		}
		$where=1;
        if ($_GET['news_search']){
			extract($_GET);
			if(trim($keyword)!=""){
				if($type=='1'){
					$where .=" and  `com_name` like '%".trim($keyword)."%'";
				}else{
					$where .=" and `name` like '%".trim($keyword)."%'";
				}
				$urlarr['type']=$type;
				$urlarr['keyword']=$_GET['keyword'];
			}
			$urlarr['news_search']=$_GET['news_search'];
		}
		if($_GET['uid']){
			$where .=" and `uid`='".$_GET['uid']."'";
			$urlarr['uid']=$_GET['uid'];

			$ccom = $this->obj->DB_select_once("company","`uid`='".$_GET['uid']."'","`name`");
			$this->yunset("ccname",$ccom['name']);
		}
		if($_GET['source']){
			$where .=" and `source`='".$_GET['source']."'";
			$urlarr['source']=$_GET['source'];
		}
		if ($_GET['job_type']){
			$where .=" and `type`='".$_GET['job_type']."'";
			$urlarr['job_type']=$_GET['job_type'];
		}
		if($_GET['adtime']){
			if($_GET['adtime']=='1'){
				$where .=" and `sdate`>'".strtotime(date("Y-m-d 00:00:00"))."'";
			}else{
				$where .=" and `sdate`>'".strtotime('-'.intval($_GET['adtime']).' day')."'";
			}
			$urlarr['adtime']=$_GET['adtime'];
		}
		if($_GET['id']){
			$where.=" and `id`='".$_GET['id']."'";
			$urlarr['id']=$_GET['id'];
		}
		if($_GET['state']){
			if($_GET['state']=="1"){
				$where.= " and `state`='1'";
			}elseif($_GET['state']=="3"){
				$where.= " and `state`='3'";
			}elseif($_GET['state']=="4"){
				$where.= " and `state`='0'";
			}
			$urlarr['state']=$_GET['state'];
		}
		if($_GET['status']){
			if($_GET['status']=="1"){
				$where.=" and `status`='1'";
			}else{
				$where.=" and `status`!='1' ";
			}
			$urlarr['status']=$_GET['status'];
		}
		if($_GET['jtype']){
			if($_GET['jtype']=='rec'){
				$where.= "  and `rec_time`>".time();
			}else if($_GET['jtype']=='urgent'){
				$where.= "  and `urgent_time`>".time();
			}else if($_GET['jtype']=='xuanshang'){
				$where.= "  and `xsdate`>".time();
			}
			$urlarr['jtype']=$_GET['jtype'];
		}
		if($_GET['order']){
			$where.=" order by ".$_GET['t']." ".$_GET['order'];
			$urlarr['order']=$_GET['order'];
			$urlarr['t']=$_GET['t'];
		}else{
			$where.=" order by state asc,lastupdate desc";
		}

		$urlarr['page']="{{page}}";
		$pageurl=Url($_GET['m'],$urlarr,'admin');
		$rows=$this->get_page("company_job",$where,$pageurl,$this->config['sy_listnum']);
		include PLUS_PATH."job.cache.php";
		include PLUS_PATH."industry.cache.php";
		include PLUS_PATH."com.cache.php";
		if(is_array($rows)){
			$jobids=array();
		    foreach ($rows as $v){ 
				$jobids[]=$v['id'];
				$uid[]=$v['uid'];
		    }
			$useridjob=$this->MODEL('job')->GetUseridJob(array("`job_id` in(".pylode(',',$jobids).")",'is_browse'=>1),array('field'=>"count(id) as num,`job_id`",'groupby'=>'job_id'));			
			
			$msgnum=$this->MODEL('resume')->GetUserMsgNums(array("`jobid` in(".pylode(',',$jobids).")"),array('field'=>"count(id) as num,`jobid`",'groupby'=>'jobid')); 
			
			$member = $this->obj->DB_select_all("member","`uid` IN (".@implode(',',$uid).")","`uid`,`status`");
			$company = $this->obj->DB_select_all("company_statis","`uid` IN (".@implode(',',$uid).")","`uid`,`rating_name`");
			
			foreach($rows as $k=>$v){
				if($v['xsdate']>1000){
					$rows[$k]['xstime']=date("Y-m-d",$v['xsdate']);
				}
				if($v['rec_time']>1000){
					$rows[$k]['recdate']=date("Y-m-d",$v['rec_time']);
				}
				if($v['urgent_time']>1000){
					$rows[$k]['eurgent']=date("Y-m-d",$v['urgent_time']);
				}
				
				$rows[$k]['browseNum']=$rows[$k]['inviteNum']=0;
				$rows[$k]['edu']=$comclass_name[$v['edu']];
				$rows[$k]['exp']=$comclass_name[$v['exp']];
				if($v['job_post']){
					$rows[$k]['job']=$job_name[$v['job_post']];
				}else{
					$rows[$k]['job']=$job_name[$v['job1_son']];
				}

				$rows[$k]['salary']=$comclass_name[$v['salary']];
				$rows[$k]['type']=$comclass_name[$v['type']];

				if($v['urgent_time']>$time){
					$rows[$k]['urgent_day'] = ceil(($v['urgent_time']-$time)/86400);
				}else{
					$rows[$k]['urgent_day'] = "0";
				}
				if($v['xsdate']>$time){
					$rows[$k]['xs_day'] = ceil(($v['xsdate']-$time)/86400);
				}else{
					$rows[$k]['xs_day'] = "0";
				}
				if($v['rec_time']>$time){
					$rows[$k]['rec_day'] = ceil(($v['rec_time']-$time)/86400);
				}else{
					$rows[$k]['rec_day'] = "0";
				} 
				foreach($useridjob as $val){
					if($val['job_id']==$v['id']){
						$rows[$k]['browseNum']=$val['num'];
					}
				}
				foreach($msgnum as $val){
					if($val['jobid']==$v['id']){
						$rows[$k]['inviteNum']=$val['num'];
					}
				}
				foreach($member as $key=>$value){
					if($value['uid']==$v['uid']){
						$rows[$k]['c_status']=$value['status'];
					}
				}
				foreach($company as $key=>$value){
					if($value['uid']==$v['uid']){
						$rows[$k]['rating_name']=$value['rating_name'];
					}
				}
			}
		}
		$where=str_replace(array("(",")"),array("[","]"),$where);
		$this->yunset("where",$where);
		$this->yunset("get_type", $_GET);
		$this->yunset($this->MODEL('cache')->GetCache(array('job','hy')));
		$this->yunset("rows",$rows);
		$this->yunset("time",$time);
		$this->yuntpl(array('admin/admin_company_job'));
	}
    
	function show_action(){

		include(CONFIG_PATH."db.data.php");		
		$this->yunset("arr_data",$arr_data);
		$this->yunset($this->MODEL('cache')->GetCache(array('city','hy','com','job')));
		if($_GET['id']){
			$show=$this->obj->DB_select_once("company_job","id='".$_GET['id']."'");
			$show['lang']=@explode(',',$show['lang']);
			$this->yunset("show",$show);
			$this->yunset("lasturl",$_SERVER['HTTP_REFERER']);
		}

		if($_POST['update']){
			

			$_POST['lang']=@implode(',',$_POST['lang']);
 
 			$_POST['description'] = str_replace("&amp;","&",$_POST['content']);
			$_POST['lastupdate'] = time();
			$lasturl=$_POST['lasturl'];
			unset($_POST['update']);unset($_POST['content']);unset($_POST['lasturl']);
			 
			if($_POST['salary_type']){
				$_POST['minsalary']=$_POST['maxsalary']=0;
			}

			if($_POST['id']&&$_POST['uid']==''){
				$job=$this->obj->DB_select_once("company_job","`id`='".$_POST['id']."'","`uid`");
				$where['id']=$_POST['id'];
				unset($_POST['id']);
				if(!isset($_POST['is_graduate'])){
					$_POST['is_graduate']=0;
				}
				$this->obj->update_once("company_job",$_POST,$where);
				$this->obj->DB_update_all("company","`lastupdate`='".time()."'","`uid`='".$job['uid']."'");
				$this->ACT_layer_msg("职位(ID:".$where['id'].")修改成功！",9,$lasturl,2,1);
			}else if($_POST['uid']){
				$company=$this->obj->DB_select_once("company","`uid`='".$_POST['uid']."'","name");
				$statis=$this->obj->DB_select_once("company_statis","`uid`='".$_POST['uid']."'","`vip_etime`,`job_num`,`integral`,`rating_type`");

				

				if($statis['vip_etime']>time() || $statis['vip_etime']=="0"){
					if($statis['rating_type']==1){
					
						if($statis['job_num']<1){
 							$this->ACT_layer_msg("该会员发布职位用完！",8,"index.php?m=admin_company_job");
							
						}else{
							$this->obj->DB_update_all("company_statis","`job_num`=`job_num`-1","`uid`='".$_POST['uid']."'");
						}
					}
				}else{

					$this->ACT_layer_msg("该会员套餐已到期！",8,"index.php?m=admin_company_job");

				}
				$_POST['com_name']=$company['name'];
				$_POST['welfare']=$company['welfare'];
				$_POST['sdate']=time();
				if(!isset($_POST['is_graduate'])){
					$_POST['is_graduate']=0;
				}
				$id=$this->obj->insert_into("company_job",$_POST);
				if($id){
					$this->obj->DB_update_all("company","`jobtime`='".time()."'","`uid`='".$_POST['uid']."'");
					$this->ACT_layer_msg( "职位(ID:".$id.")发布成功！",9,'index.php?m=admin_company_job&c=show&uid='.$_POST['uid'],2,1);
				}else{
					$this->ACT_layer_msg( "职位发布失败！",8,'index.php?m=admin_company_job&c=show&uid='.$_POST['uid'],2,1);
				}
			}
		}
		$this->yunset("uid",$_GET['uid']);
		$this->yuntpl(array('admin/admin_company_job_show'));
	}
	function lockinfo_action(){
		$userinfo = $this->obj->DB_select_once("company_job","`id`=".$_POST['id'],"`statusbody`");
		echo $userinfo['statusbody'];die;
	}
	function status_action(){

		 extract($_POST);
		 $id = @explode(",",$pid);
		 if(is_array($id)){
			foreach($id as $value){
				if($value){
					$idlist[] = $value;
					$data[] = $this->shjobmsg($value,$status,$statusbody);
				}
			}
			if($data!=""){
			    
			    $push = $this->getPush();
				$notice = $this->MODEL('notice');
				foreach($data as $key=>$value){
				    $result = $notice->sendEmailType($value);
				    $result = $notice->sendSMSType($value);
				    
				    if ($push){
				        if ($value['clientid']&& $value['clientid']!=''){
				            $puser = array('clientid'=>$value['clientid'],'deviceToken'=>$value['deviceToken']);
				            if ($value['type']=='zzshtg'){
				                $content = mb_substr('职位：'.$value['jobname'].'审核通过', 0, 24, 'UTF-8');
				            }elseif ($value['type']=='zzshwtg'){
				                $content = mb_substr('职位：'.$value['jobname'].'审核未通过', 0, 24, 'UTF-8');
				            }
				            $this->makePush($this->config['sy_webname'], $content, $puser, $push);
				        }
				    }
				}
			}
			$aid = @implode(",",$idlist);
			$id=$this->obj->DB_update_all("company_job","`state`='$status',`statusbody`='".$statusbody."',`lastupdate`='".time()."'","`id` IN ($aid)");
			if($id){ 

				$Weixin=$this->MODEL('weixin');
				$sendInfo['jobid'] = $idlist;
				$sendInfo['state'] = $status;
				$sendInfo['statusbody'] = $statusbody; 
				$Weixin->sendWxJobStatus($sendInfo);
			}
			$id?$this->ACT_layer_msg("职位审核(ID:".$aid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("设置失败！",8,$_SERVER['HTTP_REFERER']);
		}else{
			$this->ACT_layer_msg("非法操作！",8,$_SERVER['HTTP_REFERER']);
		}
	}
	function saveclass_action(){
		extract($_POST);
		if($hy==""){
			$this->ACT_layer_msg("请选择行业类别！",8,$_SERVER['HTTP_REFERER']);
		}
		if($job1==""){
			$this->ACT_layer_msg("请选择职位类别！",8,$_SERVER['HTTP_REFERER']);
		}
		$id=$this->obj->DB_update_all("company_job","`hy`='$hy',`job1`='$job1',`job1_son`='$job1_son',`job_post`='$job_post'","`id` IN ($jobid)");
		$job=$this->obj->DB_select_all("company_job","`id` IN ($jobid)","`uid`,`name`");
		if($job){
			include(PLUS_PATH."industry.cache.php");
			include(PLUS_PATH."job.cache.php");
			foreach($job as $v){
				$content='';
				$content.='职位《'.$v['name'].'》行业类别改为：'.$industry_name[$hy];
				$content.='，职位类别改为：'.$job_name[$job1];
				if($job1_son){
					$content.='-'.$job_name[$job1_son];
				}
				if($job_post){
					$content.='-'.$job_name[$job_post];
				}
				$this->automsg("管理员操作：".$content,$v['uid']);
			}
		}
		$id?$this->ACT_layer_msg("职位类别(ID:".$jobid.")修改成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("修改失败！",8,$_SERVER['HTTP_REFERER']);
	}
	function jobclass_action(){
		include(PLUS_PATH."industry.cache.php");
		include(PLUS_PATH."job.cache.php");
		if(is_array($job_type[$_POST['val']])&&$job_type[$_POST['val']]){
			foreach($job_type[$_POST['val']] as $val){
				$html.="<option value='".$val."'>".$job_name[$val]."</option>";
			}
		}else{$html.="<option value=''>暂无分类</option>";}
		echo $html;
	}
	function shjobmsg($jobid,$yesid,$statusbody){
		$data=array();
		$comarr=$this->obj->DB_select_once("company_job","`id`='".$jobid."'","uid,name");
		if($yesid==1){
			$data['type']="zzshtg";
			$this->send_dingyue($jobid,2);
		}elseif($yesid==3){
			$data['type']="zzshwtg";
		}
		if ($data['type']=='zzshtg'){
			$contentmsg = mb_substr('职位：'.$comarr['name'].'审核通过', 0, 24, 'UTF-8');
		}elseif ($data['type']=='zzshwtg'){
			$contentmsg = mb_substr('职位：'.$comarr['name'].'审核未通过', 0, 24, 'UTF-8');
		}
		if($contentmsg){
			$this->automsg($contentmsg,$comarr['uid']);
		}
		if($data['type']!=""){
		    $select = 'a.email,a.moblie,a.uid,b.name';
		    
		    if($this->config['sy_push_open']==1){
		        $select.=',a.clientid,a.deviceToken';
		    }
		    $uid=$this->obj->DB_select_alls("member","company","a.`uid`='".$comarr['uid']."' and a.`uid`=b.`uid`",$select);
			$data['uid']=$uid[0]['uid'];
			$data['name']=$uid[0]['name'];
			$data['email']=$uid[0]['email'];
			$data['moblie']=$uid[0]['moblie'];
			$data['jobname']=$comarr['name'];
			$data['date']=date("Y-m-d H:i:s");
			$data['status_info']=$statusbody;
			$data['clientid']=$uid[0]['clientid'];
			$data['deviceToken']=$uid[0]['deviceToken'];
			return $data;
		}
	}
	function xuanshang_action(){
		if($_POST['s']==1){
			$id=$this->obj->DB_update_all("company_job","`xsdate`='0'","`id`='".intval($_POST['pid'])."'");
			$info=$this->obj->DB_select_once("company_job","`id`='".intval($_POST['pid'])."'","`uid`,`name`");
			$this->automsg('管理员操作：职位《'.$info['name'].'》置顶取消',$info['uid']);
		}else{
			$info=$this->obj->DB_select_once("company_job","`id`='".intval($_POST['pid'])."'","`xsdate`,`uid`,`name`");
			$xsdays=intval($_POST['xsdays']);
			$time=$xsdays*86400;
			if($info['xsdate']>time()){
				$id=$this->obj->DB_update_all("company_job","`xsdate`=`xsdate`+'".$time."'","`id`='".intval($_POST['pid'])."'");
			}else{ 
				$xsdate=time()+$time;
				$id=$this->obj->DB_update_all("company_job","`xsdate`='".$xsdate."'","`id`='".intval($_POST['pid'])."'");
			}
			$this->automsg('管理员设置：职位《'.$info['name'].'》置顶'.$xsdays.'天',$info['uid']);		
		}
		$id?$this->ACT_layer_msg("职位置顶(ID:".$_POST['pid'].")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1):$this->ACT_layer_msg("设置失败！",8,$_SERVER['HTTP_REFERER']);
	}
	function recommend_action(){
		extract($_POST);
		if($addday<1&&$s==''){$this->ACT_layer_msg("推荐天数不能为空！",8);}
		$addtime = 86400*$addday;
		if($pid){
			$info=$this->obj->DB_select_once("company_job","`id`='$pid'","`uid`,`name`");
			if($s==1){
				$this->obj->DB_update_all("company_job","`rec_time`='0',`rec`='0'","`id`='$pid'");
				$this->automsg('管理员操作：职位《'.$info['name'].'》推荐取消',$info['uid']);
			}elseif($eid>time()){
				$this->obj->DB_update_all("company_job","`rec_time`=`rec_time`+$addtime,`rec`='1'","`id`='$pid'");
				$this->automsg('管理员设置：职位《'.$info['name'].'》推荐'.$addday.'天',$info['uid']);		
			}else{
				$time=time()+$addtime;
				$this->obj->DB_update_all("company_job","`rec_time`='".$time."',`rec`='1'","`id`='$pid'");
				$this->automsg('管理员设置：职位《'.$info['name'].'》推荐'.$addday.'天',$info['uid']);
			}
			$this->ACT_layer_msg("职位推荐(ID:".$pid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
		}
		if(!empty($codearr)){
			if($s==1){
				$this->obj->DB_update_all("company_job","`rec_time`='0',`rec`='0'","`id` in (".$codearr.")");
				$info=$this->obj->DB_select_all("company_job","`id` in (".$codearr.")","`uid`,`name`");
				if($info){
					foreach($info as $v){
						$this->automsg('管理员操作：职位《'.$v['name'].'》推荐取消',$v['uid']);
					}
				}
				$this->ACT_layer_msg("取消职位推荐设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
			}else{
				$list=$this->obj->DB_select_all("company_job","`id` in (".$codearr.")","`id`,`rec_time`,`uid`,`name`");
                if(is_array($list)){
                	foreach($list as $v){
                        if($v['rec_time']<time()){
                       	    $gid[]=$v['id'];   
                        }else{
                       	    $mid[]=$v['id'];   
                        }
                	}
                	$guoqi=@implode(",",$gid);
                	$meiguo=@implode(",",$mid);
                	if($guoqi!=""){
						$time=time()+$addtime;
				        $this->obj->DB_update_all("company_job","`rec_time`=".$time.",`rec`='1'","`id` in (".$guoqi.")");
                	}elseif($meiguo!=""){
				        $this->obj->DB_update_all("company_job","`rec_time`=`rec_time`+$addtime,`rec`='1'","`id` in (".$meiguo.")");
                	}
					if($list){
						foreach($list as $v){
							$this->automsg('管理员设置：职位《'.$v['name'].'》推荐'.$addday.'天',$v['uid']);
						}
					}
                	$this->ACT_layer_msg("职位推荐设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
                }
			}
		}

	}
	function urgent_action(){
		extract($_POST);
		if($addday<1&&$s==''){$this->ACT_layer_msg("紧急天数不能为空！",8);}
		$addtime = 86400*$addday;
		if($pid){
			$info=$this->obj->DB_select_once("company_job","`id`='$pid'","`uid`,`name`");
			if($s==1){
				$this->obj->DB_update_all("company_job","`urgent_time`='0',`urgent`='0'","`id`='$pid'");
				$this->automsg('管理员操作：取消职位《'.$info['name'].'》紧急招聘',$info['uid']);
			}elseif($eid>time()){
				$this->obj->DB_update_all("company_job","`urgent_time`=`urgent_time`+$addtime,`urgent`='1'","`id`='$pid'");
				$this->automsg('管理员设置：职位《'.$info['name'].'》紧急招聘'.$addday.'天',$info['uid']);
			}else{
				$this->obj->DB_update_all("company_job","`urgent_time`=".time()."+$addtime,`urgent`='1'","`id`='$pid'");
				$this->automsg('管理员设置：职位《'.$info['name'].'》紧急招聘'.$addday.'天',$info['uid']);
			}
			$this->ACT_layer_msg("紧急招聘(ID:".$pid.")设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
		}
		if(!empty($codeugent)){
			if($s==1){
				$this->obj->DB_update_all("company_job","`urgent_time`='0',`urgent`='0'","`id` in (".$codeugent.")");
				$info=$this->obj->DB_select_all("company_job","`id` in (".$codeugent.")","`uid`,`name`");
				if($info){
					foreach($info as $v){
						$this->automsg('管理员操作：取消职位《'.$v['name'].'》紧急招聘',$v['uid']);
					}
				}
				$this->ACT_layer_msg("取消职位紧急设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
			}else{
				$list=$this->obj->DB_select_all("company_job","`id` in (".$codeugent.")","`id`,`urgent_time`,`uid`,`name`");
				$code_ugent=@explode(",",$codeugent);
				if(is_array($code_ugent)){
					foreach($code_ugent as $k=>$v){
						$r_time[$v]=$this->obj->DB_select_once("company_job","`id`='".$v."'","`urgent_time`");
					}
				}
                if(is_array($r_time)){
                	$ti=time();
                	foreach($r_time as $ke=>$va){
                       if($va['urgent_time']<$ti){
                       	    $g_id[]=$ke;   
                       }else{
                       	    $m_id[]=$ke;   
                       }
                	}
                	$guoqi=@implode(",",$g_id);
                	$meiguo=@implode(",",$m_id);
                	if($g_id){
				        $this->obj->DB_update_all("company_job","`urgent_time`=".time()."+$addtime,`urgent`='1'","`id` in (".$guoqi.")");
                	}elseif($m_id){
				       $this->obj->DB_update_all("company_job","`urgent_time`=`urgent_time`+$addtime,`urgent`='1'","`id` in (".$meiguo.")");
                	}
					if($list){
						foreach($list as $v){
							$this->automsg('管理员设置：职位《'.$v['name'].'》紧急招聘'.$addday.'天',$v['uid']);
						}
					}
                	$this->ACT_layer_msg("职位紧急设置成功！",9,$_SERVER['HTTP_REFERER'],2,1);
                }
			}
		}

	}
	function del_action(){
		$this->check_token();
	    if($_GET['del']||$_GET['id']){
    		if(is_array($_GET['del'])){
    			$layer_type=1;
				$del=@implode(',',$_GET['del']);
	    	}else{
	    		$layer_type=0;
	    		$del=$_GET['id'];
	    	}
			$list=$this->obj->DB_select_all("company_job","`id` in (".$del.")","`uid`,`name`");
			
			$this->obj->DB_delete_all("user_entrust_record","`jobid` in (".$del.")","");
			$this->obj->DB_delete_all("company_job","`id` in (".$del.")","");
			$this->obj->DB_delete_all("company_job_link","`jobid` in (".$del.")","");
			$this->obj->DB_delete_all("userid_msg","`jobid` in (".$del.")","");
			$this->obj->DB_delete_all("userid_job","`job_id` in (".$del.")","");
			$this->obj->DB_delete_all("fav_job","`job_id` in (".$del.")","");
			$this->obj->DB_delete_all("look_job","`jobid` in (".$del.")","");


			$this->obj->DB_delete_all("report","`usertype`=1 and `type`=0 and `eid` in (".$del.")","");
			if($list){
				foreach($list as $v){
					$this->automsg('管理员操作：删除职位《'.$v['name'].'》',$v['uid']);
				}
			}
			$this->layer_msg("职位(ID:".$del.")删除成功！",9,$layer_type,$_SERVER['HTTP_REFERER']);
    	}else{
			$this->layer_msg("请选择您要删除的信息！",8,1);
    	}
	}
	function refresh_action()
	{
		$list=$this->obj->DB_select_all("company_job","`id` in (".$_POST['ids'].")","`uid`,`name`");
		if(is_array($list)){
			foreach($list as $v){
				$uid[]=$v['uid'];
			} 
			$this->obj->DB_update_all("company","`lastupdate`='".time()."'","`uid` in (".@implode(",",$uid).")");
		}
		$this->obj->DB_update_all("company_job","`lastupdate`='".time()."'","`id` in (".$_POST['ids'].")");
		if($list){
			foreach($list as $v){
				$this->automsg('管理员操作：刷新职位《'.$v['name'].'》',$v['uid']);
			}
		}
		$this->MODEL('log')->admin_log("职位(ID".$_POST['ids']."刷新成功");
	}
	
	function checkstate_action(){
		if($_POST['id'] && $_POST['state']){
			if($_POST['state']==2){
				$_POST['state']=0;
			}
			$this->obj->DB_update_all("company_job","`status`='".$_POST['state']."'","`id`='".$_POST['id']."'");
		}
		echo 1;
	}
	function matching_action(){
	    
		if($_GET['id']){

	        $id=intval($_GET['id']);

	        $this->yunset($this->MODEL('cache')->GetCache(array('city')));
	        
			$where = "status='1' and `r_status`='1' and `job_classid`<>'' and `defaults`='1'";
	        
			$JobM=$this->MODEL('job');
	        
			$jobinfo=$JobM->GetComjobOne(array('id'=>$id),array('field'=>'uid,job1,job1_son,job_post,provinceid,cityid,three_cityid'));
	        
			$this->yunset('comid',$jobinfo['uid']);
	        
			if($jobinfo){
	            $where .=" and ( FIND_IN_SET('".$jobinfo['provinceid']."',`city_classid`) OR FIND_IN_SET('".$jobinfo['cityid']."',`city_classid`) OR FIND_IN_SET('".$jobinfo['three_cityid']."',`city_classid`) )";

				$where .=" and ( FIND_IN_SET('".$jobinfo['job1']."',`job_classid`) OR FIND_IN_SET('".$jobinfo['job1_son']."',`job_classid`) OR FIND_IN_SET('".$jobinfo['job_post']."',`job_classid`) )";
	        }
 			$record=$this->obj->DB_select_all("user_entrust_record","`jobid`='".$id."'");
			foreach($record as $v){
				$eids[]=$v['eid'];
			}
			$black=$this->obj->DB_select_all("blacklist","`p_uid`='".$jobinfo['uid']."'");
			foreach($black as $v){
			    $buids[]=$v['c_uid'];
			}
	        $where.=" and `id` not in(".pylode(',',$eids).")";
	        $where.=" and `uid` not in(".pylode(',',$buids).")";
	        $where.="order by `lastupdate` desc";

 	        $urlarr["page"]="{{page}}";
	        $pageurl=Url('admin_company_job&c=matching&id='.$id.'',$urlarr,'admin');
	        $rows=$this->get_page("resume_expect",$where,$pageurl,$this->config['sy_listnum'],'`id`,`uid`,`uname`,`job_classid`,`city_classid`');

			include PLUS_PATH."job.cache.php";

			include PLUS_PATH."city.cache.php";

			foreach ($rows as $key=>$val){
				
	            $job_classid=explode(",",$val['job_classid']);
				$jobname=array();
				if(is_array($job_classid)){
					foreach($job_classid as $v){
						$jobname[]=$job_name[$v];
					}
				}
				$rows[$key]['job_name']=implode(",",$jobname);
				
				$city_classid=@explode(",",$val['city_classid']);
				$citysname=array();
				if(is_array($city_classid)){
					foreach($city_classid as $va){
						$citysname[]=$city_name[$va];
					}
				}
				$rows[$key]['citys_name']=implode(",",$citysname);


	        }
	        $this->yunset('resumes',$rows);
	        $this->yuntpl(array('admin/admin_matching'));
	    }
	}

	function jobNum_action(){
		$MsgNum=$this->MODEL('msgNum');
		echo $MsgNum->jobNum();
	}
}
?>