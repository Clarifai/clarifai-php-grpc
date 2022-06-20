<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostTrendingMetricsViewRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostTrendingMetricsViewRequest</code>
 */
class PostTrendingMetricsViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The user_id and app_id information.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * For now view types 'apps', 'workflows', and 'models' are supported.
     *
     * Generated from protobuf field <code>string view_type = 2;</code>
     */
    protected $view_type = '';
    /**
     * ID of the views object.
     *
     * Generated from protobuf field <code>string object_id = 3;</code>
     */
    protected $object_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *           The user_id and app_id information.
     *     @type string $view_type
     *           For now view types 'apps', 'workflows', and 'models' are supported.
     *     @type string $object_id
     *           ID of the views object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The user_id and app_id information.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet|null
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    public function hasUserAppId()
    {
        return isset($this->user_app_id);
    }

    public function clearUserAppId()
    {
        unset($this->user_app_id);
    }

    /**
     * The user_id and app_id information.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @param \Clarifai\Api\UserAppIDSet $var
     * @return $this
     */
    public function setUserAppId($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\UserAppIDSet::class);
        $this->user_app_id = $var;

        return $this;
    }

    /**
     * For now view types 'apps', 'workflows', and 'models' are supported.
     *
     * Generated from protobuf field <code>string view_type = 2;</code>
     * @return string
     */
    public function getViewType()
    {
        return $this->view_type;
    }

    /**
     * For now view types 'apps', 'workflows', and 'models' are supported.
     *
     * Generated from protobuf field <code>string view_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setViewType($var)
    {
        GPBUtil::checkString($var, True);
        $this->view_type = $var;

        return $this;
    }

    /**
     * ID of the views object.
     *
     * Generated from protobuf field <code>string object_id = 3;</code>
     * @return string
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * ID of the views object.
     *
     * Generated from protobuf field <code>string object_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setObjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->object_id = $var;

        return $this;
    }

}

