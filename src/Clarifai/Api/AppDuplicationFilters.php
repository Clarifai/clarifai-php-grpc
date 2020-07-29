<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.AppDuplicationFilters</code>
 */
class AppDuplicationFilters extends \Google\Protobuf\Internal\Message
{
    /**
     * Copy only inputs and default annotations
     *
     * Generated from protobuf field <code>bool copy_inputs = 1;</code>
     */
    protected $copy_inputs = false;
    /**
     * Copy only concepts
     *
     * Generated from protobuf field <code>bool copy_concepts = 2;</code>
     */
    protected $copy_concepts = false;
    /**
     * Copy annotations and what it depends on: inputs and concepts
     *
     * Generated from protobuf field <code>bool copy_annotations = 3;</code>
     */
    protected $copy_annotations = false;
    /**
     * Copy models and what it depends on: concepts
     *
     * Generated from protobuf field <code>bool copy_models = 4;</code>
     */
    protected $copy_models = false;
    /**
     * Copy workflows and what it depends on: models and concepts
     *
     * Generated from protobuf field <code>bool copy_workflows = 5;</code>
     */
    protected $copy_workflows = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $copy_inputs
     *           Copy only inputs and default annotations
     *     @type bool $copy_concepts
     *           Copy only concepts
     *     @type bool $copy_annotations
     *           Copy annotations and what it depends on: inputs and concepts
     *     @type bool $copy_models
     *           Copy models and what it depends on: concepts
     *     @type bool $copy_workflows
     *           Copy workflows and what it depends on: models and concepts
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Copy only inputs and default annotations
     *
     * Generated from protobuf field <code>bool copy_inputs = 1;</code>
     * @return bool
     */
    public function getCopyInputs()
    {
        return $this->copy_inputs;
    }

    /**
     * Copy only inputs and default annotations
     *
     * Generated from protobuf field <code>bool copy_inputs = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyInputs($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_inputs = $var;

        return $this;
    }

    /**
     * Copy only concepts
     *
     * Generated from protobuf field <code>bool copy_concepts = 2;</code>
     * @return bool
     */
    public function getCopyConcepts()
    {
        return $this->copy_concepts;
    }

    /**
     * Copy only concepts
     *
     * Generated from protobuf field <code>bool copy_concepts = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyConcepts($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_concepts = $var;

        return $this;
    }

    /**
     * Copy annotations and what it depends on: inputs and concepts
     *
     * Generated from protobuf field <code>bool copy_annotations = 3;</code>
     * @return bool
     */
    public function getCopyAnnotations()
    {
        return $this->copy_annotations;
    }

    /**
     * Copy annotations and what it depends on: inputs and concepts
     *
     * Generated from protobuf field <code>bool copy_annotations = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyAnnotations($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_annotations = $var;

        return $this;
    }

    /**
     * Copy models and what it depends on: concepts
     *
     * Generated from protobuf field <code>bool copy_models = 4;</code>
     * @return bool
     */
    public function getCopyModels()
    {
        return $this->copy_models;
    }

    /**
     * Copy models and what it depends on: concepts
     *
     * Generated from protobuf field <code>bool copy_models = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyModels($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_models = $var;

        return $this;
    }

    /**
     * Copy workflows and what it depends on: models and concepts
     *
     * Generated from protobuf field <code>bool copy_workflows = 5;</code>
     * @return bool
     */
    public function getCopyWorkflows()
    {
        return $this->copy_workflows;
    }

    /**
     * Copy workflows and what it depends on: models and concepts
     *
     * Generated from protobuf field <code>bool copy_workflows = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setCopyWorkflows($var)
    {
        GPBUtil::checkBool($var);
        $this->copy_workflows = $var;

        return $this;
    }

}

