<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ListLogEntriesRequest</code>
 */
class ListLogEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to last page.
     *
     * Generated from protobuf field <code>uint32 page = 1;</code>
     */
    protected $page = 0;
    /**
     * (optional URL parameter) The number of results that will be contained in each page. Defaults
     * to 32.
     *
     * Generated from protobuf field <code>uint32 per_page = 2;</code>
     */
    protected $per_page = 0;
    /**
     * The type of log entry. Examples: model, agent, build, training.
     *
     * Generated from protobuf field <code>string log_type = 3;</code>
     */
    protected $log_type = '';
    /**
     * Who the logs are for.
     * The user app id, if a user produced the logs.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 4;</code>
     */
    protected $user_app_id = null;
    /**
     * The Model ID, if a model produced the logs.
     *
     * Generated from protobuf field <code>string model_id = 5;</code>
     */
    protected $model_id = '';
    /**
     * The Version ID, if a model version produced the logs.
     *
     * Generated from protobuf field <code>string model_version_id = 6;</code>
     */
    protected $model_version_id = '';
    /**
     * Workflow Id, if a workflow produced the logs.
     *
     * Generated from protobuf field <code>string workflow_id = 7;</code>
     */
    protected $workflow_id = '';
    /**
     * Where the logs came from.
     *
     * Generated from protobuf field <code>string compute_cluster_id = 9;</code>
     */
    protected $compute_cluster_id = '';
    /**
     * Generated from protobuf field <code>string nodepool_id = 10;</code>
     */
    protected $nodepool_id = '';
    /**
     * Generated from protobuf field <code>string runner_id = 11;</code>
     */
    protected $runner_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page
     *           (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     *           Defaults to last page.
     *     @type int $per_page
     *           (optional URL parameter) The number of results that will be contained in each page. Defaults
     *           to 32.
     *     @type string $log_type
     *           The type of log entry. Examples: model, agent, build, training.
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *           Who the logs are for.
     *           The user app id, if a user produced the logs.
     *     @type string $model_id
     *           The Model ID, if a model produced the logs.
     *     @type string $model_version_id
     *           The Version ID, if a model version produced the logs.
     *     @type string $workflow_id
     *           Workflow Id, if a workflow produced the logs.
     *     @type string $compute_cluster_id
     *           Where the logs came from.
     *     @type string $nodepool_id
     *     @type string $runner_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to last page.
     *
     * Generated from protobuf field <code>uint32 page = 1;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to last page.
     *
     * Generated from protobuf field <code>uint32 page = 1;</code>
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
     * to 32.
     *
     * Generated from protobuf field <code>uint32 per_page = 2;</code>
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * (optional URL parameter) The number of results that will be contained in each page. Defaults
     * to 32.
     *
     * Generated from protobuf field <code>uint32 per_page = 2;</code>
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
     * The type of log entry. Examples: model, agent, build, training.
     *
     * Generated from protobuf field <code>string log_type = 3;</code>
     * @return string
     */
    public function getLogType()
    {
        return $this->log_type;
    }

    /**
     * The type of log entry. Examples: model, agent, build, training.
     *
     * Generated from protobuf field <code>string log_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLogType($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_type = $var;

        return $this;
    }

    /**
     * Who the logs are for.
     * The user app id, if a user produced the logs.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 4;</code>
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
     * Who the logs are for.
     * The user app id, if a user produced the logs.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 4;</code>
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
     * The Model ID, if a model produced the logs.
     *
     * Generated from protobuf field <code>string model_id = 5;</code>
     * @return string
     */
    public function getModelId()
    {
        return $this->model_id;
    }

    /**
     * The Model ID, if a model produced the logs.
     *
     * Generated from protobuf field <code>string model_id = 5;</code>
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
     * The Version ID, if a model version produced the logs.
     *
     * Generated from protobuf field <code>string model_version_id = 6;</code>
     * @return string
     */
    public function getModelVersionId()
    {
        return $this->model_version_id;
    }

    /**
     * The Version ID, if a model version produced the logs.
     *
     * Generated from protobuf field <code>string model_version_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_version_id = $var;

        return $this;
    }

    /**
     * Workflow Id, if a workflow produced the logs.
     *
     * Generated from protobuf field <code>string workflow_id = 7;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Workflow Id, if a workflow produced the logs.
     *
     * Generated from protobuf field <code>string workflow_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

    /**
     * Where the logs came from.
     *
     * Generated from protobuf field <code>string compute_cluster_id = 9;</code>
     * @return string
     */
    public function getComputeClusterId()
    {
        return $this->compute_cluster_id;
    }

    /**
     * Where the logs came from.
     *
     * Generated from protobuf field <code>string compute_cluster_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setComputeClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->compute_cluster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nodepool_id = 10;</code>
     * @return string
     */
    public function getNodepoolId()
    {
        return $this->nodepool_id;
    }

    /**
     * Generated from protobuf field <code>string nodepool_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setNodepoolId($var)
    {
        GPBUtil::checkString($var, True);
        $this->nodepool_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string runner_id = 11;</code>
     * @return string
     */
    public function getRunnerId()
    {
        return $this->runner_id;
    }

    /**
     * Generated from protobuf field <code>string runner_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setRunnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->runner_id = $var;

        return $this;
    }

}

