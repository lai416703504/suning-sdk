<?php
namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2017-5-10
 */
class ProdextendGetRequest extends SuningRequest
{

    /**
     *
     */
    private $skus;

    public function getSkus()
    {
        return $this->skus;
    }

    public function setSkus($skus)
    {
        $this->skus = $skus;
        $arr        = array();
        /**
         * @var $temp ProdextendGetSkus
         */
        foreach ($skus as $temp) {
            array_push($arr, $temp->getApiParams());
        }
        $this->apiParams["skus"] = $arr;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.prodextend.get';
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
        return "getProdextend";
    }

}


