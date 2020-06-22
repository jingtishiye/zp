<?php
error_reporting(0);
require_once("Base.php");
// 获取数据
$postData       = $_POST;
$baseController = new Base();
$baseController->logs('log.txt', var_export($postData, true));
//验证签名

$baseController->logs('log.txt', var_export($baseController->getStr($postData), true));
if (!$baseController->rsaCheck($baseController->getStr($postData), $baseController::NEW_ALIPUBKE, $postData['sign'], 'RSA2')) {
    $baseController->logs('log.txt', 'RSA2签名失败!');
    exit();
} else {
    $baseController->logs('log.txt', 'RSA2签名成功!');
}


// 验证交易状态
if (!$baseController->checkOrderStatus($postData)) {
    $baseController->logs('log.txt', '交易未完成!');
    exit();
} else {
    $baseController->logs('log.txt', '交易成功!');
    require_once (dirname(dirname(dirname(__FILE__))) . "/global.php");
    require_once(APP_PATH . 'app/public/common.php');
    require_once(LIB_PATH . 'ApiPay.class.php');
    $apiPay    = new apipay($phpyun, $db, $db_config['def'], 'index');
    $return = $apiPay->payAll($postData['out_trade_no'], $postData['total_amount'], 'alipay');
    $baseController->logs('log.txt','return 的返回值为'.$return);
    if ($return==2){
        $baseController->logs('log.txt', '订单号:' . $postData['out_trade_no'] . '订单金额:' . $postData['total_amount']);
        echo "success";
    }

}