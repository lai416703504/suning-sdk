<?php
namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-7-17
 */
class MixconfirmorderAddRequest extends SuningRequest
{

    /**
     *
     */
    private $orderId;

    /**
     *
     */
    private $subPaymentModes;

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId              = $orderId;
        $this->apiParams["orderId"] = $orderId;
    }

    public function getSubPaymentModes()
    {
        return $this->subPaymentModes;
    }

    public function setSubPaymentModes($subPaymentModes)
    {
        $this->subPaymentModes = $subPaymentModes;
        $arr                   = array();
        /**
         * @var $temp MixconfirmorderAddSubPaymentModes
         */
        foreach ($subPaymentModes as $temp) {
            array_push($arr, $temp->getApiParams());
        }
        $this->apiParams["subPaymentModes"] = $arr;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.mixconfirmorder.add';
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
        return "addMixconfirmorder";
    }

}

