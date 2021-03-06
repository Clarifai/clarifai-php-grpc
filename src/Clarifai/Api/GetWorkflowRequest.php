<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * Requests / Responses from /proto/clarifai/api/workflow.proto
 * //////////////////////////////////////////////////////////////////////////////
 *
 * Generated from protobuf message <code>clarifai.api.GetWorkflowRequest</code>
 */
class GetWorkflowRequest extends \Google\Protobuf\Internal\Message
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
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 3;</code>
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
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 3;</code>
     * @return bool
     */
    public function getFavorClarifaiWorkflows()
    {
        return $this->favor_clarifai_workflows;
    }

    /**
     * Use this flag to look into clarifai published workflows first for a Workflow ID
     *
     * Generated from protobuf field <code>bool favor_clarifai_workflows = 3;</code>
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

