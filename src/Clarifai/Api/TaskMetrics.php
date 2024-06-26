<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.TaskMetrics</code>
 */
class TaskMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.TaskWorkMetrics work = 2;</code>
     */
    protected $work = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.TaskReviewMetrics review = 3;</code>
     */
    protected $review = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.TaskInputSourceMetrics input_source = 4;</code>
     */
    protected $input_source = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\TaskWorkMetrics $work
     *     @type \Clarifai\Api\TaskReviewMetrics $review
     *     @type \Clarifai\Api\TaskInputSourceMetrics $input_source
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskWorkMetrics work = 2;</code>
     * @return \Clarifai\Api\TaskWorkMetrics|null
     */
    public function getWork()
    {
        return $this->work;
    }

    public function hasWork()
    {
        return isset($this->work);
    }

    public function clearWork()
    {
        unset($this->work);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskWorkMetrics work = 2;</code>
     * @param \Clarifai\Api\TaskWorkMetrics $var
     * @return $this
     */
    public function setWork($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TaskWorkMetrics::class);
        $this->work = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskReviewMetrics review = 3;</code>
     * @return \Clarifai\Api\TaskReviewMetrics|null
     */
    public function getReview()
    {
        return $this->review;
    }

    public function hasReview()
    {
        return isset($this->review);
    }

    public function clearReview()
    {
        unset($this->review);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskReviewMetrics review = 3;</code>
     * @param \Clarifai\Api\TaskReviewMetrics $var
     * @return $this
     */
    public function setReview($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TaskReviewMetrics::class);
        $this->review = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskInputSourceMetrics input_source = 4;</code>
     * @return \Clarifai\Api\TaskInputSourceMetrics|null
     */
    public function getInputSource()
    {
        return $this->input_source;
    }

    public function hasInputSource()
    {
        return isset($this->input_source);
    }

    public function clearInputSource()
    {
        unset($this->input_source);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskInputSourceMetrics input_source = 4;</code>
     * @param \Clarifai\Api\TaskInputSourceMetrics $var
     * @return $this
     */
    public function setInputSource($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TaskInputSourceMetrics::class);
        $this->input_source = $var;

        return $this;
    }

}

