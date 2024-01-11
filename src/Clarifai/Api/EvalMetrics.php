<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EvalMetrics
 *
 * Generated from protobuf message <code>clarifai.api.EvalMetrics</code>
 */
class EvalMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * user id that owns this evaluation
     *
     * Generated from protobuf field <code>string user_id = 15;</code>
     */
    protected $user_id = '';
    /**
     * app id that owns this evaluation
     *
     * Generated from protobuf field <code>string app_id = 16;</code>
     */
    protected $app_id = '';
    /**
     * Id of this evaluation
     *
     * Generated from protobuf field <code>string id = 10;</code>
     */
    protected $id = '';
    /**
     * Model to evaluate
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 13;</code>
     */
    protected $model = null;
    /**
     * The ground truth dataset
     *
     * Generated from protobuf field <code>.clarifai.api.Dataset ground_truth_dataset = 14;</code>
     */
    protected $ground_truth_dataset = null;
    /**
     * The dataset with predictions
     *
     * Generated from protobuf field <code>.clarifai.api.Dataset predictions_dataset = 18;</code>
     */
    protected $predictions_dataset = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.MetricsSummary summary = 2;</code>
     */
    protected $summary = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.ConfusionMatrix confusion_matrix = 3;</code>
     */
    protected $confusion_matrix = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.CooccurrenceMatrix cooccurrence_matrix = 4;</code>
     */
    protected $cooccurrence_matrix = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.LabelDistribution label_counts = 5;</code>
     */
    protected $label_counts = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.BinaryMetrics binary_metrics = 6;</code>
     */
    private $binary_metrics;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.EvalTestSetEntry test_set = 7;</code>
     */
    private $test_set;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.BinaryMetrics metrics_by_area = 8;</code>
     */
    private $metrics_by_area;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.BinaryMetrics metrics_by_class = 9;</code>
     */
    private $metrics_by_class;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.TrackerMetrics tracker_metrics = 11;</code>
     */
    private $tracker_metrics;
    /**
     * Evaluation parameters to pass. Expected to match what
     * is defined in the model type for the respective model.
     *
     * Generated from protobuf field <code>.clarifai.api.EvalInfo eval_info = 12;</code>
     */
    protected $eval_info = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.ExtendedMetrics extended_metrics = 17;</code>
     */
    protected $extended_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type string $user_id
     *           user id that owns this evaluation
     *     @type string $app_id
     *           app id that owns this evaluation
     *     @type string $id
     *           Id of this evaluation
     *     @type \Clarifai\Api\Model $model
     *           Model to evaluate
     *     @type \Clarifai\Api\Dataset $ground_truth_dataset
     *           The ground truth dataset
     *     @type \Clarifai\Api\Dataset $predictions_dataset
     *           The dataset with predictions
     *     @type \Clarifai\Api\MetricsSummary $summary
     *     @type \Clarifai\Api\ConfusionMatrix $confusion_matrix
     *     @type \Clarifai\Api\CooccurrenceMatrix $cooccurrence_matrix
     *     @type \Clarifai\Api\LabelDistribution $label_counts
     *     @type array<\Clarifai\Api\BinaryMetrics>|\Google\Protobuf\Internal\RepeatedField $binary_metrics
     *     @type array<\Clarifai\Api\EvalTestSetEntry>|\Google\Protobuf\Internal\RepeatedField $test_set
     *     @type array<\Clarifai\Api\BinaryMetrics>|\Google\Protobuf\Internal\RepeatedField $metrics_by_area
     *     @type array<\Clarifai\Api\BinaryMetrics>|\Google\Protobuf\Internal\RepeatedField $metrics_by_class
     *     @type array<\Clarifai\Api\TrackerMetrics>|\Google\Protobuf\Internal\RepeatedField $tracker_metrics
     *     @type \Clarifai\Api\EvalInfo $eval_info
     *           Evaluation parameters to pass. Expected to match what
     *           is defined in the model type for the respective model.
     *     @type \Clarifai\Api\ExtendedMetrics $extended_metrics
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
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
     * user id that owns this evaluation
     *
     * Generated from protobuf field <code>string user_id = 15;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * user id that owns this evaluation
     *
     * Generated from protobuf field <code>string user_id = 15;</code>
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
     * app id that owns this evaluation
     *
     * Generated from protobuf field <code>string app_id = 16;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * app id that owns this evaluation
     *
     * Generated from protobuf field <code>string app_id = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Id of this evaluation
     *
     * Generated from protobuf field <code>string id = 10;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Id of this evaluation
     *
     * Generated from protobuf field <code>string id = 10;</code>
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
     * Model to evaluate
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 13;</code>
     * @return \Clarifai\Api\Model|null
     */
    public function getModel()
    {
        return $this->model;
    }

    public function hasModel()
    {
        return isset($this->model);
    }

    public function clearModel()
    {
        unset($this->model);
    }

    /**
     * Model to evaluate
     *
     * Generated from protobuf field <code>.clarifai.api.Model model = 13;</code>
     * @param \Clarifai\Api\Model $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Model::class);
        $this->model = $var;

        return $this;
    }

    /**
     * The ground truth dataset
     *
     * Generated from protobuf field <code>.clarifai.api.Dataset ground_truth_dataset = 14;</code>
     * @return \Clarifai\Api\Dataset|null
     */
    public function getGroundTruthDataset()
    {
        return $this->ground_truth_dataset;
    }

    public function hasGroundTruthDataset()
    {
        return isset($this->ground_truth_dataset);
    }

    public function clearGroundTruthDataset()
    {
        unset($this->ground_truth_dataset);
    }

    /**
     * The ground truth dataset
     *
     * Generated from protobuf field <code>.clarifai.api.Dataset ground_truth_dataset = 14;</code>
     * @param \Clarifai\Api\Dataset $var
     * @return $this
     */
    public function setGroundTruthDataset($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Dataset::class);
        $this->ground_truth_dataset = $var;

        return $this;
    }

    /**
     * The dataset with predictions
     *
     * Generated from protobuf field <code>.clarifai.api.Dataset predictions_dataset = 18;</code>
     * @return \Clarifai\Api\Dataset|null
     */
    public function getPredictionsDataset()
    {
        return $this->predictions_dataset;
    }

    public function hasPredictionsDataset()
    {
        return isset($this->predictions_dataset);
    }

    public function clearPredictionsDataset()
    {
        unset($this->predictions_dataset);
    }

    /**
     * The dataset with predictions
     *
     * Generated from protobuf field <code>.clarifai.api.Dataset predictions_dataset = 18;</code>
     * @param \Clarifai\Api\Dataset $var
     * @return $this
     */
    public function setPredictionsDataset($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Dataset::class);
        $this->predictions_dataset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.MetricsSummary summary = 2;</code>
     * @return \Clarifai\Api\MetricsSummary|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    public function hasSummary()
    {
        return isset($this->summary);
    }

    public function clearSummary()
    {
        unset($this->summary);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.MetricsSummary summary = 2;</code>
     * @param \Clarifai\Api\MetricsSummary $var
     * @return $this
     */
    public function setSummary($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\MetricsSummary::class);
        $this->summary = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ConfusionMatrix confusion_matrix = 3;</code>
     * @return \Clarifai\Api\ConfusionMatrix|null
     */
    public function getConfusionMatrix()
    {
        return $this->confusion_matrix;
    }

    public function hasConfusionMatrix()
    {
        return isset($this->confusion_matrix);
    }

    public function clearConfusionMatrix()
    {
        unset($this->confusion_matrix);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ConfusionMatrix confusion_matrix = 3;</code>
     * @param \Clarifai\Api\ConfusionMatrix $var
     * @return $this
     */
    public function setConfusionMatrix($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ConfusionMatrix::class);
        $this->confusion_matrix = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.CooccurrenceMatrix cooccurrence_matrix = 4;</code>
     * @return \Clarifai\Api\CooccurrenceMatrix|null
     */
    public function getCooccurrenceMatrix()
    {
        return $this->cooccurrence_matrix;
    }

    public function hasCooccurrenceMatrix()
    {
        return isset($this->cooccurrence_matrix);
    }

    public function clearCooccurrenceMatrix()
    {
        unset($this->cooccurrence_matrix);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.CooccurrenceMatrix cooccurrence_matrix = 4;</code>
     * @param \Clarifai\Api\CooccurrenceMatrix $var
     * @return $this
     */
    public function setCooccurrenceMatrix($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\CooccurrenceMatrix::class);
        $this->cooccurrence_matrix = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.LabelDistribution label_counts = 5;</code>
     * @return \Clarifai\Api\LabelDistribution|null
     */
    public function getLabelCounts()
    {
        return $this->label_counts;
    }

    public function hasLabelCounts()
    {
        return isset($this->label_counts);
    }

    public function clearLabelCounts()
    {
        unset($this->label_counts);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.LabelDistribution label_counts = 5;</code>
     * @param \Clarifai\Api\LabelDistribution $var
     * @return $this
     */
    public function setLabelCounts($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\LabelDistribution::class);
        $this->label_counts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.BinaryMetrics binary_metrics = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBinaryMetrics()
    {
        return $this->binary_metrics;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.BinaryMetrics binary_metrics = 6;</code>
     * @param array<\Clarifai\Api\BinaryMetrics>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBinaryMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\BinaryMetrics::class);
        $this->binary_metrics = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.EvalTestSetEntry test_set = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTestSet()
    {
        return $this->test_set;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.EvalTestSetEntry test_set = 7;</code>
     * @param array<\Clarifai\Api\EvalTestSetEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTestSet($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\EvalTestSetEntry::class);
        $this->test_set = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.BinaryMetrics metrics_by_area = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricsByArea()
    {
        return $this->metrics_by_area;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.BinaryMetrics metrics_by_area = 8;</code>
     * @param array<\Clarifai\Api\BinaryMetrics>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricsByArea($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\BinaryMetrics::class);
        $this->metrics_by_area = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.BinaryMetrics metrics_by_class = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricsByClass()
    {
        return $this->metrics_by_class;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.BinaryMetrics metrics_by_class = 9;</code>
     * @param array<\Clarifai\Api\BinaryMetrics>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricsByClass($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\BinaryMetrics::class);
        $this->metrics_by_class = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.TrackerMetrics tracker_metrics = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrackerMetrics()
    {
        return $this->tracker_metrics;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.TrackerMetrics tracker_metrics = 11;</code>
     * @param array<\Clarifai\Api\TrackerMetrics>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrackerMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\TrackerMetrics::class);
        $this->tracker_metrics = $arr;

        return $this;
    }

    /**
     * Evaluation parameters to pass. Expected to match what
     * is defined in the model type for the respective model.
     *
     * Generated from protobuf field <code>.clarifai.api.EvalInfo eval_info = 12;</code>
     * @return \Clarifai\Api\EvalInfo|null
     */
    public function getEvalInfo()
    {
        return $this->eval_info;
    }

    public function hasEvalInfo()
    {
        return isset($this->eval_info);
    }

    public function clearEvalInfo()
    {
        unset($this->eval_info);
    }

    /**
     * Evaluation parameters to pass. Expected to match what
     * is defined in the model type for the respective model.
     *
     * Generated from protobuf field <code>.clarifai.api.EvalInfo eval_info = 12;</code>
     * @param \Clarifai\Api\EvalInfo $var
     * @return $this
     */
    public function setEvalInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\EvalInfo::class);
        $this->eval_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ExtendedMetrics extended_metrics = 17;</code>
     * @return \Clarifai\Api\ExtendedMetrics|null
     */
    public function getExtendedMetrics()
    {
        return $this->extended_metrics;
    }

    public function hasExtendedMetrics()
    {
        return isset($this->extended_metrics);
    }

    public function clearExtendedMetrics()
    {
        unset($this->extended_metrics);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ExtendedMetrics extended_metrics = 17;</code>
     * @param \Clarifai\Api\ExtendedMetrics $var
     * @return $this
     */
    public function setExtendedMetrics($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ExtendedMetrics::class);
        $this->extended_metrics = $var;

        return $this;
    }

}

