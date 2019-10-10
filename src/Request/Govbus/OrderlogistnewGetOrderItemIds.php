<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:18
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class OrderlogistnewGetOrderItemIds
{
    private $apiParams = array();

    private $orderItemId;

    private $skuId;

    public function getOrderItemId() {
        return $this->orderItemId;
    }

    public function setOrderItemId($orderItemId) {
        $this->orderItemId = $orderItemId;
        $this->apiParams["orderItemId"] = $orderItemId;
    }

    public function getSkuId() {
        return $this->skuId;
    }

    public function setSkuId($skuId) {
        $this->skuId = $skuId;
        $this->apiParams["skuId"] = $skuId;
    }

    public function getApiParams(){
        return $this->apiParams;
    }

}