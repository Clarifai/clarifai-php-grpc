<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.MetricValue</code>
 */
class MetricValue extends \Google\Protobuf\Internal\Message
{
    protected $metric_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $string_value
     *     @type float $float_value
     *     @type int $int_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string string_value = 1;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(1);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>string string_value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>float float_value = 2;</code>
     * @return float
     */
    public function getFloatValue()
    {
        return $this->readOneof(2);
    }

    public function hasFloatValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>float float_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 int_value = 3;</code>
     * @return int
     */
    public function getIntValue()
    {
        return $this->readOneof(3);
    }

    public function hasIntValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>int32 int_value = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIntValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMetricValue()
    {
        return $this->whichOneof("metric_value");
    }

}

