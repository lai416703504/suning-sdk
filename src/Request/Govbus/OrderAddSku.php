<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:12
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class OrderAddSku
{
    private $apiParams = array();

    private $num;

    private $skuId;

    private $unitPrice;

    public function getNum()
    {
        return $this->num;
    }

    public function setNum($num)
    {
        $this->num              = $num;
        $this->apiParams["num"] = $num;
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

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice              = $unitPrice;
        $this->apiParams["unitPrice"] = $unitPrice;
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}