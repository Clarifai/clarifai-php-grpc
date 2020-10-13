<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ModelSpec is a definition of a Model type. This is used in model mode of portal
 * to list out the possible models that can be created and can be used to understand more about
 * the possible models in our platform.
 *
 * Generated from protobuf message <code>clarifai.api.ModelType</code>
 */
class ModelType extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifies for this model type. This is differnt than the 'type' field below because
     * the 'type' can be re-used for differnet input and output combinations whereas 'id' is always
     * unique.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * title for this model in model gallery
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    protected $title = '';
    /**
     * Description of this model type.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * The type of the model to create. This is currently stored in output_info.type.
     *
     * Generated from protobuf field <code>string type = 4;</code>
     */
    protected $type = '';
    /**
     * The list of input fields that this model accepts. These are the keys of the Model's
     * InputInfo.fields_map
     *
     * Generated from protobuf field <code>repeated string input_fields = 5;</code>
     */
    private $input_fields;
    /**
     * The list of output fields that this model accepts. These are the keys of the Model's
     * OutputInfo.fields_map
     *
     * Generated from protobuf field <code>repeated string output_fields = 6;</code>
     */
    private $output_fields;
    /**
     * Is this model trainable in our platform.
     *
     * Generated from protobuf field <code>bool trainable = 8;</code>
     */
    protected $trainable = false;
    /**
     * Is this model creatable. We have some pre-trained model types that users cannot create yet in
     * model mode.
     *
     * Generated from protobuf field <code>bool creatable = 9;</code>
     */
    protected $creatable = false;
    /**
     * Is this model type only for internal users at this time.
     *
     * Generated from protobuf field <code>bool internal_only = 10;</code>
     */
    protected $internal_only = false;
    /**
     * The remaining fields are definitions of the configurable fields that exist.
     * Each field has path into the Model object such as "name" as a top level or "output_info.data"
     * if it's the Data obejct within the OutputInfo object. We deciddd to not break these up
     * into input_info, train_info and output_info related parameters and instead use the path
     * so that they are most flexible.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeField model_type_fields = 11;</code>
     */
    private $model_type_fields;
    /**
     * For sequence models we need to know when processing that they require temporal time frames
     * in sequential order. This will be true for model types like trackers as an example.
     *
     * Generated from protobuf field <code>bool requires_sequential_frames = 12;</code>
     */
    protected $requires_sequential_frames = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           A unique identifies for this model type. This is differnt than the 'type' field below because
     *           the 'type' can be re-used for differnet input and output combinations whereas 'id' is always
     *           unique.
     *     @type string $title
     *           title for this model in model gallery
     *     @type string $description
     *           Description of this model type.
     *     @type string $type
     *           The type of the model to create. This is currently stored in output_info.type.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $input_fields
     *           The list of input fields that this model accepts. These are the keys of the Model's
     *           InputInfo.fields_map
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $output_fields
     *           The list of output fields that this model accepts. These are the keys of the Model's
     *           OutputInfo.fields_map
     *     @type bool $trainable
     *           Is this model trainable in our platform.
     *     @type bool $creatable
     *           Is this model creatable. We have some pre-trained model types that users cannot create yet in
     *           model mode.
     *     @type bool $internal_only
     *           Is this model type only for internal users at this time.
     *     @type \Clarifai\Api\ModelTypeField[]|\Google\Protobuf\Internal\RepeatedField $model_type_fields
     *           The remaining fields are definitions of the configurable fields that exist.
     *           Each field has path into the Model object such as "name" as a top level or "output_info.data"
     *           if it's the Data obejct within the OutputInfo object. We deciddd to not break these up
     *           into input_info, train_info and output_info related parameters and instead use the path
     *           so that they are most flexible.
     *     @type bool $requires_sequential_frames
     *           For sequence models we need to know when processing that they require temporal time frames
     *           in sequential order. This will be true for model types like trackers as an example.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifies for this model type. This is differnt than the 'type' field below because
     * the 'type' can be re-used for differnet input and output combinations whereas 'id' is always
     * unique.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique identifies for this model type. This is differnt than the 'type' field below because
     * the 'type' can be re-used for differnet input and output combinations whereas 'id' is always
     * unique.
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
     * title for this model in model gallery
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * title for this model in model gallery
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Description of this model type.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of this model type.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * The type of the model to create. This is currently stored in output_info.type.
     *
     * Generated from protobuf field <code>string type = 4;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the model to create. This is currently stored in output_info.type.
     *
     * Generated from protobuf field <code>string type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The list of input fields that this model accepts. These are the keys of the Model's
     * InputInfo.fields_map
     *
     * Generated from protobuf field <code>repeated string input_fields = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputFields()
    {
        return $this->input_fields;
    }

    /**
     * The list of input fields that this model accepts. These are the keys of the Model's
     * InputInfo.fields_map
     *
     * Generated from protobuf field <code>repeated string input_fields = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input_fields = $arr;

        return $this;
    }

    /**
     * The list of output fields that this model accepts. These are the keys of the Model's
     * OutputInfo.fields_map
     *
     * Generated from protobuf field <code>repeated string output_fields = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputFields()
    {
        return $this->output_fields;
    }

    /**
     * The list of output fields that this model accepts. These are the keys of the Model's
     * OutputInfo.fields_map
     *
     * Generated from protobuf field <code>repeated string output_fields = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->output_fields = $arr;

        return $this;
    }

    /**
     * Is this model trainable in our platform.
     *
     * Generated from protobuf field <code>bool trainable = 8;</code>
     * @return bool
     */
    public function getTrainable()
    {
        return $this->trainable;
    }

    /**
     * Is this model trainable in our platform.
     *
     * Generated from protobuf field <code>bool trainable = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setTrainable($var)
    {
        GPBUtil::checkBool($var);
        $this->trainable = $var;

        return $this;
    }

    /**
     * Is this model creatable. We have some pre-trained model types that users cannot create yet in
     * model mode.
     *
     * Generated from protobuf field <code>bool creatable = 9;</code>
     * @return bool
     */
    public function getCreatable()
    {
        return $this->creatable;
    }

    /**
     * Is this model creatable. We have some pre-trained model types that users cannot create yet in
     * model mode.
     *
     * Generated from protobuf field <code>bool creatable = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setCreatable($var)
    {
        GPBUtil::checkBool($var);
        $this->creatable = $var;

        return $this;
    }

    /**
     * Is this model type only for internal users at this time.
     *
     * Generated from protobuf field <code>bool internal_only = 10;</code>
     * @return bool
     */
    public function getInternalOnly()
    {
        return $this->internal_only;
    }

    /**
     * Is this model type only for internal users at this time.
     *
     * Generated from protobuf field <code>bool internal_only = 10;</code>
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
     * The remaining fields are definitions of the configurable fields that exist.
     * Each field has path into the Model object such as "name" as a top level or "output_info.data"
     * if it's the Data obejct within the OutputInfo object. We deciddd to not break these up
     * into input_info, train_info and output_info related parameters and instead use the path
     * so that they are most flexible.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeField model_type_fields = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModelTypeFields()
    {
        return $this->model_type_fields;
    }

    /**
     * The remaining fields are definitions of the configurable fields that exist.
     * Each field has path into the Model object such as "name" as a top level or "output_info.data"
     * if it's the Data obejct within the OutputInfo object. We deciddd to not break these up
     * into input_info, train_info and output_info related parameters and instead use the path
     * so that they are most flexible.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeField model_type_fields = 11;</code>
     * @param \Clarifai\Api\ModelTypeField[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModelTypeFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ModelTypeField::class);
        $this->model_type_fields = $arr;

        return $this;
    }

    /**
     * For sequence models we need to know when processing that they require temporal time frames
     * in sequential order. This will be true for model types like trackers as an example.
     *
     * Generated from protobuf field <code>bool requires_sequential_frames = 12;</code>
     * @return bool
     */
    public function getRequiresSequentialFrames()
    {
        return $this->requires_sequential_frames;
    }

    /**
     * For sequence models we need to know when processing that they require temporal time frames
     * in sequential order. This will be true for model types like trackers as an example.
     *
     * Generated from protobuf field <code>bool requires_sequential_frames = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequiresSequentialFrames($var)
    {
        GPBUtil::checkBool($var);
        $this->requires_sequential_frames = $var;

        return $this;
    }

}

