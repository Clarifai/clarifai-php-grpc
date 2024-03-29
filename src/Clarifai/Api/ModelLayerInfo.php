<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ModelLayerInfo</code>
 */
class ModelLayerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The api.Data field this layer will be parsed into
     *
     * Generated from protobuf field <code>string data_field_name = 1;</code>
     */
    protected $data_field_name = '';
    /**
     * Description of the expected shape. Can support multiple support layer shapes.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.LayerShape shapes = 2;</code>
     */
    private $shapes;
    /**
     * Brief description about the layer if needed
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Whether this layer should have a label_filename specified and provided
     *
     * Generated from protobuf field <code>bool requires_label_filename = 4;</code>
     */
    protected $requires_label_filename = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data_field_name
     *           The api.Data field this layer will be parsed into
     *     @type array<\Clarifai\Api\LayerShape>|\Google\Protobuf\Internal\RepeatedField $shapes
     *           Description of the expected shape. Can support multiple support layer shapes.
     *     @type string $description
     *           Brief description about the layer if needed
     *     @type bool $requires_label_filename
     *           Whether this layer should have a label_filename specified and provided
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The api.Data field this layer will be parsed into
     *
     * Generated from protobuf field <code>string data_field_name = 1;</code>
     * @return string
     */
    public function getDataFieldName()
    {
        return $this->data_field_name;
    }

    /**
     * The api.Data field this layer will be parsed into
     *
     * Generated from protobuf field <code>string data_field_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDataFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_field_name = $var;

        return $this;
    }

    /**
     * Description of the expected shape. Can support multiple support layer shapes.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.LayerShape shapes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShapes()
    {
        return $this->shapes;
    }

    /**
     * Description of the expected shape. Can support multiple support layer shapes.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.LayerShape shapes = 2;</code>
     * @param array<\Clarifai\Api\LayerShape>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShapes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\LayerShape::class);
        $this->shapes = $arr;

        return $this;
    }

    /**
     * Brief description about the layer if needed
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Brief description about the layer if needed
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
     * Whether this layer should have a label_filename specified and provided
     *
     * Generated from protobuf field <code>bool requires_label_filename = 4;</code>
     * @return bool
     */
    public function getRequiresLabelFilename()
    {
        return $this->requires_label_filename;
    }

    /**
     * Whether this layer should have a label_filename specified and provided
     *
     * Generated from protobuf field <code>bool requires_label_filename = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequiresLabelFilename($var)
    {
        GPBUtil::checkBool($var);
        $this->requires_label_filename = $var;

        return $this;
    }

}

