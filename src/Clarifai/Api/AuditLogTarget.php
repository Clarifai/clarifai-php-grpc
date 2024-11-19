<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AuditLogTarget is a resource on which an operation recorded in an
 * audit log was performed.
 *
 * Generated from protobuf message <code>clarifai.api.AuditLogTarget</code>
 */
class AuditLogTarget extends \Google\Protobuf\Internal\Message
{
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\User $user
     *     @type \Clarifai\Api\Role $role
     *     @type \Clarifai\Api\Team $team
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.User user = 1;</code>
     * @return \Clarifai\Api\User|null
     */
    public function getUser()
    {
        return $this->readOneof(1);
    }

    public function hasUser()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.User user = 1;</code>
     * @param \Clarifai\Api\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\User::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Role role = 2;</code>
     * @return \Clarifai\Api\Role|null
     */
    public function getRole()
    {
        return $this->readOneof(2);
    }

    public function hasRole()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Role role = 2;</code>
     * @param \Clarifai\Api\Role $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Role::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Team team = 3;</code>
     * @return \Clarifai\Api\Team|null
     */
    public function getTeam()
    {
        return $this->readOneof(3);
    }

    public function hasTeam()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Team team = 3;</code>
     * @param \Clarifai\Api\Team $var
     * @return $this
     */
    public function setTeam($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Team::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

