<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MultiModelStarResponse
 *
 * Generated from protobuf message <code>clarifai.api.MultiModelStarResponse</code>
 */
class MultiModelStarResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The response status.
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Model stars
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelStar model_stars = 2;</code>
     */
    private $model_stars;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *           The response status.
     *     @type \Clarifai\Api\ModelStar[]|\Google\Protobuf\Internal\RepeatedField $model_stars
     *           Model stars
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
     * Model stars
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelStar model_stars = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModelStars()
    {
        return $this->model_stars;
    }

    /**
     * Model stars
     *
     * Generated from protobuf field <code>repeated .clarifai.api.ModelStar model_stars = 2;</code>
     * @param \Clarifai\Api\ModelStar[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModelStars($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\ModelStar::class);
        $this->model_stars = $arr;

        return $this;
    }

}

