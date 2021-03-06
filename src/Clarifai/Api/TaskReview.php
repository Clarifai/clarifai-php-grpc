<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.TaskReview</code>
 */
class TaskReview extends \Google\Protobuf\Internal\Message
{
    /**
     * Task review strategy.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskReview.TaskReviewStrategy strategy = 1;</code>
     */
    protected $strategy = 0;
    /**
     * Who will review this task.
     *
     * Generated from protobuf field <code>repeated string user_ids = 2;</code>
     */
    private $user_ids;
    protected $strategy_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $strategy
     *           Task review strategy.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $user_ids
     *           Who will review this task.
     *     @type \Clarifai\Api\TaskReviewManualStrategyInfo $manual_strategy_info
     *     @type \Clarifai\Api\TaskReviewConsensusStrategyInfo $consensus_strategy_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Task review strategy.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskReview.TaskReviewStrategy strategy = 1;</code>
     * @return int
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * Task review strategy.
     *
     * Generated from protobuf field <code>.clarifai.api.TaskReview.TaskReviewStrategy strategy = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStrategy($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Api\TaskReview_TaskReviewStrategy::class);
        $this->strategy = $var;

        return $this;
    }

    /**
     * Who will review this task.
     *
     * Generated from protobuf field <code>repeated string user_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIds()
    {
        return $this->user_ids;
    }

    /**
     * Who will review this task.
     *
     * Generated from protobuf field <code>repeated string user_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskReviewManualStrategyInfo manual_strategy_info = 3;</code>
     * @return \Clarifai\Api\TaskReviewManualStrategyInfo
     */
    public function getManualStrategyInfo()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskReviewManualStrategyInfo manual_strategy_info = 3;</code>
     * @param \Clarifai\Api\TaskReviewManualStrategyInfo $var
     * @return $this
     */
    public function setManualStrategyInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TaskReviewManualStrategyInfo::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskReviewConsensusStrategyInfo consensus_strategy_info = 4;</code>
     * @return \Clarifai\Api\TaskReviewConsensusStrategyInfo
     */
    public function getConsensusStrategyInfo()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.TaskReviewConsensusStrategyInfo consensus_strategy_info = 4;</code>
     * @param \Clarifai\Api\TaskReviewConsensusStrategyInfo $var
     * @return $this
     */
    public function setConsensusStrategyInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TaskReviewConsensusStrategyInfo::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStrategyInfo()
    {
        return $this->whichOneof("strategy_info");
    }

}

