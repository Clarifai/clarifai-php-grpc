<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\WorkflowVersionEvaluationTemplate;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.WorkflowVersionEvaluationTemplate.TaskType</code>
 */
class TaskType
{
    /**
     * Generated from protobuf enum <code>TASK_TYPE_NOT_SET = 0;</code>
     */
    const TASK_TYPE_NOT_SET = 0;
    /**
     * Generated from protobuf enum <code>TEXT_CLASSIFICATION = 1;</code>
     */
    const TEXT_CLASSIFICATION = 1;

    private static $valueToName = [
        self::TASK_TYPE_NOT_SET => 'TASK_TYPE_NOT_SET',
        self::TEXT_CLASSIFICATION => 'TEXT_CLASSIFICATION',
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
class_alias(TaskType::class, \Clarifai\Api\WorkflowVersionEvaluationTemplate_TaskType::class);

