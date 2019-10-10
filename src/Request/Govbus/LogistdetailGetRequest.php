<?php
namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-1-25
 */
class LogistdetailGetRequest extends SuningRequest
{

    /**
     *
     */
    private $orderId;

    /**
     *
     */
    private $orderItemIds;

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId              = $orderId;
        $this->apiParams["orderId"] = $orderId;
    }

    public function getOrderItemIds()
    {
        return $this->orderItemIds;
    }

    public function setOrderItemIds($orderItemIds)
    {
        $this->orderItemIds = $orderItemIds;
        $arr                = array();
        /**
         * @var $temp LogistdetailGetOrderItemIds
         */
        foreach ($orderItemIds as $temp) {
            array_push($arr, $temp->getApiParams());
        }
        $this->apiParams["orderItemIds"] = $arr;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.logistdetail.get';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
    }

    public function getBizName()
    {
        return "getLogistdetail";
    }

}
