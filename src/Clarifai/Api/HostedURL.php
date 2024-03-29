<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HostedURL
 *
 * Generated from protobuf message <code>clarifai.api.HostedURL</code>
 */
class HostedURL extends \Google\Protobuf\Internal\Message
{
    /**
     * Prefix of the URL of every hosted image.
     *
     * Generated from protobuf field <code>string prefix = 1;</code>
     */
    protected $prefix = '';
    /**
     * Suffix of an image stored in different sizes.
     *
     * Generated from protobuf field <code>string suffix = 2;</code>
     */
    protected $suffix = '';
    /**
     * The sizes field lists which images of the different sizes are hosted in our storage. The URL
     * of each hosted image can be obtained by joining the prefix, one of the sizes and suffix.
     *
     * Generated from protobuf field <code>repeated string sizes = 3;</code>
     */
    private $sizes;
    /**
     * The crossorigin property of html media tag
     * For Secure Data Hosting this needs to be set to 'use-credentials'
     *
     * Generated from protobuf field <code>string crossorigin = 4;</code>
     */
    protected $crossorigin = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $prefix
     *           Prefix of the URL of every hosted image.
     *     @type string $suffix
     *           Suffix of an image stored in different sizes.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $sizes
     *           The sizes field lists which images of the different sizes are hosted in our storage. The URL
     *           of each hosted image can be obtained by joining the prefix, one of the sizes and suffix.
     *     @type string $crossorigin
     *           The crossorigin property of html media tag
     *           For Secure Data Hosting this needs to be set to 'use-credentials'
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Prefix of the URL of every hosted image.
     *
     * Generated from protobuf field <code>string prefix = 1;</code>
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Prefix of the URL of every hosted image.
     *
     * Generated from protobuf field <code>string prefix = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->prefix = $var;

        return $this;
    }

    /**
     * Suffix of an image stored in different sizes.
     *
     * Generated from protobuf field <code>string suffix = 2;</code>
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Suffix of an image stored in different sizes.
     *
     * Generated from protobuf field <code>string suffix = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->suffix = $var;

        return $this;
    }

    /**
     * The sizes field lists which images of the different sizes are hosted in our storage. The URL
     * of each hosted image can be obtained by joining the prefix, one of the sizes and suffix.
     *
     * Generated from protobuf field <code>repeated string sizes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSizes()
    {
        return $this->sizes;
    }

    /**
     * The sizes field lists which images of the different sizes are hosted in our storage. The URL
     * of each hosted image can be obtained by joining the prefix, one of the sizes and suffix.
     *
     * Generated from protobuf field <code>repeated string sizes = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSizes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->sizes = $arr;

        return $this;
    }

    /**
     * The crossorigin property of html media tag
     * For Secure Data Hosting this needs to be set to 'use-credentials'
     *
     * Generated from protobuf field <code>string crossorigin = 4;</code>
     * @return string
     */
    public function getCrossorigin()
    {
        return $this->crossorigin;
    }

    /**
     * The crossorigin property of html media tag
     * For Secure Data Hosting this needs to be set to 'use-credentials'
     *
     * Generated from protobuf field <code>string crossorigin = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCrossorigin($var)
    {
        GPBUtil::checkString($var, True);
        $this->crossorigin = $var;

        return $this;
    }

}

