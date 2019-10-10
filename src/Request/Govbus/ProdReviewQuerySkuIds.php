<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:27
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class ProdReviewQuerySkuIds
{
    private $apiParams = array();

    private $skuId;

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