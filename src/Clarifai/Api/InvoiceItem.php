<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InvoiceItem
 *
 * Generated from protobuf message <code>clarifai.api.InvoiceItem</code>
 */
class InvoiceItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string op_type = 1;</code>
     */
    protected $op_type = '';
    /**
     * Generated from protobuf field <code>string bill_type = 2;</code>
     */
    protected $bill_type = '';
    /**
     * Generated from protobuf field <code>double price_per_op = 3;</code>
     */
    protected $price_per_op = 0.0;
    /**
     * Generated from protobuf field <code>double count = 4;</code>
     */
    protected $count = 0.0;
    /**
     * Generated from protobuf field <code>double dollars = 5;</code>
     */
    protected $dollars = 0.0;
    /**
     * Generated from protobuf field <code>string notes = 6;</code>
     */
    protected $notes = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $op_type
     *     @type string $bill_type
     *     @type float $price_per_op
     *     @type float $count
     *     @type float $dollars
     *     @type string $notes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string op_type = 1;</code>
     * @return string
     */
    public function getOpType()
    {
        return $this->op_type;
    }

    /**
     * Generated from protobuf field <code>string op_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOpType($var)
    {
        GPBUtil::checkString($var, True);
        $this->op_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bill_type = 2;</code>
     * @return string
     */
    public function getBillType()
    {
        return $this->bill_type;
    }

    /**
     * Generated from protobuf field <code>string bill_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBillType($var)
    {
        GPBUtil::checkString($var, True);
        $this->bill_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double price_per_op = 3;</code>
     * @return float
     */
    public function getPricePerOp()
    {
        return $this->price_per_op;
    }

    /**
     * Generated from protobuf field <code>double price_per_op = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPricePerOp($var)
    {
        GPBUtil::checkDouble($var);
        $this->price_per_op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double count = 4;</code>
     * @return float
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>double count = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkDouble($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double dollars = 5;</code>
     * @return float
     */
    public function getDollars()
    {
        return $this->dollars;
    }

    /**
     * Generated from protobuf field <code>double dollars = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setDollars($var)
    {
        GPBUtil::checkDouble($var);
        $this->dollars = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string notes = 6;</code>
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Generated from protobuf field <code>string notes = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setNotes($var)
    {
        GPBUtil::checkString($var, True);
        $this->notes = $var;

        return $this;
    }

}

