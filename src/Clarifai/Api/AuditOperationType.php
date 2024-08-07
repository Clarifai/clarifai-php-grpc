<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.AuditOperationType</code>
 */
class AuditOperationType
{
    /**
     * Generated from protobuf enum <code>AUDIT_OPERATION_TYPE_NOT_SET = 0;</code>
     */
    const AUDIT_OPERATION_TYPE_NOT_SET = 0;
    /**
     * APPLICATION event types : 100 - 199
     *
     * Generated from protobuf enum <code>APPLICATION_CREATE = 100;</code>
     */
    const APPLICATION_CREATE = 100;

    private static $valueToName = [
        self::AUDIT_OPERATION_TYPE_NOT_SET => 'AUDIT_OPERATION_TYPE_NOT_SET',
        self::APPLICATION_CREATE => 'APPLICATION_CREATE',
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

