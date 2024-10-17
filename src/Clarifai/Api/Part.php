<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A part of data used for multi-modal processing.
 *
 * Generated from protobuf message <code>clarifai.api.Part</code>
 */
class Part extends \Google\Protobuf\Internal\Message
{
    /**
     * The data for this part.
     *
     * Generated from protobuf field <code>.clarifai.api.Data data = 1;</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Data $data
     *           The data for this part.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The data for this part.
     *
     * Generated from protobuf field <code>.clarifai.api.Data data = 1;</code>
     * @return \Clarifai\Api\Data|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * The data for this part.
     *
     * Generated from protobuf field <code>.clarifai.api.Data data = 1;</code>
     * @param \Clarifai\Api\Data $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Data::class);
        $this->data = $var;

        return $this;
    }

}
