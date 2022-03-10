<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ModelTypeRangeInfo
 *
 * Generated from protobuf message <code>clarifai.api.ModelTypeRangeInfo</code>
 */
class ModelTypeRangeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The start of the range as a float.
     *
     * Generated from protobuf field <code>float min = 1;</code>
     */
    protected $min = 0.0;
    /**
     * The end of the range as a float.
     *
     * Generated from protobuf field <code>float max = 2;</code>
     */
    protected $max = 0.0;
    /**
     * An optional step size for the range. If provided then only values at that step size will be
     * rounded to. For example if step is 0.02 then 0.0245 will round to 0.02.
     *
     * Generated from protobuf field <code>float step = 3;</code>
     */
    protected $step = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $min
     *           The start of the range as a float.
     *     @type float $max
     *           The end of the range as a float.
     *     @type float $step
     *           An optional step size for the range. If provided then only values at that step size will be
     *           rounded to. For example if step is 0.02 then 0.0245 will round to 0.02.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The start of the range as a float.
     *
     * Generated from protobuf field <code>float min = 1;</code>
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The start of the range as a float.
     *
     * Generated from protobuf field <code>float min = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkFloat($var);
        $this->min = $var;

        return $this;
    }

    /**
     * The end of the range as a float.
     *
     * Generated from protobuf field <code>float max = 2;</code>
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The end of the range as a float.
     *
     * Generated from protobuf field <code>float max = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkFloat($var);
        $this->max = $var;

        return $this;
    }

    /**
     * An optional step size for the range. If provided then only values at that step size will be
     * rounded to. For example if step is 0.02 then 0.0245 will round to 0.02.
     *
     * Generated from protobuf field <code>float step = 3;</code>
     * @return float
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * An optional step size for the range. If provided then only values at that step size will be
     * rounded to. For example if step is 0.02 then 0.0245 will round to 0.02.
     *
     * Generated from protobuf field <code>float step = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setStep($var)
    {
        GPBUtil::checkFloat($var);
        $this->step = $var;

        return $this;
    }

}

