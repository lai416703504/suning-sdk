<?php
namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\RequestCheckUtil;
use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-9-29
 */
class ProdDetailGetRequest extends SuningRequest
{

    /**
     *
     */
    private $skuId;

    public function getSkuId()
    {
        return $this->skuId;
    }

    public function setSkuId($skuId)
    {
        $this->skuId              = $skuId;
        $this->apiParams["skuId"] = $skuId;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.proddetail.get';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
        RequestCheckUtil::checkNotNull($this->skuId, 'skuId');
    }

    public function getBizName()
    {
        return "getProdDetail";
    }

}

?>