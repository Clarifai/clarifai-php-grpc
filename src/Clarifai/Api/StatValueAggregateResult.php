<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StatValueAggregateResult
 *
 * Generated from protobuf message <code>clarifai.api.StatValueAggregateResult</code>
 */
class StatValueAggregateResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of repeated aggregate values and their counts.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.StatValueAggregate stat_value_aggregates = 1;</code>
     */
    private $stat_value_aggregates;
    /**
     * The query that created these results.
     *
     * Generated from protobuf field <code>.clarifai.api.StatValueAggregateQuery stat_value_aggregate_query = 2;</code>
     */
    protected $stat_value_aggregate_query = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\StatValueAggregate[]|\Google\Protobuf\Internal\RepeatedField $stat_value_aggregates
     *           The list of repeated aggregate values and their counts.
     *     @type \Clarifai\Api\StatValueAggregateQuery $stat_value_aggregate_query
     *           The query that created these results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of repeated aggregate values and their counts.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.StatValueAggregate stat_value_aggregates = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatValueAggregates()
    {
        return $this->stat_value_aggregates;
    }

    /**
     * The list of repeated aggregate values and their counts.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.StatValueAggregate stat_value_aggregates = 1;</code>
     * @param \Clarifai\Api\StatValueAggregate[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatValueAggregates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\StatValueAggregate::class);
        $this->stat_value_aggregates = $arr;

        return $this;
    }

    /**
     * The query that created these results.
     *
     * Generated from protobuf field <code>.clarifai.api.StatValueAggregateQuery stat_value_aggregate_query = 2;</code>
     * @return \Clarifai\Api\StatValueAggregateQuery|null
     */
    public function getStatValueAggregateQuery()
    {
        return $this->stat_value_aggregate_query;
    }

    public function hasStatValueAggregateQuery()
    {
        return isset($this->stat_value_aggregate_query);
    }

    public function clearStatValueAggregateQuery()
    {
        unset($this->stat_value_aggregate_query);
    }

    /**
     * The query that created these results.
     *
     * Generated from protobuf field <code>.clarifai.api.StatValueAggregateQuery stat_value_aggregate_query = 2;</code>
     * @param \Clarifai\Api\StatValueAggregateQuery $var
     * @return $this
     */
    public function setStatValueAggregateQuery($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\StatValueAggregateQuery::class);
        $this->stat_value_aggregate_query = $var;

        return $this;
    }

}

