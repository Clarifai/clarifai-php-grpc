<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Collaborator - invited user, who shares an access to an application
 *
 * Generated from protobuf message <code>clarifai.api.Collaborator</code>
 */
class Collaborator extends \Google\Protobuf\Internal\Message
{
    /**
     * id of this collaborator
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * the app this collaborator has access to
     * FIXME(zeiler): this should be in the user_app_id.app_id already from the endpoint.
     *
     * Generated from protobuf field <code>.clarifai.api.App app = 2;</code>
     */
    protected $app = null;
    /**
     * who is this collaborator
     *
     * Generated from protobuf field <code>.clarifai.api.User user = 3;</code>
     */
    protected $user = null;
    /**
     * the permission this collaborator
     *
     * Generated from protobuf field <code>repeated string scopes = 4;</code>
     */
    private $scopes;
    /**
     * Generated from protobuf field <code>repeated string endpoints = 5;</code>
     */
    private $endpoints;
    /**
     * When the app was shared with. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 6;</code>
     */
    protected $created_at = null;
    /**
     * When the collaborator was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 7;</code>
     */
    protected $modified_at = null;
    /**
     * When the collaborator was removed from app.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 8;</code>
     */
    protected $deleted_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           id of this collaborator
     *     @type \Clarifai\Api\App $app
     *           the app this collaborator has access to
     *           FIXME(zeiler): this should be in the user_app_id.app_id already from the endpoint.
     *     @type \Clarifai\Api\User $user
     *           who is this collaborator
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scopes
     *           the permission this collaborator
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $endpoints
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the app was shared with. We follow the XXXX timestamp
     *           format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     *           "2006-01-02T15:04:05.999999Z" so you can expect results like
     *           the following from the API:
     *           "2017-04-11T21:50:50.223962Z"
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When the collaborator was updated.
     *     @type \Google\Protobuf\Timestamp $deleted_at
     *           When the collaborator was removed from app.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * id of this collaborator
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * id of this collaborator
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * the app this collaborator has access to
     * FIXME(zeiler): this should be in the user_app_id.app_id already from the endpoint.
     *
     * Generated from protobuf field <code>.clarifai.api.App app = 2;</code>
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
     * the app this collaborator has access to
     * FIXME(zeiler): this should be in the user_app_id.app_id already from the endpoint.
     *
     * Generated from protobuf field <code>.clarifai.api.App app = 2;</code>
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
     * who is this collaborator
     *
     * Generated from protobuf field <code>.clarifai.api.User user = 3;</code>
     * @return \Clarifai\Api\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * who is this collaborator
     *
     * Generated from protobuf field <code>.clarifai.api.User user = 3;</code>
     * @param \Clarifai\Api\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * the permission this collaborator
     *
     * Generated from protobuf field <code>repeated string scopes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * the permission this collaborator
     *
     * Generated from protobuf field <code>repeated string scopes = 4;</code>
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
     * Generated from protobuf field <code>repeated string endpoints = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * Generated from protobuf field <code>repeated string endpoints = 5;</code>
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
     * When the app was shared with. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 6;</code>
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
     * When the app was shared with. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * When the collaborator was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    public function hasModifiedAt()
    {
        return isset($this->modified_at);
    }

    public function clearModifiedAt()
    {
        unset($this->modified_at);
    }

    /**
     * When the collaborator was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modified_at = $var;

        return $this;
    }

    /**
     * When the collaborator was removed from app.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    public function hasDeletedAt()
    {
        return isset($this->deleted_at);
    }

    public function clearDeletedAt()
    {
        unset($this->deleted_at);
    }

    /**
     * When the collaborator was removed from app.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deleted_at = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeletedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deleted_at = $var;

        return $this;
    }

}

