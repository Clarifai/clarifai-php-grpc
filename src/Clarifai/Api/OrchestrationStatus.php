<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.OrchestrationStatus</code>
 */
class OrchestrationStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * This will help us with filtering the PipelineRuns based on status
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 2;</code>
     */
    protected $status = null;
    protected $status_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\ArgoOrchestrationStatus $argo_status
     *           Status for Argo Workflow
     *     @type \Clarifai\Api\Status\Status $status
     *           This will help us with filtering the PipelineRuns based on status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Status for Argo Workflow
     *
     * Generated from protobuf field <code>.clarifai.api.ArgoOrchestrationStatus argo_status = 1;</code>
     * @return \Clarifai\Api\ArgoOrchestrationStatus|null
     */
    public function getArgoStatus()
    {
        return $this->readOneof(1);
    }

    public function hasArgoStatus()
    {
        return $this->hasOneof(1);
    }

    /**
     * Status for Argo Workflow
     *
     * Generated from protobuf field <code>.clarifai.api.ArgoOrchestrationStatus argo_status = 1;</code>
     * @param \Clarifai\Api\ArgoOrchestrationStatus $var
     * @return $this
     */
    public function setArgoStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ArgoOrchestrationStatus::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * This will help us with filtering the PipelineRuns based on status
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 2;</code>
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
     * This will help us with filtering the PipelineRuns based on status
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 2;</code>
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
     * @return string
     */
    public function getStatusDetails()
    {
        return $this->whichOneof("status_details");
    }

}

