<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostSearchesRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostSearchesRequest</code>
 */
class PostSearchesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The user_id and app_id to query from.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * The query; this specifies how the data to be searched
     * this will be replaced by "Searches"
     *
     * Generated from protobuf field <code>.clarifai.api.Query query = 2 [deprecated = true];</code>
     */
    protected $query = null;
    /**
     * The searched to be executed or saved
     * Eventually the request level fields will be deprecated in favor of this object
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Search searches = 3;</code>
     */
    private $searches;
    /**
     * Pagination information to paginate through search result Hits.
     *
     * Generated from protobuf field <code>.clarifai.api.Pagination pagination = 4;</code>
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
     *     @type \Clarifai\Api\Query $query
     *           The query; this specifies how the data to be searched
     *           this will be replaced by "Searches"
     *     @type \Clarifai\Api\Search[]|\Google\Protobuf\Internal\RepeatedField $searches
     *           The searched to be executed or saved
     *           Eventually the request level fields will be deprecated in favor of this object
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
     * @return \Clarifai\Api\UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
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
     * The query; this specifies how the data to be searched
     * this will be replaced by "Searches"
     *
     * Generated from protobuf field <code>.clarifai.api.Query query = 2 [deprecated = true];</code>
     * @return \Clarifai\Api\Query
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * The query; this specifies how the data to be searched
     * this will be replaced by "Searches"
     *
     * Generated from protobuf field <code>.clarifai.api.Query query = 2 [deprecated = true];</code>
     * @param \Clarifai\Api\Query $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Query::class);
        $this->query = $var;

        return $this;
    }

    /**
     * The searched to be executed or saved
     * Eventually the request level fields will be deprecated in favor of this object
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Search searches = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSearches()
    {
        return $this->searches;
    }

    /**
     * The searched to be executed or saved
     * Eventually the request level fields will be deprecated in favor of this object
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Search searches = 3;</code>
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
     * Generated from protobuf field <code>.clarifai.api.Pagination pagination = 4;</code>
     * @return \Clarifai\Api\Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Pagination information to paginate through search result Hits.
     *
     * Generated from protobuf field <code>.clarifai.api.Pagination pagination = 4;</code>
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

