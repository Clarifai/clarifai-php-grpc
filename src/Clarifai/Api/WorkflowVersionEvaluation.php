<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.WorkflowVersionEvaluation</code>
 */
class WorkflowVersionEvaluation extends \Google\Protobuf\Internal\Message
{
    /**
     * Customer-Facing / External ID of the workflow version evaluation.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The ID of the workflow that is used for evaluation.
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     */
    protected $workflow_id = '';
    /**
     * The version of the workflow that is used for evaluation.
     *
     * Generated from protobuf field <code>string workflow_version_id = 3;</code>
     */
    protected $workflow_version_id = '';
    /**
     * The ID of the ground-truth dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string ground_truth_dataset_id = 4;</code>
     */
    protected $ground_truth_dataset_id = '';
    /**
     * The version ID of the ground-truth dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string ground_truth_dataset_version_id = 5;</code>
     */
    protected $ground_truth_dataset_version_id = '';
    /**
     * The ID of the prediction dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string predictions_dataset_id = 6;</code>
     */
    protected $predictions_dataset_id = '';
    /**
     * The version ID of the prediction dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string predictions_dataset_version_id = 7;</code>
     */
    protected $predictions_dataset_version_id = '';
    /**
     * Evaluation Template ID
     *
     * Generated from protobuf field <code>string evaluation_template_id = 8;</code>
     */
    protected $evaluation_template_id = '';
    /**
     * The evaluation results
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowEvaluationResult workflow_evaluation_result = 9;</code>
     */
    protected $workflow_evaluation_result = null;
    /**
     * Status of the evaluation
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 10;</code>
     */
    protected $status = null;
    /**
     * When the workflow version evaluation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 11;</code>
     */
    protected $created_at = null;
    /**
     * When the workflow version evaluation was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 12;</code>
     */
    protected $modified_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Customer-Facing / External ID of the workflow version evaluation.
     *     @type string $workflow_id
     *           The ID of the workflow that is used for evaluation.
     *     @type string $workflow_version_id
     *           The version of the workflow that is used for evaluation.
     *     @type string $ground_truth_dataset_id
     *           The ID of the ground-truth dataset that is used for evaluation.
     *     @type string $ground_truth_dataset_version_id
     *           The version ID of the ground-truth dataset that is used for evaluation.
     *     @type string $predictions_dataset_id
     *           The ID of the prediction dataset that is used for evaluation.
     *     @type string $predictions_dataset_version_id
     *           The version ID of the prediction dataset that is used for evaluation.
     *     @type string $evaluation_template_id
     *           Evaluation Template ID
     *     @type \Clarifai\Api\WorkflowEvaluationResult $workflow_evaluation_result
     *           The evaluation results
     *     @type \Clarifai\Api\Status\Status $status
     *           Status of the evaluation
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the workflow version evaluation was created.
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When the workflow version evaluation was modified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Customer-Facing / External ID of the workflow version evaluation.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Customer-Facing / External ID of the workflow version evaluation.
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
     * The ID of the workflow that is used for evaluation.
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * The ID of the workflow that is used for evaluation.
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

    /**
     * The version of the workflow that is used for evaluation.
     *
     * Generated from protobuf field <code>string workflow_version_id = 3;</code>
     * @return string
     */
    public function getWorkflowVersionId()
    {
        return $this->workflow_version_id;
    }

    /**
     * The version of the workflow that is used for evaluation.
     *
     * Generated from protobuf field <code>string workflow_version_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_version_id = $var;

        return $this;
    }

    /**
     * The ID of the ground-truth dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string ground_truth_dataset_id = 4;</code>
     * @return string
     */
    public function getGroundTruthDatasetId()
    {
        return $this->ground_truth_dataset_id;
    }

    /**
     * The ID of the ground-truth dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string ground_truth_dataset_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGroundTruthDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ground_truth_dataset_id = $var;

        return $this;
    }

    /**
     * The version ID of the ground-truth dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string ground_truth_dataset_version_id = 5;</code>
     * @return string
     */
    public function getGroundTruthDatasetVersionId()
    {
        return $this->ground_truth_dataset_version_id;
    }

    /**
     * The version ID of the ground-truth dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string ground_truth_dataset_version_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setGroundTruthDatasetVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ground_truth_dataset_version_id = $var;

        return $this;
    }

    /**
     * The ID of the prediction dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string predictions_dataset_id = 6;</code>
     * @return string
     */
    public function getPredictionsDatasetId()
    {
        return $this->predictions_dataset_id;
    }

    /**
     * The ID of the prediction dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string predictions_dataset_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPredictionsDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->predictions_dataset_id = $var;

        return $this;
    }

    /**
     * The version ID of the prediction dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string predictions_dataset_version_id = 7;</code>
     * @return string
     */
    public function getPredictionsDatasetVersionId()
    {
        return $this->predictions_dataset_version_id;
    }

    /**
     * The version ID of the prediction dataset that is used for evaluation.
     *
     * Generated from protobuf field <code>string predictions_dataset_version_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPredictionsDatasetVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->predictions_dataset_version_id = $var;

        return $this;
    }

    /**
     * Evaluation Template ID
     *
     * Generated from protobuf field <code>string evaluation_template_id = 8;</code>
     * @return string
     */
    public function getEvaluationTemplateId()
    {
        return $this->evaluation_template_id;
    }

    /**
     * Evaluation Template ID
     *
     * Generated from protobuf field <code>string evaluation_template_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setEvaluationTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->evaluation_template_id = $var;

        return $this;
    }

    /**
     * The evaluation results
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowEvaluationResult workflow_evaluation_result = 9;</code>
     * @return \Clarifai\Api\WorkflowEvaluationResult|null
     */
    public function getWorkflowEvaluationResult()
    {
        return $this->workflow_evaluation_result;
    }

    public function hasWorkflowEvaluationResult()
    {
        return isset($this->workflow_evaluation_result);
    }

    public function clearWorkflowEvaluationResult()
    {
        unset($this->workflow_evaluation_result);
    }

    /**
     * The evaluation results
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowEvaluationResult workflow_evaluation_result = 9;</code>
     * @param \Clarifai\Api\WorkflowEvaluationResult $var
     * @return $this
     */
    public function setWorkflowEvaluationResult($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\WorkflowEvaluationResult::class);
        $this->workflow_evaluation_result = $var;

        return $this;
    }

    /**
     * Status of the evaluation
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 10;</code>
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
     * Status of the evaluation
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 10;</code>
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
     * When the workflow version evaluation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 11;</code>
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
     * When the workflow version evaluation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 11;</code>
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
     * When the workflow version evaluation was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    public function hasModifiedAt()
    {
        return isset($this->modified_at);
    }

    public function clearModifiedAt()
    {
        unset($this->modified_at);
    }

    /**
     * When the workflow version evaluation was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modified_at = $var;

        return $this;
    }

}

