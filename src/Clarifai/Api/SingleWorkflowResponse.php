<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SingleWorkflowResponse
 *
 * Generated from protobuf message <code>clarifai.api.SingleWorkflowResponse</code>
 */
class SingleWorkflowResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.Workflow workflow = 2;</code>
     */
    protected $workflow = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\Workflow $workflow
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
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
     * Generated from protobuf field <code>.clarifai.api.Workflow workflow = 2;</code>
     * @return \Clarifai\Api\Workflow|null
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }

    public function hasWorkflow()
    {
        return isset($this->workflow);
    }

    public function clearWorkflow()
    {
        unset($this->workflow);
    }

    /**
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

}

