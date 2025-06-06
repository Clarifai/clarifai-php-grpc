<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LogEntry is a single technical log entry (e.g. service log, stack traces, etc).
 *
 * Generated from protobuf message <code>clarifai.api.LogEntry</code>
 */
class LogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Text of the log entry.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    protected $message = '';
    /**
     * The type of log entry. Examples: model, agent, build, training.
     *
     * Generated from protobuf field <code>string log_type = 2;</code>
     */
    protected $log_type = '';
    /**
     * URL to log file or stream.
     *
     * Generated from protobuf field <code>string url = 3;</code>
     */
    protected $url = '';
    /**
     * Who and where the metrics are from.
     *
     * Generated from protobuf field <code>.clarifai.api.ComputeSourceMetadata meta = 9;</code>
     */
    protected $meta = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           Text of the log entry.
     *     @type string $log_type
     *           The type of log entry. Examples: model, agent, build, training.
     *     @type string $url
     *           URL to log file or stream.
     *     @type \Clarifai\Api\ComputeSourceMetadata $meta
     *           Who and where the metrics are from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Text of the log entry.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Text of the log entry.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * The type of log entry. Examples: model, agent, build, training.
     *
     * Generated from protobuf field <code>string log_type = 2;</code>
     * @return string
     */
    public function getLogType()
    {
        return $this->log_type;
    }

    /**
     * The type of log entry. Examples: model, agent, build, training.
     *
     * Generated from protobuf field <code>string log_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLogType($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_type = $var;

        return $this;
    }

    /**
     * URL to log file or stream.
     *
     * Generated from protobuf field <code>string url = 3;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * URL to log file or stream.
     *
     * Generated from protobuf field <code>string url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Who and where the metrics are from.
     *
     * Generated from protobuf field <code>.clarifai.api.ComputeSourceMetadata meta = 9;</code>
     * @return \Clarifai\Api\ComputeSourceMetadata|null
     */
    public function getMeta()
    {
        return $this->meta;
    }

    public function hasMeta()
    {
        return isset($this->meta);
    }

    public function clearMeta()
    {
        unset($this->meta);
    }

    /**
     * Who and where the metrics are from.
     *
     * Generated from protobuf field <code>.clarifai.api.ComputeSourceMetadata meta = 9;</code>
     * @param \Clarifai\Api\ComputeSourceMetadata $var
     * @return $this
     */
    public function setMeta($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ComputeSourceMetadata::class);
        $this->meta = $var;

        return $this;
    }

}

