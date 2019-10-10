<?php
namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-3-5
 */
class OrdercancelDeleteRequest extends SuningRequest
{

    /**
     *
     */
    private $orderList;

    public function getOrderList()
    {
        return $this->orderList;
    }

    public function setOrderList($orderList)
    {
        $this->orderList = $orderList;
        $arr             = array();
        foreach ($orderList as $temp) {
            array_push($arr, $temp->getApiParams());
        }
        $this->apiParams["orderList"] = $arr;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.ordercancel.delete';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
    }

    public function getBizName()
    {
        return "deleteOrdercancel";
    }

}

