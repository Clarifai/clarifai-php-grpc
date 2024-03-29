<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Segmentation mask.
 *
 * Generated from protobuf message <code>clarifai.api.Mask</code>
 */
class Mask extends \Google\Protobuf\Internal\Message
{
    /**
     * The image of the mask in a non-raster format.
     *
     * Generated from protobuf field <code>.clarifai.api.Image image = 2;</code>
     */
    protected $image = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Image $image
     *           The image of the mask in a non-raster format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The image of the mask in a non-raster format.
     *
     * Generated from protobuf field <code>.clarifai.api.Image image = 2;</code>
     * @return \Clarifai\Api\Image|null
     */
    public function getImage()
    {
        return $this->image;
    }

    public function hasImage()
    {
        return isset($this->image);
    }

    public function clearImage()
    {
        unset($this->image);
    }

    /**
     * The image of the mask in a non-raster format.
     *
     * Generated from protobuf field <code>.clarifai.api.Image image = 2;</code>
     * @param \Clarifai\Api\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Image::class);
        $this->image = $var;

        return $this;
    }

}

