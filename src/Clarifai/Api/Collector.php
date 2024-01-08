<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Collector is a data pathway from a CollectorSource to an app to collect data automatically.
 * For example, a CollectorSource
 *
 * Generated from protobuf message <code>clarifai.api.Collector</code>
 */
class Collector extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique ID for the collector.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Human readable description for the collector.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * When the collector is created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    protected $created_at = null;
    /**
     * This is a workflow to run inline in model predict calls. It should ONLY have very fast and
     * light-weight models in it as it will effect the speed of the predictions being made.
     * This workflow's purpose is to filter down the inputs to queue for the collector to process.
     * The input to this workflow is going to be the OUTPUT of the model, not the input to the model
     * since we want to encourage having fast workflows that can also take advantage of the model
     * outputs to make deciions (for example: thresholding based on concepts). If the workflow
     * output has any field that is non-empty then the input will be queued for the collector
     * to process with the post_queue_workflow_id.
     * As a simpler alternative, pre_queue_random_sample can be set to just use random sampling instead.
     *
     * Generated from protobuf field <code>string pre_queue_workflow_id = 4;</code>
     */
    protected $pre_queue_workflow_id = '';
    /**
     * Instead of needing to create a new workflow for pre_queue_workflow_id, if just random sampling
     * of the model inputs is required, then pre_queue_random_sample can be set to a value from (0-1]
     * to denote the fraction of inputs to collect.
     *
     * Generated from protobuf field <code>float pre_queue_random_sample = 8;</code>
     */
    protected $pre_queue_random_sample = 0.0;
    /**
     * A workflow to run to after the collector is processing the queued input. This workflow
     * uses the original input to the model as input to the workflow so that you can run additional
     * models as well on that input to decide whether to queue the model or not. If the workflow
     * output has any field that is non-empty then it will be passed on to POST /inputs to
     * the destination app.
     *
     * Generated from protobuf field <code>string post_queue_workflow_id = 5;</code>
     */
    protected $post_queue_workflow_id = '';
    /**
     * The source of the collector to feed data into this app.
     * Note(zeiler): if we wanted more than one source per collector we could make this it's own
     * object and introduce /collectors/{collector_id}/sources
     * We will keep it simple for now and have just one source per collector since a user can make
     * more than one collector in the same app anyways.
     *
     * Generated from protobuf field <code>.clarifai.api.CollectorSource collector_source = 6;</code>
     */
    protected $collector_source = null;
    /**
     * Status for the collector. This allows you to pause a collector without having to delete it as
     * an example.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 7;</code>
     */
    protected $status = null;
    /**
     * Whether to collect outputs or not. Default is false. If selected, outputs from the 
     * original model predict call will be posted as annotations along with the input with success status.
     *
     * Generated from protobuf field <code>bool collect_outputs = 9;</code>
     */
    protected $collect_outputs = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Unique ID for the collector.
     *     @type string $description
     *           Human readable description for the collector.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the collector is created. We follow the XXXX timestamp
     *           format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     *           "2006-01-02T15:04:05.999999Z" so you can expect results like
     *           the following from the API:
     *           "2017-04-11T21:50:50.223962Z"
     *     @type string $pre_queue_workflow_id
     *           This is a workflow to run inline in model predict calls. It should ONLY have very fast and
     *           light-weight models in it as it will effect the speed of the predictions being made.
     *           This workflow's purpose is to filter down the inputs to queue for the collector to process.
     *           The input to this workflow is going to be the OUTPUT of the model, not the input to the model
     *           since we want to encourage having fast workflows that can also take advantage of the model
     *           outputs to make deciions (for example: thresholding based on concepts). If the workflow
     *           output has any field that is non-empty then the input will be queued for the collector
     *           to process with the post_queue_workflow_id.
     *           As a simpler alternative, pre_queue_random_sample can be set to just use random sampling instead.
     *     @type float $pre_queue_random_sample
     *           Instead of needing to create a new workflow for pre_queue_workflow_id, if just random sampling
     *           of the model inputs is required, then pre_queue_random_sample can be set to a value from (0-1]
     *           to denote the fraction of inputs to collect.
     *     @type string $post_queue_workflow_id
     *           A workflow to run to after the collector is processing the queued input. This workflow
     *           uses the original input to the model as input to the workflow so that you can run additional
     *           models as well on that input to decide whether to queue the model or not. If the workflow
     *           output has any field that is non-empty then it will be passed on to POST /inputs to
     *           the destination app.
     *     @type \Clarifai\Api\CollectorSource $collector_source
     *           The source of the collector to feed data into this app.
     *           Note(zeiler): if we wanted more than one source per collector we could make this it's own
     *           object and introduce /collectors/{collector_id}/sources
     *           We will keep it simple for now and have just one source per collector since a user can make
     *           more than one collector in the same app anyways.
     *     @type \Clarifai\Api\Status\Status $status
     *           Status for the collector. This allows you to pause a collector without having to delete it as
     *           an example.
     *     @type bool $collect_outputs
     *           Whether to collect outputs or not. Default is false. If selected, outputs from the 
     *           original model predict call will be posted as annotations along with the input with success status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique ID for the collector.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique ID for the collector.
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
     * Human readable description for the collector.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human readable description for the collector.
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
     * When the collector is created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * When the collector is created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * This is a workflow to run inline in model predict calls. It should ONLY have very fast and
     * light-weight models in it as it will effect the speed of the predictions being made.
     * This workflow's purpose is to filter down the inputs to queue for the collector to process.
     * The input to this workflow is going to be the OUTPUT of the model, not the input to the model
     * since we want to encourage having fast workflows that can also take advantage of the model
     * outputs to make deciions (for example: thresholding based on concepts). If the workflow
     * output has any field that is non-empty then the input will be queued for the collector
     * to process with the post_queue_workflow_id.
     * As a simpler alternative, pre_queue_random_sample can be set to just use random sampling instead.
     *
     * Generated from protobuf field <code>string pre_queue_workflow_id = 4;</code>
     * @return string
     */
    public function getPreQueueWorkflowId()
    {
        return $this->pre_queue_workflow_id;
    }

    /**
     * This is a workflow to run inline in model predict calls. It should ONLY have very fast and
     * light-weight models in it as it will effect the speed of the predictions being made.
     * This workflow's purpose is to filter down the inputs to queue for the collector to process.
     * The input to this workflow is going to be the OUTPUT of the model, not the input to the model
     * since we want to encourage having fast workflows that can also take advantage of the model
     * outputs to make deciions (for example: thresholding based on concepts). If the workflow
     * output has any field that is non-empty then the input will be queued for the collector
     * to process with the post_queue_workflow_id.
     * As a simpler alternative, pre_queue_random_sample can be set to just use random sampling instead.
     *
     * Generated from protobuf field <code>string pre_queue_workflow_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPreQueueWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->pre_queue_workflow_id = $var;

        return $this;
    }

    /**
     * Instead of needing to create a new workflow for pre_queue_workflow_id, if just random sampling
     * of the model inputs is required, then pre_queue_random_sample can be set to a value from (0-1]
     * to denote the fraction of inputs to collect.
     *
     * Generated from protobuf field <code>float pre_queue_random_sample = 8;</code>
     * @return float
     */
    public function getPreQueueRandomSample()
    {
        return $this->pre_queue_random_sample;
    }

    /**
     * Instead of needing to create a new workflow for pre_queue_workflow_id, if just random sampling
     * of the model inputs is required, then pre_queue_random_sample can be set to a value from (0-1]
     * to denote the fraction of inputs to collect.
     *
     * Generated from protobuf field <code>float pre_queue_random_sample = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setPreQueueRandomSample($var)
    {
        GPBUtil::checkFloat($var);
        $this->pre_queue_random_sample = $var;

        return $this;
    }

    /**
     * A workflow to run to after the collector is processing the queued input. This workflow
     * uses the original input to the model as input to the workflow so that you can run additional
     * models as well on that input to decide whether to queue the model or not. If the workflow
     * output has any field that is non-empty then it will be passed on to POST /inputs to
     * the destination app.
     *
     * Generated from protobuf field <code>string post_queue_workflow_id = 5;</code>
     * @return string
     */
    public function getPostQueueWorkflowId()
    {
        return $this->post_queue_workflow_id;
    }

    /**
     * A workflow to run to after the collector is processing the queued input. This workflow
     * uses the original input to the model as input to the workflow so that you can run additional
     * models as well on that input to decide whether to queue the model or not. If the workflow
     * output has any field that is non-empty then it will be passed on to POST /inputs to
     * the destination app.
     *
     * Generated from protobuf field <code>string post_queue_workflow_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPostQueueWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->post_queue_workflow_id = $var;

        return $this;
    }

    /**
     * The source of the collector to feed data into this app.
     * Note(zeiler): if we wanted more than one source per collector we could make this it's own
     * object and introduce /collectors/{collector_id}/sources
     * We will keep it simple for now and have just one source per collector since a user can make
     * more than one collector in the same app anyways.
     *
     * Generated from protobuf field <code>.clarifai.api.CollectorSource collector_source = 6;</code>
     * @return \Clarifai\Api\CollectorSource|null
     */
    public function getCollectorSource()
    {
        return $this->collector_source;
    }

    public function hasCollectorSource()
    {
        return isset($this->collector_source);
    }

    public function clearCollectorSource()
    {
        unset($this->collector_source);
    }

    /**
     * The source of the collector to feed data into this app.
     * Note(zeiler): if we wanted more than one source per collector we could make this it's own
     * object and introduce /collectors/{collector_id}/sources
     * We will keep it simple for now and have just one source per collector since a user can make
     * more than one collector in the same app anyways.
     *
     * Generated from protobuf field <code>.clarifai.api.CollectorSource collector_source = 6;</code>
     * @param \Clarifai\Api\CollectorSource $var
     * @return $this
     */
    public function setCollectorSource($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\CollectorSource::class);
        $this->collector_source = $var;

        return $this;
    }

    /**
     * Status for the collector. This allows you to pause a collector without having to delete it as
     * an example.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 7;</code>
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
     * Status for the collector. This allows you to pause a collector without having to delete it as
     * an example.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 7;</code>
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
     * Whether to collect outputs or not. Default is false. If selected, outputs from the 
     * original model predict call will be posted as annotations along with the input with success status.
     *
     * Generated from protobuf field <code>bool collect_outputs = 9;</code>
     * @return bool
     */
    public function getCollectOutputs()
    {
        return $this->collect_outputs;
    }

    /**
     * Whether to collect outputs or not. Default is false. If selected, outputs from the 
     * original model predict call will be posted as annotations along with the input with success status.
     *
     * Generated from protobuf field <code>bool collect_outputs = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setCollectOutputs($var)
    {
        GPBUtil::checkBool($var);
        $this->collect_outputs = $var;

        return $this;
    }

}

