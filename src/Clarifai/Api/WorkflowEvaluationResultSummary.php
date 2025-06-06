<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.WorkflowEvaluationResultSummary</code>
 */
class WorkflowEvaluationResultSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * The evaluation metrics.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EvaluationMetricValue evaluation_metric_values = 2;</code>
     */
    private $evaluation_metric_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Clarifai\Api\EvaluationMetricValue>|\Google\Protobuf\Internal\RepeatedField $evaluation_metric_values
     *           The evaluation metrics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The evaluation metrics.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EvaluationMetricValue evaluation_metric_values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvaluationMetricValues()
    {
        return $this->evaluation_metric_values;
    }

    /**
     * The evaluation metrics.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EvaluationMetricValue evaluation_metric_values = 2;</code>
     * @param array<\Clarifai\Api\EvaluationMetricValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvaluationMetricValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\EvaluationMetricValue::class);
        $this->evaluation_metric_values = $arr;

        return $this;
    }

}

