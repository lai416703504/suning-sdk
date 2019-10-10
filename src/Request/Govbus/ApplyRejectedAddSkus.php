<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 17:26
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class ApplyRejectedAddSkus
{
    private $apiParams = array();

    private $reason;

    private $reasonDetails;

    private $skuId;

    public function getReason() {
        return $this->reason;
    }

    public function setReason($reason) {
        $this->reason = $reason;
        $this->apiParams["reason"] = $reason;
    }

    public function getReasonDetails() {
        return $this->reasonDetails;
    }

    public function setReasonDetails($reasonDetails) {
        $this->reasonDetails = $reasonDetails;
        $this->apiParams["reasonDetails"] = $reasonDetails;
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