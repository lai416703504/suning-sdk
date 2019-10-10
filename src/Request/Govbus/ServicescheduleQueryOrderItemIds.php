<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:32
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class ServicescheduleQueryOrderItemIds
{

    private $apiParams = array();

    private $orderItemId;

    private $sheetId;

    private $skuId;

    public function getOrderItemId()
    {
        return $this->orderItemId;
    }

    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId              = $orderItemId;
        $this->apiParams["orderItemId"] = $orderItemId;
    }

    public function getSheetId()
    {
        return $this->sheetId;
    }

    public function setSheetId($sheetId)
    {
        $this->sheetId              = $sheetId;
        $this->apiParams["sheetId"] = $sheetId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    public function setSkuId($skuId)
    {
        $this->skuId              = $skuId;
        $this->apiParams["skuId"] = $skuId;
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}