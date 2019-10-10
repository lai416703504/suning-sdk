<?php

namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-8-1
 */
class BanktransferCreateRequest extends SuningRequest
{

    /**
     *
     */
    private $orderIds;

    /**
     *
     */
    private $phoneNum;

    public function getOrderIds()
    {
        return $this->orderIds;
    }

    public function setOrderIds($orderIds)
    {
        $this->orderIds = $orderIds;
        $arr            = array();
        foreach ($orderIds as $temp) {
            array_push($arr, $temp->getApiParams());
        }
        $this->apiParams["orderIds"] = $arr;
    }

    public function getPhoneNum()
    {
        return $this->phoneNum;
    }

    public function setPhoneNum($phoneNum)
    {
        $this->phoneNum              = $phoneNum;
        $this->apiParams["phoneNum"] = $phoneNum;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.banktransfer.create';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->phoneNum, 'phoneNum');
    }

    public function getBizName()
    {
        return "createBanktransfer";
    }

}

