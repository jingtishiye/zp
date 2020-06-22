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
class paylist_controller extends user{
	function index_action(){
		include(CONFIG_PATH."db.data.php");
		$this->yunset("arr_data",$arr_data);
		$this->public_action();
		$urlarr=array("c"=>"paylist","page"=>"{{page}}");
		$pageurl=Url('member',$urlarr);
		$where.="`uid`='".$this->uid."' and `order_price`>0  order by order_time desc";
		$this->get_page("company_order",$where,$pageurl,"10");
		$this->user_tpl('paylist');
	}
	function del_action(){
		if($_GET['id']){
			$order = $this->obj->DB_select_once("company_order","`id`='".$_GET['id']."'","`id`,`order_id`");
			if(empty($order)){
 				$this->layer_msg('订单不存在！',9,0,$_SERVER['HTTP_REFERER']);
			}else{
				$this->obj->DB_update_all("user_log","`status`=4","`orderid`='".$order['order_id']."' and `uid`='".$this->uid."'");
				$nid=$this->obj->DB_delete_all("company_order","`id`='".(int)$_GET['id']."' and `uid`='".$this->uid."'");
				if($nid){
					$this->obj->member_log("取消订单",88,3);
					$this->layer_msg('订单取消成功！',9,0,"index.php?c=paylist");
				}else{
					$this->layer_msg('订单取消失败！',8,0,$_SERVER['HTTP_REFERER']);
				}
			}
		}
	}
	
}
?>