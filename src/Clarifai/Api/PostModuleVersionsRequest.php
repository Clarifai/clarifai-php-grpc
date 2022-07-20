<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostModuleVersionsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostModuleVersionsRequest</code>
 */
class PostModuleVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>string module_id = 2;</code>
     */
    protected $module_id = '';
    /**
     * This allows you to create one or more module by posting it to the API.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModuleVersion module_versions = 3;</code>
     */
    private $module_versions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $module_id
     *     @type \Clarifai\Api\ModuleVersion[]|\Google\Protobuf\Internal\RepeatedField $module_versions
     *           This allows you to create one or more module by posting it to the API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
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
     * Generated from protobuf field <code>string module_id = 2;</code>
     * @return string
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Generated from protobuf field <code>string module_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->module_id = $var;

        return $this;
    }

    /**
     * This allows you to create one or more module by posting it to the API.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModuleVersion module_versions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModuleVersions()
    {
        return $this->module_versions;
    }

    /**
     * This allows you to create one or more module by posting it to the API.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModuleVersion module_versions = 3;</code>
     * @param \Clarifai\Api\ModuleVersion[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModuleVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ModuleVersion::class);
        $this->module_versions = $arr;

        return $this;
    }

}

