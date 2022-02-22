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
use EasyPay\Getway\Asia\Wechat\WechatLogic;

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
  'gateway' => 'asia.wechat',
  'order_id' => '111111'
];

$refundConfig = [
  'gateway' => 'asia.wechat',
  'order_id' => '111111'
];

$easyPay = new EasyPay();
$easyPay->pay($payConfig);
$easyPay->notify('asia.wechat');
$easyPay->refund($refundConfig);
$easyPay->refundNotify($refundConfig);
var_dump($easyPay);
