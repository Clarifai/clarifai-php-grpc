<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.DatasetVersionMetrics</code>
 */
class DatasetVersionMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 inputs_count = 1;</code>
     */
    protected $inputs_count = 0;
    /**
     * Generated from protobuf field <code>uint64 positive_annotations_count = 2;</code>
     */
    protected $positive_annotations_count = 0;
    /**
     * Generated from protobuf field <code>uint64 bounding_boxes_count = 3;</code>
     */
    protected $bounding_boxes_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $inputs_count
     *     @type int|string $positive_annotations_count
     *     @type int|string $bounding_boxes_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 inputs_count = 1;</code>
     * @return int|string
     */
    public function getInputsCount()
    {
        return $this->inputs_count;
    }

    /**
     * Generated from protobuf field <code>uint64 inputs_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInputsCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->inputs_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 positive_annotations_count = 2;</code>
     * @return int|string
     */
    public function getPositiveAnnotationsCount()
    {
        return $this->positive_annotations_count;
    }

    /**
     * Generated from protobuf field <code>uint64 positive_annotations_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPositiveAnnotationsCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->positive_annotations_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 bounding_boxes_count = 3;</code>
     * @return int|string
     */
    public function getBoundingBoxesCount()
    {
        return $this->bounding_boxes_count;
    }

    /**
     * Generated from protobuf field <code>uint64 bounding_boxes_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBoundingBoxesCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->bounding_boxes_count = $var;

        return $this;
    }

}

