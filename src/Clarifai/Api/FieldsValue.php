<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FieldsValue
 *
 * Generated from protobuf message <code>clarifai.api.FieldsValue</code>
 */
class FieldsValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool confusion_matrix = 1;</code>
     */
    protected $confusion_matrix = false;
    /**
     * Generated from protobuf field <code>bool cooccurrence_matrix = 2;</code>
     */
    protected $cooccurrence_matrix = false;
    /**
     * Generated from protobuf field <code>bool label_counts = 3;</code>
     */
    protected $label_counts = false;
    /**
     * Generated from protobuf field <code>bool binary_metrics = 4;</code>
     */
    protected $binary_metrics = false;
    /**
     * Generated from protobuf field <code>bool test_set = 5;</code>
     */
    protected $test_set = false;
    /**
     * Generated from protobuf field <code>bool metrics_by_area = 6;</code>
     */
    protected $metrics_by_area = false;
    /**
     * Generated from protobuf field <code>bool metrics_by_class = 7;</code>
     */
    protected $metrics_by_class = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $confusion_matrix
     *     @type bool $cooccurrence_matrix
     *     @type bool $label_counts
     *     @type bool $binary_metrics
     *     @type bool $test_set
     *     @type bool $metrics_by_area
     *     @type bool $metrics_by_class
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool confusion_matrix = 1;</code>
     * @return bool
     */
    public function getConfusionMatrix()
    {
        return $this->confusion_matrix;
    }

    /**
     * Generated from protobuf field <code>bool confusion_matrix = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setConfusionMatrix($var)
    {
        GPBUtil::checkBool($var);
        $this->confusion_matrix = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool cooccurrence_matrix = 2;</code>
     * @return bool
     */
    public function getCooccurrenceMatrix()
    {
        return $this->cooccurrence_matrix;
    }

    /**
     * Generated from protobuf field <code>bool cooccurrence_matrix = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCooccurrenceMatrix($var)
    {
        GPBUtil::checkBool($var);
        $this->cooccurrence_matrix = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool label_counts = 3;</code>
     * @return bool
     */
    public function getLabelCounts()
    {
        return $this->label_counts;
    }

    /**
     * Generated from protobuf field <code>bool label_counts = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setLabelCounts($var)
    {
        GPBUtil::checkBool($var);
        $this->label_counts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool binary_metrics = 4;</code>
     * @return bool
     */
    public function getBinaryMetrics()
    {
        return $this->binary_metrics;
    }

    /**
     * Generated from protobuf field <code>bool binary_metrics = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBinaryMetrics($var)
    {
        GPBUtil::checkBool($var);
        $this->binary_metrics = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool test_set = 5;</code>
     * @return bool
     */
    public function getTestSet()
    {
        return $this->test_set;
    }

    /**
     * Generated from protobuf field <code>bool test_set = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setTestSet($var)
    {
        GPBUtil::checkBool($var);
        $this->test_set = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool metrics_by_area = 6;</code>
     * @return bool
     */
    public function getMetricsByArea()
    {
        return $this->metrics_by_area;
    }

    /**
     * Generated from protobuf field <code>bool metrics_by_area = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setMetricsByArea($var)
    {
        GPBUtil::checkBool($var);
        $this->metrics_by_area = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool metrics_by_class = 7;</code>
     * @return bool
     */
    public function getMetricsByClass()
    {
        return $this->metrics_by_class;
    }

    /**
     * Generated from protobuf field <code>bool metrics_by_class = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setMetricsByClass($var)
    {
        GPBUtil::checkBool($var);
        $this->metrics_by_class = $var;

        return $this;
    }

}

