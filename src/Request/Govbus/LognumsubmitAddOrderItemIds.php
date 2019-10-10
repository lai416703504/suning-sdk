<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:04
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class LognumsubmitAddOrderItemIds
{
    private $apiParams = array();

    private $expressCompanyName;

    private $expressOrderId;

    private $orderItemId;

    private $sheetId;

    private $skuId;

    public function getExpressCompanyName() {
        return $this->expressCompanyName;
    }

    public function setExpressCompanyName($expressCompanyName) {
        $this->expressCompanyName = $expressCompanyName;
        $this->apiParams["expressCompanyName"] = $expressCompanyName;
    }

    public function getExpressOrderId() {
        return $this->expressOrderId;
    }

    public function setExpressOrderId($expressOrderId) {
        $this->expressOrderId = $expressOrderId;
        $this->apiParams["expressOrderId"] = $expressOrderId;
    }

    public function getOrderItemId() {
        return $this->orderItemId;
    }

    public function setOrderItemId($orderItemId) {
        $this->orderItemId = $orderItemId;
        $this->apiParams["orderItemId"] = $orderItemId;
    }

    public function getSheetId() {
        return $this->sheetId;
    }

    public function setSheetId($sheetId) {
        $this->sheetId = $sheetId;
        $this->apiParams["sheetId"] = $sheetId;
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