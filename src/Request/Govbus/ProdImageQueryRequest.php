<?php

namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2016-8-24
 */
class ProdImageQueryRequest extends SuningRequest
{

    /**
     *
     */
    private $skuIds;

    public function getSkuIds()
    {
        return $this->skuIds;
    }

    public function setSkuIds($skuIds)
    {
        $this->skuIds = $skuIds;
        $arr          = array();
        /**
         * @var $temp ProdImageQuerySkuIds
         */
        foreach ($skuIds as $temp) {
            array_push($arr, $temp->getApiParams());
        }
        $this->apiParams["skuIds"] = $arr;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.prodimage.query';
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
        return "queryProdImage";
    }

}

