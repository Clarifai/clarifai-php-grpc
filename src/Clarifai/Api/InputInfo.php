<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InputInfo
 *
 * Generated from protobuf message <code>clarifai.api.InputInfo</code>
 */
class InputInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Map from the api.Data field names to the underlying model graph's inputs. When using a
     * PretrainedModelConfig the values in this map need to match the Triton config.pbtxt input names.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct fields_map = 1;</code>
     */
    protected $fields_map = null;
    /**
     * To control the inputs to the given model we allow a list of parameters
     * defined for each ModelType as a Struct (JSON object) here. During training or inference, the
     * settings contained within are sent to the training processor to alter the training process.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 2;</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Struct $fields_map
     *           Map from the api.Data field names to the underlying model graph's inputs. When using a
     *           PretrainedModelConfig the values in this map need to match the Triton config.pbtxt input names.
     *     @type \Google\Protobuf\Struct $params
     *           To control the inputs to the given model we allow a list of parameters
     *           defined for each ModelType as a Struct (JSON object) here. During training or inference, the
     *           settings contained within are sent to the training processor to alter the training process.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Map from the api.Data field names to the underlying model graph's inputs. When using a
     * PretrainedModelConfig the values in this map need to match the Triton config.pbtxt input names.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct fields_map = 1;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getFieldsMap()
    {
        return $this->fields_map;
    }

    public function hasFieldsMap()
    {
        return isset($this->fields_map);
    }

    public function clearFieldsMap()
    {
        unset($this->fields_map);
    }

    /**
     * Map from the api.Data field names to the underlying model graph's inputs. When using a
     * PretrainedModelConfig the values in this map need to match the Triton config.pbtxt input names.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct fields_map = 1;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setFieldsMap($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->fields_map = $var;

        return $this;
    }

    /**
     * To control the inputs to the given model we allow a list of parameters
     * defined for each ModelType as a Struct (JSON object) here. During training or inference, the
     * settings contained within are sent to the training processor to alter the training process.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 2;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * To control the inputs to the given model we allow a list of parameters
     * defined for each ModelType as a Struct (JSON object) here. During training or inference, the
     * settings contained within are sent to the training processor to alter the training process.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 2;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->params = $var;

        return $this;
    }

}

