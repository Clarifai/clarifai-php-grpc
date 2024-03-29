<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PatchConceptsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PatchConceptsRequest</code>
 */
class PatchConceptsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * The concepts to patch.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept concepts = 2;</code>
     */
    private $concepts;
    /**
     * The action to perform on the patched objects
     * For now ony action 'overwrite' is supported
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
     *     @type array<\Clarifai\Api\Concept>|\Google\Protobuf\Internal\RepeatedField $concepts
     *           The concepts to patch.
     *     @type string $action
     *           The action to perform on the patched objects
     *           For now ony action 'overwrite' is supported
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
     * The concepts to patch.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept concepts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConcepts()
    {
        return $this->concepts;
    }

    /**
     * The concepts to patch.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept concepts = 2;</code>
     * @param array<\Clarifai\Api\Concept>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConcepts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Concept::class);
        $this->concepts = $arr;

        return $this;
    }

    /**
     * The action to perform on the patched objects
     * For now ony action 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The action to perform on the patched objects
     * For now ony action 'overwrite' is supported
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

