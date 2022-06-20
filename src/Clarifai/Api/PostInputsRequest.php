<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostInputsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostInputsRequest</code>
 */
class PostInputsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * List of inputs to post.
     * For each input, the following fields are used:
     * * id
     * * data
     * * dataset_ids
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 2;</code>
     */
    private $inputs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type \Clarifai\Api\Input[]|\Google\Protobuf\Internal\RepeatedField $inputs
     *           List of inputs to post.
     *           For each input, the following fields are used:
     *           * id
     *           * data
     *           * dataset_ids
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
     * List of inputs to post.
     * For each input, the following fields are used:
     * * id
     * * data
     * * dataset_ids
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * List of inputs to post.
     * For each input, the following fields are used:
     * * id
     * * data
     * * dataset_ids
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 2;</code>
     * @param \Clarifai\Api\Input[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Input::class);
        $this->inputs = $arr;

        return $this;
    }

}

