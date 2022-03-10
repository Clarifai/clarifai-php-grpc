<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetInputSamplesRequest
 *
 * Generated from protobuf message <code>clarifai.api.GetInputSamplesRequest</code>
 */
class GetInputSamplesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>string task_id = 2;</code>
     */
    protected $task_id = '';
    /**
     * URL param. If zero ids provided, returns for all task labelers
     *
     * Generated from protobuf field <code>repeated string user_ids = 3;</code>
     */
    private $user_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $task_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $user_ids
     *           URL param. If zero ids provided, returns for all task labelers
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
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
     * Generated from protobuf field <code>string task_id = 2;</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * Generated from protobuf field <code>string task_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_id = $var;

        return $this;
    }

    /**
     * URL param. If zero ids provided, returns for all task labelers
     *
     * Generated from protobuf field <code>repeated string user_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIds()
    {
        return $this->user_ids;
    }

    /**
     * URL param. If zero ids provided, returns for all task labelers
     *
     * Generated from protobuf field <code>repeated string user_ids = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_ids = $arr;

        return $this;
    }

}

