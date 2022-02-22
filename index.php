<?php
/**
 *  Author: 张吉凯 <919342864@qq.com>
 *  Github: CrazyCodes <https://github.com/CrazyCodes>
 *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 */
spl_autoload_register(function ($class_name) {
  require_once $class_name . '.php';
});

use EasyPay\EasyPay;
use EasyPay\Getway\Asia\China\Wechat\WechatLogic;

$config = [
  'asia.wechat' => [
    'appid' => '11111',
    'appkey' => '11111',
    'notify_url' => '',
    'callback_url' => '',
    'refund_url' => ''
  ]
];

$payConfig = [
  'order_id' => '111111'
];

$refundConfig = [
  'order_id' => '111111'
];

$easyPay = new EasyPay();
$easyPay->load(WechatLogic::class);
$easyPay->pay($payConfig);
$easyPay->notify('asia.wechat');
$easyPay->refund($refundConfig);
$easyPay->refundNotify($refundConfig);
var_dump($easyPay);
