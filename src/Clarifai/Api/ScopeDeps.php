<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * Messages from /proto/clarifai/api/scope.proto
 * //////////////////////////////////////////////////////////////////////////////
 *
 * Generated from protobuf message <code>clarifai.api.ScopeDeps</code>
 */
class ScopeDeps extends \Google\Protobuf\Internal\Message
{
    /**
     * The scope
     *
     * Generated from protobuf field <code>string scope = 1;</code>
     */
    protected $scope = '';
    /**
     * Other scopes that are required.
     *
     * Generated from protobuf field <code>repeated string depending_scopes = 2;</code>
     */
    private $depending_scopes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope
     *           The scope
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $depending_scopes
     *           Other scopes that are required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The scope
     *
     * Generated from protobuf field <code>string scope = 1;</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * The scope
     *
     * Generated from protobuf field <code>string scope = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Other scopes that are required.
     *
     * Generated from protobuf field <code>repeated string depending_scopes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDependingScopes()
    {
        return $this->depending_scopes;
    }

    /**
     * Other scopes that are required.
     *
     * Generated from protobuf field <code>repeated string depending_scopes = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDependingScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->depending_scopes = $arr;

        return $this;
    }

}

