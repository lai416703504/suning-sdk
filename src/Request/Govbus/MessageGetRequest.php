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
class MessageGetRequest  extends SuningRequest {
	
	/**
	 * 
	 */
	private $type;
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.message.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "getMessage";
	}
	
}

?>