<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DatasetFilter
 *
 * Generated from protobuf message <code>clarifai.api.DatasetFilter</code>
 */
class DatasetFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID for the dataset filter
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * When the dataset filter was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     */
    protected $created_at = null;
    /**
     * When the dataset filter was modified.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
     */
    protected $modified_at = null;
    /**
     * The user the dataset filter belongs to.
     *
     * Generated from protobuf field <code>string user_id = 4;</code>
     */
    protected $user_id = '';
    /**
     * The app the dataset filter belongs to.
     *
     * Generated from protobuf field <code>string app_id = 5;</code>
     */
    protected $app_id = '';
    /**
     * The dataset the filter belongs to.
     *
     * Generated from protobuf field <code>string dataset_id = 6;</code>
     */
    protected $dataset_id = '';
    /**
     * The saved search that this filter uses.
     *
     * Generated from protobuf field <code>.clarifai.api.Search saved_search = 8;</code>
     */
    protected $saved_search = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The ID for the dataset filter
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the dataset filter was created.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When the dataset filter was modified.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type string $user_id
     *           The user the dataset filter belongs to.
     *     @type string $app_id
     *           The app the dataset filter belongs to.
     *     @type string $dataset_id
     *           The dataset the filter belongs to.
     *     @type \Clarifai\Api\Search $saved_search
     *           The saved search that this filter uses.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID for the dataset filter
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID for the dataset filter
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * When the dataset filter was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * When the dataset filter was created.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * When the dataset filter was modified.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    /**
     * When the dataset filter was modified.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modified_at = $var;

        return $this;
    }

    /**
     * The user the dataset filter belongs to.
     *
     * Generated from protobuf field <code>string user_id = 4;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user the dataset filter belongs to.
     *
     * Generated from protobuf field <code>string user_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * The app the dataset filter belongs to.
     *
     * Generated from protobuf field <code>string app_id = 5;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The app the dataset filter belongs to.
     *
     * Generated from protobuf field <code>string app_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * The dataset the filter belongs to.
     *
     * Generated from protobuf field <code>string dataset_id = 6;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * The dataset the filter belongs to.
     *
     * Generated from protobuf field <code>string dataset_id = 6;</code>
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
     * The saved search that this filter uses.
     *
     * Generated from protobuf field <code>.clarifai.api.Search saved_search = 8;</code>
     * @return \Clarifai\Api\Search
     */
    public function getSavedSearch()
    {
        return $this->saved_search;
    }

    /**
     * The saved search that this filter uses.
     *
     * Generated from protobuf field <code>.clarifai.api.Search saved_search = 8;</code>
     * @param \Clarifai\Api\Search $var
     * @return $this
     */
    public function setSavedSearch($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Search::class);
        $this->saved_search = $var;

        return $this;
    }

}

