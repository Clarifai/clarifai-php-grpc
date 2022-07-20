<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.InputIDs</code>
 */
class InputIDs extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string input_ids = 1;</code>
     */
    private $input_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $input_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string input_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputIds()
    {
        return $this->input_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string input_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input_ids = $arr;

        return $this;
    }

}

