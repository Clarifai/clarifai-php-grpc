<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to patch several dataset versions.
 *
 * Generated from protobuf message <code>clarifai.api.PatchDatasetVersionsRequest</code>
 */
class PatchDatasetVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Identify dataset by id.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     */
    protected $dataset_id = '';
    /**
     * List of dataset versions that are requested to be updated.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.DatasetVersion dataset_versions = 3;</code>
     */
    private $dataset_versions;
    /**
     * The action to perform on the patched objects
     * For now, only 'overwrite' action is supported
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
     *     @type string $dataset_id
     *           Identify dataset by id.
     *     @type array<\Clarifai\Api\DatasetVersion>|\Google\Protobuf\Internal\RepeatedField $dataset_versions
     *           List of dataset versions that are requested to be updated.
     *     @type string $action
     *           The action to perform on the patched objects
     *           For now, only 'overwrite' action is supported
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
     * Identify dataset by id.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * Identify dataset by id.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * List of dataset versions that are requested to be updated.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.DatasetVersion dataset_versions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatasetVersions()
    {
        return $this->dataset_versions;
    }

    /**
     * List of dataset versions that are requested to be updated.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.DatasetVersion dataset_versions = 3;</code>
     * @param array<\Clarifai\Api\DatasetVersion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatasetVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\DatasetVersion::class);
        $this->dataset_versions = $arr;

        return $this;
    }

    /**
     * The action to perform on the patched objects
     * For now, only 'overwrite' action is supported
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
     * For now, only 'overwrite' action is supported
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

