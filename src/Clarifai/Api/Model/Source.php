<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\Model;

use UnexpectedValueException;

/**
 * Source of Model
 *
 * Protobuf type <code>clarifai.api.Model.Source</code>
 */
class Source
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_SOURCE = 0;</code>
     */
    const UNKNOWN_SOURCE = 0;
    /**
     * Generated from protobuf enum <code>HOSTED = 1;</code>
     */
    const HOSTED = 1;
    /**
     * Generated from protobuf enum <code>WRAPPED = 2;</code>
     */
    const WRAPPED = 2;

    private static $valueToName = [
        self::UNKNOWN_SOURCE => 'UNKNOWN_SOURCE',
        self::HOSTED => 'HOSTED',
        self::WRAPPED => 'WRAPPED',
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
class_alias(Source::class, \Clarifai\Api\Model_Source::class);

