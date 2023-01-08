<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostWorkflowResultsSimilarityRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostWorkflowResultsSimilarityRequest</code>
 */
class PostWorkflowResultsSimilarityRequest extends \Google\Protobuf\Internal\Message
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
     * Workflow version ID to retrieve
     * If no ID is specified, latest workflow version is used
     *
     * Generated from protobuf field <code>string version_id = 7;</code>
     */
    protected $version_id = '';
    /**
     * The specific model version whose outputs we are comparing
     *
     * Generated from protobuf field <code>string model_version_id = 3;</code>
     */
    protected $model_version_id = '';
    /**
     * Each probe is compared against every pool input
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Input probe_inputs = 4;</code>
     */
    private $probe_inputs;
    /**
     * Each pool input is compared against ever probe input
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Input pool_inputs = 5;</code>
     */
    private $pool_inputs;
    /**
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 6;</code>
     */
    protected $favor_clarifai_workflows = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $workflow_id
     *     @type string $version_id
     *           Workflow version ID to retrieve
     *           If no ID is specified, latest workflow version is used
     *     @type string $model_version_id
     *           The specific model version whose outputs we are comparing
     *     @type array<\Clarifai\Api\Input>|\Google\Protobuf\Internal\RepeatedField $probe_inputs
     *           Each probe is compared against every pool input
     *     @type array<\Clarifai\Api\Input>|\Google\Protobuf\Internal\RepeatedField $pool_inputs
     *           Each pool input is compared against ever probe input
     *     @type bool $favor_clarifai_workflows
     *           Use this flag to look into clarifai published workflows first for a Workflow ID
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
     * Workflow version ID to retrieve
     * If no ID is specified, latest workflow version is used
     *
     * Generated from protobuf field <code>string version_id = 7;</code>
     * @return string
     */
    public function getVersionId()
    {
        return $this->version_id;
    }

    /**
     * Workflow version ID to retrieve
     * If no ID is specified, latest workflow version is used
     *
     * Generated from protobuf field <code>string version_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_id = $var;

        return $this;
    }

    /**
     * The specific model version whose outputs we are comparing
     *
     * Generated from protobuf field <code>string model_version_id = 3;</code>
     * @return string
     */
    public function getModelVersionId()
    {
        return $this->model_version_id;
    }

    /**
     * The specific model version whose outputs we are comparing
     *
     * Generated from protobuf field <code>string model_version_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version_id = $var;

        return $this;
    }

    /**
     * Each probe is compared against every pool input
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Input probe_inputs = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProbeInputs()
    {
        return $this->probe_inputs;
    }

    /**
     * Each probe is compared against every pool input
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Input probe_inputs = 4;</code>
     * @param array<\Clarifai\Api\Input>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProbeInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Input::class);
        $this->probe_inputs = $arr;

        return $this;
    }

    /**
     * Each pool input is compared against ever probe input
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Input pool_inputs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPoolInputs()
    {
        return $this->pool_inputs;
    }

    /**
     * Each pool input is compared against ever probe input
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Input pool_inputs = 5;</code>
     * @param array<\Clarifai\Api\Input>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPoolInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Input::class);
        $this->pool_inputs = $arr;

        return $this;
    }

    /**
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 6;</code>
     * @return bool
     */
    public function getFavorClarifaiWorkflows()
    {
        return $this->favor_clarifai_workflows;
    }

    /**
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setFavorClarifaiWorkflows($var)
    {
        GPBUtil::checkBool($var);
        $this->favor_clarifai_workflows = $var;

        return $this;
    }

}

