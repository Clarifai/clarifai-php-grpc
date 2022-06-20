<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.DataType</code>
 */
class DataType
{
    /**
     * Default value, should not be used
     *
     * Generated from protobuf enum <code>UNDEFINED = 0;</code>
     */
    const UNDEFINED = 0;
    /**
     * Generated from protobuf enum <code>STRING = 1;</code>
     */
    const STRING = 1;
    /**
     * Generated from protobuf enum <code>UINT8 = 2;</code>
     */
    const UINT8 = 2;
    /**
     * Generated from protobuf enum <code>INT32 = 3;</code>
     */
    const INT32 = 3;
    /**
     * Generated from protobuf enum <code>INT64 = 4;</code>
     */
    const INT64 = 4;
    /**
     * Generated from protobuf enum <code>FP32 = 5;</code>
     */
    const FP32 = 5;

    private static $valueToName = [
        self::UNDEFINED => 'UNDEFINED',
        self::STRING => 'STRING',
        self::UINT8 => 'UINT8',
        self::INT32 => 'INT32',
        self::INT64 => 'INT64',
        self::FP32 => 'FP32',
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

