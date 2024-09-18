<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * These are the resource needs of a given API object such as a model.
 * This is what they require as a minimum to run and will be used upon scheduling
 * as the request and limit for the k8s pod. If we want to separate limits and requests in the
 * future we can allow setting a limits ComputeInfo and a requests ComputeInfo.
 *
 * Generated from protobuf message <code>clarifai.api.ComputeInfo</code>
 */
class ComputeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Amount of CPUs to use. This follows kubernetes notation like: "1", "100m", "4.5", etc.
     * See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *
     * Generated from protobuf field <code>string cpu_limit = 6;</code>
     */
    protected $cpu_limit = '';
    /**
     * Amount of CPU memory to use as a minimum. This follows kubernetes notation like:
     * 1Ki, 1500Mi, 3Gi, 4Ti, etc.
     * See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *
     * Generated from protobuf field <code>string cpu_memory = 2;</code>
     */
    protected $cpu_memory = '';
    /**
     * Amount of GPU/TPUs to use.
     *
     * Generated from protobuf field <code>uint32 num_accelerators = 3;</code>
     */
    protected $num_accelerators = 0;
    /**
     * Amount of accelerator/GPU memory to use as a minimum.
     * This is defined per accelerator.
     * This follows the format used by kubernetes like 1Ki, 2Mi, 3Gi, 4Ti.
     * See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *
     * Generated from protobuf field <code>string accelerator_memory = 4;</code>
     */
    protected $accelerator_memory = '';
    /**
     * Or should it be removed completely and use the nodepool accelerator type itself.
     * These are the supported accelerators that the model can run on.
     *
     * Generated from protobuf field <code>repeated string accelerator_type = 5;</code>
     */
    private $accelerator_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cpu_limit
     *           Amount of CPUs to use. This follows kubernetes notation like: "1", "100m", "4.5", etc.
     *           See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *     @type string $cpu_memory
     *           Amount of CPU memory to use as a minimum. This follows kubernetes notation like:
     *           1Ki, 1500Mi, 3Gi, 4Ti, etc.
     *           See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *     @type int $num_accelerators
     *           Amount of GPU/TPUs to use.
     *     @type string $accelerator_memory
     *           Amount of accelerator/GPU memory to use as a minimum.
     *           This is defined per accelerator.
     *           This follows the format used by kubernetes like 1Ki, 2Mi, 3Gi, 4Ti.
     *           See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $accelerator_type
     *           Or should it be removed completely and use the nodepool accelerator type itself.
     *           These are the supported accelerators that the model can run on.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Amount of CPUs to use. This follows kubernetes notation like: "1", "100m", "4.5", etc.
     * See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *
     * Generated from protobuf field <code>string cpu_limit = 6;</code>
     * @return string
     */
    public function getCpuLimit()
    {
        return $this->cpu_limit;
    }

    /**
     * Amount of CPUs to use. This follows kubernetes notation like: "1", "100m", "4.5", etc.
     * See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *
     * Generated from protobuf field <code>string cpu_limit = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCpuLimit($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpu_limit = $var;

        return $this;
    }

    /**
     * Amount of CPU memory to use as a minimum. This follows kubernetes notation like:
     * 1Ki, 1500Mi, 3Gi, 4Ti, etc.
     * See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *
     * Generated from protobuf field <code>string cpu_memory = 2;</code>
     * @return string
     */
    public function getCpuMemory()
    {
        return $this->cpu_memory;
    }

    /**
     * Amount of CPU memory to use as a minimum. This follows kubernetes notation like:
     * 1Ki, 1500Mi, 3Gi, 4Ti, etc.
     * See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *
     * Generated from protobuf field <code>string cpu_memory = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCpuMemory($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpu_memory = $var;

        return $this;
    }

    /**
     * Amount of GPU/TPUs to use.
     *
     * Generated from protobuf field <code>uint32 num_accelerators = 3;</code>
     * @return int
     */
    public function getNumAccelerators()
    {
        return $this->num_accelerators;
    }

    /**
     * Amount of GPU/TPUs to use.
     *
     * Generated from protobuf field <code>uint32 num_accelerators = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumAccelerators($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_accelerators = $var;

        return $this;
    }

    /**
     * Amount of accelerator/GPU memory to use as a minimum.
     * This is defined per accelerator.
     * This follows the format used by kubernetes like 1Ki, 2Mi, 3Gi, 4Ti.
     * See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *
     * Generated from protobuf field <code>string accelerator_memory = 4;</code>
     * @return string
     */
    public function getAcceleratorMemory()
    {
        return $this->accelerator_memory;
    }

    /**
     * Amount of accelerator/GPU memory to use as a minimum.
     * This is defined per accelerator.
     * This follows the format used by kubernetes like 1Ki, 2Mi, 3Gi, 4Ti.
     * See https://kubernetes.io/docs/reference/kubernetes-api/common-definitions/quantity/
     *
     * Generated from protobuf field <code>string accelerator_memory = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAcceleratorMemory($var)
    {
        GPBUtil::checkString($var, True);
        $this->accelerator_memory = $var;

        return $this;
    }

    /**
     * Or should it be removed completely and use the nodepool accelerator type itself.
     * These are the supported accelerators that the model can run on.
     *
     * Generated from protobuf field <code>repeated string accelerator_type = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAcceleratorType()
    {
        return $this->accelerator_type;
    }

    /**
     * Or should it be removed completely and use the nodepool accelerator type itself.
     * These are the supported accelerators that the model can run on.
     *
     * Generated from protobuf field <code>repeated string accelerator_type = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAcceleratorType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->accelerator_type = $arr;

        return $this;
    }

}
