<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ModelTypeEnumOption
 *
 * Generated from protobuf message <code>clarifai.api.ModelTypeEnumOption</code>
 */
class ModelTypeEnumOption extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique value of the enum option.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * List of other ID values that are equivalent with this ID.
     * This allows the user to choose this option by multiple IDs.
     * Example: if enum is "Phone Number Prefix", you could add an option that is selectable by two values:
     * 1. ID: "Estonia"
     * 2. Alias: 37
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeEnumOptionAlias aliases = 5;</code>
     */
    private $aliases;
    /**
     * Optional description for this enum option.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * These are additional fields that are specific to this enum choice. This allows
     * us to use enums to control configuration settings as well.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeField model_type_fields = 3;</code>
     */
    private $model_type_fields;
    /**
     * If this enum option should be internal only.
     *
     * Generated from protobuf field <code>bool internal_only = 4;</code>
     */
    protected $internal_only = false;
    /**
     * Whether this is the recommended enum option. Set to `true` when there 
     * are multiple options, and one is shown to be better than the others.
     *
     * Generated from protobuf field <code>bool recommended = 6;</code>
     */
    protected $recommended = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The unique value of the enum option.
     *     @type array<\Clarifai\Api\ModelTypeEnumOptionAlias>|\Google\Protobuf\Internal\RepeatedField $aliases
     *           List of other ID values that are equivalent with this ID.
     *           This allows the user to choose this option by multiple IDs.
     *           Example: if enum is "Phone Number Prefix", you could add an option that is selectable by two values:
     *           1. ID: "Estonia"
     *           2. Alias: 37
     *     @type string $description
     *           Optional description for this enum option.
     *     @type array<\Clarifai\Api\ModelTypeField>|\Google\Protobuf\Internal\RepeatedField $model_type_fields
     *           These are additional fields that are specific to this enum choice. This allows
     *           us to use enums to control configuration settings as well.
     *     @type bool $internal_only
     *           If this enum option should be internal only.
     *     @type bool $recommended
     *           Whether this is the recommended enum option. Set to `true` when there 
     *           are multiple options, and one is shown to be better than the others.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique value of the enum option.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The unique value of the enum option.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * List of other ID values that are equivalent with this ID.
     * This allows the user to choose this option by multiple IDs.
     * Example: if enum is "Phone Number Prefix", you could add an option that is selectable by two values:
     * 1. ID: "Estonia"
     * 2. Alias: 37
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeEnumOptionAlias aliases = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * List of other ID values that are equivalent with this ID.
     * This allows the user to choose this option by multiple IDs.
     * Example: if enum is "Phone Number Prefix", you could add an option that is selectable by two values:
     * 1. ID: "Estonia"
     * 2. Alias: 37
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeEnumOptionAlias aliases = 5;</code>
     * @param array<\Clarifai\Api\ModelTypeEnumOptionAlias>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAliases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ModelTypeEnumOptionAlias::class);
        $this->aliases = $arr;

        return $this;
    }

    /**
     * Optional description for this enum option.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional description for this enum option.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * These are additional fields that are specific to this enum choice. This allows
     * us to use enums to control configuration settings as well.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeField model_type_fields = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModelTypeFields()
    {
        return $this->model_type_fields;
    }

    /**
     * These are additional fields that are specific to this enum choice. This allows
     * us to use enums to control configuration settings as well.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeField model_type_fields = 3;</code>
     * @param array<\Clarifai\Api\ModelTypeField>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModelTypeFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ModelTypeField::class);
        $this->model_type_fields = $arr;

        return $this;
    }

    /**
     * If this enum option should be internal only.
     *
     * Generated from protobuf field <code>bool internal_only = 4;</code>
     * @return bool
     */
    public function getInternalOnly()
    {
        return $this->internal_only;
    }

    /**
     * If this enum option should be internal only.
     *
     * Generated from protobuf field <code>bool internal_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setInternalOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->internal_only = $var;

        return $this;
    }

    /**
     * Whether this is the recommended enum option. Set to `true` when there 
     * are multiple options, and one is shown to be better than the others.
     *
     * Generated from protobuf field <code>bool recommended = 6;</code>
     * @return bool
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * Whether this is the recommended enum option. Set to `true` when there 
     * are multiple options, and one is shown to be better than the others.
     *
     * Generated from protobuf field <code>bool recommended = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setRecommended($var)
    {
        GPBUtil::checkBool($var);
        $this->recommended = $var;

        return $this;
    }

}

