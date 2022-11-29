<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to initiate ingestion of inputs from Cloud storage
 *
 * Generated from protobuf message <code>clarifai.api.PostInputsAddJobsRequest</code>
 */
class PostInputsAddJobsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InputsAddJob inputs_add_jobs = 2;</code>
     */
    private $inputs_add_jobs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type \Clarifai\Api\InputsAddJob[]|\Google\Protobuf\Internal\RepeatedField $inputs_add_jobs
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
     * Generated from protobuf field <code>repeated .clarifai.api.InputsAddJob inputs_add_jobs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputsAddJobs()
    {
        return $this->inputs_add_jobs;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InputsAddJob inputs_add_jobs = 2;</code>
     * @param \Clarifai\Api\InputsAddJob[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputsAddJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\InputsAddJob::class);
        $this->inputs_add_jobs = $arr;

        return $this;
    }

}

