<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List CloudProvider Regions
 *
 * Generated from protobuf message <code>clarifai.api.ListCloudRegionsRequest</code>
 */
class ListCloudRegionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The cloud provider to list compute clusters for.
     *
     * Generated from protobuf field <code>.clarifai.api.CloudProvider cloud_provider = 1;</code>
     */
    protected $cloud_provider = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\CloudProvider $cloud_provider
     *           The cloud provider to list compute clusters for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The cloud provider to list compute clusters for.
     *
     * Generated from protobuf field <code>.clarifai.api.CloudProvider cloud_provider = 1;</code>
     * @return \Clarifai\Api\CloudProvider|null
     */
    public function getCloudProvider()
    {
        return $this->cloud_provider;
    }

    public function hasCloudProvider()
    {
        return isset($this->cloud_provider);
    }

    public function clearCloudProvider()
    {
        unset($this->cloud_provider);
    }

    /**
     * The cloud provider to list compute clusters for.
     *
     * Generated from protobuf field <code>.clarifai.api.CloudProvider cloud_provider = 1;</code>
     * @param \Clarifai\Api\CloudProvider $var
     * @return $this
     */
    public function setCloudProvider($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\CloudProvider::class);
        $this->cloud_provider = $var;

        return $this;
    }

}

