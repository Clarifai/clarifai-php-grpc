<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\CommitmentValue;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.CommitmentValue.CommitmentType</code>
 */
class CommitmentType
{
    /**
     * Generated from protobuf enum <code>TYPE_NOT_SET = 0;</code>
     */
    const TYPE_NOT_SET = 0;
    /**
     * Generated from protobuf enum <code>MONTHLY = 1;</code>
     */
    const MONTHLY = 1;
    /**
     * Generated from protobuf enum <code>ANNUAL = 2;</code>
     */
    const ANNUAL = 2;

    private static $valueToName = [
        self::TYPE_NOT_SET => 'TYPE_NOT_SET',
        self::MONTHLY => 'MONTHLY',
        self::ANNUAL => 'ANNUAL',
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
class_alias(CommitmentType::class, \Clarifai\Api\CommitmentValue_CommitmentType::class);
