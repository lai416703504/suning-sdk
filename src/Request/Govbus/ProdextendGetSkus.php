<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:25
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class ProdextendGetSkus
{
    private $apiParams = array();

    private $price;

    private $skuId;

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price              = $price;
        $this->apiParams["price"] = $price;
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