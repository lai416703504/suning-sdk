<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:15
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class OrderconfirmAddOrderList
{
    private $apiParams = array();

    private $orderId;

    private $orderItemList;

    public function getOrderId() {
        return $this->orderId;
    }

    public function setOrderId($orderId) {
        $this->orderId = $orderId;
        $this->apiParams["orderId"] = $orderId;
    }

    public function getOrderItemList() {
        return $this->orderItemList;
    }

    public function setOrderItemList($orderItemList) {
        $this->orderItemList = $orderItemList;
        $arr = array();
        /**
         * @var $temp OrderconfirmAddOrderItemList
         */
        foreach ($orderItemList as $temp){
            array_push($arr,$temp->getApiParams());
        }
        $this->apiParams["orderItemList"] = $arr;
    }

    public function getApiParams(){
        return $this->apiParams;
    }
}