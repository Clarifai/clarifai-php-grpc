<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A nodepool is a set of nodes dedicated for a given user's compute needs.
 * This compute will typically be consumed by runners and in the future other objects
 * like UI modules may be assigned to node pools.
 *
 * Generated from protobuf message <code>clarifai.api.Nodepool</code>
 */
class Nodepool extends \Google\Protobuf\Internal\Message
{
    /**
     * The user defined ID of the nodepool.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Short description about the nodepool.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * When the nodepool was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    protected $created_at = null;
    /**
     * When the nodepool was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 4;</code>
     */
    protected $modified_at = null;
    /**
     * The user/org that this nodepool belongs to.
     *
     * Generated from protobuf field <code>string user_id = 5;</code>
     */
    protected $user_id = '';
    /**
     * Which cluster this nodepool is within.
     *
     * Generated from protobuf field <code>.clarifai.api.ComputeCluster compute_cluster = 6;</code>
     */
    protected $compute_cluster = null;
    /**
     * Generated from protobuf field <code>.clarifai.api.NodeCapacityType node_capacity_type = 7;</code>
     */
    protected $node_capacity_type = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InstanceType instance_types = 8;</code>
     */
    private $instance_types;
    /**
     * Minimum number of instances in this nodepool. This allows the nodepool to scale down to this
     * amount. A nodepool needs a minimum of 1 instance.
     *
     * Generated from protobuf field <code>uint32 min_instances = 9;</code>
     */
    protected $min_instances = 0;
    /**
     * An upper limit on the number of instances in this nodepool. This allows the nodepool to scale
     * up to this amount.
     *
     * Generated from protobuf field <code>uint32 max_instances = 10;</code>
     */
    protected $max_instances = 0;
    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 11;</code>
     */
    protected $visibility = null;
    /**
     * To handle arbitrary json metadata:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 12;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The user defined ID of the nodepool.
     *     @type string $description
     *           Short description about the nodepool.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the nodepool was created.
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When the nodepool was last modified.
     *     @type string $user_id
     *           The user/org that this nodepool belongs to.
     *     @type \Clarifai\Api\ComputeCluster $compute_cluster
     *           Which cluster this nodepool is within.
     *     @type \Clarifai\Api\NodeCapacityType $node_capacity_type
     *     @type array<\Clarifai\Api\InstanceType>|\Google\Protobuf\Internal\RepeatedField $instance_types
     *     @type int $min_instances
     *           Minimum number of instances in this nodepool. This allows the nodepool to scale down to this
     *           amount. A nodepool needs a minimum of 1 instance.
     *     @type int $max_instances
     *           An upper limit on the number of instances in this nodepool. This allows the nodepool to scale
     *           up to this amount.
     *     @type \Clarifai\Api\Visibility $visibility
     *           The visibility field represents whether this message is privately/publicly visible.
     *           To be visible to the public the App that contains it AND the User that contains the App must
     *           also be publicly visible.
     *     @type \Google\Protobuf\Struct $metadata
     *           To handle arbitrary json metadata:
     *           https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The user defined ID of the nodepool.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The user defined ID of the nodepool.
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
     * Short description about the nodepool.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Short description about the nodepool.
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
     * When the nodepool was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * When the nodepool was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * When the nodepool was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    public function hasModifiedAt()
    {
        return isset($this->modified_at);
    }

    public function clearModifiedAt()
    {
        unset($this->modified_at);
    }

    /**
     * When the nodepool was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modified_at = $var;

        return $this;
    }

    /**
     * The user/org that this nodepool belongs to.
     *
     * Generated from protobuf field <code>string user_id = 5;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user/org that this nodepool belongs to.
     *
     * Generated from protobuf field <code>string user_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Which cluster this nodepool is within.
     *
     * Generated from protobuf field <code>.clarifai.api.ComputeCluster compute_cluster = 6;</code>
     * @return \Clarifai\Api\ComputeCluster|null
     */
    public function getComputeCluster()
    {
        return $this->compute_cluster;
    }

    public function hasComputeCluster()
    {
        return isset($this->compute_cluster);
    }

    public function clearComputeCluster()
    {
        unset($this->compute_cluster);
    }

    /**
     * Which cluster this nodepool is within.
     *
     * Generated from protobuf field <code>.clarifai.api.ComputeCluster compute_cluster = 6;</code>
     * @param \Clarifai\Api\ComputeCluster $var
     * @return $this
     */
    public function setComputeCluster($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ComputeCluster::class);
        $this->compute_cluster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.NodeCapacityType node_capacity_type = 7;</code>
     * @return \Clarifai\Api\NodeCapacityType|null
     */
    public function getNodeCapacityType()
    {
        return $this->node_capacity_type;
    }

    public function hasNodeCapacityType()
    {
        return isset($this->node_capacity_type);
    }

    public function clearNodeCapacityType()
    {
        unset($this->node_capacity_type);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.NodeCapacityType node_capacity_type = 7;</code>
     * @param \Clarifai\Api\NodeCapacityType $var
     * @return $this
     */
    public function setNodeCapacityType($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\NodeCapacityType::class);
        $this->node_capacity_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InstanceType instance_types = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceTypes()
    {
        return $this->instance_types;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InstanceType instance_types = 8;</code>
     * @param array<\Clarifai\Api\InstanceType>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\InstanceType::class);
        $this->instance_types = $arr;

        return $this;
    }

    /**
     * Minimum number of instances in this nodepool. This allows the nodepool to scale down to this
     * amount. A nodepool needs a minimum of 1 instance.
     *
     * Generated from protobuf field <code>uint32 min_instances = 9;</code>
     * @return int
     */
    public function getMinInstances()
    {
        return $this->min_instances;
    }

    /**
     * Minimum number of instances in this nodepool. This allows the nodepool to scale down to this
     * amount. A nodepool needs a minimum of 1 instance.
     *
     * Generated from protobuf field <code>uint32 min_instances = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setMinInstances($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_instances = $var;

        return $this;
    }

    /**
     * An upper limit on the number of instances in this nodepool. This allows the nodepool to scale
     * up to this amount.
     *
     * Generated from protobuf field <code>uint32 max_instances = 10;</code>
     * @return int
     */
    public function getMaxInstances()
    {
        return $this->max_instances;
    }

    /**
     * An upper limit on the number of instances in this nodepool. This allows the nodepool to scale
     * up to this amount.
     *
     * Generated from protobuf field <code>uint32 max_instances = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxInstances($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_instances = $var;

        return $this;
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 11;</code>
     * @return \Clarifai\Api\Visibility|null
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    public function hasVisibility()
    {
        return isset($this->visibility);
    }

    public function clearVisibility()
    {
        unset($this->visibility);
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 11;</code>
     * @param \Clarifai\Api\Visibility $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * To handle arbitrary json metadata:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 12;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * To handle arbitrary json metadata:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 12;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

}

