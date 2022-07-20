<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\AddConcepts $add_concepts
     *           Create a new annotation with the provided concept(s) for all the inputs in input source (mentioned above).
     *     @type \Clarifai\Api\DeleteConcepts $delete_concepts
     *           Remove the matching concept(s) for all the inputs in input source (mentioned above).
     *     @type \Clarifai\Api\AddMetadata $add_metadata
     *           Add the provided metadata to the input level annotation for all the inputs in input source (mentioned above).
     *           If the key(s) already exists, it will overwrite the key(s) with the corresponding new value(s).
     *     @type \Clarifai\Api\DeleteMetadata $delete_metadata
     *           Remove the key, value pairs that match the given metadata from the existing input level Annotations' metadata
     *           for all the inputs in input source (mentioned above).
     *     @type \Clarifai\Api\OverwriteGeo $overwrite_geo
     *           Add the provided geo info for all the inputs in input source (mentioned above).
     *     @type \Clarifai\Api\DeleteGeo $delete_geo
     *           Delete Geo info for all the inputs in input source (mentioned above).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Create a new annotation with the provided concept(s) for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.AddConcepts add_concepts = 1;</code>
     * @return \Clarifai\Api\AddConcepts|null
     */
    public function getAddConcepts()
    {
        return $this->readOneof(1);
    }

    public function hasAddConcepts()
    {
        return $this->hasOneof(1);
    }

    /**
     * Create a new annotation with the provided concept(s) for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.AddConcepts add_concepts = 1;</code>
     * @param \Clarifai\Api\AddConcepts $var
     * @return $this
     */
    public function setAddConcepts($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\AddConcepts::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove the matching concept(s) for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.DeleteConcepts delete_concepts = 2;</code>
     * @return \Clarifai\Api\DeleteConcepts|null
     */
    public function getDeleteConcepts()
    {
        return $this->readOneof(2);
    }

    public function hasDeleteConcepts()
    {
        return $this->hasOneof(2);
    }

    /**
     * Remove the matching concept(s) for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.DeleteConcepts delete_concepts = 2;</code>
     * @param \Clarifai\Api\DeleteConcepts $var
     * @return $this
     */
    public function setDeleteConcepts($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DeleteConcepts::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Add the provided metadata to the input level annotation for all the inputs in input source (mentioned above).
     * If the key(s) already exists, it will overwrite the key(s) with the corresponding new value(s).
     *
     * Generated from protobuf field <code>.clarifai.api.AddMetadata add_metadata = 3;</code>
     * @return \Clarifai\Api\AddMetadata|null
     */
    public function getAddMetadata()
    {
        return $this->readOneof(3);
    }

    public function hasAddMetadata()
    {
        return $this->hasOneof(3);
    }

    /**
     * Add the provided metadata to the input level annotation for all the inputs in input source (mentioned above).
     * If the key(s) already exists, it will overwrite the key(s) with the corresponding new value(s).
     *
     * Generated from protobuf field <code>.clarifai.api.AddMetadata add_metadata = 3;</code>
     * @param \Clarifai\Api\AddMetadata $var
     * @return $this
     */
    public function setAddMetadata($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\AddMetadata::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Remove the key, value pairs that match the given metadata from the existing input level Annotations' metadata
     * for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.DeleteMetadata delete_metadata = 4;</code>
     * @return \Clarifai\Api\DeleteMetadata|null
     */
    public function getDeleteMetadata()
    {
        return $this->readOneof(4);
    }

    public function hasDeleteMetadata()
    {
        return $this->hasOneof(4);
    }

    /**
     * Remove the key, value pairs that match the given metadata from the existing input level Annotations' metadata
     * for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.DeleteMetadata delete_metadata = 4;</code>
     * @param \Clarifai\Api\DeleteMetadata $var
     * @return $this
     */
    public function setDeleteMetadata($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DeleteMetadata::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Add the provided geo info for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.OverwriteGeo overwrite_geo = 5;</code>
     * @return \Clarifai\Api\OverwriteGeo|null
     */
    public function getOverwriteGeo()
    {
        return $this->readOneof(5);
    }

    public function hasOverwriteGeo()
    {
        return $this->hasOneof(5);
    }

    /**
     * Add the provided geo info for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.OverwriteGeo overwrite_geo = 5;</code>
     * @param \Clarifai\Api\OverwriteGeo $var
     * @return $this
     */
    public function setOverwriteGeo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\OverwriteGeo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Delete Geo info for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.DeleteGeo delete_geo = 6;</code>
     * @return \Clarifai\Api\DeleteGeo|null
     */
    public function getDeleteGeo()
    {
        return $this->readOneof(6);
    }

    public function hasDeleteGeo()
    {
        return $this->hasOneof(6);
    }

    /**
     * Delete Geo info for all the inputs in input source (mentioned above).
     *
     * Generated from protobuf field <code>.clarifai.api.DeleteGeo delete_geo = 6;</code>
     * @param \Clarifai\Api\DeleteGeo $var
     * @return $this
     */
    public function setDeleteGeo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DeleteGeo::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

