<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\Model;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.Model.BillingType</code>
 */
class BillingType
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>Tokens = 1;</code>
     */
    const Tokens = 1;
    /**
     * Generated from protobuf enum <code>Ops = 2;</code>
     */
    const Ops = 2;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Tokens => 'Tokens',
        self::Ops => 'Ops',
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
class_alias(BillingType::class, \Clarifai\Api\Model_BillingType::class);

