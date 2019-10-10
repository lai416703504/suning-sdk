<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:30
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class ReturnpartorderAddSkus
{
    private $apiParams = array();

    private $num;

    private $reason;

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

    public function getReason()
    {
        return $this->reason;
    }

    public function setReason($reason)
    {
        $this->reason              = $reason;
        $this->apiParams["reason"] = $reason;
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