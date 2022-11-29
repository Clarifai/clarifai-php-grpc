<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SingleEmailResponse
 *
 * Generated from protobuf message <code>clarifai.api.SingleEmailResponse</code>
 */
class SingleEmailResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Standard clarifai status code
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Returns the targeted email.
     *
     * Generated from protobuf field <code>.clarifai.api.EmailAddress email = 2;</code>
     */
    protected $email = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           Standard clarifai status code
     *     @type \Clarifai\Api\EmailAddress $email
     *           Returns the targeted email.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Standard clarifai status code
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
     * Standard clarifai status code
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
     * Returns the targeted email.
     *
     * Generated from protobuf field <code>.clarifai.api.EmailAddress email = 2;</code>
     * @return \Clarifai\Api\EmailAddress|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function hasEmail()
    {
        return isset($this->email);
    }

    public function clearEmail()
    {
        unset($this->email);
    }

    /**
     * Returns the targeted email.
     *
     * Generated from protobuf field <code>.clarifai.api.EmailAddress email = 2;</code>
     * @param \Clarifai\Api\EmailAddress $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\EmailAddress::class);
        $this->email = $var;

        return $this;
    }

}

