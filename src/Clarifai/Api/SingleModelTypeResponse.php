<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SingleModelTypeResponse
 *
 * Generated from protobuf message <code>clarifai.api.SingleModelTypeResponse</code>
 */
class SingleModelTypeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Status of the response.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * The retrieved ModelType object. .
     *
     * Generated from protobuf field <code>.clarifai.api.ModelType model_type = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $model_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           Status of the response.
     *     @type \Clarifai\Api\ModelType $model_type
     *           The retrieved ModelType object. .
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Status of the response.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the response.
     *
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
     * The retrieved ModelType object. .
     *
     * Generated from protobuf field <code>.clarifai.api.ModelType model_type = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Clarifai\Api\ModelType
     */
    public function getModelType()
    {
        return $this->model_type;
    }

    /**
     * The retrieved ModelType object. .
     *
     * Generated from protobuf field <code>.clarifai.api.ModelType model_type = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param \Clarifai\Api\ModelType $var
     * @return $this
     */
    public function setModelType($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ModelType::class);
        $this->model_type = $var;

        return $this;
    }

}

