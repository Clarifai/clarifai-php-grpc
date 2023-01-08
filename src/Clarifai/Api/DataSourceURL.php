<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.DataSourceURL</code>
 */
class DataSourceURL extends \Google\Protobuf\Internal\Message
{
    /**
     * Supported providers are AWS S3, Azure blob, GCP cloud storage.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';
    /**
     * Credentials that would allow access to the provided url
     *
     * Generated from protobuf field <code>.clarifai.api.DataSourceCredentials credentials = 2;</code>
     */
    protected $credentials = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *           Supported providers are AWS S3, Azure blob, GCP cloud storage.
     *     @type \Clarifai\Api\DataSourceCredentials $credentials
     *           Credentials that would allow access to the provided url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Supported providers are AWS S3, Azure blob, GCP cloud storage.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Supported providers are AWS S3, Azure blob, GCP cloud storage.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Credentials that would allow access to the provided url
     *
     * Generated from protobuf field <code>.clarifai.api.DataSourceCredentials credentials = 2;</code>
     * @return \Clarifai\Api\DataSourceCredentials|null
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    public function hasCredentials()
    {
        return isset($this->credentials);
    }

    public function clearCredentials()
    {
        unset($this->credentials);
    }

    /**
     * Credentials that would allow access to the provided url
     *
     * Generated from protobuf field <code>.clarifai.api.DataSourceCredentials credentials = 2;</code>
     * @param \Clarifai\Api\DataSourceCredentials $var
     * @return $this
     */
    public function setCredentials($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DataSourceCredentials::class);
        $this->credentials = $var;

        return $this;
    }

}

