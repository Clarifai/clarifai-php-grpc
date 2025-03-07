<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.OrchestrationSpec</code>
 */
class OrchestrationSpec extends \Google\Protobuf\Internal\Message
{
    protected $orchestration;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\ArgoOrchestrationSpec $argo_orchestration_spec
     *           Argo orchestration specification
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Argo orchestration specification
     *
     * Generated from protobuf field <code>.clarifai.api.ArgoOrchestrationSpec argo_orchestration_spec = 1;</code>
     * @return \Clarifai\Api\ArgoOrchestrationSpec|null
     */
    public function getArgoOrchestrationSpec()
    {
        return $this->readOneof(1);
    }

    public function hasArgoOrchestrationSpec()
    {
        return $this->hasOneof(1);
    }

    /**
     * Argo orchestration specification
     *
     * Generated from protobuf field <code>.clarifai.api.ArgoOrchestrationSpec argo_orchestration_spec = 1;</code>
     * @param \Clarifai\Api\ArgoOrchestrationSpec $var
     * @return $this
     */
    public function setArgoOrchestrationSpec($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ArgoOrchestrationSpec::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOrchestration()
    {
        return $this->whichOneof("orchestration");
    }

}

