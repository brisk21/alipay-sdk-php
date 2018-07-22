<?php
/**
 * ALIPAY API: alipay.ebpp.pdeduct.bill.pay.status request
 *
 * @author auto create
 * @since  1.0, 2017-08-04 11:19:05
 */

namespace Alipay\Request;

class AlipayEbppPdeductBillPayStatusRequest extends AbstractAlipayRequest
{

    /**
     * 支付宝用户ID
     **/
    private $agreementId;
    
    /**
     * 商户代扣业务流水
     **/
    private $outOrderNo;

    private $apiParas = array();
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion = "1.0";
    private $notifyUrl;
    private $returnUrl;
    

    
    public function setAgreementId($agreementId)
    {
        $this->agreementId = $agreementId;
        $this->apiParas["agreement_id"] = $agreementId;
    }

    public function getAgreementId()
    {
        return $this->agreementId;
    }

    public function setOutOrderNo($outOrderNo)
    {
        $this->outOrderNo = $outOrderNo;
        $this->apiParas["out_order_no"] = $outOrderNo;
    }

    public function getOutOrderNo()
    {
        return $this->outOrderNo;
    }

    public function getApiMethodName()
    {
        return "alipay.ebpp.pdeduct.bill.pay.status";
    }

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function getTerminalType()
    {
        return $this->terminalType;
    }

    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }

    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
    }

    public function getProdCode()
    {
        return $this->prodCode;
    }

    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function getApiVersion()
    {
        return $this->apiVersion;
    }


}
