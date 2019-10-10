<?php
namespace TiandingMall\SuningSdk\Request\Govbus;
use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-26
 */
class OrderitemQueryRequest  extends SuningRequest {
	
	/**
	 * 
	 */
	private $companyCusNo;
	
	/**
	 * 
	 */
	private $dateType;
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $orderItemStatus;
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $pageNum;
	
	/**
	 * 
	 */
	private $pageLen;
	
	public function getCompanyCusNo() {
		return $this->companyCusNo;
	}
	
	public function setCompanyCusNo($companyCusNo) {
		$this->companyCusNo = $companyCusNo;
		$this->apiParams["companyCusNo"] = $companyCusNo;
	}
	
	public function getDateType() {
		return $this->dateType;
	}
	
	public function setDateType($dateType) {
		$this->dateType = $dateType;
		$this->apiParams["dateType"] = $dateType;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getOrderItemStatus() {
		return $this->orderItemStatus;
	}
	
	public function setOrderItemStatus($orderItemStatus) {
		$this->orderItemStatus = $orderItemStatus;
		$this->apiParams["orderItemStatus"] = $orderItemStatus;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getPageLen() {
		return $this->pageLen;
	}
	
	public function setPageLen($pageLen) {
		$this->pageLen = $pageLen;
		$this->apiParams["pageLen"] = $pageLen;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.orderitem.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->dateType, 'dateType');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->orderItemStatus, 'orderItemStatus');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
		RequestCheckUtil::checkNotNull($this->pageNum, 'pageNum');
		RequestCheckUtil::checkNotNull($this->pageLen, 'pageLen');
	}
	
	public function getBizName(){
		return "queryOrderitem";
	}
	
}

?>