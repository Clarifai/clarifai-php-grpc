<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.MultiAppResponse</code>
 */
class MultiAppResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.App apps = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $apps;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\App[]|\Google\Protobuf\Internal\RepeatedField $apps
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.App apps = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApps()
    {
        return $this->apps;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.App apps = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param \Clarifai\Api\App[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\App::class);
        $this->apps = $arr;

        return $this;
    }

}

