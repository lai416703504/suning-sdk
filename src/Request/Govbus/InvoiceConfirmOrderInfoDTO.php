<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 17:59
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class InvoiceConfirmOrderInfoDTO
{
    private $apiParams = array();

    private $gcOrderNo;

    public function getGcOrderNo()
    {
        return $this->gcOrderNo;
    }

    public function setGcOrderNo($gcOrderNo)
    {
        $this->gcOrderNo              = $gcOrderNo;
        $this->apiParams["gcOrderNo"] = $gcOrderNo;
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}