<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PipelineVersionRun</code>
 */
class PipelineVersionRun extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Pipeline Version associated with this run
     *
     * Generated from protobuf field <code>.clarifai.api.PipelineVersion pipeline_version = 2;</code>
     */
    protected $pipeline_version = null;
    /**
     * Nodepool(s) used for the Pipeline Version Run
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Nodepool nodepools = 3;</code>
     */
    private $nodepools;
    /**
     * Orchestration Status for this run, supporting multiple orchestration systems
     *
     * Generated from protobuf field <code>.clarifai.api.OrchestrationStatus orchestration_status = 4;</code>
     */
    protected $orchestration_status = null;
    /**
     * The user the pipeline belongs to
     *
     * Generated from protobuf field <code>string user_id = 5;</code>
     */
    protected $user_id = '';
    /**
     * The app the pipeline belongs to
     *
     * Generated from protobuf field <code>string app_id = 6;</code>
     */
    protected $app_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \Clarifai\Api\PipelineVersion $pipeline_version
     *           Pipeline Version associated with this run
     *     @type array<\Clarifai\Api\Nodepool>|\Google\Protobuf\Internal\RepeatedField $nodepools
     *           Nodepool(s) used for the Pipeline Version Run
     *     @type \Clarifai\Api\OrchestrationStatus $orchestration_status
     *           Orchestration Status for this run, supporting multiple orchestration systems
     *     @type string $user_id
     *           The user the pipeline belongs to
     *     @type string $app_id
     *           The app the pipeline belongs to
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Pipeline Version associated with this run
     *
     * Generated from protobuf field <code>.clarifai.api.PipelineVersion pipeline_version = 2;</code>
     * @return \Clarifai\Api\PipelineVersion|null
     */
    public function getPipelineVersion()
    {
        return $this->pipeline_version;
    }

    public function hasPipelineVersion()
    {
        return isset($this->pipeline_version);
    }

    public function clearPipelineVersion()
    {
        unset($this->pipeline_version);
    }

    /**
     * Pipeline Version associated with this run
     *
     * Generated from protobuf field <code>.clarifai.api.PipelineVersion pipeline_version = 2;</code>
     * @param \Clarifai\Api\PipelineVersion $var
     * @return $this
     */
    public function setPipelineVersion($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\PipelineVersion::class);
        $this->pipeline_version = $var;

        return $this;
    }

    /**
     * Nodepool(s) used for the Pipeline Version Run
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Nodepool nodepools = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodepools()
    {
        return $this->nodepools;
    }

    /**
     * Nodepool(s) used for the Pipeline Version Run
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Nodepool nodepools = 3;</code>
     * @param array<\Clarifai\Api\Nodepool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodepools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Nodepool::class);
        $this->nodepools = $arr;

        return $this;
    }

    /**
     * Orchestration Status for this run, supporting multiple orchestration systems
     *
     * Generated from protobuf field <code>.clarifai.api.OrchestrationStatus orchestration_status = 4;</code>
     * @return \Clarifai\Api\OrchestrationStatus|null
     */
    public function getOrchestrationStatus()
    {
        return $this->orchestration_status;
    }

    public function hasOrchestrationStatus()
    {
        return isset($this->orchestration_status);
    }

    public function clearOrchestrationStatus()
    {
        unset($this->orchestration_status);
    }

    /**
     * Orchestration Status for this run, supporting multiple orchestration systems
     *
     * Generated from protobuf field <code>.clarifai.api.OrchestrationStatus orchestration_status = 4;</code>
     * @param \Clarifai\Api\OrchestrationStatus $var
     * @return $this
     */
    public function setOrchestrationStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\OrchestrationStatus::class);
        $this->orchestration_status = $var;

        return $this;
    }

    /**
     * The user the pipeline belongs to
     *
     * Generated from protobuf field <code>string user_id = 5;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user the pipeline belongs to
     *
     * Generated from protobuf field <code>string user_id = 5;</code>
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
     * The app the pipeline belongs to
     *
     * Generated from protobuf field <code>string app_id = 6;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The app the pipeline belongs to
     *
     * Generated from protobuf field <code>string app_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

}

