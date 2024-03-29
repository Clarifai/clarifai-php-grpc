<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PatchInputsSearchesRequest</code>
 */
class PatchInputsSearchesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The user_id and app_id to query from.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * The searches to be patched
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Search searches = 2;</code>
     */
    private $searches;
    /**
     * The action to perform on the patched Search objects
     * For now only action 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     */
    protected $action = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *           The user_id and app_id to query from.
     *     @type array<\Clarifai\Api\Search>|\Google\Protobuf\Internal\RepeatedField $searches
     *           The searches to be patched
     *     @type string $action
     *           The action to perform on the patched Search objects
     *           For now only action 'overwrite' is supported
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The user_id and app_id to query from.
     *
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
     * The user_id and app_id to query from.
     *
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
     * The searches to be patched
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Search searches = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSearches()
    {
        return $this->searches;
    }

    /**
     * The searches to be patched
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Search searches = 2;</code>
     * @param array<\Clarifai\Api\Search>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSearches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Search::class);
        $this->searches = $arr;

        return $this;
    }

    /**
     * The action to perform on the patched Search objects
     * For now only action 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The action to perform on the patched Search objects
     * For now only action 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
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

