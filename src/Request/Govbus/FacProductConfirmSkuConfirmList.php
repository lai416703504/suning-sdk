<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 17:55
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class FacProductConfirmSkuConfirmList
{
    private $apiParams = array();

    private $confirmTime;

    private $skuId;

    public function getConfirmTime() {
        return $this->confirmTime;
    }

    public function setConfirmTime($confirmTime) {
        $this->confirmTime = $confirmTime;
        $this->apiParams["confirmTime"] = $confirmTime;
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