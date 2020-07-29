<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.TaskWorkerPartitionedStrategyInfo</code>
 */
class TaskWorkerPartitionedStrategyInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Define how the partitioning should work.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskWorkerPartitionedStrategyInfo.TaskWorkerPartitionedStrategy type = 1;</code>
     */
    protected $type = 0;
    /**
     * How many workers will label each input.
     *
     * Generated from protobuf field <code>int32 workers_per_input = 2;</code>
     */
    protected $workers_per_input = 0;
    /**
     * In case of weighted partitioning, map user ids to weights.
     * Each labeler will be assigned work proportional to its own weight as compared to the sum of total weight.
     * EXAMPLE:
     * If we have 3 workers, and weights = {1: 30, 2: 30, 3: 40},
     * then first worker will have assigned 30% of the work,
     * second worker will have assigned 30% of the work,
     * and third worker will have assigned 40% of the work.
     * You may use weights which add up to 100, but it's not necessary.
     * For example, weights {1: 30, 2: 30, 3: 40} are equivalent with {1: 3, 2: 3, 3: 4}
     * because they represent the same percentages: {1: 30%, 2: 30%, 3: 40%}.
     * NOTE:
     * Note that no worker should be assigned a weight percentage greater than 1/workers_per_input.
     * It is mathematically impossible to partition the work in such a case.
     * Why? Say, we have 3 workers. And workers_per_input = 2, i.e. each input must be labeled by 2 workers.
     * Let's assign weights {1: 51%, 2: 25%, 3: 24%}.
     * Note that first worker has a weight percentage higher than 1/workers_per_input = 1/2 = 50%.
     * If we have 100 inputs, then a total of 100 * workers_per_input = 200 cumulative inputs will be labeled by these 3 workers.
     * Worker 1 should label 102 cumulative inputs, while worker 2 and worker 3 will label 98 cumulative inputs together.
     * No matter how we assign the 98 cumulative inputs, the 2 workers will be able to label up to 98 actual inputs.
     * This means the remaining 2 inputs will be labeled only by worker 1. This contradicts the worker_per_input = 2 requirement.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct weights = 3;</code>
     */
    protected $weights = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Define how the partitioning should work.
     *     @type int $workers_per_input
     *           How many workers will label each input.
     *     @type \Google\Protobuf\Struct $weights
     *           In case of weighted partitioning, map user ids to weights.
     *           Each labeler will be assigned work proportional to its own weight as compared to the sum of total weight.
     *           EXAMPLE:
     *           If we have 3 workers, and weights = {1: 30, 2: 30, 3: 40},
     *           then first worker will have assigned 30% of the work,
     *           second worker will have assigned 30% of the work,
     *           and third worker will have assigned 40% of the work.
     *           You may use weights which add up to 100, but it's not necessary.
     *           For example, weights {1: 30, 2: 30, 3: 40} are equivalent with {1: 3, 2: 3, 3: 4}
     *           because they represent the same percentages: {1: 30%, 2: 30%, 3: 40%}.
     *           NOTE:
     *           Note that no worker should be assigned a weight percentage greater than 1/workers_per_input.
     *           It is mathematically impossible to partition the work in such a case.
     *           Why? Say, we have 3 workers. And workers_per_input = 2, i.e. each input must be labeled by 2 workers.
     *           Let's assign weights {1: 51%, 2: 25%, 3: 24%}.
     *           Note that first worker has a weight percentage higher than 1/workers_per_input = 1/2 = 50%.
     *           If we have 100 inputs, then a total of 100 * workers_per_input = 200 cumulative inputs will be labeled by these 3 workers.
     *           Worker 1 should label 102 cumulative inputs, while worker 2 and worker 3 will label 98 cumulative inputs together.
     *           No matter how we assign the 98 cumulative inputs, the 2 workers will be able to label up to 98 actual inputs.
     *           This means the remaining 2 inputs will be labeled only by worker 1. This contradicts the worker_per_input = 2 requirement.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Define how the partitioning should work.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskWorkerPartitionedStrategyInfo.TaskWorkerPartitionedStrategy type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Define how the partitioning should work.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskWorkerPartitionedStrategyInfo.TaskWorkerPartitionedStrategy type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Api\TaskWorkerPartitionedStrategyInfo_TaskWorkerPartitionedStrategy::class);
        $this->type = $var;

        return $this;
    }

    /**
     * How many workers will label each input.
     *
     * Generated from protobuf field <code>int32 workers_per_input = 2;</code>
     * @return int
     */
    public function getWorkersPerInput()
    {
        return $this->workers_per_input;
    }

    /**
     * How many workers will label each input.
     *
     * Generated from protobuf field <code>int32 workers_per_input = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setWorkersPerInput($var)
    {
        GPBUtil::checkInt32($var);
        $this->workers_per_input = $var;

        return $this;
    }

    /**
     * In case of weighted partitioning, map user ids to weights.
     * Each labeler will be assigned work proportional to its own weight as compared to the sum of total weight.
     * EXAMPLE:
     * If we have 3 workers, and weights = {1: 30, 2: 30, 3: 40},
     * then first worker will have assigned 30% of the work,
     * second worker will have assigned 30% of the work,
     * and third worker will have assigned 40% of the work.
     * You may use weights which add up to 100, but it's not necessary.
     * For example, weights {1: 30, 2: 30, 3: 40} are equivalent with {1: 3, 2: 3, 3: 4}
     * because they represent the same percentages: {1: 30%, 2: 30%, 3: 40%}.
     * NOTE:
     * Note that no worker should be assigned a weight percentage greater than 1/workers_per_input.
     * It is mathematically impossible to partition the work in such a case.
     * Why? Say, we have 3 workers. And workers_per_input = 2, i.e. each input must be labeled by 2 workers.
     * Let's assign weights {1: 51%, 2: 25%, 3: 24%}.
     * Note that first worker has a weight percentage higher than 1/workers_per_input = 1/2 = 50%.
     * If we have 100 inputs, then a total of 100 * workers_per_input = 200 cumulative inputs will be labeled by these 3 workers.
     * Worker 1 should label 102 cumulative inputs, while worker 2 and worker 3 will label 98 cumulative inputs together.
     * No matter how we assign the 98 cumulative inputs, the 2 workers will be able to label up to 98 actual inputs.
     * This means the remaining 2 inputs will be labeled only by worker 1. This contradicts the worker_per_input = 2 requirement.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct weights = 3;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getWeights()
    {
        return $this->weights;
    }

    /**
     * In case of weighted partitioning, map user ids to weights.
     * Each labeler will be assigned work proportional to its own weight as compared to the sum of total weight.
     * EXAMPLE:
     * If we have 3 workers, and weights = {1: 30, 2: 30, 3: 40},
     * then first worker will have assigned 30% of the work,
     * second worker will have assigned 30% of the work,
     * and third worker will have assigned 40% of the work.
     * You may use weights which add up to 100, but it's not necessary.
     * For example, weights {1: 30, 2: 30, 3: 40} are equivalent with {1: 3, 2: 3, 3: 4}
     * because they represent the same percentages: {1: 30%, 2: 30%, 3: 40%}.
     * NOTE:
     * Note that no worker should be assigned a weight percentage greater than 1/workers_per_input.
     * It is mathematically impossible to partition the work in such a case.
     * Why? Say, we have 3 workers. And workers_per_input = 2, i.e. each input must be labeled by 2 workers.
     * Let's assign weights {1: 51%, 2: 25%, 3: 24%}.
     * Note that first worker has a weight percentage higher than 1/workers_per_input = 1/2 = 50%.
     * If we have 100 inputs, then a total of 100 * workers_per_input = 200 cumulative inputs will be labeled by these 3 workers.
     * Worker 1 should label 102 cumulative inputs, while worker 2 and worker 3 will label 98 cumulative inputs together.
     * No matter how we assign the 98 cumulative inputs, the 2 workers will be able to label up to 98 actual inputs.
     * This means the remaining 2 inputs will be labeled only by worker 1. This contradicts the worker_per_input = 2 requirement.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct weights = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setWeights($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->weights = $var;

        return $this;
    }

}

