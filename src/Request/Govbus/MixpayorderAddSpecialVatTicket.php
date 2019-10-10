<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2019/10/9
 * Time: 18:08
 */

namespace TiandingMall\SuningSdk\Request\Govbus;


class MixpayorderAddSpecialVatTicket
{
    private $apiParams = array();

    private $companyName;

    private $consigneeAddress;

    private $consigneeMobileNum;

    private $consigneeName;

    private $regAccount;

    private $regAdd;

    private $regBank;

    private $regTel;

    private $taxNo;

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName              = $companyName;
        $this->apiParams["companyName"] = $companyName;
    }

    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->consigneeAddress              = $consigneeAddress;
        $this->apiParams["consigneeAddress"] = $consigneeAddress;
    }

    public function getConsigneeMobileNum()
    {
        return $this->consigneeMobileNum;
    }

    public function setConsigneeMobileNum($consigneeMobileNum)
    {
        $this->consigneeMobileNum              = $consigneeMobileNum;
        $this->apiParams["consigneeMobileNum"] = $consigneeMobileNum;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName              = $consigneeName;
        $this->apiParams["consigneeName"] = $consigneeName;
    }

    public function getRegAccount()
    {
        return $this->regAccount;
    }

    public function setRegAccount($regAccount)
    {
        $this->regAccount              = $regAccount;
        $this->apiParams["regAccount"] = $regAccount;
    }

    public function getRegAdd()
    {
        return $this->regAdd;
    }

    public function setRegAdd($regAdd)
    {
        $this->regAdd              = $regAdd;
        $this->apiParams["regAdd"] = $regAdd;
    }

    public function getRegBank()
    {
        return $this->regBank;
    }

    public function setRegBank($regBank)
    {
        $this->regBank              = $regBank;
        $this->apiParams["regBank"] = $regBank;
    }

    public function getRegTel()
    {
        return $this->regTel;
    }

    public function setRegTel($regTel)
    {
        $this->regTel              = $regTel;
        $this->apiParams["regTel"] = $regTel;
    }

    public function getTaxNo()
    {
        return $this->taxNo;
    }

    public function setTaxNo($taxNo)
    {
        $this->taxNo              = $taxNo;
        $this->apiParams["taxNo"] = $taxNo;
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}