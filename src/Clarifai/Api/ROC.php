<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.ROC</code>
 */
class ROC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated float fpr = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $fpr;
    /**
     * Generated from protobuf field <code>repeated float tpr = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $tpr;
    /**
     * Generated from protobuf field <code>repeated float thresholds = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $thresholds;
    /**
     * Generated from protobuf field <code>repeated float fpr_per_image = 4;</code>
     */
    private $fpr_per_image;
    /**
     * Generated from protobuf field <code>repeated float fpr_per_object = 5;</code>
     */
    private $fpr_per_object;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $fpr
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $tpr
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $thresholds
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $fpr_per_image
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $fpr_per_object
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated float fpr = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFpr()
    {
        return $this->fpr;
    }

    /**
     * Generated from protobuf field <code>repeated float fpr = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFpr($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->fpr = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float tpr = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTpr()
    {
        return $this->tpr;
    }

    /**
     * Generated from protobuf field <code>repeated float tpr = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTpr($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->tpr = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float thresholds = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThresholds()
    {
        return $this->thresholds;
    }

    /**
     * Generated from protobuf field <code>repeated float thresholds = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThresholds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->thresholds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float fpr_per_image = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFprPerImage()
    {
        return $this->fpr_per_image;
    }

    /**
     * Generated from protobuf field <code>repeated float fpr_per_image = 4;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFprPerImage($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->fpr_per_image = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float fpr_per_object = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFprPerObject()
    {
        return $this->fpr_per_object;
    }

    /**
     * Generated from protobuf field <code>repeated float fpr_per_object = 5;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFprPerObject($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->fpr_per_object = $arr;

        return $this;
    }

}

