<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Key
 *
 * Generated from protobuf message <code>clarifai.api.Key</code>
 */
class Key extends \Google\Protobuf\Internal\Message
{
    /**
     * The id of this key, it is used for authorization.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The type of key, it can be api_key or personal_access_token, the default value is api_key
     *
     * Generated from protobuf field <code>string type = 8;</code>
     */
    protected $type = '';
    /**
     * The description
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * The low-level scopes this key has
     *
     * Generated from protobuf field <code>repeated string scopes = 3;</code>
     */
    private $scopes;
    /**
     * The endpoint-level scopes this key has
     *
     * Generated from protobuf field <code>repeated string endpoints = 7;</code>
     */
    private $endpoints;
    /**
     * The apps that this key give you access to, it is empty if this key is personal_access_token
     * API key can only give you access to a single app.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.App apps = 4;</code>
     */
    private $apps;
    /**
     * When the key was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     */
    protected $created_at = null;
    /**
     * When does the key expires, the key won't expire if this is empty
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 6;</code>
     */
    protected $expires_at = null;
    /**
     * list of idp ids at which key is currently authorized
     *
     * Generated from protobuf field <code>repeated string authorized_idp_ids = 9;</code>
     */
    private $authorized_idp_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The id of this key, it is used for authorization.
     *     @type string $type
     *           The type of key, it can be api_key or personal_access_token, the default value is api_key
     *     @type string $description
     *           The description
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scopes
     *           The low-level scopes this key has
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $endpoints
     *           The endpoint-level scopes this key has
     *     @type array<\Clarifai\Api\App>|\Google\Protobuf\Internal\RepeatedField $apps
     *           The apps that this key give you access to, it is empty if this key is personal_access_token
     *           API key can only give you access to a single app.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the key was created. We follow the XXXX timestamp
     *           format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     *           "2006-01-02T15:04:05.999999Z" so you can expect results like
     *           the following from the API:
     *           "2017-04-11T21:50:50.223962Z"
     *     @type \Google\Protobuf\Timestamp $expires_at
     *           When does the key expires, the key won't expire if this is empty
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $authorized_idp_ids
     *           list of idp ids at which key is currently authorized
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The id of this key, it is used for authorization.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The id of this key, it is used for authorization.
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
     * The type of key, it can be api_key or personal_access_token, the default value is api_key
     *
     * Generated from protobuf field <code>string type = 8;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of key, it can be api_key or personal_access_token, the default value is api_key
     *
     * Generated from protobuf field <code>string type = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The description
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The low-level scopes this key has
     *
     * Generated from protobuf field <code>repeated string scopes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * The low-level scopes this key has
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
     * The endpoint-level scopes this key has
     *
     * Generated from protobuf field <code>repeated string endpoints = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * The endpoint-level scopes this key has
     *
     * Generated from protobuf field <code>repeated string endpoints = 7;</code>
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
     * The apps that this key give you access to, it is empty if this key is personal_access_token
     * API key can only give you access to a single app.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.App apps = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApps()
    {
        return $this->apps;
    }

    /**
     * The apps that this key give you access to, it is empty if this key is personal_access_token
     * API key can only give you access to a single app.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.App apps = 4;</code>
     * @param array<\Clarifai\Api\App>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\App::class);
        $this->apps = $arr;

        return $this;
    }

    /**
     * When the key was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
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
     * When the key was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
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

    /**
     * When does the key expires, the key won't expire if this is empty
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    public function hasExpiresAt()
    {
        return isset($this->expires_at);
    }

    public function clearExpiresAt()
    {
        unset($this->expires_at);
    }

    /**
     * When does the key expires, the key won't expire if this is empty
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiresAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expires_at = $var;

        return $this;
    }

    /**
     * list of idp ids at which key is currently authorized
     *
     * Generated from protobuf field <code>repeated string authorized_idp_ids = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthorizedIdpIds()
    {
        return $this->authorized_idp_ids;
    }

    /**
     * list of idp ids at which key is currently authorized
     *
     * Generated from protobuf field <code>repeated string authorized_idp_ids = 9;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthorizedIdpIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->authorized_idp_ids = $arr;

        return $this;
    }

}

