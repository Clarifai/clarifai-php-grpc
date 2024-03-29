<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\Point;

use UnexpectedValueException;

/**
 * Whether this point is visible or occluded
 *
 * Protobuf type <code>clarifai.api.Point.Visibility</code>
 */
class Visibility
{
    /**
     * Visibility of the point is not set
     *
     * Generated from protobuf enum <code>NOT_SET = 0;</code>
     */
    const NOT_SET = 0;
    /**
     * Point is visible
     *
     * Generated from protobuf enum <code>VISIBLE = 1;</code>
     */
    const VISIBLE = 1;
    /**
     * Point is occluded
     *
     * Generated from protobuf enum <code>NOT_VISIBLE = 2;</code>
     */
    const NOT_VISIBLE = 2;
    /**
     * Point is not in the image
     *
     * Generated from protobuf enum <code>NOT_PRESENT = 3;</code>
     */
    const NOT_PRESENT = 3;

    private static $valueToName = [
        self::NOT_SET => 'NOT_SET',
        self::VISIBLE => 'VISIBLE',
        self::NOT_VISIBLE => 'NOT_VISIBLE',
        self::NOT_PRESENT => 'NOT_PRESENT',
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
class_alias(Visibility::class, \Clarifai\Api\Point_Visibility::class);

