<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *collaboration includes an app you're invited to work on.
 *
 * Generated from protobuf message <code>clarifai.api.Collaboration</code>
 */
class Collaboration extends \Google\Protobuf\Internal\Message
{
    /**
     *the application
     *
     * Generated from protobuf field <code>.clarifai.api.App app = 1;</code>
     */
    protected $app = null;
    /**
     *the app owner's info(including user_unique_id, first_name, last_name, primary_email)
     *
     * Generated from protobuf field <code>.clarifai.api.User app_owner = 2;</code>
     */
    protected $app_owner = null;
    /**
     *the low-level scope users are shared with for this collaboration
     *
     * Generated from protobuf field <code>repeated string scopes = 3;</code>
     */
    private $scopes;
    /**
     *the endpoint-level scopes users are shared with for this collaboration
     *
     * Generated from protobuf field <code>repeated string endpoints = 4;</code>
     */
    private $endpoints;
    /**
     *when is the collaboration created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     */
    protected $created_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\App $app
     *          the application
     *     @type \Clarifai\Api\User $app_owner
     *          the app owner's info(including user_unique_id, first_name, last_name, primary_email)
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scopes
     *          the low-level scope users are shared with for this collaboration
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $endpoints
     *          the endpoint-level scopes users are shared with for this collaboration
     *     @type \Google\Protobuf\Timestamp $created_at
     *          when is the collaboration created
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     *the application
     *
     * Generated from protobuf field <code>.clarifai.api.App app = 1;</code>
     * @return \Clarifai\Api\App|null
     */
    public function getApp()
    {
        return $this->app;
    }

    public function hasApp()
    {
        return isset($this->app);
    }

    public function clearApp()
    {
        unset($this->app);
    }

    /**
     *the application
     *
     * Generated from protobuf field <code>.clarifai.api.App app = 1;</code>
     * @param \Clarifai\Api\App $var
     * @return $this
     */
    public function setApp($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\App::class);
        $this->app = $var;

        return $this;
    }

    /**
     *the app owner's info(including user_unique_id, first_name, last_name, primary_email)
     *
     * Generated from protobuf field <code>.clarifai.api.User app_owner = 2;</code>
     * @return \Clarifai\Api\User|null
     */
    public function getAppOwner()
    {
        return $this->app_owner;
    }

    public function hasAppOwner()
    {
        return isset($this->app_owner);
    }

    public function clearAppOwner()
    {
        unset($this->app_owner);
    }

    /**
     *the app owner's info(including user_unique_id, first_name, last_name, primary_email)
     *
     * Generated from protobuf field <code>.clarifai.api.User app_owner = 2;</code>
     * @param \Clarifai\Api\User $var
     * @return $this
     */
    public function setAppOwner($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\User::class);
        $this->app_owner = $var;

        return $this;
    }

    /**
     *the low-level scope users are shared with for this collaboration
     *
     * Generated from protobuf field <code>repeated string scopes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     *the low-level scope users are shared with for this collaboration
     *
     * Generated from protobuf field <code>repeated string scopes = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;

        return $this;
    }

    /**
     *the endpoint-level scopes users are shared with for this collaboration
     *
     * Generated from protobuf field <code>repeated string endpoints = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     *the endpoint-level scopes users are shared with for this collaboration
     *
     * Generated from protobuf field <code>repeated string endpoints = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->endpoints = $arr;

        return $this;
    }

    /**
     *when is the collaboration created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     *when is the collaboration created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

}

