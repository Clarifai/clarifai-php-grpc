<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Execute a new annotation search and optionally save it
 * annotation search over annotations using rank and filter proto
 *
 * Generated from protobuf message <code>clarifai.api.PostAnnotationsSearchesRequest</code>
 */
class PostAnnotationsSearchesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The user_id and app_id to query from.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * The searched to be executed or saved
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Search searches = 2;</code>
     */
    private $searches;
    /**
     * Pagination information to paginate through search result Hits.
     *
     * Generated from protobuf field <code>.clarifai.api.Pagination pagination = 3;</code>
     */
    protected $pagination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *           The user_id and app_id to query from.
     *     @type \Clarifai\Api\Search[]|\Google\Protobuf\Internal\RepeatedField $searches
     *           The searched to be executed or saved
     *     @type \Clarifai\Api\Pagination $pagination
     *           Pagination information to paginate through search result Hits.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The user_id and app_id to query from.
     *
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
     * The user_id and app_id to query from.
     *
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
     * The searched to be executed or saved
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Search searches = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSearches()
    {
        return $this->searches;
    }

    /**
     * The searched to be executed or saved
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Search searches = 2;</code>
     * @param \Clarifai\Api\Search[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSearches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Search::class);
        $this->searches = $arr;

        return $this;
    }

    /**
     * Pagination information to paginate through search result Hits.
     *
     * Generated from protobuf field <code>.clarifai.api.Pagination pagination = 3;</code>
     * @return \Clarifai\Api\Pagination|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    public function hasPagination()
    {
        return isset($this->pagination);
    }

    public function clearPagination()
    {
        unset($this->pagination);
    }

    /**
     * Pagination information to paginate through search result Hits.
     *
     * Generated from protobuf field <code>.clarifai.api.Pagination pagination = 3;</code>
     * @param \Clarifai\Api\Pagination $var
     * @return $this
     */
    public function setPagination($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Pagination::class);
        $this->pagination = $var;

        return $this;
    }

}

