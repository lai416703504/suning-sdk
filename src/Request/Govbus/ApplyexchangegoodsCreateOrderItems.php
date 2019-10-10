<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 17:24
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class ApplyexchangegoodsCreateOrderItems
{
    private $apiParams = array();

    private $num;

    private $orderItemId;

    private $reasonDetails;

    private $skuId;

    public function getNum()
    {
        return $this->num;
    }

    public function setNum($num)
    {
        $this->num              = $num;
        $this->apiParams["num"] = $num;
    }

    public function getOrderItemId()
    {
        return $this->orderItemId;
    }

    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId              = $orderItemId;
        $this->apiParams["orderItemId"] = $orderItemId;
    }

    public function getReasonDetails()
    {
        return $this->reasonDetails;
    }

    public function setReasonDetails($reasonDetails)
    {
        $this->reasonDetails              = $reasonDetails;
        $this->apiParams["reasonDetails"] = $reasonDetails;
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