<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MultiDatasetInputResponse
 *
 * Generated from protobuf message <code>clarifai.api.MultiDatasetInputResponse</code>
 */
class MultiDatasetInputResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.DatasetInput dataset_inputs = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $dataset_inputs;
    /**
     * Generated from protobuf field <code>.clarifai.api.DatasetInputsSearchAddJob dataset_inputs_search_add_job = 3;</code>
     */
    protected $dataset_inputs_search_add_job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\DatasetInput[]|\Google\Protobuf\Internal\RepeatedField $dataset_inputs
     *     @type \Clarifai\Api\DatasetInputsSearchAddJob $dataset_inputs_search_add_job
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
     * Generated from protobuf field <code>repeated .clarifai.api.DatasetInput dataset_inputs = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatasetInputs()
    {
        return $this->dataset_inputs;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.DatasetInput dataset_inputs = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param \Clarifai\Api\DatasetInput[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatasetInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\DatasetInput::class);
        $this->dataset_inputs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.DatasetInputsSearchAddJob dataset_inputs_search_add_job = 3;</code>
     * @return \Clarifai\Api\DatasetInputsSearchAddJob|null
     */
    public function getDatasetInputsSearchAddJob()
    {
        return $this->dataset_inputs_search_add_job;
    }

    public function hasDatasetInputsSearchAddJob()
    {
        return isset($this->dataset_inputs_search_add_job);
    }

    public function clearDatasetInputsSearchAddJob()
    {
        unset($this->dataset_inputs_search_add_job);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.DatasetInputsSearchAddJob dataset_inputs_search_add_job = 3;</code>
     * @param \Clarifai\Api\DatasetInputsSearchAddJob $var
     * @return $this
     */
    public function setDatasetInputsSearchAddJob($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DatasetInputsSearchAddJob::class);
        $this->dataset_inputs_search_add_job = $var;

        return $this;
    }

}

