<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Commitment Value - used to track users' commitment amount and type
 *
 * Generated from protobuf message <code>clarifai.api.CommitmentValue</code>
 */
class CommitmentValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The commitment value, in cents
     *
     * Generated from protobuf field <code>int32 value = 1;</code>
     */
    protected $value = 0;
    /**
     * The commitment type, can be either 'monthly' or 'annual'
     *
     * Generated from protobuf field <code>.clarifai.api.CommitmentValue.CommitmentType type = 2;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $value
     *           The commitment value, in cents
     *     @type int $type
     *           The commitment type, can be either 'monthly' or 'annual'
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The commitment value, in cents
     *
     * Generated from protobuf field <code>int32 value = 1;</code>
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The commitment value, in cents
     *
     * Generated from protobuf field <code>int32 value = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->value = $var;

        return $this;
    }

    /**
     * The commitment type, can be either 'monthly' or 'annual'
     *
     * Generated from protobuf field <code>.clarifai.api.CommitmentValue.CommitmentType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The commitment type, can be either 'monthly' or 'annual'
     *
     * Generated from protobuf field <code>.clarifai.api.CommitmentValue.CommitmentType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Api\CommitmentValue\CommitmentType::class);
        $this->type = $var;

        return $this;
    }

}
