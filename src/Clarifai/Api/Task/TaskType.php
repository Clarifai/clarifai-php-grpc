<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\Task;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.Task.TaskType</code>
 */
class TaskType
{
    /**
     * Generated from protobuf enum <code>TYPE_NOT_SET = 0;</code>
     */
    const TYPE_NOT_SET = 0;
    /**
     * Concepts classification tasks annotate concepts for the overall image, frame of video or section of text.
     *
     * Generated from protobuf enum <code>CONCEPTS_CLASSIFICATION = 1;</code>
     */
    const CONCEPTS_CLASSIFICATION = 1;
    /**
     * Bounding box detection tasks annotate rectangular bounding box regions around each concept in an image, frame of video or section of text.
     *
     * Generated from protobuf enum <code>BOUNDING_BOX_DETECTION = 2;</code>
     */
    const BOUNDING_BOX_DETECTION = 2;
    /**
     * Polygon detection tasks annotate free-form regions around concepts in an image, frame of video or section of text.
     *
     * Generated from protobuf enum <code>POLYGON_DETECTION = 3;</code>
     */
    const POLYGON_DETECTION = 3;

    private static $valueToName = [
        self::TYPE_NOT_SET => 'TYPE_NOT_SET',
        self::CONCEPTS_CLASSIFICATION => 'CONCEPTS_CLASSIFICATION',
        self::BOUNDING_BOX_DETECTION => 'BOUNDING_BOX_DETECTION',
        self::POLYGON_DETECTION => 'POLYGON_DETECTION',
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
class_alias(TaskType::class, \Clarifai\Api\Task_TaskType::class);

