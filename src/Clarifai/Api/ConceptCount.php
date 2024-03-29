<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ConceptCount
 *
 * Generated from protobuf message <code>clarifai.api.ConceptCount</code>
 */
class ConceptCount extends \Google\Protobuf\Internal\Message
{
    /**
     * The concept's unique id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The name of the concept.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * The total count for concepts labeled for all asset statues (processing, to_process, processed, error)
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount concept_type_count = 3;</code>
     */
    protected $concept_type_count = null;
    /**
     * The detail count for different assets status
     *
     * Generated from protobuf field <code>.clarifai.api.DetailConceptCount detail_concept_count = 4;</code>
     */
    protected $detail_concept_count = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The concept's unique id.
     *     @type string $name
     *           The name of the concept.
     *     @type \Clarifai\Api\ConceptTypeCount $concept_type_count
     *           The total count for concepts labeled for all asset statues (processing, to_process, processed, error)
     *     @type \Clarifai\Api\DetailConceptCount $detail_concept_count
     *           The detail count for different assets status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The concept's unique id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The concept's unique id.
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
     * The name of the concept.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the concept.
     *
     * Generated from protobuf field <code>string name = 2;</code>
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
     * The total count for concepts labeled for all asset statues (processing, to_process, processed, error)
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount concept_type_count = 3;</code>
     * @return \Clarifai\Api\ConceptTypeCount|null
     */
    public function getConceptTypeCount()
    {
        return $this->concept_type_count;
    }

    public function hasConceptTypeCount()
    {
        return isset($this->concept_type_count);
    }

    public function clearConceptTypeCount()
    {
        unset($this->concept_type_count);
    }

    /**
     * The total count for concepts labeled for all asset statues (processing, to_process, processed, error)
     *
     * Generated from protobuf field <code>.clarifai.api.ConceptTypeCount concept_type_count = 3;</code>
     * @param \Clarifai\Api\ConceptTypeCount $var
     * @return $this
     */
    public function setConceptTypeCount($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ConceptTypeCount::class);
        $this->concept_type_count = $var;

        return $this;
    }

    /**
     * The detail count for different assets status
     *
     * Generated from protobuf field <code>.clarifai.api.DetailConceptCount detail_concept_count = 4;</code>
     * @return \Clarifai\Api\DetailConceptCount|null
     */
    public function getDetailConceptCount()
    {
        return $this->detail_concept_count;
    }

    public function hasDetailConceptCount()
    {
        return isset($this->detail_concept_count);
    }

    public function clearDetailConceptCount()
    {
        unset($this->detail_concept_count);
    }

    /**
     * The detail count for different assets status
     *
     * Generated from protobuf field <code>.clarifai.api.DetailConceptCount detail_concept_count = 4;</code>
     * @param \Clarifai\Api\DetailConceptCount $var
     * @return $this
     */
    public function setDetailConceptCount($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DetailConceptCount::class);
        $this->detail_concept_count = $var;

        return $this;
    }

}

