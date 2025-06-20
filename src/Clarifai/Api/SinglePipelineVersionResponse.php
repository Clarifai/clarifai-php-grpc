<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.SinglePipelineVersionResponse</code>
 */
class SinglePipelineVersionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.PipelineVersion pipeline_version = 2;</code>
     */
    protected $pipeline_version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\PipelineVersion $pipeline_version
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
     * Generated from protobuf field <code>.clarifai.api.PipelineVersion pipeline_version = 2;</code>
     * @return \Clarifai\Api\PipelineVersion|null
     */
    public function getPipelineVersion()
    {
        return $this->pipeline_version;
    }

    public function hasPipelineVersion()
    {
        return isset($this->pipeline_version);
    }

    public function clearPipelineVersion()
    {
        unset($this->pipeline_version);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.PipelineVersion pipeline_version = 2;</code>
     * @param \Clarifai\Api\PipelineVersion $var
     * @return $this
     */
    public function setPipelineVersion($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\PipelineVersion::class);
        $this->pipeline_version = $var;

        return $this;
    }

}

