<?php
namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2018-12-4
 */
class InventoryGetRequest extends SuningRequest
{

    /**
     *
     */
    private $cityId;

    /**
     *
     */
    private $countyId;

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

    public function getCountyId()
    {
        return $this->countyId;
    }

    public function setCountyId($countyId)
    {
        $this->countyId              = $countyId;
        $this->apiParams["countyId"] = $countyId;
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
         * @var $temp InventoryGetSkuIds
         */
        foreach ($skuIds as $temp) {
            array_push($arr, $temp->getApiParams());
        }
        $this->apiParams["skuIds"] = $arr;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.inventory.get';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
        RequestCheckUtil::checkNotNull($this->countyId, 'countyId');
    }

    public function getBizName()
    {
        return "getInventory";
    }

}
