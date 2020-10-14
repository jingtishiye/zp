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
error_reporting(0);

require_once("alipay_config.php");
//require_once("class/alipay_service.php");
require_once("Base.php"); //新版支付宝签名验证
//require_once(dirname(dirname(dirname(__FILE__)))."/config/db.safety.php");
require_once(dirname(dirname(dirname(__FILE__)))."/config/db.config.php");
require_once(dirname(dirname(dirname(__FILE__)))."/data/plus/config.php");
if (substr(PHP_VERSION, 0, 1) == '7') {
	require_once(dirname(dirname(dirname(__FILE__)))."/app/include/mysqli.class.php");
}else{
	require_once(dirname(dirname(dirname(__FILE__)))."/app/include/mysql.class.php");
}
$db = new mysql($db_config['dbhost'], $db_config['dbuser'], $db_config['dbpass'], $db_config['dbname'], ALL_PS, $db_config['charset']);
if(!is_numeric($_POST['dingdan'])){die;}
/*$_COOKIE['uid']=(int)$_COOKIE['uid'];
$_POST['is_invoice']=(int)$_POST['is_invoice'];
$_POST['coupon']=(int)$_POST['coupon'];
$invoice_title=trim($_POST['invoice_title']);*/
$member_sql=$db->query("SELECT * FROM `".$db_config["def"]."member` WHERE `uid`='".$_COOKIE['uid']."' limit 1");
$member=$db->fetch_array($member_sql);
if($member['usertype'] != $_COOKIE['usertype']||md5($member['username'].$member['password'].$member['salt'])!=$_COOKIE['shell']){
	echo '登录信息验证错误，请重新登录！';die;
}
$sql=$db->query("select * from `".$db_config["def"]."company_order` where `order_id`='".$_POST['dingdan']."' AND `order_price`>=0");
$row=$db->fetch_array($sql);
if(!$row['uid'] || $row['uid']!=$_COOKIE['uid'])
{
	die;
}


/*以下参数是需要通过下单时的订单数据传入进来获得*/
//必填参数
$out_trade_no = $_POST['dingdan'];	//请与贵网站订单系统中的唯一订单号匹配
$subject      = $_POST['subject']?$_POST['subject']:'充值';		//订单名称，显示在支付宝收银台里的“商品名称”里，显示在支付宝的交易管理的“商品名称”的列表里。
$body         = $row['order_remark'];		//订单描述、订单详细、订单备注，显示在支付宝收银台里的“商品描述”里
$total_fee    = $row['order_price'];		//订单总金额，显示在支付宝收银台里的“应付总额”里

//请求公共参数
$baseController = new Base();
$pub_params = [
    'app_id'    => $baseController::APPID,
    'method'    =>  'alipay.trade.page.pay', //接口名称 应填写固定值alipay.trade.page.pay
    'format'    =>  'JSON', //目前仅支持JSON
    'return_url'    => $baseController::REURL, //同步返回地址
    'charset'    =>  'UTF-8',
    'sign_type'    =>  'RSA2',//签名方式
    'sign'    =>  '', //签名
    'timestamp'    => date('Y-m-d H:i:s'), //发送时间 格式0000-00-00 00:00:00
    'version'    =>  '1.0', //固定为1.0
    'notify_url'    => $baseController::NOURL, //异步通知地址
    'biz_content'    =>  '', //业务请求参数的集合
];
//业务参数
$api_params = [
    'out_trade_no'  => $_POST['dingdan'],//商户订单号
    'product_code'  => 'FAST_INSTANT_TRADE_PAY', //销售产品码 固定值
    //'total_amount'  => $_POST['alimoney'], //总价 单位为元
    'total_amount'  => $total_fee, //总价 单位为元
    'subject'  => $_POST['subject'], //订单标题
];
$pub_params['biz_content'] = json_encode($api_params,JSON_UNESCAPED_UNICODE);

//构造请求函数
/*$alipay = new alipay_service($parameter,$security_code,$sign_type);*/
$pub_params =  $baseController->setRsa2Sign($pub_params);

$url = $baseController::NEW_PAYGATEWAY . '?' . $baseController->getUrl($pub_params);

header("location:".$url);


?>
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>支付宝即时支付</title>
        <style type="text/css">
            .font_content{
                font-family:"宋体";
                font-size:14px;
                color:#FF6600;
            }
            .font_title{
                font-family:"宋体";
                font-size:16px;
                color:#FF0000;
                font-weight:bold;
            }
            table{
                border: 1px solid #CCCCCC;
            }
        </style>
    </head>
    <body>

        <table align="center" width="350" cellpadding="5" cellspacing="0">
            <tr>
                <td align="center" class="font_title" colspan="2">订单确认</td>
            </tr>
            <tr>
                <td class="font_content" align="right">订单号：</td>
                <td class="font_content" align="left"><?php echo $out_trade_no; ?></td>
            </tr>
            <tr>
                <td class="font_content" align="right">付款总金额：</td>
                <td class="font_content" align="left"><?php echo $total_fee; ?></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><?php echo $sHtmlText; ?></td>
            </tr>
        </table>
    </body>
</html>
