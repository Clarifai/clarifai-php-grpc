<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api\ModelTypeField;

use UnexpectedValueException;

/**
 * These are various types of fields that we have UIs for.
 *
 * Protobuf type <code>clarifai.api.ModelTypeField.ModelTypeFieldType</code>
 */
class ModelTypeFieldType
{
    /**
     * Generated from protobuf enum <code>INVALID_MODEL_TYPE_FIELD_TYPE = 0;</code>
     */
    const INVALID_MODEL_TYPE_FIELD_TYPE = 0;
    /**
     * Generated from protobuf enum <code>BOOLEAN = 1;</code>
     */
    const BOOLEAN = 1;
    /**
     * Generated from protobuf enum <code>STRING = 2;</code>
     */
    const STRING = 2;
    /**
     * Generated from protobuf enum <code>NUMBER = 3;</code>
     */
    const NUMBER = 3;
    /**
     * For auto-completing to concepts in the app. This goes into an data.concepts field.
     *
     * Generated from protobuf enum <code>ARRAY_OF_CONCEPTS = 4;</code>
     */
    const ARRAY_OF_CONCEPTS = 4;
    /**
     * For auto-completing to concepts in the app. This goes into an data.concepts field.
     *
     * Generated from protobuf enum <code>ARRAY_OF_CONCEPTS_WITH_THRESHOLD = 5;</code>
     */
    const ARRAY_OF_CONCEPTS_WITH_THRESHOLD = 5;
    /**
     * A range for a float value.
     *
     * Generated from protobuf enum <code>RANGE = 7;</code>
     */
    const RANGE = 7;
    /**
     * If ENUM is used then the "enum_options" field should also be filled in which allows for
     * additional ModelTypeFields too depending on the enum choice.
     *
     * Generated from protobuf enum <code>ENUM = 8;</code>
     */
    const ENUM = 8;
    /**
     * For listing collaborators of the app. The field is a string of the collaborator's user_id.
     *
     * Generated from protobuf enum <code>COLLABORATORS = 9;</code>
     */
    const COLLABORATORS = 9;
    /**
     * For arbitrary json object: "{...}"
     *
     * Generated from protobuf enum <code>JSON = 10;</code>
     */
    const JSON = 10;
    /**
     * Such as [1.0, 2.0, 3.5]
     *
     * Generated from protobuf enum <code>ARRAY_OF_NUMBERS = 11;</code>
     */
    const ARRAY_OF_NUMBERS = 11;
    /**
     * For selecting the embed_model_version_id for context based models.
     * This is a string type in the API request.
     *
     * Generated from protobuf enum <code>WORKFLOW_EMBED_MODELS = 12;</code>
     */
    const WORKFLOW_EMBED_MODELS = 12;
    /**
     * Such as ['a', 'b', 'cantaloupe']
     *
     * Generated from protobuf enum <code>ARRAY_OF_STRINGS = 13;</code>
     */
    const ARRAY_OF_STRINGS = 13;

    private static $valueToName = [
        self::INVALID_MODEL_TYPE_FIELD_TYPE => 'INVALID_MODEL_TYPE_FIELD_TYPE',
        self::BOOLEAN => 'BOOLEAN',
        self::STRING => 'STRING',
        self::NUMBER => 'NUMBER',
        self::ARRAY_OF_CONCEPTS => 'ARRAY_OF_CONCEPTS',
        self::ARRAY_OF_CONCEPTS_WITH_THRESHOLD => 'ARRAY_OF_CONCEPTS_WITH_THRESHOLD',
        self::RANGE => 'RANGE',
        self::ENUM => 'ENUM',
        self::COLLABORATORS => 'COLLABORATORS',
        self::JSON => 'JSON',
        self::ARRAY_OF_NUMBERS => 'ARRAY_OF_NUMBERS',
        self::WORKFLOW_EMBED_MODELS => 'WORKFLOW_EMBED_MODELS',
        self::ARRAY_OF_STRINGS => 'ARRAY_OF_STRINGS',
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
class_alias(ModelTypeFieldType::class, \Clarifai\Api\ModelTypeField_ModelTypeFieldType::class);

