<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PostModelVersionsUploadConfig</code>
 */
class PostModelVersionsUploadConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Model to create version for
     *
     * Generated from protobuf field <code>string model_id = 2;</code>
     */
    protected $model_id = '';
    /**
     * Specification for the model version to be uploaded
     *
     * Generated from protobuf field <code>.clarifai.api.ModelVersion model_version = 3;</code>
     */
    protected $model_version = null;
    /**
     * Number of bytes in the model files to be uploaded
     *
     * Generated from protobuf field <code>uint64 total_size = 4;</code>
     */
    protected $total_size = 0;
    /**
     * Whether the uploaded package will be a .tar.gz which contains a Dockerfile or the standard .zip
     *
     * Generated from protobuf field <code>bool is_v3 = 5;</code>
     */
    protected $is_v3 = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $model_id
     *           Model to create version for
     *     @type \Clarifai\Api\ModelVersion $model_version
     *           Specification for the model version to be uploaded
     *     @type int|string $total_size
     *           Number of bytes in the model files to be uploaded
     *     @type bool $is_v3
     *           Whether the uploaded package will be a .tar.gz which contains a Dockerfile or the standard .zip
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
     * Model to create version for
     *
     * Generated from protobuf field <code>string model_id = 2;</code>
     * @return string
     */
    public function getModelId()
    {
        return $this->model_id;
    }

    /**
     * Model to create version for
     *
     * Generated from protobuf field <code>string model_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_id = $var;

        return $this;
    }

    /**
     * Specification for the model version to be uploaded
     *
     * Generated from protobuf field <code>.clarifai.api.ModelVersion model_version = 3;</code>
     * @return \Clarifai\Api\ModelVersion|null
     */
    public function getModelVersion()
    {
        return $this->model_version;
    }

    public function hasModelVersion()
    {
        return isset($this->model_version);
    }

    public function clearModelVersion()
    {
        unset($this->model_version);
    }

    /**
     * Specification for the model version to be uploaded
     *
     * Generated from protobuf field <code>.clarifai.api.ModelVersion model_version = 3;</code>
     * @param \Clarifai\Api\ModelVersion $var
     * @return $this
     */
    public function setModelVersion($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ModelVersion::class);
        $this->model_version = $var;

        return $this;
    }

    /**
     * Number of bytes in the model files to be uploaded
     *
     * Generated from protobuf field <code>uint64 total_size = 4;</code>
     * @return int|string
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * Number of bytes in the model files to be uploaded
     *
     * Generated from protobuf field <code>uint64 total_size = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkUint64($var);
        $this->total_size = $var;

        return $this;
    }

    /**
     * Whether the uploaded package will be a .tar.gz which contains a Dockerfile or the standard .zip
     *
     * Generated from protobuf field <code>bool is_v3 = 5;</code>
     * @return bool
     */
    public function getIsV3()
    {
        return $this->is_v3;
    }

    /**
     * Whether the uploaded package will be a .tar.gz which contains a Dockerfile or the standard .zip
     *
     * Generated from protobuf field <code>bool is_v3 = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsV3($var)
    {
        GPBUtil::checkBool($var);
        $this->is_v3 = $var;

        return $this;
    }

}

