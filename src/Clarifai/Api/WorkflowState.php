<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * WorkflowState
 *
 * Generated from protobuf message <code>clarifai.api.WorkflowState</code>
 */
class WorkflowState extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique ID for the workflow state.
     * To start saving a state in a PostWorkflowResults request set this ID to "init"
     * and it will return a newly generated unique state id that you can then pass in subsequent
     * PostWorkflowResults calls. These state expire after 5 minutes between calls.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           A unique ID for the workflow state.
     *           To start saving a state in a PostWorkflowResults request set this ID to "init"
     *           and it will return a newly generated unique state id that you can then pass in subsequent
     *           PostWorkflowResults calls. These state expire after 5 minutes between calls.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique ID for the workflow state.
     * To start saving a state in a PostWorkflowResults request set this ID to "init"
     * and it will return a newly generated unique state id that you can then pass in subsequent
     * PostWorkflowResults calls. These state expire after 5 minutes between calls.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique ID for the workflow state.
     * To start saving a state in a PostWorkflowResults request set this ID to "init"
     * and it will return a newly generated unique state id that you can then pass in subsequent
     * PostWorkflowResults calls. These state expire after 5 minutes between calls.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

