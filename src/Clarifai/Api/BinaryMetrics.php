<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BinaryMetrics
 *
 * Generated from protobuf message <code>clarifai.api.BinaryMetrics</code>
 */
class BinaryMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 num_pos = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $num_pos = 0;
    /**
     * Generated from protobuf field <code>uint32 num_neg = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $num_neg = 0;
    /**
     * Generated from protobuf field <code>uint32 num_tot = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $num_tot = 0;
    /**
     * Generated from protobuf field <code>float roc_auc = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $roc_auc = 0.0;
    /**
     * Generated from protobuf field <code>float f1 = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $f1 = 0.0;
    /**
     * Generated from protobuf field <code>.clarifai.api.Concept concept = 6;</code>
     */
    protected $concept = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.ROC roc_curve = 7;</code>
     */
    protected $roc_curve = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.PrecisionRecallCurve precision_recall_curve = 8;</code>
     */
    protected $precision_recall_curve = null;
    /**
     * Generated from protobuf field <code>float avg_precision = 9;</code>
     */
    protected $avg_precision = 0.0;
    /**
     * Generated from protobuf field <code>string area_name = 10;</code>
     */
    protected $area_name = '';
    /**
     * Generated from protobuf field <code>double area_min = 11;</code>
     */
    protected $area_min = 0.0;
    /**
     * Generated from protobuf field <code>double area_max = 12;</code>
     */
    protected $area_max = 0.0;
    /**
     * Generated from protobuf field <code>float iou = 13;</code>
     */
    protected $iou = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num_pos
     *     @type int $num_neg
     *     @type int $num_tot
     *     @type float $roc_auc
     *     @type float $f1
     *     @type \Clarifai\Api\Concept $concept
     *     @type \Clarifai\Api\ROC $roc_curve
     *     @type \Clarifai\Api\PrecisionRecallCurve $precision_recall_curve
     *     @type float $avg_precision
     *     @type string $area_name
     *     @type float $area_min
     *     @type float $area_max
     *     @type float $iou
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 num_pos = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return int
     */
    public function getNumPos()
    {
        return $this->num_pos;
    }

    /**
     * Generated from protobuf field <code>uint32 num_pos = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param int $var
     * @return $this
     */
    public function setNumPos($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_pos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 num_neg = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return int
     */
    public function getNumNeg()
    {
        return $this->num_neg;
    }

    /**
     * Generated from protobuf field <code>uint32 num_neg = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param int $var
     * @return $this
     */
    public function setNumNeg($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_neg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 num_tot = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return int
     */
    public function getNumTot()
    {
        return $this->num_tot;
    }

    /**
     * Generated from protobuf field <code>uint32 num_tot = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param int $var
     * @return $this
     */
    public function setNumTot($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_tot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float roc_auc = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getRocAuc()
    {
        return $this->roc_auc;
    }

    /**
     * Generated from protobuf field <code>float roc_auc = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setRocAuc($var)
    {
        GPBUtil::checkFloat($var);
        $this->roc_auc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float f1 = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getF1()
    {
        return $this->f1;
    }

    /**
     * Generated from protobuf field <code>float f1 = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setF1($var)
    {
        GPBUtil::checkFloat($var);
        $this->f1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Concept concept = 6;</code>
     * @return \Clarifai\Api\Concept|null
     */
    public function getConcept()
    {
        return $this->concept;
    }

    public function hasConcept()
    {
        return isset($this->concept);
    }

    public function clearConcept()
    {
        unset($this->concept);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Concept concept = 6;</code>
     * @param \Clarifai\Api\Concept $var
     * @return $this
     */
    public function setConcept($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Concept::class);
        $this->concept = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ROC roc_curve = 7;</code>
     * @return \Clarifai\Api\ROC|null
     */
    public function getRocCurve()
    {
        return $this->roc_curve;
    }

    public function hasRocCurve()
    {
        return isset($this->roc_curve);
    }

    public function clearRocCurve()
    {
        unset($this->roc_curve);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ROC roc_curve = 7;</code>
     * @param \Clarifai\Api\ROC $var
     * @return $this
     */
    public function setRocCurve($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ROC::class);
        $this->roc_curve = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.PrecisionRecallCurve precision_recall_curve = 8;</code>
     * @return \Clarifai\Api\PrecisionRecallCurve|null
     */
    public function getPrecisionRecallCurve()
    {
        return $this->precision_recall_curve;
    }

    public function hasPrecisionRecallCurve()
    {
        return isset($this->precision_recall_curve);
    }

    public function clearPrecisionRecallCurve()
    {
        unset($this->precision_recall_curve);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.PrecisionRecallCurve precision_recall_curve = 8;</code>
     * @param \Clarifai\Api\PrecisionRecallCurve $var
     * @return $this
     */
    public function setPrecisionRecallCurve($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\PrecisionRecallCurve::class);
        $this->precision_recall_curve = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float avg_precision = 9;</code>
     * @return float
     */
    public function getAvgPrecision()
    {
        return $this->avg_precision;
    }

    /**
     * Generated from protobuf field <code>float avg_precision = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setAvgPrecision($var)
    {
        GPBUtil::checkFloat($var);
        $this->avg_precision = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string area_name = 10;</code>
     * @return string
     */
    public function getAreaName()
    {
        return $this->area_name;
    }

    /**
     * Generated from protobuf field <code>string area_name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setAreaName($var)
    {
        GPBUtil::checkString($var, True);
        $this->area_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double area_min = 11;</code>
     * @return float
     */
    public function getAreaMin()
    {
        return $this->area_min;
    }

    /**
     * Generated from protobuf field <code>double area_min = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setAreaMin($var)
    {
        GPBUtil::checkDouble($var);
        $this->area_min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double area_max = 12;</code>
     * @return float
     */
    public function getAreaMax()
    {
        return $this->area_max;
    }

    /**
     * Generated from protobuf field <code>double area_max = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setAreaMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->area_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float iou = 13;</code>
     * @return float
     */
    public function getIou()
    {
        return $this->iou;
    }

    /**
     * Generated from protobuf field <code>float iou = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setIou($var)
    {
        GPBUtil::checkFloat($var);
        $this->iou = $var;

        return $this;
    }

}

