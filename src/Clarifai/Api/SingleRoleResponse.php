<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SingleRoleResponse
 *
 * Generated from protobuf message <code>clarifai.api.SingleRoleResponse</code>
 */
class SingleRoleResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.Role role = 2;</code>
     */
    protected $role = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\Role $role
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
     * Generated from protobuf field <code>.clarifai.api.Role role = 2;</code>
     * @return \Clarifai\Api\Role|null
     */
    public function getRole()
    {
        return $this->role;
    }

    public function hasRole()
    {
        return isset($this->role);
    }

    public function clearRole()
    {
        unset($this->role);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Role role = 2;</code>
     * @param \Clarifai\Api\Role $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Role::class);
        $this->role = $var;

        return $this;
    }

}

