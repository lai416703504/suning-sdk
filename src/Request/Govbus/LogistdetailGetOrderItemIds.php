<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:03
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class LogistdetailGetOrderItemIds
{
    private $apiParams = array();

    private $orderItemId;

    public function getOrderItemId() {
        return $this->orderItemId;
    }

    public function setOrderItemId($orderItemId) {
        $this->orderItemId = $orderItemId;
        $this->apiParams["orderItemId"] = $orderItemId;
    }

    public function getApiParams(){
        return $this->apiParams;
    }
}