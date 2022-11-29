<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostIdValidationRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostIdValidationRequest</code>
 */
class PostIdValidationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * List of validations to parse
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Validation validations = 1;</code>
     */
    private $validations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Validation[]|\Google\Protobuf\Internal\RepeatedField $validations
     *           List of validations to parse
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * List of validations to parse
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Validation validations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidations()
    {
        return $this->validations;
    }

    /**
     * List of validations to parse
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Validation validations = 1;</code>
     * @param \Clarifai\Api\Validation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Validation::class);
        $this->validations = $arr;

        return $this;
    }

}

