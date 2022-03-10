<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetStatusCodeRequest
 *
 * Generated from protobuf message <code>clarifai.api.GetStatusCodeRequest</code>
 */
class GetStatusCodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string status_code_id = 1;</code>
     */
    protected $status_code_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $status_code_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string status_code_id = 1;</code>
     * @return string
     */
    public function getStatusCodeId()
    {
        return $this->status_code_id;
    }

    /**
     * Generated from protobuf field <code>string status_code_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusCodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_code_id = $var;

        return $this;
    }

}

