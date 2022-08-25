<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An app module that a user created in our app module marketplace.
 *
 * Generated from protobuf message <code>clarifai.api.Module</code>
 */
class Module extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique ID for this app module.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * A short description for this app module to be used in grids of modules.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * When the app module was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 4;</code>
     */
    protected $created_at = null;
    /**
     * When the app module was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 5;</code>
     */
    protected $modified_at = null;
    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     * Defaults to PRIVATE if not provided.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 7;</code>
     */
    protected $visibility = null;
    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     * This is an optional arg.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 8;</code>
     */
    protected $metadata = null;
    /**
     * The creator of the app module.
     *
     * Generated from protobuf field <code>string user_id = 9;</code>
     */
    protected $user_id = '';
    /**
     * The app_id this module was created in.
     *
     * Generated from protobuf field <code>string app_id = 10;</code>
     */
    protected $app_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           A unique ID for this app module.
     *     @type string $description
     *           A short description for this app module to be used in grids of modules.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the app module was created.
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When the app module was last modified.
     *     @type \Clarifai\Api\Visibility $visibility
     *           The visibility field represents whether this message is privately/publicly visible.
     *           To be visible to the public the App that contains it AND the User that contains the App must
     *           also be publicly visible.
     *           Defaults to PRIVATE if not provided.
     *     @type \Google\Protobuf\Struct $metadata
     *           To handle arbitrary json metadata you can use a struct field:
     *           https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *           This is an optional arg.
     *     @type string $user_id
     *           The creator of the app module.
     *     @type string $app_id
     *           The app_id this module was created in.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique ID for this app module.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique ID for this app module.
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
     * A short description for this app module to be used in grids of modules.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A short description for this app module to be used in grids of modules.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * When the app module was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 4;</code>
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
     * When the app module was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 4;</code>
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
     * When the app module was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 5;</code>
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
     * When the app module was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 5;</code>
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
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     * Defaults to PRIVATE if not provided.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 7;</code>
     * @return \Clarifai\Api\Visibility|null
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    public function hasVisibility()
    {
        return isset($this->visibility);
    }

    public function clearVisibility()
    {
        unset($this->visibility);
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     * Defaults to PRIVATE if not provided.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 7;</code>
     * @param \Clarifai\Api\Visibility $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     * This is an optional arg.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 8;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     * This is an optional arg.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 8;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * The creator of the app module.
     *
     * Generated from protobuf field <code>string user_id = 9;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The creator of the app module.
     *
     * Generated from protobuf field <code>string user_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * The app_id this module was created in.
     *
     * Generated from protobuf field <code>string app_id = 10;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The app_id this module was created in.
     *
     * Generated from protobuf field <code>string app_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

}
