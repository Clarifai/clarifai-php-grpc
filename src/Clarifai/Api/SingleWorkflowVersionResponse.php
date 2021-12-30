<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SingleWorkflowVersionResponse
 *
 * Generated from protobuf message <code>clarifai.api.SingleWorkflowVersionResponse</code>
 */
class SingleWorkflowVersionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.WorkflowVersion workflow_version = 2;</code>
     */
    protected $workflow_version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\WorkflowVersion $workflow_version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
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
     * Generated from protobuf field <code>.clarifai.api.WorkflowVersion workflow_version = 2;</code>
     * @return \Clarifai\Api\WorkflowVersion
     */
    public function getWorkflowVersion()
    {
        return $this->workflow_version;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.WorkflowVersion workflow_version = 2;</code>
     * @param \Clarifai\Api\WorkflowVersion $var
     * @return $this
     */
    public function setWorkflowVersion($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\WorkflowVersion::class);
        $this->workflow_version = $var;

        return $this;
    }

}

