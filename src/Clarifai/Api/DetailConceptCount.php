<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DetailConceptCount
 *
 * Generated from protobuf message <code>clarifai.api.DetailConceptCount</code>
 */
class DetailConceptCount extends \Google\Protobuf\Internal\Message
{
    /**
     * The concept count for processed assets
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount processed = 1;</code>
     */
    protected $processed = null;
    /**
     * The concept count for to process assets
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount to_process = 2;</code>
     */
    protected $to_process = null;
    /**
     * The concept count for assets with status error
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount errors = 3;</code>
     */
    protected $errors = null;
    /**
     * The concept count for processing assets
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount processing = 4;</code>
     */
    protected $processing = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\ConceptTypeCount $processed
     *           The concept count for processed assets
     *     @type \Clarifai\Api\ConceptTypeCount $to_process
     *           The concept count for to process assets
     *     @type \Clarifai\Api\ConceptTypeCount $errors
     *           The concept count for assets with status error
     *     @type \Clarifai\Api\ConceptTypeCount $processing
     *           The concept count for processing assets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The concept count for processed assets
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount processed = 1;</code>
     * @return \Clarifai\Api\ConceptTypeCount|null
     */
    public function getProcessed()
    {
        return $this->processed;
    }

    public function hasProcessed()
    {
        return isset($this->processed);
    }

    public function clearProcessed()
    {
        unset($this->processed);
    }

    /**
     * The concept count for processed assets
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount processed = 1;</code>
     * @param \Clarifai\Api\ConceptTypeCount $var
     * @return $this
     */
    public function setProcessed($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ConceptTypeCount::class);
        $this->processed = $var;

        return $this;
    }

    /**
     * The concept count for to process assets
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount to_process = 2;</code>
     * @return \Clarifai\Api\ConceptTypeCount|null
     */
    public function getToProcess()
    {
        return $this->to_process;
    }

    public function hasToProcess()
    {
        return isset($this->to_process);
    }

    public function clearToProcess()
    {
        unset($this->to_process);
    }

    /**
     * The concept count for to process assets
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount to_process = 2;</code>
     * @param \Clarifai\Api\ConceptTypeCount $var
     * @return $this
     */
    public function setToProcess($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ConceptTypeCount::class);
        $this->to_process = $var;

        return $this;
    }

    /**
     * The concept count for assets with status error
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount errors = 3;</code>
     * @return \Clarifai\Api\ConceptTypeCount|null
     */
    public function getErrors()
    {
        return $this->errors;
    }

    public function hasErrors()
    {
        return isset($this->errors);
    }

    public function clearErrors()
    {
        unset($this->errors);
    }

    /**
     * The concept count for assets with status error
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount errors = 3;</code>
     * @param \Clarifai\Api\ConceptTypeCount $var
     * @return $this
     */
    public function setErrors($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ConceptTypeCount::class);
        $this->errors = $var;

        return $this;
    }

    /**
     * The concept count for processing assets
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount processing = 4;</code>
     * @return \Clarifai\Api\ConceptTypeCount|null
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    public function hasProcessing()
    {
        return isset($this->processing);
    }

    public function clearProcessing()
    {
        unset($this->processing);
    }

    /**
     * The concept count for processing assets
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount processing = 4;</code>
     * @param \Clarifai\Api\ConceptTypeCount $var
     * @return $this
     */
    public function setProcessing($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ConceptTypeCount::class);
        $this->processing = $var;

        return $this;
    }

}

