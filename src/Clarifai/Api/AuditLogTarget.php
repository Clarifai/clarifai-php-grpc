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
     *     @type \Clarifai\Api\User $member
     *           An organization member, only used in org audit logs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * An organization member, only used in org audit logs.
     *
     * Generated from protobuf field <code>.clarifai.api.User member = 1;</code>
     * @return \Clarifai\Api\User|null
     */
    public function getMember()
    {
        return $this->readOneof(1);
    }

    public function hasMember()
    {
        return $this->hasOneof(1);
    }

    /**
     * An organization member, only used in org audit logs.
     *
     * Generated from protobuf field <code>.clarifai.api.User member = 1;</code>
     * @param \Clarifai\Api\User $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\User::class);
        $this->writeOneof(1, $var);

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
