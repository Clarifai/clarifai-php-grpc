<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This is configuration for using the inputs send for model prediction in our API as
 * as the source for data.
 *
 * Generated from protobuf message <code>clarifai.api.APIPostModelOutputsCollectorSource</code>
 */
class APIPostModelOutputsCollectorSource extends \Google\Protobuf\Internal\Message
{
    /**
     * To define the model that we should collect from we need to specify the following 4 IDs:
     * The User ID of the model we want to collect from.
     * This is User B in the example.
     *
     * Generated from protobuf field <code>string model_user_id = 1;</code>
     */
    protected $model_user_id = '';
    /**
     * The App ID of the model we want to collect from.
     *
     * Generated from protobuf field <code>string model_app_id = 2;</code>
     */
    protected $model_app_id = '';
    /**
     * The Model ID of the model we want to collect from.
     *
     * Generated from protobuf field <code>string model_id = 3;</code>
     */
    protected $model_id = '';
    /**
     * The Version ID of the model we want to collect from.
     *
     * Generated from protobuf field <code>string model_version_id = 4;</code>
     */
    protected $model_version_id = '';
    /**
     * This key is used to POST /inputs into your app by the collector. It can be an API key or a
     * PAT. This needs the permissions that are needed for POST /inputs for the app_id this
     * Collector is defined in.
     *
     * Generated from protobuf field <code>string post_inputs_key_id = 5;</code>
     */
    protected $post_inputs_key_id = '';
    /**
     * This is a private field that defaults to the app owner for public users.
     * If this is left blank then this collector will collect from ALL users calling the given model.
     *
     * Generated from protobuf field <code>string caller_user_id = 6;</code>
     */
    protected $caller_user_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $model_user_id
     *           To define the model that we should collect from we need to specify the following 4 IDs:
     *           The User ID of the model we want to collect from.
     *           This is User B in the example.
     *     @type string $model_app_id
     *           The App ID of the model we want to collect from.
     *     @type string $model_id
     *           The Model ID of the model we want to collect from.
     *     @type string $model_version_id
     *           The Version ID of the model we want to collect from.
     *     @type string $post_inputs_key_id
     *           This key is used to POST /inputs into your app by the collector. It can be an API key or a
     *           PAT. This needs the permissions that are needed for POST /inputs for the app_id this
     *           Collector is defined in.
     *     @type string $caller_user_id
     *           This is a private field that defaults to the app owner for public users.
     *           If this is left blank then this collector will collect from ALL users calling the given model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * To define the model that we should collect from we need to specify the following 4 IDs:
     * The User ID of the model we want to collect from.
     * This is User B in the example.
     *
     * Generated from protobuf field <code>string model_user_id = 1;</code>
     * @return string
     */
    public function getModelUserId()
    {
        return $this->model_user_id;
    }

    /**
     * To define the model that we should collect from we need to specify the following 4 IDs:
     * The User ID of the model we want to collect from.
     * This is User B in the example.
     *
     * Generated from protobuf field <code>string model_user_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModelUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_user_id = $var;

        return $this;
    }

    /**
     * The App ID of the model we want to collect from.
     *
     * Generated from protobuf field <code>string model_app_id = 2;</code>
     * @return string
     */
    public function getModelAppId()
    {
        return $this->model_app_id;
    }

    /**
     * The App ID of the model we want to collect from.
     *
     * Generated from protobuf field <code>string model_app_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModelAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_app_id = $var;

        return $this;
    }

    /**
     * The Model ID of the model we want to collect from.
     *
     * Generated from protobuf field <code>string model_id = 3;</code>
     * @return string
     */
    public function getModelId()
    {
        return $this->model_id;
    }

    /**
     * The Model ID of the model we want to collect from.
     *
     * Generated from protobuf field <code>string model_id = 3;</code>
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
     * The Version ID of the model we want to collect from.
     *
     * Generated from protobuf field <code>string model_version_id = 4;</code>
     * @return string
     */
    public function getModelVersionId()
    {
        return $this->model_version_id;
    }

    /**
     * The Version ID of the model we want to collect from.
     *
     * Generated from protobuf field <code>string model_version_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version_id = $var;

        return $this;
    }

    /**
     * This key is used to POST /inputs into your app by the collector. It can be an API key or a
     * PAT. This needs the permissions that are needed for POST /inputs for the app_id this
     * Collector is defined in.
     *
     * Generated from protobuf field <code>string post_inputs_key_id = 5;</code>
     * @return string
     */
    public function getPostInputsKeyId()
    {
        return $this->post_inputs_key_id;
    }

    /**
     * This key is used to POST /inputs into your app by the collector. It can be an API key or a
     * PAT. This needs the permissions that are needed for POST /inputs for the app_id this
     * Collector is defined in.
     *
     * Generated from protobuf field <code>string post_inputs_key_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPostInputsKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->post_inputs_key_id = $var;

        return $this;
    }

    /**
     * This is a private field that defaults to the app owner for public users.
     * If this is left blank then this collector will collect from ALL users calling the given model.
     *
     * Generated from protobuf field <code>string caller_user_id = 6;</code>
     * @return string
     */
    public function getCallerUserId()
    {
        return $this->caller_user_id;
    }

    /**
     * This is a private field that defaults to the app owner for public users.
     * If this is left blank then this collector will collect from ALL users calling the given model.
     *
     * Generated from protobuf field <code>string caller_user_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCallerUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->caller_user_id = $var;

        return $this;
    }

}

