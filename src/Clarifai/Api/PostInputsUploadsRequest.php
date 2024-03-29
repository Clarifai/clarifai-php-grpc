<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Start uploading a file archive containing inputs.
 * Will create and return an inputs-add-job for tracking progress.
 * Associated inputs-add-job contains an upload id which should be completed through `PutUploadContentParts` endpoint.
 * Completing the upload will automatically begin unpacking the archive and uploading the contents as inputs.
 *
 * Generated from protobuf message <code>clarifai.api.PostInputsUploadsRequest</code>
 */
class PostInputsUploadsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InputsUpload inputs_uploads = 2;</code>
     */
    private $inputs_uploads;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type array<\Clarifai\Api\InputsUpload>|\Google\Protobuf\Internal\RepeatedField $inputs_uploads
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
     * Generated from protobuf field <code>repeated .clarifai.api.InputsUpload inputs_uploads = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputsUploads()
    {
        return $this->inputs_uploads;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.InputsUpload inputs_uploads = 2;</code>
     * @param array<\Clarifai\Api\InputsUpload>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputsUploads($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\InputsUpload::class);
        $this->inputs_uploads = $arr;

        return $this;
    }

}

