<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to add one or more datasets.
 *
 * Generated from protobuf message <code>clarifai.api.PostDatasetInputsRequest</code>
 */
class PostDatasetInputsRequest extends \Google\Protobuf\Internal\Message
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
     * List of inputs that are requested to be added to this dataset.
     * Identify each input by id field. All other inputs fields are ignored.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.DatasetInput dataset_inputs = 3;</code>
     */
    private $dataset_inputs;
    /**
     * Query to search inputs to be added to this dataset.
     *
     * Generated from protobuf field <code>.clarifai.api.Search search = 4;</code>
     */
    protected $search = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $dataset_id
     *           Identify dataset by id.
     *     @type array<\Clarifai\Api\DatasetInput>|\Google\Protobuf\Internal\RepeatedField $dataset_inputs
     *           List of inputs that are requested to be added to this dataset.
     *           Identify each input by id field. All other inputs fields are ignored.
     *     @type \Clarifai\Api\Search $search
     *           Query to search inputs to be added to this dataset.
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
     * List of inputs that are requested to be added to this dataset.
     * Identify each input by id field. All other inputs fields are ignored.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.DatasetInput dataset_inputs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatasetInputs()
    {
        return $this->dataset_inputs;
    }

    /**
     * List of inputs that are requested to be added to this dataset.
     * Identify each input by id field. All other inputs fields are ignored.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.DatasetInput dataset_inputs = 3;</code>
     * @param array<\Clarifai\Api\DatasetInput>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatasetInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\DatasetInput::class);
        $this->dataset_inputs = $arr;

        return $this;
    }

    /**
     * Query to search inputs to be added to this dataset.
     *
     * Generated from protobuf field <code>.clarifai.api.Search search = 4;</code>
     * @return \Clarifai\Api\Search|null
     */
    public function getSearch()
    {
        return $this->search;
    }

    public function hasSearch()
    {
        return isset($this->search);
    }

    public function clearSearch()
    {
        unset($this->search);
    }

    /**
     * Query to search inputs to be added to this dataset.
     *
     * Generated from protobuf field <code>.clarifai.api.Search search = 4;</code>
     * @param \Clarifai\Api\Search $var
     * @return $this
     */
    public function setSearch($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Search::class);
        $this->search = $var;

        return $this;
    }

}

