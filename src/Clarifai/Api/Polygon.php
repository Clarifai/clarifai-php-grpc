<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Polygon
 *
 * Generated from protobuf message <code>clarifai.api.Polygon</code>
 */
class Polygon extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of points connected together to form the polygon.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Point points = 1;</code>
     */
    private $points;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Point[]|\Google\Protobuf\Internal\RepeatedField $points
     *           A list of points connected together to form the polygon.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of points connected together to form the polygon.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Point points = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * A list of points connected together to form the polygon.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Point points = 1;</code>
     * @param \Clarifai\Api\Point[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Point::class);
        $this->points = $arr;

        return $this;
    }

}

