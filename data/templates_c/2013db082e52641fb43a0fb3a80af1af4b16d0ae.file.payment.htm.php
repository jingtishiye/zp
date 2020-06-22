<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-06-18 11:34:41
         compiled from "/www/wwwroot/zp.canyinyunfu.com/app/template/member/com/payment.htm" */ ?>
<?php /*%%SmartyHeaderCode:19877822355eeae0d18dc683-14069220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2013db082e52641fb43a0fb3a80af1af4b16d0ae' => 
    array (
      0 => '/www/wwwroot/zp.canyinyunfu.com/app/template/member/com/payment.htm',
      1 => 1550288370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19877822355eeae0d18dc683-14069220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'config' => 0,
    'statis' => 0,
    'rows' => 0,
    'blist' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5eeae0d1928149_68745175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eeae0d1928149_68745175')) {function content_5eeae0d1928149_68745175($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="w1000">
    <div class="admin_mainbody">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/left.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div class=right_box>
            <div class=admincont_box>
                <div class="com_tit"><span class="com_tit_span">收银台</span></div>

                <div class="com_body">
                    <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
                    <form name="alipayment" class="layui-form" id="payform" action=" " method="post" onsubmit="return payforms();" enctype="multipart/form-data">
                        <div class="clear"></div>

                        <div class="payment_boxtable">

                            <table class="" cellpadding="1" cellspacing="1" border="0">
                                <tr>
                                    <th>订单编号</th>
                                    <th>购买商品</th>
                                    <th>金额</th>
                                </tr>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
<input type="hidden" name="dingdan" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
" /></td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value['type']==1) {?>购买会员 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='2') {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
充值 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='3') {?>银行转帐 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='4') {?>金额充值 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='5') {?>增值服务 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='10') {?>职位置顶 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='11') {?>紧急招聘 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='12') {?>职位推荐 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='13') {?>职位自动刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='16') {?>职位刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='17') {?>兼职刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='19') {?>下载简历 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='20') {?>发布职位 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='21') {?>发布兼职  <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='23') {?>面试邀请 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='24') {?>兼职推荐										<?php }?>
                                        <input type="hidden" name="aliorder" id="aliorder" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
" />
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" name='oid' id='oid' />
                                        <input type="hidden" name="alimoney" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
" />
                                        <input type="hidden" name="paytype" id="paytype" value="" />
                                        <input type="hidden" name="subject" value="<?php if ($_smarty_tpl->tpl_vars['order']->value['type']==1) {?>购买会员 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='2') {
echo $_smarty_tpl->tpl_vars['config']->value['integral_pricename'];?>
充值 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='3') {?>银行转帐 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='4') {?>金额充值 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='5') {?>增值服务<?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='10') {?>职位置顶 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='11') {?>紧急招聘 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='12') {?>职位推荐 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='13') {?>职位自动刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='16') {?>职位刷新 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='17') {?>兼职刷新  <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='19') {?>下载简历 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='20') {?>发布职位 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='21') {?>发布兼职  <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='23') {?>面试邀请 <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['type']=='24') {?>兼职推荐 <?php }?>" />
                                    </td>
                                    <td>￥<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
</td>
                                </tr>
                            </table>

                            <div class="payment_boxlist_c">
								<?php if ($_smarty_tpl->tpl_vars['config']->value['com_integral_online']==1&&$_smarty_tpl->tpl_vars['order']->value['type']==1&&!$_smarty_tpl->tpl_vars['order']->value['order_type']&&$_smarty_tpl->tpl_vars['config']->value['member_meal']!=1) {?>
                                <div class="payment_boxlist">
                                    <div class="layui-input-inline">
                                        <input name="type_switch" lay-filter="type_switch" lay-skin="switch" lay-text="开启|关闭" type="checkbox">
                                        <div class="layui-form-mid layui-word-aux">积分抵扣： 当前共 <?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
积分 </div>
                                    </div>
                                </div>

                                <div class="payment_boxlist" style="display:none;" id="input_integral">
                                    积分抵扣数量：
                                    <input type="text" id="dkjf" name="dkjf" placeholder="" class="payment_boxdk" onkeyup="checkNum('<?php echo $_smarty_tpl->tpl_vars['statis']->value['integral'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['integral_proportion'];?>
');" oninput="myFunction(this)">
                                </div>
                                <?php }?>
                            </div>

                            <div class="payment_boxlist_fk">
                                实付款
                                <span class="payment_boxlist_fk_n">￥
          							<span id="order_price"><?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
</span>
                                </span>
                            </div>
							
							<?php if ($_smarty_tpl->tpl_vars['config']->value['tenpay']=='1'||$_smarty_tpl->tpl_vars['config']->value['bank']=='1'||$_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?>
							
                            <div class="payment_boxlist_zf" id="pay_style">
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['bank']=='1'&&is_array($_smarty_tpl->tpl_vars['rows']->value)&&$_smarty_tpl->tpl_vars['rows']->value) {?><span class="payment_boxlist_zf_s" id="otherpay" onclick="paycheck('otherpay');"><i class="payment_boxlist_zf_icon payment_boxlist_zf_icon_qt"></i>其他支付方式</span><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['config']->value['tenpay']=='1') {?><span class="payment_boxlist_zf_s" id="tenpay" onclick="paycheck('tenpay');"><i class="payment_boxlist_zf_icon payment_boxlist_zf_icon_cft"></i>财付通支付</span><?php }?>
                               
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['alipay']=='1') {?><span class="payment_boxlist_zf_s" id="alipay" onclick="paycheck('alipay');"><i class="payment_boxlist_zf_icon payment_boxlist_zf_icon_zfb"></i>支付宝支付</span><?php }?>
                            </div>

                            <div class="bank_box other_pay" style="display: none;">
                                <table width="100%" border="0" cellpadding="1" cellspacing="1" class="my_table_msg" style="background:#ddd">
                                    <tr>
                                        <th width="8%" height="30" align="center" bgcolor="#F7FAFF">银行名称</th>
                                        <th width="5%" height="30" align="center" bgcolor="#F7FAFF">开户人</th>
                                        <th width="12%" align="center" bgcolor="#F7FAFF">银行帐户</th>
                                        <th width="14%" align="center" bgcolor="#F7FAFF">开户行</th>
                                    </tr>
                                    <?php if (is_array($_smarty_tpl->tpl_vars['rows']->value)) {?> <?php  $_smarty_tpl->tpl_vars['blist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blist']->key => $_smarty_tpl->tpl_vars['blist']->value) {
$_smarty_tpl->tpl_vars['blist']->_loop = true;
?>
                                    <tr>
                                        <td height="30" align="center" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['blist']->value['bank_name'];?>
</td>
                                        <td height="30" align="center" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['blist']->value['name'];?>
</td>
                                        <td align="center" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['blist']->value['bank_number'];?>
</td>
                                        <td align="center" bgcolor="#FFFFFF"><?php echo $_smarty_tpl->tpl_vars['blist']->value['bank_address'];?>
</td>
                                    </tr>
                                    <?php } ?> <?php } else { ?>
                                    <tr>
                                        <td colspan="4" height="26" align="center" bgcolor="#FFFFFF">暂未添加银行</td>
                                    </tr>
                                    <?php }?>
                                </table>

                                <div class="bank_list_p_box">

                                    <div class="bank_list_p">
                                        <span class="bank_list_p_s">汇款银行：</span>
                                        <input type="text" id="bank_name" name="bank_name" class="bank_list_text" value="<?php if ($_smarty_tpl->tpl_vars['order']->value['bank_name']) {
echo $_smarty_tpl->tpl_vars['order']->value['bank_name'];
}?>" placeholder="例如：中国银行+沭阳开发区支行" />
                                    </div>
                                    <div class="bank_list_p">
                                        <span class="bank_list_p_s">汇入账号：</span>
                                        <input type="text" id="bank_number" name="bank_number" class="bank_list_text" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['bank_number'];?>
" />
                                    </div>
                                    <div class="bank_list_p">
                                        <span class="bank_list_p_s">汇款金额：</span>
                                        <input type="text" id="bank_price" name="bank_price" class="bank_list_text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
" />
                                    </div>
                                    <div class="bank_list_p">
                                        <span class="bank_list_p_s">汇款时间：</span>
                                        <input type="text" id="bank_time" name="bank_time" class="bank_list_text" />
                                    </div>
                                    <div class="bank_list_p">
                                        <span class="bank_list_p_s">备注</span>
                                        <textarea name='order_remark' class="bank_textarea"></textarea>
                                    </div>
                                    <div class="bank_list_p">
                                        <span class="bank_list_p_s">上传汇款单：</span>
                                        <button type="button" class="layui-btn layui-btn-normal" id="noupload">选择文件</button>
                                        <input type="hidden" id="laynoupload" value="1" />
                                    </div>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        layui.use(['laydate'], function() {
                                            var laydate = layui.laydate,
                                                $ = layui.$;
                                            laydate.render({
                                                elem: '#bank_time'
                                            });
                                        });
                                    <?php echo '</script'; ?>
>

                                </div>
                            </div>

							

                            <div class="payment_boxlist_zf_bth" id="order_pay">
                                <input type="button" value="确认支付" class="payment_boxlist_zf_bth_a" onClick="CheckForm();">
                            </div>

                            <div class="payment_boxlist_zf_bth" id="integral_buy" style="display: none;">
                                <a href="javascript:integral_buy('<?php echo $_smarty_tpl->tpl_vars['order']->value['rating'];?>
','<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
');">
                                    <input type="button" value="确认支付" class="payment_boxlist_zf_bth_a">
                                </a>
                            </div>
							<?php } else { ?>
							<div class="con_banner_no" style="width:300px;"><span></span><em>网站已关闭支付接口，请联系管理员</em></div>
							<?php }?>

                        </div>

                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

<div id="payshow" style="width:450px; position:absolute;left:0px;top:0px; background:#fff; display:none;">
    <div class="payment_tip">
        请在新打开的支付页面上完成付款，付款完成前请不要关闭此窗口。<br> 如您在支付过程中遇到问题，请联系客服：
        <span class="payment_tip_s"><?php echo $_smarty_tpl->tpl_vars['config']->value['sy_freewebtel'];?>
</span>
    </div>
    <div class="payment_bottom">
        <a href="index.php?c=paylog" class="payment_bottombutt">已完成付款</a>
        <a href="index.php?c=payment&id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="payment_bottom_bth2">重新支付</a>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['sy_weburl'];?>
/js/layui.upload.js?v=<?php echo $_smarty_tpl->tpl_vars['config']->value['cachecode'];?>
" type='text/javascript'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function paycheck(type) {
        if(type == "alipay") {
            document.getElementById('payform').action = "../api/alipay/alipayto.php";
            $("#payform").attr("target", "_blank");
            $("#alipay").addClass("payment_boxlist_zf_s_cur");
            $("#otherpay").removeClass("payment_boxlist_zf_s_cur");
            $("#tenpay").removeClass("payment_boxlist_zf_s_cur");
            $("#paytype").val("alipay");
            $(".other_pay").hide();
        } else if(type == "tenpay") {
            document.getElementById('payform').action = "../api/tenpay/index.php";
            $("#payform").attr("target", "_blank");
            $("#tenpay").addClass("payment_boxlist_zf_s_cur");
            $("#otherpay").removeClass("payment_boxlist_zf_s_cur");
            $("#alipay").removeClass("payment_boxlist_zf_s_cur");
            $("#paytype").val("tenpay");
            $(".other_pay").hide();
        } else if(type == "otherpay") {
            document.getElementById('payform').action = "index.php?c=payment&act=paybank";
            $("#payform").attr("target", "supportiframe");
            $("#otherpay").addClass("payment_boxlist_zf_s_cur");
            $("#alipay").removeClass("payment_boxlist_zf_s_cur");
            $("#tenpay").removeClass("payment_boxlist_zf_s_cur");
            $("#paytype").val("bank");
            $(".other_pay").show();
        }
    }

    $(function() {
        $("input[name='pay_bank']").eq(0).attr("checked", true); 
       
       <?php if ($_smarty_tpl->tpl_vars['company']->value['link_null']=='') {?>
            $("input[name='linkway']").attr("checked", false);
            $("#linkway_1").attr("checked", true); 
     	<?php }?>
    });
    function CheckForm(){
		
		var money = parseFloat($("#camount").val());
		var orderPrice = parseFloat($("#order_price").html());

  		if(orderPrice<=money){ 
			var id = '<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
';
			var coupon = $("input[name='coupon']:checked").val();
		    var integral = $("#dkjf").val();
 		
			var index = layer.load('执行中，请稍候...',0);
			
			$.ajax({
				async: false, 
				type: 'POST',  
				global:false,
				url: "index.php?c=payment&act=useCouponBuy",  
				data: {
					id:id,cid:coupon,integral:integral
				},  
				success: function(data){  
					layer.close(index);
					var data=eval('('+data+')'); 

					if(data.error==1){
						layer.msg(data.msg, 2,8);
						return false;
 					}else if(data.error==0){
						layer.msg(data.msg, 2, 9, function() {
							window.location.href = 'index.php?c=paylogtc';
						});
					}
				}  
			});
		}else{
			$('#payform').submit();
		}
	}
    function payforms() {
        var id = '<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
';
        var integral = $("#dkjf").val();
        var pay_bank = $("#paytype").val();
		 
			if(pay_bank == '') {
				layer.msg('请选择支付方式！', 2, 8);
				return false;
			} else if(pay_bank == 'bank') {
				if($("#bank_name").val() == "") {
					layer.msg('请填写汇款银行！', 2, 8);
					return false;
				}
				if($("#bank_number").val() == "") {
					layer.msg('请填写汇入账号！', 2, 8);
					return false;
				}
				if($("#bank_price").val() == "") {
					layer.msg('请填写汇款金额！', 2, 8);
					return false;
				}
				if($("#bank_time").val() == "") {
					layer.msg('请填写汇款时间！', 2, 8);
					return false;
				}
			}

			$.post('index.php?c=payment&act=dkzf', {
				id: id,
				dkjf: integral
			}, function(data) {
				if(data) {
					data = eval('(' + data + ')');
					if(data.error == 1) {

						if(pay_bank !='bank'){
							$.layer({
								type: 1,
								title: '提示',
								closeBtn: [0, true],
								border: [10, 0.3, '#000', true],
								area: ['450px', '280px'],
								page: {
									dom: "#payshow"
								}
							});
						}

						layer.msg(data.msg, 2, 9);
					} else if(data.error == 2) {
						layer.msg(data.msg, 2, 8);
						return false;
					}
				}
			});
		 
    }
	layui.use(['form'], function() {
		var form = layui.form,
			layer = layui.layer,
			$ = layui.$;

		form.on('switch(type_switch)', function(data) {
			var v = this.checked ? 1 : 2;
			if(v == 1) {
				$("#input_integral").show();
			} else {
				$("#dkjf").val('');
				$("#i_integral").val('');
				$("#order_price").html('<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
');
				$("#bank_price").val('<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
');
				$("#pay_style").show();
				$("#order_pay").show();
				$("#integral_buy").hide();
				$("#input_integral").hide();
			}
		}); 
	});

    function accAdd(arg1, arg2) {
        var r1, r2, m;
        try {
            r1 = arg1.toString().split(".")[1].length
        } catch(e) {
            r1 = 0
        }
        try {
            r2 = arg2.toString().split(".")[1].length
        } catch(e) {
            r2 = 0
        }
        m = Math.pow(10, Math.max(r1, r2))
        return(arg1 * m + arg2 * m) / m
    }

    function accSub(arg1, arg2) {
        return accAdd(arg1, -arg2);
    }

    function accMul(arg1, arg2) {
        var m = 0,
            s1 = arg1.toString(),
            s2 = arg2.toString();
        try {
            m += s1.split(".")[1].length
        } catch(e) {}
        try {
            m += s2.split(".")[1].length
        } catch(e) {}
        return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)
    }

    function accDiv(arg1, arg2) {
        var t1 = 0,
            t2 = 0,
            r1, r2;
        try {
            t1 = arg1.toString().split(".")[1].length
        } catch(e) {}
        try {
            t2 = arg2.toString().split(".")[1].length
        } catch(e) {}
        with(Math) {
            r1 = Number(arg1.toString().replace(".", ""));
            r2 = Number(arg2.toString().replace(".", ""));
            return(r1 / r2) * pow(10, t2 - t1);
        }
    }

    function myFunction(_this) {
        _this.value = _this.value.replace(/[^0-9]/g, '');
    }

    function checkNum(integral, integral_pro) {

        var dkjf = $("#dkjf").val();
        var price = '<?php echo $_smarty_tpl->tpl_vars['order']->value['order_price'];?>
';
        var price = parseInt(price);

        var need_integral = accMul(price, integral_pro);

        if(parseInt(integral) >= parseInt(need_integral)) {

            if(parseInt(dkjf) > parseInt(need_integral)) { 
                $("#dkjf").val(parseInt(need_integral));
                var price_n = accSub(price, accDiv(need_integral, integral_pro));
            } else {
                var price_n = accSub(price, accDiv(dkjf, integral_pro));
            }

        } else {

            if(parseInt(dkjf) > parseInt(integral)) {
                $("#dkjf").val(parseInt(integral));
                var price_n = accSub(price, accDiv(integral, integral_pro));
            } else {
                var price_n = accSub(price, accDiv(dkjf, integral_pro));
            }

        }

        if(price_n <= 0) {

            $("#order_price").html(0);

            $("#pay_style").hide();
            $("#order_pay").hide();

            $("#integral_buy").show();

        } else {

            $("#order_price").html(price_n);
            $("#bank_price").val(price_n);

            $("#pay_style").show();
            $("#order_pay").show();

            $("#integral_buy").hide();

        }
    }

    function integral_buy(id, orderid) { 

        $.post('index.php?c=pay&act=dkzf', {
            id: id,
            orderid: orderid
        }, function(data) {

            if(data) {
                data = eval('(' + data + ')');

                if(data.error == 1) {

                    if(data.url) {
                        layer.msg(data.msg, 2, 8, function() {
                            window.location.href = data.url;
                        });
                    } else {
                        layer.msg(data.msg, 2, 8);
                    }

                } else if(data.error == 0) {
                    layer.msg(data.msg, 2, 9, function() {
                        window.location.href = 'index.php?c=paylogtc';
                    });
                }
            }

        })
    }
<?php echo '</script'; ?>
>



<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['comstyle']->value)."/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
