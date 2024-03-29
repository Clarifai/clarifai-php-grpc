<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to delete several annotation filters by list of ids.
 *
 * Generated from protobuf message <code>clarifai.api.DeleteAnnotationFiltersRequest</code>
 */
class DeleteAnnotationFiltersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Specify which filters to delete.
     *
     * Generated from protobuf field <code>repeated string annotation_filter_ids = 2;</code>
     */
    private $annotation_filter_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $annotation_filter_ids
     *           Specify which filters to delete.
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
     * Specify which filters to delete.
     *
     * Generated from protobuf field <code>repeated string annotation_filter_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnnotationFilterIds()
    {
        return $this->annotation_filter_ids;
    }

    /**
     * Specify which filters to delete.
     *
     * Generated from protobuf field <code>repeated string annotation_filter_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnnotationFilterIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotation_filter_ids = $arr;

        return $this;
    }

}

