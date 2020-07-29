<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * POST multiple concept languages for the given concept.
 *
 * Generated from protobuf message <code>clarifai.api.PostConceptLanguagesRequest</code>
 */
class PostConceptLanguagesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>string concept_id = 2;</code>
     */
    protected $concept_id = '';
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.ConceptLanguage concept_languages = 3;</code>
     */
    private $concept_languages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $concept_id
     *     @type \Clarifai\Api\ConceptLanguage[]|\Google\Protobuf\Internal\RepeatedField $concept_languages
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
     * Generated from protobuf field <code>string concept_id = 2;</code>
     * @return string
     */
    public function getConceptId()
    {
        return $this->concept_id;
    }

    /**
     * Generated from protobuf field <code>string concept_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConceptId($var)
    {
        GPBUtil::checkString($var, True);
        $this->concept_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.ConceptLanguage concept_languages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConceptLanguages()
    {
        return $this->concept_languages;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.ConceptLanguage concept_languages = 3;</code>
     * @param \Clarifai\Api\ConceptLanguage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConceptLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ConceptLanguage::class);
        $this->concept_languages = $arr;

        return $this;
    }

}

