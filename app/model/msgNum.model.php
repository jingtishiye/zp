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
class msgNum_model extends model{
	
	function getmsgNum(){
		
		$msgNum = 0;
		$arr=array();
		if($this->uid){
			
			$sysmsgNum = $this->DB_select_num('sysmsg', "`fa_uid`='".$this->uid."' and `remind_status`='0'");
			if($sysmsgNum > 0){
				$msgNum += $sysmsgNum;
				$arr['sysmsgNum']=$sysmsgNum;
			}
			if($this->usertype == 1){
				
				$userid_msg=$this->DB_select_num("userid_msg","`uid`='".$this->uid."' and `is_browse`='1'");
				if($userid_msg > 0){
					$msgNum += $userid_msg;
					$arr['userid_msgNum']=$userid_msg;
				}
				
				$usermsg=$this->DB_select_num("msg","`uid`='".$this->uid."' and `user_remind_status`='0'");
				if($usermsg > 0){
					$msgNum += $usermsg;
					$arr['usermsgNum']=$usermsg;
				}
			}elseif($this->usertype == 2){
				
				$jobApplyNum = $this->DB_select_num('userid_job', "`com_id`=".$this->uid." and `is_browse`= 1 ");
				if($jobApplyNum > 0){
					$msgNum += $jobApplyNum;
					$arr['jobApplyNum']=$jobApplyNum;
				}
				
				$jobAskNum = $this->DB_select_num('msg', "`job_uid`=".$this->uid." and `reply` = ''");
		
				if($jobAskNum > 0){
					$msgNum += $jobAskNum;
					$arr['jobAskNum']=$jobAskNum;
				}
			}
		}
		$arr['usertype']=$this->usertype;
		$arr['msgNum']=$msgNum;
		echo json_encode($arr);
	}

	
	function msgNum(){
		$msgNum = 0;
		$arr=array();
		
		$company_job=$this->DB_select_num("company_job","`state`=0");
		if($company_job > 0){
			$msgNum += $company_job;
			$arr['company_job']=$company_job;
		}
		
		$username=$this->DB_select_all("member","`status`=0 and `usertype`='2'","`uid`");
		$uids=array();
		foreach($username as $val){
			$uids[]=$val['uid'];
		}
		$company=$this->DB_select_num("company","`uid` in (".@implode(',',$uids).")");
		if($company > 0){
			$msgNum += $company;
			$arr['company']=$company;
		}
		
		$username_u=$this->DB_select_all("member","`status`=0 and `usertype`='1'","`uid`");
		$useruids=array();
		foreach($username_u as $val){
			$useruids[]=$val['uid'];
		}
		$user=$this->DB_select_num("resume","`uid` in (".@implode(',',$useruids).")");
		if($user > 0){
			$msgNum += $user;
			$arr['userNum']=$user;
		}
		
		
		$resume_expect=$this->DB_select_num('resume_expect', "`r_status` = 0");
		if($resume_expect > 0){
			$msgNum += $resume_expect;
			$arr['resume_expect']=$resume_expect;
		}
		
		$usercertNum=$this->DB_select_num('resume', "`idcard_pic`<>'' and `idcard_status` = 0");
		if($usercertNum > 0){
			$msgNum += $usercertNum;
			$arr['usercertNum']=$usercertNum;
		}
		
		$appealnum=$this->DB_select_num('member', "`appealtime` > 0 and `appealstate` = 1");
		if($appealnum > 0){
			if(!$this->config['did']||$this->config['did']==0){
				$msgNum += $appealnum;
			}
			$arr['appealnum']=$appealnum;
		}
		
		$company_cert=$this->DB_select_num("company_cert","`status`=0 and type=3");
		if($company_cert > 0){
			$msgNum += $company_cert;
			$arr['company_cert']=$company_cert;
		}
		
		$once_job=$this->DB_select_num("once_job","`status`='0' and `edate`>'".time()."'");
		if($once_job > 0){
			$msgNum += $once_job;
			$arr['once_job']=$once_job;
		}
		
		$company_product=$this->DB_select_num("company_product","`status`=0");
		if($company_product > 0){
			$msgNum += $company_product;
			$arr['company_product']=$company_product;
		}

		$company_news=$this->DB_select_num("company_news","`status`=0");
		if($company_news > 0){
			$msgNum += $company_news;
			$arr['company_news']=$company_news;
		}
		
		$linkNum=$this->DB_select_num("admin_link","`link_state`=0");
		if($linkNum > 0){
			$msgNum += $linkNum;
			$arr['linkNum']=$linkNum;
		}
		
		$partjob=$this->DB_select_num("partjob","`state`=0");
		if($partjob > 0){
			$msgNum += $partjob;
			$arr['partjob']=$partjob;
		}
		
		
		$tiny=$this->DB_select_num("resume_tiny","`status`='0'");
		if($tiny > 0){
			$msgNum += $tiny;
			$arr['tiny']=$tiny;
		}
		
		$zphcom=$this->DB_select_num("zhaopinhui_com","`status`=0");
		if($zphcom > 0){
			$msgNum += $zphcom;
			$arr['zphcom']=$zphcom;
		}
		
		$ask=$this->DB_select_num("question","`state`=0");
		if($ask > 0){
			$msgNum += $ask;
			$arr['ask']=$ask;
		}
		
		$redeem=$this->DB_select_num("change","`status`=0");
		if($redeem > 0){
			$msgNum += $redeem;
			$arr['redeem']=$redeem;
		}
		
		$order=$this->DB_select_num("company_order","`order_state`=3");
		if($order > 0){
			$msgNum += $order;
			$arr['order']=$order;
		}
		
		$special=$this->DB_select_all("special","1","`id`");
		foreach($special as $key=>$val){
			$zid[]=$val['id'];
		}
		$specialcom=$this->DB_select_num("special_com","`sid` in(".pylode(",",$zid).") and `status`=0");
		if($specialcom > 0){
			$msgNum += $specialcom;
			$arr['specialcom']=$specialcom;
		}
		
		$reportjob=$this->DB_select_num("report","`usertype`='1' and `type`='0' and `result`=''");
		if($reportjob > 0){
			$msgNum += $reportjob;
			$arr['reportjob']=$reportjob;
		}
		
		$reportresume=$this->DB_select_num("report","`usertype`='2' and `type`='0' and `result`=''");
		if($reportresume > 0){
			$msgNum += $reportresume;
			$arr['reportresume']=$reportresume;
		}
		
		$reportask=$this->DB_select_num("report","`type`='1' and `result`='' and `status`=0");
		if($reportask > 0){
			$msgNum += $reportask;
			$arr['reportask']=$reportask;
		}
		
		$reportgw=$this->DB_select_num("report","`type`='2' and `result`='' and `status`=0");
		if($reportgw > 0){
			$msgNum += $reportgw;
			$arr['reportgw']=$reportgw;
		}
		
		$comlogo=$this->DB_select_num("company","`logo`<>'' and `logo_status`='1'");
		if($comlogo > 0){
			$msgNum += $comlogo;
			$arr['comlogo']=$comlogo;
		}
		
		$userpic=$this->DB_select_num("resume","`photo`<>'' and `photo_status`='1'");
		if($userpic > 0){
			$msgNum += $userpic;
			$arr['userpic']=$userpic;
		}
		$arr['msgNum']=$msgNum;
		return json_encode($arr);
	}

	function companyNum(){
		$arr=array();
		
		$companyAllNum=$this->DB_select_num("company");
		if($companyAllNum > 0){
			$arr['companyAllNum']=$companyAllNum;
		}
		
		$username1=$this->DB_select_all("member","`status`=0 and `usertype`='2'","`uid`");
		$uids1=array();
		foreach($username1 as $val){
			$uids1[]=$val['uid'];
		}
		$companyStatusNum1=$this->DB_select_num("company","`uid` in (".@implode(',',$uids1).")");
		if($companyStatusNum1 > 0){
			$arr['companyStatusNum1']=$companyStatusNum1;
		}
		
		$username2=$this->DB_select_all("member","`status`=3 and `usertype`='2'","`uid`");
		$uids2=array();
		foreach($username2 as $val){
			$uids2[]=$val['uid'];
		}
		$companyStatusNum2=$this->DB_select_num("company","`uid` in (".@implode(',',$uids2).")");
		if($companyStatusNum2 > 0){
			$arr['companyStatusNum2']=$companyStatusNum2;
		}
		
		$username3=$this->DB_select_all("member","`status`=2 and `usertype`='2'","`uid`");
		$uids3=array();
		foreach($username3 as $val){
			$uids3[]=$val['uid'];
		}
		$companyStatusNum3=$this->DB_select_num("company","`uid` in (".@implode(',',$uids3).")");
		if($companyStatusNum3 > 0){
			$arr['companyStatusNum3']=$companyStatusNum3;
		}
		return json_encode($arr);
	}
	
	function hotNum(){
		$arr=array();
		
		$hotAllNum=$this->DB_select_num("hotjob");
		if($hotAllNum > 0){
			$arr['hotAllNum']=$hotAllNum;
		}
		
		$hoted=$this->DB_select_num("hotjob","`time_end`<='".time()."'");
		if($hoted > 0){
			$arr['hoted']=$hoted;
		}
		 
		return json_encode($arr);
	}

	function comCertNum(){
		$arr=array();
		
		$comCertAll=$this->DB_select_num("company_cert","`type`=3");
		if($comCertAll > 0){
			$arr['comCertAll']=$comCertAll;
		}
		
		$comCert1=$this->DB_select_num("company_cert","`type`=3 and `status`=0");
		if($comCert1 > 0){
			$arr['comCert1']=$comCert1;
		}
		
		$comCert2=$this->DB_select_num("company_cert","`type`=3 and `status`=2");
		if($comCert2 > 0){
			$arr['comCert2']=$comCert2;
		}
		 
		return json_encode($arr);
	}

	function jobNum(){
		$arr=array();
		
		$jobAllNum=$this->DB_select_num("company_job");
		if($jobAllNum > 0){
			$arr['jobAllNum']=$jobAllNum;
		}
		
		$jobStatusNum1=$this->DB_select_num("company_job","`state`=0");
		if($jobStatusNum1 > 0){
			$arr['jobStatusNum1']=$jobStatusNum1;
		}
		
		$jobStatusNum2=$this->DB_select_num("company_job","`state`=3");
		if($jobStatusNum2 > 0){
			$arr['jobStatusNum2']=$jobStatusNum2;
		}
		
		$jobStatusNum3=$this->DB_select_num("company_job","`status`=1");
		if($jobStatusNum3 > 0){
			$arr['jobStatusNum3']=$jobStatusNum3;
		}

		return json_encode($arr);
	}

	function partNum(){
		$arr=array();
		
		$partAllNum=$this->DB_select_num("partjob");
		if($partAllNum > 0){
			$arr['partAllNum']=$partAllNum;
		}
		
		$partStatusNum1=$this->DB_select_num("partjob","`state`=0");
		if($partStatusNum1 > 0){
			$arr['partStatusNum1']=$partStatusNum1;
		}
		
		$partStatusNum2=$this->DB_select_num("partjob","`state`=3");
		if($partStatusNum2 > 0){
			$arr['partStatusNum2']=$partStatusNum2;
		}
		
		$partStatusNum3=$this->DB_select_num("partjob","`edate`<'".time()."' and `edate`>'0'");
		if($partStatusNum3 > 0){
			$arr['partStatusNum3']=$partStatusNum3;
		}

		return json_encode($arr);
	}

	function orderSum(){
		$arr=array();
		
		$orderAll = $this->DB_select_once("company_order","`order_price` > 0 ","sum(`order_price`) as `pricesum`");
		if($orderAll['pricesum'] > 0){
			$arr['orderPriceAll']=$orderAll['pricesum'];
		}
		
		$orderPayed = $this->DB_select_once("company_order","`order_price` > 0  and `order_state`='2'","sum(`order_price`) as `orderPayed`");
		if($orderPayed['orderPayed'] > 0){
			$arr['orderPayed']=$orderPayed['orderPayed'];
		}
		
		$orderPay = $this->DB_select_once("company_order","`order_price` > 0  and `order_state`='1'","sum(`order_price`) as `orderPay`");
		if($orderPay['orderPay'] > 0){
			$arr['orderPay']=$orderPay['orderPay'];
		}
		
		$orderPaying = $this->DB_select_once("company_order","`order_price` > 0  and `order_state`='3'","sum(`order_price`) as `orderPaying`");
		if($orderPaying['orderPaying'] > 0){
			$arr['orderPaying']=$orderPaying['orderPaying'];
		}
		
		

		return json_encode($arr);
	}

	function userNum(){
		$arr=array();
		
		$userAllNum=$this->DB_select_num("member","`usertype`='1'");
		if($userAllNum > 0){
			$arr['userAllNum']=$userAllNum;
		}
		
		$userStatusNum1=$this->DB_select_num("member","`status`=0 and `usertype`='1'");
 		if($userStatusNum1 > 0){
			$arr['userStatusNum1']=$userStatusNum1;
		}
		
		$username2=$this->DB_select_num("member","`status`=3 and `usertype`='1'");
 		if($userStatusNum2 > 0){
			$arr['userStatusNum2']=$userStatusNum2;
		}
		
		$userStatusNum3=$this->DB_select_num("member","`status`=2 and `usertype`='1'");
 		if($userStatusNum3 > 0){
			$arr['userStatusNum3']=$userStatusNum3;
		}
		return json_encode($arr);
	}

	function resumeNum(){
		$arr=array();
		
		$resumeAllNum=$this->DB_select_num("resume_expect");
		if($resumeAllNum > 0){
			$arr['resumeAllNum']=$resumeAllNum;
		}
		
		$resumeStatusNum1=$this->DB_select_num("resume_expect","`r_status`='0'");
 		if($resumeStatusNum1 > 0){
			$arr['resumeStatusNum1']=$resumeStatusNum1;
		}
		
		$resumeStatusNum2=$this->DB_select_num("resume_expect","`r_status`='3'");
 		if($resumeStatusNum2 > 0){
			$arr['resumeStatusNum2']=$resumeStatusNum2;
		}
		
		$resumeStatusNum3=$this->DB_select_num("resume_expect","`r_status`='2'");
 		if($resumeStatusNum3 > 0){
			$arr['resumeStatusNum3']=$resumeStatusNum3;
		}
		return json_encode($arr);
	}

	function idCardNum(){
		$arr=array();
		
		$idCardAll=$this->DB_select_num("resume","`idcard_pic`<>''");
		if($idCardAll > 0){
			$arr['idCardAll']=$idCardAll;
		}
		
		$idCardNum1=$this->DB_select_num("resume","`idcard_pic`<>'' and `idcard_status`=0");
		if($idCardNum1 > 0){
			$arr['idCardNum1']=$idCardNum1;
		}
		
		$idCardNum2=$this->DB_select_num("resume","`idcard_pic`<>'' and `idcard_status`=2");
		if($idCardNum2 > 0){
			$arr['idCardNum2']=$idCardNum2;
		}
		 
		return json_encode($arr);
	}
	function onceNum(){
		$arr=array();
		
		$onceAllNum=$this->DB_select_num("once_job");
		if($onceAllNum > 0){
			$arr['onceAllNum']=$onceAllNum;
		}
		
		$onceStatusNum1=$this->DB_select_num("once_job","`status`=0 and `edate`>'".time()."'");
		if($onceStatusNum1 > 0){
			$arr['onceStatusNum1']=$onceStatusNum1;
		}
		
		$onceStatusNum2=$this->DB_select_num("once_job","`edate`<'".time()."'");
		if($onceStatusNum2 > 0){
			$arr['onceStatusNum2']=$onceStatusNum2;
		}
		return json_encode($arr);
	}

	function tinyNum(){
		$arr=array();
		
		$tinyAllNum=$this->DB_select_num("resume_tiny");
		if($tinyAllNum > 0){
			$arr['tinyAllNum']=$tinyAllNum;
		}
		
		$tinyStatusNum=$this->DB_select_num("resume_tiny","`status`=0");
		if($tinyStatusNum > 0){
			$arr['tinyStatusNum']=$tinyStatusNum;
		}
		return json_encode($arr);
	}

	function sjobNum(){
		$arr=array();
		
		$jobAllNum=$this->DB_select_num("company_job","`is_graduate`=1");
		if($jobAllNum > 0){
			$arr['jobAllNum']=$jobAllNum;
		}
		
		$jobStatusNum1=$this->DB_select_num("company_job","`is_graduate`=1 and `state`=0");
		if($jobStatusNum1 > 0){
			$arr['jobStatusNum1']=$jobStatusNum1;
		}
		
		$jobStatusNum2=$this->DB_select_num("company_job","`is_graduate`=1 and `state`=3");
		if($jobStatusNum2 > 0){
			$arr['jobStatusNum2']=$jobStatusNum2;
		}
		
		$jobStatusNum3=$this->DB_select_num("company_job","`is_graduate`=1 and `status`=1");
		if($jobStatusNum3 > 0){
			$arr['jobStatusNum3']=$jobStatusNum3;
		}

		return json_encode($arr);
	}

	function getFkNum(){
		
		$arr=array();
 		$sdate = strtotime('-1 days');
		$edate = time();
		$where .=" and `timein`>{$sdate} and `timein` < {$edate}";
		$where .=" and ((`second`>10 and `second`<300 and `status`=0) OR (`status`>1 and `status`<6)) "; 

		$payNum=$this->DB_select_num("user_log","(`opera`=41 or `opera`=45)".$where);
		if($payNum > 0){
			$arr['payNum']=$payNum;
		}

 		$serverNum=$this->DB_select_num("user_log","(`opera`>41 and `opera`<49 and `opera`<>45)".$where);
		if($serverNum > 0){
			$arr['serverNum']=$serverNum;
		}

		$resumeNum=$this->DB_select_num("user_log","(`opera`=21 or `opera` = 22)".$where);
		if($resumeNum > 0){
			$arr['resumeNum']=$resumeNum;
		}

		$jobNum=$this->DB_select_num("user_log","(`opera`>=31 and `opera` <= 38)".$where);
		if($jobNum > 0){
			$arr['jobNum']=$jobNum;
		}
		$bdNum=$this->DB_select_num("user_log","(`opera`=12 or `opera`= 13)".$where);
		if($bdNum > 0){
			$arr['bdNum']=$bdNum;
		}
		$infoNum=$this->DB_select_num("user_log","(`opera`<=11)".$where);
		if($infoNum > 0){
			$arr['infoNum']=$infoNum;
		}

		 
		return json_encode($arr);

	}



}
?>