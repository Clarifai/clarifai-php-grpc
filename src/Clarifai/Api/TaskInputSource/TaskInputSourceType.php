<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\TaskInputSource;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.TaskInputSource.TaskInputSourceType</code>
 */
class TaskInputSourceType
{
    /**
     * Generated from protobuf enum <code>INPUT_SOURCE_TYPE_NOT_SET = 0;</code>
     */
    const INPUT_SOURCE_TYPE_NOT_SET = 0;
    /**
     * Use all inputs in the app.
     *
     * Generated from protobuf enum <code>ALL_INPUTS = 1;</code>
     */
    const ALL_INPUTS = 1;
    /**
     * Use the inputs from a saved search.
     *
     * Generated from protobuf enum <code>SAVED_SEARCH = 2;</code>
     */
    const SAVED_SEARCH = 2;
    /**
     * Inputs from a dataset.
     *
     * Generated from protobuf enum <code>DATASET = 3;</code>
     */
    const DATASET = 3;

    private static $valueToName = [
        self::INPUT_SOURCE_TYPE_NOT_SET => 'INPUT_SOURCE_TYPE_NOT_SET',
        self::ALL_INPUTS => 'ALL_INPUTS',
        self::SAVED_SEARCH => 'SAVED_SEARCH',
        self::DATASET => 'DATASET',
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
class_alias(TaskInputSourceType::class, \Clarifai\Api\TaskInputSource_TaskInputSourceType::class);

