<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MultiAppStarResponse
 *
 * Generated from protobuf message <code>clarifai.api.MultiAppStarResponse</code>
 */
class MultiAppStarResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The response status.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * App stars
     *
     * Generated from protobuf field <code>repeated .clarifai.api.AppStar app_stars = 2;</code>
     */
    private $app_stars;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           The response status.
     *     @type \Clarifai\Api\AppStar[]|\Google\Protobuf\Internal\RepeatedField $app_stars
     *           App stars
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The response status.
     *
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
     * The response status.
     *
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
     * App stars
     *
     * Generated from protobuf field <code>repeated .clarifai.api.AppStar app_stars = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAppStars()
    {
        return $this->app_stars;
    }

    /**
     * App stars
     *
     * Generated from protobuf field <code>repeated .clarifai.api.AppStar app_stars = 2;</code>
     * @param \Clarifai\Api\AppStar[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAppStars($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\AppStar::class);
        $this->app_stars = $arr;

        return $this;
    }

}

