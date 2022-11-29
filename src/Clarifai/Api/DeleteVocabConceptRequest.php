<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This lets you delete a specific concept from the vocab (not from your app).
 *
 * Generated from protobuf message <code>clarifai.api.DeleteVocabConceptRequest</code>
 */
class DeleteVocabConceptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>string vocab_id = 2;</code>
     */
    protected $vocab_id = '';
    /**
     * Generated from protobuf field <code>string concept_id = 3;</code>
     */
    protected $concept_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $vocab_id
     *     @type string $concept_id
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
     * Generated from protobuf field <code>string vocab_id = 2;</code>
     * @return string
     */
    public function getVocabId()
    {
        return $this->vocab_id;
    }

    /**
     * Generated from protobuf field <code>string vocab_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVocabId($var)
    {
        GPBUtil::checkString($var, True);
        $this->vocab_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string concept_id = 3;</code>
     * @return string
     */
    public function getConceptId()
    {
        return $this->concept_id;
    }

    /**
     * Generated from protobuf field <code>string concept_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConceptId($var)
    {
        GPBUtil::checkString($var, True);
        $this->concept_id = $var;

        return $this;
    }

}

