<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * Requests / Responses from /proto/clarifai/api/app_sharing.proto
 * //////////////////////////////////////////////////////////////////////////////
 *
 * Generated from protobuf message <code>clarifai.api.ListCollaboratorsRequest</code>
 */
class ListCollaboratorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Set this flag to list both deleted and not deleted collaborators
     * by default it's listing only not deleted collaborators
     *
     * Generated from protobuf field <code>bool list_all_collaborators = 2;</code>
     */
    protected $list_all_collaborators = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type bool $list_all_collaborators
     *           Set this flag to list both deleted and not deleted collaborators
     *           by default it's listing only not deleted collaborators
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
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
     * Set this flag to list both deleted and not deleted collaborators
     * by default it's listing only not deleted collaborators
     *
     * Generated from protobuf field <code>bool list_all_collaborators = 2;</code>
     * @return bool
     */
    public function getListAllCollaborators()
    {
        return $this->list_all_collaborators;
    }

    /**
     * Set this flag to list both deleted and not deleted collaborators
     * by default it's listing only not deleted collaborators
     *
     * Generated from protobuf field <code>bool list_all_collaborators = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setListAllCollaborators($var)
    {
        GPBUtil::checkBool($var);
        $this->list_all_collaborators = $var;

        return $this;
    }

}

