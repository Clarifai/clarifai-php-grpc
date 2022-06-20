<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/status/status.proto

namespace Clarifai\Api\Status;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.status.RedirectInfo</code>
 */
class RedirectInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * New location for the resource. Used to set response Location header.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';
    /**
     * Resource type
     *
     * Generated from protobuf field <code>string resource_type = 2;</code>
     */
    protected $resource_type = '';
    /**
     * Old resource id
     *
     * Generated from protobuf field <code>string old_resource_id = 3;</code>
     */
    protected $old_resource_id = '';
    /**
     * New resource id
     *
     * Generated from protobuf field <code>string new_resource_id = 4;</code>
     */
    protected $new_resource_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *           New location for the resource. Used to set response Location header.
     *     @type string $resource_type
     *           Resource type
     *     @type string $old_resource_id
     *           Old resource id
     *     @type string $new_resource_id
     *           New resource id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Status\Status::initOnce();
        parent::__construct($data);
    }

    /**
     * New location for the resource. Used to set response Location header.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * New location for the resource. Used to set response Location header.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Resource type
     *
     * Generated from protobuf field <code>string resource_type = 2;</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Resource type
     *
     * Generated from protobuf field <code>string resource_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * Old resource id
     *
     * Generated from protobuf field <code>string old_resource_id = 3;</code>
     * @return string
     */
    public function getOldResourceId()
    {
        return $this->old_resource_id;
    }

    /**
     * Old resource id
     *
     * Generated from protobuf field <code>string old_resource_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOldResourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->old_resource_id = $var;

        return $this;
    }

    /**
     * New resource id
     *
     * Generated from protobuf field <code>string new_resource_id = 4;</code>
     * @return string
     */
    public function getNewResourceId()
    {
        return $this->new_resource_id;
    }

    /**
     * New resource id
     *
     * Generated from protobuf field <code>string new_resource_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNewResourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_resource_id = $var;

        return $this;
    }

}

