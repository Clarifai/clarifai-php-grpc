<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * We use this message to communicate with Custom Code Operator Backend. You can use this message
 * to test your custom operator code locally.
 * We expect the response to come in the format of the MultiOutputResponse protobuf message.
 *
 * Generated from protobuf message <code>clarifai.api.CustomCodeOperatorRequest</code>
 */
class CustomCodeOperatorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 1;</code>
     */
    private $inputs;
    /**
     * support arbitrary metadata
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 1002;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Clarifai\Api\Input>|\Google\Protobuf\Internal\RepeatedField $inputs
     *     @type \Google\Protobuf\Struct $metadata
     *           support arbitrary metadata
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Input inputs = 1;</code>
     * @param array<\Clarifai\Api\Input>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Input::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * support arbitrary metadata
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 1002;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * support arbitrary metadata
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 1002;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

}

