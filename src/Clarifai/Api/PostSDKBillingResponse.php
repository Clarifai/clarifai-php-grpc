<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostSDKBillingResponse
 *
 * Generated from protobuf message <code>clarifai.api.PostSDKBillingResponse</code>
 */
class PostSDKBillingResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>.clarifai.commands.Commands commands = 2;</code>
     */
    protected $commands = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Commands\Commands $commands
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
     * Generated from protobuf field <code>.clarifai.commands.Commands commands = 2;</code>
     * @return \Clarifai\Commands\Commands|null
     */
    public function getCommands()
    {
        return $this->commands;
    }

    public function hasCommands()
    {
        return isset($this->commands);
    }

    public function clearCommands()
    {
        unset($this->commands);
    }

    /**
     * Generated from protobuf field <code>.clarifai.commands.Commands commands = 2;</code>
     * @param \Clarifai\Commands\Commands $var
     * @return $this
     */
    public function setCommands($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Commands\Commands::class);
        $this->commands = $var;

        return $this;
    }

}

