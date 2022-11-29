<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HostAppInfo
 *
 * Generated from protobuf message <code>clarifai.api.HostAppInfo</code>
 */
class HostAppInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Host app build number
     *
     * Generated from protobuf field <code>string build_number = 1;</code>
     */
    protected $build_number = '';
    /**
     * Clarifai's API Key associated with the host app
     *
     * Generated from protobuf field <code>string api_key = 2;</code>
     */
    protected $api_key = '';
    /**
     * Host app version
     *
     * Generated from protobuf field <code>string version = 3;</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $build_number
     *           Host app build number
     *     @type string $api_key
     *           Clarifai's API Key associated with the host app
     *     @type string $version
     *           Host app version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Host app build number
     *
     * Generated from protobuf field <code>string build_number = 1;</code>
     * @return string
     */
    public function getBuildNumber()
    {
        return $this->build_number;
    }

    /**
     * Host app build number
     *
     * Generated from protobuf field <code>string build_number = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBuildNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_number = $var;

        return $this;
    }

    /**
     * Clarifai's API Key associated with the host app
     *
     * Generated from protobuf field <code>string api_key = 2;</code>
     * @return string
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * Clarifai's API Key associated with the host app
     *
     * Generated from protobuf field <code>string api_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setApiKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_key = $var;

        return $this;
    }

    /**
     * Host app version
     *
     * Generated from protobuf field <code>string version = 3;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Host app version
     *
     * Generated from protobuf field <code>string version = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

