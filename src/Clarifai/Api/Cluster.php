<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cluster data
 *
 * Generated from protobuf message <code>clarifai.api.Cluster</code>
 */
class Cluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Number of annotations tied to the cluster in the app
     *
     * Generated from protobuf field <code>uint32 count = 2;</code>
     */
    protected $count = 0;
    /**
     * The score assigned to this cluster.
     * For List Clusters endpoint, this represents percentage of inputs in the app assigned to this cluster.
     *
     * Generated from protobuf field <code>float score = 3;</code>
     */
    protected $score = 0.0;
    /**
     * Representative hits for cluster (for now we only return 1)
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Hit hits = 4;</code>
     */
    private $hits;
    /**
     * Generated from protobuf field <code>repeated float projection = 5;</code>
     */
    private $projection;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $count
     *           Number of annotations tied to the cluster in the app
     *     @type float $score
     *           The score assigned to this cluster.
     *           For List Clusters endpoint, this represents percentage of inputs in the app assigned to this cluster.
     *     @type array<\Clarifai\Api\Hit>|\Google\Protobuf\Internal\RepeatedField $hits
     *           Representative hits for cluster (for now we only return 1)
     *     @type array<float>|\Google\Protobuf\Internal\RepeatedField $projection
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Number of annotations tied to the cluster in the app
     *
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of annotations tied to the cluster in the app
     *
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * The score assigned to this cluster.
     * For List Clusters endpoint, this represents percentage of inputs in the app assigned to this cluster.
     *
     * Generated from protobuf field <code>float score = 3;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * The score assigned to this cluster.
     * For List Clusters endpoint, this represents percentage of inputs in the app assigned to this cluster.
     *
     * Generated from protobuf field <code>float score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Representative hits for cluster (for now we only return 1)
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Hit hits = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Representative hits for cluster (for now we only return 1)
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Hit hits = 4;</code>
     * @param array<\Clarifai\Api\Hit>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Hit::class);
        $this->hits = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float projection = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProjection()
    {
        return $this->projection;
    }

    /**
     * Generated from protobuf field <code>repeated float projection = 5;</code>
     * @param array<float>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProjection($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->projection = $arr;

        return $this;
    }

}

