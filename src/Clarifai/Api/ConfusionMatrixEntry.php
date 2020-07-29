<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ConfusionMatrixEntry</code>
 */
class ConfusionMatrixEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string predicted = 1;</code>
     */
    protected $predicted = '';
    /**
     * Generated from protobuf field <code>string actual = 2;</code>
     */
    protected $actual = '';
    /**
     * Generated from protobuf field <code>float value = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $predicted
     *     @type string $actual
     *     @type float $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string predicted = 1;</code>
     * @return string
     */
    public function getPredicted()
    {
        return $this->predicted;
    }

    /**
     * Generated from protobuf field <code>string predicted = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPredicted($var)
    {
        GPBUtil::checkString($var, True);
        $this->predicted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string actual = 2;</code>
     * @return string
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Generated from protobuf field <code>string actual = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setActual($var)
    {
        GPBUtil::checkString($var, True);
        $this->actual = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float value = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>float value = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->value = $var;

        return $this;
    }

}

