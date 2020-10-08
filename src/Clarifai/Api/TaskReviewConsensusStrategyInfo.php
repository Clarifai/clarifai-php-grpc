<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.TaskReviewConsensusStrategyInfo</code>
 */
class TaskReviewConsensusStrategyInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of labelers that need to agree in order to automatically approve an annotation.
     *
     * Generated from protobuf field <code>uint32 approval_threshold = 2;</code>
     */
    protected $approval_threshold = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $approval_threshold
     *           The number of labelers that need to agree in order to automatically approve an annotation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of labelers that need to agree in order to automatically approve an annotation.
     *
     * Generated from protobuf field <code>uint32 approval_threshold = 2;</code>
     * @return int
     */
    public function getApprovalThreshold()
    {
        return $this->approval_threshold;
    }

    /**
     * The number of labelers that need to agree in order to automatically approve an annotation.
     *
     * Generated from protobuf field <code>uint32 approval_threshold = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setApprovalThreshold($var)
    {
        GPBUtil::checkUint32($var);
        $this->approval_threshold = $var;

        return $this;
    }

}

