<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListDatasetsRequest
 *
 * Generated from protobuf message <code>clarifai.api.ListDatasetsRequest</code>
 */
class ListDatasetsRequest extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>bool starred_only = 4;</code>
     */
    protected $starred_only = false;
    /**
     * Generated from protobuf field <code>repeated string additional_fields = 5;</code>
     */
    private $additional_fields;
    /**
     * Sorting opitons:
     * Whether to sort in ascending order. If false, will order in descending order.
     *
     * Generated from protobuf field <code>bool sort_ascending = 6;</code>
     */
    protected $sort_ascending = false;
    /**
     * Filter datasets by bookmark. If set, only return bookmarked datasets. Otherwise none bookmarked datasets only.
     *
     * Generated from protobuf field <code>bool bookmark = 10;</code>
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
     *     @type bool $starred_only
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $additional_fields
     *     @type bool $sort_ascending
     *           Sorting opitons:
     *           Whether to sort in ascending order. If false, will order in descending order.
     *     @type bool $sort_by_created_at
     *           Whether to order by the created_at time.
     *     @type bool $sort_by_star_count
     *           Whether to order by the number of users stared the app
     *     @type bool $sort_by_modified_at
     *           If neither sort option is set to true, will sort by modified_at.
     *     @type bool $bookmark
     *           Filter datasets by bookmark. If set, only return bookmarked datasets. Otherwise none bookmarked datasets only.
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
     * Generated from protobuf field <code>bool starred_only = 4;</code>
     * @return bool
     */
    public function getStarredOnly()
    {
        return $this->starred_only;
    }

    /**
     * Generated from protobuf field <code>bool starred_only = 4;</code>
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
     * Generated from protobuf field <code>repeated string additional_fields = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalFields()
    {
        return $this->additional_fields;
    }

    /**
     * Generated from protobuf field <code>repeated string additional_fields = 5;</code>
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
     * Sorting opitons:
     * Whether to sort in ascending order. If false, will order in descending order.
     *
     * Generated from protobuf field <code>bool sort_ascending = 6;</code>
     * @return bool
     */
    public function getSortAscending()
    {
        return $this->sort_ascending;
    }

    /**
     * Sorting opitons:
     * Whether to sort in ascending order. If false, will order in descending order.
     *
     * Generated from protobuf field <code>bool sort_ascending = 6;</code>
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
     * Whether to order by the created_at time.
     *
     * Generated from protobuf field <code>bool sort_by_created_at = 7;</code>
     * @return bool
     */
    public function getSortByCreatedAt()
    {
        return $this->readOneof(7);
    }

    public function hasSortByCreatedAt()
    {
        return $this->hasOneof(7);
    }

    /**
     * Whether to order by the created_at time.
     *
     * Generated from protobuf field <code>bool sort_by_created_at = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByCreatedAt($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Whether to order by the number of users stared the app
     *
     * Generated from protobuf field <code>bool sort_by_star_count = 8;</code>
     * @return bool
     */
    public function getSortByStarCount()
    {
        return $this->readOneof(8);
    }

    public function hasSortByStarCount()
    {
        return $this->hasOneof(8);
    }

    /**
     * Whether to order by the number of users stared the app
     *
     * Generated from protobuf field <code>bool sort_by_star_count = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByStarCount($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * If neither sort option is set to true, will sort by modified_at.
     *
     * Generated from protobuf field <code>bool sort_by_modified_at = 9;</code>
     * @return bool
     */
    public function getSortByModifiedAt()
    {
        return $this->readOneof(9);
    }

    public function hasSortByModifiedAt()
    {
        return $this->hasOneof(9);
    }

    /**
     * If neither sort option is set to true, will sort by modified_at.
     *
     * Generated from protobuf field <code>bool sort_by_modified_at = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setSortByModifiedAt($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Filter datasets by bookmark. If set, only return bookmarked datasets. Otherwise none bookmarked datasets only.
     *
     * Generated from protobuf field <code>bool bookmark = 10;</code>
     * @return bool
     */
    public function getBookmark()
    {
        return $this->bookmark;
    }

    /**
     * Filter datasets by bookmark. If set, only return bookmarked datasets. Otherwise none bookmarked datasets only.
     *
     * Generated from protobuf field <code>bool bookmark = 10;</code>
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

