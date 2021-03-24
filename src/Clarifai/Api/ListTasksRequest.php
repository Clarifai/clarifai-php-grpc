<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list multiple tasks.
 *
 * Generated from protobuf message <code>clarifai.api.ListTasksRequest</code>
 */
class ListTasksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to 1.
     *
     * Generated from protobuf field <code>uint32 page = 2;</code>
     */
    protected $page = 0;
    /**
     * (optional URL parameter) The number of results that will be contained in each page. Defaults
     * to 128.
     *
     * Generated from protobuf field <code>uint32 per_page = 3;</code>
     */
    protected $per_page = 0;
    /**
     * Get tasks that have ANY user from this list assigned as worker.
     *
     * Generated from protobuf field <code>repeated string worker_user_ids = 4;</code>
     */
    private $worker_user_ids;
    /**
     * Get tasks that have ANY user from this list assigned as reviewer.
     *
     * Generated from protobuf field <code>repeated string review_user_ids = 5;</code>
     */
    private $review_user_ids;
    /**
     * Get label order tasks as well
     *
     * Generated from protobuf field <code>bool including_label_order_tasks = 6;</code>
     */
    protected $including_label_order_tasks = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type int $page
     *           (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     *           Defaults to 1.
     *     @type int $per_page
     *           (optional URL parameter) The number of results that will be contained in each page. Defaults
     *           to 128.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $worker_user_ids
     *           Get tasks that have ANY user from this list assigned as worker.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $review_user_ids
     *           Get tasks that have ANY user from this list assigned as reviewer.
     *     @type bool $including_label_order_tasks
     *           Get label order tasks as well
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
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to 1.
     *
     * Generated from protobuf field <code>uint32 page = 2;</code>
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
     * Generated from protobuf field <code>uint32 page = 2;</code>
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
     * Generated from protobuf field <code>uint32 per_page = 3;</code>
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
     * Generated from protobuf field <code>uint32 per_page = 3;</code>
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
     * Get tasks that have ANY user from this list assigned as worker.
     *
     * Generated from protobuf field <code>repeated string worker_user_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkerUserIds()
    {
        return $this->worker_user_ids;
    }

    /**
     * Get tasks that have ANY user from this list assigned as worker.
     *
     * Generated from protobuf field <code>repeated string worker_user_ids = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkerUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->worker_user_ids = $arr;

        return $this;
    }

    /**
     * Get tasks that have ANY user from this list assigned as reviewer.
     *
     * Generated from protobuf field <code>repeated string review_user_ids = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReviewUserIds()
    {
        return $this->review_user_ids;
    }

    /**
     * Get tasks that have ANY user from this list assigned as reviewer.
     *
     * Generated from protobuf field <code>repeated string review_user_ids = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReviewUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->review_user_ids = $arr;

        return $this;
    }

    /**
     * Get label order tasks as well
     *
     * Generated from protobuf field <code>bool including_label_order_tasks = 6;</code>
     * @return bool
     */
    public function getIncludingLabelOrderTasks()
    {
        return $this->including_label_order_tasks;
    }

    /**
     * Get label order tasks as well
     *
     * Generated from protobuf field <code>bool including_label_order_tasks = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludingLabelOrderTasks($var)
    {
        GPBUtil::checkBool($var);
        $this->including_label_order_tasks = $var;

        return $this;
    }

}

