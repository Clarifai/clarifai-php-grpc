<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetHistoricalUsageRequest - billing 2
 *
 * Generated from protobuf message <code>clarifai.api.GetHistoricalUsageRequest</code>
 */
class GetHistoricalUsageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * start date of the historical usage
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_date = 2;</code>
     */
    protected $start_date = null;
    /**
     * end date of the historical usage
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_date = 3;</code>
     */
    protected $end_date = null;
    /**
     * If true, the usage is broken down per app
     * Default to false
     *
     * Generated from protobuf field <code>bool broken_down_per_app = 4;</code>
     */
    protected $broken_down_per_app = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type \Google\Protobuf\Timestamp $start_date
     *           start date of the historical usage
     *     @type \Google\Protobuf\Timestamp $end_date
     *           end date of the historical usage
     *     @type bool $broken_down_per_app
     *           If true, the usage is broken down per app
     *           Default to false
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
     * start date of the historical usage
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_date = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    public function hasStartDate()
    {
        return isset($this->start_date);
    }

    public function clearStartDate()
    {
        unset($this->start_date);
    }

    /**
     * start date of the historical usage
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_date = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * end date of the historical usage
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_date = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    public function hasEndDate()
    {
        return isset($this->end_date);
    }

    public function clearEndDate()
    {
        unset($this->end_date);
    }

    /**
     * end date of the historical usage
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_date = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_date = $var;

        return $this;
    }

    /**
     * If true, the usage is broken down per app
     * Default to false
     *
     * Generated from protobuf field <code>bool broken_down_per_app = 4;</code>
     * @return bool
     */
    public function getBrokenDownPerApp()
    {
        return $this->broken_down_per_app;
    }

    /**
     * If true, the usage is broken down per app
     * Default to false
     *
     * Generated from protobuf field <code>bool broken_down_per_app = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBrokenDownPerApp($var)
    {
        GPBUtil::checkBool($var);
        $this->broken_down_per_app = $var;

        return $this;
    }

}

