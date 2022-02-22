# EasyPay
Global Pay

# Gateway Select
- Africa
- Asia
  - China
    - Wechat
    
- Europe

# Demo Use 
```php
$easyPay = new EasyPay();
$wechat = $easyPay->load(WechatLogic::class);
$wechat->pay($payConfig);
$wechat->notify();
$wechat->refund($refundConfig);
```
