<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\WorkflowVersionEvaluationMetric;

use UnexpectedValueException;

/**
 * Enum for visualization types
 *
 * Protobuf type <code>clarifai.api.WorkflowVersionEvaluationMetric.VisualisationType</code>
 */
class VisualisationType
{
    /**
     * Generated from protobuf enum <code>VISUALIZATION_TYPE_NOT_SET = 0;</code>
     */
    const VISUALIZATION_TYPE_NOT_SET = 0;
    /**
     * Generated from protobuf enum <code>CONFUSION_MATRIX = 1;</code>
     */
    const CONFUSION_MATRIX = 1;
    /**
     * Generated from protobuf enum <code>PRECISION_RECALL_CURVE = 2;</code>
     */
    const PRECISION_RECALL_CURVE = 2;
    /**
     * Generated from protobuf enum <code>ROC_AUC_CURVE = 3;</code>
     */
    const ROC_AUC_CURVE = 3;

    private static $valueToName = [
        self::VISUALIZATION_TYPE_NOT_SET => 'VISUALIZATION_TYPE_NOT_SET',
        self::CONFUSION_MATRIX => 'CONFUSION_MATRIX',
        self::PRECISION_RECALL_CURVE => 'PRECISION_RECALL_CURVE',
        self::ROC_AUC_CURVE => 'ROC_AUC_CURVE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VisualisationType::class, \Clarifai\Api\WorkflowVersionEvaluationMetric_VisualisationType::class);

