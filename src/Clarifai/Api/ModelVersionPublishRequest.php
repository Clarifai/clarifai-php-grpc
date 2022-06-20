<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ModelVersionPublishRequest
 *
 * Generated from protobuf message <code>clarifai.api.ModelVersionPublishRequest</code>
 */
class ModelVersionPublishRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string version_id = 1;</code>
     */
    protected $version_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string version_id = 1;</code>
     * @return string
     */
    public function getVersionId()
    {
        return $this->version_id;
    }

    /**
     * Generated from protobuf field <code>string version_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_id = $var;

        return $this;
    }

}

