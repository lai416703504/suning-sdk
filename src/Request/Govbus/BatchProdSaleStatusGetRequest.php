<?php

namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-7-12
 */
class BatchProdSaleStatusGetRequest extends SuningRequest
{

    /**
     *
     */
    private $cityId;

    /**
     *
     */
    private $skuIds;

    public function getCityId()
    {
        return $this->cityId;
    }

    public function setCityId($cityId)
    {
        $this->cityId              = $cityId;
        $this->apiParams["cityId"] = $cityId;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

    public function setSkuIds($skuIds)
    {
        $this->skuIds = $skuIds;
        $arr          = array();
        /**
         * @var $temp BatchProdSaleStatusGetSkuIds
         */
        foreach ($skuIds as $temp) {
            array_push($arr, $temp->getApiParams());
        }
        $this->apiParams["skuIds"] = $arr;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.batchprodsalestatus.get';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
    }

    public function getBizName()
    {
        return "getBatchProdSaleStatus";
    }

}
