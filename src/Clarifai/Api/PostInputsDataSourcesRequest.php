<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Initiates retrieval of inputs from cloud storage from a user provided data source.
 * Will create and return an inputs-add-job for tracking progress.
 * Archives will be extracted and their contents will be processed as inputs.
 * The cloud URL will be treated as a filter prefix. For example s3:/bucket/images_folder/abc will process
 * files in the images_folder beginning with abc or in a subfolder beginning with abc.
 * For example:
 * bucket/images_folder/abcImage.png
 * bucket/images_folder/abc-1/Data.zip
 * If given URL is for a private bucket or file, then credentials should be provided to access the bucket.
 * Credentials should include rights to list the objects in the bucket, except when pointed directly at a file archive,
 * in which case it only requires rights to access that particular file.
 *
 * Generated from protobuf message <code>clarifai.api.PostInputsDataSourcesRequest</code>
 */
class PostInputsDataSourcesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InputsDataSource data_sources = 2;</code>
     */
    private $data_sources;
    /**
     * If call back url is set, we will send a Post request to this endpoint with job status.
     *
     * Generated from protobuf field <code>string call_back_url = 3;</code>
     */
    protected $call_back_url = '';
    /**
     * Personal Access Token to the application to which inputs are added
     * Deprecated: No need to send app_pat, it will be generated internally if not present
     *
     * Generated from protobuf field <code>string app_pat = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $app_pat = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type array<\Clarifai\Api\InputsDataSource>|\Google\Protobuf\Internal\RepeatedField $data_sources
     *     @type string $call_back_url
     *           If call back url is set, we will send a Post request to this endpoint with job status.
     *     @type string $app_pat
     *           Personal Access Token to the application to which inputs are added
     *           Deprecated: No need to send app_pat, it will be generated internally if not present
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
     * Generated from protobuf field <code>repeated .clarifai.api.InputsDataSource data_sources = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataSources()
    {
        return $this->data_sources;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InputsDataSource data_sources = 2;</code>
     * @param array<\Clarifai\Api\InputsDataSource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataSources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\InputsDataSource::class);
        $this->data_sources = $arr;

        return $this;
    }

    /**
     * If call back url is set, we will send a Post request to this endpoint with job status.
     *
     * Generated from protobuf field <code>string call_back_url = 3;</code>
     * @return string
     */
    public function getCallBackUrl()
    {
        return $this->call_back_url;
    }

    /**
     * If call back url is set, we will send a Post request to this endpoint with job status.
     *
     * Generated from protobuf field <code>string call_back_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCallBackUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_back_url = $var;

        return $this;
    }

    /**
     * Personal Access Token to the application to which inputs are added
     * Deprecated: No need to send app_pat, it will be generated internally if not present
     *
     * Generated from protobuf field <code>string app_pat = 4 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getAppPat()
    {
        @trigger_error('app_pat is deprecated.', E_USER_DEPRECATED);
        return $this->app_pat;
    }

    /**
     * Personal Access Token to the application to which inputs are added
     * Deprecated: No need to send app_pat, it will be generated internally if not present
     *
     * Generated from protobuf field <code>string app_pat = 4 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setAppPat($var)
    {
        @trigger_error('app_pat is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->app_pat = $var;

        return $this;
    }

}

