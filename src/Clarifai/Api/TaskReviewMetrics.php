<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.TaskReviewMetrics</code>
 */
class TaskReviewMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Estimated number of reviewed inputs.
     *
     * Generated from protobuf field <code>uint64 inputs_count_estimated = 1;</code>
     */
    protected $inputs_count_estimated = 0;
    /**
     * Estimated percent of inputs that were reviewed. Calculated as count of reviewed inputs / total task inputs
     * This is a value between 0 and 100, where 0 = 0% and 100 = 100%.
     *
     * Generated from protobuf field <code>uint32 inputs_percent_estimated = 2;</code>
     */
    protected $inputs_percent_estimated = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $inputs_count_estimated
     *           Estimated number of reviewed inputs.
     *     @type int $inputs_percent_estimated
     *           Estimated percent of inputs that were reviewed. Calculated as count of reviewed inputs / total task inputs
     *           This is a value between 0 and 100, where 0 = 0% and 100 = 100%.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Estimated number of reviewed inputs.
     *
     * Generated from protobuf field <code>uint64 inputs_count_estimated = 1;</code>
     * @return int|string
     */
    public function getInputsCountEstimated()
    {
        return $this->inputs_count_estimated;
    }

    /**
     * Estimated number of reviewed inputs.
     *
     * Generated from protobuf field <code>uint64 inputs_count_estimated = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInputsCountEstimated($var)
    {
        GPBUtil::checkUint64($var);
        $this->inputs_count_estimated = $var;

        return $this;
    }

    /**
     * Estimated percent of inputs that were reviewed. Calculated as count of reviewed inputs / total task inputs
     * This is a value between 0 and 100, where 0 = 0% and 100 = 100%.
     *
     * Generated from protobuf field <code>uint32 inputs_percent_estimated = 2;</code>
     * @return int
     */
    public function getInputsPercentEstimated()
    {
        return $this->inputs_percent_estimated;
    }

    /**
     * Estimated percent of inputs that were reviewed. Calculated as count of reviewed inputs / total task inputs
     * This is a value between 0 and 100, where 0 = 0% and 100 = 100%.
     *
     * Generated from protobuf field <code>uint32 inputs_percent_estimated = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setInputsPercentEstimated($var)
    {
        GPBUtil::checkUint32($var);
        $this->inputs_percent_estimated = $var;

        return $this;
    }

}

