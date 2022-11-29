<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MultiUsersOrganizationsResponse
 *
 * Generated from protobuf message <code>clarifai.api.MultiUsersOrganizationsResponse</code>
 */
class MultiUsersOrganizationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.MultiUsersOrganizationsResponse.UserOrganization organizations = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $organizations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\MultiUsersOrganizationsResponse\UserOrganization[]|\Google\Protobuf\Internal\RepeatedField $organizations
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
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
     * Generated from protobuf field <code>repeated .clarifai.api.MultiUsersOrganizationsResponse.UserOrganization organizations = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrganizations()
    {
        return $this->organizations;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.MultiUsersOrganizationsResponse.UserOrganization organizations = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param \Clarifai\Api\MultiUsersOrganizationsResponse\UserOrganization[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrganizations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\MultiUsersOrganizationsResponse\UserOrganization::class);
        $this->organizations = $arr;

        return $this;
    }

}

