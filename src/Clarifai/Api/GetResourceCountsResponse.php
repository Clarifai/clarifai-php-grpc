<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ResourceCountResponse
 *
 * Generated from protobuf message <code>clarifai.api.GetResourceCountsResponse</code>
 */
class GetResourceCountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>int64 datasets = 2;</code>
     */
    protected $datasets = 0;
    /**
     * Generated from protobuf field <code>int64 models = 3;</code>
     */
    protected $models = 0;
    /**
     * Generated from protobuf field <code>int64 workflows = 4;</code>
     */
    protected $workflows = 0;
    /**
     * Generated from protobuf field <code>int64 modules = 5;</code>
     */
    protected $modules = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type int|string $datasets
     *     @type int|string $models
     *     @type int|string $workflows
     *     @type int|string $modules
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
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
     * Generated from protobuf field <code>int64 datasets = 2;</code>
     * @return int|string
     */
    public function getDatasets()
    {
        return $this->datasets;
    }

    /**
     * Generated from protobuf field <code>int64 datasets = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDatasets($var)
    {
        GPBUtil::checkInt64($var);
        $this->datasets = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 models = 3;</code>
     * @return int|string
     */
    public function getModels()
    {
        return $this->models;
    }

    /**
     * Generated from protobuf field <code>int64 models = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setModels($var)
    {
        GPBUtil::checkInt64($var);
        $this->models = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 workflows = 4;</code>
     * @return int|string
     */
    public function getWorkflows()
    {
        return $this->workflows;
    }

    /**
     * Generated from protobuf field <code>int64 workflows = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorkflows($var)
    {
        GPBUtil::checkInt64($var);
        $this->workflows = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 modules = 5;</code>
     * @return int|string
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Generated from protobuf field <code>int64 modules = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setModules($var)
    {
        GPBUtil::checkInt64($var);
        $this->modules = $var;

        return $this;
    }

}
