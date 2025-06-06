<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListModelVersionsRequest
 *
 * Generated from protobuf message <code>clarifai.api.ListModelVersionsRequest</code>
 */
class ListModelVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>string model_id = 2;</code>
     */
    protected $model_id = '';
    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to 1.
     *
     * Generated from protobuf field <code>uint32 page = 3;</code>
     */
    protected $page = 0;
    /**
     * (optional URL parameter) The number of results that will be contained in each page. Defaults
     * to 128.
     *
     * Generated from protobuf field <code>uint32 per_page = 4;</code>
     */
    protected $per_page = 0;
    /**
     * Filtering options:
     * To list only the model versions that have these concept ids present in them.
     *
     * Generated from protobuf field <code>repeated string concept_ids = 5;</code>
     */
    private $concept_ids;
    /**
     * To list only the model versions that have been trained.
     *
     * Generated from protobuf field <code>bool trained_only = 6;</code>
     */
    protected $trained_only = false;
    /**
     * Sorting options:
     * Whether to sort in ascending order. If false, will order in descending order.
     *
     * Generated from protobuf field <code>bool sort_ascending = 7;</code>
     */
    protected $sort_ascending = false;
    /**
     * Filter by model versions runners with replicas >= min_replicas.
     *
     * Generated from protobuf field <code>uint32 min_replicas = 12;</code>
     */
    protected $min_replicas = 0;
    protected $sort_by;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $model_id
     *     @type int $page
     *           (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     *           Defaults to 1.
     *     @type int $per_page
     *           (optional URL parameter) The number of results that will be contained in each page. Defaults
     *           to 128.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $concept_ids
     *           Filtering options:
     *           To list only the model versions that have these concept ids present in them.
     *     @type bool $trained_only
     *           To list only the model versions that have been trained.
     *     @type bool $sort_ascending
     *           Sorting options:
     *           Whether to sort in ascending order. If false, will order in descending order.
     *     @type bool $sort_by_status_code
     *           Whether to order by the status code
     *     @type bool $sort_by_num_inputs
     *           Whether to order by the number of training inputs
     *     @type bool $sort_by_description
     *           Whether to sort by the description
     *     @type bool $sort_by_created_at
     *           Whether to order by the created_at time
     *           If neither sort option is set to true, will sort by created_at.
     *     @type int $min_replicas
     *           Filter by model versions runners with replicas >= min_replicas.
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
     * Generated from protobuf field <code>string model_id = 2;</code>
     * @return string
     */
    public function getModelId()
    {
        return $this->model_id;
    }

    /**
     * Generated from protobuf field <code>string model_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_id = $var;

        return $this;
    }

    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to 1.
     *
     * Generated from protobuf field <code>uint32 page = 3;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to 1.
     *
     * Generated from protobuf field <code>uint32 page = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkUint32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * (optional URL parameter) The number of results that will be contained in each page. Defaults
     * to 128.
     *
     * Generated from protobuf field <code>uint32 per_page = 4;</code>
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * (optional URL parameter) The number of results that will be contained in each page. Defaults
     * to 128.
     *
     * Generated from protobuf field <code>uint32 per_page = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPerPage($var)
    {
        GPBUtil::checkUint32($var);
        $this->per_page = $var;

        return $this;
    }

    /**
     * Filtering options:
     * To list only the model versions that have these concept ids present in them.
     *
     * Generated from protobuf field <code>repeated string concept_ids = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConceptIds()
    {
        return $this->concept_ids;
    }

    /**
     * Filtering options:
     * To list only the model versions that have these concept ids present in them.
     *
     * Generated from protobuf field <code>repeated string concept_ids = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConceptIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->concept_ids = $arr;

        return $this;
    }

    /**
     * To list only the model versions that have been trained.
     *
     * Generated from protobuf field <code>bool trained_only = 6;</code>
     * @return bool
     */
    public function getTrainedOnly()
    {
        return $this->trained_only;
    }

    /**
     * To list only the model versions that have been trained.
     *
     * Generated from protobuf field <code>bool trained_only = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setTrainedOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->trained_only = $var;

        return $this;
    }

    /**
     * Sorting options:
     * Whether to sort in ascending order. If false, will order in descending order.
     *
     * Generated from protobuf field <code>bool sort_ascending = 7;</code>
     * @return bool
     */
    public function getSortAscending()
    {
        return $this->sort_ascending;
    }

    /**
     * Sorting options:
     * Whether to sort in ascending order. If false, will order in descending order.
     *
     * Generated from protobuf field <code>bool sort_ascending = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortAscending($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_ascending = $var;

        return $this;
    }

    /**
     * Whether to order by the status code
     *
     * Generated from protobuf field <code>bool sort_by_status_code = 8;</code>
     * @return bool
     */
    public function getSortByStatusCode()
    {
        return $this->readOneof(8);
    }

    public function hasSortByStatusCode()
    {
        return $this->hasOneof(8);
    }

    /**
     * Whether to order by the status code
     *
     * Generated from protobuf field <code>bool sort_by_status_code = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByStatusCode($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Whether to order by the number of training inputs
     *
     * Generated from protobuf field <code>bool sort_by_num_inputs = 9;</code>
     * @return bool
     */
    public function getSortByNumInputs()
    {
        return $this->readOneof(9);
    }

    public function hasSortByNumInputs()
    {
        return $this->hasOneof(9);
    }

    /**
     * Whether to order by the number of training inputs
     *
     * Generated from protobuf field <code>bool sort_by_num_inputs = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByNumInputs($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Whether to sort by the description
     *
     * Generated from protobuf field <code>bool sort_by_description = 10;</code>
     * @return bool
     */
    public function getSortByDescription()
    {
        return $this->readOneof(10);
    }

    public function hasSortByDescription()
    {
        return $this->hasOneof(10);
    }

    /**
     * Whether to sort by the description
     *
     * Generated from protobuf field <code>bool sort_by_description = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByDescription($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Whether to order by the created_at time
     * If neither sort option is set to true, will sort by created_at.
     *
     * Generated from protobuf field <code>bool sort_by_created_at = 11;</code>
     * @return bool
     */
    public function getSortByCreatedAt()
    {
        return $this->readOneof(11);
    }

    public function hasSortByCreatedAt()
    {
        return $this->hasOneof(11);
    }

    /**
     * Whether to order by the created_at time
     * If neither sort option is set to true, will sort by created_at.
     *
     * Generated from protobuf field <code>bool sort_by_created_at = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByCreatedAt($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Filter by model versions runners with replicas >= min_replicas.
     *
     * Generated from protobuf field <code>uint32 min_replicas = 12;</code>
     * @return int
     */
    public function getMinReplicas()
    {
        return $this->min_replicas;
    }

    /**
     * Filter by model versions runners with replicas >= min_replicas.
     *
     * Generated from protobuf field <code>uint32 min_replicas = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMinReplicas($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_replicas = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSortBy()
    {
        return $this->whichOneof("sort_by");
    }

}

