<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:10
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class MpStockQuerySkuIds
{
    private $apiParams = array();

    private $skuId;

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