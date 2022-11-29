<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DeviceInfo
 *
 * Generated from protobuf message <code>clarifai.api.DeviceInfo</code>
 */
class DeviceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Apple, Samsung, LG, etc
     *
     * Generated from protobuf field <code>string brand = 1;</code>
     */
    protected $brand = '';
    /**
     * iPhone10,3
     *
     * Generated from protobuf field <code>string model = 2;</code>
     */
    protected $model = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $brand
     *           Apple, Samsung, LG, etc
     *     @type string $model
     *           iPhone10,3
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Apple, Samsung, LG, etc
     *
     * Generated from protobuf field <code>string brand = 1;</code>
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Apple, Samsung, LG, etc
     *
     * Generated from protobuf field <code>string brand = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBrand($var)
    {
        GPBUtil::checkString($var, True);
        $this->brand = $var;

        return $this;
    }

    /**
     * iPhone10,3
     *
     * Generated from protobuf field <code>string model = 2;</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * iPhone10,3
     *
     * Generated from protobuf field <code>string model = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

}

