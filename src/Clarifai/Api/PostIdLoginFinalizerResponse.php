<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostIdLoginFinalizerResponse
 *
 * Generated from protobuf message <code>clarifai.api.PostIdLoginFinalizerResponse</code>
 */
class PostIdLoginFinalizerResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Status of this request.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>string recovery_path = 2;</code>
     */
    protected $recovery_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           Status of this request.
     *     @type string $recovery_path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Status of this request.
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
     * Status of this request.
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
     * Generated from protobuf field <code>string recovery_path = 2;</code>
     * @return string
     */
    public function getRecoveryPath()
    {
        return $this->recovery_path;
    }

    /**
     * Generated from protobuf field <code>string recovery_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRecoveryPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->recovery_path = $var;

        return $this;
    }

}

