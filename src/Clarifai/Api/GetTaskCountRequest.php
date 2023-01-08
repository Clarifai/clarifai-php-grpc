<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetTaskCountRequest can be used for fetching -
 * 1. Task annotation count per user, per status
 * 1. Task input (anchor annotations) count per user, per status
 *
 * Generated from protobuf message <code>clarifai.api.GetTaskCountRequest</code>
 */
class GetTaskCountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * task_id for which count per user per status is needed
     *
     * Generated from protobuf field <code>string task_id = 2;</code>
     */
    protected $task_id = '';
    /**
     * for given task_id, user_ids to filter on (optional)
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
     *           task_id for which count per user per status is needed
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $user_ids
     *           for given task_id, user_ids to filter on (optional)
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
     * task_id for which count per user per status is needed
     *
     * Generated from protobuf field <code>string task_id = 2;</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * task_id for which count per user per status is needed
     *
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
     * for given task_id, user_ids to filter on (optional)
     *
     * Generated from protobuf field <code>repeated string user_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIds()
    {
        return $this->user_ids;
    }

    /**
     * for given task_id, user_ids to filter on (optional)
     *
     * Generated from protobuf field <code>repeated string user_ids = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_ids = $arr;

        return $this;
    }

}

