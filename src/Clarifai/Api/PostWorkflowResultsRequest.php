<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PostWorkflowResultsRequest</code>
 */
class PostWorkflowResultsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Workflow ID to retrieve
     * If no ID is specified we return default workflow of the application
     * If an ID is specified by default we first looks into Clarifai workflows for a Workflow ID
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     */
    protected $workflow_id = '';
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 3;</code>
     */
    private $inputs;
    /**
     * FIXME(zeiler): the request for post workflows is using an outputconfig object that is supposed
     * to be within models. This is not consistent with setting this on the request for post model
     * outputs where it is inside a model object. To make this consistent we would send in the
     * workflow object so that each model can have it's own output config. If nobody is setting
     * this OutputConfig it would probably be easier to just remove it for now to keep things simpler
     * and then it's more consistent we just don't support the OutputConfig on workflows.
     *
     * Generated from protobuf field <code>.clarifai.api.OutputConfig output_config = 4;</code>
     */
    protected $output_config = null;
    /**
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 5;</code>
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
     *           Workflow ID to retrieve
     *           If no ID is specified we return default workflow of the application
     *           If an ID is specified by default we first looks into Clarifai workflows for a Workflow ID
     *     @type \Clarifai\Api\Input[]|\Google\Protobuf\Internal\RepeatedField $inputs
     *     @type \Clarifai\Api\OutputConfig $output_config
     *           FIXME(zeiler): the request for post workflows is using an outputconfig object that is supposed
     *           to be within models. This is not consistent with setting this on the request for post model
     *           outputs where it is inside a model object. To make this consistent we would send in the
     *           workflow object so that each model can have it's own output config. If nobody is setting
     *           this OutputConfig it would probably be easier to just remove it for now to keep things simpler
     *           and then it's more consistent we just don't support the OutputConfig on workflows.
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
     * @return \Clarifai\Api\UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
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
     * Workflow ID to retrieve
     * If no ID is specified we return default workflow of the application
     * If an ID is specified by default we first looks into Clarifai workflows for a Workflow ID
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Workflow ID to retrieve
     * If no ID is specified we return default workflow of the application
     * If an ID is specified by default we first looks into Clarifai workflows for a Workflow ID
     *
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
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 3;</code>
     * @param \Clarifai\Api\Input[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Input::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * FIXME(zeiler): the request for post workflows is using an outputconfig object that is supposed
     * to be within models. This is not consistent with setting this on the request for post model
     * outputs where it is inside a model object. To make this consistent we would send in the
     * workflow object so that each model can have it's own output config. If nobody is setting
     * this OutputConfig it would probably be easier to just remove it for now to keep things simpler
     * and then it's more consistent we just don't support the OutputConfig on workflows.
     *
     * Generated from protobuf field <code>.clarifai.api.OutputConfig output_config = 4;</code>
     * @return \Clarifai\Api\OutputConfig
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    /**
     * FIXME(zeiler): the request for post workflows is using an outputconfig object that is supposed
     * to be within models. This is not consistent with setting this on the request for post model
     * outputs where it is inside a model object. To make this consistent we would send in the
     * workflow object so that each model can have it's own output config. If nobody is setting
     * this OutputConfig it would probably be easier to just remove it for now to keep things simpler
     * and then it's more consistent we just don't support the OutputConfig on workflows.
     *
     * Generated from protobuf field <code>.clarifai.api.OutputConfig output_config = 4;</code>
     * @param \Clarifai\Api\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

    /**
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 5;</code>
     * @return bool
     */
    public function getFavorClarifaiWorkflows()
    {
        return $this->favor_clarifai_workflows;
    }

    /**
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 5;</code>
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

