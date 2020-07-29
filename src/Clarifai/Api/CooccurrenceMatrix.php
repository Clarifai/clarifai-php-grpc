<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.CooccurrenceMatrix</code>
 */
class CooccurrenceMatrix extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.CooccurrenceMatrixEntry matrix = 1;</code>
     */
    private $matrix;
    /**
     * These concept_ids are ordered by the strength of the diagonal in the ConfusionMatrix.
     *
     * Generated from protobuf field <code>repeated string concept_ids = 2;</code>
     */
    private $concept_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\CooccurrenceMatrixEntry[]|\Google\Protobuf\Internal\RepeatedField $matrix
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $concept_ids
     *           These concept_ids are ordered by the strength of the diagonal in the ConfusionMatrix.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.CooccurrenceMatrixEntry matrix = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMatrix()
    {
        return $this->matrix;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.CooccurrenceMatrixEntry matrix = 1;</code>
     * @param \Clarifai\Api\CooccurrenceMatrixEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMatrix($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\CooccurrenceMatrixEntry::class);
        $this->matrix = $arr;

        return $this;
    }

    /**
     * These concept_ids are ordered by the strength of the diagonal in the ConfusionMatrix.
     *
     * Generated from protobuf field <code>repeated string concept_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConceptIds()
    {
        return $this->concept_ids;
    }

    /**
     * These concept_ids are ordered by the strength of the diagonal in the ConfusionMatrix.
     *
     * Generated from protobuf field <code>repeated string concept_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConceptIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->concept_ids = $arr;

        return $this;
    }

}

