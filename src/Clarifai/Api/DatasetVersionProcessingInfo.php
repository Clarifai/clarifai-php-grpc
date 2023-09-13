<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DatasetVersionProcessingInfo contains information about processing applied
 * to a dataset version.
 *
 * Generated from protobuf message <code>clarifai.api.DatasetVersionProcessingInfo</code>
 */
class DatasetVersionProcessingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * If frame_interpolation_info is set, then these settings are used to
     * interpolate new frame annotation from other video annotations.
     * If frame_interpolation_info is set in the dataset default_processing_info,
     * then it can be disabled for a single dataset version by setting
     * processing_info but not setting processing_info.frame_interpolation_info.
     *
     * Generated from protobuf field <code>.clarifai.api.FrameInterpolationInfo frame_interpolation_info = 1;</code>
     */
    protected $frame_interpolation_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\FrameInterpolationInfo $frame_interpolation_info
     *           If frame_interpolation_info is set, then these settings are used to
     *           interpolate new frame annotation from other video annotations.
     *           If frame_interpolation_info is set in the dataset default_processing_info,
     *           then it can be disabled for a single dataset version by setting
     *           processing_info but not setting processing_info.frame_interpolation_info.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * If frame_interpolation_info is set, then these settings are used to
     * interpolate new frame annotation from other video annotations.
     * If frame_interpolation_info is set in the dataset default_processing_info,
     * then it can be disabled for a single dataset version by setting
     * processing_info but not setting processing_info.frame_interpolation_info.
     *
     * Generated from protobuf field <code>.clarifai.api.FrameInterpolationInfo frame_interpolation_info = 1;</code>
     * @return \Clarifai\Api\FrameInterpolationInfo|null
     */
    public function getFrameInterpolationInfo()
    {
        return $this->frame_interpolation_info;
    }

    public function hasFrameInterpolationInfo()
    {
        return isset($this->frame_interpolation_info);
    }

    public function clearFrameInterpolationInfo()
    {
        unset($this->frame_interpolation_info);
    }

    /**
     * If frame_interpolation_info is set, then these settings are used to
     * interpolate new frame annotation from other video annotations.
     * If frame_interpolation_info is set in the dataset default_processing_info,
     * then it can be disabled for a single dataset version by setting
     * processing_info but not setting processing_info.frame_interpolation_info.
     *
     * Generated from protobuf field <code>.clarifai.api.FrameInterpolationInfo frame_interpolation_info = 1;</code>
     * @param \Clarifai\Api\FrameInterpolationInfo $var
     * @return $this
     */
    public function setFrameInterpolationInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\FrameInterpolationInfo::class);
        $this->frame_interpolation_info = $var;

        return $this;
    }

}
