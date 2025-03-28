<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.CpuMetrics</code>
 */
class CpuMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Time of the event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     */
    protected $timestamp = null;
    /**
     * CPU utilization.
     *
     * Generated from protobuf field <code>float cpu_utilization_pct = 2;</code>
     */
    protected $cpu_utilization_pct = 0.0;
    /**
     * Memory utilization.
     *
     * Generated from protobuf field <code>float memory_utilization_pct = 3;</code>
     */
    protected $memory_utilization_pct = 0.0;
    /**
     * CPU millicores.
     *
     * Generated from protobuf field <code>int64 millicores = 4;</code>
     */
    protected $millicores = 0;
    /**
     * Memory bytes.
     *
     * Generated from protobuf field <code>int64 memory_bytes = 5;</code>
     */
    protected $memory_bytes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $timestamp
     *           Time of the event.
     *     @type float $cpu_utilization_pct
     *           CPU utilization.
     *     @type float $memory_utilization_pct
     *           Memory utilization.
     *     @type int|string $millicores
     *           CPU millicores.
     *     @type int|string $memory_bytes
     *           Memory bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Time of the event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Time of the event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * CPU utilization.
     *
     * Generated from protobuf field <code>float cpu_utilization_pct = 2;</code>
     * @return float
     */
    public function getCpuUtilizationPct()
    {
        return $this->cpu_utilization_pct;
    }

    /**
     * CPU utilization.
     *
     * Generated from protobuf field <code>float cpu_utilization_pct = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setCpuUtilizationPct($var)
    {
        GPBUtil::checkFloat($var);
        $this->cpu_utilization_pct = $var;

        return $this;
    }

    /**
     * Memory utilization.
     *
     * Generated from protobuf field <code>float memory_utilization_pct = 3;</code>
     * @return float
     */
    public function getMemoryUtilizationPct()
    {
        return $this->memory_utilization_pct;
    }

    /**
     * Memory utilization.
     *
     * Generated from protobuf field <code>float memory_utilization_pct = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setMemoryUtilizationPct($var)
    {
        GPBUtil::checkFloat($var);
        $this->memory_utilization_pct = $var;

        return $this;
    }

    /**
     * CPU millicores.
     *
     * Generated from protobuf field <code>int64 millicores = 4;</code>
     * @return int|string
     */
    public function getMillicores()
    {
        return $this->millicores;
    }

    /**
     * CPU millicores.
     *
     * Generated from protobuf field <code>int64 millicores = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMillicores($var)
    {
        GPBUtil::checkInt64($var);
        $this->millicores = $var;

        return $this;
    }

    /**
     * Memory bytes.
     *
     * Generated from protobuf field <code>int64 memory_bytes = 5;</code>
     * @return int|string
     */
    public function getMemoryBytes()
    {
        return $this->memory_bytes;
    }

    /**
     * Memory bytes.
     *
     * Generated from protobuf field <code>int64 memory_bytes = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemoryBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->memory_bytes = $var;

        return $this;
    }

}

