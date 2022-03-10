<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Point
 *
 * Generated from protobuf message <code>clarifai.api.Point</code>
 */
class Point extends \Google\Protobuf\Internal\Message
{
    /**
     * The row location of the point. This has a [0.0-1.0] range with 0.0 being top row and 1.0
     * being the bottom row.
     *
     * Generated from protobuf field <code>float row = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $row = 0.0;
    /**
     * The column location of the point. This has a [0.0-1.0] range with 0.0 being left col and 1.0
     * being the right col.
     *
     * Generated from protobuf field <code>float col = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $col = 0.0;
    /**
     * Depth if applicable for the point.
     *
     * Generated from protobuf field <code>float z = 3;</code>
     */
    protected $z = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $row
     *           The row location of the point. This has a [0.0-1.0] range with 0.0 being top row and 1.0
     *           being the bottom row.
     *     @type float $col
     *           The column location of the point. This has a [0.0-1.0] range with 0.0 being left col and 1.0
     *           being the right col.
     *     @type float $z
     *           Depth if applicable for the point.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The row location of the point. This has a [0.0-1.0] range with 0.0 being top row and 1.0
     * being the bottom row.
     *
     * Generated from protobuf field <code>float row = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * The row location of the point. This has a [0.0-1.0] range with 0.0 being top row and 1.0
     * being the bottom row.
     *
     * Generated from protobuf field <code>float row = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setRow($var)
    {
        GPBUtil::checkFloat($var);
        $this->row = $var;

        return $this;
    }

    /**
     * The column location of the point. This has a [0.0-1.0] range with 0.0 being left col and 1.0
     * being the right col.
     *
     * Generated from protobuf field <code>float col = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getCol()
    {
        return $this->col;
    }

    /**
     * The column location of the point. This has a [0.0-1.0] range with 0.0 being left col and 1.0
     * being the right col.
     *
     * Generated from protobuf field <code>float col = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setCol($var)
    {
        GPBUtil::checkFloat($var);
        $this->col = $var;

        return $this;
    }

    /**
     * Depth if applicable for the point.
     *
     * Generated from protobuf field <code>float z = 3;</code>
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Depth if applicable for the point.
     *
     * Generated from protobuf field <code>float z = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setZ($var)
    {
        GPBUtil::checkFloat($var);
        $this->z = $var;

        return $this;
    }

}

