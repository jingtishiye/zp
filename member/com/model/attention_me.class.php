<?php
/* *
* $Author ：PHPYUN开发团队
*
* 官网: http://www.sucaihuo.com
*
* 版权所有 2009-2018 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
*/
class attention_me_controller extends company{
	function index_action(){
		$whereResume = " 1 ";
		if(trim($_GET['keyword'])){
			$whereResume .= " and `name` like '%".trim($_GET['keyword'])."%' ";
			$urlarr['keyword']=trim($_GET['keyword']);
		}
		$this->public_action();
		$urlarr['c']='attention_me';
		$urlarr["page"]="{{page}}";
		$pageurl=Url('member',$urlarr);
		
		
		$whereAtn = "`sc_uid` = '".$this->uid ."'";
		$users = $this->obj->DB_select_all("atn",$whereAtn);
		if(is_array($users)){
			foreach($users as $v){
				$uids[] = $v['uid'];
			}
		}
		
		$whereResume .= "and `uid` in (".pylode(',',$uids) .") ";
		$defineJobs = $this->obj->DB_select_all("resume",$whereResume," `uid`,`name`,`def_job`,`sex`,`nametype`");
		if(is_array($defineJobs)){
			foreach($defineJobs as $v){
				$defineJobsId[] = $v['def_job'];
			}
		}
		
		$whereResumeExpect = " `id` in (".pylode(',',$defineJobsId) .") ";
		$resume = $this->get_page("resume_expect",$whereResumeExpect,$pageurl,"5","`id`,`job_classid`,`exp`,`edu`,`minsalary`,`maxsalary`,`uid`");


		if(is_array($resume)){
			foreach($resume as $k => $v){
				foreach($users as $u){
					if($v['uid'] == $u["uid"]){
						$resume[$k]['time'] = $u["time"];
						break;
					}
				}
				foreach($defineJobs as $d){
					if($v['uid'] == $d['uid']){
						if($this->config['user_name']=='1' || !$this->config['user_name']){
							if($d['nametype']==3){
								if($d['sex']==1){
									$resume[$k]['username'] = mb_substr($d['name'],0,1,'utf-8')."先生";
								}else{
									$resume[$k]['username'] = mb_substr($d['name'],0,1,'utf-8')."女士";
								}
							}elseif($d['nametype']==2){
								$resume[$k]['username'] = "NO.".$d['def_job'];
							}else{
								$resume[$k]['username'] = $d['name'];
							}
						}else if($this->config['user_name']=='2'){
							$resume[$k]['username'] = "NO.".$d['def_job'];
						}else if($this->config['user_name']=='3'){
							if($d['sex']==1){
								$resume[$k]['username'] = mb_substr($d['name'],0,1,'utf-8')."先生";
							}else{
								$resume[$k]['username'] = mb_substr($d['name'],0,1,'utf-8')."女士";
							}
						}else if($this->config['user_name']=='4'){
							$resume[$k]['username'] = $d['name'];
						}
						break;
					}
				}
			}
		}
		
		
		
		$userid_msg=$this->obj->DB_select_all("userid_msg","`fid`='".$this->uid."' and `uid` in (".pylode(",",$uids).")","uid");
		
		if(is_array($resume) && !empty($resume)){
			include(PLUS_PATH."user.cache.php");
			include(PLUS_PATH."job.cache.php");
			foreach($resume as $key=>$val){
				$resume[$key]['edu']=$userclass_name[$val['edu']];
				$resume[$key]['exp']=$userclass_name[$val['exp']];
				$resume[$key]['minsalary']=$val['minsalary'];
				$resume[$key]['maxsalary']=$val['maxsalary'];
				if($val['job_classid']!=""){
					$job_classid=@explode(",",$val['job_classid']);
					$resume[$key]['jobname']=$job_name[$job_classid[0]];
				}
				
				foreach($userid_msg as $va){
					if($val['uid']==$va['uid']){
						$resume[$key]['userid_msg']=1;
					}
				}
			}
		}
	    
		$JobM=$this->MODEL("job");
		$company_job=$JobM->GetComjobList(array("uid"=>$this->uid,"state"=>1," `r_status`<>'2' and `status`<>'1'"),array("field"=>"`name`,`id`"));
		$this->yunset("company_job",$company_job);
		$this->yunset('rows',$resume);
		$this->company_satic();
		$this->yunset("js_def",5);
		$this->com_tpl('attention_me');
	}
	
}
?>