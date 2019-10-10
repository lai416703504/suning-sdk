<?php
namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-3
 */
class ApplyexchangegoodsCreateRequest  extends SuningRequest {
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItems;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItems() {
		return $this->orderItems;
	}
	
	public function setOrderItems($orderItems) {
		$this->orderItems = $orderItems;
		$arr = array();
		foreach ($orderItems as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItems"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.applyexchangegoods.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "createApplyexchangegoods";
	}
	
}
