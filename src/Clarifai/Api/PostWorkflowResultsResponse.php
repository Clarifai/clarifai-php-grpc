<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostWorkflowResultsResponse
 *
 * Generated from protobuf message <code>clarifai.api.PostWorkflowResultsResponse</code>
 */
class PostWorkflowResultsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The status of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * The workflow that was used in predictions with PostWorkflowResults
     *
     * Generated from protobuf field <code>.clarifai.api.Workflow workflow = 2;</code>
     */
    protected $workflow = null;
    /**
     * The resulting predictions of all models in the workflow.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowResult results = 3;</code>
     */
    private $results;
    /**
     * A workflow state to be maintained across PostWorkflowResults requests/responses.
     * This WorkflowState should be passed in to subsequent PostWorkflowResults calls
     * if you want to keep track of state across requests.
     * If no WorkflowState was initialized in a request then no WorkflowState will be returned in this
     * response.
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowState workflow_state = 4;</code>
     */
    protected $workflow_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           The status of the request.
     *     @type \Clarifai\Api\Workflow $workflow
     *           The workflow that was used in predictions with PostWorkflowResults
     *     @type \Clarifai\Api\WorkflowResult[]|\Google\Protobuf\Internal\RepeatedField $results
     *           The resulting predictions of all models in the workflow.
     *     @type \Clarifai\Api\WorkflowState $workflow_state
     *           A workflow state to be maintained across PostWorkflowResults requests/responses.
     *           This WorkflowState should be passed in to subsequent PostWorkflowResults calls
     *           if you want to keep track of state across requests.
     *           If no WorkflowState was initialized in a request then no WorkflowState will be returned in this
     *           response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The status of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The workflow that was used in predictions with PostWorkflowResults
     *
     * Generated from protobuf field <code>.clarifai.api.Workflow workflow = 2;</code>
     * @return \Clarifai\Api\Workflow
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }

    /**
     * The workflow that was used in predictions with PostWorkflowResults
     *
     * Generated from protobuf field <code>.clarifai.api.Workflow workflow = 2;</code>
     * @param \Clarifai\Api\Workflow $var
     * @return $this
     */
    public function setWorkflow($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Workflow::class);
        $this->workflow = $var;

        return $this;
    }

    /**
     * The resulting predictions of all models in the workflow.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowResult results = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * The resulting predictions of all models in the workflow.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowResult results = 3;</code>
     * @param \Clarifai\Api\WorkflowResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\WorkflowResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * A workflow state to be maintained across PostWorkflowResults requests/responses.
     * This WorkflowState should be passed in to subsequent PostWorkflowResults calls
     * if you want to keep track of state across requests.
     * If no WorkflowState was initialized in a request then no WorkflowState will be returned in this
     * response.
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowState workflow_state = 4;</code>
     * @return \Clarifai\Api\WorkflowState
     */
    public function getWorkflowState()
    {
        return $this->workflow_state;
    }

    /**
     * A workflow state to be maintained across PostWorkflowResults requests/responses.
     * This WorkflowState should be passed in to subsequent PostWorkflowResults calls
     * if you want to keep track of state across requests.
     * If no WorkflowState was initialized in a request then no WorkflowState will be returned in this
     * response.
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowState workflow_state = 4;</code>
     * @param \Clarifai\Api\WorkflowState $var
     * @return $this
     */
    public function setWorkflowState($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\WorkflowState::class);
        $this->workflow_state = $var;

        return $this;
    }

}

