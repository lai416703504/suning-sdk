<?php

namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-12
 */
class AlipayCreateRequest  extends SuningRequest {
	
	/**
	 * 
	 */
	private $backUrl;
	
	/**
	 * 
	 */
	private $channelType;
	
	/**
	 * 
	 */
	private $mobileModel;
	
	/**
	 * 
	 */
	private $mobileOS;
	
	/**
	 * 
	 */
	private $orderIds;
	
	public function getBackUrl() {
		return $this->backUrl;
	}
	
	public function setBackUrl($backUrl) {
		$this->backUrl = $backUrl;
		$this->apiParams["backUrl"] = $backUrl;
	}
	
	public function getChannelType() {
		return $this->channelType;
	}
	
	public function setChannelType($channelType) {
		$this->channelType = $channelType;
		$this->apiParams["channelType"] = $channelType;
	}
	
	public function getMobileModel() {
		return $this->mobileModel;
	}
	
	public function setMobileModel($mobileModel) {
		$this->mobileModel = $mobileModel;
		$this->apiParams["mobileModel"] = $mobileModel;
	}
	
	public function getMobileOS() {
		return $this->mobileOS;
	}
	
	public function setMobileOS($mobileOS) {
		$this->mobileOS = $mobileOS;
		$this->apiParams["mobileOS"] = $mobileOS;
	}
	
	public function getOrderIds() {
		return $this->orderIds;
	}
	
	public function setOrderIds($orderIds) {
		$this->orderIds = $orderIds;
		$arr = array();
        /**
         * @var $temp AlipayCreateOrderIds
         */
		foreach ($orderIds as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderIds"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.alipay.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelType, 'channelType');
	}
	
	public function getBizName(){
		return "createAlipay";
	}
	
}
