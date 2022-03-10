<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostCollaboratorsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostCollaboratorsRequest</code>
 */
class PostCollaboratorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Collaborator collaborators = 2;</code>
     */
    private $collaborators;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type \Clarifai\Api\Collaborator[]|\Google\Protobuf\Internal\RepeatedField $collaborators
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
     * Generated from protobuf field <code>repeated .clarifai.api.Collaborator collaborators = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.Collaborator collaborators = 2;</code>
     * @param \Clarifai\Api\Collaborator[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollaborators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Collaborator::class);
        $this->collaborators = $arr;

        return $this;
    }

}

