<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ReviewApproveConfig</code>
 */
class ReviewApproveConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.TaskAssignment task_assignments = 1;</code>
     */
    private $task_assignments;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Worker workers = 2;</code>
     */
    private $workers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Clarifai\Api\TaskAssignment>|\Google\Protobuf\Internal\RepeatedField $task_assignments
     *     @type array<\Clarifai\Api\Worker>|\Google\Protobuf\Internal\RepeatedField $workers
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.TaskAssignment task_assignments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTaskAssignments()
    {
        return $this->task_assignments;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.TaskAssignment task_assignments = 1;</code>
     * @param array<\Clarifai\Api\TaskAssignment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTaskAssignments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\TaskAssignment::class);
        $this->task_assignments = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Worker workers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkers()
    {
        return $this->workers;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Worker workers = 2;</code>
     * @param array<\Clarifai\Api\Worker>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Worker::class);
        $this->workers = $arr;

        return $this;
    }

}
