<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:08
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class MixpayorderAddSubPaymentModes
{
    private $apiParams = array();

    private $payAmount;

    private $payCode;

    public function getPayAmount()
    {
        return $this->payAmount;
    }

    public function setPayAmount($payAmount)
    {
        $this->payAmount              = $payAmount;
        $this->apiParams["payAmount"] = $payAmount;
    }

    public function getPayCode()
    {
        return $this->payCode;
    }

    public function setPayCode($payCode)
    {
        $this->payCode              = $payCode;
        $this->apiParams["payCode"] = $payCode;
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}