<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 17:58
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class InventoryGetSkuIds
{
    private $apiParams = array();

    private $num;

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