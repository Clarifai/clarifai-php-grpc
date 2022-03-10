<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TrendingMetric
 *
 * Generated from protobuf message <code>clarifai.api.TrendingMetric</code>
 */
class TrendingMetric extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1;</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string app_id = 2;</code>
     */
    protected $app_id = '';
    /**
     * Generated from protobuf field <code>string object_id = 3;</code>
     */
    protected $object_id = '';
    /**
     * Generated from protobuf field <code>uint64 view_count = 4;</code>
     */
    protected $view_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type string $app_id
     *     @type string $object_id
     *     @type int|string $view_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_id = 2;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>string app_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string object_id = 3;</code>
     * @return string
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * Generated from protobuf field <code>string object_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setObjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->object_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 view_count = 4;</code>
     * @return int|string
     */
    public function getViewCount()
    {
        return $this->view_count;
    }

    /**
     * Generated from protobuf field <code>uint64 view_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setViewCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->view_count = $var;

        return $this;
    }

}

