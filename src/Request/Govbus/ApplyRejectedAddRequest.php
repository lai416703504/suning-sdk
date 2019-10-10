<?php

namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-5-29
 */
class ApplyRejectedAddRequest  extends SuningRequest {
	
	/**
	 * 
	 */
	private $bankName;
	
	/**
	 * 
	 */
	private $cardNumber;
	
	/**
	 * 
	 */
	private $cardUsername;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $skus;
	
	public function getBankName() {
		return $this->bankName;
	}
	
	public function setBankName($bankName) {
		$this->bankName = $bankName;
		$this->apiParams["bankName"] = $bankName;
	}
	
	public function getCardNumber() {
		return $this->cardNumber;
	}
	
	public function setCardNumber($cardNumber) {
		$this->cardNumber = $cardNumber;
		$this->apiParams["cardNumber"] = $cardNumber;
	}
	
	public function getCardUsername() {
		return $this->cardUsername;
	}
	
	public function setCardUsername($cardUsername) {
		$this->cardUsername = $cardUsername;
		$this->apiParams["cardUsername"] = $cardUsername;
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
         * @var $temp ApplyRejectedAddSkus
         */
		foreach ($skus as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["skus"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.applyrejected.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "addApplyRejected";
	}
	
}
