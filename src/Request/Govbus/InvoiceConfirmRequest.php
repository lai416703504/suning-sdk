<?php
namespace TiandingMall\SuningSdk\Request\Govbus;

use TiandingMall\SuningSdk\SuningRequest;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-2-20
 */
class InvoiceConfirmRequest extends SuningRequest
{

    /**
     *
     */
    private $applyForInvoiceReqDTO;

    /**
     *
     */
    private $orderInfoDTO;

    public function getApplyForInvoiceReqDTO()
    {
        return $this->applyForInvoiceReqDTO;
    }

    public function setApplyForInvoiceReqDTO(InvoiceConfirmOrderInfoDTO $applyForInvoiceReqDTO)
    {
        $this->applyForInvoiceReqDTO              = $applyForInvoiceReqDTO;
        $this->apiParams["applyForInvoiceReqDTO"] = $applyForInvoiceReqDTO->getApiParams();
    }

    public function getOrderInfoDTO()
    {
        return $this->orderInfoDTO;
    }

    public function setOrderInfoDTO($orderInfoDTO)
    {
        $this->orderInfoDTO = $orderInfoDTO;
        $arr                = array();
        /**
         * @var $temp InvoiceConfirmOrderInfoDTO
         */
        foreach ($orderInfoDTO as $temp) {
            array_push($arr, $temp->getApiParams());
        }
        $this->apiParams["orderInfoDTO"] = $arr;
    }

    public function getApiMethodName()
    {
        return 'suning.govbus.invoice.confirm';
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
        return "confirmInvoice";
    }

}
