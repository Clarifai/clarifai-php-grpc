<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get one task.
 *
 * Generated from protobuf message <code>clarifai.api.GetTaskRequest</code>
 */
class GetTaskRequest extends \Google\Protobuf\Internal\Message
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
     * (optional URL parameter) List of additional fields to be included in the response.
     * Currently supported additional fields:
     * - all
     * - worker.users
     * - review.users
     * - metrics.input_source.inputs_count_estimated
     * - metrics.work.inputs_count_estimated
     * - metrics.work.inputs_percent_estimated
     * - metrics.review.inputs_count_estimated
     * - metrics.review.inputs_count_estimated_per_reviewer
     * - metrics.review.inputs_percent_estimated
     *
     * Generated from protobuf field <code>repeated string additional_fields = 3;</code>
     */
    private $additional_fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $task_id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $additional_fields
     *           (optional URL parameter) List of additional fields to be included in the response.
     *           Currently supported additional fields:
     *           - all
     *           - worker.users
     *           - review.users
     *           - metrics.input_source.inputs_count_estimated
     *           - metrics.work.inputs_count_estimated
     *           - metrics.work.inputs_percent_estimated
     *           - metrics.review.inputs_count_estimated
     *           - metrics.review.inputs_count_estimated_per_reviewer
     *           - metrics.review.inputs_percent_estimated
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
     * (optional URL parameter) List of additional fields to be included in the response.
     * Currently supported additional fields:
     * - all
     * - worker.users
     * - review.users
     * - metrics.input_source.inputs_count_estimated
     * - metrics.work.inputs_count_estimated
     * - metrics.work.inputs_percent_estimated
     * - metrics.review.inputs_count_estimated
     * - metrics.review.inputs_count_estimated_per_reviewer
     * - metrics.review.inputs_percent_estimated
     *
     * Generated from protobuf field <code>repeated string additional_fields = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalFields()
    {
        return $this->additional_fields;
    }

    /**
     * (optional URL parameter) List of additional fields to be included in the response.
     * Currently supported additional fields:
     * - all
     * - worker.users
     * - review.users
     * - metrics.input_source.inputs_count_estimated
     * - metrics.work.inputs_count_estimated
     * - metrics.work.inputs_percent_estimated
     * - metrics.review.inputs_count_estimated
     * - metrics.review.inputs_count_estimated_per_reviewer
     * - metrics.review.inputs_percent_estimated
     *
     * Generated from protobuf field <code>repeated string additional_fields = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_fields = $arr;

        return $this;
    }

}

