<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PostPipelineStepVersionsUploadResponse</code>
 */
class PostPipelineStepVersionsUploadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Status of the upload
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Bytes remaining to be uploaded - This is total_size - bytes_uploaded
     *
     * Generated from protobuf field <code>uint64 bytes_remaining = 2;</code>
     */
    protected $bytes_remaining = 0;
    /**
     * ID of the pipeline step version being uploaded
     *
     * Generated from protobuf field <code>string pipeline_step_version_id = 3;</code>
     */
    protected $pipeline_step_version_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           Status of the upload
     *     @type int|string $bytes_remaining
     *           Bytes remaining to be uploaded - This is total_size - bytes_uploaded
     *     @type string $pipeline_step_version_id
     *           ID of the pipeline step version being uploaded
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Status of the upload
     *
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
     * Status of the upload
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
     * Bytes remaining to be uploaded - This is total_size - bytes_uploaded
     *
     * Generated from protobuf field <code>uint64 bytes_remaining = 2;</code>
     * @return int|string
     */
    public function getBytesRemaining()
    {
        return $this->bytes_remaining;
    }

    /**
     * Bytes remaining to be uploaded - This is total_size - bytes_uploaded
     *
     * Generated from protobuf field <code>uint64 bytes_remaining = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesRemaining($var)
    {
        GPBUtil::checkUint64($var);
        $this->bytes_remaining = $var;

        return $this;
    }

    /**
     * ID of the pipeline step version being uploaded
     *
     * Generated from protobuf field <code>string pipeline_step_version_id = 3;</code>
     * @return string
     */
    public function getPipelineStepVersionId()
    {
        return $this->pipeline_step_version_id;
    }

    /**
     * ID of the pipeline step version being uploaded
     *
     * Generated from protobuf field <code>string pipeline_step_version_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPipelineStepVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->pipeline_step_version_id = $var;

        return $this;
    }

}

