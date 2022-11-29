<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetBillingUsageResponse
 *
 * Generated from protobuf message <code>clarifai.api.GetBillingUsageResponse</code>
 */
class GetBillingUsageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InvoiceItem invoice_items = 2;</code>
     */
    private $invoice_items;
    /**
     * Generated from protobuf field <code>.clarifai.api.BillingCycle billing_cycle = 3;</code>
     */
    protected $billing_cycle = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\InvoiceItem[]|\Google\Protobuf\Internal\RepeatedField $invoice_items
     *     @type \Clarifai\Api\BillingCycle $billing_cycle
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InvoiceItem invoice_items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInvoiceItems()
    {
        return $this->invoice_items;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InvoiceItem invoice_items = 2;</code>
     * @param \Clarifai\Api\InvoiceItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInvoiceItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\InvoiceItem::class);
        $this->invoice_items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.BillingCycle billing_cycle = 3;</code>
     * @return \Clarifai\Api\BillingCycle|null
     */
    public function getBillingCycle()
    {
        return $this->billing_cycle;
    }

    public function hasBillingCycle()
    {
        return isset($this->billing_cycle);
    }

    public function clearBillingCycle()
    {
        unset($this->billing_cycle);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.BillingCycle billing_cycle = 3;</code>
     * @param \Clarifai\Api\BillingCycle $var
     * @return $this
     */
    public function setBillingCycle($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\BillingCycle::class);
        $this->billing_cycle = $var;

        return $this;
    }

}

