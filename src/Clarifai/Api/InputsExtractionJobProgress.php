<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.InputsExtractionJobProgress</code>
 */
class InputsExtractionJobProgress extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 audio_inputs_count = 2;</code>
     */
    protected $audio_inputs_count = 0;
    /**
     * Generated from protobuf field <code>uint64 image_inputs_count = 3;</code>
     */
    protected $image_inputs_count = 0;
    /**
     * Generated from protobuf field <code>uint64 video_inputs_count = 4;</code>
     */
    protected $video_inputs_count = 0;
    /**
     * Generated from protobuf field <code>uint64 text_inputs_count = 5;</code>
     */
    protected $text_inputs_count = 0;
    /**
     * Generated from protobuf field <code>uint64 pending_archives_count = 6;</code>
     */
    protected $pending_archives_count = 0;
    /**
     * Generated from protobuf field <code>uint64 in_progress_archives_count = 7;</code>
     */
    protected $in_progress_archives_count = 0;
    /**
     * Generated from protobuf field <code>uint64 completed_archives_count = 8;</code>
     */
    protected $completed_archives_count = 0;
    /**
     * Generated from protobuf field <code>uint64 failed_archives_count = 9;</code>
     */
    protected $failed_archives_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $audio_inputs_count
     *     @type int|string $image_inputs_count
     *     @type int|string $video_inputs_count
     *     @type int|string $text_inputs_count
     *     @type int|string $pending_archives_count
     *     @type int|string $in_progress_archives_count
     *     @type int|string $completed_archives_count
     *     @type int|string $failed_archives_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 audio_inputs_count = 2;</code>
     * @return int|string
     */
    public function getAudioInputsCount()
    {
        return $this->audio_inputs_count;
    }

    /**
     * Generated from protobuf field <code>uint64 audio_inputs_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAudioInputsCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->audio_inputs_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 image_inputs_count = 3;</code>
     * @return int|string
     */
    public function getImageInputsCount()
    {
        return $this->image_inputs_count;
    }

    /**
     * Generated from protobuf field <code>uint64 image_inputs_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setImageInputsCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->image_inputs_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 video_inputs_count = 4;</code>
     * @return int|string
     */
    public function getVideoInputsCount()
    {
        return $this->video_inputs_count;
    }

    /**
     * Generated from protobuf field <code>uint64 video_inputs_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVideoInputsCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->video_inputs_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 text_inputs_count = 5;</code>
     * @return int|string
     */
    public function getTextInputsCount()
    {
        return $this->text_inputs_count;
    }

    /**
     * Generated from protobuf field <code>uint64 text_inputs_count = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTextInputsCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->text_inputs_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 pending_archives_count = 6;</code>
     * @return int|string
     */
    public function getPendingArchivesCount()
    {
        return $this->pending_archives_count;
    }

    /**
     * Generated from protobuf field <code>uint64 pending_archives_count = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPendingArchivesCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->pending_archives_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 in_progress_archives_count = 7;</code>
     * @return int|string
     */
    public function getInProgressArchivesCount()
    {
        return $this->in_progress_archives_count;
    }

    /**
     * Generated from protobuf field <code>uint64 in_progress_archives_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInProgressArchivesCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->in_progress_archives_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 completed_archives_count = 8;</code>
     * @return int|string
     */
    public function getCompletedArchivesCount()
    {
        return $this->completed_archives_count;
    }

    /**
     * Generated from protobuf field <code>uint64 completed_archives_count = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompletedArchivesCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->completed_archives_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 failed_archives_count = 9;</code>
     * @return int|string
     */
    public function getFailedArchivesCount()
    {
        return $this->failed_archives_count;
    }

    /**
     * Generated from protobuf field <code>uint64 failed_archives_count = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailedArchivesCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->failed_archives_count = $var;

        return $this;
    }

}

