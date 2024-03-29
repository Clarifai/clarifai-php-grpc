<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MetricsSummary
 *
 * Generated from protobuf message <code>clarifai.api.MetricsSummary</code>
 */
class MetricsSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float top1_accuracy = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $top1_accuracy = 0.0;
    /**
     * Generated from protobuf field <code>float top5_accuracy = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $top5_accuracy = 0.0;
    /**
     * Generated from protobuf field <code>float macro_avg_roc_auc = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $macro_avg_roc_auc = 0.0;
    /**
     * Generated from protobuf field <code>float macro_std_roc_auc = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $macro_std_roc_auc = 0.0;
    /**
     * Generated from protobuf field <code>float macro_avg_f1_score = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $macro_avg_f1_score = 0.0;
    /**
     * Generated from protobuf field <code>float macro_std_f1_score = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $macro_std_f1_score = 0.0;
    /**
     * Generated from protobuf field <code>float macro_avg_precision = 7 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $macro_avg_precision = 0.0;
    /**
     * Generated from protobuf field <code>float macro_avg_recall = 8 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $macro_avg_recall = 0.0;
    /**
     * Generated from protobuf field <code>float mean_avg_precision_iou_50 = 10;</code>
     */
    protected $mean_avg_precision_iou_50 = 0.0;
    /**
     * Generated from protobuf field <code>float mean_avg_precision_iou_range = 11;</code>
     */
    protected $mean_avg_precision_iou_range = 0.0;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.LOPQEvalResult lopq_metrics = 9;</code>
     */
    private $lopq_metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $top1_accuracy
     *     @type float $top5_accuracy
     *     @type float $macro_avg_roc_auc
     *     @type float $macro_std_roc_auc
     *     @type float $macro_avg_f1_score
     *     @type float $macro_std_f1_score
     *     @type float $macro_avg_precision
     *     @type float $macro_avg_recall
     *     @type float $mean_avg_precision_iou_50
     *     @type float $mean_avg_precision_iou_range
     *     @type array<\Clarifai\Api\LOPQEvalResult>|\Google\Protobuf\Internal\RepeatedField $lopq_metrics
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float top1_accuracy = 1 [deprecated = true];</code>
     * @return float
     * @deprecated
     */
    public function getTop1Accuracy()
    {
        @trigger_error('top1_accuracy is deprecated.', E_USER_DEPRECATED);
        return $this->top1_accuracy;
    }

    /**
     * Generated from protobuf field <code>float top1_accuracy = 1 [deprecated = true];</code>
     * @param float $var
     * @return $this
     * @deprecated
     */
    public function setTop1Accuracy($var)
    {
        @trigger_error('top1_accuracy is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkFloat($var);
        $this->top1_accuracy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float top5_accuracy = 2 [deprecated = true];</code>
     * @return float
     * @deprecated
     */
    public function getTop5Accuracy()
    {
        @trigger_error('top5_accuracy is deprecated.', E_USER_DEPRECATED);
        return $this->top5_accuracy;
    }

    /**
     * Generated from protobuf field <code>float top5_accuracy = 2 [deprecated = true];</code>
     * @param float $var
     * @return $this
     * @deprecated
     */
    public function setTop5Accuracy($var)
    {
        @trigger_error('top5_accuracy is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkFloat($var);
        $this->top5_accuracy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_roc_auc = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroAvgRocAuc()
    {
        return $this->macro_avg_roc_auc;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_roc_auc = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroAvgRocAuc($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_avg_roc_auc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_std_roc_auc = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroStdRocAuc()
    {
        return $this->macro_std_roc_auc;
    }

    /**
     * Generated from protobuf field <code>float macro_std_roc_auc = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroStdRocAuc($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_std_roc_auc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_f1_score = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroAvgF1Score()
    {
        return $this->macro_avg_f1_score;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_f1_score = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroAvgF1Score($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_avg_f1_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_std_f1_score = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroStdF1Score()
    {
        return $this->macro_std_f1_score;
    }

    /**
     * Generated from protobuf field <code>float macro_std_f1_score = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroStdF1Score($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_std_f1_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_precision = 7 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroAvgPrecision()
    {
        return $this->macro_avg_precision;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_precision = 7 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroAvgPrecision($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_avg_precision = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_recall = 8 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMacroAvgRecall()
    {
        return $this->macro_avg_recall;
    }

    /**
     * Generated from protobuf field <code>float macro_avg_recall = 8 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMacroAvgRecall($var)
    {
        GPBUtil::checkFloat($var);
        $this->macro_avg_recall = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float mean_avg_precision_iou_50 = 10;</code>
     * @return float
     */
    public function getMeanAvgPrecisionIou50()
    {
        return $this->mean_avg_precision_iou_50;
    }

    /**
     * Generated from protobuf field <code>float mean_avg_precision_iou_50 = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setMeanAvgPrecisionIou50($var)
    {
        GPBUtil::checkFloat($var);
        $this->mean_avg_precision_iou_50 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float mean_avg_precision_iou_range = 11;</code>
     * @return float
     */
    public function getMeanAvgPrecisionIouRange()
    {
        return $this->mean_avg_precision_iou_range;
    }

    /**
     * Generated from protobuf field <code>float mean_avg_precision_iou_range = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setMeanAvgPrecisionIouRange($var)
    {
        GPBUtil::checkFloat($var);
        $this->mean_avg_precision_iou_range = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.LOPQEvalResult lopq_metrics = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLopqMetrics()
    {
        return $this->lopq_metrics;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.LOPQEvalResult lopq_metrics = 9;</code>
     * @param array<\Clarifai\Api\LOPQEvalResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLopqMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\LOPQEvalResult::class);
        $this->lopq_metrics = $arr;

        return $this;
    }

}

