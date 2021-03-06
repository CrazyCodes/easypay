<?php
/**
 *  Author: 张吉凯 <919342864@qq.com>
 *  Github: CrazyCodes <https://github.com/CrazyCodes>
 *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 */

namespace EasyPay;

use EasyPay\Kernel\GateWayInterface;

class EasyPay
{
  public $gateWay;

  public function load(GateWayInterface $gateWay)
  {
    $this->gateWay = $gateWay;
  }

  public function pay()
  {
    return $this->gateWay->pay();
  }

  public function notify()
  {
    return $this->gateWay->notify();
  }

  public function refund()
  {
  }

  public function refundNotify()
  {
  }
}
