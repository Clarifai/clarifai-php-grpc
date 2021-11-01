<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.DatasetVersionSummary</code>
 */
class DatasetVersionSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Counts by different filters. Each key is the filter key,
     * e.g. total_image, train_image, test_image, total_video, train_video, test_video.
     *
     * Generated from protobuf field <code>map<string, uint64> input_counts = 1;</code>
     */
    private $input_counts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $input_counts
     *           Counts by different filters. Each key is the filter key,
     *           e.g. total_image, train_image, test_image, total_video, train_video, test_video.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Counts by different filters. Each key is the filter key,
     * e.g. total_image, train_image, test_image, total_video, train_video, test_video.
     *
     * Generated from protobuf field <code>map<string, uint64> input_counts = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getInputCounts()
    {
        return $this->input_counts;
    }

    /**
     * Counts by different filters. Each key is the filter key,
     * e.g. total_image, train_image, test_image, total_video, train_video, test_video.
     *
     * Generated from protobuf field <code>map<string, uint64> input_counts = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setInputCounts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->input_counts = $arr;

        return $this;
    }

}

