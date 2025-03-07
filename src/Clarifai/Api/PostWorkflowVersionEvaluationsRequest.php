<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PostWorkflowVersionEvaluationsRequest</code>
 */
class PostWorkflowVersionEvaluationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     */
    protected $workflow_id = '';
    /**
     * Generated from protobuf field <code>string workflow_version_id = 3;</code>
     */
    protected $workflow_version_id = '';
    /**
     * ########## Supported fields ##########
     * - evaluation_template_id
     * - ground_truth_dataset_id
     * - ground_truth_dataset_version_id
     * - id
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowVersionEvaluation workflow_version_evaluations = 4;</code>
     */
    private $workflow_version_evaluations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $workflow_id
     *     @type string $workflow_version_id
     *     @type array<\Clarifai\Api\WorkflowVersionEvaluation>|\Google\Protobuf\Internal\RepeatedField $workflow_version_evaluations
     *           ########## Supported fields ##########
     *           - evaluation_template_id
     *           - ground_truth_dataset_id
     *           - ground_truth_dataset_version_id
     *           - id
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
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string workflow_version_id = 3;</code>
     * @return string
     */
    public function getWorkflowVersionId()
    {
        return $this->workflow_version_id;
    }

    /**
     * Generated from protobuf field <code>string workflow_version_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_version_id = $var;

        return $this;
    }

    /**
     * ########## Supported fields ##########
     * - evaluation_template_id
     * - ground_truth_dataset_id
     * - ground_truth_dataset_version_id
     * - id
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowVersionEvaluation workflow_version_evaluations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkflowVersionEvaluations()
    {
        return $this->workflow_version_evaluations;
    }

    /**
     * ########## Supported fields ##########
     * - evaluation_template_id
     * - ground_truth_dataset_id
     * - ground_truth_dataset_version_id
     * - id
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowVersionEvaluation workflow_version_evaluations = 4;</code>
     * @param array<\Clarifai\Api\WorkflowVersionEvaluation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkflowVersionEvaluations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\WorkflowVersionEvaluation::class);
        $this->workflow_version_evaluations = $arr;

        return $this;
    }

}

