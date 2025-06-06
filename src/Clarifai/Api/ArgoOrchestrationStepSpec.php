<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ArgoOrchestrationStepSpec</code>
 */
class ArgoOrchestrationStepSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The API version of the orchestration W.
     * Example: "argoproj.io/v1alpha1", "argoproj.io/v1beta1"
     *
     * Generated from protobuf field <code>string api_version = 1;</code>
     */
    protected $api_version = '';
    /**
     * The JSON representation of the Argo Workflow Template
     *
     * Generated from protobuf field <code>string spec_json = 2;</code>
     */
    protected $spec_json = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $api_version
     *           The API version of the orchestration W.
     *           Example: "argoproj.io/v1alpha1", "argoproj.io/v1beta1"
     *     @type string $spec_json
     *           The JSON representation of the Argo Workflow Template
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The API version of the orchestration W.
     * Example: "argoproj.io/v1alpha1", "argoproj.io/v1beta1"
     *
     * Generated from protobuf field <code>string api_version = 1;</code>
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * The API version of the orchestration W.
     * Example: "argoproj.io/v1alpha1", "argoproj.io/v1beta1"
     *
     * Generated from protobuf field <code>string api_version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_version = $var;

        return $this;
    }

    /**
     * The JSON representation of the Argo Workflow Template
     *
     * Generated from protobuf field <code>string spec_json = 2;</code>
     * @return string
     */
    public function getSpecJson()
    {
        return $this->spec_json;
    }

    /**
     * The JSON representation of the Argo Workflow Template
     *
     * Generated from protobuf field <code>string spec_json = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSpecJson($var)
    {
        GPBUtil::checkString($var, True);
        $this->spec_json = $var;

        return $this;
    }

}

