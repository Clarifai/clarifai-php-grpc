<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GeoPoint
 *
 * Generated from protobuf message <code>clarifai.api.GeoPoint</code>
 */
class GeoPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float longitude = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $longitude = 0.0;
    /**
     * Generated from protobuf field <code>float latitude = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $latitude = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $longitude
     *     @type float $latitude
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float longitude = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Generated from protobuf field <code>float longitude = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setLongitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->longitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float latitude = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Generated from protobuf field <code>float latitude = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setLatitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->latitude = $var;

        return $this;
    }

}

