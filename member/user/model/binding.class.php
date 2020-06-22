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
class binding_controller extends user{
	function index_action(){
		$member=$this->obj->DB_select_once("member","`uid`='".$this->uid."'");
		$this->yunset("member",$member);
		if(($member['qqid']!=""||$member['wxid']!=""||$member['unionid']!=""||$member['sinaid']!="") && $member['restname']=="0"){
			$this->yunset("setname",1);
		}
		$resume=$this->obj->DB_select_once("resume","`uid`='".$this->uid."'");
		$this->yunset("resume",$resume);
		$this->public_action();
 		$this->user_tpl('binding');
	}
	function save_action(){
		$IntegralM=$this->MODEL('integral');
		
		$this->cookie->SetCookie("delay", "", time() - 60);

		if($_POST['moblie']){
			$row=$this->obj->DB_select_once("company_cert","`uid`='".$this->uid."' and `check`='".$_POST['moblie']."' and `type`='2'");
			if(!empty($row)){
				if($row['check2']!=$_POST['code']){
					echo 3;die;
				}
				$this->obj->DB_update_all("member","`moblie`=''","`moblie`='".$row['check']."'");
				$this->obj->DB_update_all("resume","`moblie_status`='0',`telphone`=''","`telphone`='".$row['check']."'");
				$this->obj->DB_update_all("company","`moblie_status`='0',`linktel`=''","`linktel`='".$row['check']."'");
				
				$this->obj->DB_update_all("member","`moblie`='".$row['check']."'","`uid`='".$this->uid."'");
				$this->obj->DB_update_all("resume","`telphone`='".$row['check']."',`moblie_status`='1'","`uid`='".$this->uid."'");
				$this->obj->DB_update_all("company_cert","`status`='1'","`uid`='".$this->uid."' and `check2`='".$_POST['code']."'");
				$this->obj->member_log("手机绑定",13,1);
				$this->obj->DB_update_all("user_log","`status`='11'","`id`='".$_POST['logid']."'");
				$pay=$this->obj->DB_select_once("company_pay","`pay_remark`='手机绑定' and `com_id`='".$this->uid."'");
				if(empty($pay)){
					$IntegralM->get_integral_action($this->uid,"integral_mobliecert","手机绑定");
				}
				echo 1;die;
			}else{
				echo 2;die;
			}
		}
	}
	function savecert_action(){
	    $resume=$this->obj->DB_select_once("resume","`uid`='".$this->uid."'","idcard_pic");
	    if($this->config['user_idcard_status']=="1"){
	        $status='0';
	    }else{
	        $status='1';
	    }

	    if($_POST['user_cert']!=$resume['idcard_pic']){
			$pictures = $this->checksrc($_POST['user_cert'],$resume['idcard_pic']);
		}else{
			$pictures = $resume['idcard_pic'];
		}

	    $id=$this->obj->DB_update_all('resume',"`idcard_pic`='".$pictures."',`idcard`='".$_POST['idcard']."',`idcard_status`='".$status."',`cert_time`='".time()."'","`uid`='".$this->uid."'");
	    $this->obj->DB_update_all('resume_expect',"`idcard_status`='".$status."'","`uid`='".$this->uid."'");
	    
		$this->cookie->SetCookie("delay", "", time() - 60);

	    if($id){
	        if ((!is_array($resume) || $resume['idcard_pic']=='') && $this->config['user_idcard_status']!=1){
	            $com=$this->obj->DB_select_once("company_pay","`com_id`='".$this->uid."' and `pay_remark`='上传身份验证'","`com_id`");
	            if(empty($com)){
	                $this->MODEL('integral')->get_integral_action($this->uid,"integral_identity","上传身份验证");
	            }
	        }
	        $this->obj->member_log("上传身份验证图片",13,1);
			$this->obj->DB_update_all("user_log","`status`='10'","`id`='".$_POST['logid']."'");
	        $this->ACT_layer_msg("上传成功！",9,$_SERVER['HTTP_REFERER']);
	    }else{
 	        $this->ACT_layer_msg("上传失败！",9,$_SERVER['HTTP_REFERER']);
	    }
	}
	function del_action(){
		if($_GET['type']=="moblie"){
			$this->obj->DB_update_all("resume","`moblie_status`='0'","`uid`='".$this->uid."'");
		}
		if($_GET['type']=="email"){
			$this->obj->DB_update_all("resume","`email_status`='0'","`uid`='".$this->uid."'");
		}
		if($_GET['type']=="qqid"){
			$this->obj->DB_update_all("member","`qqid`='',`qqunionid`=''","`uid`='".$this->uid."'");
		}
		if($_GET['type']=="sinaid"){
			$this->obj->DB_update_all("member","`sinaid`=''","`uid`='".$this->uid."'");
		}
		if($_GET['type']=="wxid"){
			$this->obj->DB_update_all("member","`wxid`='',`wxopenid`='',`unionid`=''","`uid`='".$this->uid."'");
		}
		$this->layer_msg("解除绑定成功！",9,0,$_SERVER['HTTP_REFERER']);
	}
}
?>