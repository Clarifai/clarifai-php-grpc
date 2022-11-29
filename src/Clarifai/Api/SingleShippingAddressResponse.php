<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SingleShippingAddressResponse
 *
 * Generated from protobuf message <code>clarifai.api.SingleShippingAddressResponse</code>
 */
class SingleShippingAddressResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.ShippingAddress shipping_address = 2;</code>
     */
    protected $shipping_address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\ShippingAddress $shipping_address
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
     * Generated from protobuf field <code>.clarifai.api.ShippingAddress shipping_address = 2;</code>
     * @return \Clarifai\Api\ShippingAddress|null
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    public function hasShippingAddress()
    {
        return isset($this->shipping_address);
    }

    public function clearShippingAddress()
    {
        unset($this->shipping_address);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ShippingAddress shipping_address = 2;</code>
     * @param \Clarifai\Api\ShippingAddress $var
     * @return $this
     */
    public function setShippingAddress($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ShippingAddress::class);
        $this->shipping_address = $var;

        return $this;
    }

}

