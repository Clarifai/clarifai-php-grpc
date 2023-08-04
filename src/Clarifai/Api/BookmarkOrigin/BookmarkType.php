<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\BookmarkOrigin;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.BookmarkOrigin.BookmarkType</code>
 */
class BookmarkType
{
    /**
     * Generated from protobuf enum <code>unknown = 0;</code>
     */
    const unknown = 0;
    /**
     * Generated from protobuf enum <code>model = 1;</code>
     */
    const model = 1;
    /**
     * Generated from protobuf enum <code>workflow = 2;</code>
     */
    const workflow = 2;
    /**
     * Generated from protobuf enum <code>dataset = 3;</code>
     */
    const dataset = 3;
    /**
     * Generated from protobuf enum <code>module = 4;</code>
     */
    const module = 4;

    private static $valueToName = [
        self::unknown => 'unknown',
        self::model => 'model',
        self::workflow => 'workflow',
        self::dataset => 'dataset',
        self::module => 'module',
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
class_alias(BookmarkType::class, \Clarifai\Api\BookmarkOrigin_BookmarkType::class);

