<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to create Tasks.
 *
 * Generated from protobuf message <code>clarifai.api.PostTasksRequest</code>
 */
class PostTasksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Task tasks = 2;</code>
     */
    private $tasks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type \Clarifai\Api\Task[]|\Google\Protobuf\Internal\RepeatedField $tasks
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
     * Generated from protobuf field <code>repeated .clarifai.api.Task tasks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Task tasks = 2;</code>
     * @param \Clarifai\Api\Task[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTasks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Task::class);
        $this->tasks = $arr;

        return $this;
    }

}

