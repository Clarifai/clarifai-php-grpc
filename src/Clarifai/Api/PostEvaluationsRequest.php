<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evaluate this model vesion
 *
 * Generated from protobuf message <code>clarifai.api.PostEvaluationsRequest</code>
 */
class PostEvaluationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * eval_info, id, model, and ground_truth_dataset will be used when creating the evaluation
     * If no dataset is provided, all app data that is annotated with concepts from the model will be used.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EvalMetrics eval_metrics = 2;</code>
     */
    private $eval_metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type array<\Clarifai\Api\EvalMetrics>|\Google\Protobuf\Internal\RepeatedField $eval_metrics
     *           eval_info, id, model, and ground_truth_dataset will be used when creating the evaluation
     *           If no dataset is provided, all app data that is annotated with concepts from the model will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet|null
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    public function hasUserAppId()
    {
        return isset($this->user_app_id);
    }

    public function clearUserAppId()
    {
        unset($this->user_app_id);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @param \Clarifai\Api\UserAppIDSet $var
     * @return $this
     */
    public function setUserAppId($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\UserAppIDSet::class);
        $this->user_app_id = $var;

        return $this;
    }

    /**
     * eval_info, id, model, and ground_truth_dataset will be used when creating the evaluation
     * If no dataset is provided, all app data that is annotated with concepts from the model will be used.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EvalMetrics eval_metrics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvalMetrics()
    {
        return $this->eval_metrics;
    }

    /**
     * eval_info, id, model, and ground_truth_dataset will be used when creating the evaluation
     * If no dataset is provided, all app data that is annotated with concepts from the model will be used.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EvalMetrics eval_metrics = 2;</code>
     * @param array<\Clarifai\Api\EvalMetrics>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvalMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\EvalMetrics::class);
        $this->eval_metrics = $arr;

        return $this;
    }

}

