<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This is a unit of work for a runner to process. This comes from the API
 * in the MultiRunnerItemResponse and contains the user's requests
 * to process.
 *
 * Generated from protobuf message <code>clarifai.api.RunnerItem</code>
 */
class RunnerItem extends \Google\Protobuf\Internal\Message
{
    /**
     * A UUID hash for this work item.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * A description of the work to be done in case needed for UIs.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Information on how to process the given RunnerItem.
     *
     * Generated from protobuf field <code>.clarifai.api.ProcessingInfo processing_info = 3;</code>
     */
    protected $processing_info = null;
    protected $request;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           A UUID hash for this work item.
     *     @type string $description
     *           A description of the work to be done in case needed for UIs.
     *     @type \Clarifai\Api\ProcessingInfo $processing_info
     *           Information on how to process the given RunnerItem.
     *     @type \Clarifai\Api\PostModelOutputsRequest $post_model_outputs_request
     *           Model prediction request from a user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * A UUID hash for this work item.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A UUID hash for this work item.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * A description of the work to be done in case needed for UIs.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the work to be done in case needed for UIs.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Information on how to process the given RunnerItem.
     *
     * Generated from protobuf field <code>.clarifai.api.ProcessingInfo processing_info = 3;</code>
     * @return \Clarifai\Api\ProcessingInfo|null
     */
    public function getProcessingInfo()
    {
        return $this->processing_info;
    }

    public function hasProcessingInfo()
    {
        return isset($this->processing_info);
    }

    public function clearProcessingInfo()
    {
        unset($this->processing_info);
    }

    /**
     * Information on how to process the given RunnerItem.
     *
     * Generated from protobuf field <code>.clarifai.api.ProcessingInfo processing_info = 3;</code>
     * @param \Clarifai\Api\ProcessingInfo $var
     * @return $this
     */
    public function setProcessingInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ProcessingInfo::class);
        $this->processing_info = $var;

        return $this;
    }

    /**
     * Model prediction request from a user.
     *
     * Generated from protobuf field <code>.clarifai.api.PostModelOutputsRequest post_model_outputs_request = 4;</code>
     * @return \Clarifai\Api\PostModelOutputsRequest|null
     */
    public function getPostModelOutputsRequest()
    {
        return $this->readOneof(4);
    }

    public function hasPostModelOutputsRequest()
    {
        return $this->hasOneof(4);
    }

    /**
     * Model prediction request from a user.
     *
     * Generated from protobuf field <code>.clarifai.api.PostModelOutputsRequest post_model_outputs_request = 4;</code>
     * @param \Clarifai\Api\PostModelOutputsRequest $var
     * @return $this
     */
    public function setPostModelOutputsRequest($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\PostModelOutputsRequest::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->whichOneof("request");
    }

}

