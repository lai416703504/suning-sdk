<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 17:17
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class AlipayCreateOrderIds
{
    private $apiParams = array();

    private $orderId;

    public function getOrderId() {
        return $this->orderId;
    }

    public function setOrderId($orderId) {
        $this->orderId = $orderId;
        $this->apiParams["orderId"] = $orderId;
    }

    public function getApiParams(){
        return $this->apiParams;
    }
}