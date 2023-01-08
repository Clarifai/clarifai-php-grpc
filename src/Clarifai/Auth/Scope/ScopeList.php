<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/auth/scope/scope.proto

namespace Clarifai\Auth\Scope;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.auth.scope.ScopeList</code>
 */
class ScopeList extends \Google\Protobuf\Internal\Message
{
    /**
     * These are the list of low-level scopes to check from the enum below.
     *
     * Generated from protobuf field <code>repeated .clarifai.auth.scope.S scopes = 1;</code>
     */
    private $scopes;
    /**
     * This is a list of fully qualified grpc names to check.
     *
     * Generated from protobuf field <code>repeated string endpoints = 2;</code>
     */
    private $endpoints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $scopes
     *           These are the list of low-level scopes to check from the enum below.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $endpoints
     *           This is a list of fully qualified grpc names to check.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Auth\Scope\Scope::initOnce();
        parent::__construct($data);
    }

    /**
     * These are the list of low-level scopes to check from the enum below.
     *
     * Generated from protobuf field <code>repeated .clarifai.auth.scope.S scopes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * These are the list of low-level scopes to check from the enum below.
     *
     * Generated from protobuf field <code>repeated .clarifai.auth.scope.S scopes = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Clarifai\Auth\Scope\S::class);
        $this->scopes = $arr;

        return $this;
    }

    /**
     * This is a list of fully qualified grpc names to check.
     *
     * Generated from protobuf field <code>repeated string endpoints = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * This is a list of fully qualified grpc names to check.
     *
     * Generated from protobuf field <code>repeated string endpoints = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->endpoints = $arr;

        return $this;
    }

}

