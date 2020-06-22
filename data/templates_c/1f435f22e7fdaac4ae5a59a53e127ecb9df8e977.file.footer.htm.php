<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-19 17:38:55
         compiled from "/www/wwwroot/zp.canyinyunfu.com//app/template/member/user/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:12268615225eec87af0ed674-08348981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f435f22e7fdaac4ae5a59a53e127ecb9df8e977' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com//app/template/member/user/footer.htm',
      1 => 1550288372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12268615225eec87af0ed674-08348981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'com_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eec87af0f7f77_51082050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eec87af0f7f77_51082050')) {function content_5eec87af0f7f77_51082050($_smarty_tpl) {?>
<?php echo '<script'; ?>
>

function accMul(arg1, arg2) {

	var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

	try { m += s1.split(".")[1].length } catch (e) { }

	try { m += s2.split(".")[1].length } catch (e) { }

	return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

}

function cktopspan(day,price){
	var disval=$('input[name="dis"]:checked ').val();
	if(disval&&day!=disval){
		$("input[name=dis][value="+disval+"]").attr("checked",false);
	}
	$("input[name=dis][value="+day+"]").attr("checked",true);
	var needs=accMul(day,price);
	$("#price").html(needs);
}
function buyResumeTop(pay_type){
	
	$('#pay_type').val(pay_type);
 	var resumeid = $('#eid').val();
 	var days = $("input[name='dis']:checked").val();
  	var index = layer.load('执行中，请稍候...',0);
  	
  	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=resume&act=resumeOrder",  
        data: {resumeid:resumeid,days:days},  
        success: function(data){  
        	layer.close(index);
          var data=eval('('+data+')'); 
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_zd_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_zd').submit();
    		}
        }  
  	});
}

function wtResume(pay_type){
	
	$('#pay_type').val(pay_type);
 	var resumeid = $('#wteid').val();
   	var index = layer.load('执行中，请稍候...',0);
  	
  	$.ajax({
  		async: false, 
        type: 'POST',  
        global:false,
        url: "index.php?c=resume&act=resumeOrder",  
        data: {wteid:resumeid},  
        success: function(data){  
          layer.close(index);
        	var data=eval('('+data+')'); 
        	if(data.error==1){
     			layer.msg(data.msg, 2,8);
     		}else if(data.error==0){
     			$('#order_wt_id').val(data.orderid);
    			$('#orderid').val(data.id);
    			
    			$('#payform_wt').submit();
    		}
        }  
  	});
}

function pay_forms(){
	var pay_type=$("#pay_type").val();
	if(pay_type==''){
		layer.msg('请选择支付方式！', 2,8);
	} else{
		$.layer({
			type : 1,
			title :'提示',
			closeBtn : [0 , true],
			border : [10 , 0.3 , '#000', true],
			area : ['450px','280px'],
			page : {dom :"#payshow"}
		});
	}
}

function rePay(){
	var orderId = $("#orderid").val();
	location.href="index.php?c=payment&id="+orderId;
}
<?php echo '</script'; ?>
>
<div id="resumetop" style="display:none;">
    <div class="admin_Operating_sh" style="padding:10px; ">
    <div class="resume_settop_tip">简历置顶是在求职网是让简历显示在更好的位置上,不用手动刷新自己的简历,就能让自己的简历保
持在简历中心列表的第一页,方便招聘公司更容易看到您的简历，增加求职成功的机会。</div>
   		<div class="stick_msg">置顶简历：<i id="resumename"></i></div>
      	<div class="stick_msg">结束时间：<span id='topdate' class="stick_msg_time"></span></div>
       	<div class="stick_tm">
              <div class="stick_tm_ft">置顶时长：</div>
              <ul class="stick_tm_box">
                   <lable for="dis1">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="1" name="dis" checked="checked" onclick="cktop('1','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('1','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">1天</span>
                          </li>
                   </lable>
                   <lable for="dis3">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="3" name="dis" onclick="cktop('3','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('3','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">3天</span>
                          </li>
                   </lable>
                   <lable for="dis7">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="7" name="dis" onclick="cktop('7','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('7','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">7天</span>
                          </li>
                   </lable>
                   <lable for="dis15">
                          <li>
                              <input type="radio" class="stick_tm_box_radio" value="15" name="dis" onclick="cktop('15','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('15','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">15天</span>
                          </li>
                   </lable>
                   <lable for="dis30">
                          <li >
                              <input type="radio" class="stick_tm_box_radio" value="30" name="dis" onclick="cktop('30','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')"/>
                              <span class="stick_tm_box_time" onclick="cktopspan('30','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
')">30天</span>
                          </li>
                   </lable>
              </ul>
              <input type="hidden" id="eid" name="eid" value="">
              <input type="hidden" name="myxs" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
">
         </div>

         <div class="stick_rage">
              <span>应付金额：<em id="price"><?php echo $_smarty_tpl->tpl_vars['config']->value['integral_resume_top'];?>
</em>元</span> <br/>

          </div>
      	<form name="alipayment"  id="payform_zd" action="../api/alipay/alipayto.php" method="post" target="_blank" onsubmit="return pay_forms();">
		
        
        <div class="job_recom_listbth">
			<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
			<div class="job_redpack_list_name">支付方式：</div>
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
		 	<div class="job_redpack_pay">
				<a href="javascript:;" onclick="buyResumeTop('alipay');"><div class="job_redpack_pay_bor job_redpack_pay_bor_pd"><img src="<?php echo $_smarty_tpl->tpl_vars['com_style']->value;?>
/images/ap_pay.png"></div>支付宝支付</a>
			</div>
			<?php }?>
			<?php } else { ?>
			<div class="con_banner_no" style="width:300px;margin-top:10px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
			<?php }?> 
			<input type="hidden" value="" id="pay_type" name="pay_type"/>
			<input type="hidden" name="dingdan" id="order_zd_id" value=""/>
			<input type="hidden" value="简历置顶金额"  name="subject"/>
			<input type="hidden" name="pay_bank" value="directPay">
		</div>
	
	</form>
      </div>
</div>
<input type="hidden" name="orderid" id="orderid" value=""/>
 

<div id="payshow" style="width:450px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
<div class="payment_tip">请在新打开的支付页面上完成付款，付款完成前请不要关闭此窗口。<br>如您在支付过程中遇到问题，请联系客服：<span class="payment_tip_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span></div>
<div class="payment_bottom"><a href="index.php?c=paylog" class="payment_bottombutt">已完成付款</a><a href="javascript:;" onclick="rePay();" class="payment_bottom_bth2">重新支付</a></div>
</div>

<div class="clear"></div>
<div class=foot>
<div class="copyright"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webcopyright'];
echo $_smarty_tpl->tpl_vars['config']->value['sy_webrecord'];?>
  
<div class="">地址:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webadd'];?>
  电话(Tel):<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
  EMAIL:<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_webemail'];?>
</div>
</div>
     
</div>
<div id="uclogin" style="display:none"></div>
<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>

<input type='hidden' id="layindex" value="">
</body>
</html><?php }} ?>
