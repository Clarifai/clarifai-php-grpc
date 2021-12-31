<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.TimeInfo</code>
 */
class TimeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of frames
     *
     * Generated from protobuf field <code>uint32 num_frames = 1;</code>
     */
    protected $num_frames = 0;
    /**
     * Timestamp where track begins.
     *
     * Generated from protobuf field <code>uint32 begin_time = 2;</code>
     */
    protected $begin_time = 0;
    /**
     * Timestamp where track ends.
     *
     * Generated from protobuf field <code>uint32 end_time = 3;</code>
     */
    protected $end_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num_frames
     *           Number of frames
     *     @type int $begin_time
     *           Timestamp where track begins.
     *     @type int $end_time
     *           Timestamp where track ends.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of frames
     *
     * Generated from protobuf field <code>uint32 num_frames = 1;</code>
     * @return int
     */
    public function getNumFrames()
    {
        return $this->num_frames;
    }

    /**
     * Number of frames
     *
     * Generated from protobuf field <code>uint32 num_frames = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNumFrames($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_frames = $var;

        return $this;
    }

    /**
     * Timestamp where track begins.
     *
     * Generated from protobuf field <code>uint32 begin_time = 2;</code>
     * @return int
     */
    public function getBeginTime()
    {
        return $this->begin_time;
    }

    /**
     * Timestamp where track begins.
     *
     * Generated from protobuf field <code>uint32 begin_time = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBeginTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->begin_time = $var;

        return $this;
    }

    /**
     * Timestamp where track ends.
     *
     * Generated from protobuf field <code>uint32 end_time = 3;</code>
     * @return int
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Timestamp where track ends.
     *
     * Generated from protobuf field <code>uint32 end_time = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->end_time = $var;

        return $this;
    }

}
