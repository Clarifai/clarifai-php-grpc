<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.UserAccess</code>
 */
class UserAccess extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1;</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>bool v2_portal_requested = 2;</code>
     */
    protected $v2_portal_requested = false;
    /**
     * Generated from protobuf field <code>bool v2_portal_granted = 3;</code>
     */
    protected $v2_portal_granted = false;
    /**
     * Generated from protobuf field <code>string id = 4;</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type bool $v2_portal_requested
     *     @type bool $v2_portal_granted
     *     @type string $id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1;</code>
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
     * Generated from protobuf field <code>bool v2_portal_requested = 2;</code>
     * @return bool
     */
    public function getV2PortalRequested()
    {
        return $this->v2_portal_requested;
    }

    /**
     * Generated from protobuf field <code>bool v2_portal_requested = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setV2PortalRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->v2_portal_requested = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool v2_portal_granted = 3;</code>
     * @return bool
     */
    public function getV2PortalGranted()
    {
        return $this->v2_portal_granted;
    }

    /**
     * Generated from protobuf field <code>bool v2_portal_granted = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setV2PortalGranted($var)
    {
        GPBUtil::checkBool($var);
        $this->v2_portal_granted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 4;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

