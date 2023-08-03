<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListWorkflowsRequest
 *
 * Generated from protobuf message <code>clarifai.api.ListWorkflowsRequest</code>
 */
class ListWorkflowsRequest extends \Google\Protobuf\Internal\Message
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
     * Sorting options:
     * Whether to sort in ascending order. If false, will order in descending order.
     *
     * Generated from protobuf field <code>bool sort_ascending = 5;</code>
     */
    protected $sort_ascending = false;
    /**
     * Query various text fields that can contain the words in the query string.
     *
     * Generated from protobuf field <code>string query = 8;</code>
     */
    protected $query = '';
    /**
     * Filter by the id of the workflow. This supports wilcard queries like "gen*" to match "general" as an example.
     * Deprecated in favor of query
     *
     * Generated from protobuf field <code>string id = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $id = '';
    /**
     * If true, we only return workflows that are handpicked by clarifai staff
     *
     * Generated from protobuf field <code>bool featured_only = 9;</code>
     */
    protected $featured_only = false;
    /**
     * If true, we only return workflows that are starred by the requesting user
     *
     * Generated from protobuf field <code>bool starred_only = 11;</code>
     */
    protected $starred_only = false;
    /**
     * (optional URL parameter) List of additional fields to be included in the response. Currently supported: all, stars
     *
     * Generated from protobuf field <code>repeated string additional_fields = 10;</code>
     */
    private $additional_fields;
    /**
     * (optional) search_term. Full text and prefix matching on description, id, owner id. Searchable fields may be added
     *
     * Generated from protobuf field <code>string search_term = 12;</code>
     */
    protected $search_term = '';
    /**
     * Filter workflows by bookmark. If set, only return bookmarked workflows. Otherwise none bookmarked workflows only.
     *
     * Generated from protobuf field <code>bool bookmark = 15;</code>
     */
    protected $bookmark = false;
    protected $sort_by;

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
     *     @type bool $sort_ascending
     *           Sorting options:
     *           Whether to sort in ascending order. If false, will order in descending order.
     *     @type bool $sort_by_id
     *           Whether to order by the name
     *     @type bool $sort_by_modified_at
     *           Whether to order by the modified_at time.
     *           If none of the sort options is set to true, will sort by modified_at.
     *     @type bool $sort_by_created_at
     *           Whether to order by the created_at time.
     *     @type bool $sort_by_star_count
     *           Whether to order by the number of users stared the workflow
     *     @type string $query
     *           Query various text fields that can contain the words in the query string.
     *     @type string $id
     *           Filter by the id of the workflow. This supports wilcard queries like "gen*" to match "general" as an example.
     *           Deprecated in favor of query
     *     @type bool $featured_only
     *           If true, we only return workflows that are handpicked by clarifai staff
     *     @type bool $starred_only
     *           If true, we only return workflows that are starred by the requesting user
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $additional_fields
     *           (optional URL parameter) List of additional fields to be included in the response. Currently supported: all, stars
     *     @type string $search_term
     *           (optional) search_term. Full text and prefix matching on description, id, owner id. Searchable fields may be added
     *     @type bool $bookmark
     *           Filter workflows by bookmark. If set, only return bookmarked workflows. Otherwise none bookmarked workflows only.
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
     * Sorting options:
     * Whether to sort in ascending order. If false, will order in descending order.
     *
     * Generated from protobuf field <code>bool sort_ascending = 5;</code>
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
     * Generated from protobuf field <code>bool sort_ascending = 5;</code>
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
     * Whether to order by the name
     *
     * Generated from protobuf field <code>bool sort_by_id = 6;</code>
     * @return bool
     */
    public function getSortById()
    {
        return $this->readOneof(6);
    }

    public function hasSortById()
    {
        return $this->hasOneof(6);
    }

    /**
     * Whether to order by the name
     *
     * Generated from protobuf field <code>bool sort_by_id = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortById($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Whether to order by the modified_at time.
     * If none of the sort options is set to true, will sort by modified_at.
     *
     * Generated from protobuf field <code>bool sort_by_modified_at = 7;</code>
     * @return bool
     */
    public function getSortByModifiedAt()
    {
        return $this->readOneof(7);
    }

    public function hasSortByModifiedAt()
    {
        return $this->hasOneof(7);
    }

    /**
     * Whether to order by the modified_at time.
     * If none of the sort options is set to true, will sort by modified_at.
     *
     * Generated from protobuf field <code>bool sort_by_modified_at = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByModifiedAt($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Whether to order by the created_at time.
     *
     * Generated from protobuf field <code>bool sort_by_created_at = 13;</code>
     * @return bool
     */
    public function getSortByCreatedAt()
    {
        return $this->readOneof(13);
    }

    public function hasSortByCreatedAt()
    {
        return $this->hasOneof(13);
    }

    /**
     * Whether to order by the created_at time.
     *
     * Generated from protobuf field <code>bool sort_by_created_at = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByCreatedAt($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Whether to order by the number of users stared the workflow
     *
     * Generated from protobuf field <code>bool sort_by_star_count = 14;</code>
     * @return bool
     */
    public function getSortByStarCount()
    {
        return $this->readOneof(14);
    }

    public function hasSortByStarCount()
    {
        return $this->hasOneof(14);
    }

    /**
     * Whether to order by the number of users stared the workflow
     *
     * Generated from protobuf field <code>bool sort_by_star_count = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByStarCount($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Query various text fields that can contain the words in the query string.
     *
     * Generated from protobuf field <code>string query = 8;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Query various text fields that can contain the words in the query string.
     *
     * Generated from protobuf field <code>string query = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Filter by the id of the workflow. This supports wilcard queries like "gen*" to match "general" as an example.
     * Deprecated in favor of query
     *
     * Generated from protobuf field <code>string id = 4 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getId()
    {
        @trigger_error('id is deprecated.', E_USER_DEPRECATED);
        return $this->id;
    }

    /**
     * Filter by the id of the workflow. This supports wilcard queries like "gen*" to match "general" as an example.
     * Deprecated in favor of query
     *
     * Generated from protobuf field <code>string id = 4 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setId($var)
    {
        @trigger_error('id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * If true, we only return workflows that are handpicked by clarifai staff
     *
     * Generated from protobuf field <code>bool featured_only = 9;</code>
     * @return bool
     */
    public function getFeaturedOnly()
    {
        return $this->featured_only;
    }

    /**
     * If true, we only return workflows that are handpicked by clarifai staff
     *
     * Generated from protobuf field <code>bool featured_only = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setFeaturedOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->featured_only = $var;

        return $this;
    }

    /**
     * If true, we only return workflows that are starred by the requesting user
     *
     * Generated from protobuf field <code>bool starred_only = 11;</code>
     * @return bool
     */
    public function getStarredOnly()
    {
        return $this->starred_only;
    }

    /**
     * If true, we only return workflows that are starred by the requesting user
     *
     * Generated from protobuf field <code>bool starred_only = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setStarredOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->starred_only = $var;

        return $this;
    }

    /**
     * (optional URL parameter) List of additional fields to be included in the response. Currently supported: all, stars
     *
     * Generated from protobuf field <code>repeated string additional_fields = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalFields()
    {
        return $this->additional_fields;
    }

    /**
     * (optional URL parameter) List of additional fields to be included in the response. Currently supported: all, stars
     *
     * Generated from protobuf field <code>repeated string additional_fields = 10;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_fields = $arr;

        return $this;
    }

    /**
     * (optional) search_term. Full text and prefix matching on description, id, owner id. Searchable fields may be added
     *
     * Generated from protobuf field <code>string search_term = 12;</code>
     * @return string
     */
    public function getSearchTerm()
    {
        return $this->search_term;
    }

    /**
     * (optional) search_term. Full text and prefix matching on description, id, owner id. Searchable fields may be added
     *
     * Generated from protobuf field <code>string search_term = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setSearchTerm($var)
    {
        GPBUtil::checkString($var, True);
        $this->search_term = $var;

        return $this;
    }

    /**
     * Filter workflows by bookmark. If set, only return bookmarked workflows. Otherwise none bookmarked workflows only.
     *
     * Generated from protobuf field <code>bool bookmark = 15;</code>
     * @return bool
     */
    public function getBookmark()
    {
        return $this->bookmark;
    }

    /**
     * Filter workflows by bookmark. If set, only return bookmarked workflows. Otherwise none bookmarked workflows only.
     *
     * Generated from protobuf field <code>bool bookmark = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setBookmark($var)
    {
        GPBUtil::checkBool($var);
        $this->bookmark = $var;

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

