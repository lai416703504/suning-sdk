<?php

namespace TiandingMall\SuningSdk\Request\Govbus;


use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-6-25
 */
class AfterserviceQueryRequest  extends SuningRequest {
	
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
	private $orderId;
	
	/**
	 * 
	 */
	private $skus;
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getCountyId() {
		return $this->countyId;
	}
	
	public function setCountyId($countyId) {
		$this->countyId = $countyId;
		$this->apiParams["countyId"] = $countyId;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getSkus() {
		return $this->skus;
	}
	
	public function setSkus($skus) {
		$this->skus = $skus;
		$arr = array();
        /**
         * @var $temp AfterserviceQuerySkus
         */
		foreach ($skus as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["skus"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.afterservice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
		RequestCheckUtil::checkNotNull($this->countyId, 'countyId');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "queryAfterservice";
	}
	
}
