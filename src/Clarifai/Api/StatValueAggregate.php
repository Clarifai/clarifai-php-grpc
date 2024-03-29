<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StatValueAggregate
 *
 * Generated from protobuf message <code>clarifai.api.StatValueAggregate</code>
 */
class StatValueAggregate extends \Google\Protobuf\Internal\Message
{
    /**
     * The time of the aggregation. For example, if you aggregate over "HOUR" buckets then you can
     * expect each hour that has atleast one value (matching the rest of your query fields) will have
     * a StatValueAggregate with the time filled into that hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     */
    protected $time = null;
    /**
     * The value aggregated according to the stat_value_agg_type
     *
     * Generated from protobuf field <code>float aggregate_value = 2;</code>
     */
    protected $aggregate_value = 0.0;
    /**
     * The count of the stat values that were used in this aggregation.
     *
     * Generated from protobuf field <code>uint64 count = 3;</code>
     */
    protected $count = 0;
    /**
     * The tags for this aggregated_value and count. This will be filled in if tag groups were used in
     * the query to group aggregations.
     *
     * Generated from protobuf field <code>repeated string tags = 4;</code>
     */
    private $tags;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $time
     *           The time of the aggregation. For example, if you aggregate over "HOUR" buckets then you can
     *           expect each hour that has atleast one value (matching the rest of your query fields) will have
     *           a StatValueAggregate with the time filled into that hour.
     *     @type float $aggregate_value
     *           The value aggregated according to the stat_value_agg_type
     *     @type int|string $count
     *           The count of the stat values that were used in this aggregation.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           The tags for this aggregated_value and count. This will be filled in if tag groups were used in
     *           the query to group aggregations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The time of the aggregation. For example, if you aggregate over "HOUR" buckets then you can
     * expect each hour that has atleast one value (matching the rest of your query fields) will have
     * a StatValueAggregate with the time filled into that hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return $this->time;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     * The time of the aggregation. For example, if you aggregate over "HOUR" buckets then you can
     * expect each hour that has atleast one value (matching the rest of your query fields) will have
     * a StatValueAggregate with the time filled into that hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     * The value aggregated according to the stat_value_agg_type
     *
     * Generated from protobuf field <code>float aggregate_value = 2;</code>
     * @return float
     */
    public function getAggregateValue()
    {
        return $this->aggregate_value;
    }

    /**
     * The value aggregated according to the stat_value_agg_type
     *
     * Generated from protobuf field <code>float aggregate_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setAggregateValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->aggregate_value = $var;

        return $this;
    }

    /**
     * The count of the stat values that were used in this aggregation.
     *
     * Generated from protobuf field <code>uint64 count = 3;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * The count of the stat values that were used in this aggregation.
     *
     * Generated from protobuf field <code>uint64 count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * The tags for this aggregated_value and count. This will be filled in if tag groups were used in
     * the query to group aggregations.
     *
     * Generated from protobuf field <code>repeated string tags = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * The tags for this aggregated_value and count. This will be filled in if tag groups were used in
     * the query to group aggregations.
     *
     * Generated from protobuf field <code>repeated string tags = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

}

