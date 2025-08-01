<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostWorkflowResultsRequest
 *
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
     * Workflow version ID to retrieve
     * If no ID is specified, latest workflow version is used
     *
     * Generated from protobuf field <code>string version_id = 7;</code>
     */
    protected $version_id = '';
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
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 5 [deprecated = true];</code>
     * @deprecated
     */
    protected $favor_clarifai_workflows = false;
    /**
     * A workflow state to be maintained across PostWorkflowResults requests/responses.
     * If it is not sent in the initial request with workflow_state.id = "init" then no
     * state will be saved or returned in PostWorkflowResultsResponse.
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowState workflow_state = 6;</code>
     */
    protected $workflow_state = null;
    /**
     * Specify which compute to use for processing each node of the workflow:
     * The key is the node.id from the loaded workflow.
     * The value is a RunnerSelector in which you can specify the deployment or specific nodepool
     * that you'd like that node to run on.
     * This allows for use cases like some light models could run on a CPU-only nodepool
     * while other models in the workflow require large GPUs.
     * If node.id is not in the provided map, it will fall back to searching for
     * an adequate deployment the model owner owns or fall back to
     * the shared nodepools provided by Clarifai.
     * We recommend you specify these RunnerSelectors so that you have better understanding of where
     * processing occurs.
     *
     * Generated from protobuf field <code>map<string, .clarifai.api.RunnerSelector> node_runner_selectors = 8;</code>
     */
    private $node_runner_selectors;

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
     *     @type string $version_id
     *           Workflow version ID to retrieve
     *           If no ID is specified, latest workflow version is used
     *     @type array<\Clarifai\Api\Input>|\Google\Protobuf\Internal\RepeatedField $inputs
     *     @type \Clarifai\Api\OutputConfig $output_config
     *           FIXME(zeiler): the request for post workflows is using an outputconfig object that is supposed
     *           to be within models. This is not consistent with setting this on the request for post model
     *           outputs where it is inside a model object. To make this consistent we would send in the
     *           workflow object so that each model can have it's own output config. If nobody is setting
     *           this OutputConfig it would probably be easier to just remove it for now to keep things simpler
     *           and then it's more consistent we just don't support the OutputConfig on workflows.
     *     @type bool $favor_clarifai_workflows
     *           Use this flag to look into clarifai published workflows first for a Workflow ID
     *     @type \Clarifai\Api\WorkflowState $workflow_state
     *           A workflow state to be maintained across PostWorkflowResults requests/responses.
     *           If it is not sent in the initial request with workflow_state.id = "init" then no
     *           state will be saved or returned in PostWorkflowResultsResponse.
     *     @type array|\Google\Protobuf\Internal\MapField $node_runner_selectors
     *           Specify which compute to use for processing each node of the workflow:
     *           The key is the node.id from the loaded workflow.
     *           The value is a RunnerSelector in which you can specify the deployment or specific nodepool
     *           that you'd like that node to run on.
     *           This allows for use cases like some light models could run on a CPU-only nodepool
     *           while other models in the workflow require large GPUs.
     *           If node.id is not in the provided map, it will fall back to searching for
     *           an adequate deployment the model owner owns or fall back to
     *           the shared nodepools provided by Clarifai.
     *           We recommend you specify these RunnerSelectors so that you have better understanding of where
     *           processing occurs.
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
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 3;</code>
     * @param array<\Clarifai\Api\Input>|\Google\Protobuf\Internal\RepeatedField $var
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
     * @return \Clarifai\Api\OutputConfig|null
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
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
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 5 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getFavorClarifaiWorkflows()
    {
        @trigger_error('favor_clarifai_workflows is deprecated.', E_USER_DEPRECATED);
        return $this->favor_clarifai_workflows;
    }

    /**
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 5 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setFavorClarifaiWorkflows($var)
    {
        @trigger_error('favor_clarifai_workflows is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->favor_clarifai_workflows = $var;

        return $this;
    }

    /**
     * A workflow state to be maintained across PostWorkflowResults requests/responses.
     * If it is not sent in the initial request with workflow_state.id = "init" then no
     * state will be saved or returned in PostWorkflowResultsResponse.
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowState workflow_state = 6;</code>
     * @return \Clarifai\Api\WorkflowState|null
     */
    public function getWorkflowState()
    {
        return $this->workflow_state;
    }

    public function hasWorkflowState()
    {
        return isset($this->workflow_state);
    }

    public function clearWorkflowState()
    {
        unset($this->workflow_state);
    }

    /**
     * A workflow state to be maintained across PostWorkflowResults requests/responses.
     * If it is not sent in the initial request with workflow_state.id = "init" then no
     * state will be saved or returned in PostWorkflowResultsResponse.
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowState workflow_state = 6;</code>
     * @param \Clarifai\Api\WorkflowState $var
     * @return $this
     */
    public function setWorkflowState($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\WorkflowState::class);
        $this->workflow_state = $var;

        return $this;
    }

    /**
     * Specify which compute to use for processing each node of the workflow:
     * The key is the node.id from the loaded workflow.
     * The value is a RunnerSelector in which you can specify the deployment or specific nodepool
     * that you'd like that node to run on.
     * This allows for use cases like some light models could run on a CPU-only nodepool
     * while other models in the workflow require large GPUs.
     * If node.id is not in the provided map, it will fall back to searching for
     * an adequate deployment the model owner owns or fall back to
     * the shared nodepools provided by Clarifai.
     * We recommend you specify these RunnerSelectors so that you have better understanding of where
     * processing occurs.
     *
     * Generated from protobuf field <code>map<string, .clarifai.api.RunnerSelector> node_runner_selectors = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getNodeRunnerSelectors()
    {
        return $this->node_runner_selectors;
    }

    /**
     * Specify which compute to use for processing each node of the workflow:
     * The key is the node.id from the loaded workflow.
     * The value is a RunnerSelector in which you can specify the deployment or specific nodepool
     * that you'd like that node to run on.
     * This allows for use cases like some light models could run on a CPU-only nodepool
     * while other models in the workflow require large GPUs.
     * If node.id is not in the provided map, it will fall back to searching for
     * an adequate deployment the model owner owns or fall back to
     * the shared nodepools provided by Clarifai.
     * We recommend you specify these RunnerSelectors so that you have better understanding of where
     * processing occurs.
     *
     * Generated from protobuf field <code>map<string, .clarifai.api.RunnerSelector> node_runner_selectors = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setNodeRunnerSelectors($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\RunnerSelector::class);
        $this->node_runner_selectors = $arr;

        return $this;
    }

}

