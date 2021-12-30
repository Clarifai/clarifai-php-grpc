<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MultiScopeDepsResponse
 *
 * Generated from protobuf message <code>clarifai.api.MultiScopeDepsResponse</code>
 */
class MultiScopeDepsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The status of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * scopes is a list of low-level scopes and their dependencies.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ScopeDeps scope_deps = 2;</code>
     */
    private $scope_deps;
    /**
     * endpoint_scopes is a listof all the publicly available endponts which can be
     * used as scopes as well. A call to each of those endpoint depends on a subset
     * of the above "scopes"
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EndpointDeps endpoint_deps = 3;</code>
     */
    private $endpoint_deps;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           The status of the request.
     *     @type \Clarifai\Api\ScopeDeps[]|\Google\Protobuf\Internal\RepeatedField $scope_deps
     *           scopes is a list of low-level scopes and their dependencies.
     *     @type \Clarifai\Api\EndpointDeps[]|\Google\Protobuf\Internal\RepeatedField $endpoint_deps
     *           endpoint_scopes is a listof all the publicly available endponts which can be
     *           used as scopes as well. A call to each of those endpoint depends on a subset
     *           of the above "scopes"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The status of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * scopes is a list of low-level scopes and their dependencies.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ScopeDeps scope_deps = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopeDeps()
    {
        return $this->scope_deps;
    }

    /**
     * scopes is a list of low-level scopes and their dependencies.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ScopeDeps scope_deps = 2;</code>
     * @param \Clarifai\Api\ScopeDeps[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopeDeps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ScopeDeps::class);
        $this->scope_deps = $arr;

        return $this;
    }

    /**
     * endpoint_scopes is a listof all the publicly available endponts which can be
     * used as scopes as well. A call to each of those endpoint depends on a subset
     * of the above "scopes"
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EndpointDeps endpoint_deps = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpointDeps()
    {
        return $this->endpoint_deps;
    }

    /**
     * endpoint_scopes is a listof all the publicly available endponts which can be
     * used as scopes as well. A call to each of those endpoint depends on a subset
     * of the above "scopes"
     *
     * Generated from protobuf field <code>repeated .clarifai.api.EndpointDeps endpoint_deps = 3;</code>
     * @param \Clarifai\Api\EndpointDeps[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpointDeps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\EndpointDeps::class);
        $this->endpoint_deps = $arr;

        return $this;
    }

}

