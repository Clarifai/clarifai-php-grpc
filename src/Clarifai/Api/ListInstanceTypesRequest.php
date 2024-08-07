<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List InstanceTypes
 *
 * Generated from protobuf message <code>clarifai.api.ListInstanceTypesRequest</code>
 */
class ListInstanceTypesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The cloud provider to list compute clusters for.
     *
     * Generated from protobuf field <code>.clarifai.api.CloudProvider cloud_provider = 1;</code>
     */
    protected $cloud_provider = null;
    /**
     * The region to list for so when there are multiple regions we get only the clusters
     * that are supposed to be up in that region.
     *
     * Generated from protobuf field <code>string region = 2;</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\CloudProvider $cloud_provider
     *           The cloud provider to list compute clusters for.
     *     @type string $region
     *           The region to list for so when there are multiple regions we get only the clusters
     *           that are supposed to be up in that region.
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

    /**
     * The region to list for so when there are multiple regions we get only the clusters
     * that are supposed to be up in that region.
     *
     * Generated from protobuf field <code>string region = 2;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The region to list for so when there are multiple regions we get only the clusters
     * that are supposed to be up in that region.
     *
     * Generated from protobuf field <code>string region = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

