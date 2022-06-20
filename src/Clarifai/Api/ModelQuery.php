<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ModelQuery
 *
 * Generated from protobuf message <code>clarifai.api.ModelQuery</code>
 */
class ModelQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * The name ofthe field. This supports wilcard queries like "gen*" to match "general" as an example.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Filter models by the specific model_type_id. See ListModelTypes for the list of ModelType.Id's
     * supported.
     *
     * Generated from protobuf field <code>string model_type_id = 3;</code>
     */
    protected $model_type_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name ofthe field. This supports wilcard queries like "gen*" to match "general" as an example.
     *     @type string $model_type_id
     *           Filter models by the specific model_type_id. See ListModelTypes for the list of ModelType.Id's
     *           supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name ofthe field. This supports wilcard queries like "gen*" to match "general" as an example.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name ofthe field. This supports wilcard queries like "gen*" to match "general" as an example.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Filter models by the specific model_type_id. See ListModelTypes for the list of ModelType.Id's
     * supported.
     *
     * Generated from protobuf field <code>string model_type_id = 3;</code>
     * @return string
     */
    public function getModelTypeId()
    {
        return $this->model_type_id;
    }

    /**
     * Filter models by the specific model_type_id. See ListModelTypes for the list of ModelType.Id's
     * supported.
     *
     * Generated from protobuf field <code>string model_type_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setModelTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_type_id = $var;

        return $this;
    }

}

