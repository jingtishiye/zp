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
class cache_model extends model{
	
	function GetCache($CacheType,$Options=array('needreturn'=>true,'needassign'=>true)){
        if(($Options['needreturn']!=true)&&($Options['needassign']!=true)){
            return;
        }
        if(!is_array($CacheType)){
            $CacheTypeList=array($CacheType);
        }else{
            $CacheTypeList=$CacheType;
        }
        if(count($CacheTypeList)!=count(array_unique($CacheTypeList))){
            return '参数重复！';
        }
        $ReturnCacheList=array();
        foreach($CacheTypeList as $v){
            switch($v){
                case 'user':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->user_cache($Options));
                    break;
                case 'com':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->com_cache($Options));
                    break;
                case 'job':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->job_cache($Options));
                    break;
                case 'city':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->city_cache($Options));
                    break;
                case 'hy':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->industry_cache($Options));
                    break;
                
				case 'redeem':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->redeem_cache($Options));
                    break;
                case 'reason':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->reason_cache($Options));
                    break;
                case 'domain':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->domain_cache($Options));
                    break;
                case 'menu':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->menu_cache($Options));
                    break;
				case 'ask':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->ask_cache($Options));
                    break;
                case 'part':
                    $ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->part_cache($Options));
                    break;
				case 'group':
					$ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->group_cache($Options));
				break;
				case 'integralclass':
					$ReturnCacheList=array_merge_recursive($ReturnCacheList,$this->integralclass_cache($Options));
				break;
                default:break; 
            }
        }
        return $ReturnCacheList;
	}
	private function user_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include PLUS_PATH."/user.cache.php";
        if($Options['needreturn']==true){
            return array('userdata'=>$userdata,'userclass_name'=>$userclass_name);
        }
	}
    private function reason_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include PLUS_PATH."/reason.cache.php";
        if($Options['needreturn']==true){
            return $reason;
        }
	}
	private function com_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include PLUS_PATH."/com.cache.php";
        if($Options['needreturn']==true){
            return array('comdata'=>$comdata,'comclass_name'=>$comclass_name);
        }
	}
	private function group_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include PLUS_PATH."/group.cache.php";
		if($Options['needreturn']==true){
			return array('group_rec'=>$group_rec,'group_recnews'=>$group_recnews,'group_index'=>$group_index,'group_type'=>$group_type,'group_name'=>$group_name);
		}
	}
	private function part_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include PLUS_PATH."/part.cache.php";
        if($Options['needreturn']==true){
            return array('partdata'=>$partdata,'partclass_name'=>$partclass_name);
        }
	}
	private function city_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include(PLUS_PATH."city.cache.php");
        if($Options['needreturn']==true){
            return array('city_type'=>$city_type,'city_index'=>$city_index,'city_name'=>$city_name);
        }
	}
	private function job_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include(PLUS_PATH."job.cache.php");
        if($Options['needreturn']==true){
            return array('job_type'=>$job_type,'job_index'=>$job_index,'job_name'=>$job_name,'job_key'=>$job_key);
        }
	}
	
	private function industry_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include(PLUS_PATH."industry.cache.php");
        if($Options['needreturn']==true){
            return array('industry_index'=>$industry_index,'industry_name'=>$industry_name);
        }
	}

	private function redeem_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include(PLUS_PATH."redeem.cache.php");
        if($Options['needreturn']==true){
            return array('redeem_index'=>$redeem_index,'redeem_type'=>$redeem_type,'redeem_name'=>$redeem_name);
        }
	}
	private function ask_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include(PLUS_PATH."ask.cache.php");
        if($Options['needreturn']==true){
            return array('ask_index'=>$ask_index,'ask_type'=>$ask_type,'ask_pic'=>$ask_pic,"ask_intro"=>$ask_intro,"ask_name"=>$ask_name);
        }
	}

	private function integralclass_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include(PLUS_PATH."integralclass.cache.php");
        if($Options['needreturn']==true){
            return array("integralclass_index"=>$integralclass_index,"integralclass_name"=>$integralclass_name,"integralclass_discount"=>$integralclass_discount);
        }
	}
    private function domain_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include(PLUS_PATH."domain_cache.php");
        if($Options['needreturn']==true){
            return array('site_domain'=>$site_domain);
        }
	}
    private function menu_cache($Options=array('needreturn'=>false,'needassign'=>true)){
		include(PLUS_PATH.'menu.cache.php');
        if($Options['needreturn']==true){
            return array('menu_name'=>$menu_name);
        }
	}
}
?>