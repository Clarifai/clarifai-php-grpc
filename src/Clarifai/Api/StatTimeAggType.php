<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use UnexpectedValueException;

/**
 * StatTimeAggType
 *
 * Protobuf type <code>clarifai.api.StatTimeAggType</code>
 */
class StatTimeAggType
{
    /**
     * Generated from protobuf enum <code>NO_TIME_AGG = 0;</code>
     */
    const NO_TIME_AGG = 0;
    /**
     * Generated from protobuf enum <code>YEAR = 1;</code>
     */
    const YEAR = 1;
    /**
     * Generated from protobuf enum <code>MONTH = 2;</code>
     */
    const MONTH = 2;
    /**
     * Generated from protobuf enum <code>WEEK = 3;</code>
     */
    const WEEK = 3;
    /**
     * Generated from protobuf enum <code>DAY = 4;</code>
     */
    const DAY = 4;
    /**
     * Generated from protobuf enum <code>HOUR = 5;</code>
     */
    const HOUR = 5;
    /**
     * Generated from protobuf enum <code>MINUTE = 6;</code>
     */
    const MINUTE = 6;

    private static $valueToName = [
        self::NO_TIME_AGG => 'NO_TIME_AGG',
        self::YEAR => 'YEAR',
        self::MONTH => 'MONTH',
        self::WEEK => 'WEEK',
        self::DAY => 'DAY',
        self::HOUR => 'HOUR',
        self::MINUTE => 'MINUTE',
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

