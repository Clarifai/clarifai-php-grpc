<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to delete several dataset inputs by list of ids.
 *
 * Generated from protobuf message <code>clarifai.api.DeleteDatasetInputsRequest</code>
 */
class DeleteDatasetInputsRequest extends \Google\Protobuf\Internal\Message
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
     * Specify which inputs to delete from dataset.
     *
     * Generated from protobuf field <code>repeated string input_ids = 3;</code>
     */
    private $input_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $dataset_id
     *           Identify dataset by id.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $input_ids
     *           Specify which inputs to delete from dataset.
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
     * Specify which inputs to delete from dataset.
     *
     * Generated from protobuf field <code>repeated string input_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputIds()
    {
        return $this->input_ids;
    }

    /**
     * Specify which inputs to delete from dataset.
     *
     * Generated from protobuf field <code>repeated string input_ids = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input_ids = $arr;

        return $this;
    }

}
