<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/status/status.proto

namespace Clarifai\Api\Status;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.status.Status</code>
 */
class Status extends \Google\Protobuf\Internal\Message
{
    /**
     * Status code from internal codes.
     *
     * Generated from protobuf field <code>.clarifai.api.status.StatusCode code = 1;</code>
     */
    protected $code = 0;
    /**
     * A longer description of the error.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * More details of the given error.
     *
     * Generated from protobuf field <code>string details = 3;</code>
     */
    protected $details = '';
    /**
     * For some environment we may return a stack trace to help debug
     * any issues.
     *
     * Generated from protobuf field <code>repeated string stack_trace = 4 [(.clarifai.auth.util.cl_private_field) = true];</code>
     */
    private $stack_trace;
    /**
     * specifically for long running jobs
     *
     * Generated from protobuf field <code>uint32 percent_completed = 5;</code>
     */
    protected $percent_completed = 0;
    /**
     * if status is pending, how much time is remaining (in seconds)
     *
     * Generated from protobuf field <code>uint32 time_remaining = 6;</code>
     */
    protected $time_remaining = 0;
    /**
     * If we want to return a request id in the base status field
     *
     * Generated from protobuf field <code>string req_id = 7;</code>
     */
    protected $req_id = '';
    /**
     * Internal Annotation (do not set in production, for internal Clarifai use only).
     *
     * Generated from protobuf field <code>string internal_details = 8 [(.clarifai.auth.util.cl_private_field) = true];</code>
     */
    protected $internal_details = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           Status code from internal codes.
     *     @type string $description
     *           A longer description of the error.
     *     @type string $details
     *           More details of the given error.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $stack_trace
     *           For some environment we may return a stack trace to help debug
     *           any issues.
     *     @type int $percent_completed
     *           specifically for long running jobs
     *     @type int $time_remaining
     *           if status is pending, how much time is remaining (in seconds)
     *     @type string $req_id
     *           If we want to return a request id in the base status field
     *     @type string $internal_details
     *           Internal Annotation (do not set in production, for internal Clarifai use only).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Status\Status::initOnce();
        parent::__construct($data);
    }

    /**
     * Status code from internal codes.
     *
     * Generated from protobuf field <code>.clarifai.api.status.StatusCode code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Status code from internal codes.
     *
     * Generated from protobuf field <code>.clarifai.api.status.StatusCode code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Api\Status\StatusCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * A longer description of the error.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A longer description of the error.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * More details of the given error.
     *
     * Generated from protobuf field <code>string details = 3;</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * More details of the given error.
     *
     * Generated from protobuf field <code>string details = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

        return $this;
    }

    /**
     * For some environment we may return a stack trace to help debug
     * any issues.
     *
     * Generated from protobuf field <code>repeated string stack_trace = 4 [(.clarifai.auth.util.cl_private_field) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStackTrace()
    {
        return $this->stack_trace;
    }

    /**
     * For some environment we may return a stack trace to help debug
     * any issues.
     *
     * Generated from protobuf field <code>repeated string stack_trace = 4 [(.clarifai.auth.util.cl_private_field) = true];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStackTrace($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->stack_trace = $arr;

        return $this;
    }

    /**
     * specifically for long running jobs
     *
     * Generated from protobuf field <code>uint32 percent_completed = 5;</code>
     * @return int
     */
    public function getPercentCompleted()
    {
        return $this->percent_completed;
    }

    /**
     * specifically for long running jobs
     *
     * Generated from protobuf field <code>uint32 percent_completed = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPercentCompleted($var)
    {
        GPBUtil::checkUint32($var);
        $this->percent_completed = $var;

        return $this;
    }

    /**
     * if status is pending, how much time is remaining (in seconds)
     *
     * Generated from protobuf field <code>uint32 time_remaining = 6;</code>
     * @return int
     */
    public function getTimeRemaining()
    {
        return $this->time_remaining;
    }

    /**
     * if status is pending, how much time is remaining (in seconds)
     *
     * Generated from protobuf field <code>uint32 time_remaining = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeRemaining($var)
    {
        GPBUtil::checkUint32($var);
        $this->time_remaining = $var;

        return $this;
    }

    /**
     * If we want to return a request id in the base status field
     *
     * Generated from protobuf field <code>string req_id = 7;</code>
     * @return string
     */
    public function getReqId()
    {
        return $this->req_id;
    }

    /**
     * If we want to return a request id in the base status field
     *
     * Generated from protobuf field <code>string req_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setReqId($var)
    {
        GPBUtil::checkString($var, True);
        $this->req_id = $var;

        return $this;
    }

    /**
     * Internal Annotation (do not set in production, for internal Clarifai use only).
     *
     * Generated from protobuf field <code>string internal_details = 8 [(.clarifai.auth.util.cl_private_field) = true];</code>
     * @return string
     */
    public function getInternalDetails()
    {
        return $this->internal_details;
    }

    /**
     * Internal Annotation (do not set in production, for internal Clarifai use only).
     *
     * Generated from protobuf field <code>string internal_details = 8 [(.clarifai.auth.util.cl_private_field) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setInternalDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->internal_details = $var;

        return $this;
    }

}

