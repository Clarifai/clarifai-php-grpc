<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ModelType is a definition of a set of models that generally have the same input and output fields.
 * This is used to understand more about the possible models in our platform.
 *
 * Generated from protobuf message <code>clarifai.api.ModelType</code>
 */
class ModelType extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier for this model type.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * A display title for this model.
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
     * The list of input fields that this model expects as inputs.
     * Used to validate that request input data has the expected fields.
     *
     * Generated from protobuf field <code>repeated string input_fields = 5;</code>
     */
    private $input_fields;
    /**
     * The list of output fields that this model accepts.
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
     * Expected input layers of an uploaded model.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelLayerInfo expected_input_layers = 16;</code>
     */
    private $expected_input_layers;
    /**
     * Expected output layers of an uploaded model
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelLayerInfo expected_output_layers = 17;</code>
     */
    private $expected_output_layers;
    /**
     * What type of evaluation is supported for this model type.
     *
     * Generated from protobuf field <code>.clarifai.api.EvaluationType evaluation_type = 18;</code>
     */
    protected $evaluation_type = 0;
    /**
     * method signature for this model type
     * This will be used in the future to replace input_fields, output_fields, and model_type_fields
     * as it can define any python function call.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.MethodSignature method_signatures = 19;</code>
     */
    private $method_signatures;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           A unique identifier for this model type.
     *     @type string $title
     *           A display title for this model.
     *     @type string $description
     *           Description of this model type.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $input_fields
     *           The list of input fields that this model expects as inputs.
     *           Used to validate that request input data has the expected fields.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $output_fields
     *           The list of output fields that this model accepts.
     *     @type bool $trainable
     *           Is this model trainable in our platform.
     *     @type bool $creatable
     *           Is this model creatable. We have some pre-trained model types that users cannot create yet in
     *           model mode.
     *     @type bool $internal_only
     *           Is this model type only for internal users at this time.
     *     @type array<\Clarifai\Api\ModelTypeField>|\Google\Protobuf\Internal\RepeatedField $model_type_fields
     *           The remaining fields are definitions of the configurable fields that exist.
     *     @type bool $requires_sequential_frames
     *           For sequence models we need to know when processing that they require temporal time frames
     *           in sequential order. This will be true for model types like trackers as an example.
     *     @type array<\Clarifai\Api\ModelLayerInfo>|\Google\Protobuf\Internal\RepeatedField $expected_input_layers
     *           Expected input layers of an uploaded model.
     *     @type array<\Clarifai\Api\ModelLayerInfo>|\Google\Protobuf\Internal\RepeatedField $expected_output_layers
     *           Expected output layers of an uploaded model
     *     @type int $evaluation_type
     *           What type of evaluation is supported for this model type.
     *     @type array<\Clarifai\Api\MethodSignature>|\Google\Protobuf\Internal\RepeatedField $method_signatures
     *           method signature for this model type
     *           This will be used in the future to replace input_fields, output_fields, and model_type_fields
     *           as it can define any python function call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier for this model type.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique identifier for this model type.
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
     * A display title for this model.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A display title for this model.
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
     * The list of input fields that this model expects as inputs.
     * Used to validate that request input data has the expected fields.
     *
     * Generated from protobuf field <code>repeated string input_fields = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputFields()
    {
        return $this->input_fields;
    }

    /**
     * The list of input fields that this model expects as inputs.
     * Used to validate that request input data has the expected fields.
     *
     * Generated from protobuf field <code>repeated string input_fields = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input_fields = $arr;

        return $this;
    }

    /**
     * The list of output fields that this model accepts.
     *
     * Generated from protobuf field <code>repeated string output_fields = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputFields()
    {
        return $this->output_fields;
    }

    /**
     * The list of output fields that this model accepts.
     *
     * Generated from protobuf field <code>repeated string output_fields = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
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
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelTypeField model_type_fields = 11;</code>
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

    /**
     * Expected input layers of an uploaded model.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelLayerInfo expected_input_layers = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpectedInputLayers()
    {
        return $this->expected_input_layers;
    }

    /**
     * Expected input layers of an uploaded model.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelLayerInfo expected_input_layers = 16;</code>
     * @param array<\Clarifai\Api\ModelLayerInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpectedInputLayers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ModelLayerInfo::class);
        $this->expected_input_layers = $arr;

        return $this;
    }

    /**
     * Expected output layers of an uploaded model
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelLayerInfo expected_output_layers = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpectedOutputLayers()
    {
        return $this->expected_output_layers;
    }

    /**
     * Expected output layers of an uploaded model
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelLayerInfo expected_output_layers = 17;</code>
     * @param array<\Clarifai\Api\ModelLayerInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpectedOutputLayers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ModelLayerInfo::class);
        $this->expected_output_layers = $arr;

        return $this;
    }

    /**
     * What type of evaluation is supported for this model type.
     *
     * Generated from protobuf field <code>.clarifai.api.EvaluationType evaluation_type = 18;</code>
     * @return int
     */
    public function getEvaluationType()
    {
        return $this->evaluation_type;
    }

    /**
     * What type of evaluation is supported for this model type.
     *
     * Generated from protobuf field <code>.clarifai.api.EvaluationType evaluation_type = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setEvaluationType($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Api\EvaluationType::class);
        $this->evaluation_type = $var;

        return $this;
    }

    /**
     * method signature for this model type
     * This will be used in the future to replace input_fields, output_fields, and model_type_fields
     * as it can define any python function call.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.MethodSignature method_signatures = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMethodSignatures()
    {
        return $this->method_signatures;
    }

    /**
     * method signature for this model type
     * This will be used in the future to replace input_fields, output_fields, and model_type_fields
     * as it can define any python function call.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.MethodSignature method_signatures = 19;</code>
     * @param array<\Clarifai\Api\MethodSignature>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMethodSignatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\MethodSignature::class);
        $this->method_signatures = $arr;

        return $this;
    }

}

