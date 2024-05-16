<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PatchNodepoolsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PatchNodepoolsRequest</code>
 */
class PatchNodepoolsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Nodepool nodepools = 3;</code>
     */
    private $nodepools;
    /**
     * The action to perform on the patched objects
     * For now actions 'merge', 'overwrite', and 'remove' are supported
     *
     * Generated from protobuf field <code>string action = 4;</code>
     */
    protected $action = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type array<\Clarifai\Api\Nodepool>|\Google\Protobuf\Internal\RepeatedField $nodepools
     *     @type string $action
     *           The action to perform on the patched objects
     *           For now actions 'merge', 'overwrite', and 'remove' are supported
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet|null
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    public function hasUserAppId()
    {
        return isset($this->user_app_id);
    }

    public function clearUserAppId()
    {
        unset($this->user_app_id);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @param \Clarifai\Api\UserAppIDSet $var
     * @return $this
     */
    public function setUserAppId($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\UserAppIDSet::class);
        $this->user_app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Nodepool nodepools = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodepools()
    {
        return $this->nodepools;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Nodepool nodepools = 3;</code>
     * @param array<\Clarifai\Api\Nodepool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodepools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Nodepool::class);
        $this->nodepools = $arr;

        return $this;
    }

    /**
     * The action to perform on the patched objects
     * For now actions 'merge', 'overwrite', and 'remove' are supported
     *
     * Generated from protobuf field <code>string action = 4;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The action to perform on the patched objects
     * For now actions 'merge', 'overwrite', and 'remove' are supported
     *
     * Generated from protobuf field <code>string action = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

}

