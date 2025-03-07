<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * It might be better to do this as runner autoscaling so that resources
 * of a model are very simply what that model needs at minimum.
 * Note that resources for things like modes inside runners are not
 * related to how many replicas of those runners are needed to handle traffic.
 *
 * Generated from protobuf message <code>clarifai.api.AutoscaleConfig</code>
 */
class AutoscaleConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The minimum number of replicas for the runner to have.
     * Defaults to 0 which means autoscaling can scale down to zero.
     * If you want a replica always up then set to >= 1.
     *
     * Generated from protobuf field <code>uint32 min_replicas = 1;</code>
     */
    protected $min_replicas = 0;
    /**
     * The maximium number of replicas to scale up the runner to.
     *
     * Generated from protobuf field <code>uint32 max_replicas = 2;</code>
     */
    protected $max_replicas = 0;
    /**
     * The number of seconds of traffic history to consider when autoscaling.
     *
     * Generated from protobuf field <code>uint32 traffic_history_seconds = 3;</code>
     */
    protected $traffic_history_seconds = 0;
    /**
     * The time to wait before scaling down after the last request.
     *
     * Generated from protobuf field <code>uint32 scale_down_delay_seconds = 4;</code>
     */
    protected $scale_down_delay_seconds = 0;
    /**
     * The time to wait between scaling up replicas without burst traffic.
     *
     * Generated from protobuf field <code>uint32 scale_up_delay_seconds = 5;</code>
     */
    protected $scale_up_delay_seconds = 0;
    /**
     * Depending on your plan you may be able to enable packing of resources into a single node
     * for more compute and cost efficiency.
     *
     * Generated from protobuf field <code>bool disable_packing = 7;</code>
     */
    protected $disable_packing = false;
    /**
     * The idle time before scaling down to zero
     *
     * Generated from protobuf field <code>uint32 scale_to_zero_delay_seconds = 8;</code>
     */
    protected $scale_to_zero_delay_seconds = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_replicas
     *           The minimum number of replicas for the runner to have.
     *           Defaults to 0 which means autoscaling can scale down to zero.
     *           If you want a replica always up then set to >= 1.
     *     @type int $max_replicas
     *           The maximium number of replicas to scale up the runner to.
     *     @type int $traffic_history_seconds
     *           The number of seconds of traffic history to consider when autoscaling.
     *     @type int $scale_down_delay_seconds
     *           The time to wait before scaling down after the last request.
     *     @type int $scale_up_delay_seconds
     *           The time to wait between scaling up replicas without burst traffic.
     *     @type bool $disable_packing
     *           Depending on your plan you may be able to enable packing of resources into a single node
     *           for more compute and cost efficiency.
     *     @type int $scale_to_zero_delay_seconds
     *           The idle time before scaling down to zero
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum number of replicas for the runner to have.
     * Defaults to 0 which means autoscaling can scale down to zero.
     * If you want a replica always up then set to >= 1.
     *
     * Generated from protobuf field <code>uint32 min_replicas = 1;</code>
     * @return int
     */
    public function getMinReplicas()
    {
        return $this->min_replicas;
    }

    /**
     * The minimum number of replicas for the runner to have.
     * Defaults to 0 which means autoscaling can scale down to zero.
     * If you want a replica always up then set to >= 1.
     *
     * Generated from protobuf field <code>uint32 min_replicas = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMinReplicas($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_replicas = $var;

        return $this;
    }

    /**
     * The maximium number of replicas to scale up the runner to.
     *
     * Generated from protobuf field <code>uint32 max_replicas = 2;</code>
     * @return int
     */
    public function getMaxReplicas()
    {
        return $this->max_replicas;
    }

    /**
     * The maximium number of replicas to scale up the runner to.
     *
     * Generated from protobuf field <code>uint32 max_replicas = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxReplicas($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_replicas = $var;

        return $this;
    }

    /**
     * The number of seconds of traffic history to consider when autoscaling.
     *
     * Generated from protobuf field <code>uint32 traffic_history_seconds = 3;</code>
     * @return int
     */
    public function getTrafficHistorySeconds()
    {
        return $this->traffic_history_seconds;
    }

    /**
     * The number of seconds of traffic history to consider when autoscaling.
     *
     * Generated from protobuf field <code>uint32 traffic_history_seconds = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTrafficHistorySeconds($var)
    {
        GPBUtil::checkUint32($var);
        $this->traffic_history_seconds = $var;

        return $this;
    }

    /**
     * The time to wait before scaling down after the last request.
     *
     * Generated from protobuf field <code>uint32 scale_down_delay_seconds = 4;</code>
     * @return int
     */
    public function getScaleDownDelaySeconds()
    {
        return $this->scale_down_delay_seconds;
    }

    /**
     * The time to wait before scaling down after the last request.
     *
     * Generated from protobuf field <code>uint32 scale_down_delay_seconds = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setScaleDownDelaySeconds($var)
    {
        GPBUtil::checkUint32($var);
        $this->scale_down_delay_seconds = $var;

        return $this;
    }

    /**
     * The time to wait between scaling up replicas without burst traffic.
     *
     * Generated from protobuf field <code>uint32 scale_up_delay_seconds = 5;</code>
     * @return int
     */
    public function getScaleUpDelaySeconds()
    {
        return $this->scale_up_delay_seconds;
    }

    /**
     * The time to wait between scaling up replicas without burst traffic.
     *
     * Generated from protobuf field <code>uint32 scale_up_delay_seconds = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setScaleUpDelaySeconds($var)
    {
        GPBUtil::checkUint32($var);
        $this->scale_up_delay_seconds = $var;

        return $this;
    }

    /**
     * Depending on your plan you may be able to enable packing of resources into a single node
     * for more compute and cost efficiency.
     *
     * Generated from protobuf field <code>bool disable_packing = 7;</code>
     * @return bool
     */
    public function getDisablePacking()
    {
        return $this->disable_packing;
    }

    /**
     * Depending on your plan you may be able to enable packing of resources into a single node
     * for more compute and cost efficiency.
     *
     * Generated from protobuf field <code>bool disable_packing = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisablePacking($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_packing = $var;

        return $this;
    }

    /**
     * The idle time before scaling down to zero
     *
     * Generated from protobuf field <code>uint32 scale_to_zero_delay_seconds = 8;</code>
     * @return int
     */
    public function getScaleToZeroDelaySeconds()
    {
        return $this->scale_to_zero_delay_seconds;
    }

    /**
     * The idle time before scaling down to zero
     *
     * Generated from protobuf field <code>uint32 scale_to_zero_delay_seconds = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setScaleToZeroDelaySeconds($var)
    {
        GPBUtil::checkUint32($var);
        $this->scale_to_zero_delay_seconds = $var;

        return $this;
    }

}

