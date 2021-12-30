<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AppDuplication
 *
 * Generated from protobuf message <code>clarifai.api.AppDuplication</code>
 */
class AppDuplication extends \Google\Protobuf\Internal\Message
{
    /**
     *the id of app duplication
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     *the id of new app
     *
     * Generated from protobuf field <code>string new_app_id = 2;</code>
     */
    protected $new_app_id = '';
    /**
     *the name of new app
     *
     * Generated from protobuf field <code>string new_app_name = 3;</code>
     */
    protected $new_app_name = '';
    /**
     *the status of app duplication
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 4;</code>
     */
    protected $status = null;
    /**
     *when is the app duplication triggered
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     */
    protected $created_at = null;
    /**
     *The last time when is the status got updated
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_at = 6;</code>
     */
    protected $last_modified_at = null;
    /**
     * Only copy resources depending on the filters
     *
     * Generated from protobuf field <code>.clarifai.api.AppDuplicationFilters filter = 7;</code>
     */
    protected $filter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *          the id of app duplication
     *     @type string $new_app_id
     *          the id of new app
     *     @type string $new_app_name
     *          the name of new app
     *     @type \Clarifai\Api\Status\Status $status
     *          the status of app duplication
     *     @type \Google\Protobuf\Timestamp $created_at
     *          when is the app duplication triggered
     *     @type \Google\Protobuf\Timestamp $last_modified_at
     *          The last time when is the status got updated
     *     @type \Clarifai\Api\AppDuplicationFilters $filter
     *           Only copy resources depending on the filters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     *the id of app duplication
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *the id of app duplication
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
     *the id of new app
     *
     * Generated from protobuf field <code>string new_app_id = 2;</code>
     * @return string
     */
    public function getNewAppId()
    {
        return $this->new_app_id;
    }

    /**
     *the id of new app
     *
     * Generated from protobuf field <code>string new_app_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNewAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_app_id = $var;

        return $this;
    }

    /**
     *the name of new app
     *
     * Generated from protobuf field <code>string new_app_name = 3;</code>
     * @return string
     */
    public function getNewAppName()
    {
        return $this->new_app_name;
    }

    /**
     *the name of new app
     *
     * Generated from protobuf field <code>string new_app_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNewAppName($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_app_name = $var;

        return $this;
    }

    /**
     *the status of app duplication
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 4;</code>
     * @return \Clarifai\Api\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *the status of app duplication
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 4;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     *when is the app duplication triggered
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     *when is the app duplication triggered
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
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
     *The last time when is the status got updated
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_at = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLastModifiedAt()
    {
        return $this->last_modified_at;
    }

    /**
     *The last time when is the status got updated
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_at = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_modified_at = $var;

        return $this;
    }

    /**
     * Only copy resources depending on the filters
     *
     * Generated from protobuf field <code>.clarifai.api.AppDuplicationFilters filter = 7;</code>
     * @return \Clarifai\Api\AppDuplicationFilters
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Only copy resources depending on the filters
     *
     * Generated from protobuf field <code>.clarifai.api.AppDuplicationFilters filter = 7;</code>
     * @param \Clarifai\Api\AppDuplicationFilters $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\AppDuplicationFilters::class);
        $this->filter = $var;

        return $this;
    }

}

