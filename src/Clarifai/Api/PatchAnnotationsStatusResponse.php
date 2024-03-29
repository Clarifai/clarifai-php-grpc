<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PatchAnnotationsStatusResponse
 *
 * Generated from protobuf message <code>clarifai.api.PatchAnnotationsStatusResponse</code>
 */
class PatchAnnotationsStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated string user_ids = 2;</code>
     */
    private $user_ids;
    /**
     * Generated from protobuf field <code>uint32 updated_count = 3;</code>
     */
    protected $updated_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $user_ids
     *     @type int $updated_count
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
     * Generated from protobuf field <code>repeated string user_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIds()
    {
        return $this->user_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string user_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 updated_count = 3;</code>
     * @return int
     */
    public function getUpdatedCount()
    {
        return $this->updated_count;
    }

    /**
     * Generated from protobuf field <code>uint32 updated_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setUpdatedCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->updated_count = $var;

        return $this;
    }

}

