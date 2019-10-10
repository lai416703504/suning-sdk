<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:33
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class ShipCarriageGetSkuIds
{
    private $apiParams = array();

    private $skuId;

    private $piece;

    public function getSkuId() {
        return $this->skuId;
    }

    public function setSkuId($skuId) {
        $this->skuId = $skuId;
        $this->apiParams["skuId"] = $skuId;
    }

    public function getPiece() {
        return $this->piece;
    }

    public function setPiece($piece) {
        $this->piece = $piece;
        $this->apiParams["piece"] = $piece;
    }

    public function getApiParams(){
        return $this->apiParams;
    }
}